@extends('layouts.master')
@section('title')
Invoices | Invoice ID {{ $Invoice->id }}
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Invoices</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Invoice ID {{ $Invoice->id }}</span>
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
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="card-title mb-1">Invoice Information</h4>
                <button class="btn ms-auto btn-success" id="printButton" onclick="printPage()">
                    <i class=" fas fa-print"></i>
                </button>
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
                                    <input aria-describedby="sub-total" aria-label="Sub Total" value="{{$Invoice->subtotal}}" id="subTotal" class="form-control"  type="text" disabled>
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
                                    <input aria-describedby="customer-balance" aria-label="Customer Balance" value="{{$Invoice->customerbalance}}" id="customerBalance" class="form-control"  type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="additional-discount">Additional Discount</span>
                                    </div>
                                    <input aria-describedby="additional-discount" aria-label="Additional Discount" value="{{$Invoice->additionalDiscount}}"  id="additionalDiscount" class="form-control"  type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="tax">Tax</span>
                                    </div>
                                    <input aria-describedby="tax" aria-label="tax" id="taxes" class="form-control" value="{{$Invoice->tax}}" type="text" disabled>
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
                                    <input aria-describedby="total" aria-label="total" id="totals" value="{{$Invoice->total}}" class="form-control bg-success-gradient text-white font-weight-bold" value="300.00" type="text" disabled>
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
                                    <input aria-describedby="paid" aria-label="Paid" id="paids" value="{{$Invoice->paid}}" class="form-control"  type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="left">Left</span>
                                    </div>
                                    <input aria-describedby="left" aria-label="Left" id="lefts"  value="{{$Invoice->Left}}" class="form-control"  type="text" disabled>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="container d-none"id="printPage">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="200">
        </div>
        <div class="col-12 col-md-6">
            <h4 class="text-right">Taza Trading Inc.</h4>
            <h5 class="text-right text-danger">Sales Invoice</h5>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <h6>HOUSTON, TX 77063</h6>
            <h6>Phone : + 1(713) 900‐8050 / +1(832) 871‐0098</h6>
            <h6>fax : + 1(713) 900‐8050</h6>
            <h6 class="text-primary">Sales@tazatrading.com</h6>
            <h6 class="text-primary">www.Tazatrading.com</h6>
        </div>
        <div class="col-12 col-md-6">
            
            <h6 class="text-right mb-3">Date:  <span class="border border-secondary p-2">{{  date('m-d-Y', strtotime($Invoice->date));
            }}</span></h6>
            <h6 class="text-right">Invoice Number: <span class="border border-secondary p-2">{{ $Invoice->id }}</span></h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-borderless">
                <thead class="bg-success">
                  <tr>
                    <th scope="col" colspan="2" class="text-center">Bill to</th>
                    <th scope="col" colspan="2" class="text-center">Ship to</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Customer Name</th>
                    <td>{{$Invoice->Client->name}}</td>
                    <th>Customer Name</th>
                    <td>{{$Invoice->Client->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Customer Company</th>
                    <td>{{$Invoice->Client->companyName}}</td>
                    <th>Customer Company</th>
                    <td>{{$Invoice->Client->companyName}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Street Address</th>
                    <td>{{$Invoice->Client->street}}</td>
                    <th>Street Address</th>
                    <td>{{$Invoice->Client->street}}</td>
                  </tr>
                  <tr>
                    <th scope="row">City, State ZIP code</th>
                    <td>{{$Invoice->Client->companyCity}},
                        {{$Invoice->Client->CompanyState}},
                    {{ $Invoice->Client->PostalCode }}
                    </td>
                    <th>City, State ZIP code</th>
                    <td>{{$Invoice->Client->companyCity}},
                        {{$Invoice->Client->CompanyState}},
                    {{ $Invoice->Client->PostalCode }}
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Phone</th>
                    <td>{{$Invoice->Client->phone}}</td>
                    <th>Phone</th>
                    <td>{{$Invoice->Client->phone}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Qty</th>
                    <th scope="col">Product</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Pack Price</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($ShowDataInvoices as $DataInvoice)

                  <tr>
                    <td>{{$DataInvoice->qty}}</td>
                    <td>{{$DataInvoice->Product->name}} 1 x {{$DataInvoice->Product->PacksPerBox}}</td>
                    <td>{{ number_format($DataInvoice->Product->BoxCostPrice,2) }}</td>
                    <td>{{ number_format($DataInvoice->Product->PacksPerBox,2) }}</td>
                    <td>{{ number_format($DataInvoice->Total, 2) }}</td>
                  </tr>
                    @endforeach                  
                  
                </tbody>
              </table>
              <table class="table table-bordered">
                <tr>
                    <th>Total Packs</th>
                    <td>{{$Invoice->totalpacks}}</td>
                    <th class="text-center" style="width: 50%">Sub Total</th>
                    <td>{{ number_format($Invoice->subtotal,2) }}</td>
                </tr>
              </table>
              
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
function printPage(){
        let printContents = document.getElementById('printPage').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }
</script>
@endsection