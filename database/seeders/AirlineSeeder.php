<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airline::create([
            'cd_cmpn_aerea' => 'AA',
            'nm_cmpn_aerea' => 'AMERICAN AIRLINES',
            'cd_pais' => 'US',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AC',
            'nm_cmpn_aerea' => 'AEROCANCUN',
            'cd_pais' => 'MX',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AF',
            'nm_cmpn_aerea' => 'AIR FRANCE',
            'cd_pais' => 'FR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AR',
            'nm_cmpn_aerea' => 'AEROLINEAS ARGENTINAS',
            'cd_pais' => 'AR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AT',
            'nm_cmpn_aerea' => 'ROYAL AIR MAROC',
            'cd_pais' => 'MA',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AV',
            'nm_cmpn_aerea' => 'AVIANCA',
            'cd_pais' => 'CO',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AW',
            'nm_cmpn_aerea' => 'WILSON TAXI AEREO',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'AZ',
            'nm_cmpn_aerea' => 'ALITALIA',
            'cd_pais' => 'IT',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'BA',
            'nm_cmpn_aerea' => 'BRITISH AIRWAYS',
            'cd_pais' => 'GB',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'CI',
            'nm_cmpn_aerea' => 'CHINA AIRLINES',
            'cd_pais' => 'CN',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'CP',
            'nm_cmpn_aerea' => 'CANADIAN PACIFIC',
            'cd_pais' => 'CA',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'DL',
            'nm_cmpn_aerea' => 'DELTA AIRLINES',
            'cd_pais' => 'US',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'DT',
            'nm_cmpn_aerea' => 'TAAG',
            'cd_pais' => 'AO',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'FQ',
            'nm_cmpn_aerea' => 'AIR ARUBA',
            'cd_pais' => null,
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'IB',
            'nm_cmpn_aerea' => 'IBERIA',
            'cd_pais' => 'ES',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'JH',
            'nm_cmpn_aerea' => 'NORDESTE',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'JJ',
            'nm_cmpn_aerea' => 'BRASIL CENTRAL',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'JL',
            'nm_cmpn_aerea' => 'JAL',
            'cd_pais' => 'JP',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'KE',
            'nm_cmpn_aerea' => 'KOREAN AIR',
            'cd_pais' => 'KR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'KK',
            'nm_cmpn_aerea' => 'TAM',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'KL',
            'nm_cmpn_aerea' => 'KLM',
            'cd_pais' => 'NL',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'LA',
            'nm_cmpn_aerea' => 'LANCHILE',
            'cd_pais' => 'CL',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'LB',
            'nm_cmpn_aerea' => 'LLOYD BOLIVIANO',
            'cd_pais' => 'BO',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'LH',
            'nm_cmpn_aerea' => 'LUFTHANSA',
            'cd_pais' => 'DE',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'LM',
            'nm_cmpn_aerea' => 'ANTILLEAN AIRLINES',
            'cd_pais' => 'AN',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'OS',
            'nm_cmpn_aerea' => 'AUSTRIAN',
            'cd_pais' => 'AT',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'PL',
            'nm_cmpn_aerea' => 'AEROPERU',
            'cd_pais' => 'PE',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'PU',
            'nm_cmpn_aerea' => 'PLUMA',
            'cd_pais' => 'YU',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'PY',
            'nm_cmpn_aerea' => 'SURINAN AIRWAYS',
            'cd_pais' => 'SR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'PZ',
            'nm_cmpn_aerea' => 'LAP L.A. PARAGUIAIAS',
            'cd_pais' => 'PY',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'RG',
            'nm_cmpn_aerea' => 'VARIG',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'SA',
            'nm_cmpn_aerea' => 'SOUTH AFRICAN',
            'cd_pais' => null,
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'SC',
            'nm_cmpn_aerea' => 'CRUZEIRO DO SUL',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'SL',
            'nm_cmpn_aerea' => 'RIO SUL',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'SR',
            'nm_cmpn_aerea' => 'SWISSAIR',
            'cd_pais' => 'CH',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'SU',
            'nm_cmpn_aerea' => 'AEROFLOT',
            'cd_pais' => 'SU',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'TG',
            'nm_cmpn_aerea' => 'THAI',
            'cd_pais' => 'TH',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'TP',
            'nm_cmpn_aerea' => 'TAP',
            'cd_pais' => 'PT',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'TR',
            'nm_cmpn_aerea' => 'TRANSBRASIL',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'TT',
            'nm_cmpn_aerea' => 'TABA',
            'cd_pais' => 'BR',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'UA',
            'nm_cmpn_aerea' => 'UNITED AIRLINES',
            'cd_pais' => 'US',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'UC',
            'nm_cmpn_aerea' => 'LADECO',
            'cd_pais' => 'CL',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'US',
            'nm_cmpn_aerea' => 'US AIR',
            'cd_pais' => 'US',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'VA',
            'nm_cmpn_aerea' => 'VIASA',
            'cd_pais' => 'VE',
        ]);

        Airline::create([
            'cd_cmpn_aerea' => 'VP',
            'nm_cmpn_aerea' => 'VASP',
            'cd_pais' => 'BR',
        ]);

    }
}
