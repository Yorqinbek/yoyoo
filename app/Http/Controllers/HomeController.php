<?php

namespace App\Http\Controllers;

use App\Models\QrCodes;
use App\Models\Shart;
use App\Models\Tip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        if(\Illuminate\Support\Facades\Auth::check())
        {
            $users = User::all();
            $sharts = Shart::all();
            return view('admin.home',compact('users','sharts'));
        }
        return view('auth.login');
    }

    public function create_with_ref(Request $request, $username)
    {
        //dd($username);

        $request->validate([
            'name' => ['required', 'string', 'regex:/^[A-Za-z]+$/', 'min:5', 'max:50'],
            'phone' => ['required', 'digits:12'],
            'username' => ['required', 'regex:/^[a-z0-9_]+$/', 'string', 'min:5', 'max:20', 'unique:users'],
            'password' => ['required', 'min:5', 'string'],
            'birthday' => ['required'],
            'viloyat' => ['required'],
        ],
            [
                'username.unique' => 'Bu username band',
                'username.regex' => 'Username kichik harflar,raqamlar va pastki chiziqni qabul qiladi (kamida 5 ta belgi)',
                'username.string' => 'Username kichik harflar,raqamlar va pastki chiziqni qabul qiladi (kamida 5 ta belgi)',
                'username.min' => 'Username kichik harflar,raqamlar va pastki chiziqni qabul qiladi (kamida 5 ta belgi)',
                'username.max' => 'Username kichik harflar,raqamlar va pastki chiziqni qabul qiladi (kamida 5 ta belgi)',
                'username.required' => 'Username kichik harflar,raqamlar va pastki chiziqni qabul qiladi (kamida 5 ta belgi)',
            ]);

        $user =  User::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'username' => $request['username'],
            'birthday' => $request['birthday'],
            'viloyat' => $request['viloyat'],
            'jins' => $request['jins'],
            'password' => Hash::make($request['password']),
        ]);
        Auth::login($user);
        $user = User::where('username', '=', $username)->first();
        $user->yo = $user->yo+1;
        $user->save();
        return redirect('/home');
    }

    public function update_user_yo(Request $request,$id){
        $user = User::find($id);
        $user->yo = $request->yo;
        $user->save();
        return back()->with('success', 'Update successfuly');
    }


}
