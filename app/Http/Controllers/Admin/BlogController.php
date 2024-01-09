<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function show_blog(){

        $blog = blog::latest()->paginate(10);

        return view('admin.blog.show_blog',compact('blog'));

    }

    public function add_blog(Request $request){

        $blog = new blog;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('blog', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('blog/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('blog/' . $imgname));

            $blog->img = $imgname;
        }



        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->text = $request->text;



        $blog->save();

        return redirect()->back()->with('messgae','Blog Added');


    }

    public function update_blog(Request $request,$id){

        $blog=blog::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('blog', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('blog/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('blog/' . $imgname));

            $blog->img = $imgname;
        }



        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->text = $request->text;

        $blog->save();

        return redirect()->back()->with('messgae','Blog Updated');


    }


    public function delete_blog($id){

        $blog = blog::find($id);

        $blog->delete();

        return redirect()->back()->with('message', 'Blog Deleted');
    }

}
