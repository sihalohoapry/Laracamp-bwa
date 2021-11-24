<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefit = [
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>1,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>2,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>2,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>2,
                'name'=>'Pro Techstack Kit',
            ],
            [
                'camp_id'=>2,
                'name'=>'Pro Techstack Kit',
            ],
        ];
        CampBenefit::insert($campBenefit);
    }
}
