<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                "title" => "Mehmonxonamizda siz hohlagan xamma sharoit bor.Xonalar siz xoxlagandek qulay",
                "text" => "Bizda lux xonalar ham mavjud.",
                "room" => 2,
                "bed" => 4,
                "image" => "1703005606_ichi 4.jpg",
            ],
            [
                "title" => "Uzbekiston Mehmonxonasi sizga albatta ma'qul keladi",
                "text" => "Urganch shahridagi eng yaxshi va eng oldi mehmonxonalardan biri bu UZBEKISTON mehmonxonasi.",
                "room" => 2,
                "bed" => 4,
                "image" => "1703005642_476604326.jpg",
            ],
            [
                "title" => "Fayz mehmonxonasi haqida ma'lumot",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "image" => "1703005679__1683273371ivGf_1024x768.jpg",
            ],
        ];
        Room::insert($rooms);
    }
}
