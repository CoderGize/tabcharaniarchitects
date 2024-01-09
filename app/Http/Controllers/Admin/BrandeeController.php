<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brandee;
use Illuminate\Http\Request;

class BrandeeController extends Controller
{
    public function show_brandee(){

        $brandee = Brandee::latest()->paginate(10);

        return view('admin.brandee.show_brandee',compact('brandee'));

    }

    public function add_brandee(Request $request){

        $brandee = new brandee;

        $brandee->title = $request->title;

        $brandee->save();

        return redirect()->back()->with('messgae','Brandee Added');


    }

    public function update_brandee(Request $request,$id){

        $brandee=brandee::find($id);

        $brandee->title = $request->title;

        $brandee->save();

        return redirect()->back()->with('messgae','Brandee Updated');


    }


    public function delete_brandee($id){

        $brandee = brandee::find($id);

        $brandee->delete();

        return redirect()->back()->with('message', 'Brandee Deleted');
    }
}
