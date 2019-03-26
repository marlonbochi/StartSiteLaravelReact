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
            'name' => "Admin",
            'email' => 'marlon.bueno@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
