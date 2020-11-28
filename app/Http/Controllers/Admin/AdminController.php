<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Displays the Admin dashboard
     * 
     * @return void
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.dashboard')
        ->with('downloads', $user->cv_downloads)
        ->with('contacts', Contact::all());
    }

    /**
     * Display the settings page
     * 
     * @return void
     */
    public function settings()
    {
        $user = User::find(1);
        return view('admin.settings')->with('user', $user);
    }

    /**
     * Store User Data
     * 
     * @return void
     */
    public function store(Request $request)
    {
        try
        {
            $user = User::find(1);
            // dd($user);
            $input  = $request->day . '/' . $request->month . '/' . $request->year;
            $format = 'd/m/Y';
            $date = Carbon::createFromFormat($format, $input);
            
            if($request->password)
            {
                $user->password = Hash::make($request->password);
            }
    
            $user->name = $request->name;
            $user->dob = $date;
            $user->mobile = $request->mobile;
            $user->professions = $request->professions;
            $user->bio = $request->bio;
            $user->linkedin = $request->linkedin;
            $user->facebook = $request->facebook;
            $user->twitter = $request->twitter;
            $user->github = $request->github;
    
            if($request->hasFile('image1'))
            {
                $image = $request->image1->storeAs('user/images', 'Main.png');
                $user->deleteImage1();
                $user->image1 = $image;
            }
            if($request->hasFile('image2'))
            {
                $image = $request->image2->storeAs('user/images', 'Main2.png');
                $user->deleteImage2();
                $user->image2 = $image;
            }
            if($request->hasFile('resume'))
            {
                $resume = $request->resume->storeAs('user', 'Resume.pdf');
                // $user->deleteResume();
                $user->resume = $resume;
            }
    
            $user->color = $request->color;

            $user->save();
    
            session()->flash('statuscode', 'success');
            return redirect(route('admin.settings'))->with('status', 'Successfully Updated!');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect(route('admin.settings'))->with('status', 'Error! Failed to Update!');
        }
    }
}
