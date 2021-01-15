@extends('admin.layout')

@if(!empty($service->language) && $service->language->rtl == 1)
@section('styles')
<style>
    form input,
    form textarea,
    form select {
        direction: rtl;
    }

    form .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
@endsection
@endif

@section('content')
<div class="page-header">
    <h4 class="page-title">Edit Service</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="{{route('admin.dashboard')}}">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Service Page</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Edit Service</a>
        </li>
    </ul>
</div>
<div class="row">



    <form  action="{{route('admin.sections.update')}}" method="post" enctype="multipart/form-data">

@csrf
    <div class="container">

        <div class="form-group">
         
            <input type="hidden" class="form-control" id="usr" name="id" value="{{ $service->id }}">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="usr" name="title" value="{{ $service->Title }}">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="usr" name="Path" value="
            <?php
            if($service->Type=="Logo"){
                $img="assets/front/img/Logo/$service->File";
               }else if($service->Type=="Products"){
                  $img="assets/front/img/Productsss/$service->File";
               }else{
                  $img="assets/front/img/Projects/$service->File";
               }
               echo  $img
            ?>
            
            
         ">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="usr" name="Path_full" value="
            <?php
            if($service->Type=="Logo"){
                $img="assets/front/img/Logo/";
               }else if($service->Type=="Products"){
                  $img="assets/front/img/Productsss/";
               }else{
                  $img="assets/front/img/Projects/";
               }
               echo  $img
            ?>
            
            
         ">
        </div>





        <div class="form-group">
            <label for="usr">Title:</label>
            <input type="text" class="form-control" id="usr" name="Title" value="{{ $service->Title }}">
        </div>




        <div>
            <input type=file name="File" id="file" >
            <label for="file">Choose Images</label>
        </div>
        <br>
        <hr>
        <button type="submit" class="btn btn-info btn-block" name="sub">تحديث البيانات</button>
    </div>
</form>
<hr>
<br>
<img class="img-responsive" src="{{asset($img)}}" alt="Chania">
</div>
@endsection

@section('scripts')
<script>
    var myInt=4;
    function toggleDetails() {
        let val = $("input[name='details_page_status']:checked").val();

        // if 'details page' is 'enable', then show 'content' & hide 'summary'
        if (val == 1) {
            $("#contentFg").show();
        }
        // if 'details page' is 'disable', then show 'summary' & hide 'content'
        else if (val == 0) {
            $("#contentFg").hide();
        }
    }

    $(document).ready(function() {
        toggleDetails();

        $("input[name='details_page_status']").on('change', function() {
            toggleDetails();
        });
      

            $("#Logo").click(function () {

              
                $("#Logo_ar").append(' <div class=\"custom-file\"> <input type=file name=\"Logo[]\" ">+\n' +
                '<label >Choose Images</label>');
              //  return false;


              
            });
            $("#Products").click(function () {
                myInt ++;
              


                $("#Products_ar").append(' <div class=\"custom-file\"> <input type=file name=\"Products[]\" ">+\n' +
                    '<label >Choose Images</label>');
              //  return false;
            });

            $("#Projects").click(function () {
                
                $("#Projects_ar").append(' <div class=\"custom-file\"> <input type=file name=\"Projects[]\" ">+\n' +
                    '<label >Choose Images</label>');

              //  return false;
            });
        });



</script>
@endsection