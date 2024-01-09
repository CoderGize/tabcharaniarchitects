<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expertise;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;

class ExpertiseController extends Controller
{
    public function show_expertise(){

        $expertise = Expertise::latest()->paginate(10);

        return view('admin.expertise.show_expertise',compact('expertise'));

    }

    public function add_expertise(Request $request){

        $expertise = new Expertise;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('expertise', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('expertise/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('expertise/' . $imgname));

            $expertise->img = $imgname;
        }




        $expertise->title = $request->title;
        $expertise->text_lg = $request->text_lg;
        $expertise->text_sm = $request->text_sm;


        $expertise->save();

        return redirect()->back()->with('messgae','Expertiser Added');


    }

    public function update_expertise(Request $request,$id){

        $expertise=Expertise::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('expertise', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('expertise/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('expertise/' . $imgname));

            $expertise->img = $imgname;
        }




        $expertise->title = $request->title;
        $expertise->text_lg = $request->text_lg;
        $expertise->text_sm = $request->text_sm;

        $expertise->save();

        return redirect()->back()->with('messgae','Expertise Updated');


    }


    public function delete_expertise($id){

        $expertise = Expertise::find($id);

        $expertise->delete();

        return redirect()->back()->with('message', 'Expertise Deleted');
    }

}
