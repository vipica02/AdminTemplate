@extends('layouts.admin')
@section('title')
    Category | PHP0317E
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Basic Table</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro

                    </a>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin') }}">Dashboard</a></li>
                        <li class="active">Category</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @if(Session::has('success'))
            <div class="col-sm-12"style="width: 103%; margin-left: -15px;">
                <div class="white-box" style="width: 100%;">
                    <div class="alert alert-success">{{ Session::get('success') }} </div>
                </div>
            </div>
            @endif
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">List Category:</h3>
                        <a href="{{ url ('admin/category/create') }}" class="btn">Create new</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>N0.</th>
                                    <th>Category</th>
                                    <th><input type="checkbox"></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($categories)
                                        @foreach($categories as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><input type="checkbox"></td>
                                                <td>
                                                    <a href="{{ url ('admin/category/'.$item->id.'/edit') }}" class="btn">Edit</a>
                                                    {!! Form::open(['method'=> 'DELETE','url'=>'admin/category/'.$item->id]) !!}

                                                    <button type="submit" class ="btn" onclick="return confirm('Are you sure?')">Delete</button>
                                                    {!! Form::close() !!}


                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
    </div>
@endsection