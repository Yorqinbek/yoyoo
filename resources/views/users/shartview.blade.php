@extends('users.user')
@section('content')
    <div class="col-xl-8 col-xxl-9 col-lg-8">
        <div class="col-lg-12">
            <div class="chat-wrapper p-0 w-100 position-relative bg-white theme-dark-bg">
                <div class="chat-wrapper pt-0 w-100 position-relative">
                    <div class="chat-body p-lg-4 p-3 mt-lg-3 mt-0">
                        <div class="card dark-bg-transparent border-0 w-100 p-0 mb-3 shadow-none">
                            <div class="card-body p-0">
                                <h2 class="font-sm text-grey-900 fw-600">{{$shart->title}}</h2>
                                <h6 class="fw-600 text-grey-500 font-xsssss">{{date('d-m-Y h:m', strtotime($shart->created_at))}}</h6>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default p-0 bg-transparent rounded-0">
                                <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingThree">
                                    <p class="text-grey-600 mb-4 font-xsss lh-28 fw-500 mt-3">{{$shart->body}}</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="chat-bottom dark-bg p-3 mb-3 border-top border-bottom bor-0 theme-dark-bg" style="width: 98%;">
                    <form class="chat-form d-block overflow-hidden">
                        <button class="bg-dark border-0 btn-round-md float-left d-lg-block d-none"><i class="ti-microphone text-white lh-4 font-xs"></i></button>
                        <button class="bg-dark border-0 btn-round-md ms-1 float-left"><i class="ti-clip text-white lh-4 font-xs"></i></button>
                        <button class="bg-dark border-0 btn-round-md ms-1 float-left"><i class="ti-image text-white lh-4 font-xs"></i></button>
                        <button class="bg-current border-0 p-0 float-right w200 text-white fw-600 font-xssss text-uppercase">Jo'natish</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
