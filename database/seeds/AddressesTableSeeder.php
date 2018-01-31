<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('addresses')->insert(array(
                  array('iduser'=>'1','street'=>'calle 73', 'number'=>'87', 'neighborhood'=>'Puebla', 'zipcode'=>'57027', 'state'=>'Ciudad de Mexico', 'country'=>'Mexico'),
                  array('iduser'=>'2','street'=>'rio rhin', 'number'=>'77', 'neighborhood'=>'Cuauhtemoc', 'zipcode'=>'67010', 'state'=>'Ciudad de Mexico', 'country'=>'Mexico'),
                  array('iduser'=>'3','street'=>'montes urales', 'number'=>'777', 'neighborhood'=>'Miguel Hidalgo', 'zipcode'=>'3434', 'state'=>'Ciudad de Mexico', 'country'=>'Mexico'),
               ));
    }
}
