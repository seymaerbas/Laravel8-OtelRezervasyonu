@extends('layouts.admin')
@section('title','Add İmages Galery')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Resim Ekle </h3>
                    </div>
                <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"> <a href="#"> Anasayfa </a></li>

                <li class="breadcrumb-item active">Resim Ekle</li>
            </ol>
                </div>
                </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($images as $rs )
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->category_id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->star}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('admin_image_add',['hotel_id' => $rs->id])}}" ><img src="{{asset('assets/admin/img')}}/gallery.png" height="40"></a></td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->city}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin_hotel_edit',['id' => $rs->id])}}">Edit</a></td>
                            <td><a href="{{route('admin_hotel_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure? ')">Delete</a></td>

                        </tr>
                        </tbody>
                    @endforeach
                </table>
                    </div>

            <div class="card-footer">
                Footer
            </div><!-- /footer-->


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


@endsection
