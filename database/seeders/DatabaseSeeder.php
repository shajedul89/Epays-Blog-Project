<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\post::factory(20)->create();
        $this->call(MakeTableSeeder::class);
        $this->call(ContactInfoSeeder::class);
    }
}
