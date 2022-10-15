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
                                <th>Invoice ID</th>
                                <th>Invoice Type</th>
                                <th>Invoice Date</th>
                                <th>Customer Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Total</th>
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
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
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
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
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
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
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
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
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