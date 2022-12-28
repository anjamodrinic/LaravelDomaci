<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkiResource;
use App\Models\Ski;
use Illuminate\Http\Request;

class SkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static $wrap = 'skis';

    public function index()
    {
        $skis = Ski::all();

        return SkiResource::collection($skis);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function show(Ski $ski)
    {
        return new SkiResource($ski);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function edit(Ski $ski)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ski $ski)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ski  $ski
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ski $ski)
    {
        //
    }
}