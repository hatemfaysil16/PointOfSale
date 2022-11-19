@extends('layouts.master')
@section('title')
Invoices | All Invoices

@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Invoices</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Invoices</span>
        </div>
    </div>
        @include('layouts.component.form-search.search',['route'=>route('products.index')])
</div>
<!-- breadcrumb -->

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice ID</th>
                                <th>Invoice Type</th>
                                <th>Invoice Date</th>
                                <th>Customer Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Left</th>
                                <th>Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices_account as $key=>$item)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$item->number}}</td>
                                <td>{{$item->invoicetype}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->Client->name}}</td>
                                <td>{{$item->Client->companyCity}}</td>
                                <td>{{$item->Client->CompanyState}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->paid}}</td>
                                <td>{{$item->Left}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("invoices.show",$item->id) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$invoices_account->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection