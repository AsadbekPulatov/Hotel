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
                "service_id" => 1,
                "title" => "UZBEKISTON MEHMONXONASI",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 1000000,
                "image" => "1705560872_xona1.jpg",
            ],
            [
                "service_id" => 1,
                "title" => "UZBEKISTON MEHMONXONASI",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 2000000,
                "image" => "1705560904_xona2.jpg",
            ],
            [
                "service_id" => 1,
                "title" => "UZBEKISTON MEHMONXONASI",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 1500000,
                "image" => "1705560952_xona3.jpg",
            ],
            [
                "service_id" => 2,
                "title" => "HOTEL KARAVAN",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 1000000,
                "image" => "1705561027_xona4.jpg",
            ],
            [
                "service_id" => 2,
                "title" => "HOTEL KARAVAN",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 2000000,
                "image" => "1705561076_xona5.jpg",
            ],
            [
                "service_id" => 3,
                "title" => "FAYZ MEHMONXONASI",
                "text" => "Mehmonxonamizda siz xoxlagan turdagi xonalar mavjud.",
                "room" => 2,
                "bed" => 4,
                "price" => 1500000,
                "image" => "1705561120_xona6.jpg",
            ],
        ];
        Room::insert($rooms);
    }
}
