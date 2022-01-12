<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        settings::create([
            'address' => 'Gazipur, Dhaka, Bangladesh',
            'email' => 'rlinfobd@gmail.com',
            'Contact' =>'01912586164',
            'social'=> '{"facebook":null,"linkedin":null,"twitter":null,"youtube":null}'



        ]);
    }
}
