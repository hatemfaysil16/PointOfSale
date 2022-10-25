@extends('layouts.master')
@section('title')
Products
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Products</span>
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
                                <th>Barcode</th>
                                <th>Product Name</th>
                                <th>Product Group</th>
                                <th>Country of Origin</th>
                                <th>Manufacturer</th>
                                <th>Box Client Price</th>
                                <th>Box Company Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Product as $item)
                            <tr>
                                <th scope="row">{{$item->ProductBarcode}}</th>
                                <td>{{$item->ProductName}}</td>
                                <td>{{$item->ProductGroup}}</td>
                                <td>{{$item->CountryOfOrigin}}</td>
                                <td>{{$item->Manufacturer}}</td>
                                <td>{{$item->BoxCostPrice}}</td>
                                <td>{{$item->BoxPrice_company}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{route('products.edit',$item->id)}}" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button type="button" data-toggle="modal" data-target="#delete{{ $item->id }}" class="btn btn-danger btn-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @include('layouts.modals.delete-modal', ['id' => $item->id, 'name' => $item->ProductName, 'route' => route('products.destroy', $item->id) ])
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