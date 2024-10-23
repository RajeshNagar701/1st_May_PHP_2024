<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\country;
use RealRashid\SweetAlert\Facades\Alert; // use Alert;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Mail\welcomemail;
use App\Mail\forgotemail;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_arr = user::all();
        return view('admin.manage_user', ["users" => $user_arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country_arr = country::all();
        return view('website.signup', ["country_arr" => $country_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|alpha:ascii',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'cid' => 'required',
            'img' => 'required'
        ]);

        $data = new user;
 $name=$data->name = $request->name;
 $email=$data->email = $request->email;
  $pass=$request->password;
        $data->password = Hash::make($request->password);
        $data->gender = $request->gender;
        $data->lag = implode(",", $request->lag);
        $data->cid = $request->cid;

        // image upload
        $file = $request->file('img');
        $filename = time() . '_img.' . $file->getClientOriginalExtension(); // 656676576_img.jpg
        $file->move('website/images/users/', $filename);  // use move for move image in public/images

        $data->img = $filename; // name store in db
        
        // mail code
        $mail_data=array("name"=>$name,"email"=>$email,"pass"=>$pass);
        Mail::to($email)->send(new welcomemail($mail_data));

        $data->save();
        Alert::success('Success Title', 'Signup Success');
        return redirect('/signup');
    }

    public function login(Request $request)
    {
        return view('website.login');
    }

    public function login_auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = user::where("email", $request->email)->first(); // single data first()     // ->get(); // arr
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                if ($data->status == "Unblock") {
                    
                    // create session
                    session()->put('ses_username',$data->name); 
                    session()->put('ses_userid',$data->id); 


                    Alert::success('Success', 'Login Success');
                    return redirect('/');
                }else {
                    Alert::error('Failed', 'Login Failed due Blocked Account');
                    return redirect('/login');
                }
            } else {
                Alert::error('Failed', 'Login Failed due wrong Password');
                return redirect('/login');
            }
        } else {
            Alert::error('Failed', 'Login Failed due wrong Email');
            return redirect('/login');
        }
    }

    function user_logout(){

        session()->pull('ses_userid');
		session()->pull('ses_username');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
    }


    public function forgotpass(Request $request)
    {
        return view('website.forgotpass');
    }

    public function insert_forgotpass(Request $request)
    {
        $data=user::where("email",$request->email)->first();
        if($data)
        {
            $email=$data->email;
            $id=$data->id;

            $otp=rand(100000,999999);
            
            session()->put('ses_forgotid',$id); 
            session()->put('ses_otp',$otp); 

            $forgot_data=array("otp"=>session()->get('ses_otp'));
            Mail::to($email)->send(new forgotemail($forgot_data));
            return redirect('/enterotp');
        }
        else
        {
            Alert::error('error', 'Username Not valid');
            return redirect('/forgotpass');
        }
    }

    public function enterotp(Request $request)
    {
        return view('website.enterotp');
    }
    public function insert_enterotp(Request $request)
    {
        if(session()->get('ses_otp')==$request->otp)
        {
            session()->put('ses_reset',"reset");
            session()->pull('ses_otp');
            return redirect('/reset_pass');
        }
        else
        {
            Alert::error('error', 'OTP Not valid or Match');
            return redirect('/enterotp');
        }
    }

    public function reset_pass(Request $request)
    {
        return view('website.reset_pass');
    }

    public function updatereset_pass($id,Request $request)
    {
        $data=user::find($id);
        $data->password=Hash::make($request->new_pass);
        $data->update();
        
        session()->pull('ses_reset');
        session()->pull('ses_forgotid');

        Alert::success('Success', 'Reset Password Success');
        return redirect('/login');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // user profile

    public function userprofile()
    {
        //$data=user::all(); // all data in array
        $data=user::where("id",session()->get('ses_userid'))->first(); // single data 
        //$data=user::where("id",session()->get('ses_userid'))->get(); // get by con data arr 
        return view('website.userprofile',['data'=>$data]);
    }

    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=user::find($id); // all data in array
        $country_arr = country::all();
        return view('website.editprofile', ["country_arr" => $country_arr,"data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|alpha:ascii',
            'cid' => 'required',
        ]);

        $data = user::find($id); // single data
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->lag = implode(",", $request->lag);
        $data->cid = $request->cid;

        // image upload
        if($request->hasfile('img'))
        {
            $old_img=$data->img;
            unlink('website/images/users/'.$old_img);

            $file = $request->file('img');
            $filename = time() . '_img.' . $file->getClientOriginalExtension(); // 656676576_img.jpg
            $file->move('website/images/users/', $filename);  // use move for move image in public/images
            $data->img = $filename; // name store in db
        }  

        $data->update();
        session()->put('ses_username',$request->name); 
        Alert::success('Success', 'Update Success');
        return redirect('/userprofile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = user::find($id);
        $old_img=$data->img;
        unlink('website/images/users/'.$old_img);
        $data->delete();
        Alert::success('Success Delete', 'User Deleted Success');
        return redirect('/manage_user');
    }
}
