<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passenger::create([
            'cd_psgr' => 1,
            'nm_psgr' => 'JOSE CONCESSO DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1930-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 2,
            'nm_psgr' => 'JOAO CARLOS SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1932-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 3,
            'nm_psgr' => 'LUIZ GONZAGA GUEDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1935-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 4,
            'nm_psgr' => 'LUIZ DA COSTA LAGE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 5,
            'nm_psgr' => 'WALMIR ALVARENGA RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-03-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 6,
            'nm_psgr' => 'ANTONIO MARTINS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-09-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 7,
            'nm_psgr' => 'DIMAS FELISMINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-09-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 8,
            'nm_psgr' => 'MIGUEL DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 9,
            'nm_psgr' => 'JOSE BENEDITO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1936-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 10,
            'nm_psgr' => 'ANTONIO DE OLIVEIRA FORMIGONI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1937-11-07',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 11,
            'nm_psgr' => 'LUCIO HENRIQUE ROMAO SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1938-02-03',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 12,
            'nm_psgr' => 'DOLANGE COSTA SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1938-07-13',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 13,
            'nm_psgr' => 'GERALDO JOSE DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1939-02-26',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 14,
            'nm_psgr' => 'ANTONIO BENEDITO MIRANDA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1939-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 15,
            'nm_psgr' => 'JUAREZ DUQUE FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1939-06-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 16,
            'nm_psgr' => 'VALTENCIR DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1940-04-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 17,
            'nm_psgr' => 'PEDRO AURELIO DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-02-23',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 18,
            'nm_psgr' => 'ANTONIO GERALDO VIGILATO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 19,
            'nm_psgr' => 'GERALDO MARQUES VIDAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 20,
            'nm_psgr' => 'JOSE FERREIRA S.NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 21,
            'nm_psgr' => 'MARCO AURELIO TONIOLO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-08-06',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 22,
            'nm_psgr' => 'EROS FROES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-12-16',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 23,
            'nm_psgr' => 'PAULO M COLAMARCO BARRETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1941-12-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 24,
            'nm_psgr' => 'JOSE VICENTE GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1942-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 25,
            'nm_psgr' => 'MARIO MOREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1943-05-20',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 26,
            'nm_psgr' => 'JORGE DIOLINDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1944-04-16',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 27,
            'nm_psgr' => 'JOSE VITOR DORNELAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1944-06-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 28,
            'nm_psgr' => 'JOAO BATISTA VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1944-04-08',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 29,
            'nm_psgr' => 'JOSE AFONSO CENACHI DRUMOND',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-04-03',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 30,
            'nm_psgr' => 'NELSON FERREIRA MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-04-19',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 31,
            'nm_psgr' => 'JOAQUIM VICENTE DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 32,
            'nm_psgr' => 'JOSE FERREIRA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 33,
            'nm_psgr' => 'MAURICIO BERNARDO CELESTIANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 34,
            'nm_psgr' => 'APARECIDO DE PAULA LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 35,
            'nm_psgr' => 'EDNALDO ROSA PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 36,
            'nm_psgr' => 'WAGNER DE SOUZA GOUVEA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-10-04',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 37,
            'nm_psgr' => 'RONEI CANCELA SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1945-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 38,
            'nm_psgr' => 'JOSE PAULO NAVARRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 39,
            'nm_psgr' => 'JOSE TEIXEIRA DO CARMO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-09-05',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 40,
            'nm_psgr' => 'JOSE PAULO TOLENDAR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-04-02',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 41,
            'nm_psgr' => 'JOSE ELIZEU CARAMEZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 42,
            'nm_psgr' => 'PEDRO ANTONIO C. GENEROSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-12-22',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 43,
            'nm_psgr' => 'ADELINO FRANCISCO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1946-06-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 44,
            'nm_psgr' => 'IRACEMA DA BOA VIAGEM G. LEAL',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1947-10-14',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 45,
            'nm_psgr' => 'JOAQUIM TIBURCIO A. JUNQUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1947-06-08',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 46,
            'nm_psgr' => 'FERNANDO LUIZ LOPES LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1947-08-23',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 47,
            'nm_psgr' => 'ILSON TEIXEIRA CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1947-06-08',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 48,
            'nm_psgr' => 'MOZART DA CUNHA CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-01-16',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 49,
            'nm_psgr' => 'JOAO FERREIRA MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-06-29',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 50,
            'nm_psgr' => 'CESAR AUGUSTO FERES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-07-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 51,
            'nm_psgr' => 'EDIO DE OLIVEIRA VIGILATO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 52,
            'nm_psgr' => 'JOSE LUIZ SANTANA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-11-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 53,
            'nm_psgr' => 'REGINA STELA ALMEIDA D MENDES',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1949-12-06',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 54,
            'nm_psgr' => 'CELSO SARANDY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-01-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 55,
            'nm_psgr' => 'ANTONIO CARLOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 56,
            'nm_psgr' => 'JOSE CLAUDIO DE A. BISCOTTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-12-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 57,
            'nm_psgr' => 'MESSIAS GUIMARAES LEMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-03-29',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 58,
            'nm_psgr' => 'JOSE ARMANDO C DE ALBUQUERQUE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-05-24',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 59,
            'nm_psgr' => 'DEMETRIO MACHADO DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-07-31',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 60,
            'nm_psgr' => 'JOSE RUBENS FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 61,
            'nm_psgr' => 'GILBERTO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 62,
            'nm_psgr' => 'ANTONIO LUIZ SOARES DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-03-01',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 63,
            'nm_psgr' => 'JOAO DO CARMO VASCONCELOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-04-26',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 64,
            'nm_psgr' => 'MARILCEIA TRINDADE MOREIRA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1949-11-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 65,
            'nm_psgr' => 'GIOVANNI PEDRO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-07-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 66,
            'nm_psgr' => 'HOMERO GOMES LEAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1949-07-23',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 67,
            'nm_psgr' => 'JOAO BATISTA PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-02-28',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 68,
            'nm_psgr' => 'FERNANDO GOMES MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-06-20',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 69,
            'nm_psgr' => 'LUIZ ALBERTO PRADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 70,
            'nm_psgr' => 'MARCIO ANTONIO AFLISIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-08-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 71,
            'nm_psgr' => 'EDMILSON APARECIDO ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-09-12',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 72,
            'nm_psgr' => 'PAULO ROBERTO QUETZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-11-07',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 73,
            'nm_psgr' => 'EUFRAZIO CARVALHO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-03-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 74,
            'nm_psgr' => 'FERNANDO GOMES MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-06-20',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 75,
            'nm_psgr' => 'ANTONIO CARLOS SALVE DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 76,
            'nm_psgr' => 'EUCELIO FELICIANO TORRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-01-02',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 77,
            'nm_psgr' => 'MARIA DE FATIMA SALOMAO MUSSE',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1950-05-23',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 78,
            'nm_psgr' => 'MARCOS OTTONI DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1950-05-27',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 79,
            'nm_psgr' => 'JOSE FERREIRA FONTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-03-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 80,
            'nm_psgr' => 'PAULO GOMES FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-03-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 81,
            'nm_psgr' => 'GERALDO ANTONIO NOGUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-06-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 82,
            'nm_psgr' => 'PLINIO SANT ANA VALLADAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-05-22',
            'cd_pais' => 'YU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 83,
            'nm_psgr' => 'LIBANO JORGE ABJAUD',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-03-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 84,
            'nm_psgr' => 'SIBELIUS MARTINS DAMASCENO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-04-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 85,
            'nm_psgr' => 'PAULA RIBEIRO DINIZ',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1951-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 86,
            'nm_psgr' => 'JOAO CARLOS FRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1951-12-04',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 87,
            'nm_psgr' => 'JOSE AMARO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-02',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 88,
            'nm_psgr' => 'GERALDO MARCIO AZALIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-02',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 89,
            'nm_psgr' => 'GETULIO LOPES ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 90,
            'nm_psgr' => 'JOSE JOAQUIM DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-14',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 91,
            'nm_psgr' => 'JULIO CESAR DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-14',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 92,
            'nm_psgr' => 'ANTONIO CLAUDINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-02-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 93,
            'nm_psgr' => 'ANTONIO JOSE GOMES DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 94,
            'nm_psgr' => 'JORGE LUIZ NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 95,
            'nm_psgr' => 'GILBERTO JARDIM F.DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 96,
            'nm_psgr' => 'ANTONIO HENRIQUE F.ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 97,
            'nm_psgr' => 'OTHON DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 98,
            'nm_psgr' => 'MAURILIO NUNES DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 99,
            'nm_psgr' => 'FERNANDO LUIS F.ELIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 100,
            'nm_psgr' => 'JOAO BATISTA CORREA DANIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 101,
            'nm_psgr' => 'LUIZ CARLOS A. GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-05-28',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 102,
            'nm_psgr' => 'EXPEDITO VITORIO LEONEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-09-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 103,
            'nm_psgr' => 'VANTUIL ANTONIO MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-12-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 104,
            'nm_psgr' => 'FRANCISCO FACUNDO CANDEA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-12-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 105,
            'nm_psgr' => 'KIYOO MUNAKATA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-12-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 106,
            'nm_psgr' => 'LUIZ CARLOS DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-12-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 107,
            'nm_psgr' => 'EDUARDO JOSE PIRES DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 108,
            'nm_psgr' => 'ORLANDINO NASCIMENTO NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-08-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 109,
            'nm_psgr' => 'RONALDO CASTRO MACIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-12-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 110,
            'nm_psgr' => 'SEBASTIAO MAURICIO A. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-01-29',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 111,
            'nm_psgr' => 'PAULO ROBERTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-08-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 112,
            'nm_psgr' => 'LEOPOLDO LOPES TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-09-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 113,
            'nm_psgr' => 'LUCIANO MAGNO VARGAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-10-07',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 114,
            'nm_psgr' => 'GEISER COSTA SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1952-04-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 115,
            'nm_psgr' => 'LUIZ CLAUDIO GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-06-16',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 116,
            'nm_psgr' => 'JOSE ORLANDO DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-07-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 117,
            'nm_psgr' => 'RONALDO FRANCISCO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-08-11',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 118,
            'nm_psgr' => 'SOKUCHIN UEHARA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-08-11',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 119,
            'nm_psgr' => 'MARIO CESAR RADICH',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-12-29',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 120,
            'nm_psgr' => 'MARIA DAS GRACAS LIMA NEHRER',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1953-07-18',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 121,
            'nm_psgr' => 'JANIO DE PAULO CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1953-03-28',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 122,
            'nm_psgr' => 'JOSE ANTONIO BENICA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-06-15',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 123,
            'nm_psgr' => 'WILTON BARBOSA BITTENC LISBOA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-06-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 124,
            'nm_psgr' => 'MARCIO LUIS MARTINS ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-08-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 125,
            'nm_psgr' => 'OLIVIER QUEIROZ REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 126,
            'nm_psgr' => 'VICENTE DE PAULA OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 127,
            'nm_psgr' => 'JALMIR FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-09-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 128,
            'nm_psgr' => 'ADMAR BALBINO DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-10-09',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 129,
            'nm_psgr' => 'WALLACE DE ALEXANDRIA MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-10-09',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 130,
            'nm_psgr' => 'FERNANDO DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-10-09',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 131,
            'nm_psgr' => 'AUGUSTO ROBERTO NUNES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-12-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 132,
            'nm_psgr' => 'RONALDO ALVES SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-12-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 133,
            'nm_psgr' => 'JOAO LUIZ NATIVIDADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-12-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 134,
            'nm_psgr' => 'EFREM ANTONIO BURKOWSKI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-12-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 135,
            'nm_psgr' => 'FERNANDO MAYO TOLEDO LUSARDI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 136,
            'nm_psgr' => 'LUIZ CLAUDIO MAGALDI MEDEIROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 137,
            'nm_psgr' => 'JOSE ROBERTO ALVES FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1954-06-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 138,
            'nm_psgr' => 'CARLOS ONOFRE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-01-25',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 139,
            'nm_psgr' => 'JOSE GERALDO ZANETTI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-02-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 140,
            'nm_psgr' => 'VICENTE FERREIRA DE O.FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-02-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 141,
            'nm_psgr' => 'SIDNEI SANT ANNA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-03-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 142,
            'nm_psgr' => 'SILVIO LUIZ DA NATIVIDADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-03-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 143,
            'nm_psgr' => 'JORGE LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-04-03',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 144,
            'nm_psgr' => 'ANDRE LUIZ DE F.S. PARENTONI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-04-19',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 145,
            'nm_psgr' => 'WIRLEI DE SOUZA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-05-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 146,
            'nm_psgr' => 'LUCIANO VIEIRA GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-05-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 147,
            'nm_psgr' => 'GERALDO PACHECO MAGELA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-05-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 148,
            'nm_psgr' => 'JOAO SEVERINO DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-05-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 149,
            'nm_psgr' => 'ANTONIO CARLOS DE AREDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 150,
            'nm_psgr' => 'ANTONIO GERALDO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-14',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 151,
            'nm_psgr' => 'ANTONIO BARBOSA DE MELO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-14',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 152,
            'nm_psgr' => 'WALDEMAR TADEU DUARTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 153,
            'nm_psgr' => 'JOSE EUCLIDES DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-18',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 154,
            'nm_psgr' => 'OSMAR BRASIL DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 155,
            'nm_psgr' => 'VALDIR CORREA DUARTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-06-26',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 156,
            'nm_psgr' => 'JOAO NICOLAU SANTANA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 157,
            'nm_psgr' => 'JOSE GETULIO MALTA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 158,
            'nm_psgr' => 'ANTONIO DOMINGOS BAIOCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 159,
            'nm_psgr' => 'ALUISIO CARBOGIM FAZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 160,
            'nm_psgr' => 'PAULO CESAR ARMELONI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 161,
            'nm_psgr' => 'MARCIO DE SOUZA FURTADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-08-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 162,
            'nm_psgr' => 'ARI HENRIQUE PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-09-06',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 163,
            'nm_psgr' => 'MARCOS ANTONIO UMBELINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-09-06',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 164,
            'nm_psgr' => 'JOSE FERNANDO VASCONCELLOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-09-06',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 165,
            'nm_psgr' => 'WALSEDISNEY JORGE CORNI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-10-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 166,
            'nm_psgr' => 'ARLINDO CARDOSO CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-10-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 167,
            'nm_psgr' => 'GILSON FERNANDES PATICCIE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-11-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 168,
            'nm_psgr' => 'CARLOS ROBERTO MACIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 169,
            'nm_psgr' => 'VARLEN VIDAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 170,
            'nm_psgr' => 'LUIZ ANTONIO LEITE BEZERRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 171,
            'nm_psgr' => 'ROBERTO FLORES DOS RIOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 172,
            'nm_psgr' => 'DANIEL LOURENCO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 173,
            'nm_psgr' => 'DURVAL PINTO DE A. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 174,
            'nm_psgr' => 'LUIZ ANTONIO SILVANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 175,
            'nm_psgr' => 'LUIZ CARLOS BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 176,
            'nm_psgr' => 'NOCY LUCAS DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 177,
            'nm_psgr' => 'POTIGUARA GERALDO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 178,
            'nm_psgr' => 'JOSE MAURICIO VIEIRA COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1955-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 179,
            'nm_psgr' => 'CARLOS ROBERTO R ARRUDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-03-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 180,
            'nm_psgr' => 'MARCIA RAIMUNDA C. PESSANHA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 181,
            'nm_psgr' => 'LUIZ TECLI COPPE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-01-24',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 182,
            'nm_psgr' => 'OTACILIO ANTONIO VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 183,
            'nm_psgr' => 'PAULO RANGEL MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 184,
            'nm_psgr' => 'NISIO DA COSTA GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-03-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 185,
            'nm_psgr' => 'ARMANDO VICENTE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-03-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 186,
            'nm_psgr' => 'EDIR MACHADO DE VASCONCELOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-03-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 187,
            'nm_psgr' => 'ALFREDO ABUD NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-04-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 188,
            'nm_psgr' => 'ELIO LAZARO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-04-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 189,
            'nm_psgr' => 'MILTON LOPES DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-05-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 190,
            'nm_psgr' => 'SEBASTIAO REZENDE DE CASTILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-06-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 191,
            'nm_psgr' => 'HELIO FIDENCIO LINHARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-06-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 192,
            'nm_psgr' => 'MARCOS AUGUSTO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-06-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 193,
            'nm_psgr' => 'LUIZ FERNANDO DE MENDONCA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 194,
            'nm_psgr' => 'MARSSAL VALENTIM VICTORINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 195,
            'nm_psgr' => 'ROBSON FERREIRA MACIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 196,
            'nm_psgr' => 'AMARILDO FERNANDES PATICCIE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 197,
            'nm_psgr' => 'MARCIO CESAR DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 198,
            'nm_psgr' => 'FABIO MAXIMIANO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 199,
            'nm_psgr' => 'HERCULES JOSE NOGUEIRA RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 200,
            'nm_psgr' => 'ADASIO APARECIDO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 201,
            'nm_psgr' => 'RENATO LUIZ SPINELLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-08-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 202,
            'nm_psgr' => 'JOSE AVANIR RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-08-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 203,
            'nm_psgr' => 'NEVADIR RODRIGUES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-08-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 204,
            'nm_psgr' => 'JOSE AFONSO CARBOGIM BASSOLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-08-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 205,
            'nm_psgr' => 'LUIZ ANTONIO SOUZA DE AVELAR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 206,
            'nm_psgr' => 'CARLOS ALBERTO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 207,
            'nm_psgr' => 'LUIZ ELIAS DE MENDONCA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 208,
            'nm_psgr' => 'KLEBER DE OLIVEIRA RESENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 209,
            'nm_psgr' => 'MAURICIO DA CONCEICAO CORREA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 210,
            'nm_psgr' => 'ANTONIO SILVERIO MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 211,
            'nm_psgr' => 'OSVALDO SEVERINO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-09-04',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 212,
            'nm_psgr' => 'JOSE DJALMA MADEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-10-02',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 213,
            'nm_psgr' => 'FERNANDO LUIZ JANUZZI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 214,
            'nm_psgr' => 'TARCISIO GOMES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 215,
            'nm_psgr' => 'MARIO JOSE DE AVILA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 216,
            'nm_psgr' => 'CELSO MARTINS DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 217,
            'nm_psgr' => 'ANTONIO MANOEL PAES MARTINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 218,
            'nm_psgr' => 'ANTONIO MARCOS DO A GAMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 219,
            'nm_psgr' => 'TADEU AUGUSTO G. DA SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 220,
            'nm_psgr' => 'ANTONIO MATHEUS M DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 221,
            'nm_psgr' => 'EDER APARECIDO DORNELAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 222,
            'nm_psgr' => 'ALVARO SOARES RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 223,
            'nm_psgr' => 'GERALDO DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 224,
            'nm_psgr' => 'PEDRO GERVASIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 225,
            'nm_psgr' => 'JOAO BATISTA DE O MONTEZANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 226,
            'nm_psgr' => 'ARLINDO DE SOUZA SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-06-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 227,
            'nm_psgr' => 'ANTONIO ROBERTO N. MOURA DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-08-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 228,
            'nm_psgr' => 'JOAQUIM CARLOS A. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 229,
            'nm_psgr' => 'SAMIR HETTI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 230,
            'nm_psgr' => 'MIGUEL CAETANO DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1956-10-02',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 231,
            'nm_psgr' => 'ANA ELIZA DE SIQUEIRA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 232,
            'nm_psgr' => 'HUMBERTO DE SA NERY',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1957-04-16',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 233,
            'nm_psgr' => 'EDUARDO KNEIPP DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 234,
            'nm_psgr' => 'GERALDO MAURICIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 235,
            'nm_psgr' => 'ROBERTO DE BRITO CORNELIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 236,
            'nm_psgr' => 'CLAUDIO MAURICIO AVELINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 237,
            'nm_psgr' => 'JOSE AMANCIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 238,
            'nm_psgr' => 'WALDIR APARECIDO DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 239,
            'nm_psgr' => 'GERALDO EZEQUIEL SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 240,
            'nm_psgr' => 'JOSE MAURICIO ARAUJO LAGE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 241,
            'nm_psgr' => 'JOAO BATISTA DE ALMEIDA NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 242,
            'nm_psgr' => 'AVIMAR FONSECA AMARAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 243,
            'nm_psgr' => 'JOSE ROBERTO PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 244,
            'nm_psgr' => 'GILSON BAESSA RISPOLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 245,
            'nm_psgr' => 'RONALDO ANTUNES TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 246,
            'nm_psgr' => 'JOSE MIGUEL DA COSTA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-02-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 247,
            'nm_psgr' => 'JOSE TADEU FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 248,
            'nm_psgr' => 'JOSE MARCOS NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 249,
            'nm_psgr' => 'LOURIVAL DAS GRACAS GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 250,
            'nm_psgr' => 'JOSE GERALDO MOTTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 251,
            'nm_psgr' => 'LUCIO LUCAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 252,
            'nm_psgr' => 'ANDERSON ANTONIO DE C. REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 253,
            'nm_psgr' => 'GETULIO ROCHA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-04-16',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 254,
            'nm_psgr' => 'ARTHUR BERNARDO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-04-16',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 255,
            'nm_psgr' => 'JOSE GERALDO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-04-16',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 256,
            'nm_psgr' => 'CELSO FERNANDO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-05-14',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 257,
            'nm_psgr' => 'JESUS VENANCIO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-05-14',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 258,
            'nm_psgr' => 'MARCO ANTONIO AQUINO OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-05-14',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 259,
            'nm_psgr' => 'ANTONIO CARLOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-05-14',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 260,
            'nm_psgr' => 'LUCIO PIRES MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 261,
            'nm_psgr' => 'WELLINGTON DA CONSOLACAO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 262,
            'nm_psgr' => 'NILSON DE ALMEIDA MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 263,
            'nm_psgr' => 'VICENTE DE PAULA GARCIA ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 264,
            'nm_psgr' => 'JOSE CARLOS DOS REIS ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 265,
            'nm_psgr' => 'AQUINO DA SILVA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 266,
            'nm_psgr' => 'ANTONIO ALVES NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 267,
            'nm_psgr' => 'ADAIR MARQUES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 268,
            'nm_psgr' => 'LUIZ CARLOS PINHEIRO PRIOSTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-06-19',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 269,
            'nm_psgr' => 'JOSE CARLOS DE ANDRADE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 270,
            'nm_psgr' => 'PAULO DAGUIAR SILVA CERTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 271,
            'nm_psgr' => 'ROBERTO ADAO MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 272,
            'nm_psgr' => 'SERGIO DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 273,
            'nm_psgr' => 'DARCI ROBERTO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 274,
            'nm_psgr' => 'ROBERTO DIONISIO FRANCISCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 275,
            'nm_psgr' => 'SERGIO LUIZ TAVARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 276,
            'nm_psgr' => 'PERCINVAL DA COSTA BARREIROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 277,
            'nm_psgr' => 'OSWALDO GONCALVES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 278,
            'nm_psgr' => 'PAULO ROBERTO P. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 279,
            'nm_psgr' => 'RAIMUNDO VALDEMAR DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-09-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 280,
            'nm_psgr' => 'JOAO SEBASTIAO F. DE MELO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-09-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 281,
            'nm_psgr' => 'JOSE MARIA FELIX',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-09-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 282,
            'nm_psgr' => 'PAULO CESAR OUVERNEY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 283,
            'nm_psgr' => 'MARIO MINOLU ODA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 284,
            'nm_psgr' => 'PAULO SOUZA DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 285,
            'nm_psgr' => 'JOSE GERALDO DE MENDONCA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 286,
            'nm_psgr' => 'ANTONIO PAULO DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 287,
            'nm_psgr' => 'ANTONIO CARLOS DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 288,
            'nm_psgr' => 'CELIO RIBEIRO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 289,
            'nm_psgr' => 'MILTON DE SOUZA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 290,
            'nm_psgr' => 'GERALDO MAGELA LONDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 291,
            'nm_psgr' => 'VENICIO MARTINS NAZARETH',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 292,
            'nm_psgr' => 'SEBASTIAO AMORIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-29',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 293,
            'nm_psgr' => 'LUCIO CARLOS DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 294,
            'nm_psgr' => 'LEVY CARVALHO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 295,
            'nm_psgr' => 'LUISMAR DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 296,
            'nm_psgr' => 'JOSE ESTEVAO DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 297,
            'nm_psgr' => 'SEBASTIAO CELIO PARO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 298,
            'nm_psgr' => 'SEBASTIAO BATISTA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 299,
            'nm_psgr' => 'MARCO AURELIO MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-11-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 300,
            'nm_psgr' => 'WANDERLEI LUIZ CALIXTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 301,
            'nm_psgr' => 'PAULO CESAR DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 302,
            'nm_psgr' => 'CASSIO LUIZ ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 303,
            'nm_psgr' => 'RENATO ANTONIO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 304,
            'nm_psgr' => 'CARLOS ARNOBIO DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-28',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 305,
            'nm_psgr' => 'JOSE OSCAR ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-12-28',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 306,
            'nm_psgr' => 'VICTOR HENRIQUE C. DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 307,
            'nm_psgr' => 'LUIZ CARLOS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 308,
            'nm_psgr' => 'WANDERSON LUIZ QUINELATO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-05-14',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 309,
            'nm_psgr' => 'AILTON TAVELLA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 310,
            'nm_psgr' => 'CARLOS HENRIQUE DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1957-10-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 311,
            'nm_psgr' => 'FRANCISCO LOURENCO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 312,
            'nm_psgr' => 'PAULO ROBERTO VALLE NERY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 313,
            'nm_psgr' => 'GERALDO LUIZ PESSOA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 314,
            'nm_psgr' => 'ANTONIO BARREIROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 315,
            'nm_psgr' => 'MARCELO MONTEIRO VIANNA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 316,
            'nm_psgr' => 'RONAN VALAMIEL DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-21',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 317,
            'nm_psgr' => 'JULIO CESAR JANUZZI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 318,
            'nm_psgr' => 'PEDRO ROCHA VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 319,
            'nm_psgr' => 'EXPEDITO FABIANO DA C. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 320,
            'nm_psgr' => 'EUSTAQUIO ELEUTERIO FIGUEIREDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-01-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 321,
            'nm_psgr' => 'MAURILIO SEBASTIAO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 322,
            'nm_psgr' => 'FRANCISCO DE ASSIS R. MAIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 323,
            'nm_psgr' => 'ADALTON DA SILVA RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 324,
            'nm_psgr' => 'ADELIO DA SILVA GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 325,
            'nm_psgr' => 'GILSON PAULO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 326,
            'nm_psgr' => 'MAURILIO SANTOS OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 327,
            'nm_psgr' => 'ANTONIO DE MELLO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 328,
            'nm_psgr' => 'LUIZ GONZAGA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 329,
            'nm_psgr' => 'GERALDO GONCALVES RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 330,
            'nm_psgr' => 'FRANCISCO RODRIGUES FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 331,
            'nm_psgr' => 'PAULO RODRIGUES DE MIRANDA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 332,
            'nm_psgr' => 'PAULO ROBERTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 333,
            'nm_psgr' => 'LUIZ ANGELO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 334,
            'nm_psgr' => 'ANTONIO DELPENHO F. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 335,
            'nm_psgr' => 'JOSE MARIA DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 336,
            'nm_psgr' => 'JOSE COSTA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 337,
            'nm_psgr' => 'JOSE MARIA ANGELO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 338,
            'nm_psgr' => 'JOAQUIM ALVES SOBRINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 339,
            'nm_psgr' => 'FLAVIO LOPES RAMALHO NOVAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 340,
            'nm_psgr' => 'ANTONIO GUEDES MIQUELINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 341,
            'nm_psgr' => 'GERALDO CESAR P DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 342,
            'nm_psgr' => 'ROMILDO MARTINS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 343,
            'nm_psgr' => 'BENEDITO ASSIS DE VASCONCELOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 344,
            'nm_psgr' => 'JOSE GONCALVES PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 345,
            'nm_psgr' => 'ANTONIO GONCALVES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 346,
            'nm_psgr' => 'LEONIDAS CARVALHO BIGNOTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 347,
            'nm_psgr' => 'MARCO ANTERO MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-04-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 348,
            'nm_psgr' => 'ALOISIO ARANTES GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-05-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 349,
            'nm_psgr' => 'MAURICIO DIEGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-05-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 350,
            'nm_psgr' => 'PAULO AFFONSO BIZAGGIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-05-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 351,
            'nm_psgr' => 'NILDSON SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-05-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 352,
            'nm_psgr' => 'WILSON RIBEIRO DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-05-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 353,
            'nm_psgr' => 'JOAO JOSE DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 354,
            'nm_psgr' => 'AMARILDO GALDINO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 355,
            'nm_psgr' => 'MARCELINO PIMENTEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 356,
            'nm_psgr' => 'MARIO LUCIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 357,
            'nm_psgr' => 'ANTONIO DE PADUA DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 358,
            'nm_psgr' => 'JOSE GERALDO QUETZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 359,
            'nm_psgr' => 'JOSE LUIZ SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 360,
            'nm_psgr' => 'PEDRO CESAR SINHOROTO MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 361,
            'nm_psgr' => 'MARCIO LOPES DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 362,
            'nm_psgr' => 'CARLOS ALBERTO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 363,
            'nm_psgr' => 'CARLOS AUGUSTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 364,
            'nm_psgr' => 'CARLOS PINTO SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 365,
            'nm_psgr' => 'MARCIO LUIZ VARGAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 366,
            'nm_psgr' => 'ISRAEL ASSUNCAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-08-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 367,
            'nm_psgr' => 'JOAO OCALINO MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 368,
            'nm_psgr' => 'ROBERTO COUTINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 369,
            'nm_psgr' => 'SEBASTIAO MORAIS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 370,
            'nm_psgr' => 'CARLOS MIRANDA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 371,
            'nm_psgr' => 'ALOISIO CARLOS SALLES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 372,
            'nm_psgr' => 'JOSE EFIGENIO DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 373,
            'nm_psgr' => 'CARLOS ALBERTO AMBROSIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 374,
            'nm_psgr' => 'JOSE RAIMUNDO PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 375,
            'nm_psgr' => 'JOSE RUFINO BATISTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 376,
            'nm_psgr' => 'CARLOS VENTURA AMBROSIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 377,
            'nm_psgr' => 'PAULO ROBERTO ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 378,
            'nm_psgr' => 'CLAUDIO CARVALHO CUNHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 379,
            'nm_psgr' => 'JORGE WILLANS G. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 380,
            'nm_psgr' => 'JOSE ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 381,
            'nm_psgr' => 'CARLOS GALHARDO MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 382,
            'nm_psgr' => 'EDISON JACY DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 383,
            'nm_psgr' => 'JOSE CARLOS BASTOS DE MORAIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 384,
            'nm_psgr' => 'LUIZ CARLOS RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 385,
            'nm_psgr' => 'MARCIO DA SILVA XAVIER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 386,
            'nm_psgr' => 'LUIZ LUCAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 387,
            'nm_psgr' => 'LUIS CLAUDIO NOVAES MATOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 388,
            'nm_psgr' => 'NELSON GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 389,
            'nm_psgr' => 'JOAO BATISTA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 390,
            'nm_psgr' => 'JOAO GARCIA DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 391,
            'nm_psgr' => 'PAULO ROBERTO SCORALICK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 392,
            'nm_psgr' => 'SEBASTIAO JOAQUIM DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 393,
            'nm_psgr' => 'ANTONIO TRAJANO RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-11-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 394,
            'nm_psgr' => 'LUIZ DE SOUZA P. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-03',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 395,
            'nm_psgr' => 'NIVALDINO LUIZ DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 396,
            'nm_psgr' => 'GERALDO TRINDADE DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 397,
            'nm_psgr' => 'CLAUDIO JORGE LUCIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 398,
            'nm_psgr' => 'JOAO LUCAS DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 399,
            'nm_psgr' => 'AYLTON DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 400,
            'nm_psgr' => 'MARCOS CARNEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 401,
            'nm_psgr' => 'JOSE LUIZ SPERANDIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 402,
            'nm_psgr' => 'IVO JOSE DANTAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 403,
            'nm_psgr' => 'LUIZ CARLOS MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-12-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 404,
            'nm_psgr' => 'JOSE MARIA ALVES GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 405,
            'nm_psgr' => 'WILSON VASCONCELOS DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-02-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 406,
            'nm_psgr' => 'GERALDO AFONSO ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1958-03-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 407,
            'nm_psgr' => 'TEREZINHA MARIA T. REBOUCAS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1958-07-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 408,
            'nm_psgr' => 'IVANIA MARIA ANDRADE CESARINI',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1958-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 409,
            'nm_psgr' => 'ANGELA BEATRIZ NAZARENO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1959-09-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 410,
            'nm_psgr' => 'JORGE EUSTAQUIO HEREDIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 411,
            'nm_psgr' => 'LUIZ MARCELO AUGUSTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 412,
            'nm_psgr' => 'RICARDO SOARES RIBEIRO PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-01-20',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 413,
            'nm_psgr' => 'MARCIO LUIZ TOSTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 414,
            'nm_psgr' => 'MAURICIO DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 415,
            'nm_psgr' => 'PEDRO CORREA PINTO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 416,
            'nm_psgr' => 'PAULO VIDAL DE ALCANTARA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 417,
            'nm_psgr' => 'DOMICIANO BERTANTE DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 418,
            'nm_psgr' => 'JOSE MARIA PIMENTEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 419,
            'nm_psgr' => 'GERALDO SOTERO LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 420,
            'nm_psgr' => 'JOSE CARLOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 421,
            'nm_psgr' => 'SERGIO LUIZ GUEDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 422,
            'nm_psgr' => 'NILSON MARY DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 423,
            'nm_psgr' => 'ANTONIO CARLOS M. DE AZEVEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 424,
            'nm_psgr' => 'JOSE FERREIRA LAVECCHIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 425,
            'nm_psgr' => 'FRANCISCO CARLOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 426,
            'nm_psgr' => 'IVAIR CESARIO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 427,
            'nm_psgr' => 'LUIZ CARLOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 428,
            'nm_psgr' => 'MARCIO ANTONIO AFFONSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 429,
            'nm_psgr' => 'JOSE ROMERO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-03-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 430,
            'nm_psgr' => 'APARECIDO VENTURA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 431,
            'nm_psgr' => 'ALTAMIRO GERALDO DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 432,
            'nm_psgr' => 'AUGUSTO MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 433,
            'nm_psgr' => 'ADEIR CONCEICAO SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 434,
            'nm_psgr' => 'RONALDO CAMPOS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 435,
            'nm_psgr' => 'MEM DE SA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 436,
            'nm_psgr' => 'ORLANDO DE SOUZA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 437,
            'nm_psgr' => 'GERALDO FRANCISCO PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 438,
            'nm_psgr' => 'JOSE MARIA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 439,
            'nm_psgr' => 'JAIR DE ANDRADE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 440,
            'nm_psgr' => 'OTACILIO PAULINO DA MOTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 441,
            'nm_psgr' => 'JOSE DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 442,
            'nm_psgr' => 'ANTONIO CELESTINO AFONSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 443,
            'nm_psgr' => 'PAULO ROBERTO F. DE AZEVEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 444,
            'nm_psgr' => 'NELSON TEIXEIRA DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 445,
            'nm_psgr' => 'SEBASTIAO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 446,
            'nm_psgr' => 'LUIZ APARECIDO GARCIA ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 447,
            'nm_psgr' => 'PAULO HENRIQUE LEONEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-06-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 448,
            'nm_psgr' => 'NILSON FONSECA MIGUEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-06-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 449,
            'nm_psgr' => 'ELMO RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-06-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 450,
            'nm_psgr' => 'DECIO MOREIRA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-06-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 451,
            'nm_psgr' => 'JAQUES NETO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-06-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 452,
            'nm_psgr' => 'JOSE LOURENCO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-07-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 453,
            'nm_psgr' => 'ANTORILDO LADISLAU',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-07-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 454,
            'nm_psgr' => 'PAULO RUBENS VICTORIO COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-07-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 455,
            'nm_psgr' => 'JOSE MARIA DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-07-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 456,
            'nm_psgr' => 'JOAO GERALDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 457,
            'nm_psgr' => 'AILTON DE SOUZA XAVIER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 458,
            'nm_psgr' => 'IVAIR LEOPOLDINO DE MEIRELES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 459,
            'nm_psgr' => 'JOSE VICENTE TEIXEIRA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 460,
            'nm_psgr' => 'EDSON BRASIL DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 461,
            'nm_psgr' => 'FRANCISCO XAVIER LAINA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 462,
            'nm_psgr' => 'CESAR ALENCAR RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 463,
            'nm_psgr' => 'HELIO ALVIM FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 464,
            'nm_psgr' => 'DIVINO ARRUDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 465,
            'nm_psgr' => 'JOSE FRANCISCO DE MELO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 466,
            'nm_psgr' => 'EDSON ALVES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 467,
            'nm_psgr' => 'JOAO TIAGO NORATO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-29',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 468,
            'nm_psgr' => 'GILSON OSMAR FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-29',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 469,
            'nm_psgr' => 'JOSE CORREA NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-09-29',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 470,
            'nm_psgr' => 'PAULO CESAR PECIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 471,
            'nm_psgr' => 'EDUARDO MARTINS NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 472,
            'nm_psgr' => 'LUIZ CARLOS DE ASSIS CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 473,
            'nm_psgr' => 'JOSE FIRMINO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 474,
            'nm_psgr' => 'GERALDINO DE MORAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 475,
            'nm_psgr' => 'MARCELO REGINALDO DE LOUREIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 476,
            'nm_psgr' => 'AMAURI MARCOS RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 477,
            'nm_psgr' => 'NIVEO ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 478,
            'nm_psgr' => 'ALMIR MACIEL FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-10-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 479,
            'nm_psgr' => 'JOAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 480,
            'nm_psgr' => 'HELIO TEIXEIRA PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 481,
            'nm_psgr' => 'ANTONIO CARLOS PRIAMO BELLEI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 482,
            'nm_psgr' => 'JOSE ANTONIO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 483,
            'nm_psgr' => 'ANTONIO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 484,
            'nm_psgr' => 'ADILSON DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 485,
            'nm_psgr' => 'CARLOS ALBERTO DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-11-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 486,
            'nm_psgr' => 'JOAO LUIZ DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 487,
            'nm_psgr' => 'JORGE MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 488,
            'nm_psgr' => 'ISRAEL JOSE COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 489,
            'nm_psgr' => 'SERGIO JUSTINIANO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 490,
            'nm_psgr' => 'WANDERLEI JORGE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 491,
            'nm_psgr' => 'ANDRE LUIZ FERREIRA DE S. ANNA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-12-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 492,
            'nm_psgr' => 'SILVIO ROMERO DA SILVA GUEDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 493,
            'nm_psgr' => 'RENATO JOSE DE OLIVEIRA MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 494,
            'nm_psgr' => 'MARCOS BENITEZ DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-05-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 495,
            'nm_psgr' => 'JOSE EDUARDO PENNA BASTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 496,
            'nm_psgr' => 'LAERCIO PERON MACIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 497,
            'nm_psgr' => 'LUIZ ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 498,
            'nm_psgr' => 'EDMILSON GOMES BARRETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-02-17',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 499,
            'nm_psgr' => 'DUARTE MARCELINO LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-07-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 500,
            'nm_psgr' => 'JOSE HENRIQUE DE O. VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1959-04-14',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 501,
            'nm_psgr' => 'GLORIA MARIA DO NASCIMENTO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1959-08-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 502,
            'nm_psgr' => 'EDSON ROBERTO BELIGOLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-09-15',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 503,
            'nm_psgr' => 'SIDNEY APARECIDO DE O. GUERRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-09-15',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 504,
            'nm_psgr' => 'VALDEMAR CAMPOS SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 505,
            'nm_psgr' => 'LUIZ ANTONIO AUGUSTO DUQUE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 506,
            'nm_psgr' => 'VALDIR DIAS PINTO P. JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 507,
            'nm_psgr' => 'MAURICIO GLICERIO BONFIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 508,
            'nm_psgr' => 'EDUARDO LUIZ FERREIRA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-16',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 509,
            'nm_psgr' => 'GILBERTO MANSUR MAKLA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 510,
            'nm_psgr' => 'FRANCISCO CARLOS XAVIER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 511,
            'nm_psgr' => 'EDIR JOSE PENA GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 512,
            'nm_psgr' => 'VANDERLEI DORNELAS TOMAZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 513,
            'nm_psgr' => 'VALDIR EVANGELISTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 514,
            'nm_psgr' => 'ARY BARBOSA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 515,
            'nm_psgr' => 'IVAM ROMUALDO DE AQUINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 516,
            'nm_psgr' => 'JOSIMAR BERNARDINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 517,
            'nm_psgr' => 'MILTON COUTINHO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 518,
            'nm_psgr' => 'FRANCISCO CARLOS S. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 519,
            'nm_psgr' => 'ANTONIO TADEU DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 520,
            'nm_psgr' => 'JOAO BATISTA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 521,
            'nm_psgr' => 'ANTONIO BAPTISTA DA S.SOBRINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 522,
            'nm_psgr' => 'ANTONIO CARLOS GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 523,
            'nm_psgr' => 'CARLOS ANGELO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 524,
            'nm_psgr' => 'FERNANDO ANTONIO B.MAGALHAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 525,
            'nm_psgr' => 'JOAO BATISTA NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 526,
            'nm_psgr' => 'CLOVES ANTONIO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-05-10',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 527,
            'nm_psgr' => 'JOSE CARLOS SILVEIRA BOTELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-05-10',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 528,
            'nm_psgr' => 'WALTER ANTONIO COIMBRA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-05-10',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 529,
            'nm_psgr' => 'LUIZ ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-05-10',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 530,
            'nm_psgr' => 'JOSE DA SILVA ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-06-07',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 531,
            'nm_psgr' => 'LUIZ CARLOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-07-05',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 532,
            'nm_psgr' => 'JOSE ANTONIO SANTOS PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-07-05',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 533,
            'nm_psgr' => 'MAURICIO LEONEL LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 534,
            'nm_psgr' => 'ELIEZER RIOS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 535,
            'nm_psgr' => 'FRONTINO LOPES TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 536,
            'nm_psgr' => 'CARLOS CEDRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-09-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 537,
            'nm_psgr' => 'PAULO FRANCISCO R. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-11-30',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 538,
            'nm_psgr' => 'JOSE CHAVES JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-11-30',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 539,
            'nm_psgr' => 'CELIO REINALDO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-12-20',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 540,
            'nm_psgr' => 'ANTONIO VIEIRA RODRIGUES FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-06-15',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 541,
            'nm_psgr' => 'NELSON JOSE VIEIRA DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1960-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 542,
            'nm_psgr' => 'HELEUSES CORREA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1960-05-10',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 543,
            'nm_psgr' => 'ARIOVALDO DELGADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-02-14',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 544,
            'nm_psgr' => 'MARCELO CORTES REGADAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-05-09',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 545,
            'nm_psgr' => 'JOAO RICARDO F. DO VALLE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 546,
            'nm_psgr' => 'MARILENE RANGEL',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1961-08-29',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 547,
            'nm_psgr' => 'JOSE OCTAVIO MATOZINHOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-12-19',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 548,
            'nm_psgr' => 'NILSON VICENTE SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 549,
            'nm_psgr' => 'SEBASTIAO GONCALVES FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 550,
            'nm_psgr' => 'RONALDO RODRIGUES DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 551,
            'nm_psgr' => 'JOSE MARIA BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 552,
            'nm_psgr' => 'MARCIO MENDES GENILHU',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 553,
            'nm_psgr' => 'MOACIR ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-03-30',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 554,
            'nm_psgr' => 'WAGNER MENDES RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-03-30',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 555,
            'nm_psgr' => 'MARCELO DE SOUZA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-04-03',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 556,
            'nm_psgr' => 'PAULO JOSE GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-04-11',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 557,
            'nm_psgr' => 'JOAO CARLOS DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-05-09',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 558,
            'nm_psgr' => 'LUIZ GONZAGA DE CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-06-18',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 559,
            'nm_psgr' => 'GIL AURELIO BENTO RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-06-18',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 560,
            'nm_psgr' => 'MARCIO ANGELO DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-08-29',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 561,
            'nm_psgr' => 'MARCIO REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-08-29',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 562,
            'nm_psgr' => 'JOAO BOSCO LOURENCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-08-29',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 563,
            'nm_psgr' => 'JOSE MEIRELES FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-09-26',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 564,
            'nm_psgr' => 'DANIEL VAZ DA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-10-24',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 565,
            'nm_psgr' => 'LAUDELINO ZEFERINO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-10-24',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 566,
            'nm_psgr' => 'NIVALDO JOSE BATISTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 567,
            'nm_psgr' => 'MARIZA ROCHA LIMA DE HOLLANDA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1961-01-17',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 568,
            'nm_psgr' => 'LUIZ ALEXANDRE DOMITH',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-02-14',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 569,
            'nm_psgr' => 'MARIO LUIS DE SOUSA BOMFIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-03-30',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 570,
            'nm_psgr' => 'EVANDRO CASIMIRO JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-04-11',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 571,
            'nm_psgr' => 'AMAURI MENDES ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1961-01-25',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 572,
            'nm_psgr' => 'JOSE ANTONIO LEAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 573,
            'nm_psgr' => 'HAMILTON BALTAZAR DA NOBREGA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-01-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 574,
            'nm_psgr' => 'ANIZIO DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 575,
            'nm_psgr' => 'RUI CESAR FARIAS DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 576,
            'nm_psgr' => 'JOSEMIR SEBASTIAO PIMENTEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-01-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 577,
            'nm_psgr' => 'FRANCISCO DE PAULA ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-01-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 578,
            'nm_psgr' => 'ANDRE LUIZ DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 579,
            'nm_psgr' => 'GABRIEL SENNA DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 580,
            'nm_psgr' => 'FRANCISCO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 581,
            'nm_psgr' => 'JORGE LUIS DE AQUINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-05-08',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 582,
            'nm_psgr' => 'RICARDO BRAZ FONSECA DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-07-03',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 583,
            'nm_psgr' => 'WALTER PEREIRA RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-07-31',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 584,
            'nm_psgr' => 'ANDERSON LUIZ PINTO DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-08-28',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 585,
            'nm_psgr' => 'MARIO MESSIAS BASTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-11-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 586,
            'nm_psgr' => 'JOSE HIDERALDO SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-12-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 587,
            'nm_psgr' => 'MARCONDES ANTINOPOL.DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 588,
            'nm_psgr' => 'JOSE GERALDO CASTRO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-06-05',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 589,
            'nm_psgr' => 'JOSE EDUARDO DE CASTRO BIANCHI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-12-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 590,
            'nm_psgr' => 'SCYLLAS CANDIDO S. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-12-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 591,
            'nm_psgr' => 'ADINALDO FERREIRA NG',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-09-01',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 592,
            'nm_psgr' => 'GERALDO AGOSTINHO NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 593,
            'nm_psgr' => 'RENAN RIBEIRO VARANDAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 594,
            'nm_psgr' => 'CARLOS ALBERTO R. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 595,
            'nm_psgr' => 'MAGNO ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 596,
            'nm_psgr' => 'AFRANIO TRINDADE JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-04-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 597,
            'nm_psgr' => 'PAULO FERNANDO TEIXEIRA SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-07-03',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 598,
            'nm_psgr' => 'JOSE ROBERTO DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-05-08',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 599,
            'nm_psgr' => 'WALTER PINTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1962-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 600,
            'nm_psgr' => 'NESTOR AUGUSTO DE S. BAPTISTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-04-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 601,
            'nm_psgr' => 'MARCELO DE PAIVA MACEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-04-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 602,
            'nm_psgr' => 'AXEL ELIEZER STEIN',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-05-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 603,
            'nm_psgr' => 'ACACIO RIBEIRO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-06-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 604,
            'nm_psgr' => 'ELDER SANTOS BARINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-09-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 605,
            'nm_psgr' => 'GUMERCINO SOARES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-09-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 606,
            'nm_psgr' => 'DOMINGOS SAVIO V. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-09-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 607,
            'nm_psgr' => 'LUCIANO DO CARMO DA SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-09-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 608,
            'nm_psgr' => 'GERALDO AURELIO TOLENTINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-10-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 609,
            'nm_psgr' => 'HELDER MAIA DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-10-22',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 610,
            'nm_psgr' => 'HUMBERTO MACHADO DA FONSECA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1963-11-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 611,
            'nm_psgr' => 'MILTON FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 612,
            'nm_psgr' => 'ELTON FERREIRA MACIEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-12-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 613,
            'nm_psgr' => 'GERALDO C. DA SILVA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-12-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 614,
            'nm_psgr' => 'ISMAEL PINTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-12-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 615,
            'nm_psgr' => 'MARIA DE FATIMA A. CANDIDO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1963-01-15',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 616,
            'nm_psgr' => 'JOSE LEOPOLDO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-01-15',
            'cd_pais' => 'LB',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 617,
            'nm_psgr' => 'SERGIO RICARDO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-01-15',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 618,
            'nm_psgr' => 'JOSE FRANCISCO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-10-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 619,
            'nm_psgr' => 'ANTONIO FABIANO BARRA PORTES',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1963-06-04',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 620,
            'nm_psgr' => 'JOSE FRANCISCO VITALE MURIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1963-08-27',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 621,
            'nm_psgr' => 'CARLOS ALBERTO COSTA DINIZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 622,
            'nm_psgr' => 'NISIO GLANZMANN JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-01-14',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 623,
            'nm_psgr' => 'SAULO TEIXEIRA COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-01-14',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 624,
            'nm_psgr' => 'GERALDO LUIZ PEREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-04-07',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 625,
            'nm_psgr' => 'EDMAR MACHADO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-05-05',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 626,
            'nm_psgr' => 'JOSE DIAS SOBRINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-06-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 627,
            'nm_psgr' => 'ANTONIO CARLOS FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 628,
            'nm_psgr' => 'IRINEU BATISTA LANDIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 629,
            'nm_psgr' => 'AURELIO JOSE CANDIDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 630,
            'nm_psgr' => 'DELQUIDES JOSE SOARES FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 631,
            'nm_psgr' => 'JOSE ANTONIO DOS R. FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 632,
            'nm_psgr' => 'JURANDY CAVANELLAS NEDER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 633,
            'nm_psgr' => 'OSVAIR ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-08-25',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 634,
            'nm_psgr' => 'ANTONIO DE OLIVEIRA SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-08-25',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 635,
            'nm_psgr' => 'ANSELMO VIEIRA BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-09-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 636,
            'nm_psgr' => 'NELSON BOLOTARI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-09-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 637,
            'nm_psgr' => 'AFONSO RIBEIRO DINIZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-01',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 638,
            'nm_psgr' => 'PAULO ROBERTO AUGUSTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 639,
            'nm_psgr' => 'HILDEBRANDO ROSA NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 640,
            'nm_psgr' => 'PAULO ONOFRE DIAS LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 641,
            'nm_psgr' => 'WILSON MENDES OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 642,
            'nm_psgr' => 'MARCOS ANTONIO ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 643,
            'nm_psgr' => 'ODAIR TOSTES DE DEUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 644,
            'nm_psgr' => 'FABIO ALVES DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 645,
            'nm_psgr' => 'GETULIO DEUSDETE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 646,
            'nm_psgr' => 'COSME PEREIRA DE RESENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 647,
            'nm_psgr' => 'OSMAR NICOLAU DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 648,
            'nm_psgr' => 'LUIZ CLAUDIO CARMO OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 649,
            'nm_psgr' => 'MARCIO ANTONIO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 650,
            'nm_psgr' => 'JOAO LINO DE OLIVEIRA SOBRINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 651,
            'nm_psgr' => 'JAIME MONTEIRO DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 652,
            'nm_psgr' => 'EDSON NOCELLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 653,
            'nm_psgr' => 'EDSON PEREIRA DE AMORIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 654,
            'nm_psgr' => 'LAECIO MENDES ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 655,
            'nm_psgr' => 'FRANCISCO A. DA COSTA RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 656,
            'nm_psgr' => 'LUIZ CARLOS DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-12-15',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 657,
            'nm_psgr' => 'ADALTON ROTONDO ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-01-12',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 658,
            'nm_psgr' => 'EDSON MRAD DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-06-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 659,
            'nm_psgr' => 'WANDERSON GUEDES TERROR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-11-29',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 660,
            'nm_psgr' => 'ANTONIO CARLOS DO VALLE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1964-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 661,
            'nm_psgr' => 'MARIANGELA MAIA VASCONCELLOS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1964-06-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 662,
            'nm_psgr' => 'EMERSON DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 663,
            'nm_psgr' => 'JOSE CALAZANS NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-02-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 664,
            'nm_psgr' => 'MAURICIO BATISTA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-02-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 665,
            'nm_psgr' => 'NEIMAR DE SOUZA AMORIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-02-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 666,
            'nm_psgr' => 'CARLOS GERALDO SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 667,
            'nm_psgr' => 'CORACI GONCALVES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 668,
            'nm_psgr' => 'PAULO HENRIQUE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 669,
            'nm_psgr' => 'LUCIANO ROSA QUINTAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 670,
            'nm_psgr' => 'CUSTODIO PAULO C. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 671,
            'nm_psgr' => 'MIGUEL ARCANJO MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 672,
            'nm_psgr' => 'PAULO ROBERTO FERREIRA MALTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 673,
            'nm_psgr' => 'ROGERIO VALLE BRANDAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 674,
            'nm_psgr' => 'LIBERIO APARECIDO SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 675,
            'nm_psgr' => 'VAIR GONCALVES DE LISBOA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 676,
            'nm_psgr' => 'ALOISIO GUEDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 677,
            'nm_psgr' => 'UILSON JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 678,
            'nm_psgr' => 'IVAIR ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-10',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 679,
            'nm_psgr' => 'PAULO MARCIO SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-22',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 680,
            'nm_psgr' => 'LIDUINO MANUEL DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-22',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 681,
            'nm_psgr' => 'GERALDO RAFAEL DINIZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-22',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 682,
            'nm_psgr' => 'JOAO LOURENCO SIPRIANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 683,
            'nm_psgr' => 'GUSTAVO ERNESTO DE C. JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 684,
            'nm_psgr' => 'SERGIO LUIZ MOTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 685,
            'nm_psgr' => 'VANDERLUCI ISABEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 686,
            'nm_psgr' => 'ANTONIO PEDRO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 687,
            'nm_psgr' => 'FLAVIO AUGUSTO COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 688,
            'nm_psgr' => 'ANTONIO ONOFRE DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 689,
            'nm_psgr' => 'LADISLAU JOSE MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-10-19',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 690,
            'nm_psgr' => 'GENESIO APARECIDO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-10-19',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 691,
            'nm_psgr' => 'ANTONIO AFONSO CARLOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-11-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 692,
            'nm_psgr' => 'ILTON ALBERTO DALPRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-11-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 693,
            'nm_psgr' => 'HELIO BITTENCOURT MAGALHAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 694,
            'nm_psgr' => 'GILSON LOURENCO CARNEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 695,
            'nm_psgr' => 'ADILSON ISIDORIO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 696,
            'nm_psgr' => 'PAULO ROBERTO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 697,
            'nm_psgr' => 'HAMILTON TEIXEIRA DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 698,
            'nm_psgr' => 'ANATALINO ANANIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 699,
            'nm_psgr' => 'FRANCISCO DE ASSIS DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 700,
            'nm_psgr' => 'JOAO BATISTA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 701,
            'nm_psgr' => 'JOSE MARIA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 702,
            'nm_psgr' => 'OSWALDO DA SILVA BALBINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 703,
            'nm_psgr' => 'ADOLFO JOSE DE BARROS LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-02-09',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 704,
            'nm_psgr' => 'ANTONIO EDUARDO DE N. FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 705,
            'nm_psgr' => 'RALF LOPES DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-01-11',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 706,
            'nm_psgr' => 'FRANCISCO CARLOS MOREIRA RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 707,
            'nm_psgr' => 'HELIO FERREIRA DE AMORIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-04-06',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 708,
            'nm_psgr' => 'ALTAIR PEDRO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-06-01',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 709,
            'nm_psgr' => 'IZIDORO ROMAO LESSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-06-01',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 710,
            'nm_psgr' => 'JOSE FERREIRA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-06-29',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 711,
            'nm_psgr' => 'MAURICIO DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-06-29',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 712,
            'nm_psgr' => 'JOSE WERNECK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 713,
            'nm_psgr' => 'DILERMANDO CRUZ FIGUEIREDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 714,
            'nm_psgr' => 'IVAN RIBEIRO DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 715,
            'nm_psgr' => 'ANTONIO CARLOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 716,
            'nm_psgr' => 'NELSON MARSAL DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 717,
            'nm_psgr' => 'LUIZ CARLOS MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 718,
            'nm_psgr' => 'ANTONIO CARLOS CONSTANTINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 719,
            'nm_psgr' => 'PEDRO JOVIANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-07-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 720,
            'nm_psgr' => 'JOSE ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-08-24',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 721,
            'nm_psgr' => 'WALDIR LUCIO LESSA BARRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-08-24',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 722,
            'nm_psgr' => 'GILSON OLIVEIRA LEOCADIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1965-09-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 723,
            'nm_psgr' => 'EDWARD ENGRACIO COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 724,
            'nm_psgr' => 'LUIZ CARLOS BARINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 725,
            'nm_psgr' => 'ITAMAR JOSE DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 726,
            'nm_psgr' => 'JOAQUIM FRANCISCO TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 727,
            'nm_psgr' => 'ANTONIO ROMAO LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 728,
            'nm_psgr' => 'JOSE GERALDO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 729,
            'nm_psgr' => 'JOSUE SIMOES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 730,
            'nm_psgr' => 'JURACY FERREIRA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 731,
            'nm_psgr' => 'JOSE IGNACIO VIEIRA JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 732,
            'nm_psgr' => 'ANTONIO CARLOS DIOL. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 733,
            'nm_psgr' => 'MARCOS SANTOS DE MELLO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 734,
            'nm_psgr' => 'HENRIQUE GABRIEL ZANCANELLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 735,
            'nm_psgr' => 'AMARILDO ANANIAS ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 736,
            'nm_psgr' => 'ANTONIO SABINO SILVA NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-04-05',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 737,
            'nm_psgr' => 'ANTONIO CARLOS DOMIC. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-04-05',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 738,
            'nm_psgr' => 'JOSE GERALDO GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 739,
            'nm_psgr' => 'ADEMIR RODRIGUES ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-31',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 740,
            'nm_psgr' => 'ROQUE PEDRO DE ANDRADE FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-31',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 741,
            'nm_psgr' => 'ANTONIO MARIANO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 742,
            'nm_psgr' => 'PAULO RAYMUNDO P. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 743,
            'nm_psgr' => 'MARCO ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 744,
            'nm_psgr' => 'ADILSON DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-08-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 745,
            'nm_psgr' => 'AFONSO ONOFRE DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-08-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 746,
            'nm_psgr' => 'LUIS CLAUDIO B. THEODORO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-08-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 747,
            'nm_psgr' => 'RUI MANOEL CANTARELI ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-08-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 748,
            'nm_psgr' => 'JARBAS MARTINS COELHO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-09-24',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 749,
            'nm_psgr' => 'JORGE PINTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-10-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 750,
            'nm_psgr' => 'MIGUEL ARCANJO DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-11-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 751,
            'nm_psgr' => 'SERGIO ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-12-13',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 752,
            'nm_psgr' => 'MARCUS VINICIUS B. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-01-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 753,
            'nm_psgr' => 'GEISLER RODRIGUES CARNOT',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-01-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 754,
            'nm_psgr' => 'JOAO PAULO DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-01-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 755,
            'nm_psgr' => 'IVAN NERY DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 756,
            'nm_psgr' => 'JOSE PINHEIRO MONTEIRO JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-31',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 757,
            'nm_psgr' => 'JOAO BAPTISTA DAIBERT',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-12-13',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 758,
            'nm_psgr' => 'CLOVIS NERY ESTEVES DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-02-12',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 759,
            'nm_psgr' => 'PIO DE SOUZA NOGUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 760,
            'nm_psgr' => 'ELCIO TORRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-05-31',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 761,
            'nm_psgr' => 'MIGUEL ANTONIO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1966-08-23',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 762,
            'nm_psgr' => 'ROSSANA MONTEIRO C. SEIXAS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1966-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 763,
            'nm_psgr' => 'ROGERIO DA ROCHA GALO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-04-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 764,
            'nm_psgr' => 'JOSE ANTONIO CUSTODIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-04-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 765,
            'nm_psgr' => 'FRANCISCO PEREIRA DO VALE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-04-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 766,
            'nm_psgr' => 'LUIZ MARCIO DE BRITTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 767,
            'nm_psgr' => 'WAGNER JOSE BORGES DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 768,
            'nm_psgr' => 'JOSE MARIA NOVATO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 769,
            'nm_psgr' => 'JOSE RICARDO BERBERICK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-07-25',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 770,
            'nm_psgr' => 'JOSIMIR TARCISIO STEPHAN',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 771,
            'nm_psgr' => 'AFONSO MARIA CARDOSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 772,
            'nm_psgr' => 'MURILO NEDER DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 773,
            'nm_psgr' => 'JONAS DOS SANTOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 774,
            'nm_psgr' => 'SERGIO AUGUSTO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 775,
            'nm_psgr' => 'JOSE ANTONIO MOTA E SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 776,
            'nm_psgr' => 'LUIS ALBERTO LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-09-03',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 777,
            'nm_psgr' => 'MARCO AURELIO OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-09-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 778,
            'nm_psgr' => 'JOSE LUIZ MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-09-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 779,
            'nm_psgr' => 'ALOIZIO PEREIRA DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-09-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 780,
            'nm_psgr' => 'CARLOS ANTONIO TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-10-01',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 781,
            'nm_psgr' => 'SERGIO ANTONIO SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-10-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 782,
            'nm_psgr' => 'EDMILSON DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-10-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 783,
            'nm_psgr' => 'CARLOS ALEXANDRE DE MIRANDA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1967-10-17',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 784,
            'nm_psgr' => 'CARLOS HENRIQUE GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-11-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 785,
            'nm_psgr' => 'GILSON VERISSIMO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 786,
            'nm_psgr' => 'JULIO CESAR DA SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 787,
            'nm_psgr' => 'PAULO ROBERTO V. DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 788,
            'nm_psgr' => 'JOSE MARIA AVELAR DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 789,
            'nm_psgr' => 'DARIO PEREIRA PAIXAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 790,
            'nm_psgr' => 'AMAURI DE PAULO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 791,
            'nm_psgr' => 'GERSON DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 792,
            'nm_psgr' => 'MARTINIANO MARQUES OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 793,
            'nm_psgr' => 'RINALDO ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 794,
            'nm_psgr' => 'ANSELMO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 795,
            'nm_psgr' => 'AMANTINO COUTINHO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-08-22',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 796,
            'nm_psgr' => 'MARCO AURELIO JULIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-09-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 797,
            'nm_psgr' => 'JOSE EUSTAQUIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 798,
            'nm_psgr' => 'SERGIO GERALDO M. DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-12-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 799,
            'nm_psgr' => 'JOSE LEACIR DE F. GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-10-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 800,
            'nm_psgr' => 'JOSE MARCOS THOMAZ DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 801,
            'nm_psgr' => 'JUDITH MARIA DO NASCIMENTO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1967-05-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 802,
            'nm_psgr' => 'JOSE RICARDO DE MOURA BRAGA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-05-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 803,
            'nm_psgr' => 'JAIR MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-05-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 804,
            'nm_psgr' => 'CELIO OLIVEIRA DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1967-05-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 805,
            'nm_psgr' => 'HELIO RODRIGUES PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-04-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 806,
            'nm_psgr' => 'LUIZ CARLOS TRIFILIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-01',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 807,
            'nm_psgr' => 'FRANCISCO DOMINGUES DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-08-24',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 808,
            'nm_psgr' => 'SIDNEI LUIZ DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 809,
            'nm_psgr' => 'AELCIO LIMA DUARTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 810,
            'nm_psgr' => 'RENATO GERALDO CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 811,
            'nm_psgr' => 'VANDERLEI MATEUS LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 812,
            'nm_psgr' => 'SEBASTIAO RABELLO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-03-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 813,
            'nm_psgr' => 'EDMILSON VITORIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-03-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 814,
            'nm_psgr' => 'JOSE GONCALVES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 815,
            'nm_psgr' => 'JOSE CARLOS AMBROSIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 816,
            'nm_psgr' => 'ROGERIO TOLEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-04-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 817,
            'nm_psgr' => 'LUIZ CLAUDIO A. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-05-28',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 818,
            'nm_psgr' => 'JOSE AMARILIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-06-25',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 819,
            'nm_psgr' => 'ALCIMAR ALVES SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 820,
            'nm_psgr' => 'ROBERTO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 821,
            'nm_psgr' => 'LINO DE BARROS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 822,
            'nm_psgr' => 'SEBASTIAO DE CASTRO BARRETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-08-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 823,
            'nm_psgr' => 'JOSE CELSO DE AQUINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-08-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 824,
            'nm_psgr' => 'PEDRO BARBARA DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-08-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 825,
            'nm_psgr' => 'JOSE GERALDO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-08-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 826,
            'nm_psgr' => 'JOSE LOPES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 827,
            'nm_psgr' => 'RICARDO LUIS DILLY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 828,
            'nm_psgr' => 'ADELSON MARTINS DE CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 829,
            'nm_psgr' => 'JOSE CARLOS GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 830,
            'nm_psgr' => 'JOAQUIM AGOSTINHO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-09-25',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 831,
            'nm_psgr' => 'MANOEL RODRIGUES DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 832,
            'nm_psgr' => 'CASCIO TADEU DE SA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 833,
            'nm_psgr' => 'JOSE GERALDO TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 834,
            'nm_psgr' => 'ELISIER DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 835,
            'nm_psgr' => 'GERSON WYLHER DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 836,
            'nm_psgr' => 'ALVARO MACIEL DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 837,
            'nm_psgr' => 'IDIMAR BORGES DUQUE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 838,
            'nm_psgr' => 'AMARILDO EUZEBIO ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 839,
            'nm_psgr' => 'PAULO CEZAR DE REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 840,
            'nm_psgr' => 'CLEIMAR MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 841,
            'nm_psgr' => 'ERICO JOSE VILLELA DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-12-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 842,
            'nm_psgr' => 'FABIO FERNANDES DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-12-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 843,
            'nm_psgr' => 'PAULO ROBERTO BOTEZINE SIMEAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-12-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 844,
            'nm_psgr' => 'ANTONIO PEDRO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 845,
            'nm_psgr' => 'RONALDO SIQUEIRA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 846,
            'nm_psgr' => 'LAUDIR BATISTA CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 847,
            'nm_psgr' => 'ROUSIMAR FERREIRA NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 848,
            'nm_psgr' => 'VICENTE LEOCADIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 849,
            'nm_psgr' => 'JOAO BATISTA VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 850,
            'nm_psgr' => 'JOSE GERALDO XAVIER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 851,
            'nm_psgr' => 'PEDRO AUGUSTO PASSOS DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 852,
            'nm_psgr' => 'REGIS RIBEIRO VARANDAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 853,
            'nm_psgr' => 'LUCIA HELENA C. M. DOS SANTOS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1968-04-06',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 854,
            'nm_psgr' => 'PAULO ROBERTO DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-05-28',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 855,
            'nm_psgr' => 'MARCELO TROPIA GRANJA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-06-09',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 856,
            'nm_psgr' => 'JOAO BATISTA MACHADO TAVARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-06-25',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 857,
            'nm_psgr' => 'CELSO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 858,
            'nm_psgr' => 'JOAO CARLOS DE SOUSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 859,
            'nm_psgr' => 'GLAUCO ALEXANDRE SANTOS HORTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-06-25',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 860,
            'nm_psgr' => 'JOSE ACACIO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 861,
            'nm_psgr' => 'WALDECIR RIBEIRO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-10-15',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 862,
            'nm_psgr' => 'ALOISIO NARDELLI MALTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1968-12-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 863,
            'nm_psgr' => 'GILMAR LEWER MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-07-10',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 864,
            'nm_psgr' => 'PAULO SERGIO LIMA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-03',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 865,
            'nm_psgr' => 'CARLOS ALBERTO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 866,
            'nm_psgr' => 'VALDIR DE SA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 867,
            'nm_psgr' => 'LINDOMAR DE OLIVEIRA ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 868,
            'nm_psgr' => 'MAURICIO BARROS LADEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 869,
            'nm_psgr' => 'NARDELI SAIDLER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 870,
            'nm_psgr' => 'CARLOS ALBERTO NEVES LANZIOTTI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-02-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 871,
            'nm_psgr' => 'ENIO GODINHO PORTO JUNIOR',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1969-03-04',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 872,
            'nm_psgr' => 'GIORDANO IDERAUDO CORDEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-03-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 873,
            'nm_psgr' => 'JOAO JUVENCIO RITO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-03-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 874,
            'nm_psgr' => 'EDSON CARLOS VENANCIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-03-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 875,
            'nm_psgr' => 'LUCIANO ABILIO A. DE MEIRELLES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 876,
            'nm_psgr' => 'JOSE ALVES DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 877,
            'nm_psgr' => 'ANTONIO VICOSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 878,
            'nm_psgr' => 'MARCOS ROBERTO TIAGO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 879,
            'nm_psgr' => 'PEDRO MARQUES DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 880,
            'nm_psgr' => 'GERALDO ROSA SOBRINHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-04-29',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 881,
            'nm_psgr' => 'ELCIO CARLOS DE MENEZES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-04-29',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 882,
            'nm_psgr' => 'CRISTINO CESARIO CASSIMIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 883,
            'nm_psgr' => 'EDMAR RAYMUNDO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 884,
            'nm_psgr' => 'SEBASTIAO LAURINDO DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 885,
            'nm_psgr' => 'ZALDIVAR VIRGOLINO SERAFIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 886,
            'nm_psgr' => 'OSVALDO DA CUNHA PACHECO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 887,
            'nm_psgr' => 'JOSE CARLOS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 888,
            'nm_psgr' => 'JOSE ALVES MIRANDA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 889,
            'nm_psgr' => 'SANTOS JOSE DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 890,
            'nm_psgr' => 'PAULO EDUARDO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 891,
            'nm_psgr' => 'RONNIE CARLOS RAMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-08',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 892,
            'nm_psgr' => 'JOAO BATISTA DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-08',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 893,
            'nm_psgr' => 'SEBASTIAO RAIMUNDO NETTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-24',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 894,
            'nm_psgr' => 'LUIZ EDUARDO DA SILVA BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 895,
            'nm_psgr' => 'GIUMAR DEOLINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 896,
            'nm_psgr' => 'MILTON DA CUNHA BORBA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-28',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 897,
            'nm_psgr' => 'ELIZIO FRANCISCO CANEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-07-10',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 898,
            'nm_psgr' => 'OTTO CRIVELLARI JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-03',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 899,
            'nm_psgr' => 'EVALDO MOTA MAGALHAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-03',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 900,
            'nm_psgr' => 'BEN-HUR DIAS DA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-19',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 901,
            'nm_psgr' => 'VICENTE DE PAULO F. PITTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-19',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 902,
            'nm_psgr' => 'RONALD MARCOS DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-23',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 903,
            'nm_psgr' => 'JOSE GERALDO DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-23',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 904,
            'nm_psgr' => 'AMARILDO FLAVIANO NICODEMOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-27',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 905,
            'nm_psgr' => 'SILVIO RAMOS DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-31',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 906,
            'nm_psgr' => 'IVANIR ABILIO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-31',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 907,
            'nm_psgr' => 'ELMO TIBURCIO SILVERIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-09-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 908,
            'nm_psgr' => 'JOSE CARLOS MODESTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-09-16',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 909,
            'nm_psgr' => 'MARCO AURELIO M. RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-09-24',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 910,
            'nm_psgr' => 'MARCOS ANTONIO QUATORZE VOLTAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-09-28',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 911,
            'nm_psgr' => 'JOSE PIRES DE OLIVEIRA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-09-28',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 912,
            'nm_psgr' => 'JOSE WILLIAM COSTA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 913,
            'nm_psgr' => 'ADEMIR DE SOUSA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-14',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 914,
            'nm_psgr' => 'MARCOS HENRIQUES DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-18',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 915,
            'nm_psgr' => 'MARCIO LUIZ ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-18',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 916,
            'nm_psgr' => 'DIMAS CUSTODIO DE ASSIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-18',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 917,
            'nm_psgr' => 'CARLOS ROBERTO F. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 918,
            'nm_psgr' => 'JOSE ANTONIO DE AZEVEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 919,
            'nm_psgr' => 'CLAUDIO CAETANO DE FARIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 920,
            'nm_psgr' => 'ARY JOSE TEIXEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 921,
            'nm_psgr' => 'WAGNER LUIS TOSTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-26',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 922,
            'nm_psgr' => 'ANDERSON DE MENDONCA DORE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-26',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 923,
            'nm_psgr' => 'ITALO DE CARVALHO V. CAVACA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-26',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 924,
            'nm_psgr' => 'LUIZ FERNANDO CUNHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-30',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 925,
            'nm_psgr' => 'JULIO CESAR MARINHO MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-30',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 926,
            'nm_psgr' => 'NELSON ZEFERINO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-30',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 927,
            'nm_psgr' => 'VALCIMAR ANTONIO CALIXTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-11',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 928,
            'nm_psgr' => 'SEBASTIAO ADEMIR CAGNIN',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-11',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 929,
            'nm_psgr' => 'LUIZ DE CASTRO NETTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-11',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 930,
            'nm_psgr' => 'GERALDO CESAR SIMIAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-11',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 931,
            'nm_psgr' => 'LINCON LARIMEL ALVES GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-11',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 932,
            'nm_psgr' => 'GERALDO DE OLIVEIRA LULY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 933,
            'nm_psgr' => 'PAULO CESAR VARGAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 934,
            'nm_psgr' => 'VALTINO ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 935,
            'nm_psgr' => 'PAULO HENRIQUE M. PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 936,
            'nm_psgr' => 'GILSIMAR COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-11-27',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 937,
            'nm_psgr' => 'VILMAR RAIMUNDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-12-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 938,
            'nm_psgr' => 'MARCIO LUIZ GERMANO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-12-13',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 939,
            'nm_psgr' => 'LUIZ CLAUDIO DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 940,
            'nm_psgr' => 'ROBERTO CARLOS DA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 941,
            'nm_psgr' => 'PAULO CESAR C. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 942,
            'nm_psgr' => 'MATIAS GERALDO DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-04-29',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 943,
            'nm_psgr' => 'MARCIO CHICRE DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 944,
            'nm_psgr' => 'MAURICIO ROMEIRO DO SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 945,
            'nm_psgr' => 'FRANCISCO QUERINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-31',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 946,
            'nm_psgr' => 'HELIO FERREIRA NETTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-07-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 947,
            'nm_psgr' => 'PAULO MEIRELLES PONTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-19',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 948,
            'nm_psgr' => 'MARCOS WADIH ARBEX',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 949,
            'nm_psgr' => 'CARLOS EDUARDO DE SOUSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-12-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 950,
            'nm_psgr' => 'ERNANI RICARDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-12-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 951,
            'nm_psgr' => 'LOURIVAL JOSE RIBEIRO CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-12-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 952,
            'nm_psgr' => 'MARCELO DE MIRANDA PONTES',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1969-12-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 953,
            'nm_psgr' => 'PAULO ROBERTO MEDEIROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 954,
            'nm_psgr' => 'FERNANDO JOSE CORREA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-04-05',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 955,
            'nm_psgr' => 'ALOISIO GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 956,
            'nm_psgr' => 'GILMAR LUIZ PRADO INHAN',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-27',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 957,
            'nm_psgr' => 'ANTONIO TOMAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-06-24',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 958,
            'nm_psgr' => 'HELIO DE PAULA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 959,
            'nm_psgr' => 'JOSE BENEDITO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 960,
            'nm_psgr' => 'LENI DIAS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 961,
            'nm_psgr' => 'JOSE PEDRO GOMES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 962,
            'nm_psgr' => 'ANTONIO PEREIRA LOPES FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 963,
            'nm_psgr' => 'EDSON TEIXEIRA SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 964,
            'nm_psgr' => 'MARCO ANTONIO MEIRELES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 965,
            'nm_psgr' => 'MANOEL JUSTINIANO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 966,
            'nm_psgr' => 'ILTON JOSE VIEIRA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 967,
            'nm_psgr' => 'JOSE ARAUJO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 968,
            'nm_psgr' => 'DIOVIGENES MIGUEL PENA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 969,
            'nm_psgr' => 'ANTONIO BATISTA DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 970,
            'nm_psgr' => 'MARCO ANTONIO DE MORAIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 971,
            'nm_psgr' => 'ARI CANDIDO DE SOUSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 972,
            'nm_psgr' => 'JOAO CICERO DE SA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 973,
            'nm_psgr' => 'PIO BATISTA DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-05-31',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 974,
            'nm_psgr' => 'NYLTON PIRILO GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-08-03',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 975,
            'nm_psgr' => 'JOEL CORREA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-04-29',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 976,
            'nm_psgr' => 'ALVARO EDUARDO MARQUES LESSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 977,
            'nm_psgr' => 'JOSE LEOPOLDO DE S. JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1969-10-18',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 978,
            'nm_psgr' => 'MARIA CRISTINA PEROTTI ALONSO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1970-03-31',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 979,
            'nm_psgr' => 'FLAVIO DE ASSUMPCAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-30',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 980,
            'nm_psgr' => 'HAROLDO GOMES NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 981,
            'nm_psgr' => 'VENERANDO FERNANDO SCORALICK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 982,
            'nm_psgr' => 'JOSE FRANCISCO N. P. DAS NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 983,
            'nm_psgr' => 'MARCUS AURELIO ILDEFONSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-02-11',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 984,
            'nm_psgr' => 'ERICO VERISSIMO SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-02-11',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 985,
            'nm_psgr' => 'JOSE RENATO DE C. NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-03-03',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 986,
            'nm_psgr' => 'WILLIAM DA SILVA ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-03-03',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 987,
            'nm_psgr' => 'ANDRE LUIZ QUATORZE VOLTAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 988,
            'nm_psgr' => 'LOURIVAL SOARES GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 989,
            'nm_psgr' => 'SEBASTIAO LEANDRO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 990,
            'nm_psgr' => 'JOSE RONALDO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-12',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 991,
            'nm_psgr' => 'VAGNER SOARES RUAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-28',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 992,
            'nm_psgr' => 'JOSE CARLOS RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-28',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 993,
            'nm_psgr' => 'LEVY FAUSTINO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-02',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 994,
            'nm_psgr' => 'NELSON VITOR R. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 995,
            'nm_psgr' => 'MILTON JOSE VICENTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 996,
            'nm_psgr' => 'ANTONIO DE PADUA DE J. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-14',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 997,
            'nm_psgr' => 'JOAO VENTURA NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-06-03',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 998,
            'nm_psgr' => 'SILVINO ANTONIO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-06-07',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 999,
            'nm_psgr' => 'JOAO LUCIO BATISTA DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-06-23',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1000,
            'nm_psgr' => 'PAULO CESAR DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-06-27',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1001,
            'nm_psgr' => 'MAURICIO ZANCANELLA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1002,
            'nm_psgr' => 'IVAN CAMPOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1003,
            'nm_psgr' => 'ANTONIO FERNANDO P. GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1004,
            'nm_psgr' => 'ALEXANDRE FERNANDES DE LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-02',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1005,
            'nm_psgr' => 'ROGERIO TEIXEIRA NUNES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1006,
            'nm_psgr' => 'LUIZ FERNANDES DO AMARAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1007,
            'nm_psgr' => 'ANDRE CANDIDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-30',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1008,
            'nm_psgr' => 'GILBERTO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-30',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1009,
            'nm_psgr' => 'EVANDRO JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-09-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1010,
            'nm_psgr' => 'LAERTE MARCOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-09-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1011,
            'nm_psgr' => 'VALDIVINO SOARES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-09-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1012,
            'nm_psgr' => 'NILSON BOLOTARI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-09-27',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1013,
            'nm_psgr' => 'ANDRE LUIZ DECNOP DA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-10-01',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1014,
            'nm_psgr' => 'ANDRE LUIZ DE MORAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-10-01',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1015,
            'nm_psgr' => 'WAGNER ISMAEL DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-10-13',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1016,
            'nm_psgr' => 'JOSE SEVERINO DA COSTA MATOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-10-13',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1017,
            'nm_psgr' => 'GETULIO C. DE VASCONCELOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-10-29',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1018,
            'nm_psgr' => 'MILTON DE MATTOS HENRIQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1019,
            'nm_psgr' => 'JOAO FLORENTINO DE A. CUNHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-12-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1020,
            'nm_psgr' => 'MARIA DAS GRACAS DA SILVA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1971-01-09',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1021,
            'nm_psgr' => 'PEDRO RODRIGUES DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-01-13',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1022,
            'nm_psgr' => 'PAULO ROBERTO G. FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-03-03',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1023,
            'nm_psgr' => 'LEONEL MELQUISEDEQUE VICTOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-28',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1024,
            'nm_psgr' => 'NEIDER CARDOSO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-08-18',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1025,
            'nm_psgr' => 'JOSE NELSON FIGUEIREDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-11-22',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1026,
            'nm_psgr' => 'MARCELO ALVIM JORGE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-12-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1027,
            'nm_psgr' => 'SEBASTIAO GILMAR RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-01-05',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1028,
            'nm_psgr' => 'JORGE LUIZ SILVA NETTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-01-14',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1029,
            'nm_psgr' => 'SINVAL CANDIDO BOMFONTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-04-12',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1030,
            'nm_psgr' => 'ROBSON MATOSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-05-26',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1031,
            'nm_psgr' => 'VALDIR CLARINDO DULCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-06-23',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1032,
            'nm_psgr' => 'REYNALDO W. DE ARAUJO QUEIROZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-11-10',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1033,
            'nm_psgr' => 'JOSE MARIA DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-12-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1034,
            'nm_psgr' => 'GERSON FILGUEIRAS PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1970-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1035,
            'nm_psgr' => 'SERGIO RICARDO ITABORAHY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-01-13',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1036,
            'nm_psgr' => 'NELIA MARIA DOS REIS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1970-02-19',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1037,
            'nm_psgr' => 'JOSE TADEU DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-05-25',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1038,
            'nm_psgr' => 'ERCIL BRETAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-01-21',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1039,
            'nm_psgr' => 'MICHELSON SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-02-06',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1040,
            'nm_psgr' => 'EDIMAR JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-02-06',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1041,
            'nm_psgr' => 'JOSE MARIA MAGALHAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-02',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1042,
            'nm_psgr' => 'MANOEL ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-02',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1043,
            'nm_psgr' => 'CELSO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-02',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1044,
            'nm_psgr' => 'ANDERSON GROSSI VIDIGAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1045,
            'nm_psgr' => 'ANEZIO VITORINO COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-04-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1046,
            'nm_psgr' => 'MAURI SEBASTIAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-04-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1047,
            'nm_psgr' => 'JOSE MARIO ALVES DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-04-27',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1048,
            'nm_psgr' => 'JOSE MATHIAS RIBAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-05-01',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1049,
            'nm_psgr' => 'SEBASTIAO JOSE GRACA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-06-02',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1050,
            'nm_psgr' => 'PAULO CESAR ALVES DAS NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-06-02',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1051,
            'nm_psgr' => 'PAULO ROBERTO BENEDITO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-06-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1052,
            'nm_psgr' => 'JOSE CARLOS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-06-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1053,
            'nm_psgr' => 'JOSE LUIZ DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-06-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1054,
            'nm_psgr' => 'JOAO DELFINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1055,
            'nm_psgr' => 'JAILTON CONCEICAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1056,
            'nm_psgr' => 'ROGERIO R. BARBOSA DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1057,
            'nm_psgr' => 'HORACIO PIRES DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1058,
            'nm_psgr' => 'FRANCISCO JACINTO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-08-29',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1059,
            'nm_psgr' => 'LAZARO LUIZ RIBEIRO SANTIAGO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-09-26',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1060,
            'nm_psgr' => 'ORLANDO ALVES MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-10-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1061,
            'nm_psgr' => 'MARIO LUCIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-10-16',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1062,
            'nm_psgr' => 'GERALDO MAGELA WERNECK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-09',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1063,
            'nm_psgr' => 'CUSTODIO EDUARDO M. COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-09',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1064,
            'nm_psgr' => 'JOSE FRANCISCO FERREIRA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1065,
            'nm_psgr' => 'LUCIANO AUGUSTO REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1066,
            'nm_psgr' => 'EVANDRO LUIZ FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1067,
            'nm_psgr' => 'MARIA LUCIA S. NUNES',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1971-12-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1068,
            'nm_psgr' => 'GERALDO TADEU DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-01-08',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1069,
            'nm_psgr' => 'AMAURI MATHIAS DE MATTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-01-12',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1070,
            'nm_psgr' => 'WIL ANTONIO CARVALHO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1071,
            'nm_psgr' => 'ADRIANO FERREIRA DE SANTA ANNA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-11-09',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1072,
            'nm_psgr' => 'GERALDO MAGELA NUNES DE MORAIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-01-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1073,
            'nm_psgr' => 'PAULO ROBERTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-08-29',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1074,
            'nm_psgr' => 'VANDERLEY DA SILVA BORGES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-12-19',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1075,
            'nm_psgr' => 'JAIDER DA SILVA FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-02-02',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1076,
            'nm_psgr' => 'WANDERSON DE MEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-02',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1077,
            'nm_psgr' => 'MOACIR MENDES DAS CHAGAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1971-03-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1078,
            'nm_psgr' => 'ALVARO BRAGA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-02-01',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1079,
            'nm_psgr' => 'SELBIO LUIZ LONGO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-01-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1080,
            'nm_psgr' => 'ROBERTO DE PAIVA OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-03-04',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1081,
            'nm_psgr' => 'ENRIQUE MENEZES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-03-04',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1082,
            'nm_psgr' => 'JOSE CARLOS R. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-03-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1083,
            'nm_psgr' => 'MAURICIO MARIA DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-04-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1084,
            'nm_psgr' => 'NEWTON CARVALHO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-04-09',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1085,
            'nm_psgr' => 'ILDEU CERQUEIRA SALDANHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1086,
            'nm_psgr' => 'VILSON JOSE BIANCHETTI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1087,
            'nm_psgr' => 'PAULO HENRIQUE PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-11',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1088,
            'nm_psgr' => 'EDIVALDO MARTINS RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1089,
            'nm_psgr' => 'DVALDO DE JESUS MONTEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1090,
            'nm_psgr' => 'JONAS RAFAEL DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1091,
            'nm_psgr' => 'REINALDO MOREIRA LANA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-06-04',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1092,
            'nm_psgr' => 'DIRCEU JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-06-20',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1093,
            'nm_psgr' => 'GERALDO OLIVEIRA HERCULANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1094,
            'nm_psgr' => 'FELIPE NACIF NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1095,
            'nm_psgr' => 'JOAO CICERO DA FONSECA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1096,
            'nm_psgr' => 'JOSE ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-30',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1097,
            'nm_psgr' => 'GILBERTO ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-08-19',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1098,
            'nm_psgr' => 'JOSE ALVES MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-10-10',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1099,
            'nm_psgr' => 'LUIZ MARCIO LEONEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-12-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1100,
            'nm_psgr' => 'BRUNO DE OLIVEIRA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-01-02',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1101,
            'nm_psgr' => 'ALVARO BOSCO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-01-02',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1102,
            'nm_psgr' => 'HELIO CARLOS CERQUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1103,
            'nm_psgr' => 'ADILSON BERZOINI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-02',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1104,
            'nm_psgr' => 'JAIME RESENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-07-18',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1105,
            'nm_psgr' => 'LUIZ FERNANDO M. AMARO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-10-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1106,
            'nm_psgr' => 'HEBERTH DE OLIVEIRA RESENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-10-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1107,
            'nm_psgr' => 'ROBERTO GUERRA MATOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-10-14',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1108,
            'nm_psgr' => 'DIMAS ONGARO GROPO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1109,
            'nm_psgr' => 'GERSON MONTESSI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-03-16',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1110,
            'nm_psgr' => 'JULIO CESAR LA-CORTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-05-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1111,
            'nm_psgr' => 'ANTONIO AMBROSIO SATURNINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-10-10',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1112,
            'nm_psgr' => 'OSWALDO SILVA DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1972-12-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1113,
            'nm_psgr' => 'VALERIO ALVIM FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-01-14',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1114,
            'nm_psgr' => 'CLAUDIO DOMINGOS DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-02-03',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1115,
            'nm_psgr' => 'DANIEL PEREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1116,
            'nm_psgr' => 'JORGE LUIZ MONTEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-04-12',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1117,
            'nm_psgr' => 'LUIZ CARLOS ELER PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-06-03',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1118,
            'nm_psgr' => 'GERALDO MAGELA CHIARADIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-06-03',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1119,
            'nm_psgr' => 'EVANDRO CASSIO DE P. E SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-01',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1120,
            'nm_psgr' => 'OSCAR ROBERTO DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-01',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1121,
            'nm_psgr' => 'HENRIQUE CARLOS DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-17',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1122,
            'nm_psgr' => 'DARIO SABENCA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1123,
            'nm_psgr' => 'WALMIR BARRETO MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1124,
            'nm_psgr' => 'GIOVANE DE ALMEIDA CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1125,
            'nm_psgr' => 'ATALIBA GERCOSSIMO DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1126,
            'nm_psgr' => 'NIVALDO DE SOUZA LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-09-27',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1127,
            'nm_psgr' => 'ANTONIO DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-11-06',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1128,
            'nm_psgr' => 'JULIO CEZAR DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-12-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1129,
            'nm_psgr' => 'CELSO FERREIRA JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-05-06',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1130,
            'nm_psgr' => 'LUIZ HENRIQUE DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1131,
            'nm_psgr' => 'NILSON SEBASTIAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1132,
            'nm_psgr' => 'JOSE DOS SANTOS BELCHIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-01-01',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1133,
            'nm_psgr' => 'ALEXANDRE SIMOES BEZERRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-01-01',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1134,
            'nm_psgr' => 'JOILDE AUGUSTO DE M. CORTEZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-01-05',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1135,
            'nm_psgr' => 'ROBERTO DA CRUZ SOBREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-01-13',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1136,
            'nm_psgr' => 'TARCISIO JOSE DE C. PRIAMO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1137,
            'nm_psgr' => 'JOSE LUCIANO SERPA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1138,
            'nm_psgr' => 'JOAO CARLOS DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-07-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1139,
            'nm_psgr' => 'NATANAEL FRANCISCO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1140,
            'nm_psgr' => 'FRANCISCO MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1973-10-25',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1141,
            'nm_psgr' => 'HELOISA HELENA DE R. MOREIRA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1974-04-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1142,
            'nm_psgr' => 'LUIS EDUARDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-10-08',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1143,
            'nm_psgr' => 'SAMUEL GUIMARAES SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-10-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1144,
            'nm_psgr' => 'EDUARDO HENRIQUE BITTENCOURT',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-10-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1145,
            'nm_psgr' => 'MIGUEL JANUARIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-02-02',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1146,
            'nm_psgr' => 'MAURO LUCIO RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-02-06',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1147,
            'nm_psgr' => 'ARMANDO DIAS LEONEL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-02-10',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1148,
            'nm_psgr' => 'DIRCEU AUGUSTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-14',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1149,
            'nm_psgr' => 'JOAO DE PAULA MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-04-03',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1150,
            'nm_psgr' => 'MARCELO AFONSO VICTOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1151,
            'nm_psgr' => 'REGINALDO BARBOSA DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1152,
            'nm_psgr' => 'MARCIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1153,
            'nm_psgr' => 'DIRCEU DAS DORES PEDRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1154,
            'nm_psgr' => 'EDSON MURILO ALVES VIEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-26',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1155,
            'nm_psgr' => 'ALEXANDRE LUIZ R.N. DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-07-20',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1156,
            'nm_psgr' => 'MARCOS VINICIUS DOS S. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1157,
            'nm_psgr' => 'JOSE ANTONIO HERCULANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1158,
            'nm_psgr' => 'PEDRO JUNIOR F. CERQUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-11-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1159,
            'nm_psgr' => 'CARLOS ANTONIO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-11-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1160,
            'nm_psgr' => 'SERGIO LUIS R. BERNARDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-11-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1161,
            'nm_psgr' => 'LUCIO DOS SANTOS REIS SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-11-09',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1162,
            'nm_psgr' => 'HAROLDO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-02-02',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1163,
            'nm_psgr' => 'ALTAIR GOMES PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-08-21',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1164,
            'nm_psgr' => 'MARCIO ANTONIO MATIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-12-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1165,
            'nm_psgr' => 'MARIO D ANDRIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-02-26',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1166,
            'nm_psgr' => 'SATURNINO OLIVEIRA DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-02',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1167,
            'nm_psgr' => 'JAIR JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1168,
            'nm_psgr' => 'JOSE EDISIO MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1169,
            'nm_psgr' => 'MARIO ANTONIO C. FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1170,
            'nm_psgr' => 'ADAO JOSE DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1171,
            'nm_psgr' => 'EVERALDO DAS GRACAS OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => null,
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1172,
            'nm_psgr' => 'BEIJAMIN LEITE DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1173,
            'nm_psgr' => 'JORGE ROBERTO DUARTE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-03-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1174,
            'nm_psgr' => 'ADAIR EFREN DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-04-07',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1175,
            'nm_psgr' => 'MARCIO LUCAS GONCALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1176,
            'nm_psgr' => 'LUIZ CARLOS BORGES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-10-08',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1177,
            'nm_psgr' => 'CHARLES CAMERINI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-09-18',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1178,
            'nm_psgr' => 'AILTON DINIZ PEDRAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-06-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'C',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1179,
            'nm_psgr' => 'ADRIANA NASSER',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1974-10-08',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1180,
            'nm_psgr' => 'RENATO AUGUSTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-12-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1181,
            'nm_psgr' => 'PEDRO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-12-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1182,
            'nm_psgr' => 'CLAUDIO SEVERINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-12-11',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1183,
            'nm_psgr' => 'LUIZ CARLOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1974-12-15',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => null,
        ]);

        Passenger::create([
            'cd_psgr' => 1184,
            'nm_psgr' => 'JULIO CESAR A. BARROSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 854,
        ]);

        Passenger::create([
            'cd_psgr' => 1185,
            'nm_psgr' => 'MAURICIO LEONARDO SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-02-01',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 155,
        ]);

        Passenger::create([
            'cd_psgr' => 1186,
            'nm_psgr' => 'JOSE FRANCISCO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-02-25',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 501,
        ]);

        Passenger::create([
            'cd_psgr' => 1187,
            'nm_psgr' => 'ANTONIO DONALDO DE PADUA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-03-09',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 979,
        ]);

        Passenger::create([
            'cd_psgr' => 1188,
            'nm_psgr' => 'MARCELO RODRIGUES ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-05-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 475,
        ]);

        Passenger::create([
            'cd_psgr' => 1189,
            'nm_psgr' => 'MARCIO LUIZ BROCHINI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-05-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 412,
        ]);

        Passenger::create([
            'cd_psgr' => 1190,
            'nm_psgr' => 'HERCULES GONCALVES C. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-06-17',
            'cd_pais' => 'CO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 797,
        ]);

        Passenger::create([
            'cd_psgr' => 1191,
            'nm_psgr' => 'ROBSON CAMPOS DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-06-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 778,
        ]);

        Passenger::create([
            'cd_psgr' => 1192,
            'nm_psgr' => 'NASLY DE ALMEIDA SIXEL JULIANI',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1975-07-19',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 980,
        ]);

        Passenger::create([
            'cd_psgr' => 1193,
            'nm_psgr' => 'REGINALDO MARTINS SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-09-09',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 922,
        ]);

        Passenger::create([
            'cd_psgr' => 1194,
            'nm_psgr' => 'JOSE CARLOS CAROLINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-09-09',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 965,
        ]);

        Passenger::create([
            'cd_psgr' => 1195,
            'nm_psgr' => 'SEBASTIAO ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-09-13',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 311,
        ]);

        Passenger::create([
            'cd_psgr' => 1196,
            'nm_psgr' => 'FRANCISCO CARLOS SCHEFFER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-10-07',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 707,
        ]);

        Passenger::create([
            'cd_psgr' => 1197,
            'nm_psgr' => 'PAULO SERGIO DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-10-07',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 759,
        ]);

        Passenger::create([
            'cd_psgr' => 1198,
            'nm_psgr' => 'JOSE ADMILSON FREIRE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-10-07',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 728,
        ]);

        Passenger::create([
            'cd_psgr' => 1199,
            'nm_psgr' => 'HELIO ROBERTO BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-10-07',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 734,
        ]);

        Passenger::create([
            'cd_psgr' => 1200,
            'nm_psgr' => 'ELCIO AMORIM CARDOSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-10-11',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1112,
        ]);

        Passenger::create([
            'cd_psgr' => 1201,
            'nm_psgr' => 'RUFINO DE OLIVEIRA DOMINGOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 480,
        ]);

        Passenger::create([
            'cd_psgr' => 1202,
            'nm_psgr' => 'TEOFILO GOMES CAIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 452,
        ]);

        Passenger::create([
            'cd_psgr' => 1203,
            'nm_psgr' => 'CEZAR VITAL GAUDERETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 446,
        ]);

        Passenger::create([
            'cd_psgr' => 1204,
            'nm_psgr' => 'GERALDO ALMEIDA DE REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 499,
        ]);

        Passenger::create([
            'cd_psgr' => 1205,
            'nm_psgr' => 'ANTONIO DA SILVA MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-04',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 410,
        ]);

        Passenger::create([
            'cd_psgr' => 1206,
            'nm_psgr' => 'PAULO MARTINS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 258,
        ]);

        Passenger::create([
            'cd_psgr' => 1207,
            'nm_psgr' => 'GENTIL MOREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 233,
        ]);

        Passenger::create([
            'cd_psgr' => 1208,
            'nm_psgr' => 'JOSE LUIZ DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-11-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 246,
        ]);

        Passenger::create([
            'cd_psgr' => 1209,
            'nm_psgr' => 'EDUARDO ANTONIO TIMOTHEO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 271,
        ]);

        Passenger::create([
            'cd_psgr' => 1210,
            'nm_psgr' => 'FRANCISCO CARLOS MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 299,
        ]);

        Passenger::create([
            'cd_psgr' => 1211,
            'nm_psgr' => 'WANDERLEY LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 216,
        ]);

        Passenger::create([
            'cd_psgr' => 1212,
            'nm_psgr' => 'ADILSON FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 211,
        ]);

        Passenger::create([
            'cd_psgr' => 1213,
            'nm_psgr' => 'MARCO AURELIO F. BRAGA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 246,
        ]);

        Passenger::create([
            'cd_psgr' => 1214,
            'nm_psgr' => 'LIVIO DE SOUSA MARQUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-11',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 127,
        ]);

        Passenger::create([
            'cd_psgr' => 1215,
            'nm_psgr' => 'MARCOS ROBERTO DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 718,
        ]);

        Passenger::create([
            'cd_psgr' => 1216,
            'nm_psgr' => 'RENATO MATTA DE NAZARETH',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 763,
        ]);

        Passenger::create([
            'cd_psgr' => 1217,
            'nm_psgr' => 'CLAUDIO SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 709,
        ]);

        Passenger::create([
            'cd_psgr' => 1218,
            'nm_psgr' => 'ALVINO BRUNO MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-11',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 182,
        ]);

        Passenger::create([
            'cd_psgr' => 1219,
            'nm_psgr' => 'SILVIO MATEUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-11',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 127,
        ]);

        Passenger::create([
            'cd_psgr' => 1220,
            'nm_psgr' => 'SEBASTIAO VIEIRA RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-11',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 117,
        ]);

        Passenger::create([
            'cd_psgr' => 1221,
            'nm_psgr' => 'JORGE ROMUALDO DE AQUINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-12-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 273,
        ]);

        Passenger::create([
            'cd_psgr' => 1222,
            'nm_psgr' => 'CARLOS ROBERTO S. GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-07-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 783,
        ]);

        Passenger::create([
            'cd_psgr' => 1223,
            'nm_psgr' => 'ORLANDO MECENE FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1975-02-25',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 569,
        ]);

        Passenger::create([
            'cd_psgr' => 1224,
            'nm_psgr' => 'MARCIO LUIZ ITABORAY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-06-15',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 543,
        ]);

        Passenger::create([
            'cd_psgr' => 1225,
            'nm_psgr' => 'ANGELO MARCIANO LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-06-15',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 561,
        ]);

        Passenger::create([
            'cd_psgr' => 1226,
            'nm_psgr' => 'RICARDO CAMPELO DA CONCEICAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-06-15',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 525,
        ]);

        Passenger::create([
            'cd_psgr' => 1227,
            'nm_psgr' => 'JOSE GERALDO LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 306,
        ]);

        Passenger::create([
            'cd_psgr' => 1228,
            'nm_psgr' => 'CELSO ALCENIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 374,
        ]);

        Passenger::create([
            'cd_psgr' => 1229,
            'nm_psgr' => 'JOAO BATISTA DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 328,
        ]);

        Passenger::create([
            'cd_psgr' => 1230,
            'nm_psgr' => 'GILMAR CLAUDINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 356,
        ]);

        Passenger::create([
            'cd_psgr' => 1231,
            'nm_psgr' => 'JOSE DAS GRACAS DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 338,
        ]);

        Passenger::create([
            'cd_psgr' => 1232,
            'nm_psgr' => 'CLOVIS JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 315,
        ]);

        Passenger::create([
            'cd_psgr' => 1233,
            'nm_psgr' => 'MAURILIO COSME FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 371,
        ]);

        Passenger::create([
            'cd_psgr' => 1234,
            'nm_psgr' => 'MANOELITO JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 305,
        ]);

        Passenger::create([
            'cd_psgr' => 1235,
            'nm_psgr' => 'SEBASTIAO DE CASTRO NUNES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 787,
        ]);

        Passenger::create([
            'cd_psgr' => 1236,
            'nm_psgr' => 'JULIO CESAR DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 419,
        ]);

        Passenger::create([
            'cd_psgr' => 1237,
            'nm_psgr' => 'WILSON PAULO COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 448,
        ]);

        Passenger::create([
            'cd_psgr' => 1238,
            'nm_psgr' => 'ANTONIO CARLOS P. DE SA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-02-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 452,
        ]);

        Passenger::create([
            'cd_psgr' => 1239,
            'nm_psgr' => 'LUCAS DOMINGOS DE FARIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-23',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 390,
        ]);

        Passenger::create([
            'cd_psgr' => 1240,
            'nm_psgr' => 'LUIS FERNANDO B. DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-23',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 350,
        ]);

        Passenger::create([
            'cd_psgr' => 1241,
            'nm_psgr' => 'ROSEVELTER FERREIRA MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-23',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 314,
        ]);

        Passenger::create([
            'cd_psgr' => 1242,
            'nm_psgr' => 'RAIMUNDO NONATO EUGENIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-27',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 720,
        ]);

        Passenger::create([
            'cd_psgr' => 1243,
            'nm_psgr' => 'HERMES RODRIGUES MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-04-20',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 13,
        ]);

        Passenger::create([
            'cd_psgr' => 1244,
            'nm_psgr' => 'MARCOS VINICIOS C. CAZADIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-05-18',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 835,
        ]);

        Passenger::create([
            'cd_psgr' => 1245,
            'nm_psgr' => 'JOSE WANTUIL COUTINHO FINAMORE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-08-10',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 68,
        ]);

        Passenger::create([
            'cd_psgr' => 1246,
            'nm_psgr' => 'PATRICIA FONSECA SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-09-07',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 753,
        ]);

        Passenger::create([
            'cd_psgr' => 1247,
            'nm_psgr' => 'MAURI LISBOA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-12-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 451,
        ]);

        Passenger::create([
            'cd_psgr' => 1248,
            'nm_psgr' => 'PAULO HENRIQUE DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-12-28',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 889,
        ]);

        Passenger::create([
            'cd_psgr' => 1249,
            'nm_psgr' => 'JUAREZ SILVEIRA DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-02-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 848,
        ]);

        Passenger::create([
            'cd_psgr' => 1250,
            'nm_psgr' => 'SEBASTIAO SILVA JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-15',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 593,
        ]);

        Passenger::create([
            'cd_psgr' => 1251,
            'nm_psgr' => 'MANOEL GERONIMO MARIANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-15',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 555,
        ]);

        Passenger::create([
            'cd_psgr' => 1252,
            'nm_psgr' => 'ALDENOR AVELINO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 372,
        ]);

        Passenger::create([
            'cd_psgr' => 1253,
            'nm_psgr' => 'IAZIR SIRLEY QUETZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 322,
        ]);

        Passenger::create([
            'cd_psgr' => 1254,
            'nm_psgr' => 'JOAO DA SILVA RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 376,
        ]);

        Passenger::create([
            'cd_psgr' => 1255,
            'nm_psgr' => 'CARLOS ROBERTO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 392,
        ]);

        Passenger::create([
            'cd_psgr' => 1256,
            'nm_psgr' => 'LUZINETE RAIMUNDA DOS REIS',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 328,
        ]);

        Passenger::create([
            'cd_psgr' => 1257,
            'nm_psgr' => 'IRINEU CARNEIRO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 357,
        ]);

        Passenger::create([
            'cd_psgr' => 1258,
            'nm_psgr' => 'MANOEL RICARDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 344,
        ]);

        Passenger::create([
            'cd_psgr' => 1259,
            'nm_psgr' => 'RONALDO ANTONIO DE ARAUJO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 303,
        ]);

        Passenger::create([
            'cd_psgr' => 1260,
            'nm_psgr' => 'ROSEMEIRY DE CARVALHO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 344,
        ]);

        Passenger::create([
            'cd_psgr' => 1261,
            'nm_psgr' => 'ANGELA MARIA DE ALMEIDA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 360,
        ]);

        Passenger::create([
            'cd_psgr' => 1262,
            'nm_psgr' => 'MAGNA MARIA GONCALVES DE SOUZA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 307,
        ]);

        Passenger::create([
            'cd_psgr' => 1263,
            'nm_psgr' => 'MARIA MARGARIDA F. DE SOUZA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 334,
        ]);

        Passenger::create([
            'cd_psgr' => 1264,
            'nm_psgr' => 'SELMA REIS MACIEL SOARES',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 373,
        ]);

        Passenger::create([
            'cd_psgr' => 1265,
            'nm_psgr' => 'JOSE FERNANDES DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 317,
        ]);

        Passenger::create([
            'cd_psgr' => 1266,
            'nm_psgr' => 'JOSE CARLOS CLAUDINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 332,
        ]);

        Passenger::create([
            'cd_psgr' => 1267,
            'nm_psgr' => 'JOSE MARIA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 386,
        ]);

        Passenger::create([
            'cd_psgr' => 1268,
            'nm_psgr' => 'EDMILSON FERREIRA DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 342,
        ]);

        Passenger::create([
            'cd_psgr' => 1269,
            'nm_psgr' => 'MARIA EMILIA FINAMORE ROCHA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 366,
        ]);

        Passenger::create([
            'cd_psgr' => 1270,
            'nm_psgr' => 'PAULO DOS SANTOS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 310,
        ]);

        Passenger::create([
            'cd_psgr' => 1271,
            'nm_psgr' => 'ALOISIO FERREIRA LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 364,
        ]);

        Passenger::create([
            'cd_psgr' => 1272,
            'nm_psgr' => 'JOSE GERALDO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 307,
        ]);

        Passenger::create([
            'cd_psgr' => 1273,
            'nm_psgr' => 'SEBASTIAO T. DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 364,
        ]);

        Passenger::create([
            'cd_psgr' => 1274,
            'nm_psgr' => 'GERALDO CANTARINO DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 333,
        ]);

        Passenger::create([
            'cd_psgr' => 1275,
            'nm_psgr' => 'GERALDO ANTONIO CORREA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 391,
        ]);

        Passenger::create([
            'cd_psgr' => 1276,
            'nm_psgr' => 'JOAQUIM ANTONIO VIDAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 332,
        ]);

        Passenger::create([
            'cd_psgr' => 1277,
            'nm_psgr' => 'JOAO BAPTISTA DO AMARAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 390,
        ]);

        Passenger::create([
            'cd_psgr' => 1278,
            'nm_psgr' => 'HELIO JOSE PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 374,
        ]);

        Passenger::create([
            'cd_psgr' => 1279,
            'nm_psgr' => 'ADEMAR AUGUSTO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 367,
        ]);

        Passenger::create([
            'cd_psgr' => 1280,
            'nm_psgr' => 'FRANCISCO TEODORO TRINDADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 397,
        ]);

        Passenger::create([
            'cd_psgr' => 1281,
            'nm_psgr' => 'GERALDO DE CASTRO RAIMUNDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 312,
        ]);

        Passenger::create([
            'cd_psgr' => 1282,
            'nm_psgr' => 'LUIZ DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 368,
        ]);

        Passenger::create([
            'cd_psgr' => 1283,
            'nm_psgr' => 'PAULO SERGIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 343,
        ]);

        Passenger::create([
            'cd_psgr' => 1284,
            'nm_psgr' => 'WANDERSON CAMPOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 347,
        ]);

        Passenger::create([
            'cd_psgr' => 1285,
            'nm_psgr' => 'WILSON APARECIDO SPINELLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 333,
        ]);

        Passenger::create([
            'cd_psgr' => 1286,
            'nm_psgr' => 'ODILON VITORELI DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 397,
        ]);

        Passenger::create([
            'cd_psgr' => 1287,
            'nm_psgr' => 'WANDER DIAS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 323,
        ]);

        Passenger::create([
            'cd_psgr' => 1288,
            'nm_psgr' => 'ZALDIVAR COSME DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 385,
        ]);

        Passenger::create([
            'cd_psgr' => 1289,
            'nm_psgr' => 'EVALDO BALBINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 318,
        ]);

        Passenger::create([
            'cd_psgr' => 1290,
            'nm_psgr' => 'FRANCISCO DA COSTA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 302,
        ]);

        Passenger::create([
            'cd_psgr' => 1291,
            'nm_psgr' => 'SERGIO MURILO DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 309,
        ]);

        Passenger::create([
            'cd_psgr' => 1292,
            'nm_psgr' => 'SEBASTIAO JULIO DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 347,
        ]);

        Passenger::create([
            'cd_psgr' => 1293,
            'nm_psgr' => 'PEDRO DAS GRACAS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 354,
        ]);

        Passenger::create([
            'cd_psgr' => 1294,
            'nm_psgr' => 'SEBASTIAO XAVIER RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 300,
        ]);

        Passenger::create([
            'cd_psgr' => 1295,
            'nm_psgr' => 'PEDRO JOSE MOREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 372,
        ]);

        Passenger::create([
            'cd_psgr' => 1296,
            'nm_psgr' => 'SIDNEY VENANCIO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 308,
        ]);

        Passenger::create([
            'cd_psgr' => 1297,
            'nm_psgr' => 'EDMAR GERALDO RODRIGUES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 369,
        ]);

        Passenger::create([
            'cd_psgr' => 1298,
            'nm_psgr' => 'JOSE GERALDO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 389,
        ]);

        Passenger::create([
            'cd_psgr' => 1299,
            'nm_psgr' => 'RENATO PEREIRA GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 378,
        ]);

        Passenger::create([
            'cd_psgr' => 1300,
            'nm_psgr' => 'JOSE DIVINO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 382,
        ]);

        Passenger::create([
            'cd_psgr' => 1301,
            'nm_psgr' => 'ADAO VICENTE DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 365,
        ]);

        Passenger::create([
            'cd_psgr' => 1302,
            'nm_psgr' => 'JOSE CATARINO DE FREITAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 381,
        ]);

        Passenger::create([
            'cd_psgr' => 1303,
            'nm_psgr' => 'ROGERIO DIAS ABREU ABBUD',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 389,
        ]);

        Passenger::create([
            'cd_psgr' => 1304,
            'nm_psgr' => 'LUIZ CARLOS FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 910,
        ]);

        Passenger::create([
            'cd_psgr' => 1305,
            'nm_psgr' => 'PAULO PINTO KNOPP',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 930,
        ]);

        Passenger::create([
            'cd_psgr' => 1306,
            'nm_psgr' => 'SEBASTIAO DA SILVA FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 912,
        ]);

        Passenger::create([
            'cd_psgr' => 1307,
            'nm_psgr' => 'DENILSON ALCEU FIGUEIREDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-19',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 932,
        ]);

        Passenger::create([
            'cd_psgr' => 1308,
            'nm_psgr' => 'ELIMAR RODRIGUES LEITE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-23',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 394,
        ]);

        Passenger::create([
            'cd_psgr' => 1309,
            'nm_psgr' => 'JOSE AURILIO COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 738,
        ]);

        Passenger::create([
            'cd_psgr' => 1310,
            'nm_psgr' => 'ALEXANDRE MAGNO DE C. NOGUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-05-18',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 820,
        ]);

        Passenger::create([
            'cd_psgr' => 1311,
            'nm_psgr' => 'ALTIVO TEIXEIRA DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 353,
        ]);

        Passenger::create([
            'cd_psgr' => 1312,
            'nm_psgr' => 'SYLAS DE SOUZA ESTEVAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 351,
        ]);

        Passenger::create([
            'cd_psgr' => 1313,
            'nm_psgr' => 'LUIZ CLAUDIO TAVARES DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 336,
        ]);

        Passenger::create([
            'cd_psgr' => 1314,
            'nm_psgr' => 'MARCIO ELISIO ZAMPIER',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-01-23',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 303,
        ]);

        Passenger::create([
            'cd_psgr' => 1315,
            'nm_psgr' => 'ANTONIO CARLOS SOARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-04-24',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 487,
        ]);

        Passenger::create([
            'cd_psgr' => 1316,
            'nm_psgr' => 'GERALDO PEDRO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-07-13',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 310,
        ]);

        Passenger::create([
            'cd_psgr' => 1317,
            'nm_psgr' => 'REGINALDO HERMOGENES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-10-05',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 530,
        ]);

        Passenger::create([
            'cd_psgr' => 1318,
            'nm_psgr' => 'EDSON TEODORO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1976-03-23',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 396,
        ]);

        Passenger::create([
            'cd_psgr' => 1319,
            'nm_psgr' => 'JOSE ARISTIDES C. DE ANDRADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-05-17',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 790,
        ]);

        Passenger::create([
            'cd_psgr' => 1320,
            'nm_psgr' => 'ARY FERREIRA DOS S. JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-07-12',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 226,
        ]);

        Passenger::create([
            'cd_psgr' => 1321,
            'nm_psgr' => 'MARCO AURELIO E. MACHADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-07-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 80,
        ]);

        Passenger::create([
            'cd_psgr' => 1322,
            'nm_psgr' => 'GABRIEL ARCANJO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-07-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 55,
        ]);

        Passenger::create([
            'cd_psgr' => 1323,
            'nm_psgr' => 'JOSE SERGIO DA SILVEIRA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-08-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 906,
        ]);

        Passenger::create([
            'cd_psgr' => 1324,
            'nm_psgr' => 'LUIZ CLAUDIO SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-08-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 922,
        ]);

        Passenger::create([
            'cd_psgr' => 1325,
            'nm_psgr' => 'MATEUS EDUARDO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-08-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 907,
        ]);

        Passenger::create([
            'cd_psgr' => 1326,
            'nm_psgr' => 'SETIMO SOZZI NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-08-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 904,
        ]);

        Passenger::create([
            'cd_psgr' => 1327,
            'nm_psgr' => 'JOSE VILLANOVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-08-09',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 975,
        ]);

        Passenger::create([
            'cd_psgr' => 1328,
            'nm_psgr' => 'PAULO ANTONIO F. DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-09-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 674,
        ]);

        Passenger::create([
            'cd_psgr' => 1329,
            'nm_psgr' => 'RONALDO JOSE DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-10-04',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 481,
        ]);

        Passenger::create([
            'cd_psgr' => 1330,
            'nm_psgr' => 'REGINALDO PASQUALON',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-10-04',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 402,
        ]);

        Passenger::create([
            'cd_psgr' => 1331,
            'nm_psgr' => 'JOEL FERNANDES BITTENCOURT',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1116,
        ]);

        Passenger::create([
            'cd_psgr' => 1332,
            'nm_psgr' => 'EXPEDITO JOSE DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1159,
        ]);

        Passenger::create([
            'cd_psgr' => 1333,
            'nm_psgr' => 'EDEMIR GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 184,
        ]);

        Passenger::create([
            'cd_psgr' => 1334,
            'nm_psgr' => 'MARCIO GONCALVES HAUCK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 961,
        ]);

        Passenger::create([
            'cd_psgr' => 1335,
            'nm_psgr' => 'JOSE EDESIO DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 964,
        ]);

        Passenger::create([
            'cd_psgr' => 1336,
            'nm_psgr' => 'LUIS FERNANDO GUEDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-11-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 930,
        ]);

        Passenger::create([
            'cd_psgr' => 1337,
            'nm_psgr' => 'MARCOS ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-02-22',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 285,
        ]);

        Passenger::create([
            'cd_psgr' => 1338,
            'nm_psgr' => 'HUMBERTO MAURO DE A. LIMA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1977-02-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 224,
        ]);

        Passenger::create([
            'cd_psgr' => 1339,
            'nm_psgr' => 'MARCOS ROGERIO HADDAD',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-09-10',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 93,
        ]);

        Passenger::create([
            'cd_psgr' => 1340,
            'nm_psgr' => 'MAXLENE RAPOSO COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1977-02-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 221,
        ]);

        Passenger::create([
            'cd_psgr' => 1341,
            'nm_psgr' => 'LUCIANA BORBONI DELGADO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1978-07-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 315,
        ]);

        Passenger::create([
            'cd_psgr' => 1342,
            'nm_psgr' => 'RONALDO COURA FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 818,
        ]);

        Passenger::create([
            'cd_psgr' => 1343,
            'nm_psgr' => 'ANDRE VICENTE COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 878,
        ]);

        Passenger::create([
            'cd_psgr' => 1344,
            'nm_psgr' => 'CID MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 899,
        ]);

        Passenger::create([
            'cd_psgr' => 1345,
            'nm_psgr' => 'HILTON JOSE RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 108,
        ]);

        Passenger::create([
            'cd_psgr' => 1346,
            'nm_psgr' => 'ALEXANDER PAIVA KNEIPP',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-02-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 190,
        ]);

        Passenger::create([
            'cd_psgr' => 1347,
            'nm_psgr' => 'EDSON GERALDO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 643,
        ]);

        Passenger::create([
            'cd_psgr' => 1348,
            'nm_psgr' => 'TARCISIO JOSE DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 645,
        ]);

        Passenger::create([
            'cd_psgr' => 1349,
            'nm_psgr' => 'SEBASTIAO DA SILVA SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 638,
        ]);

        Passenger::create([
            'cd_psgr' => 1350,
            'nm_psgr' => 'RICARDO DA CRUZ BARRETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 653,
        ]);

        Passenger::create([
            'cd_psgr' => 1351,
            'nm_psgr' => 'FLAVIO CIMINO CAVALIERI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-07-11',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 122,
        ]);

        Passenger::create([
            'cd_psgr' => 1352,
            'nm_psgr' => 'MARCIO ISCOLD DUTRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 857,
        ]);

        Passenger::create([
            'cd_psgr' => 1353,
            'nm_psgr' => 'CARLOS ALBERTO LEANDRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 805,
        ]);

        Passenger::create([
            'cd_psgr' => 1354,
            'nm_psgr' => 'RONALDO ANTONIO NEVES TOSTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 807,
        ]);

        Passenger::create([
            'cd_psgr' => 1355,
            'nm_psgr' => 'LUIZ CARLOS TIBURCIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 881,
        ]);

        Passenger::create([
            'cd_psgr' => 1356,
            'nm_psgr' => 'JOSE RIBEIRO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 821,
        ]);

        Passenger::create([
            'cd_psgr' => 1357,
            'nm_psgr' => 'CELSON ALCANTARA DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 814,
        ]);

        Passenger::create([
            'cd_psgr' => 1358,
            'nm_psgr' => 'LUIZ HENRIQUE FAZZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-09-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 908,
        ]);

        Passenger::create([
            'cd_psgr' => 1359,
            'nm_psgr' => 'AIRTON FORTUNATO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-09-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 999,
        ]);

        Passenger::create([
            'cd_psgr' => 1360,
            'nm_psgr' => 'MARCOS HENRIQUE C. GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-10-03',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 377,
        ]);

        Passenger::create([
            'cd_psgr' => 1361,
            'nm_psgr' => 'PAULO SANCHES DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-10-03',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 320,
        ]);

        Passenger::create([
            'cd_psgr' => 1362,
            'nm_psgr' => 'JOSE MARIA GONCALVES COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-10-31',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1167,
        ]);

        Passenger::create([
            'cd_psgr' => 1363,
            'nm_psgr' => 'AMILTON DA CAMARA HAUCK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 829,
        ]);

        Passenger::create([
            'cd_psgr' => 1364,
            'nm_psgr' => 'GILBERTO SOZZI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 818,
        ]);

        Passenger::create([
            'cd_psgr' => 1365,
            'nm_psgr' => 'EUGENIO RODRIGUES FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-12-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 454,
        ]);

        Passenger::create([
            'cd_psgr' => 1366,
            'nm_psgr' => 'DANILO GERALDO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-09-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 966,
        ]);

        Passenger::create([
            'cd_psgr' => 1367,
            'nm_psgr' => 'JOSE BERTOLINO DOS S. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-10-03',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 394,
        ]);

        Passenger::create([
            'cd_psgr' => 1368,
            'nm_psgr' => 'PAULO ROGERIO DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 876,
        ]);

        Passenger::create([
            'cd_psgr' => 1369,
            'nm_psgr' => 'ELMAR DE CASTRO E PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-01-28',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 841,
        ]);

        Passenger::create([
            'cd_psgr' => 1370,
            'nm_psgr' => 'MIGUEL ARCANJO SALGADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-07-11',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 131,
        ]);

        Passenger::create([
            'cd_psgr' => 1371,
            'nm_psgr' => 'PERICLES DANIEL DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-08-08',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 847,
        ]);

        Passenger::create([
            'cd_psgr' => 1372,
            'nm_psgr' => 'ELIAS DE LIMA ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 821,
        ]);

        Passenger::create([
            'cd_psgr' => 1373,
            'nm_psgr' => 'CLAUDIO MIRANDA PEREIRA',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 898,
        ]);

        Passenger::create([
            'cd_psgr' => 1374,
            'nm_psgr' => 'RICARDO DE AQUINO DAMASCENO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 805,
        ]);

        Passenger::create([
            'cd_psgr' => 1375,
            'nm_psgr' => 'JOSE FRANCISCO GENEROSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-28',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 890,
        ]);

        Passenger::create([
            'cd_psgr' => 1376,
            'nm_psgr' => 'RONEY SANTHIAGO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-07-11',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 198,
        ]);

        Passenger::create([
            'cd_psgr' => 1377,
            'nm_psgr' => 'RONALDO CARLOS T. DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-07-11',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 135,
        ]);

        Passenger::create([
            'cd_psgr' => 1378,
            'nm_psgr' => 'ELVIA TRINDADE BRAGANCA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1978-04-22',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 278,
        ]);

        Passenger::create([
            'cd_psgr' => 1379,
            'nm_psgr' => 'JOSE FRANCISCO DOS SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-16',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 619,
        ]);

        Passenger::create([
            'cd_psgr' => 1380,
            'nm_psgr' => 'ALCIDES PEREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 83,
        ]);

        Passenger::create([
            'cd_psgr' => 1381,
            'nm_psgr' => 'JAEDER MARIO BICALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-05-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 9,
        ]);

        Passenger::create([
            'cd_psgr' => 1382,
            'nm_psgr' => 'EMILSON AMORIM MEDEIROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-10-03',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 367,
        ]);

        Passenger::create([
            'cd_psgr' => 1383,
            'nm_psgr' => 'MAURICIO CONDESSA COURA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-04',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 494,
        ]);

        Passenger::create([
            'cd_psgr' => 1384,
            'nm_psgr' => 'GERSON FERREIRA DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 866,
        ]);

        Passenger::create([
            'cd_psgr' => 1385,
            'nm_psgr' => 'VALDEMAR ANTONIO RIVERA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1978-11-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 802,
        ]);

        Passenger::create([
            'cd_psgr' => 1386,
            'nm_psgr' => 'CRISTIANE ANDREIA F. MENDES',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1978-07-11',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 131,
        ]);

        Passenger::create([
            'cd_psgr' => 1387,
            'nm_psgr' => 'JOSE JOAO DA APARECIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-02-20',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1000,
        ]);

        Passenger::create([
            'cd_psgr' => 1388,
            'nm_psgr' => 'MARCO ANTONIO R. GALVAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-02-20',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 60,
        ]);

        Passenger::create([
            'cd_psgr' => 1389,
            'nm_psgr' => 'MARCOS VALERIO QUETZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-07-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 35,
        ]);

        Passenger::create([
            'cd_psgr' => 1390,
            'nm_psgr' => 'EDIVALDO DE BRITO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-08-07',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 700,
        ]);

        Passenger::create([
            'cd_psgr' => 1391,
            'nm_psgr' => 'LUIZ ANTONIO CALDERARI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 265,
        ]);

        Passenger::create([
            'cd_psgr' => 1392,
            'nm_psgr' => 'CELIO EDUARDO BARRETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-30',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1086,
        ]);

        Passenger::create([
            'cd_psgr' => 1393,
            'nm_psgr' => 'CARLOS FABIANO FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-30',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1079,
        ]);

        Passenger::create([
            'cd_psgr' => 1394,
            'nm_psgr' => 'FABIO ROMANO PINHEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-11-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 775,
        ]);

        Passenger::create([
            'cd_psgr' => 1395,
            'nm_psgr' => 'MARCOS ANTONIO DE CARVALHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-04-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 701,
        ]);

        Passenger::create([
            'cd_psgr' => 1396,
            'nm_psgr' => 'PAULO ZANCANELLI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 213,
        ]);

        Passenger::create([
            'cd_psgr' => 1397,
            'nm_psgr' => 'VALDEVINO PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-02',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 265,
        ]);

        Passenger::create([
            'cd_psgr' => 1398,
            'nm_psgr' => 'JOSE ALVES DE A. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-01-23',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 398,
        ]);

        Passenger::create([
            'cd_psgr' => 1399,
            'nm_psgr' => 'ALEXANDRE GONCALVES FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-04-17',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 772,
        ]);

        Passenger::create([
            'cd_psgr' => 1400,
            'nm_psgr' => 'JOSE EURICO COELHO DE ABREU',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-04-25',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 527,
        ]);

        Passenger::create([
            'cd_psgr' => 1401,
            'nm_psgr' => 'WALTENCIR SEVAROLLI CRESTON',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-06-12',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 296,
        ]);

        Passenger::create([
            'cd_psgr' => 1402,
            'nm_psgr' => 'GERALDO EDSON DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-07-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 87,
        ]);

        Passenger::create([
            'cd_psgr' => 1403,
            'nm_psgr' => 'FLAVIO STEINHERZ F. TOSCANO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-07-10',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 62,
        ]);

        Passenger::create([
            'cd_psgr' => 1404,
            'nm_psgr' => 'MARCOS EDGARD SILVESTRE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-01-23',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 308,
        ]);

        Passenger::create([
            'cd_psgr' => 1405,
            'nm_psgr' => 'JOSE LUIZ PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-01-23',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 363,
        ]);

        Passenger::create([
            'cd_psgr' => 1406,
            'nm_psgr' => 'ANTENOR ROZARIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-02-28',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 805,
        ]);

        Passenger::create([
            'cd_psgr' => 1407,
            'nm_psgr' => 'AGUINALDO OZORIO MARTINS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-06',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 629,
        ]);

        Passenger::create([
            'cd_psgr' => 1408,
            'nm_psgr' => 'JERONIMO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1979-10-06',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 617,
        ]);

        Passenger::create([
            'cd_psgr' => 1409,
            'nm_psgr' => 'ANA LUISA CERNIATO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1979-10-10',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1067,
        ]);

        Passenger::create([
            'cd_psgr' => 1410,
            'nm_psgr' => 'DAVI ANTUNES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 282,
        ]);

        Passenger::create([
            'cd_psgr' => 1411,
            'nm_psgr' => 'JOSE SYLVIO GONCALVES JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-02-19',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 945,
        ]);

        Passenger::create([
            'cd_psgr' => 1412,
            'nm_psgr' => 'EDMILSON ANTONIO AMORIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-04-19',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 962,
        ]);

        Passenger::create([
            'cd_psgr' => 1413,
            'nm_psgr' => 'JOSE GERALDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-07-08',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 815,
        ]);

        Passenger::create([
            'cd_psgr' => 1414,
            'nm_psgr' => 'JEFERSON TELES ANK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 538,
        ]);

        Passenger::create([
            'cd_psgr' => 1415,
            'nm_psgr' => 'HAMILTON REINOSO VENANCIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 540,
        ]);

        Passenger::create([
            'cd_psgr' => 1416,
            'nm_psgr' => 'MARIO DE MAGALHAES CABREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-09-30',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 96,
        ]);

        Passenger::create([
            'cd_psgr' => 1417,
            'nm_psgr' => 'ANDERSON SEBASTIAO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-07-08',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 856,
        ]);

        Passenger::create([
            'cd_psgr' => 1418,
            'nm_psgr' => 'JOAO CARLOS DE SOUZA RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 523,
        ]);

        Passenger::create([
            'cd_psgr' => 1419,
            'nm_psgr' => 'MARCELO DE MIRANDA CAMPOS',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1980-01-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 211,
        ]);

        Passenger::create([
            'cd_psgr' => 1420,
            'nm_psgr' => 'FERNANDO SERGIO S. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-08-05',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 527,
        ]);

        Passenger::create([
            'cd_psgr' => 1421,
            'nm_psgr' => 'JAMIRO PEDRO TEODORO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-02-19',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 945,
        ]);

        Passenger::create([
            'cd_psgr' => 1422,
            'nm_psgr' => 'ADMAR JESUS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-04-27',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 786,
        ]);

        Passenger::create([
            'cd_psgr' => 1423,
            'nm_psgr' => 'EDSON SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1980-05-13',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 349,
        ]);

        Passenger::create([
            'cd_psgr' => 1424,
            'nm_psgr' => 'TARCISIO MOREIRA PORTES',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1981-03-17',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 781,
        ]);

        Passenger::create([
            'cd_psgr' => 1425,
            'nm_psgr' => 'MAURO MARTINS COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-01-20',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 57,
        ]);

        Passenger::create([
            'cd_psgr' => 1426,
            'nm_psgr' => 'FRANCISCO DE ASSIS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-02-17',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 784,
        ]);

        Passenger::create([
            'cd_psgr' => 1427,
            'nm_psgr' => 'ALVARO SIMOES DA C. NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-03-17',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 737,
        ]);

        Passenger::create([
            'cd_psgr' => 1428,
            'nm_psgr' => 'ANTONIO CARLOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-04-14',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 432,
        ]);

        Passenger::create([
            'cd_psgr' => 1429,
            'nm_psgr' => 'LUIZ FERNANDO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-08-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 436,
        ]);

        Passenger::create([
            'cd_psgr' => 1430,
            'nm_psgr' => 'FRANCISCO CARLOS NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-08-04',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 411,
        ]);

        Passenger::create([
            'cd_psgr' => 1431,
            'nm_psgr' => 'LUIZ CARLOS DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-09-29',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 914,
        ]);

        Passenger::create([
            'cd_psgr' => 1432,
            'nm_psgr' => 'JULIO CESAR DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-09-29',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 939,
        ]);

        Passenger::create([
            'cd_psgr' => 1433,
            'nm_psgr' => 'EDSON JOSE DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-09-29',
            'cd_pais' => 'KR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 941,
        ]);

        Passenger::create([
            'cd_psgr' => 1434,
            'nm_psgr' => 'CLAUDIO JOSE MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-10-27',
            'cd_pais' => 'PY',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 766,
        ]);

        Passenger::create([
            'cd_psgr' => 1435,
            'nm_psgr' => 'CARLOS ALBERTO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-03-17',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 777,
        ]);

        Passenger::create([
            'cd_psgr' => 1436,
            'nm_psgr' => 'LUIZ CARLOS ANTUNES BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-05-12',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 240,
        ]);

        Passenger::create([
            'cd_psgr' => 1437,
            'nm_psgr' => 'SILVESTRE RAIMUNDO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-05-12',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 236,
        ]);

        Passenger::create([
            'cd_psgr' => 1438,
            'nm_psgr' => 'FAUSTO EUSTAQUIO SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-05-12',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 249,
        ]);

        Passenger::create([
            'cd_psgr' => 1439,
            'nm_psgr' => 'VANTUIL PEREIRA NOGUEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-09-29',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 991,
        ]);

        Passenger::create([
            'cd_psgr' => 1440,
            'nm_psgr' => 'JOSE PASCOAL DE JESUS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-01-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 480,
        ]);

        Passenger::create([
            'cd_psgr' => 1441,
            'nm_psgr' => 'MARCELO CAMPOLINA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1981-04-26',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 636,
        ]);

        Passenger::create([
            'cd_psgr' => 1442,
            'nm_psgr' => 'CYRILO MOREIRA FERNANDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-02-15',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 531,
        ]);

        Passenger::create([
            'cd_psgr' => 1443,
            'nm_psgr' => 'MARCO AURELIO AMBROSIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-02-15',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 504,
        ]);

        Passenger::create([
            'cd_psgr' => 1444,
            'nm_psgr' => 'RODRIGO ANTONIO P. FIGESK',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-02-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 555,
        ]);

        Passenger::create([
            'cd_psgr' => 1445,
            'nm_psgr' => 'ROBSON DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-02-15',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 524,
        ]);

        Passenger::create([
            'cd_psgr' => 1446,
            'nm_psgr' => 'ALVARO ASSUNCAO DA SILVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-04-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 213,
        ]);

        Passenger::create([
            'cd_psgr' => 1447,
            'nm_psgr' => 'JORGE EDUARDO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-05-14',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 482,
        ]);

        Passenger::create([
            'cd_psgr' => 1448,
            'nm_psgr' => 'ANTONIO FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-05-14',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 429,
        ]);

        Passenger::create([
            'cd_psgr' => 1449,
            'nm_psgr' => 'MARCELO NOVAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-06-07',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 758,
        ]);

        Passenger::create([
            'cd_psgr' => 1450,
            'nm_psgr' => 'RAIMUNDO CESAR S. R. PINTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-06-07',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 701,
        ]);

        Passenger::create([
            'cd_psgr' => 1451,
            'nm_psgr' => 'MARCOS ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-06-11',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 156,
        ]);

        Passenger::create([
            'cd_psgr' => 1452,
            'nm_psgr' => 'ANTONIO FRANCISCO B. JUNIOR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-06-11',
            'cd_pais' => 'AR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 162,
        ]);

        Passenger::create([
            'cd_psgr' => 1453,
            'nm_psgr' => 'FLAVIO ALVES DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 551,
        ]);

        Passenger::create([
            'cd_psgr' => 1454,
            'nm_psgr' => 'ADALTON BATALHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 558,
        ]);

        Passenger::create([
            'cd_psgr' => 1455,
            'nm_psgr' => 'ADAO DE ASSIS MADELLA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 534,
        ]);

        Passenger::create([
            'cd_psgr' => 1456,
            'nm_psgr' => 'VILSON MARTINHO DE SAO JOSE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 541,
        ]);

        Passenger::create([
            'cd_psgr' => 1457,
            'nm_psgr' => 'TADEU FERREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 519,
        ]);

        Passenger::create([
            'cd_psgr' => 1458,
            'nm_psgr' => 'MARCO AURELIO PUGLIESE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 549,
        ]);

        Passenger::create([
            'cd_psgr' => 1459,
            'nm_psgr' => 'GERALDO TAVARES DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-07-05',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 588,
        ]);

        Passenger::create([
            'cd_psgr' => 1460,
            'nm_psgr' => 'JOSE DOS SANTOS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 287,
        ]);

        Passenger::create([
            'cd_psgr' => 1461,
            'nm_psgr' => 'MARCOS VINICIUS B. DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 286,
        ]);

        Passenger::create([
            'cd_psgr' => 1462,
            'nm_psgr' => 'JOSE LUIZ ARAUJO TOSTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 298,
        ]);

        Passenger::create([
            'cd_psgr' => 1463,
            'nm_psgr' => 'JOSE LUIZ DOS SANTOS COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 295,
        ]);

        Passenger::create([
            'cd_psgr' => 1464,
            'nm_psgr' => 'DELMIR DE AVELAR FRANCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 214,
        ]);

        Passenger::create([
            'cd_psgr' => 1465,
            'nm_psgr' => 'ADMILSON MARTINS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-02',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 203,
        ]);

        Passenger::create([
            'cd_psgr' => 1466,
            'nm_psgr' => 'JOAO ERATO RIBEIRO LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 34,
        ]);

        Passenger::create([
            'cd_psgr' => 1467,
            'nm_psgr' => 'EDMAIR BALBINO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 52,
        ]);

        Passenger::create([
            'cd_psgr' => 1468,
            'nm_psgr' => 'NILTON RAIMUNDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-08-30',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 89,
        ]);

        Passenger::create([
            'cd_psgr' => 1469,
            'nm_psgr' => 'SEBASTIAO MARCIO R. DE PAIVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-09-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 724,
        ]);

        Passenger::create([
            'cd_psgr' => 1470,
            'nm_psgr' => 'WILSON GARCIA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-09-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 762,
        ]);

        Passenger::create([
            'cd_psgr' => 1471,
            'nm_psgr' => 'ANTONIO CARLOS WEBER CHAVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-09-27',
            'cd_pais' => 'SU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 710,
        ]);

        Passenger::create([
            'cd_psgr' => 1472,
            'nm_psgr' => 'CARLOS ROBERTO DO CARMO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-10-25',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 588,
        ]);

        Passenger::create([
            'cd_psgr' => 1473,
            'nm_psgr' => 'ANDERSON VALVERDE SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-11-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 243,
        ]);

        Passenger::create([
            'cd_psgr' => 1474,
            'nm_psgr' => 'ANTONIO CARLOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-03-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 321,
        ]);

        Passenger::create([
            'cd_psgr' => 1475,
            'nm_psgr' => 'PEDRO EURICO GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-03-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 313,
        ]);

        Passenger::create([
            'cd_psgr' => 1476,
            'nm_psgr' => 'CARLOS SERGIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-04-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 258,
        ]);

        Passenger::create([
            'cd_psgr' => 1477,
            'nm_psgr' => 'RODOLFO NEVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-04-12',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 251,
        ]);

        Passenger::create([
            'cd_psgr' => 1478,
            'nm_psgr' => 'JOSE ANTONIO GOMES DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-11-22',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 295,
        ]);

        Passenger::create([
            'cd_psgr' => 1479,
            'nm_psgr' => 'ROGERIO COURI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-03-23',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 337,
        ]);

        Passenger::create([
            'cd_psgr' => 1480,
            'nm_psgr' => 'ADILSON SIQUEIRA LIMA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-03-27',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 704,
        ]);

        Passenger::create([
            'cd_psgr' => 1481,
            'nm_psgr' => 'EUSTAQUIO CLAUDIO DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-04-20',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 60,
        ]);

        Passenger::create([
            'cd_psgr' => 1482,
            'nm_psgr' => 'ANALDIR BALDAIA PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1983-10-05',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 515,
        ]);

        Passenger::create([
            'cd_psgr' => 1483,
            'nm_psgr' => 'JOSE AUGUSTO VALLE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-01-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 739,
        ]);

        Passenger::create([
            'cd_psgr' => 1484,
            'nm_psgr' => 'SEBASTIAO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-01-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 789,
        ]);

        Passenger::create([
            'cd_psgr' => 1485,
            'nm_psgr' => 'GILMAR MATEUS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-01-17',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 744,
        ]);

        Passenger::create([
            'cd_psgr' => 1486,
            'nm_psgr' => 'JOSIMAR PEREIRA ALVIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-11-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 861,
        ]);

        Passenger::create([
            'cd_psgr' => 1487,
            'nm_psgr' => 'FRANCISCO CARLOS DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-04-18',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 873,
        ]);

        Passenger::create([
            'cd_psgr' => 1488,
            'nm_psgr' => 'ROBERTO MAURO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-04-18',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 869,
        ]);

        Passenger::create([
            'cd_psgr' => 1489,
            'nm_psgr' => 'CARLOS APARECIDO LUIZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1984-05-08',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 863,
        ]);

        Passenger::create([
            'cd_psgr' => 1490,
            'nm_psgr' => 'ANTONIO HORTALAN',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-03-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 253,
        ]);

        Passenger::create([
            'cd_psgr' => 1491,
            'nm_psgr' => 'SILVIO ALEIXO DO NASCIMENTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-03-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 216,
        ]);

        Passenger::create([
            'cd_psgr' => 1492,
            'nm_psgr' => 'RENATO MOREIRA DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-03-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 225,
        ]);

        Passenger::create([
            'cd_psgr' => 1493,
            'nm_psgr' => 'SEBASTIAO DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-03-12',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 247,
        ]);

        Passenger::create([
            'cd_psgr' => 1494,
            'nm_psgr' => 'JOAO ULISSES CRISTINO FELIPE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-04-09',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 983,
        ]);

        Passenger::create([
            'cd_psgr' => 1495,
            'nm_psgr' => 'MARCIO DUARTE DA ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-04-09',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 985,
        ]);

        Passenger::create([
            'cd_psgr' => 1496,
            'nm_psgr' => 'JOSE ISIDORIO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-04-17',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 733,
        ]);

        Passenger::create([
            'cd_psgr' => 1497,
            'nm_psgr' => 'ADILSON JOSE FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-02',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 225,
        ]);

        Passenger::create([
            'cd_psgr' => 1498,
            'nm_psgr' => 'MARCIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-02',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 240,
        ]);

        Passenger::create([
            'cd_psgr' => 1499,
            'nm_psgr' => 'ALOISIO RODRIGUES AFONSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-30',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 70,
        ]);

        Passenger::create([
            'cd_psgr' => 1500,
            'nm_psgr' => 'ROBERTO CARLOS F. PRUDENCIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-30',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 14,
        ]);

        Passenger::create([
            'cd_psgr' => 1501,
            'nm_psgr' => 'LUIZ MARCELINO DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-30',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 92,
        ]);

        Passenger::create([
            'cd_psgr' => 1502,
            'nm_psgr' => 'EDSON WANDER DE O. BERNARDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-07-30',
            'cd_pais' => 'FR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 70,
        ]);

        Passenger::create([
            'cd_psgr' => 1503,
            'nm_psgr' => 'WALMIR DA COSTA ALVES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-09-24',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 468,
        ]);

        Passenger::create([
            'cd_psgr' => 1504,
            'nm_psgr' => 'ONILDO DE FREITAS MORAIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-09-24',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 486,
        ]);

        Passenger::create([
            'cd_psgr' => 1505,
            'nm_psgr' => 'JOSE ALBERTO DE MELLO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-09-24',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 404,
        ]);

        Passenger::create([
            'cd_psgr' => 1506,
            'nm_psgr' => 'FREDERICO MARCOS DE C. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-09-24',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 423,
        ]);

        Passenger::create([
            'cd_psgr' => 1507,
            'nm_psgr' => 'CLAUDIO HENRIQUE QUITERIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 276,
        ]);

        Passenger::create([
            'cd_psgr' => 1508,
            'nm_psgr' => 'WILSON FRANCISCO DA S. BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 226,
        ]);

        Passenger::create([
            'cd_psgr' => 1509,
            'nm_psgr' => 'RONALDO VALENTIM DO AMARAL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-10-22',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 213,
        ]);

        Passenger::create([
            'cd_psgr' => 1510,
            'nm_psgr' => 'MARCO ANTONIO PEREIRA GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-12-17',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 746,
        ]);

        Passenger::create([
            'cd_psgr' => 1511,
            'nm_psgr' => 'ADRIANO SERGIO DIAS RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-12-17',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 728,
        ]);

        Passenger::create([
            'cd_psgr' => 1512,
            'nm_psgr' => 'ALCIDES PEDRO DAMIAO PAPA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-02-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 870,
        ]);

        Passenger::create([
            'cd_psgr' => 1513,
            'nm_psgr' => 'OSVALDO MARIANO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-06-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 39,
        ]);

        Passenger::create([
            'cd_psgr' => 1514,
            'nm_psgr' => 'MILTON FERREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1985-11-03',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 340,
        ]);

        Passenger::create([
            'cd_psgr' => 1515,
            'nm_psgr' => 'JOSE MARIA RAIMUNDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 106,
        ]);

        Passenger::create([
            'cd_psgr' => 1516,
            'nm_psgr' => 'ALOISIO ROSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-01-14',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 448,
        ]);

        Passenger::create([
            'cd_psgr' => 1517,
            'nm_psgr' => 'JOSE MARIA DA CONCEICAO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-04-08',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 806,
        ]);

        Passenger::create([
            'cd_psgr' => 1518,
            'nm_psgr' => 'HELDER FERNANDO ALVARENGA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-05-06',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 605,
        ]);

        Passenger::create([
            'cd_psgr' => 1519,
            'nm_psgr' => 'ANTONIO EXPEDITO DE REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-06-03',
            'cd_pais' => 'BO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 309,
        ]);

        Passenger::create([
            'cd_psgr' => 1520,
            'nm_psgr' => 'JOAO BATISTA ALVES DA COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 184,
        ]);

        Passenger::create([
            'cd_psgr' => 1521,
            'nm_psgr' => 'HAMILTON ALEXANDRE DE BARROS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 168,
        ]);

        Passenger::create([
            'cd_psgr' => 1522,
            'nm_psgr' => 'IRAN BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 161,
        ]);

        Passenger::create([
            'cd_psgr' => 1523,
            'nm_psgr' => 'VITOR HUGO BELTRAMI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-01',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 100,
        ]);

        Passenger::create([
            'cd_psgr' => 1524,
            'nm_psgr' => 'GILSON FABIO DE CASTRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-05',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 583,
        ]);

        Passenger::create([
            'cd_psgr' => 1525,
            'nm_psgr' => 'ROSINEI DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-05',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 597,
        ]);

        Passenger::create([
            'cd_psgr' => 1526,
            'nm_psgr' => 'OSNY JOSE ARANTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 996,
        ]);

        Passenger::create([
            'cd_psgr' => 1527,
            'nm_psgr' => 'ANATOLIO MIRANDA PASSOS',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 993,
        ]);

        Passenger::create([
            'cd_psgr' => 1528,
            'nm_psgr' => 'ALADIR EMANOEL DE MATTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 975,
        ]);

        Passenger::create([
            'cd_psgr' => 1529,
            'nm_psgr' => 'JOSE MARCOS DE BRITO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 995,
        ]);

        Passenger::create([
            'cd_psgr' => 1530,
            'nm_psgr' => 'EVERALDO RODRIGUES PIRES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 971,
        ]);

        Passenger::create([
            'cd_psgr' => 1531,
            'nm_psgr' => 'WANDER LUCIO DE SOUZA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 950,
        ]);

        Passenger::create([
            'cd_psgr' => 1532,
            'nm_psgr' => 'EDIVALDO APARECIDO MENDES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 942,
        ]);

        Passenger::create([
            'cd_psgr' => 1533,
            'nm_psgr' => 'ALEXANDRE PEREIRA DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 995,
        ]);

        Passenger::create([
            'cd_psgr' => 1534,
            'nm_psgr' => 'ALAIR DA ROCHA ABRANTES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 992,
        ]);

        Passenger::create([
            'cd_psgr' => 1535,
            'nm_psgr' => 'JOSE ANTONIO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 917,
        ]);

        Passenger::create([
            'cd_psgr' => 1536,
            'nm_psgr' => 'FLAVIO ROBERTO DA SILVA BRAGA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 993,
        ]);

        Passenger::create([
            'cd_psgr' => 1537,
            'nm_psgr' => 'JULIO CESAR AUGUSTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 930,
        ]);

        Passenger::create([
            'cd_psgr' => 1538,
            'nm_psgr' => 'JOSE MIGUEL PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 916,
        ]);

        Passenger::create([
            'cd_psgr' => 1539,
            'nm_psgr' => 'PAULO EUSTACHIO DOS REIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => 'AO',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 992,
        ]);

        Passenger::create([
            'cd_psgr' => 1540,
            'nm_psgr' => 'PAULO GRACINDO DIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-09',
            'cd_pais' => null,
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 999,
        ]);

        Passenger::create([
            'cd_psgr' => 1541,
            'nm_psgr' => 'JOAQUIM BECHARA NEDER COELHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-17',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 726,
        ]);

        Passenger::create([
            'cd_psgr' => 1542,
            'nm_psgr' => 'WALDEVINO RODRIGUES P. FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-17',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 750,
        ]);

        Passenger::create([
            'cd_psgr' => 1543,
            'nm_psgr' => 'EDSON DA SILVA BRASILINO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-17',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 774,
        ]);

        Passenger::create([
            'cd_psgr' => 1544,
            'nm_psgr' => 'CESAR JOSE DA CRUZ',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-17',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 798,
        ]);

        Passenger::create([
            'cd_psgr' => 1545,
            'nm_psgr' => 'JOSE MARIA GOMES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-17',
            'cd_pais' => 'CH',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 700,
        ]);

        Passenger::create([
            'cd_psgr' => 1546,
            'nm_psgr' => 'ALEXANDRE SIQUEIRA VALLE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 502,
        ]);

        Passenger::create([
            'cd_psgr' => 1547,
            'nm_psgr' => 'EDUARDO HENRIQUE DE F. SANTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 588,
        ]);

        Passenger::create([
            'cd_psgr' => 1548,
            'nm_psgr' => 'CARLOS EDUARDO LAWALL',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 591,
        ]);

        Passenger::create([
            'cd_psgr' => 1549,
            'nm_psgr' => 'LUIS GERALDO JULIANI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 545,
        ]);

        Passenger::create([
            'cd_psgr' => 1550,
            'nm_psgr' => 'ANTONIO LUIS DA NATIVIDADE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-25',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 577,
        ]);

        Passenger::create([
            'cd_psgr' => 1551,
            'nm_psgr' => 'CARLOS ALBERTO LOURENCO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 944,
        ]);

        Passenger::create([
            'cd_psgr' => 1552,
            'nm_psgr' => 'ROGERIO MARTINS DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 979,
        ]);

        Passenger::create([
            'cd_psgr' => 1553,
            'nm_psgr' => 'MARIO CESAR VILELA DE PAULA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-07-29',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 903,
        ]);

        Passenger::create([
            'cd_psgr' => 1554,
            'nm_psgr' => 'EDUARDO SANGY',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-06',
            'cd_pais' => 'MX',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 652,
        ]);

        Passenger::create([
            'cd_psgr' => 1555,
            'nm_psgr' => 'FRANSERGIO GOMES DELGADO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 59,
        ]);

        Passenger::create([
            'cd_psgr' => 1556,
            'nm_psgr' => 'ANTONIO CARLOS F. DE SOUSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-10',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 54,
        ]);

        Passenger::create([
            'cd_psgr' => 1557,
            'nm_psgr' => 'JULIO CARLOS DE MORAIS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 477,
        ]);

        Passenger::create([
            'cd_psgr' => 1558,
            'nm_psgr' => 'ALEXANDRE MENDES DE P. E SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-14',
            'cd_pais' => 'PT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 442,
        ]);

        Passenger::create([
            'cd_psgr' => 1559,
            'nm_psgr' => 'WAGNER FONTOURA DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-26',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 629,
        ]);

        Passenger::create([
            'cd_psgr' => 1560,
            'nm_psgr' => 'CLAUDIO EDUARDO PEIXOTO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-08-30',
            'cd_pais' => 'CN',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 9,
        ]);

        Passenger::create([
            'cd_psgr' => 1561,
            'nm_psgr' => 'GILBERTO DA SILVA BRETAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-09-03',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 376,
        ]);

        Passenger::create([
            'cd_psgr' => 1562,
            'nm_psgr' => 'MARCIO MENDONCA OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-09-27',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 760,
        ]);

        Passenger::create([
            'cd_psgr' => 1563,
            'nm_psgr' => 'WALLACE FRANCO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-09-27',
            'cd_pais' => 'TR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 741,
        ]);

        Passenger::create([
            'cd_psgr' => 1564,
            'nm_psgr' => 'DERMEVAL MESSIAS DE SOUSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1125,
        ]);

        Passenger::create([
            'cd_psgr' => 1565,
            'nm_psgr' => 'JOSE GERALDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-10-21',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1101,
        ]);

        Passenger::create([
            'cd_psgr' => 1566,
            'nm_psgr' => 'LUCIANO DE SOUZA MATTOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-10-25',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 595,
        ]);

        Passenger::create([
            'cd_psgr' => 1567,
            'nm_psgr' => 'JOAO BATISTA DE ALMEIDA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 888,
        ]);

        Passenger::create([
            'cd_psgr' => 1568,
            'nm_psgr' => 'CARLOS ALBERTO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-12-16',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 693,
        ]);

        Passenger::create([
            'cd_psgr' => 1569,
            'nm_psgr' => 'ANDRE LUIZ ALVES COSTA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-12-24',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 406,
        ]);

        Passenger::create([
            'cd_psgr' => 1570,
            'nm_psgr' => 'NICOLAU BITENCOURT DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-01-13',
            'cd_pais' => 'IT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 349,
        ]);

        Passenger::create([
            'cd_psgr' => 1571,
            'nm_psgr' => 'WESLEY NASCIMENTO INTROVIGNE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 835,
        ]);

        Passenger::create([
            'cd_psgr' => 1572,
            'nm_psgr' => 'VICENTE CELSO ESPOSITO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-12-16',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 692,
        ]);

        Passenger::create([
            'cd_psgr' => 1573,
            'nm_psgr' => 'MARIA APARECIDA DA SILVA',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1986-12-16',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 669,
        ]);

        Passenger::create([
            'cd_psgr' => 1574,
            'nm_psgr' => 'EDIVALDO MIRANDA DOS SANTOS',
            'ic_sexo_psgr' => '',
            'dt_nasc_psgr' => '1986-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 884,
        ]);

        Passenger::create([
            'cd_psgr' => 1575,
            'nm_psgr' => 'ADILERCIO CANDIDO NETO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 850,
        ]);

        Passenger::create([
            'cd_psgr' => 1576,
            'nm_psgr' => 'OSNI MECENE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1986-11-18',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 873,
        ]);

        Passenger::create([
            'cd_psgr' => 1577,
            'nm_psgr' => 'LUIS ANTONIO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-02-18',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 820,
        ]);

        Passenger::create([
            'cd_psgr' => 1578,
            'nm_psgr' => 'ADILSON RIBEIRO DE REZENDE',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-06-22',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 294,
        ]);

        Passenger::create([
            'cd_psgr' => 1579,
            'nm_psgr' => 'SIDNEI VALLE SANT ANNA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-07-28',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 864,
        ]);

        Passenger::create([
            'cd_psgr' => 1580,
            'nm_psgr' => 'LUIZ ANTONIO FERREIRA LOPES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => null,
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 191,
        ]);

        Passenger::create([
            'cd_psgr' => 1581,
            'nm_psgr' => 'JULES LAGE SILVERIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-10-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1026,
        ]);

        Passenger::create([
            'cd_psgr' => 1582,
            'nm_psgr' => 'JOSE MARIA DE ALMEIDA TALHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-10-20',
            'cd_pais' => 'IL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 1079,
        ]);

        Passenger::create([
            'cd_psgr' => 1583,
            'nm_psgr' => 'ANDRE LUIS MELO MATIAS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-10-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 496,
        ]);

        Passenger::create([
            'cd_psgr' => 1584,
            'nm_psgr' => 'PAULO ROBERTO RIBEIRO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-10-28',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 837,
        ]);

        Passenger::create([
            'cd_psgr' => 1585,
            'nm_psgr' => 'EDSON TADEU PEREIRA DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-11-21',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 191,
        ]);

        Passenger::create([
            'cd_psgr' => 1586,
            'nm_psgr' => 'MARCILIO DA SILVA TAVARES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-01-12',
            'cd_pais' => 'EG',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 219,
        ]);

        Passenger::create([
            'cd_psgr' => 1587,
            'nm_psgr' => 'MARCELO SPATIM CAMPOS',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-10-24',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 412,
        ]);

        Passenger::create([
            'cd_psgr' => 1588,
            'nm_psgr' => 'SEBASTIAO CARLOS CARBOGIM',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-06-02',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 257,
        ]);

        Passenger::create([
            'cd_psgr' => 1589,
            'nm_psgr' => 'ELMO JOSE DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-07-04',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 448,
        ]);

        Passenger::create([
            'cd_psgr' => 1590,
            'nm_psgr' => 'JOSE ALBERTO ESCAMILHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1987-05-05',
            'cd_pais' => 'CU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 524,
        ]);

        Passenger::create([
            'cd_psgr' => 1591,
            'nm_psgr' => 'EDERSON DOS SANTOS PEREIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-04-13',
            'cd_pais' => 'NL',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 302,
        ]);

        Passenger::create([
            'cd_psgr' => 1592,
            'nm_psgr' => 'RAQUEL APARECIDA TOLENTINO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1988-07-26',
            'cd_pais' => 'US',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 685,
        ]);

        Passenger::create([
            'cd_psgr' => 1593,
            'nm_psgr' => 'GLAUCO FERNANDES GRUPPI',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-09-20',
            'cd_pais' => 'MZ',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 97,
        ]);

        Passenger::create([
            'cd_psgr' => 1594,
            'nm_psgr' => 'VITTORIO CARUSO FILHO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-10-02',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 239,
        ]);

        Passenger::create([
            'cd_psgr' => 1595,
            'nm_psgr' => 'RANDAL LOURENCO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-10-02',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 272,
        ]);

        Passenger::create([
            'cd_psgr' => 1596,
            'nm_psgr' => 'JOSE REIS VELOSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-09-20',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 56,
        ]);

        Passenger::create([
            'cd_psgr' => 1597,
            'nm_psgr' => 'EDSON PIRES DE SOUZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1988-03-08',
            'cd_pais' => 'VE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 823,
        ]);

        Passenger::create([
            'cd_psgr' => 1598,
            'nm_psgr' => 'RINGO FERREIRA PANZA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-03-07',
            'cd_pais' => 'UA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 794,
        ]);

        Passenger::create([
            'cd_psgr' => 1599,
            'nm_psgr' => 'JESUS ANSELMO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-04-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 459,
        ]);

        Passenger::create([
            'cd_psgr' => 1600,
            'nm_psgr' => 'PAULO SERGIO C. DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-05-02',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 242,
        ]);

        Passenger::create([
            'cd_psgr' => 1601,
            'nm_psgr' => 'JOSE GERALDO DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-08-22',
            'cd_pais' => 'AT',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 263,
        ]);

        Passenger::create([
            'cd_psgr' => 1602,
            'nm_psgr' => 'ROBERTO CARLOS MUNIZ GASPAR',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-09-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 903,
        ]);

        Passenger::create([
            'cd_psgr' => 1603,
            'nm_psgr' => 'MARCIO GERALDO BARBOSA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-09-19',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 901,
        ]);

        Passenger::create([
            'cd_psgr' => 1604,
            'nm_psgr' => 'WANDER BERNARDO DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-11-14',
            'cd_pais' => 'CA',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 404,
        ]);

        Passenger::create([
            'cd_psgr' => 1605,
            'nm_psgr' => 'ISAEL FERNANDES TOLEDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-04-04',
            'cd_pais' => 'JP',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 487,
        ]);

        Passenger::create([
            'cd_psgr' => 1606,
            'nm_psgr' => 'PAULO HENRIQUE DA ROCHA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-06-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 731,
        ]);

        Passenger::create([
            'cd_psgr' => 1607,
            'nm_psgr' => 'IZABEL APARECIDA L. FIGUEIREDO',
            'ic_sexo_psgr' => 'F',
            'dt_nasc_psgr' => '1989-06-27',
            'cd_pais' => 'ES',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 711,
        ]);

        Passenger::create([
            'cd_psgr' => 1608,
            'nm_psgr' => 'HENRIQUE GUILHERME F. M. SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1989-08-26',
            'cd_pais' => 'AU',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 684,
        ]);

        Passenger::create([
            'cd_psgr' => 1609,
            'nm_psgr' => 'PAULO ROBERTO R. GUIMARAES',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1990-01-09',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 971,
        ]);

        Passenger::create([
            'cd_psgr' => 1610,
            'nm_psgr' => 'EVANDRO JOVELINO DE OLIVEIRA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1990-06-26',
            'cd_pais' => 'PE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 685,
        ]);

        Passenger::create([
            'cd_psgr' => 1611,
            'nm_psgr' => 'LEONEL BRIZOLA RAIMUNDO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1990-08-21',
            'cd_pais' => 'SE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 108,
        ]);

        Passenger::create([
            'cd_psgr' => 1612,
            'nm_psgr' => 'EXPEDITO APARECIDO AFONSO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1990-07-24',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 470,
        ]);

        Passenger::create([
            'cd_psgr' => 1613,
            'nm_psgr' => 'AURELIO SCORALICK CUSTODIO',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1991-01-08',
            'cd_pais' => 'DE',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 837,
        ]);

        Passenger::create([
            'cd_psgr' => 1614,
            'nm_psgr' => 'ANTONIO WANDERLEY DA SILVA',
            'ic_sexo_psgr' => 'M',
            'dt_nasc_psgr' => '1990-10-16',
            'cd_pais' => 'BR',
            'ic_estd_civil' => 'S',
            'cd_psgr_resp' => 688,
        ]);

    }
}
