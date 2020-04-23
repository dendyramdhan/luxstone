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
        \App\User::insert([  
            [
              'userid'  		=> 'USR00001',
              'name'  			=> 'Root',
              'username'		=> 'root_fgt',
              'email' 			=> 'it@fagetti.com',
              'password'		=> bcrypt('root123'),
              'picture'			=> NULL,
              'level_user'  => 'root',
              'del_stat'	  => false,
              'created_at'  => \Carbon\Carbon::now(),
              'updated_at'  => \Carbon\Carbon::now()
            ],
            [
              'userid'  		=> 'USR00002',
              'name'  			=> 'Admin',
              'username'		=> 'admin_fgt',
              'email' 			=> 'admin@fagetti.com',
              'password'		=> bcrypt('admin123'),
              'picture'			=> NULL,
              'level_user'  => 'admin',
              'del_stat'	  => false,
              'created_at'  => \Carbon\Carbon::now(),
              'updated_at'  => \Carbon\Carbon::now()
            ],
            [
              'userid'  		=> 'USR00003',
              'name'  			=> 'Blogger',
              'username'		=> 'blogger_fgt',
              'email' 			=> 'blogger@fagetti.com',
              'password'		=> bcrypt('blogger123'),
              'picture'			=> NULL,
              'level_user'  => 'blogger',
              'del_stat'	  => false,
              'created_at'  => \Carbon\Carbon::now(),
              'updated_at'  => \Carbon\Carbon::now()
            ]
        ]);
    }
}
