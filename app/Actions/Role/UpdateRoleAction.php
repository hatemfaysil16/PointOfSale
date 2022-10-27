<?php
namespace App\Actions\Role;
use Spatie\Permission\Models\Role;
class UpdateRoleAction
{
    public function handle(Role $role,array $data): Role
    {
        $role->name = $data['name'];
        $role->save();
        $role->syncPermissions($data['permission']);
        return $role;
    }
}