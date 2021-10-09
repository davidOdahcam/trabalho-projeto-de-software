<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create(['cd_eqpt' => '100',
            'nm_eqpt' => 'FOKKER 100',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 90
        ]);

        Equipment::create(['cd_eqpt' => '310',
            'nm_eqpt' => 'AIRBUS A310',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 210
        ]);

        Equipment::create(['cd_eqpt' => '313',
            'nm_eqpt' => 'AIRBUS A310',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 201
        ]);

        Equipment::create(['cd_eqpt' => '707',
            'nm_eqpt' => 'BOEING 707',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 222
            ]);

        Equipment::create(['cd_eqpt' => '727',
            'nm_eqpt' => 'BOEING 727-100',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 120
            ]);

        Equipment::create(['cd_eqpt' => '72S',
            'nm_eqpt' => 'BOEING 727-200',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 140
            ]);

        Equipment::create(['cd_eqpt' => '733',
            'nm_eqpt' => 'BOEING 737-300',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 119
        ]);

        Equipment::create(['cd_eqpt' => '734',
            'nm_eqpt' => 'BOEING 737-400',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 140
        ]);

        Equipment::create(['cd_eqpt' => '73S',
            'nm_eqpt' => 'BOEING 737-200 ADVANCED',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 110
        ]);

        Equipment::create(['cd_eqpt' => '743',
            'nm_eqpt' => 'BOEING 747-300(PAX)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 402
        ]);

        Equipment::create(['cd_eqpt' => '744',
            'nm_eqpt' => 'BOEING 747-400(PAX)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 440
        ]);

        Equipment::create(['cd_eqpt' => '747',
            'nm_eqpt' => 'BOEING 747-200(PAX)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 420
        ]);

        Equipment::create(['cd_eqpt' => '74D',
            'nm_eqpt' => 'BOEING 747-300B(PAX-CARGA)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 400
        ]);

        Equipment::create(['cd_eqpt' => '74L',
            'nm_eqpt' => 'JATO 747 SP(JUMBO SPECIAL PERFORMANCE)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 520
        ]);

        Equipment::create(['cd_eqpt' => '74M',
            'nm_eqpt' => 'BOEING 747-200B(PAX-CARGA)',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 400
        ]);

        Equipment::create(['cd_eqpt' => '757',
            'nm_eqpt' => 'BOEING 757',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 350
        ]);

        Equipment::create(['cd_eqpt' => '763',
            'nm_eqpt' => 'BOEING 767-300',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 280
        ]);

        Equipment::create(['cd_eqpt' => '767',
            'nm_eqpt' => 'BOEING 767-200',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 290
        ]);

        Equipment::create(['cd_eqpt' => 'AB3',
            'nm_eqpt' => 'AIRBUS A300',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 210
        ]);

        Equipment::create(['cd_eqpt' => 'BH2',
            'nm_eqpt' => 'BELL JET RANGER III',
            'dc_tipo_eqpt' => 'HELICOPTERO',
            'qt_motor' => 1,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 8
        ]);

        Equipment::create(['cd_eqpt' => 'CNA',
            'nm_eqpt' => 'CESSNA CARAVAN',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 10
        ]);

        Equipment::create(['cd_eqpt' => 'D10',
            'nm_eqpt' => 'DOUGLAS DC-10',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 250
        ]);

        Equipment::create(['cd_eqpt' => 'D8S',
            'nm_eqpt' => 'DOUGLAS SUPER DC8-63',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => null
        ]);

        Equipment::create(['cd_eqpt' => 'DC8',
            'nm_eqpt' => 'DOUGLAS DC-8',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 200
        ]);

        Equipment::create(['cd_eqpt' => 'DC9',
            'nm_eqpt' => 'DOUGLAS DC-9',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 210
        ]);

        Equipment::create(['cd_eqpt' => 'DH8',
            'nm_eqpt' => 'BOEING CANADA DHC8 DASH 8',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 230
        ]);

        Equipment::create(['cd_eqpt' => 'EM2',
            'nm_eqpt' => 'BRASILIA',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 22
        ]);

        Equipment::create(['cd_eqpt' => 'EMB',
            'nm_eqpt' => 'BANDEIRANTE',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 18
        ]);

        Equipment::create(['cd_eqpt' => 'F27',
            'nm_eqpt' => 'FOKKER-F27 FRIENDSHIP',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 65
        ]);

        Equipment::create(['cd_eqpt' => 'F28',
            'nm_eqpt' => 'FOKKER 28',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 80
        ]);

        Equipment::create(['cd_eqpt' => 'F50',
            'nm_eqpt' => 'FOKKER F50',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 140
        ]);

        Equipment::create(['cd_eqpt' => 'FK7',
            'nm_eqpt' => 'FAIRCHILD-FH-227B',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => null
        ]);

        Equipment::create(['cd_eqpt' => 'L10',
            'nm_eqpt' => 'LOCKHEED-L-1011-TRI-STAR',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 300
        ]);

        Equipment::create(['cd_eqpt' => 'L15',
            'nm_eqpt' => 'LOCKHEED-L-1011-500-TRI-STAR',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 320
        ]);

        Equipment::create(['cd_eqpt' => 'LOE',
            'nm_eqpt' => 'ELECTRA II',
            'dc_tipo_eqpt' => 'TURBO HELICE',
            'qt_motor' => 4,
            'ic_tipo_prps' => 'M',
            'qt_psgr' => 130
        ]);

        Equipment::create(['cd_eqpt' => 'M11',
            'nm_eqpt' => 'DOUGLAS MD-11',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 3,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 85
        ]);

        Equipment::create(['cd_eqpt' => 'M88',
            'nm_eqpt' => 'DOUGLAS MD-88',
            'dc_tipo_eqpt' => 'JATO',
            'qt_motor' => 2,
            'ic_tipo_prps' => 'R',
            'qt_psgr' => 95
        ]);
    }
}
