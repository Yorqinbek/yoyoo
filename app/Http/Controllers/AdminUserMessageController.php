<?php

namespace App\Http\Controllers;

use App\Models\AdminUserMessage;
use App\Models\Shart;
use App\Models\ShartAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserMessageController extends Controller
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
    public function store(Request $request,$id)
    {


        $shart_answer = \App\Models\ShartAnswer::findOrFail($id);



        $user_id = $shart_answer->user_id;

        $shart_id = $shart_answer->shart_id;

        if($request->has('tasdiqla')){
            $shart = Shart::find($shart_id);
            $explode_id_user_check = array_map('intval', explode(',', $shart->user_check));
            unset($explode_id_user_check[array_search( Auth::id(), $explode_id_user_check )]);
            $shart->user_check = implode(",", $explode_id_user_check);

            if(empty($shart->user_submit) || !isset($shart->user_submit)){
                $shart->user_submit = Auth::id();
            }
            else{
                $shart->user_submit = $shart->user_submit.','.Auth::id();
            }
            $shart->save();

            $user = User::find($user_id);
            $user->yo = $user->yo+$shart->yo;
            $user->save();

            $admin_user_message = new adminusermessage([
                'user_id' => $user_id,
                'shart_id' => $shart_id,
                'message' => $request->get('message'),
                'answer' => true
            ]);
            $admin_user_message->save();

            $shart_answer->checking = true;
            $shart_answer->save();

            return redirect('/admin/xabarlar/');
        }
        else{
            $shart = Shart::find($shart_id);
            $explode_id_user_check = array_map('intval', explode(',', $shart->user_check));
            unset($explode_id_user_check[array_search( Auth::id(), $explode_id_user_check )]);
            $shart->user_check = implode(",", $explode_id_user_check);
            $shart->checking = true;
            $shart->save();

            $admin_user_message = new adminusermessage([
                'user_id' => $user_id,
                'shart_id' => $shart_id,
                'message' => $request->get('message'),
                'answer' => false
            ]);
            $admin_user_message->save();

            $shart_answer->checking = true;
            $shart_answer->save();

            return redirect('/admin/xabarlar/');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminUserMessage  $adminUserMessage
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUserMessage $adminUserMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminUserMessage  $adminUserMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminUserMessage $adminUserMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUserMessage  $adminUserMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminUserMessage $adminUserMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUserMessage  $adminUserMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUserMessage $adminUserMessage)
    {
        //
    }
}
