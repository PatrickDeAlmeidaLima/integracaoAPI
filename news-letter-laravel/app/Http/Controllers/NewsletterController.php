<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
class NewsletterController extends Controller
{

    /**
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newsletter');
    }

    /**
     * Show the forms for creating a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('aqui');
    }

    /**
     * Store a newly created resource in storage
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Newsletter::isSubscribed($request->user_email)) {
            Newsletter::subscribe($request->user_email);
            return redirect('newsletter')->with('status', "Thanks for subscription!");
        }
        return redirect('newsletter')->with('status', "You already subscribed!!");
    }

    /**
     * Display the specific resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the forms for editing the specified resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove a specified resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
