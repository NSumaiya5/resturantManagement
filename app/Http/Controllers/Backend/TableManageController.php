<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableManageController extends Controller
{
    public function  tableManage()
    {
        $tables=Table::all();
        return view('backend.content.tableManage',compact('tables'));
    }

    public function tableCreate(Request $request)
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
    Table::create([
            'file' => $file_name,
            'capacity' => $request->capacity,
            'price'=>$request->price]);



            return redirect()->back();
    }
    public function tableDelete($id)
   {
    // dd($id);
       //first get the product
       $tables = Table::find($id);


       //then delete it
       $tables->delete();

       return redirect()->back();
   }
}







