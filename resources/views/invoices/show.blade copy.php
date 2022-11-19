@extends('layouts.master')
@section('title')
Invoices | Add New Invoice
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Invoices</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Invoice ID 1534535345</span>
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
                <h4 class="card-title mb-1">Invoice Information</h4>
            </div>
            <div class="card-body pt-0">
                <div class="form-horizontal" >
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control select2-no-search" disabled>
                                    <option label="Invoice type">
                                    </option>
                                    <option value="company">
                                        Company
                                    </option>
                                    <option value="shop">
                                        Shop
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div>
                                <input class="form-control fc-datepicker" id="invoice-date" placeholder="MM/DD/YYYY" type="text" disabled>
                            </div>
                            
                            
                        </div>
                        <div class="col-12">
                            <h4 class="card-title mb-3">Customer Information</h4>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h6 class="card-title mb-1">Invoice To</h6>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="customerName" placeholder="Customer Name" disabled>
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" placeholder="Company Name" disabled>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="streetAddress" placeholder="Street Address" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="city" placeholder="City" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="state" placeholder="State" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h6 class="card-title mb-1">Ship To</h6>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="customerName" placeholder="Customer Name" disabled>
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" placeholder="Company Name" disabled>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="streetAddress" placeholder="Street Address" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="city" placeholder="City" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="state" placeholder="State" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone" disabled>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <hr />
                    <div class="table-responsive mt-5">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Pack Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tiger Nixon</td>
                                    <td>15302</td>
                                    <td>144423213</td>
                                    <td>1000</td>
                                    <td>22351223133232</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="total-packs">Total Packs</span>
                                    </div>
                                    <input aria-describedby="total-packs" aria-label="Total Packs" id="totalpacks" class="form-control" placeholder="3" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sub-total">Sub Total</span>
                                    </div>
                                    <input aria-describedby="sub-total" aria-label="Sub Total" id="subTotal" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="customer-balance">Customer Balance</span>
                                    </div>
                                    <input aria-describedby="customer-balance" aria-label="Customer Balance" id="customerBalance" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="additional-discount">Additional Discount</span>
                                    </div>
                                    <input aria-describedby="additional-discount" aria-label="Additional Discount" id="additionalDiscount" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="tax">Tax</span>
                                    </div>
                                    <input aria-describedby="tax" aria-label="tax" id="taxes" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="total">Total</span>
                                    </div>
                                    <input aria-describedby="total" aria-label="total" id="totals" class="form-control bg-success-gradient text-white font-weight-bold" value="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="paid">Paid</span>
                                    </div>
                                    <input aria-describedby="paid" aria-label="Paid" id="paids" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="left">Left</span>
                                    </div>
                                    <input aria-describedby="left" aria-label="Left" id="lefts" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
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
			placeholder: 'Invoice to',
		});
		
        $('#product-name-list').select2({
			placeholder: 'Product Name',
		});
	});
});
</script>
@endsection