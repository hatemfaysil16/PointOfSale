@extends('layouts.master')
@section('title')
Clients | All Clients

@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Clients</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Clients</span>
        </div>
    </div>
        @include('layouts.component.form-search.search',['route'=>route('clients.index')])
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
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Company Street</th>
                                <th>Company City</th>
                                <th>Company State</th>
                                <th>Postal Code</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($Client as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <th >{{$item->name}}</th>
                                <td>{{$item->companyName}}</td>
                                <td>{{$item->street}}</td>
                                <td>{{$item->companyCity}}</td>
                                <td>{{$item->CompanyState}}</td>
                                <td>{{$item->PostalCode}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{route('clients.edit',$item->id)}}" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button type="button" data-toggle="modal" data-target="#delete{{ $item->id }}" class="btn btn-danger btn-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @include('layouts.modals.delete-modal', ['id' => $item->id, 'name' => $item->companyName, 'route' => route('clients.destroy', $item->id) ])
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