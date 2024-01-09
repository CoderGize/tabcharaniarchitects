<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show_portfolio(){

        $portfolio = Portfolio::latest()->paginate(10);

        return view('admin.portfolio.show_portfolio',compact('portfolio'));
    }

    public function add_portfolio(Request $request){

        $portfolio = new Portfolio;

        $portfolio->section_id=$request->section_id;
        $portfolio->title=$request->title;
        $portfolio->text=$request->text;

        $portfolio->save();


        return redirect()->back()->with('message','Portfolio Added');

    }

    public function update_portfolio(Request $request,$id){

        $portfolio=Portfolio::find($id);

        $portfolio->section_id = $request->section_id;
        $portfolio->title = $request->title;
        $portfolio->text = $request->text;

        $portfolio->save();

        return redirect()->back()->with('messgae','Portfolio Updated');


    }

    public function delete_portfolio($id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect()->back()->with('message', 'Portfolio Deleted');
    }
}
