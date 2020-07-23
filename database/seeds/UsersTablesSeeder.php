<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create( ['name' => 'เอกชัย',
        'username' => '594020336',
        'sex' => 'ชาย',
        'status' => 'นิสิต',
        'email' => 'หะีกำืะgmail.com',
        'password' => Hash::make('123456'),
        'remember_token' => str_random(10), ]);
    }
}
