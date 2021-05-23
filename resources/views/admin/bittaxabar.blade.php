@extends('admin.admin')
@section('content')
    <section class="content-wrapper">
        <div class="container">
            <div class="row">
                <!-- /.col -->
                @foreach($shart_answers as $shart_answer)
                <div class="col">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Read Mail</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>{{$shart_answer->title}}</h5>
                                <h6>From: {{$shart_answer->username}}
                                    <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm" title="Print">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>{{$shart_answer->body}}</p>

                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">

                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                @foreach(explode(',', $shart_answer->answer_media) as $rasm_path)
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img src="{{(asset('uploads/'.$rasm_path))}}" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>{{$rasm_path}}</a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        <form action="{{Request::url()}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Xabar</label>
                                <textarea name="message" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 122px;"></textarea>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" name="bekorqil" class="btn btn-danger"><i class="fas fa-reply"></i> Bekod qilish</button>
                                <button type="submit" name="tasdiqla" class="btn btn-success"><i class="fas fa-share"></i> Tasdiqlash</button>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                            <button type="submit" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @endforeach
@endsection
