<!-- Custom-Files -->
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link href="{{asset('assets')}}/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
<!-- banner slider -->
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css" media="all"/>
<!-- Style-CSS -->
<link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
<!-- Font-Awesome-Icons-CSS -->
<!-- //Custom-Files -->

<!-- Web-Fonts -->
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //Web-Fonts -->

<!-- Main content -->
<section class="content">

    <div class="card">

        <h4 class="card-title">Review Detail</h4>

    </div>

    <div class="card-body">

        <div class="card mb-4">


            <form role="form" action="{{ route('admin_review_update',['id'=>$data->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf









                    <div class="card-body">

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" name="id" value="{{ $data->id}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="userid" value="{{$data->user->name }}" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Rate</label>
                            <input type="text" name="userid" value="{{$data->rate }}" class="form-control" >
                        </div>


                        <div class="form-group">
                            <label >Status</label>
                            <select class="select2-single form-control" name="status" id="select2Single">

                                <option value="True">True</option>
                                <option  value="False">False</option>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Düzenle</button>

                    </div>
            </form>





        </div>


        </form>
    </div>

    </div>


</section><!-- /.content -->
</div><!-- /.content-wrapper -->


