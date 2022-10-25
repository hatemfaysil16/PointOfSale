<div class="col-lg-3 col-xl-3 col-md-3 col-sm-6">
    <div class="form-group">
        <select class="form-control select2-no-search" value=""  name="{{$name}}">
            <option value="" disabled="">Select {{$nameselect}}</option>
            @foreach ($foreach as $item)
            @if (isset($model->id))
            {{--  edit  --}}
            <option value="{{$item->id}}" {{ $item->id == $model->$name ?'selected':''}}>{{$item->name}}</option>
            @else
            {{--  create  --}}
            <option value="{{$item->id}}" @if (old($name)==$item->id) {{ 'selected' }} @endif >{{$item->name}}</option>
            @endif
            @endforeach
        </select>
    </div>
</div>
