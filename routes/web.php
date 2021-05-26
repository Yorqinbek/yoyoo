<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    if(\Illuminate\Support\Facades\Auth::check())
    {
        return redirect('/home');
    }
    return redirect('/login');

});

Route::get('/register/{username?}', function ($username) {
    if(\Illuminate\Support\Facades\Auth::check())
    {
        return redirect('/home');
    }
    else{
        $user = User::where('username', '=', $username)->first();
        if ($user === null) {
            abort(404);
        }
        else{
            return view('auth.register2');
        }
    }

});


Route::post('/register/{username?}', [\App\Http\Controllers\HomeController::class, 'create_with_ref'])->name('register2');;


//admin
Route::get('/admin/addshart', [\App\Http\Controllers\ShartController::class, 'create'])->name('addshart');
Route::post('/admin/addshart', [\App\Http\Controllers\ShartController::class, 'store'])->name('saveshart');
Route::get('admin/', [\App\Http\Controllers\HomeController::class, 'admin'])->middleware('admin');

Route::get('/admin/xabarlar', function () {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        //$shart_answers = \App\Models\ShartAnswer::all();
        $shart_answers = DB::table('shart_answers')->select('shart_answers.id','shart_answers.created_at','users.username','sharts.title','shart_answers.checking')
            ->join('users', 'users.id', '=', 'shart_answers.user_id')
            ->join('sharts', 'sharts.id', '=', 'shart_answers.shart_id')
            ->get();


        //return json_decode($shart_answers);

        return view('admin.xabarlar',compact('shart_answers'));
    }
    return redirect('/login');


})->name('messages');

Route::get('/admin/users', function () {


    if(\Illuminate\Support\Facades\Auth::check())
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    return redirect('/login');


})->name('users_table');

Route::get('/admin/users/update/{id}', function ($id) {


    if(\Illuminate\Support\Facades\Auth::check())
    {
        $users = User::find($id);
        return view('admin.update',compact('users'));
    }
    return redirect('/login');


})->name('users_update');

Route::post('/admin/users/update/{id}', [\App\Http\Controllers\HomeController::class, 'update_user_yo']);

Route::get('/admin/xabarlar/{id}', function ($id) {


    if(\Illuminate\Support\Facades\Auth::check())
    {
        $shart_answers = DB::table('shart_answers')
            ->join('users', 'users.id', '=', 'shart_answers.user_id')
            ->join('sharts', 'sharts.id', '=', 'shart_answers.shart_id')
            ->where('shart_answers.id', '=',$id)
            ->get();


        //return json_decode($shart_answers);

        return view('admin.bittaxabar',compact('shart_answers'));
    }
    return redirect('/login');
});

Route::post('/admin/xabarlar/{id}', [\App\Http\Controllers\AdminUserMessageController::class, 'store']);



//users
Route::get('/home', function () {



    if(\Illuminate\Support\Facades\Auth::check())
    {
        $view = false;

        $sharts = \App\Models\Shart::all();
        $bajarilgan_shart_idlari = array();
        foreach ($sharts as $shart) {
            $explode_id = array_map('intval', explode(',', $shart->user_submit));
            $id_user_check = array_search(\Illuminate\Support\Facades\Auth::id(), $explode_id, true);
            if ($id_user_check > -1) {
                array_push($bajarilgan_shart_idlari, $shart->id);
            }
        }
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }
        return view('home', compact('sharts', 'bajarilgan_shart_idlari','view'));
    }
    return redirect('/login');

})->middleware('auth');

