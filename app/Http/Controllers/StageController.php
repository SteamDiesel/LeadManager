<?php

namespace App\Http\Controllers;

use App\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $stage = new Stage;
        $stage->title = $request->title;
        $stage->description = $request->description;
        $stage->order = $request->order;
        $stage->save();


        return response()->json([
            'stage' => $stage,
            'message' => 'stage created'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(Stage $stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(Stage $stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stage $stage)
    {
        //
      
        $stage->title = $request->title;
        $stage->description = $request->description;
        $stage->order = $request->order;
        $stage->save();


        return response()->json([
            'stage' => $stage,
            'message' => 'Stage updated.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stage $stage)
    {
        //
    }
}
