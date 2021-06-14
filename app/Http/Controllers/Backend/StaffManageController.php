<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;


class StaffManageController extends Controller
{
    public function staffManage()
    {
        $staffs=Staff::paginate(6);
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


    $request->validate([
        'name' => 'required',
        'workingArea' => 'required',
        'email' => 'email|required|unique:staff',
        'contact' => 'required|min:11|numeric|unique:staff',
        'address' => 'required',
    ]);
        Staff::create([
            'file' => $file_name,
            'name'=>$request->name,
            'workingArea' => $request->workingArea,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address]);

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
    public function staffEdit($id)
    {

     $staff = Staff::find($id);
     // dd($user);
     return view('backend.content.staffEdit',compact('staff'));

    }
    public function staffUpdate(Request $request,$id)
    {
     // dd($request->all());
     $staff = Staff::find($id);


     $staff->update([
           'name'=>$request->input('name'),
           'workingArea'=>$request->input('workingArea'),
           'email'=>$request->input('email'),
           'contact'=>$request->input('contact'),
           'address'=>$request->input('address'),




     ]);

     return redirect()->route('staff')->with('success','Details Updated Successfully');
    }

}
