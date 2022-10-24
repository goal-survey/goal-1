<?php

namespace App\Http\Controllers;

use App\Models\submitform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoresubmitformRequest;
use App\Http\Requests\UpdatesubmitformRequest;

class SubmitformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submit = new submitform();
        $submit->user_id = Auth::user()->id;
        $submit->survey_id = Auth::survey()->id;
        $submit->save();
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
     * @param  \App\Http\Requests\StoresubmitformRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubmitformRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\submitform  $submitform
     * @return \Illuminate\Http\Response
     */
    public function show(submitform $submitform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\submitform  $submitform
     * @return \Illuminate\Http\Response
     */
    public function edit(submitform $submitform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubmitformRequest  $request
     * @param  \App\Models\submitform  $submitform
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubmitformRequest $request, submitform $submitform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\submitform  $submitform
     * @return \Illuminate\Http\Response
     */
    public function destroy(submitform $submitform)
    {
        //
    }
}
