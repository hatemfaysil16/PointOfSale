<div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
    <div class="form-group">
        <select class="form-control select2-no-search" value=""  name="{{$name}}">
            <option value="" disabled="">Select {{$nameselect}}</option>
            @foreach ($foreach as $item)
            @if (isset($model))
            {{--  edit  --}}
            <option value="{{$item}}" {{ $item == $model->$name ?'selected':''}}>{{$item}}</option>
            @else
            {{--  create  --}}
            <option value="{{$item}}" @if (old($name)==$item) {{ 'selected' }} @endif >{{$item}}</option>
            @endif
            @endforeach
        </select>
    </div>
</div>