<?php

namespace App\Http\Controllers;

use App\Models\Shart;
use App\Models\ShartAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ShartAnswerController extends Controller
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
    public function store(Request $req,$id)
    {

        $shart_id = $id;

        $user_id = Auth::id();

        $req->validate([
            'imageFile' => 'required'
            //'imageFile.*' => 'mimes:jpeg,jpg|max:2048'
        ]);

        if ($req->hasfile('imageFile')) {
            foreach ($req->file('imageFile') as $file) {
                $name = uniqid().'_'.date("Ymd").'.'.$file->extension();
                $file->move(public_path('uploads'), $name);
                $imgData[] = $name;
            }
            $shart_images = implode(",", $imgData);
            $shart_answer = new shartanswer([
                'user_id' => $user_id,
                'shart_id' => $shart_id,
                'answer_media' => $shart_images
            ]);

            $shart_answer->save();

            $shart = Shart::find($id);

            if(empty($shart->user_check) || !isset($shart->user_check)){
                $shart->user_check = Auth::id();
            }
            else{
                $shart->user_check = $shart->user_check.','.Auth::id();
            }

            $shart->save();

            return back()->with('success', 'Javobingiz qabul qilindi! Tez orada tekshirib natijasi sizga bildiramiz');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShartAnswer  $shartAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(ShartAnswer $shartAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShartAnswer  $shartAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(ShartAnswer $shartAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShartAnswer  $shartAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShartAnswer $shartAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShartAnswer  $shartAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShartAnswer $shartAnswer)
    {
        //
    }
}
