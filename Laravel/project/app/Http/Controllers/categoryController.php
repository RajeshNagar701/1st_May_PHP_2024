<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert; // use Alert;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_arr=category::all();
        return view('admin.manage_categories',['category_arr'=>$category_arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=new category;
       $data->cate_name=$request->cate_name;

       // image upload
       $file=$request->file('cate_img');		
       $filename=time().'_img.'.$file->getClientOriginalExtension(); // 656676576_img.jpg
       $file->move('admin/assests/img/categories/',$filename);  // use move for move image in public/images
    
       $data->cate_img=$filename; // name store in db
       $data->save();
       Alert::success('Success Title', 'Categories Add Success');
       return redirect('/add_categories');
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
        $data=category::find($id);
        $cate_img=$data->cate_img;
        unlink('admin/assets/img/categories/'.$cate_img);
		$data->delete();
        Alert::success('Success Delete', 'Categories Deleted Success');
		return redirect('/manage_categories');
    }
}
