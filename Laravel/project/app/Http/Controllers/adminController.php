<?php

namespace App\Http\Controllers;
use App\Models\admin;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
USE Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function adminlogin_auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = admin::where("email", $request->email)->first(); // single data first()     // ->get(); // arr
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
               
                    session()->put('ses_adminname',$data->name); 
                    session()->put('ses_adminid',$data->id); 
                    Alert::success('Success', 'Login Success');
                    return redirect('/dashboard');

            } else {
                Alert::error('Failed', 'Login Failed due wrong Password');
                return redirect('/admin_login');
            }
        } else {
            Alert::error('Failed', 'Login Failed due wrong Email');
            return redirect('/admin_login');
        }
    }

    function admin_logout(){

        session()->pull('ses_adminid');
		session()->pull('ses_adminname');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/admin_login');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
