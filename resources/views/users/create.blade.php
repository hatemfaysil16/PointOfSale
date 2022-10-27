@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@section('title')
Add User
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ New User</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('layouts.MassageValidations.ErrorValidation')
<!-- row -->
<div class="row">


    <div class="col-lg-12 col-md-12">


        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">User Information</h4>
            </div>

            <div class="card-body pt-0">
                <form action="{{ $action }}" class="parsley-style-1 form-horizontal" id="selectForm2" autocomplete="off" name="selectForm2" method="post" enctype="multipart/form-data">
                @include('layouts.component.csrf_put.csrf_put')
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                        @include('layouts.component.form-input.input',['name'=>'name','value'=>$user->name,'placeholder'=>"User Name"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-email.email',['name'=>'email','type'=>'email','value'=>$user->email,'placeholder'=>"E-mail"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-password.password',['name'=>'password','type'=>'password','value'=>$user->password,'placeholder'=>"Password"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.form-password.password',['name'=>'confirm-password','type'=>'password','value'=>$user->password,'placeholder'=>"Confirm Password"])
                        </div>
                        <div class="col-sm-12 col-md-6">
                           @include('layouts.component.form-select-one.select-one',['foreach'=>(App\Models\Consts::ACTIVE),'name'=>'status','model'=>$user,'nameselect'=>'status'])
                        </div>
                        <div class="col-sm-12 col-md-6">
                           @include('layouts.component.form-select-role.role')
                        </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            @include('layouts.component.image.create',['model'=>$user,'name'=>'profile'])
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
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')


<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>                                

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection