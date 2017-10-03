<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        factory(\App\User::class)->create([
            'name'     => 'Kaue Rodrigues',
            'email'    => 'kauemsc@gmail.com',
            'password' => app('hash')->make('kauemsc@gmail.com')
        ]);
    }
}
