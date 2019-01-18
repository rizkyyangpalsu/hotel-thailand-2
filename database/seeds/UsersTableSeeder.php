<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    protected $data = [
        [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 'secret',
            'role' => 'admin'
        ],[
            'name' => 'member',
            'email' => 'member@member.com',
            'username' => 'member',
            'password' => 'secret',
            'role' => 'member'
        ],[
            'name' => 'guest',
            'email' => 'guest@guest.com',
            'username' => 'guest',
            'password' => 'secret',
            'role' => 'guest'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $datum) {
            $user = new \App\User();
            $user->fill($datum);
            $user->save();

            $this->command->getOutput()->text($user->name . ' was created');
        }
    }
}
