<?php

namespace App\Http\Controllers;

use App\Models\Shart;
use App\Models\Tip;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ShartController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $tips = Tip::all();
        return view('admin.add_shart',compact('tips'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'phone.*' => 'required',
            'email' => 'required',
            'email.*' => 'required'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shart  $shart
     * @return \Illuminate\Http\Response
     */
    public function show(Shart $shart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shart  $shart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shart $shart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shart  $shart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shart $shart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shart  $shart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shart $shart)
    {
        //
    }
}
