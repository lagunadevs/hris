<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('provinces')->truncate();
        DB::table('provinces')->insert(array (
            0 =>
                [
                    'id' => 1,
                    'country_id' => 169,
                    'name' => 'Abra',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            1 =>
                [
                    'id' => 2,
                    'country_id' => 169,
                    'name' => 'Agusan del Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            2 =>
                [
                    'id' => 3,
                    'country_id' => 169,
                    'name' => 'Agusan del Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            3 =>
                [
                    'id' => 4,
                    'country_id' => 169,
                    'name' => 'Aklan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            4 =>
                [
                    'id' => 5,
                    'country_id' => 169,
                    'name' => 'Albay',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            5 =>
                [
                    'id' => 6,
                    'country_id' => 169,
                    'name' => 'Antique',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            6 =>
                [
                    'id' => 7,
                    'country_id' => 169,
                    'name' => 'Apayao',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            7 =>
                [
                    'id' => 8,
                    'country_id' => 169,
                    'name' => 'Aurora',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            8 =>
                [
                    'id' => 9,
                    'country_id' => 169,
                    'name' => 'Basilan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            9 =>
                [
                    'id' => 10,
                    'country_id' => 169,
                    'name' => 'Bataan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            10 =>
                [
                    'id' => 11,
                    'country_id' => 169,
                    'name' => 'Batanes',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            11 =>
                [
                    'id' => 12,
                    'country_id' => 169,
                    'name' => 'Batangas',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            12 =>
                [
                    'id' => 13,
                    'country_id' => 169,
                    'name' => 'Benguet',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            13 =>
                [
                    'id' => 14,
                    'country_id' => 169,
                    'name' => 'Biliran',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            14 =>
                [
                    'id' => 15,
                    'country_id' => 169,
                    'name' => 'Bohol',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            15 =>
                [
                    'id' => 16,
                    'country_id' => 169,
                    'name' => 'Bukidnon',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            16 =>
                [
                    'id' => 17,
                    'country_id' => 169,
                    'name' => 'Bulacan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            17 =>
                [
                    'id' => 18,
                    'country_id' => 169,
                    'name' => 'Cagayan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            18 =>
                [
                    'id' => 19,
                    'country_id' => 169,
                    'name' => 'Camarines Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            19 =>
                [
                    'id' => 20,
                    'country_id' => 169,
                    'name' => 'Camarines Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            20 =>
                [
                    'id' => 21,
                    'country_id' => 169,
                    'name' => 'Camiguin',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            21 =>
                [
                    'id' => 22,
                    'country_id' => 169,
                    'name' => 'Capiz',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            22 =>
                [
                    'id' => 23,
                    'country_id' => 169,
                    'name' => 'Catanduanes',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            23 =>
                [
                    'id' => 24,
                    'country_id' => 169,
                    'name' => 'Cavite',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            24 =>
                [
                    'id' => 25,
                    'country_id' => 169,
                    'name' => 'Cebu',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            25 =>
                [
                    'id' => 26,
                    'country_id' => 169,
                    'name' => 'Compostela Valley',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            26 =>
                [
                    'id' => 27,
                    'country_id' => 169,
                    'name' => 'Cotabato',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            27 =>
                [
                    'id' => 28,
                    'country_id' => 169,
                    'name' => 'Davao del Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            28 =>
                [
                    'id' => 29,
                    'country_id' => 169,
                    'name' => 'Davao del Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            29 =>
                [
                    'id' => 30,
                    'country_id' => 169,
                    'name' => 'Davao Oriental',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            30 =>
                [
                    'id' => 31,
                    'country_id' => 169,
                    'name' => 'Eastern Samar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            31 =>
                [
                    'id' => 32,
                    'country_id' => 169,
                    'name' => 'Guimaras',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            32 =>
                [
                    'id' => 33,
                    'country_id' => 169,
                    'name' => 'Ifugao',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            33 =>
                [
                    'id' => 34,
                    'country_id' => 169,
                    'name' => 'Ilocos Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            34 =>
                [
                    'id' => 35,
                    'country_id' => 169,
                    'name' => 'Ilocos Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            35 =>
                [
                    'id' => 36,
                    'country_id' => 169,
                    'name' => 'Iloilo',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            36 =>
                [
                    'id' => 37,
                    'country_id' => 169,
                    'name' => 'Isabela',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            37 =>
                [
                    'id' => 38,
                    'country_id' => 169,
                    'name' => 'Kalinga',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            38 =>
                [
                    'id' => 39,
                    'country_id' => 169,
                    'name' => 'La Union',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            39 =>
                [
                    'id' => 40,
                    'country_id' => 169,
                    'name' => 'Laguna',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            40 =>
                [
                    'id' => 41,
                    'country_id' => 169,
                    'name' => 'Lanao del Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            41 =>
                [
                    'id' => 42,
                    'country_id' => 169,
                    'name' => 'Lanao del Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            42 =>
                [
                    'id' => 43,
                    'country_id' => 169,
                    'name' => 'Leyte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            43 =>
                [
                    'id' => 44,
                    'country_id' => 169,
                    'name' => 'Maguindanao',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            44 =>
                [
                    'id' => 45,
                    'country_id' => 169,
                    'name' => 'Marinduque',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            45 =>
                [
                    'id' => 46,
                    'country_id' => 169,
                    'name' => 'Masbate',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            46 =>
                [
                    'id' => 47,
                    'country_id' => 169,
                    'name' => 'Metro Manila',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            47 =>
                [
                    'id' => 48,
                    'country_id' => 169,
                    'name' => 'Misamis Occidental',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            48 =>
                [
                    'id' => 49,
                    'country_id' => 169,
                    'name' => 'Misamis Oriental',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            49 =>
                [
                    'id' => 50,
                    'country_id' => 169,
                    'name' => 'Mountain Province',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            50 =>
                [
                    'id' => 51,
                    'country_id' => 169,
                    'name' => 'Negros Occidental',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            51 =>
                [
                    'id' => 52,
                    'country_id' => 169,
                    'name' => 'Negros Oriental',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            52 =>
                [
                    'id' => 53,
                    'country_id' => 169,
                    'name' => 'Northern Samar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            53 =>
                [
                    'id' => 54,
                    'country_id' => 169,
                    'name' => 'Nueva Ecija',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            54 =>
                [
                    'id' => 55,
                    'country_id' => 169,
                    'name' => 'Nueva Vizcaya',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            55 =>
                [
                    'id' => 56,
                    'country_id' => 169,
                    'name' => 'Occidental Mindoro',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            56 =>
                [
                    'id' => 57,
                    'country_id' => 169,
                    'name' => 'Oriental Mindoro',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            57 =>
                [
                    'id' => 58,
                    'country_id' => 169,
                    'name' => 'Palawan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            58 =>
                [
                    'id' => 59,
                    'country_id' => 169,
                    'name' => 'Pampanga',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            59 =>
                [
                    'id' => 60,
                    'country_id' => 169,
                    'name' => 'Pangasinan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            60 =>
                [
                    'id' => 61,
                    'country_id' => 169,
                    'name' => 'Quezon',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            61 =>
                [
                    'id' => 62,
                    'country_id' => 169,
                    'name' => 'Quirino',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            62 =>
                [
                    'id' => 63,
                    'country_id' => 169,
                    'name' => 'Rizal',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            63 =>
                [
                    'id' => 64,
                    'country_id' => 169,
                    'name' => 'Romblon',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            64 =>
                [
                    'id' => 65,
                    'country_id' => 169,
                    'name' => 'Samar',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            65 =>
                [
                    'id' => 66,
                    'country_id' => 169,
                    'name' => 'Sarangani',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            66 =>
                [
                    'id' => 67,
                    'country_id' => 169,
                    'name' => 'Siquijor',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            67 =>
                [
                    'id' => 68,
                    'country_id' => 169,
                    'name' => 'Sorsogon',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            68 =>
                [
                    'id' => 69,
                    'country_id' => 169,
                    'name' => 'South Cotabato',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            69 =>
                [
                    'id' => 70,
                    'country_id' => 169,
                    'name' => 'Southern Leyte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            70 =>
                [
                    'id' => 71,
                    'country_id' => 169,
                    'name' => 'Sultan Kudarat',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            71 =>
                [
                    'id' => 72,
                    'country_id' => 169,
                    'name' => 'Sulu',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            72 =>
                [
                    'id' => 73,
                    'country_id' => 169,
                    'name' => 'Surigao del Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            73 =>
                [
                    'id' => 74,
                    'country_id' => 169,
                    'name' => 'Surigao del Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            74 =>
                [
                    'id' => 75,
                    'country_id' => 169,
                    'name' => 'Tarlac',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            75 =>
                [
                    'id' => 76,
                    'country_id' => 169,
                    'name' => 'Tawi-Tawi',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            76 =>
                [
                    'id' => 77,
                    'country_id' => 169,
                    'name' => 'Zambales',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            77 =>
                [
                    'id' => 78,
                    'country_id' => 169,
                    'name' => 'Zamboanga del Norte',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            78 =>
                [
                    'id' => 79,
                    'country_id' => 169,
                    'name' => 'Zamboanga del Sur',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
            79 =>
                [
                    'id' => 80,
                    'country_id' => 169,
                    'name' => 'Zamboanga Sibugay',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
        ));
    }
}
