<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('hotels')->insert([
            'name' => 'Landmark Amman Hotel',
            'code' => substr(uniqid(), 0, 6),
            'latitude' => '31.960646',
            'longitude' => '35.904297',
            'description' => '',
            'terms_and_conditions' => ''
        ]);
        DB::table('hotels')->insert([
            'name' => 'The Conroy Boutique Hotel',
            'code' => substr(uniqid(), 0, 6),
            'latitude' => '31.966800',
            'longitude' => '35.875087',
            'description' => 'Only a 10-minute drive from the Old City, The Conroy Boutique Hotel is set in a striking building of Amman’s Umm Uthaina area, near shops and restaurants.',
            'terms_and_conditions' => ''
        ]);
        DB::table('hotels')->insert([
            'name' => 'Landmark Amman Hotel',
            'code' => substr(uniqid(), 0, 6),
            'latitude' => '31.960646',
            'longitude' => '35.904297',
            'description' => '',
            'terms_and_conditions' => ''
        ]);
        DB::table('hotels')->insert([
            'name' => 'Geneva Hotel',
            'code' => substr(uniqid(), 0, 6),
            'latitude' => '31.963551',
            'longitude' => '35.856678',
            'description' => '',
            'terms_and_conditions' => ''
        ]);
        DB::table('hotels')->insert([
            'name' => 'Rum art hotel',
            'code' => substr(uniqid(), 0, 6),
            'latitude' => '31.958338',
            'longitude' => '35.861769',
            'description' => '',
            'terms_and_conditions' => 'The relaxed rooms come with free Wi-Fi, flat-screen TVs and minibars, plus en suite bathrooms. Suites add living rooms with sofas. Room service is available 24/7.'
        ]);
        
    }

}
