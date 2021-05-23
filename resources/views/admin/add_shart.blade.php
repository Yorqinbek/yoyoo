@extends('admin.admin')
@section('content')
    <div class="content-wrapper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
         @endif
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Shart qo'shish</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <form method="post" action="{{route('saveshart')}}">
                    @csrf
                    <div class="card card-default">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea class="form-control" name="body" value="{{old('body')}}" rows="5" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Yo</label>
                                        <input type="number" name="yo" value="{{old('yo')}}"  class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tip</label>
                                        <select name="tips" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            @foreach($tips as $tip)
                                                <option @if ($loop->first) selected="selected" @endif>{{$tip->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Type</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" name="types[]" value="jpg" type="checkbox">
                                                <label class="form-check-label">jpg</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" name="types[]" value="mp3" type="checkbox">
                                                <label class="form-check-label" >mp3</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" name="types[]" value="mp4"  type="checkbox">
                                                <label class="form-check-label">mp4</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Qo'shish</button>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

@endsection
