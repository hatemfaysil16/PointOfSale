@extends('layouts.master')
@section('title')
Clients | Add New Client
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Clients</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Client ID</span>
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
                <h4 class="card-title mb-1">Client Information</h4>
            </div>
            <div class="card-body pt-0">
                <div class="form-horizontal" >
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="client-name" placeholder="Client Name" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-name" placeholder="Company Name" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-street" placeholder="Company Street" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-city" placeholder="Company City" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-state" placeholder="Company State" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="postal-code" placeholder="Postal Code" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone-number" placeholder="Phone Number" disabled>
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
@endsection