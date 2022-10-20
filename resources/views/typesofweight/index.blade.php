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
            <h4 class="content-title mb-0 my-auto">Types of weight</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Types of weight</span>
        </div>
    </div>
        @include('layouts.component.form-search.search',['route'=>route('typesofweight.index')])
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
                                <th>Types of weight Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($Typesofweight as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{route('typesofweight.edit',$item->id)}}" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button type="button" data-toggle="modal" data-target="#delete{{ $item->id }}" class="btn btn-danger btn-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @include('layouts.modals.delete-modal', ['id' => $item->id, 'name' => $item->name, 'route' => route('typesofweight.destroy', $item->id) ])
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$Typesofweight->links()}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection