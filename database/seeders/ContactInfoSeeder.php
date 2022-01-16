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
            'social'=> '{"facebook":null,"linkedin":null,"twitter":null,"youtube":null}',
            'Maps'=> 'src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14594.225396951082!2d90.3842619!3d23.8698828!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1642325086605!5m2!1sen!2sbd"'



        ]);
    }
}
