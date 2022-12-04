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
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div>
                                <input class="form-control fc-datepicker"  name="date" value="{{$purchase->date}}" id="purchase-date" placeholder="Purchase Date" type="text">
                            </div>
                        {{-- @include('layouts.component.form-date.input',['name'=>'date','value'=>$purchase->date]) --}}
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control select2"  id="product-name-list" placeholder="Product Name" name="products_id">
                                    <option label="Choose Product"></option>
                                    @foreach ($Product as $item)
                                        @if (isset($purchase->id))
                                        {{--  edit  --}}
                                        <option value="{{$item->id}}" {{ $item->id == $purchase->products_id ?'selected':''}}>{{$item->name}}</option>
                                        @else
                                        {{--  create  --}}
                                        <option value="{{$item->id}}" @if (old('products_id')==$item->id) {{ 'selected' }} @endif >{{$item->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>

                        {{--  <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-select.select',['foreach'=>$Product,'name'=>'products_id','model'=>$purchase,'nameselect'=>'product'])
                        </div>  --}}


                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'quantity','value'=>$purchase->quantity,'placeholder'=>"Quantity"])
                        <input type="text" value="{{ isset($purchase->quantity)?$purchase->quantity:'' }}" name="quantity_old">
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'PurchasePrice','value'=>$purchase->PurchasePrice,'placeholder'=>"Purchase Price"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input class="form-control fc-datepicker" id="production-date" placeholder="Production Date" type="text" name="ProductionDate" value="{{ $purchase->ProductionDate }}">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-date.input',['name'=>'ProductionDate','value'=>$purchase->ProductionDate])
                        </div> --}}
                        {{-- <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-date.input',['name'=>'ExpiryDate','value'=>$purchase->ExpiryDate])
                        </div> --}}
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input class="form-control fc-datepicker" id="expiry-date" placeholder="Expiry Date" type="text" name="ExpiryDate" value="{{ $purchase->ExpiryDate }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'WarehouseNumber','value'=>$purchase->WarehouseNumber,'placeholder'=>"Warehouse Number"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'InvoiceNumber','value'=>$purchase->InvoiceNumber,'placeholder'=>"Invoice Number"])
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="total_name" name="total_name" value="{{$purchase->total}}" id="product-name" placeholder="total" disabled>
                                <input type="hidden" class="form-control" name="total" value="{{$purchase->total}}" id="product-name" placeholder="total" >
                            </div>
                        {{--  @include('layouts.component.form-input.input',['name'=>'total','value'=>$purchase->total,'placeholder'=>"total" ,'disabled'=>''])  --}}
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
	
	
    $(document).ready(function() {
		$('.select2').select2({
			placeholder: 'Product Name',
		});
		// Datepicker
	$('.fc-datepicker#purchase-date').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
        dateFormat: 'yy-mm-dd'
	});
    $('.fc-datepicker#production-date').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
        dateFormat: 'yy-mm-dd' 
	});
    $('.fc-datepicker#expiry-date').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
        dateFormat: 'yy-mm-dd' 
	});
    $('input[name="quantity"]').on('keyup',function(){
        $('input[name="total_name"]').val($('input[name="quantity"]').val() * $('input[name="PurchasePrice"]').val());
    });
    $('input[name="PurchasePrice"]').on('keyup',function(){
        $('input[name="total_name"]').val($('input[name="quantity"]').val() * $('input[name="PurchasePrice"]').val());
        $('input[name="total"]').val($('input[name="quantity"]').val() * $('input[name="PurchasePrice"]').val());
    });
	});
});
</script>
@endsection