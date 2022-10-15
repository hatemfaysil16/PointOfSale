@if (!empty($model->getFirstMediaUrl($NameUrl)))
<img src="{{ asset($model->getFirstMediaUrl($NameUrl) )}}" style="width: 70px;height:40px">
@else
not image
@endif