Route::get('/home/shart/{id}', function ($id) {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        $user_shart_status = 0;

        //shartni oldik
        $shart = \App\Models\Shart::findOrFail($id);

        //shartni bajargan user idlarini stringdan massivga uzgartirdik
        $explode_id_answer = array_map('intval', explode(',', $shart->user_submit));

        //shartni uzatganlarni user idlarini stringdan massivga uzgartirdik
        $explode_id_user_check = array_map('intval', explode(',', $shart->user_check));

        //shartni bajargan massividan current user idni qidiramz
        $id_user_answer = array_search(\Illuminate\Support\Facades\Auth::id(), $explode_id_answer, true);

        //shartni uzatganlar massividan current user idni qidiramz
        $id_user_check = array_search(\Illuminate\Support\Facades\Auth::id(), $explode_id_user_check, true);

        if ($id_user_answer > -1) {
            $user_shart_status = 1;
        }
        elseif ($id_user_check > -1)
        {
            $user_shart_status = 2;
        }
        else{
            $user_shart_status = 0;
        }
        $view = false;
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }
        return view('users.shartview',compact('shart','user_shart_status','view'));
    }
    return redirect('/login');
});

Route::post('/home/shart/{id}', [\App\Http\Controllers\ShartAnswerController::class, 'store']);
Route::post('/home/qrcode/{id}', [\App\Http\Controllers\QrCodesController::class, 'qrcode'])->name('qrcheck');

Route::get('/home/xabarlar', function () {


    if(\Illuminate\Support\Facades\Auth::check())
    {
        $admin_user_messages = DB::table('admin_user_messages')->select('admin_user_messages.id','admin_user_messages.message','admin_user_messages.answer','admin_user_messages.view','sharts.title','sharts.body','sharts.yo','admin_user_messages.created_at')
            ->join('sharts', 'sharts.id', '=', 'admin_user_messages.shart_id')
            ->where('user_id', '=',\Illuminate\Support\Facades\Auth::id())->get();
        $view = false;
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }
        return view('users.xabarlar',compact('admin_user_messages','view'));
    }
    return redirect('/login');

})->name('xabarlar');

Route::get('/home/xabarlar/{id}', function ($id) {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        $admin_user_message = DB::table('admin_user_messages')->select('admin_user_messages.id','admin_user_messages.message','admin_user_messages.answer','admin_user_messages.view','sharts.title','sharts.body','sharts.yo','admin_user_messages.created_at')
            ->join('sharts', 'sharts.id', '=', 'admin_user_messages.shart_id')
            ->where('admin_user_messages.id', '=',$id)->get();


        $message = \App\Models\AdminUserMessage::findOrFail($id);
        $message->view = 1;
        $message->save();

        $view = false;
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }

        return view('users.bittaxabar',compact('admin_user_message','view'));
    }
    return redirect('/login');

});
Route::get('/home/video/{id}', function ($id) {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        $view = false;
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }
        return view('users.videostream',compact('view'));
    }
    return redirect('/login');


});
Route::get('/home/stream', function () {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        $video_path = 'images/beeline.mp4';

        $tmp = new \App\Http\VideoStream($video_path);
        $tmp->start();
    }
    return redirect('/login');

})->name('stream');

Route::get('/home/money', function () {

    if(\Illuminate\Support\Facades\Auth::check())
    {
        $user = User::find(Auth::id());

        $view = false;
        $messages = DB::table('admin_user_messages')->where('view','=',0);
        if($messages->count()>0){
            $view = true;
        }
        return view('users.money',compact('view','user'));
    }
    return redirect('/login');

})->name('money');

Route::post('/home/money', function (\Illuminate\Http\Request $request) {

    $request->validate([
        'raqam' => 'required',
        'miqdor' => 'required'

    ]);
    $botToken = "1890589983:AAFogGhatwMHS7V4oZ1yJ5o3up3MxK7wdDY";
    $chat_id = "@uzim_uchun_test";
    $message = "User id:".Auth::id()."\nRaqam:".$request->raqam."\nyo.:".$request->miqdor;
    $bot_url    = "https://api.telegram.org/bot$botToken/";
    $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
    $a = file_get_contents($url);
    if($a[2].$a[3]=="ok"){
        return back()->with('success', 'So`rovingiz qabul qilindi!');
    }
    else{
        return back()->with('danger', 'Xatolik! Qaytadan urunib ko`ring');
    }

})->name('money_post');

Route::get('login/{provider}', [\App\Http\Controllers\SocialController::class, 'redirect']);
Route::get('login/{provider}/callback',[\App\Http\Controllers\SocialController::class, 'Callback']);
