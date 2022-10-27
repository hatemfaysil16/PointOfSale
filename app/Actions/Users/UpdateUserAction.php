<?php
namespace App\Actions\Users;

use App\helpers\HandleImage;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{
    use HandleImage;
    public function handle(User $user,array $data): User
    {
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
            $user->update(Arr::except($data, 'image'));
        }else{
            $user->update(Arr::except($data, 'password','image'));
        }
        DB::table('model_has_roles')->where('model_id',$user->id)->delete();
        $user->assignRole($data['roles']);
        $this->UpdateImage($data,$user,'profile');
        return $user;
    }
}