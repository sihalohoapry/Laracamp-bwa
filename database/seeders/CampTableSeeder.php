<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
                'title'=> 'Gila Belajar',
                'slug'=> 'gila-belajar',
                'price'=> 280,
                // 'created_at'=> date('Y-m-d H:i:s', time()),
                // 'updated_at'=> date('Y-m-d H:i:s', time()),
            ],
            [
                'title'=> 'Baru Mulai',
                'slug'=> 'baru-mulai',
                'price'=> 140,
            ],
        ];

        foreach ($camp as $key => $camp) {
            Camp::create($camp);
        }
    }
}