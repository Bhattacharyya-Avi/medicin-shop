<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::create([
            'name'=>'Admin',
            'address'=>'BD',
            'phone_no'=>'01712345678',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'email_verifier'=>'1',
            'email_verified_at'=>Carbon::now(),
            'role'=>'Admin',
            'email_verification_token'=>''

        ]);
    }
}
