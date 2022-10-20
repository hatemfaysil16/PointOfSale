@extends('layouts.master')
@section('title')
add new product
@stop
@section("css")
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New Product</span>
        </div>
    </div>
    
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row row-sm">
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
    <div class="card  box-shadow-0">
        <div class="card-header">
            <h4 class="card-title mb-1">Basic Information</h4>
        </div>
        <div class="card-body pt-0">
            <form action="{{ $action }}" method="post"  class="form-horizontal" >
                @include('layouts.component.csrf_put.csrf_put')
                <div class="row">
                    @include('layouts.component.form-input.input',['name'=>'name','value'=>$typesofweight->name,'placeholder'=>"Product Name"])
                </div>
                    @include('layouts.component.form-submit.submit')
            </form>
        </div>
    </div>
</div>
                                    
</div>
<!-- row -->
                
@endsection


@section('js')
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>                                
@endsection