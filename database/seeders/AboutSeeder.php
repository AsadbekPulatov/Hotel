<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abouts = [
            [
                "title" => "UZBEKISTON MEHMONXONASI",
                "text" => "Xorazm viloyatidagi eng qulay va yaxshi mehmonxona bu UZBEKISTAN mehmonxonasi."
            ],
            [
                "title" => "KARAVAN MEHMONXONASI",
                "text" => "Urganch shahrida joylashgan Karavan mehmonxonasi siz uchun juda qulay.Xamma shart-sharoitlari mavjud."
            ],
            [
                "title" => "FAYZ MEHMONXONASI",
                "text" => "Urganch shaxri Al-Xorazmiy ko'chasida joylashgan Fayz mehmonxonasi xamma sharoitlarga ega."
            ],
        ];
        About::insert($abouts);
    }
}
