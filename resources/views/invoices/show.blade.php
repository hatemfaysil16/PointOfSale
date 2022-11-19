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
                                    <option value="" disabled="">Select invoicetype</option>
                                    @foreach (App\Models\Consts::INVOICETYPE as $item)
                                    @if (isset($Invoice))
                                    {{--  edit  --}}
                                    <option value="{{$item}}" {{ $item == $Invoice->invoicetype ?'selected':''}}>{{$item}}</option>
                                    @else
                                    {{--  create  --}}
                                    <option value="{{$item}}" @if (old('invoicetype')==$item) {{ 'selected' }} @endif >{{$item}}</option>
                                    @endif
                                    @endforeach
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
                                <input class="form-control fc-datepicker" id="production-date" placeholder="MM/DD/YYYY" type="date" name="date" value="{{ $Invoice->date }}" disabled>
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
                                        <input type="text" class="form-control" value="{{$Invoice->Client->name}}" id="customerName" placeholder="Customer Name" disabled>
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" value="{{$Invoice->Client->companyName}}" placeholder="Company Name" disabled>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->street}}"  id="streetAddress" placeholder="Street Address" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  value="{{$Invoice->Client->companyCity}}" id="city" placeholder="City" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->CompanyState}}"  id="state" placeholder="State" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->PostalCode}}" id="zipCode" placeholder="Zip Code" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->phone}}"  id="phone" placeholder="Phone" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h6 class="card-title mb-1">Ship To</h6>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->name}}" id="customerName" placeholder="Customer Name" disabled>
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" value="{{$Invoice->Client->companyName}}" placeholder="Company Name" disabled>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->street}}"  id="streetAddress" placeholder="Street Address" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  value="{{$Invoice->Client->companyCity}}" id="city" placeholder="City" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->CompanyState}}"  id="state" placeholder="State" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->PostalCode}}" id="zipCode" placeholder="Zip Code" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$Invoice->Client->phone}}"  id="phone" placeholder="Phone" disabled>
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
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($ShowDataInvoices as $DataInvoice)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$DataInvoice->Product->name}}</td>
                                    <td>{{$DataInvoice->Product->BoxCostPrice}}</td>
                                    <td>{{$DataInvoice->Product->PacksPerBox}}</td>
                                    <td>{{$DataInvoice->qty}}</td>
                                    <td>{{$DataInvoice->Total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$DataInvoices->links()}}
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="total-packs">Total Packs</span>
                                    </div>
                                    <input aria-describedby="total-packs" aria-label="Total Packs" value="{{$Invoice->totalpacks}}" id="totalpacks" class="form-control" placeholder="3" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sub-total">Sub Total</span>
                                    </div>
                                    <input aria-describedby="sub-total" aria-label="Sub Total" value="{{$Invoice->subtotal}}" id="subTotal" class="form-control" placeholder="300.00" type="text" disabled>
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
                                    <input aria-describedby="customer-balance" aria-label="Customer Balance" value="{{$Invoice->customerbalance}}" id="customerBalance" class="form-control" placeholder="300.00" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="additional-discount">Additional Discount</span>
                                    </div>
                                    <input aria-describedby="additional-discount" aria-label="Additional Discount"  id="additionalDiscount" class="form-control" placeholder="300.00" type="text" disabled>
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