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
        $user->update(Arr::except($data, 'image'));
        if(!empty($input['password'])){
        $data['password'] = Hash::make($data['password']);
        }else{
        // $input = array_except($data,array('password'));
        }
        $user->update($data);
        DB::table('model_has_roles')->where('model_id',$user->id)->delete();
        $user->assignRole($data['roles']);
        $this->UpdateImage($data,$user,'profile');
        return $user;
    }
}

        
//    $user->update(Arr::except($data, 'image'));
//     $this->UpdateImage($data,$user,'product');
//     return $user;