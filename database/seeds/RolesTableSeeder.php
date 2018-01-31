<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert(array(
                  array('idrol'=>'1','rolname'=>'Admin'),
                  array('idrol'=>'2','rolname'=>'Staff'),
                  array('idrol'=>'3','rolname'=>'CustomerService'),
               ));
    }
}
