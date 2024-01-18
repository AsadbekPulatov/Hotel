<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "title" => "UZBEKISTON MEHMONXONASI",
                "text" => "Amir Temur maydonidan 100 metrda joylashgan ushbu mehmonxona Toshkentning markazida joylashgan.
                O'zbekiston mehmonxonasida klassik tarzda jihozlangan xonalar va minibarli suitlar mavjud. Ichkarida quyoshli yog'och mebel va nozik mato mavjud.
                Uzbekistan mehmonxonasida dam olish va davolovchi masajlar mavjud.
                Amir Temur Metro Stantsiyani 100 metr masofada joylashgan va 2 ta metro liniyasida joylashgan.",
                "image" => "1705560100_484224608.jpg",
            ],
            [
                "title" => "HOTEL KARAVAN",
                "text" => "HOTEL KARAVAN mehmonxonasida restoran, bar, umumiy dam olish maskani va Urganchda bog‘ mavjud. Xonalarga oziq-ovqat va ichimliklar yetkazib berish tashkil etilgan. Imkoniyatlarga bankomat va barcha hududlarda bepul Wi-Fi kiradi. Resepsiyon kuniga 24 soat ochiq. Mehmonlar umumiy oshxonadan foydalanishlari va valyuta ayirboshlashlari mumkin.",
                "image" => "1703008912_198885082.jpg",
            ],
            [
                "title" => "FAYZ MEHMONXONASI",
                "text" => "FAYZ MEHMONXONASI - Urganch, O'zbekiston xaritadasida tashkilotning joylashuvi iloji boricha aniq ko'rsatilgan, xato 100 metrdan oshmaydi. Yaqin atrofda bir nechta tashkilotlar joylashgan: eng yaqin mo'ljal: URGANCH 3-SONLI OILAVIY POLIKLINIKASI (0.29 km), shuningdek SHER HOTEL (0.36 km) va ASAKA BANK XORAZM VILOYAT BO'LIMI",
                "image" => "1703009064_Без названия.jpg",
            ],
        ];
        Service::insert($services);
    }
}
