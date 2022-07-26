<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Adventure', 'Drama'];

        foreach ($genres as $genre) {
            \DB::table('genres')->insert(['name' => $genre, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
