@extends('layouts.master')
@section('title')
Purchases | Add New Purchase
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Purchases</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New Purchase</span>
        </div>
    </div>
    
</div>
<!-- breadcrumb -->
@endsection

@section('content')
@include('layouts.MassageValidations.ErrorValidation')

<!-- row -->
<div class="row row-sm">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Purchase Information</h4>
            </div>
            <div class="card-body pt-0">
                <form action="{{ $action }}" method="post"  class="form-horizontal">
                @include('layouts.component.csrf_put.csrf_put')
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-date.input',['name'=>'date','value'=>$purchase->date])
                        </div>

                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-select.select',['foreach'=>$Product,'name'=>'products_id','model'=>$purchase,'nameselect'=>'product'])
                        </div>


                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'quantity','value'=>$purchase->quantity,'placeholder'=>"Quantity"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'PurchasePrice','value'=>$purchase->PurchasePrice,'placeholder'=>"Purchase Price"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-date.input',['name'=>'ProductionDate','value'=>$purchase->ProductionDate])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-date.input',['name'=>'ExpiryDate','value'=>$purchase->ExpiryDate])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'WarehouseNumber','value'=>$purchase->WarehouseNumber,'placeholder'=>"Warehouse Number"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'InvoiceNumber','value'=>$purchase->InvoiceNumber,'placeholder'=>"Invoice Number"])
                        </div>

                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'total','value'=>$purchase->total,'placeholder'=>"total" ,'disabled'=>''])
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