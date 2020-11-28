<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Exception;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display portfolio page
     * 
     * @return void
     */
    public function index()
    {
        return view('admin.portfolio')->with('portfolios', Portfolio::all());
    }

    public function store(Request $request)
    {
        try
        {
            $ext = $request->image->getClientOriginalExtension();
            
            $portfolio = Portfolio::create([
                'title' => $request->title,
                'link' => $request->link,
                'category' => $request->category,
                'image' => $request->image->storeAs('portfolio/images', $request->title . $request->category . '.' .$ext)
            ]);
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.portfolio'))->with('status', 'Portfolio Added Successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.portfolio'))->with('status', 'Error! Failed to add Portfolio');
        }

    }

    public function update(Request $request, $id)
    {
        try
        {
            $portfolio = Portfolio::find($id);
            dd($request->image1);
            $ext = $request->image->getClientOriginalExtension();

            $portfolio->title = $request->title;
            $portfolio->link = $request->link;
            $portfolio->category = $request->category;

            $portfolio->image = $request->image->storeAs('portfolio/images',$request->title . $request->category . '.' .$ext);

            $portfolio->save();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.portfolio'))->with('status', 'Portfolio updated successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.portfolio'))->with('status', 'Error! Failed to update portfolio');
        }
    }

    public function delete($id)
    {
        try
        {
            $portfolio = Portfolio::find($id);
            $portfolio->delete();
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.portfolio'))->with('status', 'Portfolio Deleted successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.portfolio'))->with('status', 'Error! Failed to delete portfolio');
        }
    }
}
