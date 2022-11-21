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
                <h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Product Name</span>
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
                                <input type="text" class="form-control" value="{{$warehouse->Product->name}}" id="product-name" placeholder="Product Name" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->ProductGroup}}" id="product-group" placeholder="Product Group" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->ProductBarcode}}" id="product-barcode" placeholder="Product Barcode" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                                <span class="pointer plus">
                                    <img style="cursor: pointer" width="300" height="300" src="{{ asset($warehouse->Product->getFirstMediaUrl('product') )}}">
                                </span>
                        </div>
                    </div>
                    <h4 class="card-title mb-1">Box Information</h4>
                    <div class="form-group">
                        <input type="text" value="{{$warehouse->Product->BoxLength}}" class="form-control" id="box-length" placeholder="Box Length" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$warehouse->Product->BoxWidth}}" class="form-control" id="box-width" placeholder="Box Width" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$warehouse->Product->BoxHight}}" class="form-control" id="box-hight" placeholder="Box Hight" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$warehouse->Product->PacksPerBox}}" class="form-control" id="pack-per-box" placeholder="Packs Per Box" disabled>
                    </div>

                    <h4 class="card-title mb-1">Pack Information</h4>
                    <div class="form-group">
                        <input type="text" value="{{$warehouse->Product->PackType}}" class="form-control" id="pack-type" placeholder="Pack Type" disabled>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-xl-9 col-md-9 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->PackWeight}}" id="pack-weight" placeholder="Pack Weight" disabled>
                                
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
                            <div class="form-group">
                                <select class="form-control select2-no-search" disabled>
                                    <option label="{{$warehouse->Product->Typesofweight->name}}">
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-1">Price Information</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->BoxCostPrice}}" id="box-cost-price" placeholder="Box Cost Price" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->BoxPrice_shop}}" id="box-price-shop" placeholder="Box Price (Shop)" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->BoxPrice_company}}" id="box-price-company" placeholder="Box Price (Company)" disabled>
                            </div>
                        </div>
                        
                    </div>
                    <h4 class="card-title mb-1">Origin Information</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->CountryOfOrigin}}" id="country-of-origin" placeholder="Country of Origin" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->Manufacturer}}" id="manufacturer" placeholder="Manufacturer" disabled>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-1">Purchase Information</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$warehouse->Product->Manufacturer}}" id="country-of-origin" placeholder="Production Date" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="manufacturer" value="{{$warehouse->Product->ExpiryDate}}" placeholder="Expiration Date" disabled>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title mb-1">Quantity Information</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="country-of-origin" value="{{$warehouse->available}}" placeholder="Available" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="manufacturer" value="{{$warehouse->sold}}"  placeholder="Sold" disabled>
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