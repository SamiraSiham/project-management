<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role_Get_Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_has_permissions')->where('permission_id', 1)->delete();

        $permissions = [];
        for ($permission_id = 1; $permission_id <= 24; $permission_id++) {
            $permissions[] = [
                'role_id' => 1,
                'permission_id' => $permission_id,
            ];
        }
        
        DB::table('role_has_permissions')->insert($permissions);
    }
}
