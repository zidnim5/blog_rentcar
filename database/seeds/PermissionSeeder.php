<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** permission */
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-create',
            'user-edit',
            'user-delete',
            'item_permission-create',
            'item_permission-edit',
            'item_permission-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        /** role */
        $role = new Role;
        $role->name = 'admin';

        $role->save();

        foreach($permissions as $item_permission){
            $role->givePermissionTo($item_permission);
        }

    }
}
