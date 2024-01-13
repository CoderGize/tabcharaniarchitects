<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\blog;
use App\Models\brandee;
use App\Models\Expertise;
use App\Models\Gallery;
use App\Models\Landing;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Social;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAbout(){

        $about = About::find(1);

        return response()->json($about);

    }

    public function getLanding(){

        $landing = Landing::find(1);

        return response()->json($landing);

    }

    public function getPartner(){

        $partner = Partner::all();

        return response()->json($partner);

    }

    public function getExpertise(){

        $expertise = Expertise::all();

        return response()->json($expertise);

    }

    public function getGallery(){

        $gallery = Gallery::all();

        return response()->json($gallery);

    }

    public function getBrandee(){

        $brandee = brandee::all();

        return response()->json($brandee);

    }

    public function getBlog(){

        $blog = blog::all();

        return response()->json($blog);

    }

    public function getPortfolio(){

        $portfolio = Portfolio::all();

        return response()->json($portfolio);

    }

    public function getSocial(){

        $social = Social::find(1);

        return response()->json($social);

    }

}
