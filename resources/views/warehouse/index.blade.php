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
                                <th>Buy</th>
                                <th>Sold</th>
                                <th>Available</th>
                                <th>Box Client Price</th>
                                <th>Box Company Price</th>
                                <th>Prod. Date</th>
                                <th>Exp. Date</th>
                                <th>Expires in</th>
                                <th>Barcode</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                <th scope="row">1534535345</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->ProductGroup}}</td>
                                <td>{{$item->CountryOfOrigin}}</td>
                                <td>{{$item->Manufacturer}}</td>
                                @php
                                    $Purchase = App\Models\Purchase::where('products_id',$item->id)->sum('quantity');
                                    $sell = App\Models\Invoice::where('products_id',$item->id)->where('type','show')->sum('qty');
                                @endphp
                                <td>{{$Purchase}}</td>
                                <td>{{$sell}}</td>
                                <td>{{$Purchase - $sell}}</td>
                                <td>223512</td>
                                <td>223512</td>
                                <td>25/2/2000</td>
                                <td>25/2/2000</td>
                                <td>1 Y 2 M 3 D</td>
                                <td>1534535345</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("warehouse.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            @endforeach
                            </tr>
                            {{--  <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>Cloths</td>
                                <td>United Kingdom</td>
                                <td>Samsung</td>
                                <td>1200</td>
                                <td>400</td>
                                <td>223512</td>
                                <td>223512</td>
                                <td>25/2/2000</td>
                                <td>25/2/2000</td>
                                <td>1 Y 2 M 3 D</td>
                                <td>1534535345</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("warehouse.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>  --}}
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