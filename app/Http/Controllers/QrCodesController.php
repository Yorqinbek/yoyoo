<?php

namespace App\Http\Controllers;

use App\Models\AdminUserMessage;
use App\Models\QrCodes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class QrCodesController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QrCodes  $qrCodes
     * @return \Illuminate\Http\Response
     */
    public function show(QrCodes $qrCodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QrCodes  $qrCodes
     * @return \Illuminate\Http\Response
     */
    public function edit(QrCodes $qrCodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QrCodes  $qrCodes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QrCodes $qrCodes)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QrCodes  $qrCodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(QrCodes $qrCodes)
    {
        //
    }

    public function qrcode(Request $request,$id)
    {
        //dd($request->all());
        $request->validate([
            'kod' => 'required'
            //'imageFile.*' => 'mimes:jpeg,jpg|max:2048'
        ]);

        $kod = $request->get('kod');

        $qrcode = QrCodes::where('code', '=', $kod)->first();
        if ($qrcode === null) {
            return back()->with('danger', 'Qr kod mavjud emas');
        }
        else{
            if($qrcode->used){
                return back()->with('danger', 'Bu qrcode dan foydalanib bo`lingan');
            }
            else{
                $user = User::find(Auth::id());
                $user->yo = $user->yo+$qrcode->yo;
                $user->save();
                $qrcode->used = true;
                $qrcode->save();

                $admin_user_message = new adminusermessage([
                    'user_id' => Auth::id(),
                    'shart_id' => $id,
                    'message' => "",
                    'answer' => true
                ]);
                $admin_user_message->save();

                return back()->with('success', 'Qr kod mavjud');
            }
        }

    }
}
