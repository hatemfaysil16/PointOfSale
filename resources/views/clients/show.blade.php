@extends('layouts.master')
@section('title')
Clients | {{ $Client->name }}
@stop
@section('css')
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Clients</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $Client->id }}</span>
        </div>
    </div>
    
</div>
<!-- breadcrumb -->
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">Balance</h4>
            </div>

            <div class="card-body">
                <h1>1200 USD</h1>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<div class="row row-sm">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Client Information</h4>
            </div>
            <div class="card-body pt-0">
                <div class="form-horizontal" >
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="client-name" placeholder="Client Name" disabled value="Client Name {{ $Client->name }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-name" placeholder="Company Name" disabled value="Company Name {{ $Client->companyName }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-street" placeholder="Company Street" disabled value="Company Street {{ $Client->street }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-city" placeholder="Company City" disabled value="Company City {{ $Client->companyCity }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="company-state" placeholder="Company State" disabled value="Company State {{ $Client->CompanyState }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="postal-code" placeholder="Postal Code" disabled value="Postal Code {{ $Client->PostalCode }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone-number" placeholder="Phone Number" disabled value="Phone Number {{ $Client->phone }}">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">Invoices Information</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap">
                        <thead>
                            <tr>
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
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Company</td>
                                <td>24/06/2022</td>
                                <td>Ahmed Mikkawe</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>223512424</td>

                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("invoices.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Company</td>
                                <td>24/06/2022</td>
                                <td>Ahmed Mikkawe</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("invoices.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Company</td>
                                <td>24/06/2022</td>
                                <td>Ahmed Mikkawe</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("invoices.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Company</td>
                                <td>24/06/2022</td>
                                <td>Ahmed Mikkawe</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>223512424</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("invoices.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
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