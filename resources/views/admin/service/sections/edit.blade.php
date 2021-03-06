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

    <form method="POST" enctype="multipart/form-data"
    action="{{ route('admin.sections.update') }}">
    @csrf
    {{-- ##########################(from bg)################################### --}}
    <div class="form-row">
        <div class="col-md-12 mb-4">
            <label for="File">File</label>
            <input type="file" placeholder="Please enter data" class="form-control" name="File"
                id="File" placeholder="" value="{{Request::old('File')}}">
            @if ($errors->has('File'))
            <div class="invalid-feedback">
                {{ $errors->first('File') }}
            </div>
            @endif
        </div>
    </div>
    {{-- ############################################################# --}}
    <div class="form-row">
        <select class="form-control" name="Type" data-show-subtext="true">
          <option {{ ( $service->Type == 'Logo') ? 'selected' : '' }}>Logo</option>
          <option {{ ( $service->Type == 'Products') ? 'selected' : '' }}>Products</option>
          <option {{ ( $service->Type == 'Projects') ? 'selected' : '' }}>Projects</option>
        </select>
        @if ($errors->has('Type'))
        <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Type') }}</span>
        @endif
      </div>
    {{-- ############################################################# --}}
    <div class="form-row">
        <div class="col-md-12 mb-4">
            <input type="hidden" placeholder="Please enter data" class="form-control"
                name="service" id="service" placeholder="" value="{{$service->service}}">
            @if ($errors->has('service'))
            <div class="invalid-feedback">
                {{ $errors->first('service') }}
            </div>
            @endif
        </div>
    </div>
    {{-- ############################################################# --}}
    <div class="form-row">
        <div class="col-md-12 mb-4">
            <label for="Title">Title</label>
            <input type="text" placeholder="Please enter data" class="form-control" name="Title"
                id="Title" placeholder="" value="{{ $service->Title }}">
            @if ($errors->has('Title'))
            <div class="invalid-feedback">
                {{ $errors->first('Title') }}
            </div>
            @endif
        </div>
    </div>
    {{-- ############################################################# --}}

    <div class="form-row">
        <div class="col-md-12 mb-4">
            <label for="Title">id</label>
            <input type="hidden" placeholder="Please enter data" class="form-control" name="id"
                id="id" placeholder="" value="{{ $service->id }}">
            @if ($errors->has('id'))
            <div class="invalid-feedback">
                {{ $errors->first('id') }}
            </div>
            @endif
        </div>
    </div>




    
    <div class="form-group" id="contentFg">
        <label for="">Content **</label>
        <textarea class="form-control summernote" name="paragraph" data-height="300"
            placeholder="Enter content">    {{ $service->paragraph}}</textarea>
        <p id="errcontent" class="mb-0 text-danger em"></p>
    </div>


    {{-- ############################################################# --}}
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
    {{-- ##########################(end bg)################################### --}}






    <hr>
    @if(session()->has('alert-success'))
    <input type="submit"
        style="background: #011a25;background: #20a049;padding: 1%;font-size: 16px;"
        class="btn btn-success save btn-large btn-block"
        value="  {{ session()->get('alert-success') }}" />
    @endif

    <br>

    <button type="submit" class="btn btn-success  btn-block">Update </button>

</form>




    <form  action="{{route('admin.sections.update')}}" method="post" enctype="multipart/form-data">

@csrf
    <div class="container">

        <div class="form-group">
         
            <input type="hidden" class="form-control" id="usr" name="id" value="{{ $service->id }}">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="usr" name="title" value="{{ $service->Title }}">
        </div>

     
        <br>
        <hr>
    </div>
</form>
<hr>
<br>
<img class="img-responsive" src="{{asset($img)}}" alt="Chania" style="
width: 40%;
height: 40%;
margin-top: 2%;
border: 6px solid white;
">
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