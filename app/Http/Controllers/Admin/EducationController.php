<?php

namespace App\Http\Controllers\Admin;

use App\Educations;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Displays the education page
     * 
     * @return void
     */
    public function index()
    {
        return view('admin.education')->with('educations', Educations::all());
    }

    /**
     * Store Education
     * 
     * @return void
     */
    public function store(Request $request)
    {
        try
        {
            Educations::create([
                'from' => $request->from,
                'to' => $request->to,
                'title' => $request->title,
                'school' => $request->school
            ]);
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.education'))->with('status', 'Successfully Added Education');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.education'))->with('status', 'Error! Failed to add Education');
        }
    }

    /**
     * Update Education
     * 
     * @return void
     */
    public function update(Request $request, $id)
    {
        try
        {
            $education = Educations::find($id);

            $education->from = $request->from;
            $education->to = $request->to;
            $education->title = $request->title;
            $education->school = $request->school;

            $education->save();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.education'))->with('status', 'Successfully Updated Education');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.education'))->with('status', 'Error! Failed to update Education');
        }
    }

    /**
     * Delete Education
     * 
     * @return void
     */
    public function delete($id)
    {
        try
        {
            $education = Educations::find($id);
            $education->delete();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.education'))->with('status', 'Successfully Deleted Education');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.education'))->with('status', 'Error! Failed to delete Education');
        }
    }
}
