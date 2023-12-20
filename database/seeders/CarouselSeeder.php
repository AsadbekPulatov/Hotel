<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carousels = [
            [
                "image" => "1703005280_1 rasm.jpg"
            ],
            [
                "image" => "1703005293_bassen.jpg"
            ],
            [
                "image" => "1703005384__1683273371ivGf_1024x768.jpg"
            ],
            [
                "image" => "1703005411_403505749.jpg"
            ],
        ];
        Carousel::insert($carousels);
    }
}
