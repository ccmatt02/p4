<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $users = [
        ['jill@harvard.edu','jill','helloworld'],
        ['jamal@harvard.edu','jamal','helloworld'],
        ['ccmatt02@gmail.com','matt','helloworld']
      ];


      foreach($users as $user) {
        DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'email' => $user[0],
          'name' => $user[1],
          'password' => Hash::make($user[2]),
        ]);
      }

    }

}
