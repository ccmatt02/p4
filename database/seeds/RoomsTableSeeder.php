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
          'image_link' => 'http://hotelpropeller.com/wp-content/uploads/2013/04/Bed-and-Breakfast-Facebook-Page.jpg',
          'description' => 'sample descripton text',
        ]);
    }
}
