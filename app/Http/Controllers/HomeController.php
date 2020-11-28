<?php

namespace App\Http\Controllers;

use App\Educations;
use App\Portfolio;
use App\Services;
use App\Skills;
use App\Testimonials;
use App\User;
use App\Works;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Finds the only user present in the DB
        $user = User::find(1);
        // Calculates the Age
        $age  = Carbon::parse($user->dob)->age;
        
        $services = Services::all();
        $testimonials = Testimonials::all();
        $educations = Educations::all();
        $works = Works::all();
        $skills = Skills::all();
        $portfolios = Portfolio::all();

        return view('home')
            ->with('user', $user)
            ->with('age', $age)
            ->with('services', $services)
            ->with('testimonials', $testimonials)
            ->with('educations', $educations)
            ->with('works', $works)
            ->with('skills', $skills)
            ->with('portfolios', $portfolios);

    }

    public function download()
    {
        try
        {
            $user = User::find(1);
            $file = public_path(). "\storage\user\Resume.pdf";

            $header = array(
                'Content-Type: application/pdf',
            );
            
            $user->cv_downloads = $user->cv_downloads + 1;
            $user->save();

            // dd($user->cv_downloads);

            return response()->download($file, 'varma_resume.pdf', $header);
        }
        catch(Exception $e)
        {
            return redirect(route('home'));
        }
    }
}
