<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CityTableSeeder extends Seeder {

      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
            Model::unguard();
            DB::table('cities')->delete();

      // $this->call('UserTableSeeder');
            $this->call('CityTableSeeder1');
            $this->call('CityTableSeeder2');
            $this->call('CityTableSeeder3');
            $this->call('CityTableSeeder4');
            $this->call('CityTableSeeder5');
            $this->call('CityTableSeeder6');
      }

}