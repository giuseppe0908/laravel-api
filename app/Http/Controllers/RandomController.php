<?php

namespace App\Http\Controllers;

use App\Random;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $random = Random::all();

      return response()->json([
        'data' => $random,
        'success' => true
      ]);
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
     * @param  \App\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function show(Random $random)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function edit(Random $random)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Random $random)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function destroy(Random $random)
    {
        //
    }
}
