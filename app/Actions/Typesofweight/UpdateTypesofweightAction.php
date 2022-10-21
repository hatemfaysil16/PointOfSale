<?php
namespace App\Actions\Typesofweight;

use App\Models\Typesofweight;
class UpdateTypesofweightAction
{
    public function handle(array $data,int $id):bool
    {
        return  Typesofweight::find($id)->update($data);
    }
}
