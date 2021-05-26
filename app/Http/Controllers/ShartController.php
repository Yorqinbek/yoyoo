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
        if(\Illuminate\Support\Facades\Auth::check())
        {
            $tips = Tip::all();
            return view('admin.add_shart',compact('tips'));
        }
        return redirect('/login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'yo' => 'required',
        ]);

        $tiplar = '';

        foreach ($request->get('types') as $tip){
            $tiplar.=$tip.',';
        }

        $sharts = new shart([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'yo' => $request->get('yo'),
            'tip_name' => $request->get('tips'),
            'type' => $tiplar,
        ]);
        $sharts->save();

        return redirect('/admin/addshart')->with('success', 'Shart saved!');

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
