<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        //dd($input);

        Validator::make($input, [
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
            ]
        )->validate();

        return User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'username' => $input['username'],
            'birthday' => $input['birthday'],
            'viloyat' => $input['viloyat'],
            'jins' => $input['jins'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
