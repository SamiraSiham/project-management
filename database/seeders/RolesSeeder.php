<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [

                'name' => 'Admin',
                "guard_name" => "web",
                'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' )

            ],[

                'name' => 'Moderator',
                "guard_name" => "web",
                'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' )

            ],[

                'name' => 'Guest',
                "guard_name" => "web",
                'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' )

            ]
        ]);
    }
}
