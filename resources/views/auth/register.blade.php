<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>yoyoo</title>



    <!-- Icons font CSS-->
    <link href="{{ asset('css/register/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
          media="all">
    <link href="{{ asset('css/register/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
          media="all">
    <!-- Font special for pages-->


    <!-- Vendor CSS-->
    <link href="{{ asset('css/register/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/register/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">


    <link href="{{ asset('css/register/main.css') }}" rel="stylesheet">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-10 p-b-20 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Ro'yxatdan o'tish</h2>
                <form method="POST" action="">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">FISH </label>
                                @if($errors->has('name'))
                                    <p style="color: red">FISH faqat harflardan va kamida 5 ta harfdan iborat bo'lishi kerak</p>
                                @endif
                                <input class="input--style-4" type="text" name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-2">

                            <div class="input-group">
                                <label class="label">Tel raqam</label>
                                @if($errors->has('phone'))
                                    <p style="color: red">Tel faqat 12 ta raqamdan iborat bo`lishi kerak</p>
                                @endif
                                <input class="input--style-4 no-arrow" type="tel" name="phone" value="{{old('phone')}}">
                            </div>

                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Username</label>
                                @if($errors->has('username'))
                                    <p style="color: red">{{$errors->first('username')}} </p>
                                @endif
                                <input class="input--style-4" type="text" name="username" value="{{old('username')}}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Parol</label>
                                @if($errors->has('password'))
                                    <p style="color: red"> Parol takrorlanmas va kamida 5 ta belgidan iborat bo'iishi kerak </p>
                                @endif
                                <input class="input--style-4" type="text" name="password">
                            </div>

                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Tug'ilgan sana</label>
                                @if($errors->has('birthday'))
                                    <p style="color: red">Tug'ilgan sanani tanlang</p>
                                @endif
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday"
                                           readonly="readonly" value="{{old('birthday')}}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Viloyat</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="viloyat" >
                                        <option  {{ (old("viloyat") == 'Toshkent' ? "selected":"") }}>Toshkent</option>
                                        <option {{ (old("viloyat") == 'Farg`ona' ? "selected":"") }}>Farg`ona</option>
                                        <option {{ (old("viloyat") == 'Buxoro' ? "selected":"") }}>Buxoro</option>
                                        <option {{ (old("viloyat") == 'Andijon' ? "selected":"") }}>Andijon</option>
                                        <option {{ (old("viloyat") == 'Jizzax' ? "selected":"") }}>Jizzax</option>
                                        <option {{ (old("viloyat") == 'Xorazm' ? "selected":"") }}>Xorazm</option>
                                        <option {{ (old("viloyat") == 'Namangan' ? "selected":"") }}>Namangan</option>
                                        <option {{ (old("viloyat") == 'Navoiy' ? "selected":"") }}>Navoiy</option>
                                        <option {{ (old("viloyat") == 'Qashqadaryo' ? "selected":"") }}>Qashqadaryo</option>
                                        <option {{ (old("viloyat") == 'Samarqand' ? "selected":"") }}>Samarqand</option>
                                        <option {{ (old("viloyat") == 'Sirdaryo' ? "selected":"") }}>Sirdaryo</option>
                                        <option {{ (old("viloyat") == 'Surxondaryo' ? "selected":"") }}>Surxondaryo</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>

                        </div>
                        <div class="input-group">
                            <label class="label">Jins</label>

                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Erkak
                                    <input type="radio" checked="checked" name="jins" value="Erkak">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Ayol
                                    <input type="radio" name="jins" value="Ayol">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Ro'yxatdan o'tish</button>
                        <a href="/login" class="btn btn--radius-2 btn--green" type="submit">Orqaga</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{ asset('css/register/vendor/jquery/jquery.min.js') }}"></script>
<!-- Vendor JS-->
<script src="{{ asset('css/register/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('css/register/vendor/datepicker/moment.min.js') }}"></script>
<script src="{{ asset('css/register/vendor/datepicker/daterangepicker.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('css/register/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
