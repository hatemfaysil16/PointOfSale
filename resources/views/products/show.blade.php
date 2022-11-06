@extends('layouts.master')
@section('title')
{{ $Product->name }}
@stop
@section("css")
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/{{ $Product->name }} </span>
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
            <div class="form-horizontal" >
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="product-name" placeholder="Product Name" disabled value="Product Name {{ $Product->name }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="product-group" placeholder="Product Group" disabled value="Product Group {{ $Product->ProductGroup }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="product-barcode" placeholder="Product Barcode" disabled value="Product Barcode {{ $Product->ProductBarcode }}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <span class="pointer plus">
                            <img style="cursor: pointer" width="300" height="300" src="{{ asset($Product->getFirstMediaUrl('product') )}}">
                        </span>
                    </div>
                </div>
                <h4 class="card-title mb-1">Box Information</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="box-length" placeholder="Box Length" disabled value="Box Length {{ $Product->BoxLength }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="box-width" placeholder="Box Width" disabled value="Box Width {{ $Product->BoxWidth }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="box-hight" placeholder="Box Hight" disabled value="Box Hight {{ $Product->BoxHight }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="pack-per-box" placeholder="Packs Per Box" disabled value="Packs Per Box {{ $Product->PacksPerBox }}">
                </div>

                <h4 class="card-title mb-1">Pack Information</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="pack-type" placeholder="Pack Type" disabled value="Pack Type {{ $Product->PackType }}">
                </div>
                <div class="row">
                    <div class="col-lg-9 col-xl-9 col-md-9 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="pack-weight" placeholder="Pack Weight" disabled value="Pack Weight {{ $Product->PackWeight }}">
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type of Weight" disabled value="{{ $Product->Typesofweight->name }}">
                        </div>
                    </div>
                </div>
                <h4 class="card-title mb-1">Price Information</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="box-cost-price" placeholder="Box Cost Price" disabled value="Box Cost Price {{ $Product->BoxCostPrice }}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="box-price-shop" placeholder="Box Price (Shop)" disabled value="Box Price (Shop) {{ $Product->BoxPrice_shop }}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="box-price-company" placeholder="Box Price (Company)" disabled value="Box Price (Company) {{ $Product->BoxPrice_company }}">
                        </div>
                    </div>
                    
                </div>
                <h4 class="card-title mb-1">Origin Information</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="country-of-origin" placeholder="Country of Origin" disabled value="Country of Origin {{ $Product->CountryOfOrigin }}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer" disabled value="Manufacturer {{ $Product->Manufacturer }}">
                        </div>
                    </div>
                </div>
                
            </div>
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