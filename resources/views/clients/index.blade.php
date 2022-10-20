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
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("clients.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>United States of America</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td></td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>United States of America</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td></td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>United States of America</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td></td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>United States of America</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td></td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>United States of America</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td></td>
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>14442 st</td>
                                <td>Shebin Alkom</td>
                                <td>Menofia</td>
                                <td>223512</td>
                                <td>222-42-10</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
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