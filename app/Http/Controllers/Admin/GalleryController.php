<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function show_gallery($id){

        $gallery = Gallery::where('portfolio_id', $id)->first();
        $portfolio = Portfolio::find($id);

        return view('admin.gallery.show_gallery',compact('gallery','portfolio'));
    }

    // public function show_all_gallery($id){

    //     $gallery =  Gallery::where('portfolio_id', $id)->all();
    //     $portfolio = Portfolio::find($id);
    //     $sectionID=$portfolio->section_id;

    //     return view('admin.gallery.show_all_gallery',compact('gallery'));

    // }

    public function show_all_gallery($sectionId) {

        $portfolio = Portfolio::where('section_id', $sectionId)->get();
        $gallery  = Gallery::where('portfolio_id', $portfolio->id)->get();


        return view('admin.gallery.show_all_gallery', compact('portfolio', 'gallery'));
    }


    public function add_gallery(Request $request , $id){

        $portfolio = Portfolio::find($id);
        $gallery=new Gallery;

        $gallery->portfolio_id=$portfolio->id;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('gallery', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('gallery/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('gallery/' . $imgname));

            $gallery->img = $imgname;
        }

        $gallery->save();

        return redirect()->back()->with('message','gallery Added');

    }
}
