<?php

use App\Models\Problem;
use Illuminate\Database\Seeder;

class ProblemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Перегорел трансформатор'
            ],
            [
                'name' => 'Замена кабеля'
            ],
            [
                'name' => 'Установка счётчика'
            ]
        ];
        for($i = 0; $i < count($data); $i++) {
            Problem::create($data[$i]);
        }
    }
}
