<?php

namespace App\Http\Controllers;

use App\dokumen;
use App\Http\Requests\StoredokumenRequest;
use App\Http\Requests\UpdatedokumenRequest;

class DokumenController extends Controller
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
     * @param  \App\Http\Requests\StoredokumenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredokumenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(dokumen $dokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedokumenRequest  $request
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedokumenRequest $request, dokumen $dokumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokumen $dokumen)
    {
        //
    }
}
