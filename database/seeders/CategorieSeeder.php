<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        DB::table( 'categorie' )->insert(
            [ [
                'id' => 1,
                'nom_categorie' => 'General knowledge',
                'genre_id' => 1
            ],
            [
                'id' => 2,
                'nom_categorie' => 'Academics',
                'genre_id' => 1
            ],
            [
                'id' => 3,
                'nom_categorie' => 'Live courses',
                'genre_id' => 1
            ],
            [
                'id' => 4,
                'nom_categorie' => 'Market Research',
                'genre_id' => 2
            ],
            [
                'id' => 5,
                'nom_categorie' => 'Strategy',
                'genre_id' => 2
            ],
            [
                'id' => 6,
                'nom_categorie' => 'Finance',
                'genre_id' => 2
            ],
            [
                'id' => 7,
                'nom_categorie' => 'Project Management',
                'genre_id' => 2
            ],
            [
                'id' => 8,
                'nom_categorie' => 'Moroccan Context',
                'genre_id' => 3
            ],
            [
                'id' => 9,
                'nom_categorie' => 'International Context',
                'genre_id' => 3
            ],
            [
                'id' => 10,
                'nom_categorie' => 'Applied Context',
                'genre_id' => 3
            ], ]
        );
    }
}
