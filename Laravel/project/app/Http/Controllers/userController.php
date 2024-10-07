<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\country;
use RealRashid\SweetAlert\Facades\Alert; // use Alert;
use Illuminate\Support\Facades\Hash;

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
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->gender = $request->gender;
        $data->lag = implode(",", $request->lag);
        $data->cid = $request->cid;

        // image upload
        $file = $request->file('img');
        $filename = time() . '_img.' . $file->getClientOriginalExtension(); // 656676576_img.jpg
        $file->move('website/images/users/', $filename);  // use move for move image in public/images

        $data->img = $filename; // name store in db
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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        $data->delete();
        Alert::success('Success Delete', 'User Deleted Success');
        return redirect('/manage_user');
    }
}
