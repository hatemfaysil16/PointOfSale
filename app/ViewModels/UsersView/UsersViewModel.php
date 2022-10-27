<?php
namespace App\ViewModels\UsersView;
use App\Models\Typesofweight;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\ViewModels\ViewModel;

class UsersViewModel extends ViewModel
{
    public  $user;
    public  $type;
    public  $roles;

    public function __construct($user = null)
    {
        $this->roles = Role::pluck('name','name')->all();
        $this->type = is_null($user)?'Add':'Edit' ; 
        $this->user = is_null($user) ? new User(old()) : $user;
    }

    public function action(): string
    {
        return is_null($this->user->id)
            ? route('users.store')
            : route('users.update', $this->user->id);
    }

    public function method(): string
    {
        return is_null($this->user->id) ? 'POST' : 'PUT';
    }
}
