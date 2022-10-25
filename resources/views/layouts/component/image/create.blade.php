<input type="file" name="image" value="" class="dropify" data-height="300" />
@if(isset($model->id))
    <span class="pointer plus">
        <img style="cursor: pointer" width="300" height="300" src="{{ asset($model->getFirstMediaUrl($name) )}}">
    </span>
@endif