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
            <h4 class="content-title mb-0 my-auto">Invoices</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New Invoice</span>
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

            <div class="card-body pt-0">
                <form action="{{ $action }}" method="post" class="form-horizontal">
                    @include('layouts.component.csrf_put.csrf_put')

                    <div class="row">

                        

                        <div class="col-12">
                            <h4 class="card-title mb-1">Product Information</h4>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="hidden" id="url" value="{{asset('')}}">
                            <div class="form-group">
                                <select class="form-control select2"  id="products_id" placeholder="Product Name" name="products_id" >
                                    <option selected="" label="Choose Product" disabled>Choose Product</option>
                                    @foreach ($product as $itemNew)
                                        @if (isset($product->id))
                                        {{--  edit  --}}
                                        <option value="{{$itemNew->id}}" {{ $itemNew->id == $product->products_id ?'selected':''}}>{{$itemNew->name}}</option>
                                        @else
                                        {{--  create  --}}
                                        <option value="{{$itemNew->id}}" @if (old('products_id')==$itemNew->id) {{ 'selected' }} @endif >{{$itemNew->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control"  id="productBarcode" placeholder="Product Name" name="ProductBarcode" >
                                    <option selected="" label="Choose Barcode" disabled>Choose Barcode</option>
                                    @foreach ($product as $item)
                                        @if (isset($product->id))
                                        {{--  edit  --}}
                                        <option value="{{$item->id}}" {{ $item->id == $product->products_id ?'selected':''}}>{{$item->ProductBarcode}}</option>
                                        @else
                                        {{--  create  --}}
                                        <option value="{{$item->id}}" @if (old('products_id')==$item->id) {{ 'selected' }} @endif >{{$item->ProductBarcode}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="unit-price">Unit Price</span>
                                    </div><input aria-describedby="unit-price" aria-label="Unit Price" id="unitPrice" class="form-control" placeholder="Unit Price" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="pack-price">Pack Price</span>
                                    </div><input aria-describedby="pack-price" aria-label="Unit Price" id="packPrice" class="form-control" placeholder="Pack Price" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="number" class="form-control" name="qty" value="{{$Invoice->qty}}"  id="product-name" placeholder="Quantity" >
                            </div>
                             {{--  min="0" max="5"  --}}
                        </div>

                    </div>


                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>

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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($DataInvoices as $DataInvoice)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$DataInvoice->Product->name}}</td>
                                    <td>{{$DataInvoice->Product->BoxCostPrice}}</td>
                                    <td>{{$DataInvoice->Product->PacksPerBox}}</td>
                                    <td>{{$DataInvoice->qty}}</td>
                                    <td>{{$DataInvoice->Total}}</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#delete{{ $DataInvoice->id }}" class="btn btn-danger btn-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @include('layouts.modals.delete-modal', ['id' => $DataInvoice->id, 'name' => '', 'route' => route('invoices.destroy', $DataInvoice->id) ])
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$DataInvoices->links()}}
                    </div>
                <form action="{{route('storeInvoicesaccount')}}" method="post" class="form-horizontal">
                    @include('layouts.component.csrf_put.csrf_put')

                    <div class="card-header">
                        <h4 class="card-title mb-1">Invoice Information</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control" value=""  name="invoicetype" required>
                                    <option selected="" label="Choose Client" disabled>Select invoicetype</option>
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
                                <input class="form-control" id="production-date" placeholder="MM/DD/YYYY" type="date" name="date" value="{{ $Invoice->date }}" required>
                            </div>
                            
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-6">
                                </div>
                                <select class="form-control select2"  id="clients_id" placeholder="Client Name" name="clients_id" required>
                                    <option selected="" label="Choose Client" disabled></option>
                                    @foreach ($client as $item)
                                        @if (isset($client->id))
                                        {{--  edit  --}}
                                        <option value="{{$item->id}}" {{ $item->id == $client->clients_id ?'selected':''}}>{{$item->name}}</option>
                                        @else
                                        {{--  create  --}}
                                        <option value="{{$item->id}}" @if (old('clients_id')==$item->id) {{ 'selected' }} @endif >{{$item->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mt-2">
                                <label class="ckbox"><input type="checkbox" class="checked" id="checkbox" name="checkbox[]" onchange='act(this)' ><span>Same Address?</span></label>

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
                                        <input type="text" class="form-control customerName" name="name"  id="customerName" placeholder="Customer Name" disabled>
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name" disabled>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="streetAddress" name="street" placeholder="Street Address" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="city" name="companyCity" placeholder="City" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="state" name="CompanyState" placeholder="State" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="zipCode" name="PostalCode" placeholder="Zip Code" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h6 class="card-title mb-1">Ship To</h6>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('name')}}" name="name" id="customerName2" placeholder="Customer Name" >
                                    </div>                            
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{old('companyName')}}"  name="companyName" id="companyName2" placeholder="Company Name">
                                        </div>                            
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('street')}}" name="street" id="streetAddress2" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('companyCity')}}" name="companyCity" id="city2" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('CompanyState')}}" name="CompanyState" id="state2" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('PostalCode')}}" name="PostalCode" id="zipCode2" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone2" placeholder="Phone">
                                    </div>
                                </div>
                            </div>           
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="total-packs">Total Packs</span>
                                    </div>
                                    <input aria-describedby="total-packs" aria-label="Total Packs"  class="form-control" placeholder="{{$DataInvoicesCount}}" type="text" disabled>
                                    <input type="hidden" name="totalpacks"  id="totalpacks" value="{{$DataInvoicesCount}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sub-total">Sub Total</span>
                                    </div>
                                    <input aria-describedby="sub-total" aria-label="Sub Total" id="subTotal" class="form-control" placeholder="{{$DataInvoices->sum('Total')}}" type="text" disabled>
                                    <input type="hidden" id="subtotalNew" name="subtotal" value="{{$DataInvoices->sum('Total')}}">
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
                                    <input aria-describedby="customer-balance" aria-label="Customer Balance" id="customerBalance" class="form-control" placeholder="{{!empty($Invoice->customerbalance)?$Invoice->customerbalance:0}}" type="text" disabled>
                                    <input type="hidden"  name="customerbalance" id="customerBalances" value="{{!empty($Invoice->customerbalance)?$Invoice->customerbalance:0}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="additional-discount">Additional Discount</span>
                                    </div>
                                    <input type="text" name="additionalDiscount" id="additionalDiscountNew" value="" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="tax">Tax</span>
                                    </div>
                                    <input name="tax" id="tax" value="" class="form-control" placeholder="" type="text" required>
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
                                    <input aria-describedby="total" aria-label="total" value="{{$DataInvoices->sum('Total')}}" id="totals" class="form-control bg-success-gradient text-white font-weight-bold" value="" type="text" disabled>
                                    <input type="hidden" value="" name="total" required>
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
                                    <input aria-describedby="paid" aria-label="Paid" name="paid" value="" id="paid" class="form-control" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="left">Left</span>
                                    </div>
                                    <input aria-describedby="left" aria-label="Left" value="" id="Left" class="form-control" placeholder="" type="text" disabled>
                                    <input type="hidden" name="Left" value="" required>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mx-auto">
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" id="print" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
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
<script src="{{asset('js/invoices/invoices.js')}}"></script>
<script src="{{asset('js/client/client.js')}}"></script>
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
    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
        

    </script>
@endsection