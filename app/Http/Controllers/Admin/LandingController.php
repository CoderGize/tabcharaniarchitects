<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;

class LandingController extends Controller
{
    public function show_landing(){

        $landing = Landing::find(1);

        return view('admin.landing.show_landing',compact('landing'));
    }

    public function update_landing(Request $request,$id){

        $landing = Landing::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('landing', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('landing/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('landing/' . $imgname));

            $landing->img = $imgname;
        }


        $landing->text = $request->text;

        $landing->save();

        return redirect('/admin/show_landing')->with('message', 'Landing Updated');

    }
}
