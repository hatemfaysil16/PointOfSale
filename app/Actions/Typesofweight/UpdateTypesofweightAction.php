<?php
namespace App\Actions\Typesofweight;

use App\Models\Typesofweight;
class UpdateTypesofweightAction
{
    public function handle(array $data,int $id):Typesofweight
    {
        return  Typesofweight::find($id)->update($data);
    }
}