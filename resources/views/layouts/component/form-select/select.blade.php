<div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
    <div class="form-group">
        <select class="form-control select2-no-search">
            <option value="" disabled="">Select Product</option>
            @foreach ($foreach as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>
