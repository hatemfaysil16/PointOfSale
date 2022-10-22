@extends('layouts.master')
@section('title')
add {{$type}} product
@stop
@section("css")
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$type}} Product</span>
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
                    <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'ProductName','value'=>$Product->ProductName,'placeholder'=>"Product Name"])
                            @include('layouts.component.form-input.input',['name'=>'ProductGroup','value'=>$Product->ProductGroup,'placeholder'=>"Product Group"])
                            @include('layouts.component.form-input.input',['name'=>'ProductBarcode','value'=>$Product->ProductBarcode,'placeholder'=>"Product Barcode"])
                    </div>
                    <div class="col-sm-12 col-md-6">
                            @include('layouts.component.image.create')
                    </div>
                </div>
                <h4 class="card-title mb-1">Box Information</h4>
                    @include('layouts.component.form-input.input',['name'=>'BoxLength','value'=>$Product->BoxLength,'placeholder'=>"Box Length"])
                    @include('layouts.component.form-input.input',['name'=>'BoxWidth','value'=>$Product->BoxWidth,'placeholder'=>"Box Width"])
                    @include('layouts.component.form-input.input',['name'=>'BoxHight','value'=>$Product->BoxHight,'placeholder'=>"Box Hight"])
                    @include('layouts.component.form-input.input',['name'=>'PacksPerBox','value'=>$Product->PacksPerBox,'placeholder'=>"Packs Per Box"])

                <h4 class="card-title mb-1">Pack Information</h4>
                @include('layouts.component.form-input.input',['name'=>'PackType','value'=>$Product->PackType,'placeholder'=>"Pack Type"])
                <div class="row">
                    <div class="col-lg-9 col-xl-9 col-md-9 col-sm-6">
                        @include('layouts.component.form-input.input',['name'=>'PackWeight','value'=>$Product->PackWeight,'placeholder'=>"Pack Weight"])
                    </div>
                    @include('layouts.component.form-select.select',['foreach'=>$Typesofweight])
                </div>
                <h4 class="card-title mb-1">Price Information</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        @include('layouts.component.form-input.input',['name'=>'BoxCostPrice','value'=>$Product->BoxCostPrice,'placeholder'=>"Box Cost Price"])
                    </div>
                    <div class="col-sm-12 col-md-4">
                        @include('layouts.component.form-input.input',['name'=>'BoxPrice_shop','value'=>$Product->BoxPrice_shop,'placeholder'=>"Box Price (shop)"])
                    </div>
                    <div class="col-sm-12 col-md-4">
                        @include('layouts.component.form-input.input',['name'=>'BoxPrice_company','value'=>$Product->BoxPrice_company,'placeholder'=>"Box Price (Company)"])
                    </div>
                    
                </div>
                <h4 class="card-title mb-1">Origin Information</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'CountryOfOrigin','value'=>$Product->CountryOfOrigin,'placeholder'=>"Country Of Origin"])
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            @include('layouts.component.form-input.input',['name'=>'Manufacturer','value'=>$Product->Manufacturer,'placeholder'=>"Manufacturer"])
                        </div>
                    </div>
                </div>
                
                <div class="form-group mb-0 mt-3 justify-content-end">
                    <div>
                    @include('layouts.component.form-submit.submit')
                    </div>
                </div>
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