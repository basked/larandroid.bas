<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marks = ['Audi', 'Ford', 'VW', 'Mazda', 'Volvo', 'Lada'];
        Car::truncate();
        $facker = \Faker\Factory::create();

        // для Audi
        foreach ($marks as $mark) {
            for ($j = 0; $j < 25; $j++) {
                Car::create([
                    'mark' => $mark,
                    'model' => $mark . ' ' . $facker->randomLetter,
                    'color' => $facker->colorName,
                    'summ' => $facker->randomFloat(3, 5000, 25000)
                ]);
            }
        }
    }
}