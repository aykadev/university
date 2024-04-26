<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Germany',
            'United States of America',
            'Hungary',
            'China',
            'Russia',
            'Great Britain',
            'Canada',
            'Turkey',
            'Japan',
            'Turkmenistan',
        ];

        foreach($objs as $obj) {
            Location::create([
                'name'=>$obj,
            ]);
        }
    }
}
