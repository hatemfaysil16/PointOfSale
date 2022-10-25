@extends('layouts.master')
@section('title')
Clients | Add New Client
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Clients</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New Client</span>
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
            <div class="card-header">
                <h4 class="card-title mb-1">Client Information</h4>
            </div>
            <div class="card-body pt-0">
                <form action="{{ $action }}" method="post" class="form-horizontal">
                    @include('layouts.component.csrf_put.csrf_put')
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'name','value'=>$Client->name,'placeholder'=>"Client Name"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'companyName','value'=>$Client->companyName,'placeholder'=>"company Name"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'CompanyState','value'=>$Client->CompanyState,'placeholder'=>"Company State"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'street','value'=>$Client->street,'placeholder'=>"Company Street"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'companyCity','value'=>$Client->companyCity,'placeholder'=>"Company City"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'CompanyState','value'=>$Client->CompanyState,'placeholder'=>"Company State"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'PostalCode','value'=>$Client->PostalCode,'placeholder'=>"Postal Code"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-input.input',['name'=>'phone','value'=>$Client->phone,'placeholder'=>"Phone Number"])
                        </div>
                    </div>

                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            @include('layouts.component.form-submit.submit')
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
@endsection
