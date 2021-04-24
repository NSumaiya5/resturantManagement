<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;


class StaffManageController extends Controller
{
    public function staffManage()
    {
        $staffs=Staff::all();
        return view('backend.content.staffManage',compact('staffs'));
    }

    public function staffCreate(Request $request)
    {
        // dd($request->all());
    $file_name='';
    // step:1 check req has file

    if($request->hasFile('picture'))
    {
        // file is valid?

        $file=$request->file('picture');
        if($file->isvalid());
        {
            // generate unique file name

            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

            // store image local directory

            $file->storeAs('photo',$file_name);
        }
    }
        Staff::create([
            'file' => $file_name,
            'name'=>$request->name,
            'workingArea' => $request->workingArea,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'password'=>$request->password]);

            return redirect()->back();
    }
    public function staffDelete($id)
    {
     // dd($id);
        //first get the product
        $staffs = Staff::find($id);


        //then delete it
        $staffs->delete();

        return redirect()->back();
    }

}
