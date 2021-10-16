<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTKNI',
        ]);

        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 399,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 100,
            'cd_arnv' => 'TTKBO',
        ]);

        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTKZI',
        ]);

        Flight::create([
            'nr_voo' => 1,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 71,
            'cd_arnv' => 'TTKNH',
        ]);

        Flight::create([
            'nr_voo' => 2,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 160,
            'cd_arnv' => 'TTKZI',
        ]);

        Flight::create([
            'nr_voo' => 2,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 402,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 2,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 100,
            'cd_arnv' => 'TTKBO',
        ]);

        Flight::create([
            'nr_voo' => 3,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 3,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 180,
            'cd_arnv' => 'TTKZZ',
        ]);

        Flight::create([
            'nr_voo' => 3,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 100,
            'cd_arnv' => 'TTKBO',
        ]);

        Flight::create([
            'nr_voo' => 3,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 2,
            'cd_arnv' => 'TTINI',
        ]);

        Flight::create([
            'nr_voo' => 4,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 310,
            'cd_arnv' => 'TTKBR',
        ]);

        Flight::create([
            'nr_voo' => 4,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 411,
            'cd_arnv' => 'TTUZI',
        ]);

        Flight::create([
            'nr_voo' => 4,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 2,
            'cd_arnv' => 'TTINS',
        ]);

        Flight::create([
            'nr_voo' => 5,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 351,
            'cd_arnv' => 'TTIZO',
        ]);

        Flight::create([
            'nr_voo' => 5,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 110,
            'cd_arnv' => 'TTKBU',
        ]);

        Flight::create([
            'nr_voo' => 5,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTSNI',
        ]);

        Flight::create([
            'nr_voo' => 6,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 420,
            'cd_arnv' => 'TTSBO',
        ]);

        Flight::create([
            'nr_voo' => 6,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 32,
            'cd_arnv' => 'TTINS',
        ]);

        Flight::create([
            'nr_voo' => 6,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 6,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 6,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 191,
            'cd_arnv' => 'TTKZZ',
        ]);

        Flight::create([
            'nr_voo' => 7,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 42,
            'cd_arnv' => 'TTING',
        ]);

        Flight::create([
            'nr_voo' => 7,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 130,
            'cd_arnv' => 'TTOBS',
        ]);

        Flight::create([
            'nr_voo' => 7,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 7,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 402,
            'cd_arnv' => 'TTKZO',
        ]);

        Flight::create([
            'nr_voo' => 8,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 130,
            'cd_arnv' => 'TTKBR',
        ]);

        Flight::create([
            'nr_voo' => 8,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTOZZ',
        ]);

        Flight::create([
            'nr_voo' => 8,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTONT',
        ]);

        Flight::create([
            'nr_voo' => 9,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTUZI',
        ]);

        Flight::create([
            'nr_voo' => 9,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 170,
            'cd_arnv' => 'TTOBS',
        ]);

        Flight::create([
            'nr_voo' => 9,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTINC',
        ]);

        Flight::create([
            'nr_voo' => 10,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTIZI',
        ]);

        Flight::create([
            'nr_voo' => 10,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 280,
            'cd_arnv' => 'TTKBR',
        ]);

        Flight::create([
            'nr_voo' => 10,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTKNI',
        ]);

        Flight::create([
            'nr_voo' => 11,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 4,
            'cd_arnv' => 'TTKZO',
        ]);

        Flight::create([
            'nr_voo' => 11,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 11,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTKBI',
        ]);

        Flight::create([
            'nr_voo' => 12,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 12,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 134,
            'cd_arnv' => 'TTIZI',
        ]);

        Flight::create([
            'nr_voo' => 13,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 401,
            'cd_arnv' => 'TTKBS',
        ]);

        Flight::create([
            'nr_voo' => 13,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 272,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 13,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTIZI',
        ]);

        Flight::create([
            'nr_voo' => 14,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 55,
            'cd_arnv' => 'TTIZO',
        ]);

        Flight::create([
            'nr_voo' => 14,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTLBI',
        ]);

        Flight::create([
            'nr_voo' => 15,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 15,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 15,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 165,
            'cd_arnv' => 'TTKZZ',
        ]);

        Flight::create([
            'nr_voo' => 16,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 75,
            'cd_arnv' => 'TTIZO',
        ]);

        Flight::create([
            'nr_voo' => 16,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 151,
            'cd_arnv' => 'TTSBO',
        ]);

        Flight::create([
            'nr_voo' => 16,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTONS',
        ]);

        Flight::create([
            'nr_voo' => 17,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTOZZ',
        ]);

        Flight::create([
            'nr_voo' => 17,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 151,
            'cd_arnv' => 'TTSBO',
        ]);

        Flight::create([
            'nr_voo' => 17,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTKNH',
        ]);

        Flight::create([
            'nr_voo' => 18,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTOZZ',
        ]);

        Flight::create([
            'nr_voo' => 18,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 392,
            'cd_arnv' => 'TTING',
        ]);

        Flight::create([
            'nr_voo' => 18,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 18,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 181,
            'cd_arnv' => 'TTKBS',
        ]);

        Flight::create([
            'nr_voo' => 19,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 112,
            'cd_arnv' => 'TTOBS',
        ]);

        Flight::create([
            'nr_voo' => 19,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTOZZ',
        ]);

        Flight::create([
            'nr_voo' => 19,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 3,
            'cd_arnv' => 'TTKNH',
        ]);

        Flight::create([
            'nr_voo' => 20,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 76,
            'cd_arnv' => 'TTKZI',
        ]);

        Flight::create([
            'nr_voo' => 20,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 20,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 332,
            'cd_arnv' => 'TTLBI',
        ]);

        Flight::create([
            'nr_voo' => 21,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 227,
            'cd_arnv' => 'TTIZI',
        ]);

        Flight::create([
            'nr_voo' => 21,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 21,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTINT',
        ]);

        Flight::create([
            'nr_voo' => 21,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTKBR',
        ]);

        Flight::create([
            'nr_voo' => 22,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 57,
            'cd_arnv' => 'TTOZZ',
        ]);

        Flight::create([
            'nr_voo' => 22,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 22,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTOBS',
        ]);

        Flight::create([
            'nr_voo' => 22,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTINS',
        ]);

        Flight::create([
            'nr_voo' => 23,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 377,
            'cd_arnv' => 'TTKZZ',
        ]);

        Flight::create([
            'nr_voo' => 23,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKND',
        ]);

        Flight::create([
            'nr_voo' => 23,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 24,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 203,
            'cd_arnv' => 'TTKBI',
        ]);

        Flight::create([
            'nr_voo' => 24,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTKZO',
        ]);

        Flight::create([
            'nr_voo' => 24,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTINC',
        ]);

        Flight::create([
            'nr_voo' => 25,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 213,
            'cd_arnv' => 'TTKBI',
        ]);

        Flight::create([
            'nr_voo' => 25,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 128,
            'cd_arnv' => 'TTKZZ',
        ]);

        Flight::create([
            'nr_voo' => 25,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTSNI',
        ]);

        Flight::create([
            'nr_voo' => 26,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 358,
            'cd_arnv' => 'TTKZO',
        ]);

        Flight::create([
            'nr_voo' => 26,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 53,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 26,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 26,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTMBR',
        ]);

        Flight::create([
            'nr_voo' => 27,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 253,
            'cd_arnv' => 'TTKBR',
        ]);

        Flight::create([
            'nr_voo' => 27,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 153,
            'cd_arnv' => 'TTKNT',
        ]);

        Flight::create([
            'nr_voo' => 27,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTIZO',
        ]);

        Flight::create([
            'nr_voo' => 28,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 53,
            'cd_arnv' => 'TTINO',
        ]);

        Flight::create([
            'nr_voo' => 28,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 378,
            'cd_arnv' => 'TTUZI',
        ]);

        Flight::create([
            'nr_voo' => 29,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 29,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 53,
            'cd_arnv' => 'TTINT',
        ]);

        Flight::create([
            'nr_voo' => 29,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 19,
            'cd_arnv' => 'TTUZI',
        ]);

        Flight::create([
            'nr_voo' => 29,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTMBR',
        ]);

        Flight::create([
            'nr_voo' => 30,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTMBR',
        ]);

        Flight::create([
            'nr_voo' => 30,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 29,
            'cd_arnv' => 'TTIZO',
        ]);

        Flight::create([
            'nr_voo' => 30,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 31,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 39,
            'cd_arnv' => 'TTKZI',
        ]);

        Flight::create([
            'nr_voo' => 31,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 31,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 407,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 31,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 214,
            'cd_arnv' => 'TTLBI',
        ]);

        Flight::create([
            'nr_voo' => 31,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTINC',
        ]);

        Flight::create([
            'nr_voo' => 32,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 32,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 393,
            'cd_arnv' => 'TTSNY',
        ]);

        Flight::create([
            'nr_voo' => 32,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTLBI',
        ]);

        Flight::create([
            'nr_voo' => 32,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTKZI',
        ]);

        Flight::create([
            'nr_voo' => 33,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTMBR',
        ]);

        Flight::create([
            'nr_voo' => 33,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 380,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 33,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 33,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 33,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKZO',
        ]);

        Flight::create([
            'nr_voo' => 34,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTKBO',
        ]);

        Flight::create([
            'nr_voo' => 34,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 279,
            'cd_arnv' => 'TTIZI',
        ]);

        Flight::create([
            'nr_voo' => 34,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 104,
            'cd_arnv' => 'TTKNC',
        ]);

        Flight::create([
            'nr_voo' => 35,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 200,
            'cd_arnv' => 'TTIYO',
        ]);

        Flight::create([
            'nr_voo' => 35,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 315,
            'cd_arnv' => 'TTLBI',
        ]);

        Flight::create([
            'nr_voo' => 36,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTKBS',
        ]);

        Flight::create([
            'nr_voo' => 36,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 60,
            'cd_arnv' => 'TTKYN',
        ]);

        Flight::create([
            'nr_voo' => 37,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 290,
            'cd_arnv' => 'TTIYO',
        ]);

        Flight::create([
            'nr_voo' => 37,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTKBU',
        ]);

        Flight::create([
            'nr_voo' => 38,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 244,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 38,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTRBO',
        ]);

        Flight::create([
            'nr_voo' => 38,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 301,
            'cd_arnv' => 'TTKYO',
        ]);

        Flight::create([
            'nr_voo' => 39,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 244,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 39,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 341,
            'cd_arnv' => 'TTKYR',
        ]);

        Flight::create([
            'nr_voo' => 39,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTOBS',
        ]);

        Flight::create([
            'nr_voo' => 40,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 381,
            'cd_arnv' => 'TTIYO',
        ]);

        Flight::create([
            'nr_voo' => 40,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 40,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 65,
            'cd_arnv' => 'TTKBI',
        ]);

        Flight::create([
            'nr_voo' => 40,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 144,
            'cd_arnv' => 'TTINT',
        ]);

        Flight::create([
            'nr_voo' => 41,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 222,
            'cd_arnv' => 'TTKYR',
        ]);

        Flight::create([
            'nr_voo' => 41,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 286,
            'cd_arnv' => 'TTRBO',
        ]);

        Flight::create([
            'nr_voo' => 41,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 54,
            'cd_arnv' => 'TTKNT',
        ]);

        Flight::create([
            'nr_voo' => 42,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 57,
            'cd_arnv' => 'TTSBO',
        ]);

        Flight::create([
            'nr_voo' => 42,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 54,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 43,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTSBO',
        ]);

        Flight::create([
            'nr_voo' => 43,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 54,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 43,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 94,
            'cd_arnv' => 'TTKYN',
        ]);

        Flight::create([
            'nr_voo' => 44,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 264,
            'cd_arnv' => 'TTKNT',
        ]);

        Flight::create([
            'nr_voo' => 44,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 155,
            'cd_arnv' => 'TTKYL',
        ]);

        Flight::create([
            'nr_voo' => 44,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTMBR',
        ]);

        Flight::create([
            'nr_voo' => 45,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 264,
            'cd_arnv' => 'TTKNT',
        ]);

        Flight::create([
            'nr_voo' => 45,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTKYO',
        ]);

        Flight::create([
            'nr_voo' => 45,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTKBO',
        ]);

        Flight::create([
            'nr_voo' => 46,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 74,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 46,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTKYO',
        ]);

        Flight::create([
            'nr_voo' => 46,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTKBS',
        ]);

        Flight::create([
            'nr_voo' => 47,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 105,
            'cd_arnv' => 'TTING',
        ]);

        Flight::create([
            'nr_voo' => 47,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 47,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 148,
            'cd_arnv' => 'TTKBU',
        ]);

        Flight::create([
            'nr_voo' => 47,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTKYN',
        ]);

        Flight::create([
            'nr_voo' => 48,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 136,
            'cd_arnv' => 'TTKYR',
        ]);

        Flight::create([
            'nr_voo' => 48,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 419,
            'cd_arnv' => 'TTKBU',
        ]);

        Flight::create([
            'nr_voo' => 49,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTIYO',
        ]);

        Flight::create([
            'nr_voo' => 49,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 49,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 415,
            'cd_arnv' => 'TTSNI',
        ]);

        Flight::create([
            'nr_voo' => 49,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTKBU',
        ]);

        Flight::create([
            'nr_voo' => 50,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 247,
            'cd_arnv' => 'TTKYL',
        ]);

        Flight::create([
            'nr_voo' => 50,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 50,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 50,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 379,
            'cd_arnv' => 'TTRBO',
        ]);

        Flight::create([
            'nr_voo' => 50,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTSNY',
        ]);

        Flight::create([
            'nr_voo' => 51,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 167,
            'cd_arnv' => 'TTIYO',
        ]);

        Flight::create([
            'nr_voo' => 51,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTKNG',
        ]);

        Flight::create([
            'nr_voo' => 51,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 400,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 52,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 345,
            'cd_arnv' => 'TTONS',
        ]);

        Flight::create([
            'nr_voo' => 52,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 418,
            'cd_arnv' => 'TTKYO',
        ]);

        Flight::create([
            'nr_voo' => 52,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 1,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 53,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 228,
            'cd_arnv' => 'TTKYR',
        ]);

        Flight::create([
            'nr_voo' => 53,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 232,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 54,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 54,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 255,
            'cd_arnv' => 'TTKNC',
        ]);

        Flight::create([
            'nr_voo' => 54,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTKYN',
        ]);

        Flight::create([
            'nr_voo' => 55,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 155,
            'cd_arnv' => 'TTING',
        ]);

        Flight::create([
            'nr_voo' => 55,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 56,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 56,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTKYL',
        ]);

        Flight::create([
            'nr_voo' => 56,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 255,
            'cd_arnv' => 'TTINI',
        ]);

        Flight::create([
            'nr_voo' => 57,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 57,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 255,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 57,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 188,
            'cd_arnv' => 'TTKYN',
        ]);

        Flight::create([
            'nr_voo' => 58,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 309,
            'cd_arnv' => 'TTKYL',
        ]);

        Flight::create([
            'nr_voo' => 58,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 58,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 165,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 59,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 60,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 60,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTKXL',
        ]);

        Flight::create([
            'nr_voo' => 61,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 185,
            'cd_arnv' => 'TTUNO',
        ]);

        Flight::create([
            'nr_voo' => 61,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTKXL',
        ]);

        Flight::create([
            'nr_voo' => 61,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 62,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 295,
            'cd_arnv' => 'TTKND',
        ]);

        Flight::create([
            'nr_voo' => 62,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTKXL',
        ]);

        Flight::create([
            'nr_voo' => 63,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 51,
            'cd_arnv' => 'TTKXP',
        ]);

        Flight::create([
            'nr_voo' => 63,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 116,
            'cd_arnv' => 'TTKNH',
        ]);

        Flight::create([
            'nr_voo' => 64,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 422,
            'cd_arnv' => 'TTKXP',
        ]);

        Flight::create([
            'nr_voo' => 64,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTINT',
        ]);

        Flight::create([
            'nr_voo' => 65,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 293,
            'cd_arnv' => 'TTKXP',
        ]);

        Flight::create([
            'nr_voo' => 65,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 66,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 66,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 315,
            'cd_arnv' => 'TTKXL',
        ]);

        Flight::create([
            'nr_voo' => 66,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 67,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 276,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 67,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 127,
            'cd_arnv' => 'TTKXP',
        ]);

        Flight::create([
            'nr_voo' => 68,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 68,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 68,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTKXL',
        ]);

        Flight::create([
            'nr_voo' => 68,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 276,
            'cd_arnv' => 'TTKNT',
        ]);

        Flight::create([
            'nr_voo' => 69,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTKXP',
        ]);

        Flight::create([
            'nr_voo' => 69,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 176,
            'cd_arnv' => 'TTIND',
        ]);

        Flight::create([
            'nr_voo' => 70,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 101,
            'cd_arnv' => 'TTKWT',
        ]);

        Flight::create([
            'nr_voo' => 70,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 286,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 71,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 412,
            'cd_arnv' => 'TTKWT',
        ]);

        Flight::create([
            'nr_voo' => 71,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTKNS',
        ]);

        Flight::create([
            'nr_voo' => 72,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 72,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 87,
            'cd_arnv' => 'TTKWT',
        ]);

        Flight::create([
            'nr_voo' => 72,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTKNS',
        ]);

        Flight::create([
            'nr_voo' => 73,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 87,
            'cd_arnv' => 'TTKWT',
        ]);

        Flight::create([
            'nr_voo' => 73,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 107,
            'cd_arnv' => 'TTIND',
        ]);

        Flight::create([
            'nr_voo' => 74,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTKNU',
        ]);

        Flight::create([
            'nr_voo' => 74,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 74,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTKWT',
        ]);

        Flight::create([
            'nr_voo' => 74,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 75,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 27,
            'cd_arnv' => 'TTKND',
        ]);

        Flight::create([
            'nr_voo' => 75,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 75,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 75,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTLVI',
        ]);

        Flight::create([
            'nr_voo' => 76,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 76,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 131,
            'cd_arnv' => 'TTLVI',
        ]);

        Flight::create([
            'nr_voo' => 76,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 127,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 77,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 31,
            'cd_arnv' => 'TTIVI',
        ]);

        Flight::create([
            'nr_voo' => 77,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 77,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 357,
            'cd_arnv' => 'TTKNC',
        ]);

        Flight::create([
            'nr_voo' => 78,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 357,
            'cd_arnv' => 'TTKNC',
        ]);

        Flight::create([
            'nr_voo' => 78,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 371,
            'cd_arnv' => 'TTKVI',
        ]);

        Flight::create([
            'nr_voo' => 79,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 357,
            'cd_arnv' => 'TTKNC',
        ]);

        Flight::create([
            'nr_voo' => 79,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 181,
            'cd_arnv' => 'TTKVI',
        ]);

        Flight::create([
            'nr_voo' => 80,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 202,
            'cd_arnv' => 'TTLVI',
        ]);

        Flight::create([
            'nr_voo' => 80,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 157,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 81,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 232,
            'cd_arnv' => 'TTIVI',
        ]);

        Flight::create([
            'nr_voo' => 82,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 157,
            'cd_arnv' => 'TTINT',
        ]);

        Flight::create([
            'nr_voo' => 82,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTLVI',
        ]);

        Flight::create([
            'nr_voo' => 83,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 404,
            'cd_arnv' => 'TTIVI',
        ]);

        Flight::create([
            'nr_voo' => 83,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 267,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 84,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 267,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 84,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 214,
            'cd_arnv' => 'TTLVI',
        ]);

        Flight::create([
            'nr_voo' => 85,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 105,
            'cd_arnv' => 'TTIVI',
        ]);

        Flight::create([
            'nr_voo' => 85,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 277,
            'cd_arnv' => 'TTONC',
        ]);

        Flight::create([
            'nr_voo' => 86,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTKNG',
        ]);

        Flight::create([
            'nr_voo' => 86,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTKVI',
        ]);

        Flight::create([
            'nr_voo' => 87,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTSNI',
        ]);

        Flight::create([
            'nr_voo' => 87,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTKVI',
        ]);

        Flight::create([
            'nr_voo' => 88,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 408,
            'cd_arnv' => 'TTKNS',
        ]);

        Flight::create([
            'nr_voo' => 88,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 227,
            'cd_arnv' => 'TTIVI',
        ]);

        Flight::create([
            'nr_voo' => 89,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTKNV',
        ]);

        Flight::create([
            'nr_voo' => 89,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 389,
            'cd_arnv' => 'TTKVI',
        ]);

        Flight::create([
            'nr_voo' => 90,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTSUS',
        ]);

        Flight::create([
            'nr_voo' => 90,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 308,
            'cd_arnv' => 'TTINO',
        ]);

        Flight::create([
            'nr_voo' => 91,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 410,
            'cd_arnv' => 'TTLUI',
        ]);

        Flight::create([
            'nr_voo' => 91,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTUNO',
        ]);

        Flight::create([
            'nr_voo' => 92,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 120,
            'cd_arnv' => 'TTKUZ',
        ]);

        Flight::create([
            'nr_voo' => 92,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 93,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 320,
            'cd_arnv' => 'TTOUZ',
        ]);

        Flight::create([
            'nr_voo' => 93,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 94,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 230,
            'cd_arnv' => 'TTKUN',
        ]);

        Flight::create([
            'nr_voo' => 94,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 81,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 95,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 95,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTGUS',
        ]);

        Flight::create([
            'nr_voo' => 96,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 96,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTKNV',
        ]);

        Flight::create([
            'nr_voo' => 96,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTOUT',
        ]);

        Flight::create([
            'nr_voo' => 97,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 97,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTKNS',
        ]);

        Flight::create([
            'nr_voo' => 97,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 280,
            'cd_arnv' => 'TTDUQ',
        ]);

        Flight::create([
            'nr_voo' => 98,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 1,
            'cd_arnv' => 'TTKUG',
        ]);

        Flight::create([
            'nr_voo' => 98,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTSNY',
        ]);

        Flight::create([
            'nr_voo' => 99,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTKNS',
        ]);

        Flight::create([
            'nr_voo' => 99,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 11,
            'cd_arnv' => 'TTDUI',
        ]);

        Flight::create([
            'nr_voo' => 100,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 311,
            'cd_arnv' => 'TTGUS',
        ]);

        Flight::create([
            'nr_voo' => 100,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 168,
            'cd_arnv' => 'TTONC',
        ]);

        Flight::create([
            'nr_voo' => 101,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 421,
            'cd_arnv' => 'TTLUI',
        ]);

        Flight::create([
            'nr_voo' => 101,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 102,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTOUZ',
        ]);

        Flight::create([
            'nr_voo' => 103,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 331,
            'cd_arnv' => 'TTKUG',
        ]);

        Flight::create([
            'nr_voo' => 103,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTUNO',
        ]);

        Flight::create([
            'nr_voo' => 104,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 388,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 104,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 331,
            'cd_arnv' => 'TTGUI',
        ]);

        Flight::create([
            'nr_voo' => 104,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 105,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 398,
            'cd_arnv' => 'TTONC',
        ]);

        Flight::create([
            'nr_voo' => 105,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTKUG',
        ]);

        Flight::create([
            'nr_voo' => 106,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 151,
            'cd_arnv' => 'TTKUF',
        ]);

        Flight::create([
            'nr_voo' => 106,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 298,
            'cd_arnv' => 'TTKNH',
        ]);

        Flight::create([
            'nr_voo' => 107,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 209,
            'cd_arnv' => 'TTONT',
        ]);

        Flight::create([
            'nr_voo' => 107,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 251,
            'cd_arnv' => 'TTTUN',
        ]);

        Flight::create([
            'nr_voo' => 108,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 109,
            'cd_arnv' => 'TTKND',
        ]);

        Flight::create([
            'nr_voo' => 108,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 370,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 108,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 361,
            'cd_arnv' => 'TTLUI',
        ]);

        Flight::create([
            'nr_voo' => 109,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 109,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTKUN',
        ]);

        Flight::create([
            'nr_voo' => 110,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 309,
            'cd_arnv' => 'TTING',
        ]);

        Flight::create([
            'nr_voo' => 110,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTTUR',
        ]);

        Flight::create([
            'nr_voo' => 111,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 209,
            'cd_arnv' => 'TTINS',
        ]);

        Flight::create([
            'nr_voo' => 111,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTDUQ',
        ]);

        Flight::create([
            'nr_voo' => 112,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 209,
            'cd_arnv' => 'TTINO',
        ]);

        Flight::create([
            'nr_voo' => 112,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 71,
            'cd_arnv' => 'TTKUR',
        ]);

        Flight::create([
            'nr_voo' => 113,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 219,
            'cd_arnv' => 'TTKNG',
        ]);

        Flight::create([
            'nr_voo' => 113,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 181,
            'cd_arnv' => 'TTDUI',
        ]);

        Flight::create([
            'nr_voo' => 114,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 381,
            'cd_arnv' => 'TTKUD',
        ]);

        Flight::create([
            'nr_voo' => 114,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 114,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 29,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 115,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 81,
            'cd_arnv' => 'TTKUL',
        ]);

        Flight::create([
            'nr_voo' => 115,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 329,
            'cd_arnv' => 'TTONT',
        ]);

        Flight::create([
            'nr_voo' => 116,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 381,
            'cd_arnv' => 'TTSUN',
        ]);

        Flight::create([
            'nr_voo' => 116,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTIND',
        ]);

        Flight::create([
            'nr_voo' => 117,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 302,
            'cd_arnv' => 'TTKUZ',
        ]);

        Flight::create([
            'nr_voo' => 117,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTIND',
        ]);

        Flight::create([
            'nr_voo' => 118,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 412,
            'cd_arnv' => 'TTGUI',
        ]);

        Flight::create([
            'nr_voo' => 118,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 139,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 119,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 412,
            'cd_arnv' => 'TTGUI',
        ]);

        Flight::create([
            'nr_voo' => 119,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTKNV',
        ]);

        Flight::create([
            'nr_voo' => 120,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTIND',
        ]);

        Flight::create([
            'nr_voo' => 120,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 322,
            'cd_arnv' => 'TTDUI',
        ]);

        Flight::create([
            'nr_voo' => 121,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKNG',
        ]);

        Flight::create([
            'nr_voo' => 121,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 322,
            'cd_arnv' => 'TTIUM',
        ]);

        Flight::create([
            'nr_voo' => 122,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 122,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 32,
            'cd_arnv' => 'TTKUN',
        ]);

        Flight::create([
            'nr_voo' => 122,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTONC',
        ]);

        Flight::create([
            'nr_voo' => 123,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 132,
            'cd_arnv' => 'TTKUS',
        ]);

        Flight::create([
            'nr_voo' => 123,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 269,
            'cd_arnv' => 'TTSNY',
        ]);

        Flight::create([
            'nr_voo' => 124,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 332,
            'cd_arnv' => 'TTGUS',
        ]);

        Flight::create([
            'nr_voo' => 124,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 279,
            'cd_arnv' => 'TTKNU',
        ]);

        Flight::create([
            'nr_voo' => 125,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 125,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 89,
            'cd_arnv' => 'TTKNI',
        ]);

        Flight::create([
            'nr_voo' => 125,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 242,
            'cd_arnv' => 'TTKUS',
        ]);

        Flight::create([
            'nr_voo' => 126,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 89,
            'cd_arnv' => 'TTKND',
        ]);

        Flight::create([
            'nr_voo' => 126,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTGUI',
        ]);

        Flight::create([
            'nr_voo' => 127,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 342,
            'cd_arnv' => 'TTOUT',
        ]);

        Flight::create([
            'nr_voo' => 127,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 128,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 342,
            'cd_arnv' => 'TTOUS',
        ]);

        Flight::create([
            'nr_voo' => 128,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 399,
            'cd_arnv' => 'TTKNU',
        ]);

        Flight::create([
            'nr_voo' => 129,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 210,
            'cd_arnv' => 'TTLMO',
        ]);

        Flight::create([
            'nr_voo' => 129,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 129,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 152,
            'cd_arnv' => 'TTOUR',
        ]);

        Flight::create([
            'nr_voo' => 130,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 420,
            'cd_arnv' => 'TTIMO',
        ]);

        Flight::create([
            'nr_voo' => 130,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTOUS',
        ]);

        Flight::create([
            'nr_voo' => 131,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 131,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 62,
            'cd_arnv' => 'TTKUQ',
        ]);

        Flight::create([
            'nr_voo' => 131,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTUMB',
        ]);

        Flight::create([
            'nr_voo' => 132,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 282,
            'cd_arnv' => 'TTKUZ',
        ]);

        Flight::create([
            'nr_voo' => 132,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 230,
            'cd_arnv' => 'TTKMP',
        ]);

        Flight::create([
            'nr_voo' => 133,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 133,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 82,
            'cd_arnv' => 'TTKUQ',
        ]);

        Flight::create([
            'nr_voo' => 134,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 418,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 134,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 82,
            'cd_arnv' => 'TTTUL',
        ]);

        Flight::create([
            'nr_voo' => 134,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 150,
            'cd_arnv' => 'TTKMU',
        ]);

        Flight::create([
            'nr_voo' => 135,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 135,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 282,
            'cd_arnv' => 'TTQUI',
        ]);

        Flight::create([
            'nr_voo' => 135,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 135,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 70,
            'cd_arnv' => 'TTDMI',
        ]);

        Flight::create([
            'nr_voo' => 136,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTOUZ',
        ]);

        Flight::create([
            'nr_voo' => 136,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 170,
            'cd_arnv' => 'TTOMF',
        ]);

        Flight::create([
            'nr_voo' => 137,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 80,
            'cd_arnv' => 'TTKMB',
        ]);

        Flight::create([
            'nr_voo' => 137,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTKUS',
        ]);

        Flight::create([
            'nr_voo' => 138,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 390,
            'cd_arnv' => 'TTIMO',
        ]);

        Flight::create([
            'nr_voo' => 138,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 3,
            'cd_arnv' => 'TTDUI',
        ]);

        Flight::create([
            'nr_voo' => 139,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 413,
            'cd_arnv' => 'TTKUN',
        ]);

        Flight::create([
            'nr_voo' => 139,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 311,
            'cd_arnv' => 'TTOMF',
        ]);

        Flight::create([
            'nr_voo' => 140,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 413,
            'cd_arnv' => 'TTKUQ',
        ]);

        Flight::create([
            'nr_voo' => 140,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 140,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTIMO',
        ]);

        Flight::create([
            'nr_voo' => 141,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 213,
            'cd_arnv' => 'TTRUD',
        ]);

        Flight::create([
            'nr_voo' => 141,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTIMO',
        ]);

        Flight::create([
            'nr_voo' => 142,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTLMO',
        ]);

        Flight::create([
            'nr_voo' => 142,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTOUR',
        ]);

        Flight::create([
            'nr_voo' => 143,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTKMB',
        ]);

        Flight::create([
            'nr_voo' => 143,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 33,
            'cd_arnv' => 'TTOUZ',
        ]);

        Flight::create([
            'nr_voo' => 144,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTTUL',
        ]);

        Flight::create([
            'nr_voo' => 144,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 191,
            'cd_arnv' => 'TTKMI',
        ]);

        Flight::create([
            'nr_voo' => 145,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 145,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTDUQ',
        ]);

        Flight::create([
            'nr_voo' => 145,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 191,
            'cd_arnv' => 'TTKMI',
        ]);

        Flight::create([
            'nr_voo' => 146,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 383,
            'cd_arnv' => 'TTKUI',
        ]);

        Flight::create([
            'nr_voo' => 146,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 191,
            'cd_arnv' => 'TTKMO',
        ]);

        Flight::create([
            'nr_voo' => 147,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 383,
            'cd_arnv' => 'TTKUI',
        ]);

        Flight::create([
            'nr_voo' => 147,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 312,
            'cd_arnv' => 'TTOMI',
        ]);

        Flight::create([
            'nr_voo' => 148,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTLMI',
        ]);

        Flight::create([
            'nr_voo' => 148,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTOUR',
        ]);

        Flight::create([
            'nr_voo' => 149,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTOUT',
        ]);

        Flight::create([
            'nr_voo' => 149,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTLMI',
        ]);

        Flight::create([
            'nr_voo' => 150,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 293,
            'cd_arnv' => 'TTQUI',
        ]);

        Flight::create([
            'nr_voo' => 150,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 150,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 62,
            'cd_arnv' => 'TTKMP',
        ]);

        Flight::create([
            'nr_voo' => 151,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 151,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 82,
            'cd_arnv' => 'TTOMF',
        ]);

        Flight::create([
            'nr_voo' => 151,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 393,
            'cd_arnv' => 'TTOUT',
        ]);

        Flight::create([
            'nr_voo' => 152,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 4,
            'cd_arnv' => 'TTRUN',
        ]);

        Flight::create([
            'nr_voo' => 152,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTKMU',
        ]);

        Flight::create([
            'nr_voo' => 153,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 214,
            'cd_arnv' => 'TTRUN',
        ]);

        Flight::create([
            'nr_voo' => 153,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 113,
            'cd_arnv' => 'TTKMO',
        ]);

        Flight::create([
            'nr_voo' => 154,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 113,
            'cd_arnv' => 'TTKMO',
        ]);

        Flight::create([
            'nr_voo' => 154,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 334,
            'cd_arnv' => 'TTKUR',
        ]);

        Flight::create([
            'nr_voo' => 155,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 223,
            'cd_arnv' => 'TTUMB',
        ]);

        Flight::create([
            'nr_voo' => 155,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTOUZ',
        ]);

        Flight::create([
            'nr_voo' => 156,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTKMI',
        ]);

        Flight::create([
            'nr_voo' => 156,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTTUN',
        ]);

        Flight::create([
            'nr_voo' => 157,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTLOS',
        ]);

        Flight::create([
            'nr_voo' => 157,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 54,
            'cd_arnv' => 'TTKUF',
        ]);

        Flight::create([
            'nr_voo' => 157,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTKMB',
        ]);

        Flight::create([
            'nr_voo' => 158,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 264,
            'cd_arnv' => 'TTKUD',
        ]);

        Flight::create([
            'nr_voo' => 158,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 193,
            'cd_arnv' => 'TTLMI',
        ]);

        Flight::create([
            'nr_voo' => 159,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 74,
            'cd_arnv' => 'TTKUC',
        ]);

        Flight::create([
            'nr_voo' => 159,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 159,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTKMU',
        ]);

        Flight::create([
            'nr_voo' => 160,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTKUF',
        ]);

        Flight::create([
            'nr_voo' => 160,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 160,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 414,
            'cd_arnv' => 'TTLMI',
        ]);

        Flight::create([
            'nr_voo' => 161,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTOMI',
        ]);

        Flight::create([
            'nr_voo' => 161,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 161,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTTUN',
        ]);

        Flight::create([
            'nr_voo' => 162,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 162,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 294,
            'cd_arnv' => 'TTDUQ',
        ]);

        Flight::create([
            'nr_voo' => 162,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 144,
            'cd_arnv' => 'TTDMI',
        ]);

        Flight::create([
            'nr_voo' => 163,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 294,
            'cd_arnv' => 'TTKUQ',
        ]);

        Flight::create([
            'nr_voo' => 163,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTOMI',
        ]);

        Flight::create([
            'nr_voo' => 164,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTRUD',
        ]);

        Flight::create([
            'nr_voo' => 164,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTKMP',
        ]);

        Flight::create([
            'nr_voo' => 165,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTDUI',
        ]);

        Flight::create([
            'nr_voo' => 166,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 205,
            'cd_arnv' => 'TTKMB',
        ]);

        Flight::create([
            'nr_voo' => 166,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTOUT',
        ]);

        Flight::create([
            'nr_voo' => 167,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTDUQ',
        ]);

        Flight::create([
            'nr_voo' => 167,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTUMB',
        ]);

        Flight::create([
            'nr_voo' => 168,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTKUI',
        ]);

        Flight::create([
            'nr_voo' => 168,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 168,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 225,
            'cd_arnv' => 'TTKMI',
        ]);

        Flight::create([
            'nr_voo' => 169,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTQUI',
        ]);

        Flight::create([
            'nr_voo' => 169,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 11,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 169,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 225,
            'cd_arnv' => 'TTKMO',
        ]);

        Flight::create([
            'nr_voo' => 170,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTTUL',
        ]);

        Flight::create([
            'nr_voo' => 170,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTKMB',
        ]);

        Flight::create([
            'nr_voo' => 171,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 295,
            'cd_arnv' => 'TTLUI',
        ]);

        Flight::create([
            'nr_voo' => 171,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTLMI',
        ]);

        Flight::create([
            'nr_voo' => 172,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTKMU',
        ]);

        Flight::create([
            'nr_voo' => 172,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTIUM',
        ]);

        Flight::create([
            'nr_voo' => 173,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 86,
            'cd_arnv' => 'TTKMP',
        ]);

        Flight::create([
            'nr_voo' => 173,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 395,
            'cd_arnv' => 'TTOUS',
        ]);

        Flight::create([
            'nr_voo' => 174,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 174,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 386,
            'cd_arnv' => 'TTKMU',
        ]);

        Flight::create([
            'nr_voo' => 174,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 406,
            'cd_arnv' => 'TTTUL',
        ]);

        Flight::create([
            'nr_voo' => 175,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTUMB',
        ]);

        Flight::create([
            'nr_voo' => 175,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 116,
            'cd_arnv' => 'TTKUR',
        ]);

        Flight::create([
            'nr_voo' => 176,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 227,
            'cd_arnv' => 'TTOMF',
        ]);

        Flight::create([
            'nr_voo' => 176,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 176,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 116,
            'cd_arnv' => 'TTIUM',
        ]);

        Flight::create([
            'nr_voo' => 177,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 27,
            'cd_arnv' => 'TTDMI',
        ]);

        Flight::create([
            'nr_voo' => 177,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 177,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 416,
            'cd_arnv' => 'TTRUN',
        ]);

        Flight::create([
            'nr_voo' => 177,
            'dt_saida_voo' => '1993-01-08',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 178,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 178,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 377,
            'cd_arnv' => 'TTOMI',
        ]);

        Flight::create([
            'nr_voo' => 178,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTTUN',
        ]);

        Flight::create([
            'nr_voo' => 179,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTRUD',
        ]);

        Flight::create([
            'nr_voo' => 179,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 18,
            'cd_arnv' => 'TTOMF',
        ]);

        Flight::create([
            'nr_voo' => 180,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 136,
            'cd_arnv' => 'TTKUZ',
        ]);

        Flight::create([
            'nr_voo' => 180,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 180,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 388,
            'cd_arnv' => 'TTOMI',
        ]);

        Flight::create([
            'nr_voo' => 181,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTRUD',
        ]);

        Flight::create([
            'nr_voo' => 181,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 98,
            'cd_arnv' => 'TTLMO',
        ]);

        Flight::create([
            'nr_voo' => 182,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTKUM',
        ]);

        Flight::create([
            'nr_voo' => 182,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 329,
            'cd_arnv' => 'TTLMO',
        ]);

        Flight::create([
            'nr_voo' => 183,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTKUM',
        ]);

        Flight::create([
            'nr_voo' => 183,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 329,
            'cd_arnv' => 'TTKMI',
        ]);

        Flight::create([
            'nr_voo' => 184,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 346,
            'cd_arnv' => 'TTSUN',
        ]);

        Flight::create([
            'nr_voo' => 184,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 139,
            'cd_arnv' => 'TTIMO',
        ]);

        Flight::create([
            'nr_voo' => 185,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 185,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTRUD',
        ]);

        Flight::create([
            'nr_voo' => 185,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTDMI',
        ]);

        Flight::create([
            'nr_voo' => 186,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 356,
            'cd_arnv' => 'TTKUD',
        ]);

        Flight::create([
            'nr_voo' => 186,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 186,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 89,
            'cd_arnv' => 'TTLMO',
        ]);

        Flight::create([
            'nr_voo' => 187,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 156,
            'cd_arnv' => 'TTKUL',
        ]);

        Flight::create([
            'nr_voo' => 187,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKMO',
        ]);

        Flight::create([
            'nr_voo' => 188,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 156,
            'cd_arnv' => 'TTKUL',
        ]);

        Flight::create([
            'nr_voo' => 188,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 400,
            'cd_arnv' => 'TTULI',
        ]);

        Flight::create([
            'nr_voo' => 189,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 210,
            'cd_arnv' => 'TTRLO',
        ]);

        Flight::create([
            'nr_voo' => 189,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTGUS',
        ]);

        Flight::create([
            'nr_voo' => 190,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 210,
            'cd_arnv' => 'TTILD',
        ]);

        Flight::create([
            'nr_voo' => 190,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 166,
            'cd_arnv' => 'TTIUM',
        ]);

        Flight::create([
            'nr_voo' => 191,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 176,
            'cd_arnv' => 'TTKUM',
        ]);

        Flight::create([
            'nr_voo' => 191,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 10,
            'cd_arnv' => 'TTILS',
        ]);

        Flight::create([
            'nr_voo' => 192,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 120,
            'cd_arnv' => 'TTKLV',
        ]);

        Flight::create([
            'nr_voo' => 192,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 76,
            'cd_arnv' => 'TTKUM',
        ]);

        Flight::create([
            'nr_voo' => 193,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTKUM',
        ]);

        Flight::create([
            'nr_voo' => 193,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTOLI',
        ]);

        Flight::create([
            'nr_voo' => 194,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTKLT',
        ]);

        Flight::create([
            'nr_voo' => 194,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 194,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 86,
            'cd_arnv' => 'TTKUQ',
        ]);

        Flight::create([
            'nr_voo' => 195,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 396,
            'cd_arnv' => 'TTKUC',
        ]);

        Flight::create([
            'nr_voo' => 195,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTILM',
        ]);

        Flight::create([
            'nr_voo' => 196,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 196,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 150,
            'cd_arnv' => 'TTSLY',
        ]);

        Flight::create([
            'nr_voo' => 196,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 396,
            'cd_arnv' => 'TTRUN',
        ]);

        Flight::create([
            'nr_voo' => 197,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 197,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTKUD',
        ]);

        Flight::create([
            'nr_voo' => 197,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 60,
            'cd_arnv' => 'TTILS',
        ]);

        Flight::create([
            'nr_voo' => 198,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTKLL',
        ]);

        Flight::create([
            'nr_voo' => 198,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTKUG',
        ]);

        Flight::create([
            'nr_voo' => 199,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTTUR',
        ]);

        Flight::create([
            'nr_voo' => 199,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTKLM',
        ]);

        Flight::create([
            'nr_voo' => 200,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 270,
            'cd_arnv' => 'TTKLP',
        ]);

        Flight::create([
            'nr_voo' => 200,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 200,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTKUG',
        ]);

        Flight::create([
            'nr_voo' => 201,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 380,
            'cd_arnv' => 'TTKLI',
        ]);

        Flight::create([
            'nr_voo' => 201,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 37,
            'cd_arnv' => 'TTOUR',
        ]);

        Flight::create([
            'nr_voo' => 202,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 180,
            'cd_arnv' => 'TTKLU',
        ]);

        Flight::create([
            'nr_voo' => 202,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 47,
            'cd_arnv' => 'TTKUC',
        ]);

        Flight::create([
            'nr_voo' => 203,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 203,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 47,
            'cd_arnv' => 'TTSUS',
        ]);

        Flight::create([
            'nr_voo' => 203,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTLLI',
        ]);

        Flight::create([
            'nr_voo' => 204,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 413,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 204,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 190,
            'cd_arnv' => 'TTKLM',
        ]);

        Flight::create([
            'nr_voo' => 204,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 347,
            'cd_arnv' => 'TTSUS',
        ]);

        Flight::create([
            'nr_voo' => 205,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 57,
            'cd_arnv' => 'TTSUS',
        ]);

        Flight::create([
            'nr_voo' => 205,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 205,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 421,
            'cd_arnv' => 'TTRLO',
        ]);

        Flight::create([
            'nr_voo' => 205,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTUNO',
        ]);

        Flight::create([
            'nr_voo' => 206,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 277,
            'cd_arnv' => 'TTOUR',
        ]);

        Flight::create([
            'nr_voo' => 206,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTILM',
        ]);

        Flight::create([
            'nr_voo' => 207,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 207,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 121,
            'cd_arnv' => 'TTKLH',
        ]);

        Flight::create([
            'nr_voo' => 207,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 277,
            'cd_arnv' => 'TTQUI',
        ]);

        Flight::create([
            'nr_voo' => 208,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 208,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTKLT',
        ]);

        Flight::create([
            'nr_voo' => 208,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 97,
            'cd_arnv' => 'TTKUF',
        ]);

        Flight::create([
            'nr_voo' => 209,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 31,
            'cd_arnv' => 'TTOLI',
        ]);

        Flight::create([
            'nr_voo' => 209,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTTUR',
        ]);

        Flight::create([
            'nr_voo' => 210,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTKUC',
        ]);

        Flight::create([
            'nr_voo' => 210,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 31,
            'cd_arnv' => 'TTILS',
        ]);

        Flight::create([
            'nr_voo' => 211,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTKUL',
        ]);

        Flight::create([
            'nr_voo' => 211,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTILD',
        ]);

        Flight::create([
            'nr_voo' => 212,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 418,
            'cd_arnv' => 'TTKUZ',
        ]);

        Flight::create([
            'nr_voo' => 212,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTILB',
        ]);

        Flight::create([
            'nr_voo' => 213,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 213,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 238,
            'cd_arnv' => 'TTLUI',
        ]);

        Flight::create([
            'nr_voo' => 213,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 213,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTOLF',
        ]);

        Flight::create([
            'nr_voo' => 214,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 338,
            'cd_arnv' => 'TTKUI',
        ]);

        Flight::create([
            'nr_voo' => 214,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 371,
            'cd_arnv' => 'TTKLD',
        ]);

        Flight::create([
            'nr_voo' => 215,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 215,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 391,
            'cd_arnv' => 'TTRLI',
        ]);

        Flight::create([
            'nr_voo' => 215,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 138,
            'cd_arnv' => 'TTSUN',
        ]);

        Flight::create([
            'nr_voo' => 216,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 2,
            'cd_arnv' => 'TTKLF',
        ]);

        Flight::create([
            'nr_voo' => 216,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 38,
            'cd_arnv' => 'TTIUM',
        ]);

        Flight::create([
            'nr_voo' => 217,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 202,
            'cd_arnv' => 'TTKLP',
        ]);

        Flight::create([
            'nr_voo' => 217,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 248,
            'cd_arnv' => 'TTKUI',
        ]);

        Flight::create([
            'nr_voo' => 218,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 202,
            'cd_arnv' => 'TTKLT',
        ]);

        Flight::create([
            'nr_voo' => 218,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 248,
            'cd_arnv' => 'TTKUL',
        ]);

        Flight::create([
            'nr_voo' => 219,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 302,
            'cd_arnv' => 'TTKLV',
        ]);

        Flight::create([
            'nr_voo' => 219,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 219,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 248,
            'cd_arnv' => 'TTQUI',
        ]);

        Flight::create([
            'nr_voo' => 220,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTKUC',
        ]);

        Flight::create([
            'nr_voo' => 220,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 212,
            'cd_arnv' => 'TTILT',
        ]);

        Flight::create([
            'nr_voo' => 221,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTKUF',
        ]);

        Flight::create([
            'nr_voo' => 221,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 221,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 212,
            'cd_arnv' => 'TTILT',
        ]);

        Flight::create([
            'nr_voo' => 222,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 312,
            'cd_arnv' => 'TTKLF',
        ]);

        Flight::create([
            'nr_voo' => 222,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 368,
            'cd_arnv' => 'TTKUR',
        ]);

        Flight::create([
            'nr_voo' => 223,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 312,
            'cd_arnv' => 'TTKLL',
        ]);

        Flight::create([
            'nr_voo' => 223,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 368,
            'cd_arnv' => 'TTKUR',
        ]);

        Flight::create([
            'nr_voo' => 224,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 422,
            'cd_arnv' => 'TTOLF',
        ]);

        Flight::create([
            'nr_voo' => 224,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 372,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 224,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 178,
            'cd_arnv' => 'TTKUS',
        ]);

        Flight::create([
            'nr_voo' => 225,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 398,
            'cd_arnv' => 'TTRUN',
        ]);

        Flight::create([
            'nr_voo' => 225,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTILB',
        ]);

        Flight::create([
            'nr_voo' => 226,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 309,
            'cd_arnv' => 'TTSUN',
        ]);

        Flight::create([
            'nr_voo' => 226,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 122,
            'cd_arnv' => 'TTKLF',
        ]);

        Flight::create([
            'nr_voo' => 227,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 222,
            'cd_arnv' => 'TTKLV',
        ]);

        Flight::create([
            'nr_voo' => 227,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTKUN',
        ]);

        Flight::create([
            'nr_voo' => 228,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTKUS',
        ]);

        Flight::create([
            'nr_voo' => 228,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 132,
            'cd_arnv' => 'TTILM',
        ]);

        Flight::create([
            'nr_voo' => 229,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 39,
            'cd_arnv' => 'TTGUI',
        ]);

        Flight::create([
            'nr_voo' => 229,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 229,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 152,
            'cd_arnv' => 'TTKLC',
        ]);

        Flight::create([
            'nr_voo' => 230,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 52,
            'cd_arnv' => 'TTKLV',
        ]);

        Flight::create([
            'nr_voo' => 230,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTOUS',
        ]);

        Flight::create([
            'nr_voo' => 231,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 231,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTOUS',
        ]);

        Flight::create([
            'nr_voo' => 231,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 262,
            'cd_arnv' => 'TTRLI',
        ]);

        Flight::create([
            'nr_voo' => 232,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 262,
            'cd_arnv' => 'TTRLO',
        ]);

        Flight::create([
            'nr_voo' => 232,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 269,
            'cd_arnv' => 'TTGUS',
        ]);

        Flight::create([
            'nr_voo' => 233,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 189,
            'cd_arnv' => 'TTKUD',
        ]);

        Flight::create([
            'nr_voo' => 233,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTKLD',
        ]);

        Flight::create([
            'nr_voo' => 234,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 234,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 372,
            'cd_arnv' => 'TTOLF',
        ]);

        Flight::create([
            'nr_voo' => 234,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTTUR',
        ]);

        Flight::create([
            'nr_voo' => 235,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTKLQ',
        ]);

        Flight::create([
            'nr_voo' => 235,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 416,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 235,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 10,
            'cd_arnv' => 'TTKTI',
        ]);

        Flight::create([
            'nr_voo' => 236,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 10,
            'cd_arnv' => 'TTKTO',
        ]);

        Flight::create([
            'nr_voo' => 236,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 103,
            'cd_arnv' => 'TTILB',
        ]);

        Flight::create([
            'nr_voo' => 237,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 103,
            'cd_arnv' => 'TTILB',
        ]);

        Flight::create([
            'nr_voo' => 237,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 110,
            'cd_arnv' => 'TTKTU',
        ]);

        Flight::create([
            'nr_voo' => 238,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 413,
            'cd_arnv' => 'TTKLL',
        ]);

        Flight::create([
            'nr_voo' => 238,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 320,
            'cd_arnv' => 'TTITT',
        ]);

        Flight::create([
            'nr_voo' => 238,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 239,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 213,
            'cd_arnv' => 'TTKLH',
        ]);

        Flight::create([
            'nr_voo' => 239,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTKTI',
        ]);

        Flight::create([
            'nr_voo' => 240,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTKLP',
        ]);

        Flight::create([
            'nr_voo' => 240,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 250,
            'cd_arnv' => 'TTSTO',
        ]);

        Flight::create([
            'nr_voo' => 241,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 253,
            'cd_arnv' => 'TTRLI',
        ]);

        Flight::create([
            'nr_voo' => 241,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 150,
            'cd_arnv' => 'TTITT',
        ]);

        Flight::create([
            'nr_voo' => 242,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTLLI',
        ]);

        Flight::create([
            'nr_voo' => 242,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 250,
            'cd_arnv' => 'TTRTH',
        ]);

        Flight::create([
            'nr_voo' => 243,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 270,
            'cd_arnv' => 'TTITO',
        ]);

        Flight::create([
            'nr_voo' => 243,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTKLM',
        ]);

        Flight::create([
            'nr_voo' => 244,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 244,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 73,
            'cd_arnv' => 'TTILB',
        ]);

        Flight::create([
            'nr_voo' => 244,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTKTU',
        ]);

        Flight::create([
            'nr_voo' => 245,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 245,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 290,
            'cd_arnv' => 'TTITO',
        ]);

        Flight::create([
            'nr_voo' => 245,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTKLS',
        ]);

        Flight::create([
            'nr_voo' => 246,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 246,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 390,
            'cd_arnv' => 'TTPTI',
        ]);

        Flight::create([
            'nr_voo' => 246,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 393,
            'cd_arnv' => 'TTKLC',
        ]);

        Flight::create([
            'nr_voo' => 247,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 114,
            'cd_arnv' => 'TTKLP',
        ]);

        Flight::create([
            'nr_voo' => 247,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 401,
            'cd_arnv' => 'TTKTH',
        ]);

        Flight::create([
            'nr_voo' => 247,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTINO',
        ]);

        Flight::create([
            'nr_voo' => 248,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 114,
            'cd_arnv' => 'TTKLT',
        ]);

        Flight::create([
            'nr_voo' => 249,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 121,
            'cd_arnv' => 'TTKTF',
        ]);

        Flight::create([
            'nr_voo' => 249,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTOLI',
        ]);

        Flight::create([
            'nr_voo' => 250,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTKLS',
        ]);

        Flight::create([
            'nr_voo' => 251,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTKLU',
        ]);

        Flight::create([
            'nr_voo' => 251,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 71,
            'cd_arnv' => 'TTRTI',
        ]);

        Flight::create([
            'nr_voo' => 252,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 81,
            'cd_arnv' => 'TTLTI',
        ]);

        Flight::create([
            'nr_voo' => 252,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 395,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 252,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTILL',
        ]);

        Flight::create([
            'nr_voo' => 253,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 334,
            'cd_arnv' => 'TTILM',
        ]);

        Flight::create([
            'nr_voo' => 253,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 91,
            'cd_arnv' => 'TTRTI',
        ]);

        Flight::create([
            'nr_voo' => 254,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 134,
            'cd_arnv' => 'TTLLI',
        ]);

        Flight::create([
            'nr_voo' => 254,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 254,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 402,
            'cd_arnv' => 'TTKTF',
        ]);

        Flight::create([
            'nr_voo' => 255,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 302,
            'cd_arnv' => 'TTKTI',
        ]);

        Flight::create([
            'nr_voo' => 255,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 334,
            'cd_arnv' => 'TTKLB',
        ]);

        Flight::create([
            'nr_voo' => 256,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 102,
            'cd_arnv' => 'TTKTU',
        ]);

        Flight::create([
            'nr_voo' => 256,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTSLY',
        ]);

        Flight::create([
            'nr_voo' => 257,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 44,
            'cd_arnv' => 'TTRLI',
        ]);

        Flight::create([
            'nr_voo' => 257,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 112,
            'cd_arnv' => 'TTKTU',
        ]);

        Flight::create([
            'nr_voo' => 258,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 244,
            'cd_arnv' => 'TTKLQ',
        ]);

        Flight::create([
            'nr_voo' => 258,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 32,
            'cd_arnv' => 'TTLTO',
        ]);

        Flight::create([
            'nr_voo' => 258,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 259,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTKLF',
        ]);

        Flight::create([
            'nr_voo' => 260,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 260,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 332,
            'cd_arnv' => 'TTITT',
        ]);

        Flight::create([
            'nr_voo' => 260,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTKLM',
        ]);

        Flight::create([
            'nr_voo' => 261,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 364,
            'cd_arnv' => 'TTILV',
        ]);

        Flight::create([
            'nr_voo' => 261,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 262,
            'cd_arnv' => 'TTNTH',
        ]);

        Flight::create([
            'nr_voo' => 262,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTKTF',
        ]);

        Flight::create([
            'nr_voo' => 262,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 262,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 364,
            'cd_arnv' => 'TTKLB',
        ]);

        Flight::create([
            'nr_voo' => 263,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 392,
            'cd_arnv' => 'TTPTI',
        ]);

        Flight::create([
            'nr_voo' => 263,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTILL',
        ]);

        Flight::create([
            'nr_voo' => 264,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 264,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 203,
            'cd_arnv' => 'TTKTH',
        ]);

        Flight::create([
            'nr_voo' => 264,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTKLC',
        ]);

        Flight::create([
            'nr_voo' => 265,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 94,
            'cd_arnv' => 'TTILS',
        ]);

        Flight::create([
            'nr_voo' => 265,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 403,
            'cd_arnv' => 'TTKTT',
        ]);

        Flight::create([
            'nr_voo' => 266,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 105,
            'cd_arnv' => 'TTILT',
        ]);

        Flight::create([
            'nr_voo' => 266,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTONT',
        ]);

        Flight::create([
            'nr_voo' => 266,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 3,
            'cd_arnv' => 'TTOTI',
        ]);

        Flight::create([
            'nr_voo' => 267,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 303,
            'cd_arnv' => 'TTRTO',
        ]);

        Flight::create([
            'nr_voo' => 267,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 205,
            'cd_arnv' => 'TTILL',
        ]);

        Flight::create([
            'nr_voo' => 268,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 113,
            'cd_arnv' => 'TTLTO',
        ]);

        Flight::create([
            'nr_voo' => 268,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 305,
            'cd_arnv' => 'TTKLC',
        ]);

        Flight::create([
            'nr_voo' => 269,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 405,
            'cd_arnv' => 'TTKLU',
        ]);

        Flight::create([
            'nr_voo' => 269,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 213,
            'cd_arnv' => 'TTTTI',
        ]);

        Flight::create([
            'nr_voo' => 270,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTKTH',
        ]);

        Flight::create([
            'nr_voo' => 270,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 415,
            'cd_arnv' => 'TTSLY',
        ]);

        Flight::create([
            'nr_voo' => 270,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 271,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTKLD',
        ]);

        Flight::create([
            'nr_voo' => 271,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 33,
            'cd_arnv' => 'TTRTI',
        ]);

        Flight::create([
            'nr_voo' => 272,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTKTI',
        ]);

        Flight::create([
            'nr_voo' => 272,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 272,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTKLM',
        ]);

        Flight::create([
            'nr_voo' => 273,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTOTI',
        ]);

        Flight::create([
            'nr_voo' => 273,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTRLO',
        ]);

        Flight::create([
            'nr_voo' => 274,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTKLO',
        ]);

        Flight::create([
            'nr_voo' => 274,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 153,
            'cd_arnv' => 'TTRTO',
        ]);

        Flight::create([
            'nr_voo' => 275,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 153,
            'cd_arnv' => 'TTRTO',
        ]);

        Flight::create([
            'nr_voo' => 275,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTULI',
        ]);

        Flight::create([
            'nr_voo' => 276,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTKTF',
        ]);

        Flight::create([
            'nr_voo' => 276,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 406,
            'cd_arnv' => 'TTILL',
        ]);

        Flight::create([
            'nr_voo' => 277,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 277,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 293,
            'cd_arnv' => 'TTPTI',
        ]);

        Flight::create([
            'nr_voo' => 277,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 406,
            'cd_arnv' => 'TTILL',
        ]);

        Flight::create([
            'nr_voo' => 278,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTKLH',
        ]);

        Flight::create([
            'nr_voo' => 278,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 393,
            'cd_arnv' => 'TTOTI',
        ]);

        Flight::create([
            'nr_voo' => 279,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTKLH',
        ]);

        Flight::create([
            'nr_voo' => 279,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 104,
            'cd_arnv' => 'TTSTO',
        ]);

        Flight::create([
            'nr_voo' => 280,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 214,
            'cd_arnv' => 'TTNTO',
        ]);

        Flight::create([
            'nr_voo' => 280,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTKLD',
        ]);

        Flight::create([
            'nr_voo' => 281,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 136,
            'cd_arnv' => 'TTKLV',
        ]);

        Flight::create([
            'nr_voo' => 281,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTNTI',
        ]);

        Flight::create([
            'nr_voo' => 282,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 244,
            'cd_arnv' => 'TTKTF',
        ]);

        Flight::create([
            'nr_voo' => 282,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 282,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTILV',
        ]);

        Flight::create([
            'nr_voo' => 283,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 44,
            'cd_arnv' => 'TTLTO',
        ]);

        Flight::create([
            'nr_voo' => 283,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 283,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 346,
            'cd_arnv' => 'TTILS',
        ]);

        Flight::create([
            'nr_voo' => 284,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 356,
            'cd_arnv' => 'TTKLB',
        ]);

        Flight::create([
            'nr_voo' => 284,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 144,
            'cd_arnv' => 'TTNTH',
        ]);

        Flight::create([
            'nr_voo' => 285,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTTTO',
        ]);

        Flight::create([
            'nr_voo' => 285,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTSLY',
        ]);

        Flight::create([
            'nr_voo' => 286,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTWTO',
        ]);

        Flight::create([
            'nr_voo' => 286,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 286,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 276,
            'cd_arnv' => 'TTKLI',
        ]);

        Flight::create([
            'nr_voo' => 287,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 264,
            'cd_arnv' => 'TTWTO',
        ]);

        Flight::create([
            'nr_voo' => 287,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 53,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 287,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 286,
            'cd_arnv' => 'TTULI',
        ]);

        Flight::create([
            'nr_voo' => 288,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 364,
            'cd_arnv' => 'TTNTO',
        ]);

        Flight::create([
            'nr_voo' => 288,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 396,
            'cd_arnv' => 'TTKLH',
        ]);

        Flight::create([
            'nr_voo' => 289,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTNTI',
        ]);

        Flight::create([
            'nr_voo' => 289,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 107,
            'cd_arnv' => 'TTOLI',
        ]);

        Flight::create([
            'nr_voo' => 290,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTITO',
        ]);

        Flight::create([
            'nr_voo' => 290,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTKLO',
        ]);

        Flight::create([
            'nr_voo' => 291,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTNTO',
        ]);

        Flight::create([
            'nr_voo' => 291,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTKLO',
        ]);

        Flight::create([
            'nr_voo' => 292,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTITO',
        ]);

        Flight::create([
            'nr_voo' => 292,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 417,
            'cd_arnv' => 'TTOLF',
        ]);

        Flight::create([
            'nr_voo' => 293,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 293,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 374,
            'cd_arnv' => 'TTTTI',
        ]);

        Flight::create([
            'nr_voo' => 293,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTLLI',
        ]);

        Flight::create([
            'nr_voo' => 294,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 74,
            'cd_arnv' => 'TTRTU',
        ]);

        Flight::create([
            'nr_voo' => 294,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 127,
            'cd_arnv' => 'TTKLS',
        ]);

        Flight::create([
            'nr_voo' => 295,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 295,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 374,
            'cd_arnv' => 'TTRTU',
        ]);

        Flight::create([
            'nr_voo' => 295,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 127,
            'cd_arnv' => 'TTKLO',
        ]);

        Flight::create([
            'nr_voo' => 296,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 296,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTKTU',
        ]);

        Flight::create([
            'nr_voo' => 296,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKLI',
        ]);

        Flight::create([
            'nr_voo' => 297,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTKTO',
        ]);

        Flight::create([
            'nr_voo' => 297,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 157,
            'cd_arnv' => 'TTKLU',
        ]);

        Flight::create([
            'nr_voo' => 298,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 87,
            'cd_arnv' => 'TTOLI',
        ]);

        Flight::create([
            'nr_voo' => 298,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 305,
            'cd_arnv' => 'TTKTT',
        ]);

        Flight::create([
            'nr_voo' => 299,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 299,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTLTO',
        ]);

        Flight::create([
            'nr_voo' => 299,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTULI',
        ]);

        Flight::create([
            'nr_voo' => 300,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTKLP',
        ]);

        Flight::create([
            'nr_voo' => 300,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTITT',
        ]);

        Flight::create([
            'nr_voo' => 301,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTILD',
        ]);

        Flight::create([
            'nr_voo' => 302,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 345,
            'cd_arnv' => 'TTKTO',
        ]);

        Flight::create([
            'nr_voo' => 302,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTILD',
        ]);

        Flight::create([
            'nr_voo' => 303,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 145,
            'cd_arnv' => 'TTNTH',
        ]);

        Flight::create([
            'nr_voo' => 303,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 303,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTKLT',
        ]);

        Flight::create([
            'nr_voo' => 304,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTLTI',
        ]);

        Flight::create([
            'nr_voo' => 304,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTILV',
        ]);

        Flight::create([
            'nr_voo' => 305,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 305,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 185,
            'cd_arnv' => 'TTLTO',
        ]);

        Flight::create([
            'nr_voo' => 305,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTILV',
        ]);

        Flight::create([
            'nr_voo' => 306,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 185,
            'cd_arnv' => 'TTKTH',
        ]);

        Flight::create([
            'nr_voo' => 306,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTKLB',
        ]);

        Flight::create([
            'nr_voo' => 307,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTUFI',
        ]);

        Flight::create([
            'nr_voo' => 307,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTKLU',
        ]);

        Flight::create([
            'nr_voo' => 307,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 395,
            'cd_arnv' => 'TTRTI',
        ]);

        Flight::create([
            'nr_voo' => 308,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTWTO',
        ]);

        Flight::create([
            'nr_voo' => 308,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 308,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 18,
            'cd_arnv' => 'TTKLL',
        ]);

        Flight::create([
            'nr_voo' => 309,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTKTR',
        ]);

        Flight::create([
            'nr_voo' => 309,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTILT',
        ]);

        Flight::create([
            'nr_voo' => 310,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTITO',
        ]);

        Flight::create([
            'nr_voo' => 310,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 238,
            'cd_arnv' => 'TTRLO',
        ]);

        Flight::create([
            'nr_voo' => 311,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTTTO',
        ]);

        Flight::create([
            'nr_voo' => 311,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 38,
            'cd_arnv' => 'TTOLF',
        ]);

        Flight::create([
            'nr_voo' => 312,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTRTU',
        ]);

        Flight::create([
            'nr_voo' => 312,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTKLF',
        ]);

        Flight::create([
            'nr_voo' => 313,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 136,
            'cd_arnv' => 'TTLTI',
        ]);

        Flight::create([
            'nr_voo' => 313,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 313,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTSLY',
        ]);

        Flight::create([
            'nr_voo' => 314,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 136,
            'cd_arnv' => 'TTKTO',
        ]);

        Flight::create([
            'nr_voo' => 314,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 278,
            'cd_arnv' => 'TTILV',
        ]);

        Flight::create([
            'nr_voo' => 315,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTNTO',
        ]);

        Flight::create([
            'nr_voo' => 315,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 178,
            'cd_arnv' => 'TTILM',
        ]);

        Flight::create([
            'nr_voo' => 316,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKLC',
        ]);

        Flight::create([
            'nr_voo' => 316,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTKTO',
        ]);

        Flight::create([
            'nr_voo' => 317,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTITT',
        ]);

        Flight::create([
            'nr_voo' => 317,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 188,
            'cd_arnv' => 'TTILT',
        ]);

        Flight::create([
            'nr_voo' => 318,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTPTI',
        ]);

        Flight::create([
            'nr_voo' => 318,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTKLD',
        ]);

        Flight::create([
            'nr_voo' => 319,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 398,
            'cd_arnv' => 'TTKLQ',
        ]);

        Flight::create([
            'nr_voo' => 319,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 319,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 376,
            'cd_arnv' => 'TTKTT',
        ]);

        Flight::create([
            'nr_voo' => 320,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 17,
            'cd_arnv' => 'TTNTI',
        ]);

        Flight::create([
            'nr_voo' => 320,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 419,
            'cd_arnv' => 'TTKLL',
        ]);

        Flight::create([
            'nr_voo' => 321,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 417,
            'cd_arnv' => 'TTRTH',
        ]);

        Flight::create([
            'nr_voo' => 321,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 321,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 19,
            'cd_arnv' => 'TTKLO',
        ]);

        Flight::create([
            'nr_voo' => 322,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTWTO',
        ]);

        Flight::create([
            'nr_voo' => 322,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 29,
            'cd_arnv' => 'TTKLQ',
        ]);

        Flight::create([
            'nr_voo' => 323,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 227,
            'cd_arnv' => 'TTKTI',
        ]);

        Flight::create([
            'nr_voo' => 323,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTKLI',
        ]);

        Flight::create([
            'nr_voo' => 324,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 324,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 127,
            'cd_arnv' => 'TTOTI',
        ]);

        Flight::create([
            'nr_voo' => 324,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 369,
            'cd_arnv' => 'TTKLI',
        ]);

        Flight::create([
            'nr_voo' => 325,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 325,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 369,
            'cd_arnv' => 'TTKLQ',
        ]);

        Flight::create([
            'nr_voo' => 325,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 347,
            'cd_arnv' => 'TTRTI',
        ]);

        Flight::create([
            'nr_voo' => 326,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 167,
            'cd_arnv' => 'TTRTO',
        ]);

        Flight::create([
            'nr_voo' => 326,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTRLI',
        ]);

        Flight::create([
            'nr_voo' => 327,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 377,
            'cd_arnv' => 'TTLTI',
        ]);

        Flight::create([
            'nr_voo' => 327,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 327,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 279,
            'cd_arnv' => 'TTILD',
        ]);

        Flight::create([
            'nr_voo' => 328,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 328,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 379,
            'cd_arnv' => 'TTKLB',
        ]);

        Flight::create([
            'nr_voo' => 328,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTRTH',
        ]);

        Flight::create([
            'nr_voo' => 329,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTLLI',
        ]);

        Flight::create([
            'nr_voo' => 329,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTRTU',
        ]);

        Flight::create([
            'nr_voo' => 330,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 330,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 189,
            'cd_arnv' => 'TTKLS',
        ]);

        Flight::create([
            'nr_voo' => 330,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 97,
            'cd_arnv' => 'TTKTR',
        ]);

        Flight::create([
            'nr_voo' => 331,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 189,
            'cd_arnv' => 'TTKLS',
        ]);

        Flight::create([
            'nr_voo' => 331,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTRTO',
        ]);

        Flight::create([
            'nr_voo' => 332,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 332,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 121,
            'cd_arnv' => 'TTKKU',
        ]);

        Flight::create([
            'nr_voo' => 332,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 308,
            'cd_arnv' => 'TTNTH',
        ]);

        Flight::create([
            'nr_voo' => 333,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 202,
            'cd_arnv' => 'TTKKU',
        ]);

        Flight::create([
            'nr_voo' => 333,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 333,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTKTR',
        ]);

        Flight::create([
            'nr_voo' => 334,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 222,
            'cd_arnv' => 'TTKKU',
        ]);

        Flight::create([
            'nr_voo' => 334,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 128,
            'cd_arnv' => 'TTNTH',
        ]);

        Flight::create([
            'nr_voo' => 335,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTOKU',
        ]);

        Flight::create([
            'nr_voo' => 335,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 38,
            'cd_arnv' => 'TTSTO',
        ]);

        Flight::create([
            'nr_voo' => 336,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 336,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 385,
            'cd_arnv' => 'TTKKU',
        ]);

        Flight::create([
            'nr_voo' => 336,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 248,
            'cd_arnv' => 'TTKTR',
        ]);

        Flight::create([
            'nr_voo' => 337,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTKTT',
        ]);

        Flight::create([
            'nr_voo' => 337,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTOKU',
        ]);

        Flight::create([
            'nr_voo' => 338,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 57,
            'cd_arnv' => 'TTOKU',
        ]);

        Flight::create([
            'nr_voo' => 338,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 178,
            'cd_arnv' => 'TTTTI',
        ]);

        Flight::create([
            'nr_voo' => 339,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 278,
            'cd_arnv' => 'TTRTU',
        ]);

        Flight::create([
            'nr_voo' => 339,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTOKU',
        ]);

        Flight::create([
            'nr_voo' => 340,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 209,
            'cd_arnv' => 'TTOKU',
        ]);

        Flight::create([
            'nr_voo' => 340,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 298,
            'cd_arnv' => 'TTSTO',
        ]);

        Flight::create([
            'nr_voo' => 341,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTKKU',
        ]);

        Flight::create([
            'nr_voo' => 341,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 298,
            'cd_arnv' => 'TTTTI',
        ]);

        Flight::create([
            'nr_voo' => 342,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 329,
            'cd_arnv' => 'TTTTO',
        ]);

        Flight::create([
            'nr_voo' => 342,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 91,
            'cd_arnv' => 'TTKJO',
        ]);

        Flight::create([
            'nr_voo' => 343,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 39,
            'cd_arnv' => 'TTKTH',
        ]);

        Flight::create([
            'nr_voo' => 343,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTKJO',
        ]);

        Flight::create([
            'nr_voo' => 344,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 374,
            'cd_arnv' => 'TTKJO',
        ]);

        Flight::create([
            'nr_voo' => 344,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTKTT',
        ]);

        Flight::create([
            'nr_voo' => 345,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 417,
            'cd_arnv' => 'TTKJO',
        ]);

        Flight::create([
            'nr_voo' => 345,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTRTH',
        ]);

        Flight::create([
            'nr_voo' => 346,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTKTR',
        ]);

        Flight::create([
            'nr_voo' => 346,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 19,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 346,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTKJO',
        ]);

        Flight::create([
            'nr_voo' => 347,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 200,
            'cd_arnv' => 'TTKIV',
        ]);

        Flight::create([
            'nr_voo' => 347,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 347,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 369,
            'cd_arnv' => 'TTPTI',
        ]);

        Flight::create([
            'nr_voo' => 348,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 200,
            'cd_arnv' => 'TTKIQ',
        ]);

        Flight::create([
            'nr_voo' => 348,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 269,
            'cd_arnv' => 'TTOTI',
        ]);

        Flight::create([
            'nr_voo' => 349,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTKIS',
        ]);

        Flight::create([
            'nr_voo' => 349,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 269,
            'cd_arnv' => 'TTRTH',
        ]);

        Flight::create([
            'nr_voo' => 350,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTLTI',
        ]);

        Flight::create([
            'nr_voo' => 350,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTKIX',
        ]);

        Flight::create([
            'nr_voo' => 350,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 351,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 310,
            'cd_arnv' => 'TTKSO',
        ]);

        Flight::create([
            'nr_voo' => 351,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 100,
            'cd_arnv' => 'TTPIN',
        ]);

        Flight::create([
            'nr_voo' => 352,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 210,
            'cd_arnv' => 'TTLIO',
        ]);

        Flight::create([
            'nr_voo' => 352,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 10,
            'cd_arnv' => 'TTKSL',
        ]);

        Flight::create([
            'nr_voo' => 353,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 410,
            'cd_arnv' => 'TTKID',
        ]);

        Flight::create([
            'nr_voo' => 354,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTKSN',
        ]);

        Flight::create([
            'nr_voo' => 354,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 110,
            'cd_arnv' => 'TTDIN',
        ]);

        Flight::create([
            'nr_voo' => 355,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 420,
            'cd_arnv' => 'TTRIZ',
        ]);

        Flight::create([
            'nr_voo' => 355,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 355,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTKSO',
        ]);

        Flight::create([
            'nr_voo' => 356,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 420,
            'cd_arnv' => 'TTLIC',
        ]);

        Flight::create([
            'nr_voo' => 356,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 240,
            'cd_arnv' => 'TTISB',
        ]);

        Flight::create([
            'nr_voo' => 356,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 357,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 150,
            'cd_arnv' => 'TTKSN',
        ]);

        Flight::create([
            'nr_voo' => 357,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTLIO',
        ]);

        Flight::create([
            'nr_voo' => 358,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTNSO',
        ]);

        Flight::create([
            'nr_voo' => 358,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTKIM',
        ]);

        Flight::create([
            'nr_voo' => 359,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 130,
            'cd_arnv' => 'TTVIN',
        ]);

        Flight::create([
            'nr_voo' => 359,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 359,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTIST',
        ]);

        Flight::create([
            'nr_voo' => 360,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 230,
            'cd_arnv' => 'TTMIC',
        ]);

        Flight::create([
            'nr_voo' => 360,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 360,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 250,
            'cd_arnv' => 'TTOSS',
        ]);

        Flight::create([
            'nr_voo' => 361,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 70,
            'cd_arnv' => 'TTDSO',
        ]);

        Flight::create([
            'nr_voo' => 361,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 130,
            'cd_arnv' => 'TTTIN',
        ]);

        Flight::create([
            'nr_voo' => 362,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTUIM',
        ]);

        Flight::create([
            'nr_voo' => 362,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 180,
            'cd_arnv' => 'TTKSB',
        ]);

        Flight::create([
            'nr_voo' => 363,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 190,
            'cd_arnv' => 'TTKSR',
        ]);

        Flight::create([
            'nr_voo' => 363,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTNIO',
        ]);

        Flight::create([
            'nr_voo' => 364,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTNIZ',
        ]);

        Flight::create([
            'nr_voo' => 364,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTKSR',
        ]);

        Flight::create([
            'nr_voo' => 365,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTSIO',
        ]);

        Flight::create([
            'nr_voo' => 365,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 301,
            'cd_arnv' => 'TTKSC',
        ]);

        Flight::create([
            'nr_voo' => 366,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 366,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTMIL',
        ]);

        Flight::create([
            'nr_voo' => 366,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 101,
            'cd_arnv' => 'TTISB',
        ]);

        Flight::create([
            'nr_voo' => 367,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 101,
            'cd_arnv' => 'TTIST',
        ]);

        Flight::create([
            'nr_voo' => 367,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 250,
            'cd_arnv' => 'TTKIJ',
        ]);

        Flight::create([
            'nr_voo' => 368,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 31,
            'cd_arnv' => 'TTKSU',
        ]);

        Flight::create([
            'nr_voo' => 368,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 368,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 60,
            'cd_arnv' => 'TTNIL',
        ]);

        Flight::create([
            'nr_voo' => 369,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 160,
            'cd_arnv' => 'TTRIB',
        ]);

        Flight::create([
            'nr_voo' => 369,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 331,
            'cd_arnv' => 'TTKST',
        ]);

        Flight::create([
            'nr_voo' => 370,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 351,
            'cd_arnv' => 'TTKSV',
        ]);

        Flight::create([
            'nr_voo' => 370,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTKIJ',
        ]);

        Flight::create([
            'nr_voo' => 371,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 351,
            'cd_arnv' => 'TTSSI',
        ]);

        Flight::create([
            'nr_voo' => 371,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTSIM',
        ]);

        Flight::create([
            'nr_voo' => 372,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 361,
            'cd_arnv' => 'TTKSI',
        ]);

        Flight::create([
            'nr_voo' => 372,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 170,
            'cd_arnv' => 'TTVIN',
        ]);

        Flight::create([
            'nr_voo' => 373,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 373,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTKSS',
        ]);

        Flight::create([
            'nr_voo' => 373,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 170,
            'cd_arnv' => 'TTVIT',
        ]);

        Flight::create([
            'nr_voo' => 374,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 70,
            'cd_arnv' => 'TTRIG',
        ]);

        Flight::create([
            'nr_voo' => 374,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 371,
            'cd_arnv' => 'TTISI',
        ]);

        Flight::create([
            'nr_voo' => 375,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 70,
            'cd_arnv' => 'TTKIY',
        ]);

        Flight::create([
            'nr_voo' => 375,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 181,
            'cd_arnv' => 'TTISI',
        ]);

        Flight::create([
            'nr_voo' => 376,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTUCI',
        ]);

        Flight::create([
            'nr_voo' => 376,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 376,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 180,
            'cd_arnv' => 'TTNIO',
        ]);

        Flight::create([
            'nr_voo' => 376,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 391,
            'cd_arnv' => 'TTKSM',
        ]);

        Flight::create([
            'nr_voo' => 377,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 80,
            'cd_arnv' => 'TTRIB',
        ]);

        Flight::create([
            'nr_voo' => 377,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 91,
            'cd_arnv' => 'TTKSS',
        ]);

        Flight::create([
            'nr_voo' => 378,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 380,
            'cd_arnv' => 'TTKIS',
        ]);

        Flight::create([
            'nr_voo' => 378,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 378,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 91,
            'cd_arnv' => 'TTOST',
        ]);

        Flight::create([
            'nr_voo' => 379,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 202,
            'cd_arnv' => 'TTKSW',
        ]);

        Flight::create([
            'nr_voo' => 379,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 380,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 102,
            'cd_arnv' => 'TTKSN',
        ]);

        Flight::create([
            'nr_voo' => 380,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 1,
            'cd_arnv' => 'TTRIZ',
        ]);

        Flight::create([
            'nr_voo' => 381,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 112,
            'cd_arnv' => 'TTKST',
        ]);

        Flight::create([
            'nr_voo' => 381,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 382,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 112,
            'cd_arnv' => 'TTLSI',
        ]);

        Flight::create([
            'nr_voo' => 382,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 382,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 1,
            'cd_arnv' => 'TTOIL',
        ]);

        Flight::create([
            'nr_voo' => 383,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 401,
            'cd_arnv' => 'TTTIM',
        ]);

        Flight::create([
            'nr_voo' => 383,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 132,
            'cd_arnv' => 'TTNSO',
        ]);

        Flight::create([
            'nr_voo' => 384,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTRIS',
        ]);

        Flight::create([
            'nr_voo' => 384,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 132,
            'cd_arnv' => 'TTOST',
        ]);

        Flight::create([
            'nr_voo' => 385,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 11,
            'cd_arnv' => 'TTOIS',
        ]);

        Flight::create([
            'nr_voo' => 385,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 342,
            'cd_arnv' => 'TTUSI',
        ]);

        Flight::create([
            'nr_voo' => 386,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 311,
            'cd_arnv' => 'TTTIM',
        ]);

        Flight::create([
            'nr_voo' => 386,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 342,
            'cd_arnv' => 'TTOSS',
        ]);

        Flight::create([
            'nr_voo' => 386,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 387,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 311,
            'cd_arnv' => 'TTDIN',
        ]);

        Flight::create([
            'nr_voo' => 387,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTOST',
        ]);

        Flight::create([
            'nr_voo' => 388,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTSIS',
        ]);

        Flight::create([
            'nr_voo' => 388,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTISI',
        ]);

        Flight::create([
            'nr_voo' => 389,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 421,
            'cd_arnv' => 'TTKIY',
        ]);

        Flight::create([
            'nr_voo' => 389,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 262,
            'cd_arnv' => 'TTKSL',
        ]);

        Flight::create([
            'nr_voo' => 390,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 121,
            'cd_arnv' => 'TTPIN',
        ]);

        Flight::create([
            'nr_voo' => 390,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 262,
            'cd_arnv' => 'TTKSV',
        ]);

        Flight::create([
            'nr_voo' => 391,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 391,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 272,
            'cd_arnv' => 'TTISO',
        ]);

        Flight::create([
            'nr_voo' => 391,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 131,
            'cd_arnv' => 'TTDIV',
        ]);

        Flight::create([
            'nr_voo' => 392,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 31,
            'cd_arnv' => 'TTKIO',
        ]);

        Flight::create([
            'nr_voo' => 392,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTIST',
        ]);

        Flight::create([
            'nr_voo' => 393,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTISI',
        ]);

        Flight::create([
            'nr_voo' => 393,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTKIN',
        ]);

        Flight::create([
            'nr_voo' => 394,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 203,
            'cd_arnv' => 'TTKSN',
        ]);

        Flight::create([
            'nr_voo' => 394,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 394,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTLIM',
        ]);

        Flight::create([
            'nr_voo' => 395,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTMIL',
        ]);

        Flight::create([
            'nr_voo' => 395,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 403,
            'cd_arnv' => 'TTDSO',
        ]);

        Flight::create([
            'nr_voo' => 396,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 303,
            'cd_arnv' => 'TTSSI',
        ]);

        Flight::create([
            'nr_voo' => 396,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTMIR',
        ]);

        Flight::create([
            'nr_voo' => 397,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 341,
            'cd_arnv' => 'TTKIO',
        ]);

        Flight::create([
            'nr_voo' => 398,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 41,
            'cd_arnv' => 'TTPIN',
        ]);

        Flight::create([
            'nr_voo' => 398,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 223,
            'cd_arnv' => 'TTRSS',
        ]);

        Flight::create([
            'nr_voo' => 399,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTISI',
        ]);

        Flight::create([
            'nr_voo' => 399,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 151,
            'cd_arnv' => 'TTRIQ',
        ]);

        Flight::create([
            'nr_voo' => 400,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 51,
            'cd_arnv' => 'TTRIL',
        ]);

        Flight::create([
            'nr_voo' => 400,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 400,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTOSS',
        ]);

        Flight::create([
            'nr_voo' => 401,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 151,
            'cd_arnv' => 'TTKIU',
        ]);

        Flight::create([
            'nr_voo' => 401,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTKSM',
        ]);

        Flight::create([
            'nr_voo' => 402,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTDSO',
        ]);

        Flight::create([
            'nr_voo' => 402,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 251,
            'cd_arnv' => 'TTKIG',
        ]);

        Flight::create([
            'nr_voo' => 403,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 403,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTVID',
        ]);

        Flight::create([
            'nr_voo' => 404,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 361,
            'cd_arnv' => 'TTVIN',
        ]);

        Flight::create([
            'nr_voo' => 404,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTIST',
        ]);

        Flight::create([
            'nr_voo' => 405,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 261,
            'cd_arnv' => 'TTLIC',
        ]);

        Flight::create([
            'nr_voo' => 405,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTRSO',
        ]);

        Flight::create([
            'nr_voo' => 406,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 193,
            'cd_arnv' => 'TTOSI',
        ]);

        Flight::create([
            'nr_voo' => 406,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTKIU',
        ]);

        Flight::create([
            'nr_voo' => 407,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTKSV',
        ]);

        Flight::create([
            'nr_voo' => 407,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTVIT',
        ]);

        Flight::create([
            'nr_voo' => 408,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTVIT',
        ]);

        Flight::create([
            'nr_voo' => 408,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 104,
            'cd_arnv' => 'TTOST',
        ]);

        Flight::create([
            'nr_voo' => 409,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTKSO',
        ]);

        Flight::create([
            'nr_voo' => 409,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 71,
            'cd_arnv' => 'TTLIS',
        ]);

        Flight::create([
            'nr_voo' => 410,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTDIN',
        ]);

        Flight::create([
            'nr_voo' => 410,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 334,
            'cd_arnv' => 'TTKST',
        ]);

        Flight::create([
            'nr_voo' => 411,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 371,
            'cd_arnv' => 'TTDIM',
        ]);

        Flight::create([
            'nr_voo' => 411,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 334,
            'cd_arnv' => 'TTNSO',
        ]);

        Flight::create([
            'nr_voo' => 412,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTGIO',
        ]);

        Flight::create([
            'nr_voo' => 412,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTKSM',
        ]);

        Flight::create([
            'nr_voo' => 413,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 413,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 364,
            'cd_arnv' => 'TTUSI',
        ]);

        Flight::create([
            'nr_voo' => 413,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTKID',
        ]);

        Flight::create([
            'nr_voo' => 414,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 384,
            'cd_arnv' => 'TTKSI',
        ]);

        Flight::create([
            'nr_voo' => 414,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 2,
            'cd_arnv' => 'TTRIZ',
        ]);

        Flight::create([
            'nr_voo' => 415,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 402,
            'cd_arnv' => 'TTDIR',
        ]);

        Flight::create([
            'nr_voo' => 415,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 394,
            'cd_arnv' => 'TTRSO',
        ]);

        Flight::create([
            'nr_voo' => 416,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 105,
            'cd_arnv' => 'TTKSL',
        ]);

        Flight::create([
            'nr_voo' => 416,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 115,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 416,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 212,
            'cd_arnv' => 'TTDIS',
        ]);

        Flight::create([
            'nr_voo' => 417,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 112,
            'cd_arnv' => 'TTVIN',
        ]);

        Flight::create([
            'nr_voo' => 417,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 305,
            'cd_arnv' => 'TTLSI',
        ]);

        Flight::create([
            'nr_voo' => 418,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 315,
            'cd_arnv' => 'TTKSS',
        ]);

        Flight::create([
            'nr_voo' => 418,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 212,
            'cd_arnv' => 'TTNIO',
        ]);

        Flight::create([
            'nr_voo' => 419,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 412,
            'cd_arnv' => 'TTLIO',
        ]);

        Flight::create([
            'nr_voo' => 419,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 315,
            'cd_arnv' => 'TTOSM',
        ]);

        Flight::create([
            'nr_voo' => 419,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 420,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 422,
            'cd_arnv' => 'TTRIO',
        ]);

        Flight::create([
            'nr_voo' => 420,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 415,
            'cd_arnv' => 'TTOSM',
        ]);

        Flight::create([
            'nr_voo' => 421,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTRIZ',
        ]);

        Flight::create([
            'nr_voo' => 421,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 225,
            'cd_arnv' => 'TTKSR',
        ]);

        Flight::create([
            'nr_voo' => 422,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 422,
            'cd_arnv' => 'TTNIL',
        ]);

        Flight::create([
            'nr_voo' => 422,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTOSS',
        ]);

        Flight::create([
            'nr_voo' => 423,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTLIN',
        ]);

        Flight::create([
            'nr_voo' => 423,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTOSU',
        ]);

        Flight::create([
            'nr_voo' => 424,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTKSU',
        ]);

        Flight::create([
            'nr_voo' => 425,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTKSV',
        ]);

        Flight::create([
            'nr_voo' => 426,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 165,
            'cd_arnv' => 'TTKSB',
        ]);

        Flight::create([
            'nr_voo' => 426,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 132,
            'cd_arnv' => 'TTLIZ',
        ]);

        Flight::create([
            'nr_voo' => 427,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 332,
            'cd_arnv' => 'TTKIM',
        ]);

        Flight::create([
            'nr_voo' => 427,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTLSO',
        ]);

        Flight::create([
            'nr_voo' => 428,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 428,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 75,
            'cd_arnv' => 'TTOSI',
        ]);

        Flight::create([
            'nr_voo' => 428,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 342,
            'cd_arnv' => 'TTKIL',
        ]);

        Flight::create([
            'nr_voo' => 429,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 152,
            'cd_arnv' => 'TTKIJ',
        ]);

        Flight::create([
            'nr_voo' => 429,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 395,
            'cd_arnv' => 'TTRSO',
        ]);

        Flight::create([
            'nr_voo' => 430,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 295,
            'cd_arnv' => 'TTOSI',
        ]);

        Flight::create([
            'nr_voo' => 431,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTRSS',
        ]);

        Flight::create([
            'nr_voo' => 431,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTDIM',
        ]);

        Flight::create([
            'nr_voo' => 432,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTKSW',
        ]);

        Flight::create([
            'nr_voo' => 432,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 432,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 372,
            'cd_arnv' => 'TTRIC',
        ]);

        Flight::create([
            'nr_voo' => 432,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 433,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTKIU',
        ]);

        Flight::create([
            'nr_voo' => 433,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTKSM',
        ]);

        Flight::create([
            'nr_voo' => 434,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 372,
            'cd_arnv' => 'TTKIL',
        ]);

        Flight::create([
            'nr_voo' => 434,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTKST',
        ]);

        Flight::create([
            'nr_voo' => 435,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTKSU',
        ]);

        Flight::create([
            'nr_voo' => 435,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 382,
            'cd_arnv' => 'TTKIX',
        ]);

        Flight::create([
            'nr_voo' => 436,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 436,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTKSL',
        ]);

        Flight::create([
            'nr_voo' => 436,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 82,
            'cd_arnv' => 'TTDIO',
        ]);

        Flight::create([
            'nr_voo' => 437,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTKSB',
        ]);

        Flight::create([
            'nr_voo' => 437,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTOIL',
        ]);

        Flight::create([
            'nr_voo' => 438,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 438,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTISO',
        ]);

        Flight::create([
            'nr_voo' => 438,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 103,
            'cd_arnv' => 'TTDIT',
        ]);

        Flight::create([
            'nr_voo' => 439,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTISO',
        ]);

        Flight::create([
            'nr_voo' => 439,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 103,
            'cd_arnv' => 'TTNIZ',
        ]);

        Flight::create([
            'nr_voo' => 440,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 203,
            'cd_arnv' => 'TTLIN',
        ]);

        Flight::create([
            'nr_voo' => 440,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 166,
            'cd_arnv' => 'TTRSS',
        ]);

        Flight::create([
            'nr_voo' => 441,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 303,
            'cd_arnv' => 'TTRIL',
        ]);

        Flight::create([
            'nr_voo' => 441,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 166,
            'cd_arnv' => 'TTOSM',
        ]);

        Flight::create([
            'nr_voo' => 442,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTISO',
        ]);

        Flight::create([
            'nr_voo' => 442,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 303,
            'cd_arnv' => 'TTSIO',
        ]);

        Flight::create([
            'nr_voo' => 443,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 176,
            'cd_arnv' => 'TTDSO',
        ]);

        Flight::create([
            'nr_voo' => 443,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTVID',
        ]);

        Flight::create([
            'nr_voo' => 444,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 376,
            'cd_arnv' => 'TTLSO',
        ]);

        Flight::create([
            'nr_voo' => 444,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 223,
            'cd_arnv' => 'TTLIV',
        ]);

        Flight::create([
            'nr_voo' => 445,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTLSO',
        ]);

        Flight::create([
            'nr_voo' => 445,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 223,
            'cd_arnv' => 'TTKIL',
        ]);

        Flight::create([
            'nr_voo' => 446,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 446,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTUST',
        ]);

        Flight::create([
            'nr_voo' => 446,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 223,
            'cd_arnv' => 'TTKIV',
        ]);

        Flight::create([
            'nr_voo' => 447,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTDIS',
        ]);

        Flight::create([
            'nr_voo' => 447,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTSSI',
        ]);

        Flight::create([
            'nr_voo' => 448,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTLIC',
        ]);

        Flight::create([
            'nr_voo' => 448,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTOSU',
        ]);

        Flight::create([
            'nr_voo' => 449,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 417,
            'cd_arnv' => 'TTUST',
        ]);

        Flight::create([
            'nr_voo' => 449,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTRIM',
        ]);

        Flight::create([
            'nr_voo' => 450,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 227,
            'cd_arnv' => 'TTKSU',
        ]);

        Flight::create([
            'nr_voo' => 450,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 33,
            'cd_arnv' => 'TTUIS',
        ]);

        Flight::create([
            'nr_voo' => 451,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTDSO',
        ]);

        Flight::create([
            'nr_voo' => 451,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTKIJ',
        ]);

        Flight::create([
            'nr_voo' => 452,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 37,
            'cd_arnv' => 'TTKSS',
        ]);

        Flight::create([
            'nr_voo' => 453,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 137,
            'cd_arnv' => 'TTUSI',
        ]);

        Flight::create([
            'nr_voo' => 453,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTDIN',
        ]);

        Flight::create([
            'nr_voo' => 454,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 147,
            'cd_arnv' => 'TTKSM',
        ]);

        Flight::create([
            'nr_voo' => 454,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTRIQ',
        ]);

        Flight::create([
            'nr_voo' => 455,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 147,
            'cd_arnv' => 'TTRSS',
        ]);

        Flight::create([
            'nr_voo' => 455,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 455,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTRIM',
        ]);

        Flight::create([
            'nr_voo' => 456,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 247,
            'cd_arnv' => 'TTOSI',
        ]);

        Flight::create([
            'nr_voo' => 456,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTUIN',
        ]);

        Flight::create([
            'nr_voo' => 457,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 253,
            'cd_arnv' => 'TTFIN',
        ]);

        Flight::create([
            'nr_voo' => 457,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 367,
            'cd_arnv' => 'TTRSO',
        ]);

        Flight::create([
            'nr_voo' => 458,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 458,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 253,
            'cd_arnv' => 'TTLIO',
        ]);

        Flight::create([
            'nr_voo' => 458,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 167,
            'cd_arnv' => 'TTSSI',
        ]);

        Flight::create([
            'nr_voo' => 459,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTKSS',
        ]);

        Flight::create([
            'nr_voo' => 459,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 153,
            'cd_arnv' => 'TTRIL',
        ]);

        Flight::create([
            'nr_voo' => 460,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 253,
            'cd_arnv' => 'TTKIN',
        ]);

        Flight::create([
            'nr_voo' => 460,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 460,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 97,
            'cd_arnv' => 'TTOSU',
        ]);

        Flight::create([
            'nr_voo' => 461,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTKST',
        ]);

        Flight::create([
            'nr_voo' => 461,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 153,
            'cd_arnv' => 'TTSIS',
        ]);

        Flight::create([
            'nr_voo' => 462,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 462,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTRIN',
        ]);

        Flight::create([
            'nr_voo' => 462,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTRSO',
        ]);

        Flight::create([
            'nr_voo' => 463,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 414,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 463,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 73,
            'cd_arnv' => 'TTKIZ',
        ]);

        Flight::create([
            'nr_voo' => 463,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTISB',
        ]);

        Flight::create([
            'nr_voo' => 464,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTKSC',
        ]);

        Flight::create([
            'nr_voo' => 464,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTDIM',
        ]);

        Flight::create([
            'nr_voo' => 465,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 228,
            'cd_arnv' => 'TTKSW',
        ]);

        Flight::create([
            'nr_voo' => 465,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTDIS',
        ]);

        Flight::create([
            'nr_voo' => 466,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTRIC',
        ]);

        Flight::create([
            'nr_voo' => 466,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTKSB',
        ]);

        Flight::create([
            'nr_voo' => 467,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 293,
            'cd_arnv' => 'TTNIO',
        ]);

        Flight::create([
            'nr_voo' => 467,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 138,
            'cd_arnv' => 'TTKSC',
        ]);

        Flight::create([
            'nr_voo' => 468,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 138,
            'cd_arnv' => 'TTKSI',
        ]);

        Flight::create([
            'nr_voo' => 468,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTUIN',
        ]);

        Flight::create([
            'nr_voo' => 469,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 4,
            'cd_arnv' => 'TTRIQ',
        ]);

        Flight::create([
            'nr_voo' => 469,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 38,
            'cd_arnv' => 'TTOST',
        ]);

        Flight::create([
            'nr_voo' => 470,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTRIO',
        ]);

        Flight::create([
            'nr_voo' => 470,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 148,
            'cd_arnv' => 'TTLSO',
        ]);

        Flight::create([
            'nr_voo' => 471,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTDIT',
        ]);

        Flight::create([
            'nr_voo' => 471,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTIST',
        ]);

        Flight::create([
            'nr_voo' => 471,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 472,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTGIO',
        ]);

        Flight::create([
            'nr_voo' => 472,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTKSO',
        ]);

        Flight::create([
            'nr_voo' => 473,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTISO',
        ]);

        Flight::create([
            'nr_voo' => 473,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 104,
            'cd_arnv' => 'TTRIQ',
        ]);

        Flight::create([
            'nr_voo' => 474,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 404,
            'cd_arnv' => 'TTRIL',
        ]);

        Flight::create([
            'nr_voo' => 474,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 178,
            'cd_arnv' => 'TTNSO',
        ]);

        Flight::create([
            'nr_voo' => 475,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTKSI',
        ]);

        Flight::create([
            'nr_voo' => 476,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 414,
            'cd_arnv' => 'TTLIN',
        ]);

        Flight::create([
            'nr_voo' => 476,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 476,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 188,
            'cd_arnv' => 'TTKSV',
        ]);

        Flight::create([
            'nr_voo' => 477,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTTIS',
        ]);

        Flight::create([
            'nr_voo' => 477,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 298,
            'cd_arnv' => 'TTNSO',
        ]);

        Flight::create([
            'nr_voo' => 478,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTKIC',
        ]);

        Flight::create([
            'nr_voo' => 478,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTISB',
        ]);

        Flight::create([
            'nr_voo' => 479,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTKIR',
        ]);

        Flight::create([
            'nr_voo' => 479,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 298,
            'cd_arnv' => 'TTOSS',
        ]);

        Flight::create([
            'nr_voo' => 480,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 409,
            'cd_arnv' => 'TTKSI',
        ]);

        Flight::create([
            'nr_voo' => 480,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 134,
            'cd_arnv' => 'TTMIR',
        ]);

        Flight::create([
            'nr_voo' => 481,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 409,
            'cd_arnv' => 'TTOSI',
        ]);

        Flight::create([
            'nr_voo' => 482,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 44,
            'cd_arnv' => 'TTRIS',
        ]);

        Flight::create([
            'nr_voo' => 482,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTKSO',
        ]);

        Flight::create([
            'nr_voo' => 483,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 219,
            'cd_arnv' => 'TTKSL',
        ]);

        Flight::create([
            'nr_voo' => 483,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTMIR',
        ]);

        Flight::create([
            'nr_voo' => 484,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 219,
            'cd_arnv' => 'TTKSB',
        ]);

        Flight::create([
            'nr_voo' => 485,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 44,
            'cd_arnv' => 'TTKIZ',
        ]);

        Flight::create([
            'nr_voo' => 485,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTKSR',
        ]);

        Flight::create([
            'nr_voo' => 486,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTDIT',
        ]);

        Flight::create([
            'nr_voo' => 486,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTKSW',
        ]);

        Flight::create([
            'nr_voo' => 487,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 139,
            'cd_arnv' => 'TTKSC',
        ]);

        Flight::create([
            'nr_voo' => 487,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTRIZ',
        ]);

        Flight::create([
            'nr_voo' => 488,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTLIM',
        ]);

        Flight::create([
            'nr_voo' => 488,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 391,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 488,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTLSI',
        ]);

        Flight::create([
            'nr_voo' => 489,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTRIM',
        ]);

        Flight::create([
            'nr_voo' => 490,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTOSM',
        ]);

        Flight::create([
            'nr_voo' => 491,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTVID',
        ]);

        Flight::create([
            'nr_voo' => 491,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTISB',
        ]);

        Flight::create([
            'nr_voo' => 492,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTUST',
        ]);

        Flight::create([
            'nr_voo' => 492,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 364,
            'cd_arnv' => 'TTLIS',
        ]);

        Flight::create([
            'nr_voo' => 493,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTKSU',
        ]);

        Flight::create([
            'nr_voo' => 493,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 493,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTTIG',
        ]);

        Flight::create([
            'nr_voo' => 494,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 264,
            'cd_arnv' => 'TTKIQ',
        ]);

        Flight::create([
            'nr_voo' => 494,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTLSO',
        ]);

        Flight::create([
            'nr_voo' => 495,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTUST',
        ]);

        Flight::create([
            'nr_voo' => 496,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 74,
            'cd_arnv' => 'TTKIQ',
        ]);

        Flight::create([
            'nr_voo' => 496,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTKSW',
        ]);

        Flight::create([
            'nr_voo' => 497,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTDIR',
        ]);

        Flight::create([
            'nr_voo' => 497,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTOSM',
        ]);

        Flight::create([
            'nr_voo' => 498,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTFIN',
        ]);

        Flight::create([
            'nr_voo' => 498,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 269,
            'cd_arnv' => 'TTUSI',
        ]);

        Flight::create([
            'nr_voo' => 499,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 279,
            'cd_arnv' => 'TTOSU',
        ]);

        Flight::create([
            'nr_voo' => 499,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTTIS',
        ]);

        Flight::create([
            'nr_voo' => 500,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTUIS',
        ]);

        Flight::create([
            'nr_voo' => 500,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 189,
            'cd_arnv' => 'TTKSN',
        ]);

        Flight::create([
            'nr_voo' => 501,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 384,
            'cd_arnv' => 'TTKIO',
        ]);

        Flight::create([
            'nr_voo' => 501,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 389,
            'cd_arnv' => 'TTRSS',
        ]);

        Flight::create([
            'nr_voo' => 502,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 94,
            'cd_arnv' => 'TTNIL',
        ]);

        Flight::create([
            'nr_voo' => 502,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTOSU',
        ]);

        Flight::create([
            'nr_voo' => 503,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 200,
            'cd_arnv' => 'TTIRT',
        ]);

        Flight::create([
            'nr_voo' => 503,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 394,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 503,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 94,
            'cd_arnv' => 'TTMIC',
        ]);

        Flight::create([
            'nr_voo' => 504,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 504,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 294,
            'cd_arnv' => 'TTKIZ',
        ]);

        Flight::create([
            'nr_voo' => 505,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 505,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 294,
            'cd_arnv' => 'TTKIZ',
        ]);

        Flight::create([
            'nr_voo' => 505,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 310,
            'cd_arnv' => 'TTRRO',
        ]);

        Flight::create([
            'nr_voo' => 506,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 320,
            'cd_arnv' => 'TTORN',
        ]);

        Flight::create([
            'nr_voo' => 506,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 394,
            'cd_arnv' => 'TTKIL',
        ]);

        Flight::create([
            'nr_voo' => 507,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTSIS',
        ]);

        Flight::create([
            'nr_voo' => 507,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTIRO',
        ]);

        Flight::create([
            'nr_voo' => 508,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 105,
            'cd_arnv' => 'TTFIN',
        ]);

        Flight::create([
            'nr_voo' => 508,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTKRC',
        ]);

        Flight::create([
            'nr_voo' => 509,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTVIM',
        ]);

        Flight::create([
            'nr_voo' => 509,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 230,
            'cd_arnv' => 'TTNRI',
        ]);

        Flight::create([
            'nr_voo' => 509,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 510,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTIRT',
        ]);

        Flight::create([
            'nr_voo' => 510,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 315,
            'cd_arnv' => 'TTDIV',
        ]);

        Flight::create([
            'nr_voo' => 511,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTMIR',
        ]);

        Flight::create([
            'nr_voo' => 511,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 55,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 511,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTIRL',
        ]);

        Flight::create([
            'nr_voo' => 512,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 89,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 512,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 150,
            'cd_arnv' => 'TTORI',
        ]);

        Flight::create([
            'nr_voo' => 512,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTLIZ',
        ]);

        Flight::create([
            'nr_voo' => 513,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 415,
            'cd_arnv' => 'TTKIM',
        ]);

        Flight::create([
            'nr_voo' => 513,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTURI',
        ]);

        Flight::create([
            'nr_voo' => 514,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTRIN',
        ]);

        Flight::create([
            'nr_voo' => 514,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 170,
            'cd_arnv' => 'TTKRU',
        ]);

        Flight::create([
            'nr_voo' => 515,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 80,
            'cd_arnv' => 'TTRRU',
        ]);

        Flight::create([
            'nr_voo' => 515,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTLIZ',
        ]);

        Flight::create([
            'nr_voo' => 516,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 516,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTRIC',
        ]);

        Flight::create([
            'nr_voo' => 516,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 280,
            'cd_arnv' => 'TTRRU',
        ]);

        Flight::create([
            'nr_voo' => 517,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 201,
            'cd_arnv' => 'TTKRB',
        ]);

        Flight::create([
            'nr_voo' => 517,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTDIM',
        ]);

        Flight::create([
            'nr_voo' => 517,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 518,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 101,
            'cd_arnv' => 'TTIRL',
        ]);

        Flight::create([
            'nr_voo' => 518,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTSIL',
        ]);

        Flight::create([
            'nr_voo' => 519,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 201,
            'cd_arnv' => 'TTKRN',
        ]);

        Flight::create([
            'nr_voo' => 519,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTVIT',
        ]);

        Flight::create([
            'nr_voo' => 520,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 301,
            'cd_arnv' => 'TTKRR',
        ]);

        Flight::create([
            'nr_voo' => 520,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTLIV',
        ]);

        Flight::create([
            'nr_voo' => 521,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTKRN',
        ]);

        Flight::create([
            'nr_voo' => 521,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 521,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTKIC',
        ]);

        Flight::create([
            'nr_voo' => 522,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 311,
            'cd_arnv' => 'TTKRT',
        ]);

        Flight::create([
            'nr_voo' => 522,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTKIM',
        ]);

        Flight::create([
            'nr_voo' => 523,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 421,
            'cd_arnv' => 'TTDRO',
        ]);

        Flight::create([
            'nr_voo' => 523,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTDIN',
        ]);

        Flight::create([
            'nr_voo' => 524,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 145,
            'cd_arnv' => 'TTRIG',
        ]);

        Flight::create([
            'nr_voo' => 524,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTRRO',
        ]);

        Flight::create([
            'nr_voo' => 525,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 155,
            'cd_arnv' => 'TTRIN',
        ]);

        Flight::create([
            'nr_voo' => 525,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 525,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTURV',
        ]);

        Flight::create([
            'nr_voo' => 526,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTNIL',
        ]);

        Flight::create([
            'nr_voo' => 526,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 331,
            'cd_arnv' => 'TTORD',
        ]);

        Flight::create([
            'nr_voo' => 527,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 255,
            'cd_arnv' => 'TTOIS',
        ]);

        Flight::create([
            'nr_voo' => 527,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 131,
            'cd_arnv' => 'TTTRI',
        ]);

        Flight::create([
            'nr_voo' => 528,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 398,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 528,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 255,
            'cd_arnv' => 'TTOIS',
        ]);

        Flight::create([
            'nr_voo' => 528,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTKRQ',
        ]);

        Flight::create([
            'nr_voo' => 529,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 155,
            'cd_arnv' => 'TTKIR',
        ]);

        Flight::create([
            'nr_voo' => 529,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 41,
            'cd_arnv' => 'TTDRO',
        ]);

        Flight::create([
            'nr_voo' => 529,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 145,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 529,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 530,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 41,
            'cd_arnv' => 'TTKRL',
        ]);

        Flight::create([
            'nr_voo' => 530,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTGIN',
        ]);

        Flight::create([
            'nr_voo' => 531,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 65,
            'cd_arnv' => 'TTLIM',
        ]);

        Flight::create([
            'nr_voo' => 531,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 341,
            'cd_arnv' => 'TTKRO',
        ]);

        Flight::create([
            'nr_voo' => 532,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 65,
            'cd_arnv' => 'TTRIB',
        ]);

        Flight::create([
            'nr_voo' => 532,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 261,
            'cd_arnv' => 'TTDRO',
        ]);

        Flight::create([
            'nr_voo' => 533,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTOIL',
        ]);

        Flight::create([
            'nr_voo' => 533,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 533,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTORT',
        ]);

        Flight::create([
            'nr_voo' => 534,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 65,
            'cd_arnv' => 'TTOIS',
        ]);

        Flight::create([
            'nr_voo' => 534,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTKRL',
        ]);

        Flight::create([
            'nr_voo' => 535,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 65,
            'cd_arnv' => 'TTTIM',
        ]);

        Flight::create([
            'nr_voo' => 535,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 261,
            'cd_arnv' => 'TTKRR',
        ]);

        Flight::create([
            'nr_voo' => 536,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTNRI',
        ]);

        Flight::create([
            'nr_voo' => 536,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTFIN',
        ]);

        Flight::create([
            'nr_voo' => 537,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 75,
            'cd_arnv' => 'TTVIM',
        ]);

        Flight::create([
            'nr_voo' => 537,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTKRS',
        ]);

        Flight::create([
            'nr_voo' => 538,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTNIL',
        ]);

        Flight::create([
            'nr_voo' => 538,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTKRG',
        ]);

        Flight::create([
            'nr_voo' => 539,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTLIZ',
        ]);

        Flight::create([
            'nr_voo' => 539,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 322,
            'cd_arnv' => 'TTORD',
        ]);

        Flight::create([
            'nr_voo' => 540,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTKIG',
        ]);

        Flight::create([
            'nr_voo' => 540,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 322,
            'cd_arnv' => 'TTURI',
        ]);

        Flight::create([
            'nr_voo' => 541,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTKIG',
        ]);

        Flight::create([
            'nr_voo' => 541,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 122,
            'cd_arnv' => 'TTKRO',
        ]);

        Flight::create([
            'nr_voo' => 542,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 85,
            'cd_arnv' => 'TTRIO',
        ]);

        Flight::create([
            'nr_voo' => 542,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 32,
            'cd_arnv' => 'TTKRS',
        ]);

        Flight::create([
            'nr_voo' => 543,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 385,
            'cd_arnv' => 'TTDIV',
        ]);

        Flight::create([
            'nr_voo' => 543,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 242,
            'cd_arnv' => 'TTORN',
        ]);

        Flight::create([
            'nr_voo' => 544,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 42,
            'cd_arnv' => 'TTKRO',
        ]);

        Flight::create([
            'nr_voo' => 545,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 42,
            'cd_arnv' => 'TTKRL',
        ]);

        Flight::create([
            'nr_voo' => 545,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTRIL',
        ]);

        Flight::create([
            'nr_voo' => 546,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 85,
            'cd_arnv' => 'TTOIL',
        ]);

        Flight::create([
            'nr_voo' => 546,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 152,
            'cd_arnv' => 'TTORI',
        ]);

        Flight::create([
            'nr_voo' => 547,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 52,
            'cd_arnv' => 'TTKRN',
        ]);

        Flight::create([
            'nr_voo' => 547,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 547,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 385,
            'cd_arnv' => 'TTUIZ',
        ]);

        Flight::create([
            'nr_voo' => 548,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 548,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 272,
            'cd_arnv' => 'TTORN',
        ]);

        Flight::create([
            'nr_voo' => 548,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 385,
            'cd_arnv' => 'TTUIM',
        ]);

        Flight::create([
            'nr_voo' => 549,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTIRT',
        ]);

        Flight::create([
            'nr_voo' => 549,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 549,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 85,
            'cd_arnv' => 'TTKIO',
        ]);

        Flight::create([
            'nr_voo' => 550,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTLIM',
        ]);

        Flight::create([
            'nr_voo' => 550,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTORG',
        ]);

        Flight::create([
            'nr_voo' => 551,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 383,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 551,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTSIM',
        ]);

        Flight::create([
            'nr_voo' => 551,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 382,
            'cd_arnv' => 'TTORI',
        ]);

        Flight::create([
            'nr_voo' => 552,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTRIB',
        ]);

        Flight::create([
            'nr_voo' => 552,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 157,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 552,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 382,
            'cd_arnv' => 'TTORG',
        ]);

        Flight::create([
            'nr_voo' => 553,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTKIT',
        ]);

        Flight::create([
            'nr_voo' => 553,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 553,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 282,
            'cd_arnv' => 'TTKRM',
        ]);

        Flight::create([
            'nr_voo' => 553,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 554,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTKIQ',
        ]);

        Flight::create([
            'nr_voo' => 554,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTORD',
        ]);

        Flight::create([
            'nr_voo' => 555,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKIY',
        ]);

        Flight::create([
            'nr_voo' => 555,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTKRL',
        ]);

        Flight::create([
            'nr_voo' => 556,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 406,
            'cd_arnv' => 'TTKID',
        ]);

        Flight::create([
            'nr_voo' => 556,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 3,
            'cd_arnv' => 'TTORD',
        ]);

        Flight::create([
            'nr_voo' => 557,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 116,
            'cd_arnv' => 'TTGIO',
        ]);

        Flight::create([
            'nr_voo' => 557,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 3,
            'cd_arnv' => 'TTORG',
        ]);

        Flight::create([
            'nr_voo' => 558,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTKRN',
        ]);

        Flight::create([
            'nr_voo' => 558,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 416,
            'cd_arnv' => 'TTRIC',
        ]);

        Flight::create([
            'nr_voo' => 559,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTKRQ',
        ]);

        Flight::create([
            'nr_voo' => 559,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 416,
            'cd_arnv' => 'TTUIN',
        ]);

        Flight::create([
            'nr_voo' => 560,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTDIS',
        ]);

        Flight::create([
            'nr_voo' => 560,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTURI',
        ]);

        Flight::create([
            'nr_voo' => 561,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTTIV',
        ]);

        Flight::create([
            'nr_voo' => 561,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKRG',
        ]);

        Flight::create([
            'nr_voo' => 561,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 368,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 562,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKRT',
        ]);

        Flight::create([
            'nr_voo' => 562,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTKIG',
        ]);

        Flight::create([
            'nr_voo' => 563,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTLIV',
        ]);

        Flight::create([
            'nr_voo' => 563,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTKRC',
        ]);

        Flight::create([
            'nr_voo' => 564,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTKRT',
        ]);

        Flight::create([
            'nr_voo' => 564,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 564,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTKIV',
        ]);

        Flight::create([
            'nr_voo' => 565,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTKIS',
        ]);

        Flight::create([
            'nr_voo' => 565,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTIRO',
        ]);

        Flight::create([
            'nr_voo' => 566,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 566,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 73,
            'cd_arnv' => 'TTKRV',
        ]);

        Flight::create([
            'nr_voo' => 566,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTKID',
        ]);

        Flight::create([
            'nr_voo' => 567,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 73,
            'cd_arnv' => 'TTKRV',
        ]);

        Flight::create([
            'nr_voo' => 567,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 346,
            'cd_arnv' => 'TTRIO',
        ]);

        Flight::create([
            'nr_voo' => 568,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 383,
            'cd_arnv' => 'TTDRI',
        ]);

        Flight::create([
            'nr_voo' => 568,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 346,
            'cd_arnv' => 'TTDIT',
        ]);

        Flight::create([
            'nr_voo' => 569,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTTIN',
        ]);

        Flight::create([
            'nr_voo' => 569,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTKRG',
        ]);

        Flight::create([
            'nr_voo' => 570,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 193,
            'cd_arnv' => 'TTRRO',
        ]);

        Flight::create([
            'nr_voo' => 570,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 570,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTLIS',
        ]);

        Flight::create([
            'nr_voo' => 571,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTDIR',
        ]);

        Flight::create([
            'nr_voo' => 571,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTORG',
        ]);

        Flight::create([
            'nr_voo' => 572,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTKRD',
        ]);

        Flight::create([
            'nr_voo' => 572,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 572,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 156,
            'cd_arnv' => 'TTVIM',
        ]);

        Flight::create([
            'nr_voo' => 573,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 356,
            'cd_arnv' => 'TTKIR',
        ]);

        Flight::create([
            'nr_voo' => 573,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTIRL',
        ]);

        Flight::create([
            'nr_voo' => 574,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 356,
            'cd_arnv' => 'TTDIR',
        ]);

        Flight::create([
            'nr_voo' => 574,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTIRO',
        ]);

        Flight::create([
            'nr_voo' => 575,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTIRC',
        ]);

        Flight::create([
            'nr_voo' => 575,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 156,
            'cd_arnv' => 'TTSIM',
        ]);

        Flight::create([
            'nr_voo' => 576,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTIRC',
        ]);

        Flight::create([
            'nr_voo' => 576,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTVIM',
        ]);

        Flight::create([
            'nr_voo' => 577,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTKRM',
        ]);

        Flight::create([
            'nr_voo' => 577,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTLIM',
        ]);

        Flight::create([
            'nr_voo' => 578,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTRIM',
        ]);

        Flight::create([
            'nr_voo' => 578,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTRRO',
        ]);

        Flight::create([
            'nr_voo' => 579,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 579,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 176,
            'cd_arnv' => 'TTTIN',
        ]);

        Flight::create([
            'nr_voo' => 579,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 579,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTORI',
        ]);

        Flight::create([
            'nr_voo' => 580,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 580,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 176,
            'cd_arnv' => 'TTTIS',
        ]);

        Flight::create([
            'nr_voo' => 580,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTURV',
        ]);

        Flight::create([
            'nr_voo' => 581,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 44,
            'cd_arnv' => 'TTNRI',
        ]);

        Flight::create([
            'nr_voo' => 581,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 581,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 276,
            'cd_arnv' => 'TTUIM',
        ]);

        Flight::create([
            'nr_voo' => 582,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTIRC',
        ]);

        Flight::create([
            'nr_voo' => 582,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 276,
            'cd_arnv' => 'TTKIX',
        ]);

        Flight::create([
            'nr_voo' => 583,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTIRT',
        ]);

        Flight::create([
            'nr_voo' => 583,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 583,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 386,
            'cd_arnv' => 'TTDIV',
        ]);

        Flight::create([
            'nr_voo' => 584,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 584,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 584,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTIRO',
        ]);

        Flight::create([
            'nr_voo' => 584,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 386,
            'cd_arnv' => 'TTLIV',
        ]);

        Flight::create([
            'nr_voo' => 585,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTRIB',
        ]);

        Flight::create([
            'nr_voo' => 585,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 384,
            'cd_arnv' => 'TTKRR',
        ]);

        Flight::create([
            'nr_voo' => 586,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 586,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 405,
            'cd_arnv' => 'TTDRO',
        ]);

        Flight::create([
            'nr_voo' => 586,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 86,
            'cd_arnv' => 'TTSIS',
        ]);

        Flight::create([
            'nr_voo' => 586,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 587,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTKRB',
        ]);

        Flight::create([
            'nr_voo' => 587,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTUIS',
        ]);

        Flight::create([
            'nr_voo' => 587,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 588,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTKIV',
        ]);

        Flight::create([
            'nr_voo' => 588,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 305,
            'cd_arnv' => 'TTIRL',
        ]);

        Flight::create([
            'nr_voo' => 589,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 589,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 115,
            'cd_arnv' => 'TTORT',
        ]);

        Flight::create([
            'nr_voo' => 589,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 396,
            'cd_arnv' => 'TTKIS',
        ]);

        Flight::create([
            'nr_voo' => 590,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKIN',
        ]);

        Flight::create([
            'nr_voo' => 590,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTORI',
        ]);

        Flight::create([
            'nr_voo' => 591,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTMIL',
        ]);

        Flight::create([
            'nr_voo' => 591,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTORN',
        ]);

        Flight::create([
            'nr_voo' => 592,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTLIN',
        ]);

        Flight::create([
            'nr_voo' => 593,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 345,
            'cd_arnv' => 'TTKRB',
        ]);

        Flight::create([
            'nr_voo' => 593,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 593,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 407,
            'cd_arnv' => 'TTUIZ',
        ]);

        Flight::create([
            'nr_voo' => 594,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTKRB',
        ]);

        Flight::create([
            'nr_voo' => 594,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 594,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 407,
            'cd_arnv' => 'TTKIT',
        ]);

        Flight::create([
            'nr_voo' => 595,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTKRD',
        ]);

        Flight::create([
            'nr_voo' => 595,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 595,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 107,
            'cd_arnv' => 'TTKIC',
        ]);

        Flight::create([
            'nr_voo' => 596,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTNIZ',
        ]);

        Flight::create([
            'nr_voo' => 596,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 597,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 17,
            'cd_arnv' => 'TTTIV',
        ]);

        Flight::create([
            'nr_voo' => 597,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTKRS',
        ]);

        Flight::create([
            'nr_voo' => 598,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 17,
            'cd_arnv' => 'TTOIL',
        ]);

        Flight::create([
            'nr_voo' => 598,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 55,
            'cd_arnv' => 'TTKRU',
        ]);

        Flight::create([
            'nr_voo' => 599,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTKRD',
        ]);

        Flight::create([
            'nr_voo' => 599,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 27,
            'cd_arnv' => 'TTSIL',
        ]);

        Flight::create([
            'nr_voo' => 599,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 600,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 137,
            'cd_arnv' => 'TTGIO',
        ]);

        Flight::create([
            'nr_voo' => 600,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 165,
            'cd_arnv' => 'TTKRR',
        ]);

        Flight::create([
            'nr_voo' => 601,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTLIC',
        ]);

        Flight::create([
            'nr_voo' => 601,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 185,
            'cd_arnv' => 'TTIRO',
        ]);

        Flight::create([
            'nr_voo' => 602,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 602,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTKRU',
        ]);

        Flight::create([
            'nr_voo' => 603,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTKRU',
        ]);

        Flight::create([
            'nr_voo' => 603,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 137,
            'cd_arnv' => 'TTLIS',
        ]);

        Flight::create([
            'nr_voo' => 604,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTRIG',
        ]);

        Flight::create([
            'nr_voo' => 605,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 137,
            'cd_arnv' => 'TTKIB',
        ]);

        Flight::create([
            'nr_voo' => 605,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTORG',
        ]);

        Flight::create([
            'nr_voo' => 606,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTSIO',
        ]);

        Flight::create([
            'nr_voo' => 606,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 607,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 392,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 607,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 47,
            'cd_arnv' => 'TTNIO',
        ]);

        Flight::create([
            'nr_voo' => 607,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTKRC',
        ]);

        Flight::create([
            'nr_voo' => 608,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 147,
            'cd_arnv' => 'TTRIG',
        ]);

        Flight::create([
            'nr_voo' => 608,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 116,
            'cd_arnv' => 'TTURV',
        ]);

        Flight::create([
            'nr_voo' => 609,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 47,
            'cd_arnv' => 'TTUIS',
        ]);

        Flight::create([
            'nr_voo' => 609,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTDRO',
        ]);

        Flight::create([
            'nr_voo' => 610,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTIRT',
        ]);

        Flight::create([
            'nr_voo' => 610,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 357,
            'cd_arnv' => 'TTGIN',
        ]);

        Flight::create([
            'nr_voo' => 611,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKRI',
        ]);

        Flight::create([
            'nr_voo' => 611,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 357,
            'cd_arnv' => 'TTOIS',
        ]);

        Flight::create([
            'nr_voo' => 612,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTORN',
        ]);

        Flight::create([
            'nr_voo' => 612,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKIU',
        ]);

        Flight::create([
            'nr_voo' => 613,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 367,
            'cd_arnv' => 'TTLIZ',
        ]);

        Flight::create([
            'nr_voo' => 613,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTKRI',
        ]);

        Flight::create([
            'nr_voo' => 614,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 17,
            'cd_arnv' => 'TTKRB',
        ]);

        Flight::create([
            'nr_voo' => 614,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 367,
            'cd_arnv' => 'TTRIC',
        ]);

        Flight::create([
            'nr_voo' => 615,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTIRC',
        ]);

        Flight::create([
            'nr_voo' => 615,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 167,
            'cd_arnv' => 'TTRIG',
        ]);

        Flight::create([
            'nr_voo' => 616,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 17,
            'cd_arnv' => 'TTKRO',
        ]);

        Flight::create([
            'nr_voo' => 616,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTTIM',
        ]);

        Flight::create([
            'nr_voo' => 617,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTDIM',
        ]);

        Flight::create([
            'nr_voo' => 617,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTKRG',
        ]);

        Flight::create([
            'nr_voo' => 618,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 27,
            'cd_arnv' => 'TTNRI',
        ]);

        Flight::create([
            'nr_voo' => 618,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 167,
            'cd_arnv' => 'TTSIM',
        ]);

        Flight::create([
            'nr_voo' => 619,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 619,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 27,
            'cd_arnv' => 'TTNRI',
        ]);

        Flight::create([
            'nr_voo' => 619,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTKIB',
        ]);

        Flight::create([
            'nr_voo' => 620,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTKRN',
        ]);

        Flight::create([
            'nr_voo' => 620,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 620,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTKID',
        ]);

        Flight::create([
            'nr_voo' => 621,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTKIT',
        ]);

        Flight::create([
            'nr_voo' => 621,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 37,
            'cd_arnv' => 'TTURI',
        ]);

        Flight::create([
            'nr_voo' => 622,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTKIM',
        ]);

        Flight::create([
            'nr_voo' => 623,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 247,
            'cd_arnv' => 'TTKRQ',
        ]);

        Flight::create([
            'nr_voo' => 623,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTTIV',
        ]);

        Flight::create([
            'nr_voo' => 624,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 47,
            'cd_arnv' => 'TTKRD',
        ]);

        Flight::create([
            'nr_voo' => 624,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTKIT',
        ]);

        Flight::create([
            'nr_voo' => 625,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKRI',
        ]);

        Flight::create([
            'nr_voo' => 625,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 97,
            'cd_arnv' => 'TTSIL',
        ]);

        Flight::create([
            'nr_voo' => 626,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 626,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKRI',
        ]);

        Flight::create([
            'nr_voo' => 626,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 308,
            'cd_arnv' => 'TTTIG',
        ]);

        Flight::create([
            'nr_voo' => 627,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 627,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 367,
            'cd_arnv' => 'TTIRL',
        ]);

        Flight::create([
            'nr_voo' => 628,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTKIU',
        ]);

        Flight::create([
            'nr_voo' => 628,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTKRT',
        ]);

        Flight::create([
            'nr_voo' => 629,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 418,
            'cd_arnv' => 'TTRIN',
        ]);

        Flight::create([
            'nr_voo' => 629,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 630,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTKRO',
        ]);

        Flight::create([
            'nr_voo' => 630,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 18,
            'cd_arnv' => 'TTRIS',
        ]);

        Flight::create([
            'nr_voo' => 631,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTNIZ',
        ]);

        Flight::create([
            'nr_voo' => 631,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTURV',
        ]);

        Flight::create([
            'nr_voo' => 632,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 87,
            'cd_arnv' => 'TTKRT',
        ]);

        Flight::create([
            'nr_voo' => 632,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 18,
            'cd_arnv' => 'TTSIL',
        ]);

        Flight::create([
            'nr_voo' => 633,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 97,
            'cd_arnv' => 'TTDRI',
        ]);

        Flight::create([
            'nr_voo' => 633,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 128,
            'cd_arnv' => 'TTVID',
        ]);

        Flight::create([
            'nr_voo' => 634,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 308,
            'cd_arnv' => 'TTDRI',
        ]);

        Flight::create([
            'nr_voo' => 634,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTTIN',
        ]);

        Flight::create([
            'nr_voo' => 635,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTTRI',
        ]);

        Flight::create([
            'nr_voo' => 635,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 228,
            'cd_arnv' => 'TTSIS',
        ]);

        Flight::create([
            'nr_voo' => 636,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 138,
            'cd_arnv' => 'TTDIT',
        ]);

        Flight::create([
            'nr_voo' => 636,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTRRO',
        ]);

        Flight::create([
            'nr_voo' => 637,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 228,
            'cd_arnv' => 'TTKRQ',
        ]);

        Flight::create([
            'nr_voo' => 637,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 138,
            'cd_arnv' => 'TTRIN',
        ]);

        Flight::create([
            'nr_voo' => 638,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 238,
            'cd_arnv' => 'TTKIZ',
        ]);

        Flight::create([
            'nr_voo' => 638,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 128,
            'cd_arnv' => 'TTKRQ',
        ]);

        Flight::create([
            'nr_voo' => 639,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 338,
            'cd_arnv' => 'TTPIN',
        ]);

        Flight::create([
            'nr_voo' => 639,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 38,
            'cd_arnv' => 'TTRRU',
        ]);

        Flight::create([
            'nr_voo' => 640,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTKIY',
        ]);

        Flight::create([
            'nr_voo' => 640,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 148,
            'cd_arnv' => 'TTKRC',
        ]);

        Flight::create([
            'nr_voo' => 641,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 641,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 148,
            'cd_arnv' => 'TTKIB',
        ]);

        Flight::create([
            'nr_voo' => 641,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 168,
            'cd_arnv' => 'TTTRI',
        ]);

        Flight::create([
            'nr_voo' => 642,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTKIS',
        ]);

        Flight::create([
            'nr_voo' => 642,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 178,
            'cd_arnv' => 'TTTRI',
        ]);

        Flight::create([
            'nr_voo' => 643,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTDRI',
        ]);

        Flight::create([
            'nr_voo' => 643,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTDIO',
        ]);

        Flight::create([
            'nr_voo' => 644,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTDIO',
        ]);

        Flight::create([
            'nr_voo' => 644,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTORT',
        ]);

        Flight::create([
            'nr_voo' => 645,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTDIV',
        ]);

        Flight::create([
            'nr_voo' => 645,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 109,
            'cd_arnv' => 'TTKRV',
        ]);

        Flight::create([
            'nr_voo' => 645,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 345,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 646,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 358,
            'cd_arnv' => 'TTSIL',
        ]);

        Flight::create([
            'nr_voo' => 646,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 646,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 419,
            'cd_arnv' => 'TTKRV',
        ]);

        Flight::create([
            'nr_voo' => 647,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 358,
            'cd_arnv' => 'TTSIO',
        ]);

        Flight::create([
            'nr_voo' => 647,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTKRV',
        ]);

        Flight::create([
            'nr_voo' => 648,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTTIG',
        ]);

        Flight::create([
            'nr_voo' => 648,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTKRG',
        ]);

        Flight::create([
            'nr_voo' => 649,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 168,
            'cd_arnv' => 'TTUIZ',
        ]);

        Flight::create([
            'nr_voo' => 649,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 29,
            'cd_arnv' => 'TTKRR',
        ]);

        Flight::create([
            'nr_voo' => 650,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 86,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 650,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 168,
            'cd_arnv' => 'TTKIR',
        ]);

        Flight::create([
            'nr_voo' => 650,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTKRC',
        ]);

        Flight::create([
            'nr_voo' => 651,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTORD',
        ]);

        Flight::create([
            'nr_voo' => 651,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 368,
            'cd_arnv' => 'TTKIL',
        ]);

        Flight::create([
            'nr_voo' => 652,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTRRU',
        ]);

        Flight::create([
            'nr_voo' => 652,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 278,
            'cd_arnv' => 'TTUIM',
        ]);

        Flight::create([
            'nr_voo' => 653,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 653,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTKRS',
        ]);

        Flight::create([
            'nr_voo' => 653,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 378,
            'cd_arnv' => 'TTUIZ',
        ]);

        Flight::create([
            'nr_voo' => 654,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 654,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 654,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKIC',
        ]);

        Flight::create([
            'nr_voo' => 654,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTIRC',
        ]);

        Flight::create([
            'nr_voo' => 655,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 278,
            'cd_arnv' => 'TTKIV',
        ]);

        Flight::create([
            'nr_voo' => 655,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 279,
            'cd_arnv' => 'TTKRL',
        ]);

        Flight::create([
            'nr_voo' => 656,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 378,
            'cd_arnv' => 'TTKIX',
        ]);

        Flight::create([
            'nr_voo' => 656,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTKRM',
        ]);

        Flight::create([
            'nr_voo' => 657,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 388,
            'cd_arnv' => 'TTGIN',
        ]);

        Flight::create([
            'nr_voo' => 658,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 658,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTMIC',
        ]);

        Flight::create([
            'nr_voo' => 658,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 99,
            'cd_arnv' => 'TTKRI',
        ]);

        Flight::create([
            'nr_voo' => 659,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTKRM',
        ]);

        Flight::create([
            'nr_voo' => 659,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 98,
            'cd_arnv' => 'TTRIS',
        ]);

        Flight::create([
            'nr_voo' => 660,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 410,
            'cd_arnv' => 'TTLQU',
        ]);

        Flight::create([
            'nr_voo' => 660,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTLIN',
        ]);

        Flight::create([
            'nr_voo' => 661,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 160,
            'cd_arnv' => 'TTLQU',
        ]);

        Flight::create([
            'nr_voo' => 661,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 98,
            'cd_arnv' => 'TTMIL',
        ]);

        Flight::create([
            'nr_voo' => 662,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 98,
            'cd_arnv' => 'TTRIM',
        ]);

        Flight::create([
            'nr_voo' => 662,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 91,
            'cd_arnv' => 'TTKQU',
        ]);

        Flight::create([
            'nr_voo' => 663,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 109,
            'cd_arnv' => 'TTRIS',
        ]);

        Flight::create([
            'nr_voo' => 663,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 663,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 152,
            'cd_arnv' => 'TTKQU',
        ]);

        Flight::create([
            'nr_voo' => 664,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 109,
            'cd_arnv' => 'TTGIN',
        ]);

        Flight::create([
            'nr_voo' => 664,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTUQU',
        ]);

        Flight::create([
            'nr_voo' => 665,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 272,
            'cd_arnv' => 'TTUQU',
        ]);

        Flight::create([
            'nr_voo' => 665,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 209,
            'cd_arnv' => 'TTGIN',
        ]);

        Flight::create([
            'nr_voo' => 666,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 409,
            'cd_arnv' => 'TTSIO',
        ]);

        Flight::create([
            'nr_voo' => 666,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTOQU',
        ]);

        Flight::create([
            'nr_voo' => 667,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 667,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 19,
            'cd_arnv' => 'TTKIX',
        ]);

        Flight::create([
            'nr_voo' => 667,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 103,
            'cd_arnv' => 'TTIQU',
        ]);

        Flight::create([
            'nr_voo' => 668,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTLIV',
        ]);

        Flight::create([
            'nr_voo' => 668,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTOQU',
        ]);

        Flight::create([
            'nr_voo' => 669,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 29,
            'cd_arnv' => 'TTMIC',
        ]);

        Flight::create([
            'nr_voo' => 669,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTKQU',
        ]);

        Flight::create([
            'nr_voo' => 670,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTIQU',
        ]);

        Flight::create([
            'nr_voo' => 670,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 139,
            'cd_arnv' => 'TTTIV',
        ]);

        Flight::create([
            'nr_voo' => 671,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 671,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 39,
            'cd_arnv' => 'TTKIC',
        ]);

        Flight::create([
            'nr_voo' => 671,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTKQU',
        ]);

        Flight::create([
            'nr_voo' => 672,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 4,
            'cd_arnv' => 'TTIQU',
        ]);

        Flight::create([
            'nr_voo' => 672,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTKIG',
        ]);

        Flight::create([
            'nr_voo' => 673,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTRIQ',
        ]);

        Flight::create([
            'nr_voo' => 673,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTRQU',
        ]);

        Flight::create([
            'nr_voo' => 674,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTLQU',
        ]);

        Flight::create([
            'nr_voo' => 674,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTGIO',
        ]);

        Flight::create([
            'nr_voo' => 675,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTRIO',
        ]);

        Flight::create([
            'nr_voo' => 675,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 394,
            'cd_arnv' => 'TTOQU',
        ]);

        Flight::create([
            'nr_voo' => 676,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTKIO',
        ]);

        Flight::create([
            'nr_voo' => 676,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTRQU',
        ]);

        Flight::create([
            'nr_voo' => 677,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 356,
            'cd_arnv' => 'TTIQU',
        ]);

        Flight::create([
            'nr_voo' => 677,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 677,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTKIB',
        ]);

        Flight::create([
            'nr_voo' => 678,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTKIB',
        ]);

        Flight::create([
            'nr_voo' => 678,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 166,
            'cd_arnv' => 'TTUQU',
        ]);

        Flight::create([
            'nr_voo' => 679,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTPIN',
        ]);

        Flight::create([
            'nr_voo' => 679,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 376,
            'cd_arnv' => 'TTUQU',
        ]);

        Flight::create([
            'nr_voo' => 680,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 680,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 189,
            'cd_arnv' => 'TTNIZ',
        ]);

        Flight::create([
            'nr_voo' => 680,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 107,
            'cd_arnv' => 'TTLQU',
        ]);

        Flight::create([
            'nr_voo' => 681,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 681,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 137,
            'cd_arnv' => 'TTOQU',
        ]);

        Flight::create([
            'nr_voo' => 681,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKIY',
        ]);

        Flight::create([
            'nr_voo' => 682,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 299,
            'cd_arnv' => 'TTFIN',
        ]);

        Flight::create([
            'nr_voo' => 682,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 347,
            'cd_arnv' => 'TTKQU',
        ]);

        Flight::create([
            'nr_voo' => 683,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 238,
            'cd_arnv' => 'TTRQU',
        ]);

        Flight::create([
            'nr_voo' => 683,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 99,
            'cd_arnv' => 'TTLIS',
        ]);

        Flight::create([
            'nr_voo' => 684,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 109,
            'cd_arnv' => 'TTRQU',
        ]);

        Flight::create([
            'nr_voo' => 684,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 299,
            'cd_arnv' => 'TTMIR',
        ]);

        Flight::create([
            'nr_voo' => 685,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTRQU',
        ]);

        Flight::create([
            'nr_voo' => 685,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 299,
            'cd_arnv' => 'TTLIO',
        ]);

        Flight::create([
            'nr_voo' => 686,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 99,
            'cd_arnv' => 'TTKIT',
        ]);

        Flight::create([
            'nr_voo' => 686,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTLQU',
        ]);

        Flight::create([
            'nr_voo' => 687,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 687,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTOQU',
        ]);

        Flight::create([
            'nr_voo' => 687,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTKIN',
        ]);

        Flight::create([
            'nr_voo' => 688,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 144,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 688,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTIQU',
        ]);

        Flight::create([
            'nr_voo' => 688,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 299,
            'cd_arnv' => 'TTDIO',
        ]);

        Flight::create([
            'nr_voo' => 689,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 81,
            'cd_arnv' => 'TTTHO',
        ]);

        Flight::create([
            'nr_voo' => 689,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTMPO',
        ]);

        Flight::create([
            'nr_voo' => 690,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 222,
            'cd_arnv' => 'TTKHO',
        ]);

        Flight::create([
            'nr_voo' => 690,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 160,
            'cd_arnv' => 'TTLPR',
        ]);

        Flight::create([
            'nr_voo' => 691,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 42,
            'cd_arnv' => 'TTLHO',
        ]);

        Flight::create([
            'nr_voo' => 691,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTMPO',
        ]);

        Flight::create([
            'nr_voo' => 692,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 692,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 392,
            'cd_arnv' => 'TTTHO',
        ]);

        Flight::create([
            'nr_voo' => 692,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 361,
            'cd_arnv' => 'TTKPI',
        ]);

        Flight::create([
            'nr_voo' => 693,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTTHO',
        ]);

        Flight::create([
            'nr_voo' => 693,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 391,
            'cd_arnv' => 'TTKPO',
        ]);

        Flight::create([
            'nr_voo' => 693,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 694,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTTHU',
        ]);

        Flight::create([
            'nr_voo' => 694,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTKPT',
        ]);

        Flight::create([
            'nr_voo' => 695,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 384,
            'cd_arnv' => 'TTTHO',
        ]);

        Flight::create([
            'nr_voo' => 695,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 242,
            'cd_arnv' => 'TTKPT',
        ]);

        Flight::create([
            'nr_voo' => 696,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 405,
            'cd_arnv' => 'TTLHO',
        ]);

        Flight::create([
            'nr_voo' => 696,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTKPT',
        ]);

        Flight::create([
            'nr_voo' => 697,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 697,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 75,
            'cd_arnv' => 'TTLHO',
        ]);

        Flight::create([
            'nr_voo' => 697,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTMPO',
        ]);

        Flight::create([
            'nr_voo' => 698,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 698,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 85,
            'cd_arnv' => 'TTNHO',
        ]);

        Flight::create([
            'nr_voo' => 698,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 193,
            'cd_arnv' => 'TTKPI',
        ]);

        Flight::create([
            'nr_voo' => 699,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 193,
            'cd_arnv' => 'TTKPI',
        ]);

        Flight::create([
            'nr_voo' => 699,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTTHU',
        ]);

        Flight::create([
            'nr_voo' => 700,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTTHU',
        ]);

        Flight::create([
            'nr_voo' => 700,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTOPO',
        ]);

        Flight::create([
            'nr_voo' => 701,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTKHO',
        ]);

        Flight::create([
            'nr_voo' => 701,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTOPO',
        ]);

        Flight::create([
            'nr_voo' => 702,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTNHO',
        ]);

        Flight::create([
            'nr_voo' => 702,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTLPR',
        ]);

        Flight::create([
            'nr_voo' => 703,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 376,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 703,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 76,
            'cd_arnv' => 'TTTHU',
        ]);

        Flight::create([
            'nr_voo' => 703,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 225,
            'cd_arnv' => 'TTKPO',
        ]);

        Flight::create([
            'nr_voo' => 704,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 247,
            'cd_arnv' => 'TTKHO',
        ]);

        Flight::create([
            'nr_voo' => 704,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 225,
            'cd_arnv' => 'TTKPI',
        ]);

        Flight::create([
            'nr_voo' => 705,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 57,
            'cd_arnv' => 'TTNHO',
        ]);

        Flight::create([
            'nr_voo' => 705,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 185,
            'cd_arnv' => 'TTLPR',
        ]);

        Flight::create([
            'nr_voo' => 706,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 706,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTLHO',
        ]);

        Flight::create([
            'nr_voo' => 706,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKPO',
        ]);

        Flight::create([
            'nr_voo' => 707,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTMPO',
        ]);

        Flight::create([
            'nr_voo' => 707,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 358,
            'cd_arnv' => 'TTKHO',
        ]);

        Flight::create([
            'nr_voo' => 708,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTLPR',
        ]);

        Flight::create([
            'nr_voo' => 708,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 188,
            'cd_arnv' => 'TTNHO',
        ]);

        Flight::create([
            'nr_voo' => 709,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 139,
            'cd_arnv' => 'TTLHO',
        ]);

        Flight::create([
            'nr_voo' => 709,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 166,
            'cd_arnv' => 'TTOPO',
        ]);

        Flight::create([
            'nr_voo' => 710,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 710,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTKHO',
        ]);

        Flight::create([
            'nr_voo' => 710,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 107,
            'cd_arnv' => 'TTLPR',
        ]);

        Flight::create([
            'nr_voo' => 711,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 147,
            'cd_arnv' => 'TTOPO',
        ]);

        Flight::create([
            'nr_voo' => 711,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 99,
            'cd_arnv' => 'TTNHO',
        ]);

        Flight::create([
            'nr_voo' => 712,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 87,
            'cd_arnv' => 'TTKPT',
        ]);

        Flight::create([
            'nr_voo' => 712,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 400,
            'cd_arnv' => 'TTKGI',
        ]);

        Flight::create([
            'nr_voo' => 713,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTKPI',
        ]);

        Flight::create([
            'nr_voo' => 713,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 110,
            'cd_arnv' => 'TTNGO',
        ]);

        Flight::create([
            'nr_voo' => 714,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 10,
            'cd_arnv' => 'TTRGI',
        ]);

        Flight::create([
            'nr_voo' => 714,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTKPT',
        ]);

        Flight::create([
            'nr_voo' => 715,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 120,
            'cd_arnv' => 'TTKGR',
        ]);

        Flight::create([
            'nr_voo' => 715,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTOPO',
        ]);

        Flight::create([
            'nr_voo' => 715,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 716,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 120,
            'cd_arnv' => 'TTUGO',
        ]);

        Flight::create([
            'nr_voo' => 716,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 329,
            'cd_arnv' => 'TTKPO',
        ]);

        Flight::create([
            'nr_voo' => 717,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 39,
            'cd_arnv' => 'TTKPO',
        ]);

        Flight::create([
            'nr_voo' => 717,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 717,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTNGR',
        ]);

        Flight::create([
            'nr_voo' => 718,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 270,
            'cd_arnv' => 'TTNGR',
        ]);

        Flight::create([
            'nr_voo' => 718,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTMPO',
        ]);

        Flight::create([
            'nr_voo' => 719,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 400,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 719,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 280,
            'cd_arnv' => 'TTKGU',
        ]);

        Flight::create([
            'nr_voo' => 720,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 310,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 721,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 320,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 721,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 251,
            'cd_arnv' => 'TTKGI',
        ]);

        Flight::create([
            'nr_voo' => 722,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 351,
            'cd_arnv' => 'TTRGI',
        ]);

        Flight::create([
            'nr_voo' => 722,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 723,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 723,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 723,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 723,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTKGI',
        ]);

        Flight::create([
            'nr_voo' => 724,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 302,
            'cd_arnv' => 'TTUGU',
        ]);

        Flight::create([
            'nr_voo' => 724,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 130,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 725,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 240,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 725,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 725,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTKGI',
        ]);

        Flight::create([
            'nr_voo' => 726,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 240,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 726,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTNGO',
        ]);

        Flight::create([
            'nr_voo' => 727,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTKGR',
        ]);

        Flight::create([
            'nr_voo' => 727,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 240,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 728,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 728,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 403,
            'cd_arnv' => 'TTKGN',
        ]);

        Flight::create([
            'nr_voo' => 729,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 729,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 303,
            'cd_arnv' => 'TTRGI',
        ]);

        Flight::create([
            'nr_voo' => 730,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTKGR',
        ]);

        Flight::create([
            'nr_voo' => 730,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 60,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 731,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTUGO',
        ]);

        Flight::create([
            'nr_voo' => 731,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 134,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 731,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 160,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 732,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTKGN',
        ]);

        Flight::create([
            'nr_voo' => 732,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 733,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 293,
            'cd_arnv' => 'TTIGU',
        ]);

        Flight::create([
            'nr_voo' => 733,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 370,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 734,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 4,
            'cd_arnv' => 'TTKGR',
        ]);

        Flight::create([
            'nr_voo' => 734,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 370,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 735,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 214,
            'cd_arnv' => 'TTNGR',
        ]);

        Flight::create([
            'nr_voo' => 735,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 370,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 736,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 244,
            'cd_arnv' => 'TTIGU',
        ]);

        Flight::create([
            'nr_voo' => 736,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 280,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 737,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTKGO',
        ]);

        Flight::create([
            'nr_voo' => 737,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 737,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 80,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 738,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 80,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 738,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 205,
            'cd_arnv' => 'TTKGN',
        ]);

        Flight::create([
            'nr_voo' => 739,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 290,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 739,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 739,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTIGU',
        ]);

        Flight::create([
            'nr_voo' => 740,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 145,
            'cd_arnv' => 'TTKGO',
        ]);

        Flight::create([
            'nr_voo' => 740,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 190,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 741,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 155,
            'cd_arnv' => 'TTNGR',
        ]);

        Flight::create([
            'nr_voo' => 741,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 190,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 742,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 742,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 190,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 742,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 165,
            'cd_arnv' => 'TTKGO',
        ]);

        Flight::create([
            'nr_voo' => 743,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 743,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 390,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 743,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTNGO',
        ]);

        Flight::create([
            'nr_voo' => 744,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 201,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 744,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 744,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTKGU',
        ]);

        Flight::create([
            'nr_voo' => 745,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 1,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 745,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTKGU',
        ]);

        Flight::create([
            'nr_voo' => 746,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 411,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 746,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 746,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTNGO',
        ]);

        Flight::create([
            'nr_voo' => 747,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 11,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 747,
            'dt_saida_voo' => '1993-01-13',
            'nr_rota_voo' => 346,
            'cd_arnv' => 'TTUGO',
        ]);

        Flight::create([
            'nr_voo' => 748,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 156,
            'cd_arnv' => 'TTUGO',
        ]);

        Flight::create([
            'nr_voo' => 748,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 749,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 749,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTKGU',
        ]);

        Flight::create([
            'nr_voo' => 750,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 286,
            'cd_arnv' => 'TTKGN',
        ]);

        Flight::create([
            'nr_voo' => 751,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 751,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTNGR',
        ]);

        Flight::create([
            'nr_voo' => 752,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 411,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 752,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 405,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 752,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 407,
            'cd_arnv' => 'TTKGR',
        ]);

        Flight::create([
            'nr_voo' => 753,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTUGU',
        ]);

        Flight::create([
            'nr_voo' => 753,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 754,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTUGU',
        ]);

        Flight::create([
            'nr_voo' => 754,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 121,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 755,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 756,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTUGU',
        ]);

        Flight::create([
            'nr_voo' => 756,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 341,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 757,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 41,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 757,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 757,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTKGU',
        ]);

        Flight::create([
            'nr_voo' => 758,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 188,
            'cd_arnv' => 'TTRGI',
        ]);

        Flight::create([
            'nr_voo' => 758,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 341,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 759,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 759,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTNGO',
        ]);

        Flight::create([
            'nr_voo' => 760,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 409,
            'cd_arnv' => 'TTRGI',
        ]);

        Flight::create([
            'nr_voo' => 760,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 761,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 41,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 761,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTKGN',
        ]);

        Flight::create([
            'nr_voo' => 761,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 762,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 51,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 762,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 76,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 762,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTKGO',
        ]);

        Flight::create([
            'nr_voo' => 763,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 379,
            'cd_arnv' => 'TTIGU',
        ]);

        Flight::create([
            'nr_voo' => 763,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 351,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 764,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 379,
            'cd_arnv' => 'TTIGU',
        ]);

        Flight::create([
            'nr_voo' => 764,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 261,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 765,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 361,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 765,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 110,
            'cd_arnv' => 'TTKFR',
        ]);

        Flight::create([
            'nr_voo' => 766,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 320,
            'cd_arnv' => 'TTKFR',
        ]);

        Flight::create([
            'nr_voo' => 766,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 261,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 767,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTUFI',
        ]);

        Flight::create([
            'nr_voo' => 767,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 71,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 768,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 270,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 768,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 769,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 769,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 180,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 769,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 191,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 770,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 102,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 770,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 770,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 301,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 771,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 771,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 131,
            'cd_arnv' => 'TTUFR',
        ]);

        Flight::create([
            'nr_voo' => 771,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 2,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 772,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 212,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 772,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 181,
            'cd_arnv' => 'TTKFR',
        ]);

        Flight::create([
            'nr_voo' => 773,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 381,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 773,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 312,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 774,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 122,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 775,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 122,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 775,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTUFR',
        ]);

        Flight::create([
            'nr_voo' => 776,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 52,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 776,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 122,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 777,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 382,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 777,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 332,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 777,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 778,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKFR',
        ]);

        Flight::create([
            'nr_voo' => 778,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 778,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 232,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 779,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 232,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 779,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 33,
            'cd_arnv' => 'TTUFR',
        ]);

        Flight::create([
            'nr_voo' => 780,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 780,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 408,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 780,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 781,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTUFI',
        ]);

        Flight::create([
            'nr_voo' => 781,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 242,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 782,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTUFR',
        ]);

        Flight::create([
            'nr_voo' => 782,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 242,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 783,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 783,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTUFI',
        ]);

        Flight::create([
            'nr_voo' => 783,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 784,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 52,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 784,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 784,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 785,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 52,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 785,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 785,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 786,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 786,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 374,
            'cd_arnv' => 'TTKFR',
        ]);

        Flight::create([
            'nr_voo' => 786,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 787,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 787,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 94,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 788,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 788,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 62,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 789,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 55,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 789,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 790,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 790,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 791,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 791,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 792,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 792,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 382,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 793,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 226,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 793,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 794,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 794,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 192,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 795,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 795,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 795,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 292,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 796,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 392,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 796,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 797,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 92,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 797,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 157,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 798,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTKFI',
        ]);

        Flight::create([
            'nr_voo' => 798,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 313,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 799,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 800,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 800,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 801,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 801,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 268,
            'cd_arnv' => 'TTUFI',
        ]);

        Flight::create([
            'nr_voo' => 802,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 802,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 803,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 123,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 803,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 229,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 804,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 804,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 805,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 805,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 369,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 806,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 179,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 806,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 133,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 807,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 43,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 807,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 89,
            'cd_arnv' => 'TTLFR',
        ]);

        Flight::create([
            'nr_voo' => 807,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 808,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 808,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 343,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 809,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 143,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 809,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 20,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 810,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 53,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 810,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 408,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 810,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 811,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 811,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 369,
            'cd_arnv' => 'TTOFI',
        ]);

        Flight::create([
            'nr_voo' => 811,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 812,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 812,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 812,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 813,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 813,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 50,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 814,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 380,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 814,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 814,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 815,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 815,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 816,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 816,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 817,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 817,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 818,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 818,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 818,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 819,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 373,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 819,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 231,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 820,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 141,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 820,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 821,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 821,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 241,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 822,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 271,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 822,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 823,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 823,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 171,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 824,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 283,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 824,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 825,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 383,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 825,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 281,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 826,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 304,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 826,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 391,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 827,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 414,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 827,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 828,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 828,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 829,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 14,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 829,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 830,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 24,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 830,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 831,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 324,
            'cd_arnv' => 'TTKOV',
        ]);

        Flight::create([
            'nr_voo' => 831,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 12,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 832,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 832,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 22,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 833,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 142,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 833,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 124,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 834,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 834,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 252,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 835,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 835,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 344,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 836,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 254,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 836,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 372,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 837,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 837,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 838,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 413,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 838,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTLOS',
        ]);

        Flight::create([
            'nr_voo' => 839,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 839,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 354,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 840,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 323,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 840,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 154,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 841,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 841,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 243,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 842,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 353,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 842,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 64,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 843,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 174,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 843,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 843,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 363,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 844,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 844,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 273,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 845,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 845,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 846,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 846,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 847,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 847,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 848,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 848,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 848,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 205,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 849,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 115,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 849,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 850,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 850,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 850,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 851,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 114,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 851,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 851,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 852,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 25,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 852,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 853,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 215,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 853,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 853,
            'dt_saida_voo' => '1993-01-30',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 854,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 125,
            'cd_arnv' => 'TTKOF',
        ]);

        Flight::create([
            'nr_voo' => 854,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 854,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 234,
            'cd_arnv' => 'TTIDL',
        ]);

        Flight::create([
            'nr_voo' => 855,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 134,
            'cd_arnv' => 'TTKDW',
        ]);

        Flight::create([
            'nr_voo' => 855,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 856,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 34,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 856,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 235,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 857,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 144,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 857,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 858,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 858,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 135,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 859,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 274,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 859,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 860,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 860,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKFO',
        ]);

        Flight::create([
            'nr_voo' => 860,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 861,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 145,
            'cd_arnv' => 'TTTOD',
        ]);

        Flight::create([
            'nr_voo' => 861,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 862,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 55,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 862,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 394,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 863,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 864,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 865,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 115,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 865,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 265,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 866,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 245,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 867,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 285,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 867,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 45,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 868,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 355,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 868,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 869,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 175,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 869,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 870,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 6,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 870,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 871,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 395,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 871,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 416,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 872,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 872,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 236,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 872,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 195,
            'cd_arnv' => 'TTTOR',
        ]);

        Flight::create([
            'nr_voo' => 873,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 46,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 873,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 95,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 874,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 306,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 874,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 266,
            'cd_arnv' => 'TTKDM',
        ]);

        Flight::create([
            'nr_voo' => 875,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 206,
            'cd_arnv' => 'TTKOT',
        ]);

        Flight::create([
            'nr_voo' => 876,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 106,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 876,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 877,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 877,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 878,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 878,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 207,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 879,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 126,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 879,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 407,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 880,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 880,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 26,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 881,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 881,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 326,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 882,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 233,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 882,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 336,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 882,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 883,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 883,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 884,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 884,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 885,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 114,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 885,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 885,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 886,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 15,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 886,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 886,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 887,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 208,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 887,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 888,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 408,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 888,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 888,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 204,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 888,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 889,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 408,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 889,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 890,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 76,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 890,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 891,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 376,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 891,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTKDO',
        ]);

        Flight::create([
            'nr_voo' => 892,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 86,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 892,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 328,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 893,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 348,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 893,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 186,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 894,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 895,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 275,
            'cd_arnv' => 'TTKFF',
        ]);

        Flight::create([
            'nr_voo' => 895,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 158,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 895,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 196,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 896,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 896,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 368,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 897,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 897,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 898,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 398,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 898,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 899,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 899,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 96,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 900,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTIDU',
        ]);

        Flight::create([
            'nr_voo' => 900,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 901,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 901,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 296,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 902,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 307,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 902,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 903,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 119,
            'cd_arnv' => 'TTODO',
        ]);

        Flight::create([
            'nr_voo' => 903,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 7,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 904,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 182,
            'cd_arnv' => 'TTSOZ',
        ]);

        Flight::create([
            'nr_voo' => 904,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 19,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 904,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 905,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 259,
            'cd_arnv' => 'TTNDO',
        ]);

        Flight::create([
            'nr_voo' => 905,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 906,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 117,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 906,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTODR',
        ]);

        Flight::create([
            'nr_voo' => 906,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 257,
            'cd_arnv' => 'TTKDS',
        ]);

        Flight::create([
            'nr_voo' => 907,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTROD',
        ]);

        Flight::create([
            'nr_voo' => 907,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 146,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 907,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 69,
            'cd_arnv' => 'TTKDI',
        ]);

        Flight::create([
            'nr_voo' => 908,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 327,
            'cd_arnv' => 'TTHON',
        ]);

        Flight::create([
            'nr_voo' => 908,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 199,
            'cd_arnv' => 'TTNDI',
        ]);

        Flight::create([
            'nr_voo' => 909,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 337,
            'cd_arnv' => 'TTROL',
        ]);

        Flight::create([
            'nr_voo' => 909,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 299,
            'cd_arnv' => 'TTNDR',
        ]);

        Flight::create([
            'nr_voo' => 910,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 399,
            'cd_arnv' => 'TTKDU',
        ]);

        Flight::create([
            'nr_voo' => 910,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 37,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 911,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTLOS',
        ]);

        Flight::create([
            'nr_voo' => 911,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 99,
            'cd_arnv' => 'TTKDR',
        ]);

        Flight::create([
            'nr_voo' => 912,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 100,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 912,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 37,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 913,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 237,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 913,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 310,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 913,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 93,
            'cd_arnv' => 'TTKDN',
        ]);

        Flight::create([
            'nr_voo' => 914,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 120,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 914,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 347,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 915,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 247,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 915,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 30,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 916,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 230,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 917,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 267,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 917,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 317,
            'cd_arnv' => 'TTRDO',
        ]);

        Flight::create([
            'nr_voo' => 917,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 240,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 918,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 267,
            'cd_arnv' => 'TTLOS',
        ]);

        Flight::create([
            'nr_voo' => 918,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 40,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 919,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 919,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 250,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 920,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 367,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 920,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 60,
            'cd_arnv' => 'TTUCI',
        ]);

        Flight::create([
            'nr_voo' => 921,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 270,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 921,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 77,
            'cd_arnv' => 'TTDOR',
        ]);

        Flight::create([
            'nr_voo' => 922,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 201,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 922,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 922,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 246,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 922,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 277,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 923,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 111,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 923,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 187,
            'cd_arnv' => 'TTDOS',
        ]);

        Flight::create([
            'nr_voo' => 924,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 11,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 924,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 287,
            'cd_arnv' => 'TTSOU',
        ]);

        Flight::create([
            'nr_voo' => 925,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 925,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTKOQ',
        ]);

        Flight::create([
            'nr_voo' => 925,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 925,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 926,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 397,
            'cd_arnv' => 'TTKOI',
        ]);

        Flight::create([
            'nr_voo' => 926,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 221,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 927,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 197,
            'cd_arnv' => 'TTKOL',
        ]);

        Flight::create([
            'nr_voo' => 927,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 161,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 928,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 81,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 928,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 388,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 929,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 8,
            'cd_arnv' => 'TTROS',
        ]);

        Flight::create([
            'nr_voo' => 929,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTNCO',
        ]);

        Flight::create([
            'nr_voo' => 930,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 308,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 930,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 291,
            'cd_arnv' => 'TTNCO',
        ]);

        Flight::create([
            'nr_voo' => 931,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 302,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 931,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 118,
            'cd_arnv' => 'TTKOU',
        ]);

        Flight::create([
            'nr_voo' => 932,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 18,
            'cd_arnv' => 'TTLOS',
        ]);

        Flight::create([
            'nr_voo' => 932,
            'dt_saida_voo' => '1993-01-29',
            'nr_rota_voo' => 322,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 933,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 42,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 933,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 128,
            'cd_arnv' => 'TTKOC',
        ]);

        Flight::create([
            'nr_voo' => 934,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 338,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 934,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 352,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 935,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 48,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 935,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 362,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 936,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 172,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 936,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 936,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 148,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 937,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTRON',
        ]);

        Flight::create([
            'nr_voo' => 937,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 272,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 938,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 282,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 938,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 939,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 282,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 939,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 258,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 940,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 68,
            'cd_arnv' => 'TTKOB',
        ]);

        Flight::create([
            'nr_voo' => 940,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 403,
            'cd_arnv' => 'TTNCO',
        ]);

        Flight::create([
            'nr_voo' => 941,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 941,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 278,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 941,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 113,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 942,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 13,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 942,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 943,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 943,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 943,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 211,
            'cd_arnv' => 'TTLDO',
        ]);

        Flight::create([
            'nr_voo' => 943,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 78,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 944,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 23,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 944,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 378,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 945,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 945,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 115,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 945,
            'dt_saida_voo' => '1993-01-23',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 946,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 946,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 288,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 946,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 63,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 947,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 388,
            'cd_arnv' => 'TTLOI',
        ]);

        Flight::create([
            'nr_voo' => 947,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 948,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 163,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 948,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 88,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 949,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 173,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 949,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 98,
            'cd_arnv' => 'TTGOM',
        ]);

        Flight::create([
            'nr_voo' => 950,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 9,
            'cd_arnv' => 'TTROC',
        ]);

        Flight::create([
            'nr_voo' => 950,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 333,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 950,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 104,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 951,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 309,
            'cd_arnv' => 'TTLOU',
        ]);

        Flight::create([
            'nr_voo' => 952,
            'dt_saida_voo' => '1993-01-15',
            'nr_rota_voo' => 219,
            'cd_arnv' => 'TTKOM',
        ]);

        Flight::create([
            'nr_voo' => 952,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 314,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 953,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 224,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 953,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 419,
            'cd_arnv' => 'TTTON',
        ]);

        Flight::create([
            'nr_voo' => 953,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 365,
            'cd_arnv' => 'TTFFO',
        ]);

        Flight::create([
            'nr_voo' => 954,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 164,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 954,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 205,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 954,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 319,
            'cd_arnv' => 'TTJOR',
        ]);

        Flight::create([
            'nr_voo' => 955,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 284,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 955,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 129,
            'cd_arnv' => 'TTLOP',
        ]);

        Flight::create([
            'nr_voo' => 956,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 956,
            'dt_saida_voo' => '1993-01-31',
            'nr_rota_voo' => 339,
            'cd_arnv' => 'TTGON',
        ]);

        Flight::create([
            'nr_voo' => 957,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 957,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 958,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 5,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 958,
            'dt_saida_voo' => '1993-01-09',
            'nr_rota_voo' => 83,
            'cd_arnv' => 'TTODI',
        ]);

        Flight::create([
            'nr_voo' => 958,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTGOS',
        ]);

        Flight::create([
            'nr_voo' => 959,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 405,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 959,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTLOV',
        ]);

        Flight::create([
            'nr_voo' => 960,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 325,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 960,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 349,
            'cd_arnv' => 'TTKOG',
        ]);

        Flight::create([
            'nr_voo' => 961,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 961,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 149,
            'cd_arnv' => 'TTMOR',
        ]);

        Flight::create([
            'nr_voo' => 961,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 35,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 962,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 962,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 249,
            'cd_arnv' => 'TTIOV',
        ]);

        Flight::create([
            'nr_voo' => 963,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 359,
            'cd_arnv' => 'TTDOL',
        ]);

        Flight::create([
            'nr_voo' => 963,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 335,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 964,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 345,
            'cd_arnv' => 'TTICT',
        ]);

        Flight::create([
            'nr_voo' => 964,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 194,
            'cd_arnv' => 'TTPOS',
        ]);

        Flight::create([
            'nr_voo' => 964,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 159,
            'cd_arnv' => 'TTKON',
        ]);

        Flight::create([
            'nr_voo' => 965,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 965,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 966,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 375,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 966,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 59,
            'cd_arnv' => 'TTIOR',
        ]);

        Flight::create([
            'nr_voo' => 967,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 16,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 967,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 36,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 967,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 169,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 968,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 968,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTIDN',
        ]);

        Flight::create([
            'nr_voo' => 968,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTLOR',
        ]);

        Flight::create([
            'nr_voo' => 969,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 216,
            'cd_arnv' => 'TTOCY',
        ]);

        Flight::create([
            'nr_voo' => 969,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTKOD',
        ]);

        Flight::create([
            'nr_voo' => 970,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 79,
            'cd_arnv' => 'TTKOK',
        ]);

        Flight::create([
            'nr_voo' => 970,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 316,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 971,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 90,
            'cd_arnv' => 'TTUDI',
        ]);

        Flight::create([
            'nr_voo' => 971,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 56,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 971,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKOS',
        ]);

        Flight::create([
            'nr_voo' => 972,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 256,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 972,
            'dt_saida_voo' => '1993-01-19',
            'nr_rota_voo' => 289,
            'cd_arnv' => 'TTKOR',
        ]);

        Flight::create([
            'nr_voo' => 973,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 366,
            'cd_arnv' => 'TTNCO',
        ]);

        Flight::create([
            'nr_voo' => 973,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 389,
            'cd_arnv' => 'TTKOP',
        ]);

        Flight::create([
            'nr_voo' => 974,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 66,
            'cd_arnv' => 'TTUCI',
        ]);

        Flight::create([
            'nr_voo' => 974,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 389,
            'cd_arnv' => 'TTIOS',
        ]);

        Flight::create([
            'nr_voo' => 975,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 263,
            'cd_arnv' => 'TTIOL',
        ]);

        Flight::create([
            'nr_voo' => 975,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 386,
            'cd_arnv' => 'TTKCI',
        ]);

        Flight::create([
            'nr_voo' => 975,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 399,
            'cd_arnv' => 'TTFON',
        ]);

        Flight::create([
            'nr_voo' => 976,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 200,
            'cd_arnv' => 'TTKNV',
        ]);

        Flight::create([
            'nr_voo' => 976,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 286,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 977,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 300,
            'cd_arnv' => 'TTKNU',
        ]);

        Flight::create([
            'nr_voo' => 977,
            'dt_saida_voo' => '1993-01-20',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTSCI',
        ]);

        Flight::create([
            'nr_voo' => 978,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 267,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 978,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 220,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 979,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 330,
            'cd_arnv' => 'TTKNR',
        ]);

        Flight::create([
            'nr_voo' => 979,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 67,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 979,
            'dt_saida_voo' => '1993-01-05',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 980,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 378,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 980,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTLCI',
        ]);

        Flight::create([
            'nr_voo' => 980,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 340,
            'cd_arnv' => 'TTKNO',
        ]);

        Flight::create([
            'nr_voo' => 981,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 177,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 981,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 140,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 982,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTONT',
        ]);

        Flight::create([
            'nr_voo' => 982,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 72,
            'cd_arnv' => 'TTFOR',
        ]);

        Flight::create([
            'nr_voo' => 982,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 387,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 983,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 350,
            'cd_arnv' => 'TTINO',
        ]);

        Flight::create([
            'nr_voo' => 983,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 184,
            'cd_arnv' => 'TTSON',
        ]);

        Flight::create([
            'nr_voo' => 983,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 297,
            'cd_arnv' => 'TTRCO',
        ]);

        Flight::create([
            'nr_voo' => 984,
            'dt_saida_voo' => '1993-01-18',
            'nr_rota_voo' => 260,
            'cd_arnv' => 'TTINV',
        ]);

        Flight::create([
            'nr_voo' => 984,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 108,
            'cd_arnv' => 'TTKCL',
        ]);

        Flight::create([
            'nr_voo' => 985,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 218,
            'cd_arnv' => 'TTICO',
        ]);

        Flight::create([
            'nr_voo' => 985,
            'dt_saida_voo' => '1993-01-27',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTUNO',
        ]);

        Flight::create([
            'nr_voo' => 986,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 318,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 986,
            'dt_saida_voo' => '1993-01-28',
            'nr_rota_voo' => 360,
            'cd_arnv' => 'TTUNC',
        ]);

        Flight::create([
            'nr_voo' => 987,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 418,
            'cd_arnv' => 'TTRCI',
        ]);

        Flight::create([
            'nr_voo' => 987,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 183,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 987,
            'dt_saida_voo' => '1993-01-17',
            'nr_rota_voo' => 370,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 988,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 70,
            'cd_arnv' => 'TTINI',
        ]);

        Flight::create([
            'nr_voo' => 988,
            'dt_saida_voo' => '1993-01-22',
            'nr_rota_voo' => 28,
            'cd_arnv' => 'TTNCI',
        ]);

        Flight::create([
            'nr_voo' => 989,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 162,
            'cd_arnv' => 'TTJOS',
        ]);

        Flight::create([
            'nr_voo' => 989,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 380,
            'cd_arnv' => 'TTNNI',
        ]);

        Flight::create([
            'nr_voo' => 990,
            'dt_saida_voo' => '1993-01-01',
            'nr_rota_voo' => 84,
            'cd_arnv' => 'TTKOZ',
        ]);

        Flight::create([
            'nr_voo' => 990,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 390,
            'cd_arnv' => 'TTONS',
        ]);

        Flight::create([
            'nr_voo' => 990,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 338,
            'cd_arnv' => 'TTUCI',
        ]);

        Flight::create([
            'nr_voo' => 991,
            'dt_saida_voo' => '1993-01-14',
            'nr_rota_voo' => 338,
            'cd_arnv' => 'TTKCY',
        ]);

        Flight::create([
            'nr_voo' => 991,
            'dt_saida_voo' => '1993-01-16',
            'nr_rota_voo' => 301,
            'cd_arnv' => 'TTONS',
        ]);

        Flight::create([
            'nr_voo' => 992,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 101,
            'cd_arnv' => 'TTKNI',
        ]);

        Flight::create([
            'nr_voo' => 992,
            'dt_saida_voo' => '1993-01-12',
            'nr_rota_voo' => 248,
            'cd_arnv' => 'TTUCI',
        ]);

        Flight::create([
            'nr_voo' => 993,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 411,
            'cd_arnv' => 'TTSNY',
        ]);

        Flight::create([
            'nr_voo' => 993,
            'dt_saida_voo' => '1993-01-07',
            'nr_rota_voo' => 217,
            'cd_arnv' => 'TTIDO',
        ]);

        Flight::create([
            'nr_voo' => 993,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTICH',
        ]);

        Flight::create([
            'nr_voo' => 994,
            'dt_saida_voo' => '1993-01-10',
            'nr_rota_voo' => 21,
            'cd_arnv' => 'TTONI',
        ]);

        Flight::create([
            'nr_voo' => 994,
            'dt_saida_voo' => '1993-01-26',
            'nr_rota_voo' => 58,
            'cd_arnv' => 'TTKCO',
        ]);

        Flight::create([
            'nr_voo' => 995,
            'dt_saida_voo' => '1993-01-04',
            'nr_rota_voo' => 321,
            'cd_arnv' => 'TTKNN',
        ]);

        Flight::create([
            'nr_voo' => 995,
            'dt_saida_voo' => '1993-01-21',
            'nr_rota_voo' => 198,
            'cd_arnv' => 'TTKCH',
        ]);

        Flight::create([
            'nr_voo' => 996,
            'dt_saida_voo' => '1993-01-02',
            'nr_rota_voo' => 309,
            'cd_arnv' => 'TTKCT',
        ]);

        Flight::create([
            'nr_voo' => 997,
            'dt_saida_voo' => '1993-01-11',
            'nr_rota_voo' => 219,
            'cd_arnv' => 'TTOCH',
        ]);

        Flight::create([
            'nr_voo' => 997,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 251,
            'cd_arnv' => 'TTINC',
        ]);

        Flight::create([
            'nr_voo' => 998,
            'dt_saida_voo' => '1993-01-24',
            'nr_rota_voo' => 251,
            'cd_arnv' => 'TTINC',
        ]);

        Flight::create([
            'nr_voo' => 998,
            'dt_saida_voo' => '1993-01-25',
            'nr_rota_voo' => 239,
            'cd_arnv' => 'TTNCO',
        ]);

        Flight::create([
            'nr_voo' => 999,
            'dt_saida_voo' => '1993-01-03',
            'nr_rota_voo' => 61,
            'cd_arnv' => 'TTONN',
        ]);

        Flight::create([
            'nr_voo' => 999,
            'dt_saida_voo' => '1993-01-06',
            'nr_rota_voo' => 49,
            'cd_arnv' => 'TTICT',
        ]);

    }
}
