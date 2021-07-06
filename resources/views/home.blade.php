@extends('users.user')
@section('content')
    <div class="col-xl-8 col-xxl-9 col-lg-8">
            @foreach($sharts as $shart)
                <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-2">
                    <div class="card-body p-0 d-flex">
                        <h2 class="fw-700 text-grey-900 mt-1">{{$shart->title}}<span
                                class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">
                                {{date('d-m-Y H:i', strtotime($shart->created_at))}}
                            </span>
                        </h2>
                        @if($shart->tip_name != "qrcode")
                        <a href="" class="ms-auto"></a><i
                            class="feather-check text-white
                                        @if(in_array($shart->id, $bajarilgan_shart_idlari))
                                            bg-success-gradiant
                                        @else
                                            bg-greylight
                                        @endif
                                me-1 btn-round-xs font-xss-2"
                            title="@if(in_array($shart->id, $bajarilgan_shart_idlari)) Shart bajarilgan @else Shart bajarilmagan @endif"></i></a>
                        @endif
                    </div>
                    <div class="card-body p-0 me-lg-4">
                        <p class="fw-500 text-grey-900 lh-26 font-xssss w-100 mb-2">{!! mb_strimwidth($shart->body, 0, 200, '...') !!}   <a
                                href="/home/shart/{{$shart->id}}" class="fw-600 text-primary ms-2">Ko'rish</a></p>
                    </div>
                    <div class="card-body d-block p-0 mb-3">
                        <div class="row ps-2 pe-2">
                            <div class="col-sm-12 p-1">
                                <img src="{{asset('images/'.$shart->tip_name.'.png')}}" class="rounded-3 w-100" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex p-0">
                        @if($shart->tip_name != "qrcode")
                        <a href="#"
                           class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                class="feather-dollar-sign text-white bg-danger me-1 btn-round-xs font-xss"></i>{{$shart->yo}}
                            yo.</i></a>
                        <a href="#"
                           class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                class="feather-user-check text-white bg-success-gradiant me-1 btn-round-xs font-xss"></i>{{count(array_filter(explode(',', $shart->user_submit)))}}</i>
                        </a>
                        @endif


                        <a href="#" id="dropdownMenu21" data-bs-toggle="dropdown" aria-expanded="false" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Bo'lishish</span></a>
                       <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu21" data-popper-placement="top-end" data-popper-reference-hidden="" data-popper-escaped="" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-10px, -61px);">
                            <h4 class="fw-700 font-xss text-grey-900 d-flex align-items-center">Share <i class="feather-x ms-auto font-xssss btn-round-xs bg-greylight text-grey-900 me-2"></i></h4>
                            <h4 class="fw-700 font-xssss mt-4 text-grey-500 d-flex align-items-center mb-3">Copy Link</h4>
                            <input type="text" value="{{Request::url()."/shart/".$shart->id}}" class="bg-grey text-grey-500 font-xssss border-0 lh-32 p-2 font-xssss fw-600 rounded-3 w-100 theme-dark-bg">
                        </div>
                    </div>
                </div>
            @endforeach
           <!-- <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-2">
                <h2 class="fw-700 text-grey-900 mt-1">Beeline<span
                        class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                    <video class="float-right w-100" autoplay muted loop>
                        <source src="images/beeline.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="card-body p-0 me-lg-4">
                    <h5 class="fw-500 text-grey-700 mt-1">Beeline bir qadam oldinda</h5>
                </div>
                <div class="card-body d-flex p-0">
                    <a href="#"
                       class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                            class="feather-external-link text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i></i>
                        Open</a>

                    <a href="#"
                       class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                            class="d-none-xs">Share</span></a>
                </div>
            </div>
        -->
        </div>
@endsection
