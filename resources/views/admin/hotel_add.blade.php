@extends('layouts.admin')
@section('title','Add Hotel')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Otel Ekle </h3>
                    </div>
                <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"> <a href="#"> Anasayfa </a></li>

                <li class="breadcrumb-item active">Otel Ekle</li>
            </ol>
                </div>
                </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">

                    <h4 class="card-title">Otel Ekle</h4>
            </div>

                    <div class="card-body">

                        <div class="card mb-4">

                            <div class="card-body">
                                <form role="form" action="{{route('admin_hotel_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent</label>

                                        <select class="select2-single form-control" name="category_id" id="select2Single">

                                            @foreach($datalist as $rs )

                                            <option value="{{$rs->id}}">{{$rs->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label >Detail</label>
                                        <textarea id="summernote"  name="detail" ></textarea>
                                        <div id="summernote"></div>
                                        <script>
                                            $('#summernote').summernote({
                                                placeholder: '',
                                                tabsize: 2,
                                                height: 120,
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ]
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Star</label>
                                        <input type="number" name="star" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" value="0" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="05" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>İmage</label>
                                        <input type="file" name="image" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                    <select class="select2-single form-control" name="status" id="select2Single">
                                        <option selected="selected" value="False">False</option>
                                        <option value="True">True</option>

                                    </select>
                            </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Otel Ekle</button>
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