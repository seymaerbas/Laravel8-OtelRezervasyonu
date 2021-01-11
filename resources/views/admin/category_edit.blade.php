@extends('layouts.admin')
@section('title','Edit Category')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Category </h3>
                    </div>
                <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"> <a href="#"> Home </a></li>

                <li class="breadcrumb-item active">Edit Category </li>
            </ol>
                </div>
                </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">

                    <h4 class="card-title">Edit Category</h4>
            </div>

                    <div class="card-body">

                        <div class="card mb-4">

                            <div class="card-body">
                                <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent</label>

                                        <select class="select2-single form-control" name="parent_id" id="select2Single">

                                            <option value="0">Main Category</option>

                                            @foreach($datalist as $rs )

                                            <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected" @endif> {{$rs->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text"name="title" value="{{$data->title}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text"name="keywords" value="{{$data->keywords}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text"name="description" value="{{$data->title}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="select2-single form-control" name="status"  id="select2Single">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>

                                    </select>
                            </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </form>
                            </div>
                        </div>

                    </div>

                <div class="card-footer">
                    Footer
                </div><!-- /footer-->


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
