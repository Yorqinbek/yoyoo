@extends('users.user')
@section('css')
    <style>

        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .imgPreview img {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            padding: 8px;
            margin:8px;
            max-width: 150px;
        }
        #qr-canvas {
            margin: 0 auto;
            width: calc(100% - 20px);
            max-width: 400px;
        }

        #btn-scan-qr {
            cursor: pointer;
        }

        #btn-scan-qr img {
            height: 10em;
            padding: 15px;
            margin: 15px;
            background: white;
        }

        #qr-result {
            font-size: 1.2em;
            margin: 20px auto;
            padding: 20px;
            max-width: 700px;
            background-color: white;
        }
        #container {
            text-align: center;
            margin: 0;
        }
    </style>
@endsection
@section('content')
    <div class="col-xl-8 col-xxl-9 col-lg-8">
        <div class="p-0 w-100 position-relative bg-white theme-dark-bg">
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

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="pt-0 w-100 position-relative">
                <div class=" p-lg-4 p-3 mt-lg-3 mt-0">
                    <div class="card dark-bg-transparent border-0 w-100 p-0 mb-3 shadow-none">
                        <div class="card-body p-0">
                            <h2 class="font-sm text-grey-900 fw-600">{{$shart->title}}</h2>
                            <h6 class="fw-600 text-grey-500 font-xsssss">
                                {{date('d-m-Y H:i', strtotime($shart->created_at))}}
                            </h6>
                        </div>
                    </div>
                    @if($user_shart_status==1)
                        <div class="chat-form d-block overflow-hidden">
                            <span
                                class="live-tag  mb-0 bg-success float-right p-2 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">BAJARILGAN</span>
                        </div>
                    @elseif($user_shart_status==2)
                        <div class="chat-form d-block overflow-hidden">
                            <span
                                class="live-tag  mb-0 bg-danger float-right p-2 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">TEKSHIRILMOQDA</span>
                        </div>
                    @else
                    @endif
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default p-0 bg-transparent rounded-0">
                            <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <p class="text-grey-700 mb-4 font-xsss lh-28 fw-500 mt-3">{{$shart->body}}</p>
                                @if($shart->tip_name==="qrcode")
                                    <form method="post" action="/home/qrcode/{{$shart->id}}">
                                        @csrf
                                        <div id="container">
                                            <h2>Skanerlash uchun pastdagi to'rtburchak ustiga bosing</h2>

                                            <a id="btn-scan-qr">
                                                <img src="{{asset('images/qrcod.svg')}}">
                                                <a/>

                                                <canvas hidden="" id="qr-canvas"></canvas>

                                                <div id="qr-result" hidden="">
                                                    <b style="color: red">Kod aniqlandi:</b> <b><span id="outputData"></span></b>
                                                    <input name="kod" id="maxsuskod" type="text" hidden>
                                                </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="chat-form d-block overflow-hidden">
                                                <button
                                                    type="submit"
                                                    class="bg-current border-0 p-0 float-right w200 text-white fw-600 font-xssss text-uppercase">
                                                    Kodni tekshirish
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div>
                                @endif
                            </div>
                            <div>
                            @if($user_shart_status==1)
                                <div>
                                    @elseif($user_shart_status==2)
                                        <div>
                                            @else
                                                @if($shart->tip_name==="install_apps")
                                                    <form action="{{Request::url()}}" method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mt-1">
                                                            <label class="form-label" for="customFile">Dasturga kirgan
                                                                holatdagi rasm</label>
                                                            <input type="file" name="imageFile[]" class="form-control"
                                                                   id="customFile"/>
                                                        </div>
                                                        <div class="mt-1 mb-3">
                                                            <label class="form-label" for="customFile2">Comment qoldirilgan
                                                                rasm</label>
                                                            <input type="file" name="imageFile[]" class="form-control"
                                                                   id="customFile2"/>
                                                        </div>
                                                        <div>
                                                            <div class="user-image text-center">
                                                                <div class="imgPreview"></div>
                                                            </div>
                                                    </form>
                                                    <div class="mt-6">
                                                        <div class="chat-form d-block overflow-hidden">
                                                            <button
                                                                class="bg-current border-0 p-0 float-right w200 text-white fw-600 font-xssss text-uppercase">
                                                                Jo'natish
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0" style="display: none">
            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-0">
                <div class="card-body d-flex align-items-center p-4">
                    <h2 class="fw-700 text-grey-900 mt-1">Beeline<span
                            class="d-block font-xssss fw-500 mt-2 lh-3 text-grey-500">Reklama</span></h2>

                </div>

                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                    <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                        <video class="float-right w-100" autoplay muted loop>
                            <source src="{{asset('images/beeline.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>

            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                <div class="card-body d-flex align-items-center p-4">
                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">Suggest Pages</h4>
                    <a href="default-group.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                </div>
                <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                    <img src="{{asset('images/g-2.jpg')}}" alt="img" class="img-fluid rounded-xxl mb-2">

                </div>
                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                    <a href="#"
                       class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                            class="feather-external-link font-xss me-2"></i> Like Page</a>
                </div>

                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden">
                    <img src="{{asset('images/g-2.jpg')}}" alt="img"
                         class="img-fluid rounded-xxl mb-2 bg-lightblue">
                </div>
                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                    <a href="#"
                       class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                            class="feather-external-link font-xss me-2"></i> Like Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
                    <script src="{{ asset('css/user/js/qrCodeScanner.js') }}"></script>
    <script type="text/javascript">
        // Multiple images preview with JavaScript
        var multiImgPreview = function (input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function () {
            multiImgPreview(this, 'div.imgPreview');
        });
        /*$("#outputData").on('change',function(){
            //Do calculation and change value of other span2,span3 here
            alert("Changed");
        });*/
        /*$("#outputData").on('DOMSubtreeModified',function(){
            var kod = $("#outputData").text();
            alert(kod);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/home/shart/qrcode/",
                type:"POST",
                dataType: "json",
                data:{
                    kod:kod,
                },
                success:function(data){
                    alert(data.success);
                },
            });
        });*/

        $("#outputData").on('DOMSubtreeModified',function(){
            var kod = $("#outputData").text();
            $('#maxsuskod').attr('value',kod)
        });
    </script>
@endsection
