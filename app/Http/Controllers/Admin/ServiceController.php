<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display service page
     * 
     * @return void
     */
    public function index()
    {
        return view('admin.service')->with('services', Services::all());
    }

    /**
     * Store a newly create service
     * 
     * @return void
     */
    public function store(Request $request)
    {
        try
        {
            Services::create([
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon
            ]);
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.services'))->with('status', 'Service added successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.services'))->with('status', 'Error! Failed to add service');
        }
    }

    /**
     * Update the service
     * 
     * $params - id
     * 
     * @return void
     */
    public function update(Request $request,$id)
    {
        try
        {
            $service = Services::find($id);
            $service->update([
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon
            ]);
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.services'))->with('status', 'Service updated successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.services'))->with('status', 'Error! Failed to update service');
        }
    }

    /**
     * Delete the service
     * 
     * $params - id
     * 
     * @return void
     */
    public function delete(Request $request, $id)
    {
        try
        {
            $service = Services::find($id);
            $service->delete();
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.services'))->with('status', 'Service deleted successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.services'))->with('status', 'Error! Failed to delete service');
        }
    }
}
