<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //php artisan make:fresh   -database silir tezden yaradir
    //php artisan make:fresh --seed  -database silir tezden seeder ile yaradir
    //php artisan db:seed
    //php artisan db:seed --class::AdminSeeder
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if(env('APP_ENV')!='production') {
            $this->call([
                MenuSeeder::class,
                AdminSeeder::class
            ]);
        }
    }
}
