<?php
namespace App\Actions\Users;

use App\helpers\HandleImage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserAction
{
    use HandleImage;
    public function handle(array $data): User
    {
        $user = User::create($data);
        $data['password'] = Hash::make($data['password']);
        $user->assignRole($data['roles']);
        $this->storeImage($data,$user,'profile');
        return $user;
    }
}
