<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FicheSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $faker = Faker::create();
        $fileContent = $faker->paragraph;
        $fileName = 'fiche_1.txt';
        Storage::put('public/fiches/' . $fileName, $fileContent);
        DB::table( 'fiches' )->insert(
            [
                'id' => 1,
                'title' => 'Fiche 1',
                'author' => 'Samira Siham',
                'price' => 10.50,
                'categorie_id' => 1,
                'file_path' => 'fiches/' . $fileName,
            ]
        );
    }
}
