<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarModal;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cars = json_decode(File::get('php-mastercars.json'), true);

        DB::table('cars')->truncate();

        foreach ($cars as $car) {
            $car = Car::create([
                'value' => $car['value'],
                'title' => $car['title'],
                'state_id' => State::randomState()->first()
            ]);

            $models = [];
            if(!empty($car['models'])){
                foreach ($car['models'] as $key => $model) {
                    $models[$key]['car_id'] = $car->id;
                    $models[$key]['value'] = $model['value'];
                    $models[$key]['title'] = $model['title'];
                    $models[$key]['created_at'] = now();
                    $models[$key]['updated_at'] = now();
                }

                CarModal::insert($models);
            }
        }
    }
}
