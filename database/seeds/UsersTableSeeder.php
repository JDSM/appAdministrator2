<?php
use \App\User;
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
        User::create([
            'name'=>'webMaster',
            'email'=>'admin@webmaster.com',
            'password'=>bcrypt('123456')
        ]);
    }
}
