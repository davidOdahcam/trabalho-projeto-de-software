<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'nr_rota_voo' => 1.00,
            'cd_arpt_orig' => 'AEP',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 2.00,
            'cd_arpt_orig' => 'AKL',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 3.00,
            'cd_arpt_orig' => 'AMM',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 4.00,
            'cd_arpt_orig' => 'AMS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1050.00,
        ]);

        Route::create([
            'nr_rota_voo' => 5.00,
            'cd_arpt_orig' => 'AOL',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1010.00,
        ]);

        Route::create([
            'nr_rota_voo' => 6.00,
            'cd_arpt_orig' => 'ASU',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1060.00,
        ]);

        Route::create([
            'nr_rota_voo' => 7.00,
            'cd_arpt_orig' => 'AUA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 8.00,
            'cd_arpt_orig' => 'BAQ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 460.00,
        ]);

        Route::create([
            'nr_rota_voo' => 9.00,
            'cd_arpt_orig' => 'BGI',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1090.00,
        ]);

        Route::create([
            'nr_rota_voo' => 10.00,
            'cd_arpt_orig' => 'BGW',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 630.00,
        ]);

        Route::create([
            'nr_rota_voo' => 11.00,
            'cd_arpt_orig' => 'BOG',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 12.00,
            'cd_arpt_orig' => 'BRC',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 950.00,
        ]);

        Route::create([
            'nr_rota_voo' => 13.00,
            'cd_arpt_orig' => 'BRU',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 14.00,
            'cd_arpt_orig' => 'BUE',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 15.00,
            'cd_arpt_orig' => 'CAS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 16.00,
            'cd_arpt_orig' => 'CAY',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 17.00,
            'cd_arpt_orig' => 'CBB',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1110.00,
        ]);

        Route::create([
            'nr_rota_voo' => 18.00,
            'cd_arpt_orig' => 'CCS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 19.00,
            'cd_arpt_orig' => 'CDG',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 510.00,
        ]);

        Route::create([
            'nr_rota_voo' => 20.00,
            'cd_arpt_orig' => 'CMN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 830.00,
        ]);

        Route::create([
            'nr_rota_voo' => 21.00,
            'cd_arpt_orig' => 'COR',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 22.00,
            'cd_arpt_orig' => 'CPC',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 23.00,
            'cd_arpt_orig' => 'CPH',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 320.00,
        ]);

        Route::create([
            'nr_rota_voo' => 24.00,
            'cd_arpt_orig' => 'CRD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 340.00,
        ]);

        Route::create([
            'nr_rota_voo' => 25.00,
            'cd_arpt_orig' => 'CUN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 400.00,
        ]);

        Route::create([
            'nr_rota_voo' => 26.00,
            'cd_arpt_orig' => 'CUR',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 510.00,
        ]);

        Route::create([
            'nr_rota_voo' => 27.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 260.00,
        ]);

        Route::create([
            'nr_rota_voo' => 28.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 29.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 640.00,
        ]);

        Route::create([
            'nr_rota_voo' => 30.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 820.00,
        ]);

        Route::create([
            'nr_rota_voo' => 31.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1150.00,
        ]);

        Route::create([
            'nr_rota_voo' => 32.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 280.00,
        ]);

        Route::create([
            'nr_rota_voo' => 33.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 910.00,
        ]);

        Route::create([
            'nr_rota_voo' => 34.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 35.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 890.00,
        ]);

        Route::create([
            'nr_rota_voo' => 36.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 820.00,
        ]);

        Route::create([
            'nr_rota_voo' => 37.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 970.00,
        ]);

        Route::create([
            'nr_rota_voo' => 38.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 910.00,
        ]);

        Route::create([
            'nr_rota_voo' => 39.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 40.00,
            'cd_arpt_orig' => 'DCA',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 630.00,
        ]);

        Route::create([
            'nr_rota_voo' => 41.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 42.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1150.00,
        ]);

        Route::create([
            'nr_rota_voo' => 43.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 1000.00,
        ]);

        Route::create([
            'nr_rota_voo' => 44.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 45.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 46.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 47.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 48.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 550.00,
        ]);

        Route::create([
            'nr_rota_voo' => 49.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 50.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 960.00,
        ]);

        Route::create([
            'nr_rota_voo' => 51.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 1110.00,
        ]);

        Route::create([
            'nr_rota_voo' => 52.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 1160.00,
        ]);

        Route::create([
            'nr_rota_voo' => 53.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 54.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 560.00,
        ]);

        Route::create([
            'nr_rota_voo' => 55.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 56.00,
            'cd_arpt_orig' => 'DFW',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 460.00,
        ]);

        Route::create([
            'nr_rota_voo' => 57.00,
            'cd_arpt_orig' => 'EZE',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1020.00,
        ]);

        Route::create([
            'nr_rota_voo' => 58.00,
            'cd_arpt_orig' => 'FCO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 59.00,
            'cd_arpt_orig' => 'FRA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 60.00,
            'cd_arpt_orig' => 'GEO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 61.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AEP',
            'vr_pasg' => 1250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 62.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AKL',
            'vr_pasg' => 270.00,
        ]);

        Route::create([
            'nr_rota_voo' => 63.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AMM',
            'vr_pasg' => 500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 64.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AMS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 65.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AOL',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 66.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ASU',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 67.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'AUA',
            'vr_pasg' => 380.00,
        ]);

        Route::create([
            'nr_rota_voo' => 68.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BAQ',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 69.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BGI',
            'vr_pasg' => 400.00,
        ]);

        Route::create([
            'nr_rota_voo' => 70.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BGW',
            'vr_pasg' => 1230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 71.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BOG',
            'vr_pasg' => 960.00,
        ]);

        Route::create([
            'nr_rota_voo' => 72.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BRC',
            'vr_pasg' => 1080.00,
        ]);

        Route::create([
            'nr_rota_voo' => 73.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BRU',
            'vr_pasg' => 1210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 74.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'BUE',
            'vr_pasg' => 1040.00,
        ]);

        Route::create([
            'nr_rota_voo' => 75.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CAS',
            'vr_pasg' => 1160.00,
        ]);

        Route::create([
            'nr_rota_voo' => 76.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CAY',
            'vr_pasg' => 380.00,
        ]);

        Route::create([
            'nr_rota_voo' => 77.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CBB',
            'vr_pasg' => 1190.00,
        ]);

        Route::create([
            'nr_rota_voo' => 78.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CCS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 79.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CDG',
            'vr_pasg' => 1110.00,
        ]);

        Route::create([
            'nr_rota_voo' => 80.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CMN',
            'vr_pasg' => 340.00,
        ]);

        Route::create([
            'nr_rota_voo' => 81.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'COR',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 82.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CPC',
            'vr_pasg' => 290.00,
        ]);

        Route::create([
            'nr_rota_voo' => 83.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CPH',
            'vr_pasg' => 420.00,
        ]);

        Route::create([
            'nr_rota_voo' => 84.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CRD',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 85.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CUN',
            'vr_pasg' => 1170.00,
        ]);

        Route::create([
            'nr_rota_voo' => 86.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'CUR',
            'vr_pasg' => 290.00,
        ]);

        Route::create([
            'nr_rota_voo' => 87.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 300.00,
        ]);

        Route::create([
            'nr_rota_voo' => 88.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 89.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'EZE',
            'vr_pasg' => 1220.00,
        ]);

        Route::create([
            'nr_rota_voo' => 90.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'FCO',
            'vr_pasg' => 850.00,
        ]);

        Route::create([
            'nr_rota_voo' => 91.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'FRA',
            'vr_pasg' => 980.00,
        ]);

        Route::create([
            'nr_rota_voo' => 92.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'GEO',
            'vr_pasg' => 300.00,
        ]);

        Route::create([
            'nr_rota_voo' => 93.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'GUA',
            'vr_pasg' => 930.00,
        ]);

        Route::create([
            'nr_rota_voo' => 94.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'GVA',
            'vr_pasg' => 660.00,
        ]);

        Route::create([
            'nr_rota_voo' => 95.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'GYE',
            'vr_pasg' => 980.00,
        ]);

        Route::create([
            'nr_rota_voo' => 96.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'HAV',
            'vr_pasg' => 400.00,
        ]);

        Route::create([
            'nr_rota_voo' => 97.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 610.00,
        ]);

        Route::create([
            'nr_rota_voo' => 98.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 99.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'IGR',
            'vr_pasg' => 530.00,
        ]);

        Route::create([
            'nr_rota_voo' => 100.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'IQT',
            'vr_pasg' => 660.00,
        ]);

        Route::create([
            'nr_rota_voo' => 101.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 102.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'KIN',
            'vr_pasg' => 310.00,
        ]);

        Route::create([
            'nr_rota_voo' => 103.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LAD',
            'vr_pasg' => 640.00,
        ]);

        Route::create([
            'nr_rota_voo' => 104.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 970.00,
        ]);

        Route::create([
            'nr_rota_voo' => 105.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LCA',
            'vr_pasg' => 1190.00,
        ]);

        Route::create([
            'nr_rota_voo' => 106.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LHR',
            'vr_pasg' => 1210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 107.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LIM',
            'vr_pasg' => 820.00,
        ]);

        Route::create([
            'nr_rota_voo' => 108.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LIN',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 109.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LIS',
            'vr_pasg' => 1240.00,
        ]);

        Route::create([
            'nr_rota_voo' => 110.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LON',
            'vr_pasg' => 870.00,
        ]);

        Route::create([
            'nr_rota_voo' => 111.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 112.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'LPB',
            'vr_pasg' => 320.00,
        ]);

        Route::create([
            'nr_rota_voo' => 113.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MAD',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 114.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MBJ',
            'vr_pasg' => 1080.00,
        ]);

        Route::create([
            'nr_rota_voo' => 115.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 1200.00,
        ]);

        Route::create([
            'nr_rota_voo' => 116.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MDQ',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 117.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MDZ',
            'vr_pasg' => 1030.00,
        ]);

        Route::create([
            'nr_rota_voo' => 118.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MEX',
            'vr_pasg' => 530.00,
        ]);

        Route::create([
            'nr_rota_voo' => 119.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 120.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MPM',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 121.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MVD',
            'vr_pasg' => 510.00,
        ]);

        Route::create([
            'nr_rota_voo' => 122.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'MXP',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 123.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 360.00,
        ]);

        Route::create([
            'nr_rota_voo' => 124.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'NQN',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 125.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 410.00,
        ]);

        Route::create([
            'nr_rota_voo' => 126.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 1130.00,
        ]);

        Route::create([
            'nr_rota_voo' => 127.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'OPO',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 128.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 129.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ORY',
            'vr_pasg' => 860.00,
        ]);

        Route::create([
            'nr_rota_voo' => 130.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PAP',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 131.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PAR',
            'vr_pasg' => 420.00,
        ]);

        Route::create([
            'nr_rota_voo' => 132.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PBM',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 133.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PDP',
            'vr_pasg' => 870.00,
        ]);

        Route::create([
            'nr_rota_voo' => 134.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'POS',
            'vr_pasg' => 1200.00,
        ]);

        Route::create([
            'nr_rota_voo' => 135.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PTY',
            'vr_pasg' => 820.00,
        ]);

        Route::create([
            'nr_rota_voo' => 136.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'PZO',
            'vr_pasg' => 1140.00,
        ]);

        Route::create([
            'nr_rota_voo' => 137.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ROM',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 138.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ROS',
            'vr_pasg' => 650.00,
        ]);

        Route::create([
            'nr_rota_voo' => 139.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SCL',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 140.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SCQ',
            'vr_pasg' => 900.00,
        ]);

        Route::create([
            'nr_rota_voo' => 141.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SDQ',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 142.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SEL',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 143.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 580.00,
        ]);

        Route::create([
            'nr_rota_voo' => 144.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SID',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 145.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SJO',
            'vr_pasg' => 1130.00,
        ]);

        Route::create([
            'nr_rota_voo' => 146.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SRZ',
            'vr_pasg' => 550.00,
        ]);

        Route::create([
            'nr_rota_voo' => 147.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'SYD',
            'vr_pasg' => 1260.00,
        ]);

        Route::create([
            'nr_rota_voo' => 148.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 360.00,
        ]);

        Route::create([
            'nr_rota_voo' => 149.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'UIO',
            'vr_pasg' => 480.00,
        ]);

        Route::create([
            'nr_rota_voo' => 150.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'VVI',
            'vr_pasg' => 410.00,
        ]);

        Route::create([
            'nr_rota_voo' => 151.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 152.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'YMQ',
            'vr_pasg' => 460.00,
        ]);

        Route::create([
            'nr_rota_voo' => 153.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'YMX',
            'vr_pasg' => 690.00,
        ]);

        Route::create([
            'nr_rota_voo' => 154.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'YTO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 155.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'YYZ',
            'vr_pasg' => 1040.00,
        ]);

        Route::create([
            'nr_rota_voo' => 156.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'ZRH',
            'vr_pasg' => 660.00,
        ]);

        Route::create([
            'nr_rota_voo' => 157.00,
            'cd_arpt_orig' => 'GUA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 158.00,
            'cd_arpt_orig' => 'GVA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1060.00,
        ]);

        Route::create([
            'nr_rota_voo' => 159.00,
            'cd_arpt_orig' => 'GYE',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 160.00,
            'cd_arpt_orig' => 'HAV',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 310.00,
        ]);

        Route::create([
            'nr_rota_voo' => 161.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 680.00,
        ]);

        Route::create([
            'nr_rota_voo' => 162.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 163.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 300.00,
        ]);

        Route::create([
            'nr_rota_voo' => 164.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 1060.00,
        ]);

        Route::create([
            'nr_rota_voo' => 165.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 650.00,
        ]);

        Route::create([
            'nr_rota_voo' => 166.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 167.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 600.00,
        ]);

        Route::create([
            'nr_rota_voo' => 168.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 570.00,
        ]);

        Route::create([
            'nr_rota_voo' => 169.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 520.00,
        ]);

        Route::create([
            'nr_rota_voo' => 170.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 820.00,
        ]);

        Route::create([
            'nr_rota_voo' => 171.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 890.00,
        ]);

        Route::create([
            'nr_rota_voo' => 172.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1050.00,
        ]);

        Route::create([
            'nr_rota_voo' => 173.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 174.00,
            'cd_arpt_orig' => 'IAD',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 175.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 560.00,
        ]);

        Route::create([
            'nr_rota_voo' => 176.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 350.00,
        ]);

        Route::create([
            'nr_rota_voo' => 177.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 310.00,
        ]);

        Route::create([
            'nr_rota_voo' => 178.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 980.00,
        ]);

        Route::create([
            'nr_rota_voo' => 179.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 180.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1130.00,
        ]);

        Route::create([
            'nr_rota_voo' => 181.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 182.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 460.00,
        ]);

        Route::create([
            'nr_rota_voo' => 183.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 184.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 480.00,
        ]);

        Route::create([
            'nr_rota_voo' => 185.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 370.00,
        ]);

        Route::create([
            'nr_rota_voo' => 186.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 360.00,
        ]);

        Route::create([
            'nr_rota_voo' => 187.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 520.00,
        ]);

        Route::create([
            'nr_rota_voo' => 188.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 690.00,
        ]);

        Route::create([
            'nr_rota_voo' => 189.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 190.00,
            'cd_arpt_orig' => 'IAH',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 240.00,
        ]);

        Route::create([
            'nr_rota_voo' => 191.00,
            'cd_arpt_orig' => 'IGR',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 192.00,
            'cd_arpt_orig' => 'IQT',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 193.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 220.00,
        ]);

        Route::create([
            'nr_rota_voo' => 194.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 195.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 220.00,
        ]);

        Route::create([
            'nr_rota_voo' => 196.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 570.00,
        ]);

        Route::create([
            'nr_rota_voo' => 197.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 610.00,
        ]);

        Route::create([
            'nr_rota_voo' => 198.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 860.00,
        ]);

        Route::create([
            'nr_rota_voo' => 199.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 600.00,
        ]);

        Route::create([
            'nr_rota_voo' => 200.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 201.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 1020.00,
        ]);

        Route::create([
            'nr_rota_voo' => 202.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 203.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 330.00,
        ]);

        Route::create([
            'nr_rota_voo' => 204.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 480.00,
        ]);

        Route::create([
            'nr_rota_voo' => 205.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 830.00,
        ]);

        Route::create([
            'nr_rota_voo' => 206.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 380.00,
        ]);

        Route::create([
            'nr_rota_voo' => 207.00,
            'cd_arpt_orig' => 'JFK',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 208.00,
            'cd_arpt_orig' => 'KIN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 209.00,
            'cd_arpt_orig' => 'LAD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 210.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 211.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 212.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 213.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 430.00,
        ]);

        Route::create([
            'nr_rota_voo' => 214.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 215.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 280.00,
        ]);

        Route::create([
            'nr_rota_voo' => 216.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 217.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 218.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 600.00,
        ]);

        Route::create([
            'nr_rota_voo' => 219.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 660.00,
        ]);

        Route::create([
            'nr_rota_voo' => 220.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 960.00,
        ]);

        Route::create([
            'nr_rota_voo' => 221.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 222.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 223.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 224.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 225.00,
            'cd_arpt_orig' => 'LAX',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 226.00,
            'cd_arpt_orig' => 'LCA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 630.00,
        ]);

        Route::create([
            'nr_rota_voo' => 227.00,
            'cd_arpt_orig' => 'LHR',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1120.00,
        ]);

        Route::create([
            'nr_rota_voo' => 228.00,
            'cd_arpt_orig' => 'LIM',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 229.00,
            'cd_arpt_orig' => 'LIN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 230.00,
            'cd_arpt_orig' => 'LIS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1220.00,
        ]);

        Route::create([
            'nr_rota_voo' => 231.00,
            'cd_arpt_orig' => 'LON',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 610.00,
        ]);

        Route::create([
            'nr_rota_voo' => 232.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 233.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 970.00,
        ]);

        Route::create([
            'nr_rota_voo' => 234.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 235.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 236.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 1040.00,
        ]);

        Route::create([
            'nr_rota_voo' => 237.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 1160.00,
        ]);

        Route::create([
            'nr_rota_voo' => 238.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1280.00,
        ]);

        Route::create([
            'nr_rota_voo' => 239.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 240.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 380.00,
        ]);

        Route::create([
            'nr_rota_voo' => 241.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 242.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 950.00,
        ]);

        Route::create([
            'nr_rota_voo' => 243.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 480.00,
        ]);

        Route::create([
            'nr_rota_voo' => 244.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1000.00,
        ]);

        Route::create([
            'nr_rota_voo' => 245.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 1030.00,
        ]);

        Route::create([
            'nr_rota_voo' => 246.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 550.00,
        ]);

        Route::create([
            'nr_rota_voo' => 247.00,
            'cd_arpt_orig' => 'LOS',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 1170.00,
        ]);

        Route::create([
            'nr_rota_voo' => 248.00,
            'cd_arpt_orig' => 'LPB',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 650.00,
        ]);

        Route::create([
            'nr_rota_voo' => 249.00,
            'cd_arpt_orig' => 'MAD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 870.00,
        ]);

        Route::create([
            'nr_rota_voo' => 250.00,
            'cd_arpt_orig' => 'MBJ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 251.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 860.00,
        ]);

        Route::create([
            'nr_rota_voo' => 252.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 253.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 220.00,
        ]);

        Route::create([
            'nr_rota_voo' => 254.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 260.00,
        ]);

        Route::create([
            'nr_rota_voo' => 255.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 300.00,
        ]);

        Route::create([
            'nr_rota_voo' => 256.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 1140.00,
        ]);

        Route::create([
            'nr_rota_voo' => 257.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 580.00,
        ]);

        Route::create([
            'nr_rota_voo' => 258.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 330.00,
        ]);

        Route::create([
            'nr_rota_voo' => 259.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 1060.00,
        ]);

        Route::create([
            'nr_rota_voo' => 260.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 261.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 262.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 263.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 264.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 1070.00,
        ]);

        Route::create([
            'nr_rota_voo' => 265.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 266.00,
            'cd_arpt_orig' => 'MCO',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 267.00,
            'cd_arpt_orig' => 'MDQ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 280.00,
        ]);

        Route::create([
            'nr_rota_voo' => 268.00,
            'cd_arpt_orig' => 'MDZ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 400.00,
        ]);

        Route::create([
            'nr_rota_voo' => 269.00,
            'cd_arpt_orig' => 'MEX',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 950.00,
        ]);

        Route::create([
            'nr_rota_voo' => 270.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1030.00,
        ]);

        Route::create([
            'nr_rota_voo' => 271.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 272.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 470.00,
        ]);

        Route::create([
            'nr_rota_voo' => 273.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 274.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 1030.00,
        ]);

        Route::create([
            'nr_rota_voo' => 275.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 276.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 570.00,
        ]);

        Route::create([
            'nr_rota_voo' => 277.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 570.00,
        ]);

        Route::create([
            'nr_rota_voo' => 278.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 279.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 600.00,
        ]);

        Route::create([
            'nr_rota_voo' => 280.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 840.00,
        ]);

        Route::create([
            'nr_rota_voo' => 281.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 282.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 283.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 610.00,
        ]);

        Route::create([
            'nr_rota_voo' => 284.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 840.00,
        ]);

        Route::create([
            'nr_rota_voo' => 285.00,
            'cd_arpt_orig' => 'MIA',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 260.00,
        ]);

        Route::create([
            'nr_rota_voo' => 286.00,
            'cd_arpt_orig' => 'MPM',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 430.00,
        ]);

        Route::create([
            'nr_rota_voo' => 287.00,
            'cd_arpt_orig' => 'MVD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 950.00,
        ]);

        Route::create([
            'nr_rota_voo' => 288.00,
            'cd_arpt_orig' => 'MXP',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1170.00,
        ]);

        Route::create([
            'nr_rota_voo' => 289.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 290.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 1040.00,
        ]);

        Route::create([
            'nr_rota_voo' => 291.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 870.00,
        ]);

        Route::create([
            'nr_rota_voo' => 292.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 293.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 1010.00,
        ]);

        Route::create([
            'nr_rota_voo' => 294.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 295.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 296.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 297.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 670.00,
        ]);

        Route::create([
            'nr_rota_voo' => 298.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 980.00,
        ]);

        Route::create([
            'nr_rota_voo' => 299.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 300.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 550.00,
        ]);

        Route::create([
            'nr_rota_voo' => 301.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 680.00,
        ]);

        Route::create([
            'nr_rota_voo' => 302.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 303.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 304.00,
            'cd_arpt_orig' => 'NGO',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 1140.00,
        ]);

        Route::create([
            'nr_rota_voo' => 305.00,
            'cd_arpt_orig' => 'NQN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 870.00,
        ]);

        Route::create([
            'nr_rota_voo' => 306.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 307.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 530.00,
        ]);

        Route::create([
            'nr_rota_voo' => 308.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 309.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 1020.00,
        ]);

        Route::create([
            'nr_rota_voo' => 310.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 380.00,
        ]);

        Route::create([
            'nr_rota_voo' => 311.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 320.00,
        ]);

        Route::create([
            'nr_rota_voo' => 312.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 313.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 314.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 950.00,
        ]);

        Route::create([
            'nr_rota_voo' => 315.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 470.00,
        ]);

        Route::create([
            'nr_rota_voo' => 316.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 317.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 318.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 319.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 320.00,
            'cd_arpt_orig' => 'NRT',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 321.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1310.00,
        ]);

        Route::create([
            'nr_rota_voo' => 322.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 960.00,
        ]);

        Route::create([
            'nr_rota_voo' => 323.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 324.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 1520.00,
        ]);

        Route::create([
            'nr_rota_voo' => 325.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 650.00,
        ]);

        Route::create([
            'nr_rota_voo' => 326.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 880.00,
        ]);

        Route::create([
            'nr_rota_voo' => 327.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 1010.00,
        ]);

        Route::create([
            'nr_rota_voo' => 328.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 640.00,
        ]);

        Route::create([
            'nr_rota_voo' => 329.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 330.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 1080.00,
        ]);

        Route::create([
            'nr_rota_voo' => 331.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 1320.00,
        ]);

        Route::create([
            'nr_rota_voo' => 332.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1470.00,
        ]);

        Route::create([
            'nr_rota_voo' => 333.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 1100.00,
        ]);

        Route::create([
            'nr_rota_voo' => 334.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 930.00,
        ]);

        Route::create([
            'nr_rota_voo' => 335.00,
            'cd_arpt_orig' => 'NYC',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 336.00,
            'cd_arpt_orig' => 'OPO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 337.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 338.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 690.00,
        ]);

        Route::create([
            'nr_rota_voo' => 339.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 340.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 341.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 630.00,
        ]);

        Route::create([
            'nr_rota_voo' => 342.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 470.00,
        ]);

        Route::create([
            'nr_rota_voo' => 343.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 920.00,
        ]);

        Route::create([
            'nr_rota_voo' => 344.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 860.00,
        ]);

        Route::create([
            'nr_rota_voo' => 345.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 1080.00,
        ]);

        Route::create([
            'nr_rota_voo' => 346.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 347.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 960.00,
        ]);

        Route::create([
            'nr_rota_voo' => 348.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 1200.00,
        ]);

        Route::create([
            'nr_rota_voo' => 349.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 850.00,
        ]);

        Route::create([
            'nr_rota_voo' => 350.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 1210.00,
        ]);

        Route::create([
            'nr_rota_voo' => 351.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 640.00,
        ]);

        Route::create([
            'nr_rota_voo' => 352.00,
            'cd_arpt_orig' => 'ORD',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 880.00,
        ]);

        Route::create([
            'nr_rota_voo' => 353.00,
            'cd_arpt_orig' => 'ORY',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 354.00,
            'cd_arpt_orig' => 'PAP',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 810.00,
        ]);

        Route::create([
            'nr_rota_voo' => 355.00,
            'cd_arpt_orig' => 'PAR',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1000.00,
        ]);

        Route::create([
            'nr_rota_voo' => 356.00,
            'cd_arpt_orig' => 'PBM',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1000.00,
        ]);

        Route::create([
            'nr_rota_voo' => 357.00,
            'cd_arpt_orig' => 'PDP',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 358.00,
            'cd_arpt_orig' => 'POS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1190.00,
        ]);

        Route::create([
            'nr_rota_voo' => 359.00,
            'cd_arpt_orig' => 'PTY',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1280.00,
        ]);

        Route::create([
            'nr_rota_voo' => 360.00,
            'cd_arpt_orig' => 'PZO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1910.00,
        ]);

        Route::create([
            'nr_rota_voo' => 361.00,
            'cd_arpt_orig' => 'ROM',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 362.00,
            'cd_arpt_orig' => 'ROS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 860.00,
        ]);

        Route::create([
            'nr_rota_voo' => 363.00,
            'cd_arpt_orig' => 'SCL',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 340.00,
        ]);

        Route::create([
            'nr_rota_voo' => 364.00,
            'cd_arpt_orig' => 'SCQ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 580.00,
        ]);

        Route::create([
            'nr_rota_voo' => 365.00,
            'cd_arpt_orig' => 'SDQ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1170.00,
        ]);

        Route::create([
            'nr_rota_voo' => 366.00,
            'cd_arpt_orig' => 'SEL',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 840.00,
        ]);

        Route::create([
            'nr_rota_voo' => 367.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 430.00,
        ]);

        Route::create([
            'nr_rota_voo' => 368.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 970.00,
        ]);

        Route::create([
            'nr_rota_voo' => 369.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 510.00,
        ]);

        Route::create([
            'nr_rota_voo' => 370.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 371.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 830.00,
        ]);

        Route::create([
            'nr_rota_voo' => 372.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 480.00,
        ]);

        Route::create([
            'nr_rota_voo' => 373.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1140.00,
        ]);

        Route::create([
            'nr_rota_voo' => 374.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 375.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 340.00,
        ]);

        Route::create([
            'nr_rota_voo' => 376.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 377.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 1140.00,
        ]);

        Route::create([
            'nr_rota_voo' => 378.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 580.00,
        ]);

        Route::create([
            'nr_rota_voo' => 379.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 420.00,
        ]);

        Route::create([
            'nr_rota_voo' => 380.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1090.00,
        ]);

        Route::create([
            'nr_rota_voo' => 381.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 1040.00,
        ]);

        Route::create([
            'nr_rota_voo' => 382.00,
            'cd_arpt_orig' => 'SFO',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 383.00,
            'cd_arpt_orig' => 'SID',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 384.00,
            'cd_arpt_orig' => 'SJO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 610.00,
        ]);

        Route::create([
            'nr_rota_voo' => 385.00,
            'cd_arpt_orig' => 'SRZ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 386.00,
            'cd_arpt_orig' => 'SYD',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1490.00,
        ]);

        Route::create([
            'nr_rota_voo' => 387.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'DCA',
            'vr_pasg' => 1520.00,
        ]);

        Route::create([
            'nr_rota_voo' => 388.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 1250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 389.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 890.00,
        ]);

        Route::create([
            'nr_rota_voo' => 390.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'IAD',
            'vr_pasg' => 1190.00,
        ]);

        Route::create([
            'nr_rota_voo' => 391.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 1230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 392.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 1080.00,
        ]);

        Route::create([
            'nr_rota_voo' => 393.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1410.00,
        ]);

        Route::create([
            'nr_rota_voo' => 394.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 940.00,
        ]);

        Route::create([
            'nr_rota_voo' => 395.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 1470.00,
        ]);

        Route::create([
            'nr_rota_voo' => 396.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 1500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 397.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 1130.00,
        ]);

        Route::create([
            'nr_rota_voo' => 398.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 1060.00,
        ]);

        Route::create([
            'nr_rota_voo' => 399.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 1500.00,
        ]);

        Route::create([
            'nr_rota_voo' => 400.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => 800.00,
        ]);

        Route::create([
            'nr_rota_voo' => 401.00,
            'cd_arpt_orig' => 'TYO',
            'cd_arpt_dest' => 'WAS',
            'vr_pasg' => 1340.00,
        ]);

        Route::create([
            'nr_rota_voo' => 402.00,
            'cd_arpt_orig' => 'UIO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 403.00,
            'cd_arpt_orig' => 'VVI',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 840.00,
        ]);

        Route::create([
            'nr_rota_voo' => 404.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'DFW',
            'vr_pasg' => 1120.00,
        ]);

        Route::create([
            'nr_rota_voo' => 405.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1110.00,
        ]);

        Route::create([
            'nr_rota_voo' => 406.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'IAH',
            'vr_pasg' => 880.00,
        ]);

        Route::create([
            'nr_rota_voo' => 407.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'JFK',
            'vr_pasg' => 540.00,
        ]);

        Route::create([
            'nr_rota_voo' => 408.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'LAX',
            'vr_pasg' => 1010.00,
        ]);

        Route::create([
            'nr_rota_voo' => 409.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'LOS',
            'vr_pasg' => 1180.00,
        ]);

        Route::create([
            'nr_rota_voo' => 410.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'MCO',
            'vr_pasg' => 370.00,
        ]);

        Route::create([
            'nr_rota_voo' => 411.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'MIA',
            'vr_pasg' => 430.00,
        ]);

        Route::create([
            'nr_rota_voo' => 412.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'NGO',
            'vr_pasg' => 390.00,
        ]);

        Route::create([
            'nr_rota_voo' => 413.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'NRT',
            'vr_pasg' => 250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 414.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'NYC',
            'vr_pasg' => 230.00,
        ]);

        Route::create([
            'nr_rota_voo' => 415.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'ORD',
            'vr_pasg' => 420.00,
        ]);

        Route::create([
            'nr_rota_voo' => 416.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'SFO',
            'vr_pasg' => null,
        ]);

        Route::create([
            'nr_rota_voo' => 417.00,
            'cd_arpt_orig' => 'WAS',
            'cd_arpt_dest' => 'TYO',
            'vr_pasg' => 450.00,
        ]);

        Route::create([
            'nr_rota_voo' => 418.00,
            'cd_arpt_orig' => 'YMQ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1160.00,
        ]);

        Route::create([
            'nr_rota_voo' => 419.00,
            'cd_arpt_orig' => 'YMX',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1270.00,
        ]);

        Route::create([
            'nr_rota_voo' => 420.00,
            'cd_arpt_orig' => 'YTO',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1170.00,
        ]);

        Route::create([
            'nr_rota_voo' => 421.00,
            'cd_arpt_orig' => 'YYZ',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1250.00,
        ]);

        Route::create([
            'nr_rota_voo' => 422.00,
            'cd_arpt_orig' => 'ZRH',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 1090.00,
        ]);

        Route::create([
            'nr_rota_voo' => 423.00,
            'cd_arpt_orig' => 'FEN',
            'cd_arpt_dest' => 'GIG',
            'vr_pasg' => 590.00,
        ]);

        Route::create([
            'nr_rota_voo' => 424.00,
            'cd_arpt_orig' => 'GIG',
            'cd_arpt_dest' => 'FEN',
            'vr_pasg' => 280.00,
        ]);
    }
}
