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
      //  for ($i=0;$i<100;$i++):
           DB::table('users')->insert([
                'name'=>str_random(10),
                'email'=>str_random(12),
                'password'=>str_random(10),

            ]);


          //  endfor;
    }
}
