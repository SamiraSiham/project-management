<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        DB::table( 'genres' )->insert(
            [ [
                'id' => 1,
                'genre' => 'Management Courses'
            ],
            [
                'id' => 2,
                'genre' => 'Management Tools'
            ],
            [
                'id' => 3,
                'genre' => 'Management Research'
            ], ]
        );
    }
}
