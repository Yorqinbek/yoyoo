@extends('users.user')
@section('content')
    <div class="col-xl-8 col-xxl-9 col-lg-8">
        <div class="p-3 w-100 position-relative scroll-bar bg-white theme-dark-bg">
            <ul class="email-message">
                @foreach($admin_user_messages as $admin_user_message)
                    <li>
                        <a href="/home/xabarlar/{{$admin_user_message->id}}"
                           class="rounded-3 @if($admin_user_message->view) bg-transparent @else bg-lightblue @endif theme-light-bg">
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="checkbox" id="blankCheckbox1"
                                       value="option1" aria-label="">
                                <label class="text-grey-500 font-xssss" for="blankCheckbox1"></label>
                            </div>
                            <div class="email-user">
                                <img
                                    src="@if($admin_user_message->answer) {{asset('images/correct.png')}} @else {{asset('images/fail.png')}} @endif"
                                    alt="user" class="w35 me-2">
                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">@if($admin_user_message->answer)
                                        Qabul qilindi @else Rad etildi @endif</h6>
                            </div>
                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">

                                {{$admin_user_message->title}}
                            </div>
                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                @if($admin_user_message->answer)
                                    {{$admin_user_message->title}} sharti bajarildi!!!
                                    Sizga {{$admin_user_message->yo}} yo. taqdim etildi.
                                @else Sabab: {{$admin_user_message->message}}
                                @endif
                            </div>

                            <div class="email-time text-grey-500 fw-600">
                                {{date('d-m-Y H:i', strtotime($admin_user_message->created_at))}}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
