@extends('users.user')
@section('content')
    <div class="col-xl-8 col-xxl-9 col-lg-8">
        <div class="p-0 w-100 position-relative scroll-bar bg-white theme-dark-bg">
            <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar">
                <div class="chat-body p-lg-4 p-3 mt-lg-3 mt-0">
                    <div class="card dark-bg-transparent border-0 w-100 p-0 mb-3 shadow-none">
                        <div class="card-body p-0">
                            <h6 class="fw-600 text-grey-500 font-xsssss">
                               date

                            </h6>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default p-0 bg-transparent rounded-0">
                            <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <p class="text-grey-600 mb-4 font-xsss lh-28 fw-500 mt-3">Shart
                                    nomi:
                                </p>
                                <video  src="{{ route('stream') }}" width="100%" autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
