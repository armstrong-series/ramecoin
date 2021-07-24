<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Armstrong';
        $user->email = 'admin@clusterwink.io';
        $user->password = bcrypt('123456');
        $user->role = 'admin';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Audrey';
        $user->email = 'user@clusterwink.io';
        $user->password = bcrypt('123456');
        $user->role = 'member';
        $user->uuid = (string) \Str::uuid();
        $user->save();
    }
}
