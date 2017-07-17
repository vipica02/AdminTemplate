@extends('layouts.admin')
@section('title')
    Category | Create
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Create</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url ('admin/category')}}">Category</a></li>
                        <li class="active">Create new</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">

                <div class="col-md-8 col-xs-12" style="width: 100%;">
                    <div class="white-box">
                        {!! Form::open(['type'=> 'POST', 'url'=> 'admin/category', 'class'=>'form-horizontal form-material']) !!}
                            <div class="form-group">
                                <label class="col-md-12">Title</label>
                                <div class="col-md-12">
                                    <input type="text" name="title" placeholder="Mời nhập title" class="form-control form-control-line"> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Select Status</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line" name="status">
                                        <option value="enable">Enable</option>
                                        <option value="disable">Disable</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Save</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
    </div>

@endsection