{{--  validation toastr  --}}
@if(Session::has('add'))
<script>
    toastr.success("{!! Session::get('add') !!}");
</script>
@endif
@if(Session::has('success'))
<script>
    toastr.success("{!! Session::get('success') !!}");
</script>
@endif
@if(Session::has('edit'))
<script>
    toastr.success("{!! Session::get('edit') !!}");
</script>
@endif
@if(Session::has('delete'))
<script>
    toastr.error("{!! Session::get('delete') !!}");
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error("{!! Session::get('error') !!}");
</script>
@endif
@if(Session::has('field'))
<script>
    toastr.error("{!! Session::get('field') !!}");
</script>
@endif