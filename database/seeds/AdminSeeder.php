<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['roles']='admin';
        $data['email']='admin@gmail.com';
        $data['password']=bcrypt('admin002');
        $data['first_name']='admin';
        $data['last_name']='hero';
        $data['phone']='01421755';
        $data['verified']='1';
        \App\User::create($data);
    }
}
