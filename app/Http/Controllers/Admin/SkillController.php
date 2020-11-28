<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Skills;
use Exception;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display skills page
     * 
     * @return void
     */
    public function index()
    {
        return view('admin.skills')->with('skills', Skills::all());
    }

    public function store(Request $request)
    {
        try
        {
            Skills::create([
                'title' => $request->title,
                'profieciency' => $request->profieciency,
                'skill_type' => $request->skill_type
            ]);
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.skills'))->with('status', 'Added Skill Successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.skills'))->with('status', 'Error! Failed to add skill');
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $skill = Skills::find($id);

            $skill->title = $request->title;
            $skill->profieciency = $request->profieciency;
            $skill->skill_type = $request->skill_type;

            $skill->save();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.skills'))->with('status', 'Updated Skill Successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.skills'))->with('status', 'Error! Failed to Updated Skill');
        }
    }

    public function delete($id)
    {
        try
        {
            $skill = Skills::find($id);
            $skill->delete();

            session()->flash('statuscode', 'success');
            return redirect(route('admin.skills'))->with('status', 'Deleted Skill Successfully');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.skills'))->with('status', 'Error! Failed to Delete Skill');
        }
    }
}
