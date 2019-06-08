<?php

use Illuminate\Database\Seeder;
use App\Country;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['code' => 'PK','name' => "Pakistan", 'dialing_code' => '+92','status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ];

        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
        Country::truncate();
        Country::insert($countries);
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );
    }
}
