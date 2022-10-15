<div class="col-12 text-center">
    <span class="pointer plus">
        <img style="cursor: pointer" width="300" height="300" src="{{ asset($model->getFirstMediaUrl($NameUrl) )}}">
    </span>
</div>

<div class="col-12">
    <div class="form-group col-6 offset-3">
        <input type="file" name="image" class="dropify" data-height="300" />
    </div>
</div>

