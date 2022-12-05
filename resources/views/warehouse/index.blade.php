@extends('layouts.master')
@section('title')
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Warehouse</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Items</span>
        </div>
    </div>
    <form>
        <div class="input-group">
            <input class="form-control" placeholder="Search for..." type="text">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                    <span class="input-group-btn"><i class="fa fa-search"></i></span>
                </button>
            </span>
        </div>
    </form>
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
                                <th>Product Name</th>
                                <th>Product Group</th>
                                <th>Country of Origin</th>
                                <th>Manufacturer</th>
                                <th>WarehouseNumber</th>
                                <th>Buy</th>
                                <th>Sold</th>
                                <th>Available</th>
                                <th>Box Client Price</th>
                                <th>Box Company Price</th>
                                <th>Prod. Date</th>
                                <th>Exp. Date</th>
                                <th>Barcode</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($warehouse as $key=>$item)
                            @php 
                            $key += 1;
                            @endphp
                            <tr>
                                <th scope="row">{{$key++}}</th>
                                <td>{{$item->Product->name}}</td>
                                <td>{{$item->Product->ProductGroup}}</td>
                                <td>{{$item->Product->CountryOfOrigin}}</td>
                                <td>{{$item->Product->Manufacturer}}</td>
                                <td>{{$item->WarehouseNumber}}</td>
                                <td>{{$item->buy}}</td>
                                <td>{{$item->sold}}</td>
                                <td>{{$item->available}}</td>
                                <td>{{$item->Product->BoxPrice_shop}}</td>
                                <td>{{$item->Product->BoxPrice_company}}</td>
                                <td>25/2/2000</td>
                                <td>{{$item->ExpiryDate}}</td>
                                <td>{{$item->Product->ProductBarcode}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("warehouse.show",$item->id) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$warehouse->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection