<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('date', 'DESC')->get();
        $i = 1;
        return view('admin.contact')->with('contacts', $contacts)->with('i', $i);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try
        {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
    
            $to_email = 'varma.mandapati.1@gmail.com';
            $client_email = $request->email;
            $data = array("name" => $request->name, "email" => $request->email, "messages" => $request->message);
            
            Mail::send('mails.contact', $data, function($message) use ($to_email){
                $message->to($to_email)
                ->subject('Someone Filled contact us form');
            });
            
            Mail::send('mails.client', $data,function($message) use ($client_email){
                $message->to($client_email)
                ->subject('Your Response has been recorded - Varma');
            });

            session()->flash('statuscode', 'success');
            return redirect()->back()->with('status', 'Hey there!, Thanks for reaching . Your response is on the way');
        }
        catch(Exception $e)
        {
            session()->flash('statuscode', 'error');
            return redirect()->back()->with('status', 'Oops!, Please fill form again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clear()
    {
        $contacts = Contact::all();
        foreach ($contacts as $c) {
            $c->delete();
        }

        session()->flash('statuscode', 'success');
        return redirect(route('admin.contact'))->with('status', 'Cleared successfully');
    }
}
