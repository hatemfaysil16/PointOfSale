@extends('layouts.master')
@section('title')
Clients | All Purchases

@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Purchases</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Purchases</span>
        </div>
    </div>
        @include('layouts.component.form-search.search',['route'=>route('purchases.index')])
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
                                <th>Purchase ID</th>
                                <th>Product Name</th>
                                <th>Purchase Date</th>
                                <th>Quantity</th>
                                <th>Purchase Price / Pack</th>
                                <th>Production Date</th>
                                <th>Expiry Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($Purchases as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{!empty($item->products_id)?$item->Product->name:''}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->PurchasePrice}}</td>
                                <td>{{$item->ProductionDate}}</td>
                                <td>{{$item->ExpiryDate}}</td>
                                <td>{{$item->total}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("purchases.show", $item->id) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('purchases.edit',$item->id)}}" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button type="button" data-toggle="modal" data-target="#delete{{ $item->id }}" class="btn btn-danger btn-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @include('layouts.modals.delete-modal', ['id' => $item->id, 'name' => !empty($item->products_id)?$item->Product->name:'', 'route' => route('purchases.destroy', $item->id) ])
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection