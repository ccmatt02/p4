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
          'description' => 'Fortuna fortis; Facillimum id quidem est, inquam. Compensabatur, inquit, cum summis doloribus laetitia. Quod cum dixissent, ille contra. Ita prorsus, inquam; Duo Reges: constructio interrete. Recte dicis; Quid iudicant sensus.',
        ]);

        DB::table('rooms')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'room_number' => 102,
          'image_link' => '/images/bedroom-2.jpg',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid de Pythagora? Tamen a proposito, inquam, aberramus. Quippe: habes enim a rhetoribus; Confecta res esset. Certe, nisi voluptatem tanti aestimaretis',
        ]);
    }
}
