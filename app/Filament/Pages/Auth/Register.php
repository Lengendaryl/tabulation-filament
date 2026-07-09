<?php

namespace App\Filament\Pages\Auth;

use Caresome\FilamentAuthDesigner\Pages\Auth\Register as BaseRegisterPage;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Register extends BaseRegisterPage
{
    protected function handleRegistration(array $data): Model
    {
        $user = parent::handleRegistration($data);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web',
        ]);

        $user->assignRole($superAdminRole);

        return $user;
    }
}
