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
        $user->name = 'Brown';
        $user->email = 'admin@ramecoin.com';
        $user->password = bcrypt('123456');
        $user->role = 'admin';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Halmiton';
        $user->email = 'user@ramecoin.com';
        $user->password = bcrypt('123456');
        $user->role = 'member';
        $user->uuid = (string) \Str::uuid();
        $user->save();
    }
}
