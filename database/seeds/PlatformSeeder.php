<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = ['XBOX One', 'PS5', 'PC'];

        foreach ($platforms as $platform) {
            \DB::table('platforms')->insert(['name' => $platform, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
