<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SHIMUN',
            'email' => 'rlinfobd@gmail.com',
            'phone' => '01912586164',
            'user_role' =>"admin",
            'password' => bcrypt(12345678),

        ]);

        category::create([
            'name' => 'UnCategorized',
            'slug' =>Str::slug('UnCategorized')
        ]);
    }
}
