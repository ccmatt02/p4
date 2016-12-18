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
      DB::table('users')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => "Jill",
        'email' => 'jill@harvard.edu',
        'password' => '$2y$10$OQlBXND1UQqcNLEjRgyznuAeTBQo1lvY5khQD1FB8v9RA3Ol2JOr6',
      ]);

      DB::table('users')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => "Jamal",
        'email' => 'jamal@harvard.edu',
        'password' => '$2y$10$FD7z1j/3GN2djVzzHasREeMRP62WHVNmeZnlkPZfmSQvggzzDLUge',
      ]);
    }
}
