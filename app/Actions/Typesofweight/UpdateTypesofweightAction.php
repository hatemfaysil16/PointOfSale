<?php
namespace App\Actions\Typesofweight;
use App\Models\Typesofweight;
class UpdateTypesofweightAction
{
    public function handle(Typesofweight $typesofweight,array $data): Typesofweight
    {
          $typesofweight->update($data);
          return $typesofweight;
    }
}
