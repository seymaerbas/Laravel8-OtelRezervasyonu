@extends('layouts.admin')
@section('title','EditHotel')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Düzenle </h3>
                    </div>
                <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"> <a href="#"> Anasayfa </a></li>

                <li class="breadcrumb-item active">Düzenle</li>
            </ol>
                </div>
                </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">

                    <h4 class="card-title">Düzenle</h4>
            </div>

                    <div class="card-body">

                        <div class="card mb-4">

                            <div class="card-body">
                                <form role="form" action="{{route('admin_hotel_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent</label>

                                        <select class="select2-single form-control" name="category_id" id="select2Single">

                                            @foreach($datalist as $rs )

                                                <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif> {{$rs->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" name="title" value="{{$data->keywords}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Detail</label>
                                        <input type="text" name="detail" value="{{$data->detail}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Star</label>
                                        <input type="number" name="star" value="{{$data->star}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{$data->price}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" name="phone" value="{{$data->phone}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" value="{{$data->city}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" value="{{$data->country}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                    <select class="select2-single form-control" name="status" id="select2Single">
                                        <option selected="selected">{{$data->keywords}}</option>
                                        <option>True</option>
                                        <option>False</option>

                                    </select>
                            </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Düzenle</button>
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
