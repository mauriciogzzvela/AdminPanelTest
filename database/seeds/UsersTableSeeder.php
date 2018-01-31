<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array(
                  array('name'=>'mauricio','email'=>'mauricio@admin.com', 'password'=>bcrypt('qazwsx'), 'idrol'=>'1'),
                  array('name'=>'staff','email'=>'mauricio@staff.com', 'password'=>bcrypt('qazwsx'), 'idrol'=>'2'),
                  array('name'=>'customer','email'=>'mauricio@customer.com', 'password'=>bcrypt('qazwsx'), 'idrol'=>'3'),
               ));
    }
}
