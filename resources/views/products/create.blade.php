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
                                                <form class="form-horizontal" >
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="product-name" placeholder="Product Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="product-group" placeholder="Product Group">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="product-barcode" placeholder="Product Barcode">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <input type="file" id="product-image" class="dropify" data-height="200" accept=".jpg, .png, image/jpeg, image/png"/>
                                                        </div>
                                                    </div>
                                                    <h4 class="card-title mb-1">Box Information</h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="box-length" placeholder="Box Length">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="box-width" placeholder="Box Width">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="box-hight" placeholder="Box Hight">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="pack-per-box" placeholder="Packs Per Box">
                                                    </div>

                                                    <h4 class="card-title mb-1">Pack Information</h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="pack-type" placeholder="Pack Type">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9 col-xl-9 col-md-9 col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="pack-weight" placeholder="Pack Weight">
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control select2-no-search">
                                                                    <option label="Choose one">
                                                                    </option>
                                                                    <option value="kilograms">
                                                                        Kilo grams
                                                                    </option>
                                                                    <option value="grams">
                                                                        Grams
                                                                    </option>
                                                                    <option value="liters">
                                                                        Liters
                                                                    </option>
                                                                    <option value="gallons">
                                                                        Gallons
                                                                    </option>
                                                                    <option value="ounces">
                                                                        Ounces
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="card-title mb-1">Price Information</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="box-cost-price" placeholder="Box Cost Price">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="box-price-shop" placeholder="Box Price (Shop)">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="box-price-company" placeholder="Box Price (Company)">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <h4 class="card-title mb-1">Origin Information</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="country-of-origin" placeholder="Country of Origin">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group mb-0 mt-3 justify-content-end">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary">Add</button>
                                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- row -->
                                @section('js')
                                <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
                                <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
                                
                                @endsection
                
@endsection

@section('js')

@endsection