<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([

        	'site_name' => '3 S Tech Lab ',
        	'address' => 'Lahore , Cantt',
        	'contact_number' => '111-000-8976-777 04 9',
        	'contact_email' => 'info@3sTech_Admin.com',
        	'about_us' => 'We are 3s Tech Lab Producer, Nishat Coloney Near DHA'
        	]);
    }
}
