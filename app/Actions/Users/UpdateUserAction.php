<?php
namespace App\Actions\Users;
class UpdateUserAction
{
    public function handle(Typesofweight $typesofweight,array $data): Typesofweight
    {
          $typesofweight->update($data);
          return $typesofweight;
    }
}
