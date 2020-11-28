<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonials;
use Exception;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Displays the testimonials page
     */
    public function index()
    {
        return view('admin.testimonial')->with('testimonials', Testimonials::all());
    }

    /**
     * Store the testimonial
     */
    public function store(Request $request)
    {
        try
        {
            $testimonial = Testimonials::create([
                'name' => $request->name,
                'description' => $request->description,
                'designation' => $request->designation,
            ]);
            
            $testimonial->image = $request->image->storeAs('images', $testimonial->id.'.png');
            $testimonial->save();
            session()->flash('statuscode', 'success');
            return redirect(route('admin.testimonial'))->with('status', 'Testimonial Added successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.testimonial'))->with('status', 'Error! Failed to add Testimonial');
        }
    }

    /**
     * Update the testimonial
     * 
     * $params - id
     * 
     * @return void
     */
    public function update(Request $request, $id)
    {
        
        try
        {
            $testimonial = Testimonials::find($id);
            
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->designation = $request->designation;
            if($request->hasFile('image'))
            {
                $image = $request->image->storeAs('images', 'testimonial'.$testimonial->id . '.png');
                // $testimonial->deleteImage();
                $testimonial->image = $image;
            }
            
            $testimonial->save();
            
            session()->flash('statuscode', 'success');
            return redirect(route('admin.testimonial'))->with('status', 'Testimonial Updated successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.testimonial'))->with('status', $e);
        }
    }

    /**
     * Delete the testimonial
     * 
     * @return void
     */
    public function delete($id)
    {
        try
        {
            $testimonial = Testimonials::find($id);
            $testimonial->delete();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.testimonial'))->with('status', 'Testimonial Deleted successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.testimonial'))->with('status', 'Error! Failed to Delete Testimonial');
        }
    }
}
