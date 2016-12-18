<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'room_number' => 101,
          'image_link' => '/images/bedroom-1.jpg',
          'description' => 'sample descripton text',
        ]);

        DB::table('rooms')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'room_number' => 102,
          'image_link' => '/images/bedroom-2.jpg',
          'description' => 'sample descripton text',
        ]);
    }
}
