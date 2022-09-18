<?php

namespace App\Http\Controllers;

use App\Models\Wiki;
use App\Http\Requests\StoreWikiRequest;
use App\Http\Requests\UpdateWikiRequest;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json(Wiki::all());
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
     * @param  \App\Http\Requests\StoreWikiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWikiRequest $request)
    {
        $wiki = new Wiki;
        $wiki->title = $request->title;
        $wiki->tags = $request->tags;
        $wiki->created_by = $request->created_by;
        $wiki->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function show(Wiki $wiki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function edit(Wiki $wiki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWikiRequest  $request
     * @param  \App\Models\Wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWikiRequest $request, Wiki $wiki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wiki $wiki)
    {
        //
    }
}
