<?php

namespace App\Libs;
use App\Http\Requests;
trait HandleImage
{

	public function CreateImage($request,$model,$nameImage){
        if ($request->image) {
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}

	public function UpdateImage($request,$model,$nameImage){
        if ($request->image) {
            $model->clearMediaCollection($nameImage);
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}


}