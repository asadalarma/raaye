<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ************************************
        // Creating users
        // ************************************
        $users = [

            // Admin
            [
                'city_id' => 283,
                'name' => 'Admin',
                'email' => 'admin@mailinator.com',
                'password' => bcrypt('admin'),
                'username' => 'admin',
                'phone' => '123456789',
                'status' => 'on',
                'type' => User::ADMIN,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'city_id' => 283,
                'name' => 'Admin',
                'email' => 'admin1@mailinator.com',
                'password' => bcrypt('admin1'),
                'username' => 'admin1',
                'phone' => '123456789',
                'status' => 'on',
                'type' => User::ADMIN,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
        User::truncate();
        User::insert($users);
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );
    }
}
