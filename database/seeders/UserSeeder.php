<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('customers')->truncate();

        $customers = [
            [
                'name' => 'John Wick',
                'email' => 'JohnWick@example.com',
                'password' => bcrypt('123456'),
                'state_id' => State::randomState()->first()
            ],
            [
                'name' => 'Gino Pietermaai',
                'email' => 'GinoPietermaai@example.com',
                'password' => bcrypt('123456'),
                'state_id' => State::randomState()->first()
            ],
            [
                'name' => 'Json Derulo',
                'email' => 'JsonDerulo@example.com',
                'password' => bcrypt('123456'),
                'state_id' => State::randomState()->first()
            ],
            [
                'name' => 'Donald Duck',
                'email' => 'DonaldDuck@example.com',
                'password' => bcrypt('123456'),
                'state_id' => State::randomState()->first()
            ],
        ];

        foreach ($customers as $customer) {
            $user = User::create($customer);

            $user->cars()->sync(Car::inRandomOrder()->take(5)->get()->pluck('id'));
        }

    }
}
