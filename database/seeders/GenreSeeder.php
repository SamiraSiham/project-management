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
                'genre' => 'Courses'
            ],
            [
                'id' => 2,
                'genre' => 'Tools'
            ],
            [
                'id' => 3,
                'genre' => 'Research'
            ], ]
        );
    }
}
