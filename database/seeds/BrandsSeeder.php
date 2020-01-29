<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
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
            'id' => '1',
            'title' => 'Casio',
            'alias' => 'casio',
            'img' => 'abt-1.jpg',
            'description' => 'Простая математика, впримере не выявлена-но это очень занятное дело. Программирование',
        ],
        [
            'id' => '2',
            'title' => 'Citizen',
            'alias' => 'citizen',
            'img' => 'abt-2.jpg',
            'description' => 'Простая математика, впримере не выявлена-но это очень занятное дело. Программирование',
        ],
        [
            'id' => '3',
            'title' => 'Royal London',
            'alias' => 'royal london',
            'img' => 'abt-3.jpg',
            'description' => 'Простая математика, впримере не выявлена-но это очень занятное дело. Программирование',
        ],
         [
            'id' => '4',
            'title' => 'Seiko',
            'alias' => 'seiko',
            'img' => 'abt-4.jpg',
            'description' => 'Простая математика, впримере не выявлена-но это очень занятное дело. Программирование',
        ],
        [
            'id' => '5',
            'title' => 'Diesel',
            'alias' => 'diesel',
            'img' => 'diesel.jpg',
            'description' => 'Простая математика, впримере не выявлена-но это очень занятное дело. Программирование',
        ],
    ];

    DB::table('brands')->insert($data);
    }
}
