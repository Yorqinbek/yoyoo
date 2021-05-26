@extends('users.user')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <div class="col-xl-8 col-xxl-9 col-lg-8">
            <div class="p-0 w-100 position-relative bg-white theme-dark-bg">
                <div class="chat-wrapper pt-0 w-100 position-relative ">
                    <div class="chat-body p-lg-4 p-3 mt-lg-3 mt-0">
                        <div class="card dark-bg-transparent border-0 w-100 p-0 mb-3 shadow-none">
                            <div class="card-body p-0">

                                <h2 class="font-sm text-grey-900 fw-600">
                                   Pulni yechib olish
                                </h2>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default p-0 bg-transparent rounded-0">
                                <form id="form1" method="post" action="{{route('money_post')}}">
                                    @csrf
                                    <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="card-body d-block text-left p-0">
                                                    <div class="item w-100 h150 bg-white rounded-xxl overflow-hidden text-left shadow-md ps-3 pt-2 align-items-end flex-column d-flex">
                                                        <div class="card border-0 shadow-none p-0 bg-transparent-card text-left w-100">
                                                            <div class="row">
                                                                <div class="col-6">
                                                            <span
                                                                class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">yoyoo</span>
                                                                </div>
                                                                <div class="col-6 text-right pe-4">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 pe-4 shadow-none p-0 bg-transparent-card text-right w-100 mt-auto">
                                                            <h4 class="text-grey-900 font-sm  fw-700 mont-font mb-3 text-dark-color">
                                                                Balans: {{$user->yo}} yo. <span class="d-block fw-500 text-grey-500 font-xssss mt-1 text-dark-color"></span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        @if($user->yo>=10)
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Karta yoki telefon raqamingizni kiriting</label>
                                                <input type="text" name="raqam" class="form-control" placeholder="+998998206846">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Qancha miqdorda yo. yechib olmoqchisiz?</label>
                                                        <input value="0" type="number" name="miqdor" class="form-control">
                                                    </div>

                                                    <a onclick="document.getElementById('form1').submit();" href="javascript:;" class="rounded-3 bg-current mb-2 mt-4 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 text-white d-block">Pulni yechib olish</a>
                                             

                                            </div>
                                        </div>
                                        @else
                                            <p class="text-danger  font-xsss lh-28 fw-500 mt-3">
                                                Sizda yetarli yo. mavjud emas. Pulni yechib olish uchun minimal yo. <strong>10 yo.</strong>
                                            </p>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
