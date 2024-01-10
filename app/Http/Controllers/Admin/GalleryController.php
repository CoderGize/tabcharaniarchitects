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
    public function show_gallery($id)
    {

        $gallery = Gallery::where('portfolio_id', $id)->latest()->paginate(10);

        $portfolio = Portfolio::find($id);

        return view('admin.gallery.show_gallery',compact('gallery','portfolio'));
    }


    public function add_gallery(Request $request, $id)
    {
        $request->validate([
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $portfolio = Portfolio::find($id);

        if ($request->hasFile('img')) {
            $images = $request->file('img');

            foreach ($images as $image) {
                $gallery = new Gallery;
                $gallery->portfolio_id = $portfolio->id;

                $imgname = Str::random(20) . '.' . $image->getClientOriginalExtension();

                // Save the original image
                $image->move('gallery', $imgname);

                // Change the image quality using Intervention Image
                $img = Image::make(public_path('gallery/' . $imgname));
                $img->encode($img->extension, 10)->save(public_path('gallery/' . $imgname));

                $gallery->img = $imgname;
                $gallery->save();
            }
        }

        return redirect()->back()->with('message', 'Gallery added');
    }

    public function delete_gallery($id)
    {

        $gallery = Gallery::find($id);

        $gallery->delete();

        return redirect()->back()->with('message', 'Gallery Deleted');


    }

   


}
