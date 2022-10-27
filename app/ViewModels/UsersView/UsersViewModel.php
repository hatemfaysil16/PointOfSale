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
    public  $userRole;

    public function __construct($user = null)
    {
        $this->user = is_null($user) ? new User(old()) : $user;
        $this->type = is_null($user)?'Add':'Edit' ; 
        $this->roles = Role::pluck('name','name')->all();
        $this->userRole = is_null($user) ? new User(old()) : $user->roles->pluck('name','name')->all();
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
