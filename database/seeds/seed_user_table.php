<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_user_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'firstName' => 'Erik',
                'lastName' => 'Brommell',
                'email' => 'erik@gmail.com',
                'phone' => '2041234657',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Amandeep',
                'lastName' => 'Kaur',
                'email' => 'amandeep@gmail.com',
                'phone' => '2041112222',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Jaspreet',
                'lastName' => 'Kaur',
                'email' => 'jaspreet@gmail.com',
                'phone' => '2042221111',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Mayowa',
                'lastName' => 'Ajamu',
                'email' => 'mayowa@gmail.com',
                'phone' => '2044567891',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Andrew',
                'lastName' => 'Tsang',
                'email' => 'andrew@gmail.com',
                'phone' => '2041212121',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Shristi',
                'lastName' => 'Malekoo',
                'email' => 'shristi@gmail.com',
                'phone' => '2049876541',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Pournima',
                'lastName' => 'Khandare',
                'email' => 'pournima@gmail.com',
                'phone' => '2047894566',
                'isAdmin' => 0,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        DB::table('users')->insert(
            [
                'firstName' => 'Admin',
                'lastName' => 'Adminion',
                'email' => 'admin@gmail.com',
                'phone' => '2048675309',
                'isAdmin' => 1,
                'points' => 1000000,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);
    }
}
