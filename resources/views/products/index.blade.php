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
                            <tr>
                                <th scope="row">1534535345</th>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="{{ route("products.show",1) }}" class="btn btn-success btn-icon"><i class="fas fa-eye"></i></a>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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
                                <td>Egypt</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                <td>$170,750</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$86,000</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="btn-icon-list">
                                        <a href="#" class="btn btn-secondary btn-icon"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                                <td>$162,700</td>
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