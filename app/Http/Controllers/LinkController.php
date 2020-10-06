<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        return Inertia::render( 'Links/Index', [
            'links' => Link::paginate(),
        ] );
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Link $link )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Link $link )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Link $link )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( Link $link )
    {
        //
    }
}
