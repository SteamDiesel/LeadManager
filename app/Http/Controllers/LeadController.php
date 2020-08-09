<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Stage;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stages = Stage::all(); 
        $leads = Lead::all();
        return view('leads.index', ['leads' => $leads, 'stages' => $stages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('leads.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $lead = new Lead;
        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->notes = $request->notes;
        $lead->source = $request->source;

        $lead->save();
        
        return redirect('/leads/'. $lead->id . '/edit');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
        
        return view('leads.edit', $lead);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
        
        return view('leads.edit', $lead);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->notes = $request->notes;
        $lead->source = $request->source;

        $lead->save();

        return view('leads.edit', $lead);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
