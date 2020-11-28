<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Works;
use Exception;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Displays the work page
     * 
     * @return void
     */
    public function index()
    {
        return view('admin.work')->with('works', Works::all());
    }

    /**
     * Stores work
     * 
     * @return void
     */
    public function store(Request $request)
    {
        try
        {
            $from = $request->from_month . '-' . $request->from_year;
            $from = $request->from_month . '-' . $request->from_year;
            if($request->to_month != "")
            {
                $to = $request->to_month . '-' . $request->to_year;
            }
            else
            {
                $to = $request->to_year;
            }
            
            Works::create([
                'company' => $request->company,
                'job' => $request->job,
                'from' => $from,
                'to' => $to
            ]);
    
            session()->flash('status', 'success');
            return redirect(route('admin.work'))->with('status', 'Added work successfully');
        }
        catch(Exception $e)
        {
            session()->flash('status', 'error');
            return redirect(route('admin.work'))->with('status', 'Error! Failed to add work');
        }

    }

    public function update(Request $request, $id)
    {
        $work = Works::find($id);

            $from = $request->from_month . '-' . $request->from_year;
            if($request->to_month != "")
            {
                $to = $request->to_month . '-' . $request->to_year;
            }
            else
            {
                $to = $request->to_year;
            }

            $work->company = $request->company;
            $work->job = $request->job;
            $work->from = $from;
            $work->to = $to;

            $work->save();
        try
        {
            

            session()->flash('status', 'success');
            return redirect(route('admin.work'))->with('status', 'Updated work successfully');
        }
        catch(Exception $e)
        {
            session()->flash('status', 'error');
            return redirect(route('admin.work'))->with('status', 'Error! Failed to update work' );
        }
    }

    public function delete($id)
    {
        try
        {
            $work = Works::find($id);
            $work->delete();

            session()->flash('status', 'success');
            return redirect(route('admin.work'))->with('status', 'Deleted Successfully');
        }
        catch(Exception $e)
        {
            session()->flash('status', 'error');
            return redirect(route('admin.work'))->with('status', 'Error! Failed to delete work');
        }
    }
}
