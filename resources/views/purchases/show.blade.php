@extends('layouts.master')
@section('title')
Purchases | Purchase ID
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Purchases</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Purchase ID 2314</span>
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
                <h4 class="card-title mb-1">Purchase Information</h4>
            </div>
            <div class="card-body pt-0">
                <div class="form-horizontal" >
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div>
                                <input class="form-control fc-datepicker" id="purchase-date" placeholder="MM/DD/YYYY" type="text" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control select2"  id="product-name-list" placeholder="Product Name" disabled>
                                    <option label="Choose one">
                                    </option>
                                    <option value="Firefox">
                                        Firefox
                                    </option>
                                    <option value="Chrome">
                                        Chrome
                                    </option>
                                    <option value="Safari">
                                        Safari
                                    </option>
                                    <option value="Opera">
                                        Opera
                                    </option>
                                    <option value="Internet Explorer">
                                        Internet Explorer
                                    </option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="quantity" placeholder="Quantity" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="purchase-price" placeholder="Purchase Price" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input class="form-control fc-datepicker" id="production-date" placeholder="Production Date" type="text" disabled>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input class="form-control fc-datepicker" id="expiry-date" placeholder="Expiry Date" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="quantity" placeholder="Warehouse Number" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="quantity" placeholder="Invoice Number" disabled>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="total" placeholder="Total" disabled>
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
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<script>

$(function() {
	'use strict'
	
	// Datepicker
	$('.fc-datepicker').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true
	});
    $(document).ready(function() {
		$('.select2').select2({
			placeholder: 'Product Name',
		});
		
	});
});
</script>
@endsection