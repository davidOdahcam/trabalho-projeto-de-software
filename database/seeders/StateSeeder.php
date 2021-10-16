<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'sg_uf' => 'AC',
            'nm_uf' => 'ACRE',
        ]);

        State::create([
            'sg_uf' => 'AL',
            'nm_uf' => 'ALAGOAS',
        ]);

        State::create([
            'sg_uf' => 'AM',
            'nm_uf' => 'AMAZONAS',
        ]);

        State::create([
            'sg_uf' => 'AP',
            'nm_uf' => 'AMAPA',
        ]);

        State::create([
            'sg_uf' => 'BA',
            'nm_uf' => 'BAHIA',
        ]);

        State::create([
            'sg_uf' => 'CE',
            'nm_uf' => 'CEARA',
        ]);

        State::create([
            'sg_uf' => 'DF',
            'nm_uf' => 'DISTRITO FEDERAL',
        ]);

        State::create([
            'sg_uf' => 'ES',
            'nm_uf' => 'ESPIRITO SANTO',
        ]);

        State::create([
            'sg_uf' => 'FN',
            'nm_uf' => 'FERNANDO DE NORONHA',
        ]);

        State::create([
            'sg_uf' => 'GO',
            'nm_uf' => 'GOIAS',
        ]);

        State::create([
            'sg_uf' => 'MA',
            'nm_uf' => 'MARANHAO',
        ]);

        State::create([
            'sg_uf' => 'MG',
            'nm_uf' => 'MINAS GERAIS',
        ]);

        State::create([
            'sg_uf' => 'MS',
            'nm_uf' => 'MATO GROSSO DO SUL',
        ]);

        State::create([
            'sg_uf' => 'MT',
            'nm_uf' => 'MATO GROSSO',
        ]);

        State::create([
            'sg_uf' => 'PA',
            'nm_uf' => 'PARA',
        ]);

        State::create([
            'sg_uf' => 'PB',
            'nm_uf' => 'PARAIBA',
        ]);

        State::create([
            'sg_uf' => 'PE',
            'nm_uf' => 'PERNAMBUCO',
        ]);

        State::create([
            'sg_uf' => 'PI',
            'nm_uf' => 'PIAUI',
        ]);

        State::create([
            'sg_uf' => 'PR',
            'nm_uf' => 'PARANA',
        ]);

        State::create([
            'sg_uf' => 'RJ',
            'nm_uf' => 'RIO DE JANEIRO',
        ]);

        State::create([
            'sg_uf' => 'RN',
            'nm_uf' => 'RIO GRANDE DO NORTE',
        ]);

        State::create([
            'sg_uf' => 'RO',
            'nm_uf' => 'RONDONIA',
        ]);

        State::create([
            'sg_uf' => 'RR',
            'nm_uf' => 'RORAIMA',
        ]);

        State::create([
            'sg_uf' => 'RS',
            'nm_uf' => 'RIO GRANDE DO SUL',
        ]);

        State::create([
            'sg_uf' => 'SC',
            'nm_uf' => 'SANTA CATARINA',
        ]);

        State::create([
            'sg_uf' => 'SE',
            'nm_uf' => 'SERGIPE',
        ]);

        State::create([
            'sg_uf' => 'SP',
            'nm_uf' => 'SAO PAULO',
        ]);

        State::create([
            'sg_uf' => 'TO',
            'nm_uf' => 'TOCANTINS',
        ]);
    }
}
