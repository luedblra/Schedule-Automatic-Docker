<?php

use Illuminate\Database\Seeder;

class PortsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ports')->delete();

        \DB::table('ports')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Durres (Durazzo)',
                    'code' => 'AL DRZ',
                    'country_id' => 6,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Sarande',
                    'code' => 'AL SAR',
                    'country_id' => 6,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Shengjjin',
                    'code' => 'AL SHG',
                    'country_id' => 6,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Vlore (Vlora, Vlone)',
                    'code' => 'AL VOA',
                    'country_id' => 6,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Algiers',
                    'code' => 'DZ ALG',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Annaba (Ex Bone)',
                    'code' => 'DZ AAE',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Arzew',
                    'code' => 'DZ AZW',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Bejaia (Ex Bougie)',
                    'code' => 'DZ BJA',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Dellys',
                    'code' => 'DZ DEL',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Ghazaouet',
                    'code' => 'DZ GHA',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Mostaganem',
                    'code' => 'DZ MOS',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Oran',
                    'code' => 'DZ ORN',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Skikda (Ex Philippeville)',
                    'code' => 'DZ SKI',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Tenes',
                    'code' => 'DZ TEN',
                    'country_id' => 60,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Pago Pago',
                    'code' => 'AS PPG',
                    'country_id' => 11,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Cabinda',
                    'code' => 'AO CAB',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Lobito',
                    'code' => 'AO LOB',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Luanda',
                    'code' => 'AO LAD',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Namibe',
                    'code' => 'AO MSZ',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Porto Amboim',
                    'code' => 'AO PBN',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Soyo',
                    'code' => 'AO SOQ',
                    'country_id' => 8,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'Bahia Blanca',
                    'code' => 'AR BHI',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Buenos Aires',
                    'code' => 'AR BUE',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'Comodoro Rivadavia',
                    'code' => 'AR CRD',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'Concepcion del
Uruguay',
                    'code' => 'AR COU',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'Mar del Plata',
                    'code' => 'AR MDQ',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'Necochea',
                    'code' => 'AR NEC',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'Puerto Madryn',
                    'code' => 'AR PMY',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'Rio Gallegos',
                    'code' => 'AR RGL',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'Rosario',
                    'code' => 'AR ROS',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'Santa Fe',
                    'code' => 'AR SFN',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            31 =>
                array (
                    'id' => 32,
                    'name' => 'Ushuaia',
                    'code' => 'AR USH',
                    'country_id' => 10,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            32 =>
                array (
                    'id' => 33,
                    'name' => 'Oranjestad',
                    'code' => 'AW ORJ',
                    'country_id' => 14,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            33 =>
                array (
                    'id' => 34,
                    'name' => 'Georgetown',
                    'code' => 'SH ASI',
                    'country_id' => 196,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'Adelaide',
                    'code' => 'AU PAE',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            35 =>
                array (
                    'id' => 36,
                    'name' => 'Brisbane',
                    'code' => 'AU BNE',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            36 =>
                array (
                    'id' => 37,
                    'name' => 'Cairns',
                    'code' => 'AU CNS',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            37 =>
                array (
                    'id' => 38,
                    'name' => 'Darwin',
                    'code' => 'AU DRW',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            38 =>
                array (
                    'id' => 39,
                    'name' => 'Devonport',
                    'code' => 'AU DPO',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            39 =>
                array (
                    'id' => 40,
                    'name' => 'Fremantle',
                    'code' => 'AU FRE',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            40 =>
                array (
                    'id' => 41,
                    'name' => 'Geelong',
                    'code' => 'AU GEX',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            41 =>
                array (
                    'id' => 42,
                    'name' => 'Hobart',
                    'code' => 'AU HBA',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            42 =>
                array (
                    'id' => 43,
                    'name' => 'Mackay',
                    'code' => 'AU MKY',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            43 =>
                array (
                    'id' => 44,
                    'name' => 'Melbourne',
                    'code' => 'AU MEL',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            44 =>
                array (
                    'id' => 45,
                    'name' => 'Sydney',
                    'code' => 'AU SYD',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            45 =>
                array (
                    'id' => 46,
                    'name' => 'Townsville',
                    'code' => 'AU TSV',
                    'country_id' => 13,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            46 =>
                array (
                    'id' => 47,
                    'name' => 'Baku',
                    'code' => 'AZ BAK',
                    'country_id' => 15,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            47 =>
                array (
                    'id' => 48,
                    'name' => 'Freeport',
                    'code' => 'BS FPO',
                    'country_id' => 31,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            48 =>
                array (
                    'id' => 49,
                    'name' => 'Nassau',
                    'code' => 'BS NAS',
                    'country_id' => 31,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            49 =>
                array (
                    'id' => 50,
                    'name' => 'Mina Salman',
                    'code' => 'BH MIN',
                    'country_id' => 22,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            50 =>
                array (
                    'id' => 51,
                    'name' => 'Sitra',
                    'code' => 'BH SIT',
                    'country_id' => 22,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            51 =>
                array (
                    'id' => 52,
                    'name' => 'Chittagong',
                    'code' => 'BD CGP',
                    'country_id' => 18,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            52 =>
                array (
                    'id' => 53,
                    'name' => 'Mongla',
                    'code' => 'BD MGL',
                    'country_id' => 18,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            53 =>
                array (
                    'id' => 54,
                    'name' => 'Bridgetown',
                    'code' => 'BB BGI',
                    'country_id' => 17,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            54 =>
                array (
                    'id' => 55,
                    'name' => 'Antwerp',
                    'code' => 'BE ANR',
                    'country_id' => 34,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            55 =>
                array (
                    'id' => 56,
                    'name' => 'Brussels (Bruxelles)',
                    'code' => 'BE BRU',
                    'country_id' => 34,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            56 =>
                array (
                    'id' => 57,
                    'name' => 'Ghent',
                    'code' => 'BE GNE',
                    'country_id' => 34,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            57 =>
                array (
                    'id' => 58,
                    'name' => 'Liege',
                    'code' => 'BE LGG',
                    'country_id' => 34,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            58 =>
                array (
                    'id' => 59,
                    'name' => 'Zeebrugge',
                    'code' => 'BE ZEE',
                    'country_id' => 34,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            59 =>
                array (
                    'id' => 60,
                    'name' => 'Belize City',
                    'code' => 'BZ BZE',
                    'country_id' => 35,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            60 =>
                array (
                    'id' => 61,
                    'name' => 'Cotonou',
                    'code' => 'BJ COO',
                    'country_id' => 24,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            61 =>
                array (
                    'id' => 62,
                    'name' => 'Hamilton',
                    'code' => 'BM BDA',
                    'country_id' => 26,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            62 =>
                array (
                    'id' => 63,
                    'name' => 'St Georges',
                    'code' => 'BM SGE',
                    'country_id' => 26,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            63 =>
                array (
                    'id' => 64,
                    'name' => 'Belem',
                    'code' => 'BR BEL',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            64 =>
                array (
                    'id' => 65,
                    'name' => 'Fortaleza',
                    'code' => 'BR FOR',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            65 =>
                array (
                    'id' => 66,
                    'name' => 'Imbituba',
                    'code' => 'BR IBB',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            66 =>
                array (
                    'id' => 67,
                    'name' => 'Manaus',
                    'code' => 'BR MAO',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            67 =>
                array (
                    'id' => 68,
                    'name' => 'Paranagua',
                    'code' => 'BR PNG',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            68 =>
                array (
                    'id' => 69,
                    'name' => 'Porto Alegre',
                    'code' => 'BR POA',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            69 =>
                array (
                    'id' => 70,
                    'name' => 'Recife',
                    'code' => 'BR REC',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            70 =>
                array (
                    'id' => 71,
                    'name' => 'Rio De Janeiro',
                    'code' => 'BR RIO',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            71 =>
                array (
                    'id' => 72,
                    'name' => 'Rio Grande',
                    'code' => 'BR RIG',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            72 =>
                array (
                    'id' => 73,
                    'name' => 'Salvador',
                    'code' => 'BR SSA',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            73 =>
                array (
                    'id' => 74,
                    'name' => 'Santos',
                    'code' => 'BR SSZ',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            74 =>
                array (
                    'id' => 75,
                    'name' => 'Vitoria',
                    'code' => 'BR VIX',
                    'country_id' => 30,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            75 =>
                array (
                    'id' => 76,
                    'name' => 'Kuala Belait',
                    'code' => 'BN KUB',
                    'country_id' => 27,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            76 =>
                array (
                    'id' => 77,
                    'name' => 'Muara',
                    'code' => 'BN MUA',
                    'country_id' => 27,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            77 =>
                array (
                    'id' => 78,
                    'name' => 'Varna',
                    'code' => 'BG VAR',
                    'country_id' => 21,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            78 =>
                array (
                    'id' => 79,
                    'name' => 'Kompongsom (also
known as:',
                    'code' => 'KH KOS',
                    'country_id' => 114,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            79 =>
                array (
                    'id' => 80,
                    'name' => 'Phnom Penh',
                    'code' => 'KH PNH',
                    'country_id' => 114,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            80 =>
                array (
                    'id' => 81,
                    'name' => 'Douala',
                    'code' => 'CM DLA',
                    'country_id' => 45,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            81 =>
                array (
                    'id' => 82,
                    'name' => 'Kribi',
                    'code' => 'CM KBI',
                    'country_id' => 45,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            82 =>
                array (
                    'id' => 83,
                    'name' => 'Tiko',
                    'code' => 'CM TKC',
                    'country_id' => 45,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            83 =>
                array (
                    'id' => 84,
                    'name' => 'Alberni',
                    'code' => 'CM PAB',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            84 =>
                array (
                    'id' => 85,
                    'name' => '',
                    'code' => '',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            85 =>
                array (
                    'id' => 86,
                    'name' => 'Becancour',
                    'code' => 'CA BEC',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            86 =>
                array (
                    'id' => 87,
                    'name' => 'Churchill',
                    'code' => 'CA CHV',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            87 =>
                array (
                    'id' => 88,
                    'name' => 'Fraser River Port (Port
of New Westminster)',
                    'code' => 'CA NWE',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            88 =>
                array (
                    'id' => 89,
                    'name' => 'Halifax',
                    'code' => 'CA HAL',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            89 =>
                array (
                    'id' => 90,
                    'name' => 'Hamilton',
                    'code' => 'CA HAM',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            90 =>
                array (
                    'id' => 91,
                    'name' => 'Halifax',
                    'code' => 'CA HAL',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            91 =>
                array (
                    'id' => 92,
                    'name' => 'Montreal',
                    'code' => 'CA MTR',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            92 =>
                array (
                    'id' => 93,
                    'name' => 'Nanaimo',
                    'code' => 'CA NNO',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            93 =>
                array (
                    'id' => 94,
                    'name' => 'Saguenay',
                    'code' => 'n/a',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            94 =>
                array (
                    'id' => 95,
                    'name' => 'Sept Iles (Seven
Islands)',
                    'code' => 'CA SEI',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            95 =>
                array (
                    'id' => 96,
                    'name' => 'St Johns',
                    'code' => 'CA SJF',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            96 =>
                array (
                    'id' => 97,
                    'name' => 'Sydney',
                    'code' => 'CA SYD',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            97 =>
                array (
                    'id' => 98,
                    'name' => 'Thunder Bay',
                    'code' => 'CA THU',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            98 =>
                array (
                    'id' => 99,
                    'name' => 'Toronto',
                    'code' => 'CA TOR',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            99 =>
                array (
                    'id' => 100,
                    'name' => 'Trois-Rivieres',
                    'code' => 'CA TRR',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            100 =>
                array (
                    'id' => 101,
                    'name' => 'Vancouver',
                    'code' => 'CA VAN',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            101 =>
                array (
                    'id' => 102,
                    'name' => 'Windsor',
                    'code' => 'CA WND',
                    'country_id' => 36,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            102 =>
                array (
                    'id' => 103,
                    'name' => 'Las Palmas',
                    'code' => 'ES LPA',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            103 =>
                array (
                    'id' => 104,
                    'name' => 'Santa Cruz de
Tenerife',
                    'code' => 'ES SCT',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            104 =>
                array (
                    'id' => 105,
                    'name' => 'Porto Grande',
                    'code' => 'CV PGR',
                    'country_id' => 50,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            105 =>
                array (
                    'id' => 106,
                    'name' => 'Georgetown, Grand
Cayman',
                    'code' => 'KY GEC',
                    'country_id' => 121,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            106 =>
                array (
                    'id' => 107,
                    'name' => 'Antofagasta',
                    'code' => 'CL ANF',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            107 =>
                array (
                    'id' => 108,
                    'name' => 'Arica',
                    'code' => 'CL ARI',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            108 =>
                array (
                    'id' => 109,
                    'name' => 'Chanaral',
                    'code' => 'CL CNR',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            109 =>
                array (
                    'id' => 110,
                    'name' => 'Iquique',
                    'code' => 'CL IQQ',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            110 =>
                array (
                    'id' => 111,
                    'name' => 'Puerto Montt',
                    'code' => 'CL PMC',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            111 =>
                array (
                    'id' => 112,
                    'name' => 'Punta Arenas',
                    'code' => 'CL PUQ',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            112 =>
                array (
                    'id' => 113,
                    'name' => 'San Antonio',
                    'code' => 'CL SAI',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            113 =>
                array (
                    'id' => 114,
                    'name' => 'San Vicente',
                    'code' => 'CL SVE',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            114 =>
                array (
                    'id' => 115,
                    'name' => 'Talcahuano',
                    'code' => 'CL TAL',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            115 =>
                array (
                    'id' => 116,
                    'name' => 'Valparaiso',
                    'code' => 'CL VAP',
                    'country_id' => 44,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            116 =>
                array (
                    'id' => 117,
                    'name' => 'Dalian',
                    'code' => 'CN DLC',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            117 =>
                array (
                    'id' => 118,
                    'name' => 'Fuzhou',
                    'code' => 'CN FOC',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            118 =>
                array (
                    'id' => 119,
                    'name' => 'Guangzhou',
                    'code' => 'CN CAN',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            119 =>
                array (
                    'id' => 120,
                    'name' => 'Haikou',
                    'code' => 'CN HAK',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            120 =>
                array (
                    'id' => 121,
                    'name' => 'Lianyungang',
                    'code' => 'CN LYG',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            121 =>
                array (
                    'id' => 122,
                    'name' => 'Nantong',
                    'code' => 'CN NTG',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            122 =>
                array (
                    'id' => 123,
                    'name' => 'Ningbo',
                    'code' => 'CN NGB',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            123 =>
                array (
                    'id' => 124,
                    'name' => 'Qingdao',
                    'code' => 'CN TAO',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            124 =>
                array (
                    'id' => 125,
                    'name' => 'Qinhuangdao',
                    'code' => 'CN SHP',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            125 =>
                array (
                    'id' => 126,
                    'name' => 'Shanghai',
                    'code' => 'CN SHA',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            126 =>
                array (
                    'id' => 127,
                    'name' => 'Shantou',
                    'code' => 'CN SWA',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            127 =>
                array (
                    'id' => 128,
                    'name' => 'Tianjin',
                    'code' => 'CN TSN',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            128 =>
                array (
                    'id' => 129,
                    'name' => 'Xiamen',
                    'code' => 'CN XMN',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            129 =>
                array (
                    'id' => 130,
                    'name' => 'Zhanjiang',
                    'code' => 'CN ZHA',
                    'country_id' => 46,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            130 =>
                array (
                    'id' => 131,
                    'name' => 'Barranquilla',
                    'code' => 'CO BAQ',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            131 =>
                array (
                    'id' => 132,
                    'name' => 'Buenaventura',
                    'code' => 'CO BUN',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            132 =>
                array (
                    'id' => 133,
                    'name' => 'Cartagena',
                    'code' => 'CO CTG',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            133 =>
                array (
                    'id' => 134,
                    'name' => 'Puerto Bolivar',
                    'code' => 'CO PBO',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            134 =>
                array (
                    'id' => 135,
                    'name' => 'Tumaco',
                    'code' => 'CO TCO',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            135 =>
                array (
                    'id' => 136,
                    'name' => 'Turbo',
                    'code' => 'CO TRB',
                    'country_id' => 47,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            136 =>
                array (
                    'id' => 137,
                    'name' => 'Moroni',
                    'code' => 'KM YVA',
                    'country_id' => 116,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            137 =>
                array (
                    'id' => 138,
                    'name' => 'Mutsamudu',
                    'code' => 'KM MUT',
                    'country_id' => 116,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            138 =>
                array (
                    'id' => 139,
                    'name' => 'Pointe Noire',
                    'code' => 'CG PNR',
                    'country_id' => 40,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            139 =>
                array (
                    'id' => 140,
                    'name' => 'Banana',
                    'code' => 'ZR BNW',
                    'country_id' => 40,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            140 =>
                array (
                    'id' => 141,
                    'name' => 'Boma',
                    'code' => 'ZR BOA',
                    'country_id' => 40,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            141 =>
                array (
                    'id' => 142,
                    'name' => 'Caldera',
                    'code' => 'CR CAL',
                    'country_id' => 48,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            142 =>
                array (
                    'id' => 143,
                    'name' => 'Golfito',
                    'code' => 'CR GLF',
                    'country_id' => 48,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            143 =>
                array (
                    'id' => 144,
                    'name' => 'Puntarenas',
                    'code' => 'CR PAS',
                    'country_id' => 48,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            144 =>
                array (
                    'id' => 145,
                    'name' => 'Quepos',
                    'code' => 'CR XQP',
                    'country_id' => 48,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            145 =>
                array (
                    'id' => 146,
                    'name' => 'Abidjan',
                    'code' => 'CI ABJ',
                    'country_id' => 42,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            146 =>
                array (
                    'id' => 147,
                    'name' => 'Rijeka Bakar',
                    'code' => 'HR RJK',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            147 =>
                array (
                    'id' => 148,
                    'name' => 'Zadar',
                    'code' => 'HR ZAD',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            148 =>
                array (
                    'id' => 149,
                    'name' => 'Dubrovnik',
                    'code' => 'HR DBV',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            149 =>
                array (
                    'id' => 150,
                    'name' => 'Omisalj',
                    'code' => 'HR OMI',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            150 =>
                array (
                    'id' => 151,
                    'name' => 'Ploce',
                    'code' => 'HR PLE',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            151 =>
                array (
                    'id' => 152,
                    'name' => 'Pula',
                    'code' => 'HR PUY',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            152 =>
                array (
                    'id' => 153,
                    'name' => 'Sibenik',
                    'code' => 'HR SIB',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            153 =>
                array (
                    'id' => 154,
                    'name' => 'Split',
                    'code' => 'HR SPU',
                    'country_id' => 95,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            154 =>
                array (
                    'id' => 155,
                    'name' => 'Havana',
                    'code' => 'CU HAV',
                    'country_id' => 49,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            155 =>
                array (
                    'id' => 156,
                    'name' => 'Manzanillo',
                    'code' => 'CU MZO',
                    'country_id' => 49,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            156 =>
                array (
                    'id' => 157,
                    'name' => 'Matanzas',
                    'code' => 'CU QMA',
                    'country_id' => 49,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            157 =>
                array (
                    'id' => 158,
                    'name' => 'Nuevitas',
                    'code' => 'CU NVT',
                    'country_id' => 49,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            158 =>
                array (
                    'id' => 159,
                    'name' => 'Santiago de Cuba',
                    'code' => 'CU SCU',
                    'country_id' => 49,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            159 =>
                array (
                    'id' => 160,
                    'name' => 'Akrotiri',
                    'code' => 'CY AKT',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            160 =>
                array (
                    'id' => 161,
                    'name' => 'Famagusta',
                    'code' => 'CY FMG',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            161 =>
                array (
                    'id' => 162,
                    'name' => 'Larnaca',
                    'code' => 'CY LAT',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            162 =>
                array (
                    'id' => 163,
                    'name' => 'Limassol',
                    'code' => 'CY LMS',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            163 =>
                array (
                    'id' => 164,
                    'name' => 'Paphos',
                    'code' => 'CY PFO',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            164 =>
                array (
                    'id' => 165,
                    'name' => 'Vassiliko',
                    'code' => 'CY VAS',
                    'country_id' => 53,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            165 =>
                array (
                    'id' => 166,
                    'name' => 'Aarhus',
                    'code' => 'DK AAR',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            166 =>
                array (
                    'id' => 167,
                    'name' => 'Esbjerg',
                    'code' => 'DK EBJ',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            167 =>
                array (
                    'id' => 168,
                    'name' => 'Fredericia',
                    'code' => 'DK FRC',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            168 =>
                array (
                    'id' => 169,
                    'name' => 'Frederikshavn',
                    'code' => 'DK FDH',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            169 =>
                array (
                    'id' => 170,
                    'name' => 'Grenaa',
                    'code' => 'DK GRE',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            170 =>
                array (
                    'id' => 171,
                    'name' => 'Odense',
                    'code' => 'DK ODE',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            171 =>
                array (
                    'id' => 172,
                    'name' => 'Ronne',
                    'code' => 'DK RNN',
                    'country_id' => 57,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            172 =>
                array (
                    'id' => 173,
                    'name' => 'Djibouti',
                    'code' => 'DJ JIB',
                    'country_id' => 56,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            173 =>
                array (
                    'id' => 174,
                    'name' => 'Portsmouth',
                    'code' => 'DM POR',
                    'country_id' => 56,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            174 =>
                array (
                    'id' => 175,
                    'name' => 'Roseau',
                    'code' => 'DM RSU',
                    'country_id' => 56,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            175 =>
                array (
                    'id' => 176,
                    'name' => 'Barahona',
                    'code' => 'DO BRX',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            176 =>
                array (
                    'id' => 177,
                    'name' => 'La Romana',
                    'code' => 'DO LRM',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            177 =>
                array (
                    'id' => 178,
                    'name' => 'Puerto Plata',
                    'code' => 'DO POP',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            178 =>
                array (
                    'id' => 179,
                    'name' => 'Rio Haina',
                    'code' => 'DO HAI',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            179 =>
                array (
                    'id' => 180,
                    'name' => 'San Pedro de Macoris',
                    'code' => 'DO SPM',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            180 =>
                array (
                    'id' => 181,
                    'name' => 'Santo Domingo',
                    'code' => 'DO SDQ',
                    'country_id' => 59,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            181 =>
                array (
                    'id' => 182,
                    'name' => 'Esmeraldas',
                    'code' => 'EC ESM',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            182 =>
                array (
                    'id' => 183,
                    'name' => 'Guayaquil',
                    'code' => 'EC GYE',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            183 =>
                array (
                    'id' => 184,
                    'name' => 'La Libertad',
                    'code' => 'EC LLD',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            184 =>
                array (
                    'id' => 185,
                    'name' => 'Manta',
                    'code' => 'EC MEC',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            185 =>
                array (
                    'id' => 186,
                    'name' => 'Puerto Bolivar',
                    'code' => 'EC PBO',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            186 =>
                array (
                    'id' => 187,
                    'name' => 'San Lorenzo',
                    'code' => 'EC SLR',
                    'country_id' => 61,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            187 =>
                array (
                    'id' => 188,
                    'name' => 'Alexandria',
                    'code' => 'EG EDK',
                    'country_id' => 63,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            188 =>
                array (
                    'id' => 189,
                    'name' => 'Damietta',
                    'code' => 'EG DAM',
                    'country_id' => 63,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            189 =>
                array (
                    'id' => 190,
                    'name' => 'Port Said',
                    'code' => 'EG PSD',
                    'country_id' => 63,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            190 =>
                array (
                    'id' => 191,
                    'name' => 'Suez (Al Suweis)',
                    'code' => 'EG',
                    'country_id' => 63,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            191 =>
                array (
                    'id' => 192,
                    'name' => 'Acajutla',
                    'code' => 'SV AQJ',
                    'country_id' => 206,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            192 =>
                array (
                    'id' => 193,
                    'name' => 'Cutuco',
                    'code' => 'SV CUT',
                    'country_id' => 206,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            193 =>
                array (
                    'id' => 194,
                    'name' => 'Bata',
                    'code' => 'GQ BSG',
                    'country_id' => 86,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            194 =>
                array (
                    'id' => 195,
                    'name' => 'Ceiba Marine
Terminal',
                    'code' => 'n/a',
                    'country_id' => 86,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            195 =>
                array (
                    'id' => 196,
                    'name' => 'Malabo (Rey Malabo)',
                    'code' => 'GQ SSG',
                    'country_id' => 86,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            196 =>
                array (
                    'id' => 197,
                    'name' => 'P?rnu',
                    'code' => 'EE PYA',
                    'country_id' => 62,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            197 =>
                array (
                    'id' => 198,
                    'name' => 'Tallinn',
                    'code' => 'EE TLL',
                    'country_id' => 62,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            198 =>
                array (
                    'id' => 199,
                    'name' => 'Klaksvik',
                    'code' => 'FO KVI',
                    'country_id' => 72,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            199 =>
                array (
                    'id' => 200,
                    'name' => 'Torshavn',
                    'code' => 'FO THO',
                    'country_id' => 72,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            200 =>
                array (
                    'id' => 201,
                    'name' => 'Labasa (Lambasa)',
                    'code' => 'FJ LBS',
                    'country_id' => 69,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            201 =>
                array (
                    'id' => 202,
                    'name' => 'Lautoka',
                    'code' => 'FJ LTK',
                    'country_id' => 69,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            202 =>
                array (
                    'id' => 203,
                    'name' => 'Levuka',
                    'code' => 'FJ LEV',
                    'country_id' => 69,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            203 =>
                array (
                    'id' => 204,
                    'name' => 'Savu Savu',
                    'code' => 'FJ SVU',
                    'country_id' => 69,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            204 =>
                array (
                    'id' => 205,
                    'name' => 'Suva',
                    'code' => 'FJ SUV',
                    'country_id' => 69,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            205 =>
                array (
                    'id' => 206,
                    'name' => 'Hamina',
                    'code' => 'FI HMN',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            206 =>
                array (
                    'id' => 207,
                    'name' => 'Helsinki',
                    'code' => 'FI HEL',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            207 =>
                array (
                    'id' => 208,
                    'name' => 'Kokkola',
                    'code' => 'FI KOK',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            208 =>
                array (
                    'id' => 209,
                    'name' => 'Kotka',
                    'code' => 'FI KTK',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            209 =>
                array (
                    'id' => 210,
                    'name' => 'Loviisa',
                    'code' => 'FI LOV',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            210 =>
                array (
                    'id' => 211,
                    'name' => 'Oulu',
                    'code' => 'FI OUL',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            211 =>
                array (
                    'id' => 212,
                    'name' => 'Pori',
                    'code' => 'FI POR',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            212 =>
                array (
                    'id' => 213,
                    'name' => 'Rauma',
                    'code' => 'FI RAU',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            213 =>
                array (
                    'id' => 214,
                    'name' => 'Turku',
                    'code' => 'FI TKU',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            214 =>
                array (
                    'id' => 215,
                    'name' => 'Uusikaupunki',
                    'code' => 'FI UKI',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            215 =>
                array (
                    'id' => 216,
                    'name' => 'Vaasa',
                    'code' => 'FI VAA',
                    'country_id' => 68,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            216 =>
                array (
                    'id' => 217,
                    'name' => 'Bordeaux',
                    'code' => 'FR BOD',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            217 =>
                array (
                    'id' => 218,
                    'name' => 'Boulogne Sur Mer',
                    'code' => 'FR BOL',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            218 =>
                array (
                    'id' => 219,
                    'name' => 'Cherbourg',
                    'code' => 'FR CER',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            219 =>
                array (
                    'id' => 220,
                    'name' => 'Dunkerque',
                    'code' => 'FR DKK',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            220 =>
                array (
                    'id' => 221,
                    'name' => 'La Rochelle-Pallice',
                    'code' => 'FR LPE',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            221 =>
                array (
                    'id' => 222,
                    'name' => 'Le Havre',
                    'code' => 'FR LEH',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            222 =>
                array (
                    'id' => 223,
                    'name' => 'Marseille',
                    'code' => 'FR MRS',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            223 =>
                array (
                    'id' => 224,
                    'name' => 'Nantes-St. Nazaire',
                    'code' => 'FR NTE',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            224 =>
                array (
                    'id' => 225,
                    'name' => 'Paris',
                    'code' => 'FR PAR',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            225 =>
                array (
                    'id' => 226,
                    'name' => 'Rouen',
                    'code' => 'FR URO',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            226 =>
                array (
                    'id' => 227,
                    'name' => 'St Malo',
                    'code' => 'FR SML',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            227 =>
                array (
                    'id' => 228,
                    'name' => 'Strasbourg',
                    'code' => 'FR SXB',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            228 =>
                array (
                    'id' => 229,
                    'name' => 'Toulon',
                    'code' => 'FR TLN',
                    'country_id' => 73,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            229 =>
                array (
                    'id' => 230,
                    'name' => 'Cayenne',
                    'code' => 'GF CAY',
                    'country_id' => 78,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            230 =>
                array (
                    'id' => 231,
                    'name' => 'Papeete',
                    'code' => 'PF PPT',
                    'country_id' => 172,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            231 =>
                array (
                    'id' => 232,
                    'name' => 'Cap Lopez',
                    'code' => 'GA CLZ',
                    'country_id' => 74,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            232 =>
                array (
                    'id' => 233,
                    'name' => 'Libreville',
                    'code' => 'GA LBV',
                    'country_id' => 74,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            233 =>
                array (
                    'id' => 234,
                    'name' => 'Owendo',
                    'code' => 'GA OWE',
                    'country_id' => 74,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            234 =>
                array (
                    'id' => 235,
                    'name' => 'Port Gentil',
                    'code' => 'GA POG',
                    'country_id' => 74,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            235 =>
                array (
                    'id' => 236,
                    'name' => 'Banjul',
                    'code' => 'GM BJL',
                    'country_id' => 83,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            236 =>
                array (
                    'id' => 237,
                    'name' => 'Batumi',
                    'code' => 'GE BUS',
                    'country_id' => 77,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            237 =>
                array (
                    'id' => 238,
                    'name' => 'Poti',
                    'code' => 'GE PTI',
                    'country_id' => 77,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            238 =>
                array (
                    'id' => 239,
                    'name' => 'Sukhumi',
                    'code' => 'GE SUI',
                    'country_id' => 77,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            239 =>
                array (
                    'id' => 240,
                    'name' => 'Brake',
                    'code' => 'DE BKE',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            240 =>
                array (
                    'id' => 241,
                    'name' => 'Bremen',
                    'code' => 'DE BRE',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            241 =>
                array (
                    'id' => 242,
                    'name' => 'Bremerhaven',
                    'code' => 'DE BRV',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            242 =>
                array (
                    'id' => 243,
                    'name' => 'Duisburg',
                    'code' => 'DE DUI',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            243 =>
                array (
                    'id' => 244,
                    'name' => 'Dusseldorf',
                    'code' => 'DE DUS',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            244 =>
                array (
                    'id' => 245,
                    'name' => 'Emden',
                    'code' => 'DE EME',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            245 =>
                array (
                    'id' => 246,
                    'name' => 'Hamburg',
                    'code' => 'DE HAM',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            246 =>
                array (
                    'id' => 247,
                    'name' => 'Karlsruhe',
                    'code' => 'DE KAE',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            247 =>
                array (
                    'id' => 248,
                    'name' => 'Kiel',
                    'code' => 'DE KEL',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            248 =>
                array (
                    'id' => 249,
                    'name' => 'Lubeck',
                    'code' => 'DE LBC',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            249 =>
                array (
                    'id' => 250,
                    'name' => 'Mannheim',
                    'code' => 'DE MHG',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            250 =>
                array (
                    'id' => 251,
                    'name' => 'Rostock',
                    'code' => 'DE RSK',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            251 =>
                array (
                    'id' => 252,
                    'name' => 'Wilhelmshavn',
                    'code' => 'DE WVN',
                    'country_id' => 55,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            252 =>
                array (
                    'id' => 253,
                    'name' => 'Takoradi',
                    'code' => 'GH TKD',
                    'country_id' => 80,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            253 =>
                array (
                    'id' => 254,
                    'name' => 'Tema',
                    'code' => 'GH TEM',
                    'country_id' => 80,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            254 =>
                array (
                    'id' => 255,
                    'name' => 'Gibraltar',
                    'code' => 'GI GIB',
                    'country_id' => 81,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            255 =>
                array (
                    'id' => 256,
                    'name' => 'Eleusis',
                    'code' => 'GR EEU',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            256 =>
                array (
                    'id' => 257,
                    'name' => 'Iraklion (Heraklion)',
                    'code' => 'GR HER',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            257 =>
                array (
                    'id' => 258,
                    'name' => 'Kavala',
                    'code' => 'GR KVA',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            258 =>
                array (
                    'id' => 259,
                    'name' => 'Patras',
                    'code' => 'GR GPA',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            259 =>
                array (
                    'id' => 260,
                    'name' => 'Piraeus',
                    'code' => 'GR PIR',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            260 =>
                array (
                    'id' => 261,
                    'name' => 'Thessaloniki',
                    'code' => 'GR SKG',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            261 =>
                array (
                    'id' => 262,
                    'name' => 'Volos',
                    'code' => 'GR VOL',
                    'country_id' => 87,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            262 =>
                array (
                    'id' => 263,
                    'name' => 'Holsteinsborg
(Sisimiut)',
                    'code' => 'GL JHS',
                    'country_id' => 82,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            263 =>
                array (
                    'id' => 264,
                    'name' => 'Nanortalik',
                    'code' => 'GL JNN',
                    'country_id' => 82,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            264 =>
                array (
                    'id' => 265,
                    'name' => 'Narsarsuaq',
                    'code' => 'GL UAK',
                    'country_id' => 82,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            265 =>
                array (
                    'id' => 266,
                    'name' => 'Nuuk (Godthaab)',
                    'code' => 'GL GOH',
                    'country_id' => 82,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            266 =>
                array (
                    'id' => 267,
                    'name' => 'Gustavia',
                    'code' => 'GP GUS',
                    'country_id' => 85,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            267 =>
                array (
                    'id' => 268,
                    'name' => 'Pointe-a-Pitre',
                    'code' => 'GP PTP',
                    'country_id' => 85,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            268 =>
                array (
                    'id' => 269,
                    'name' => 'Apra (Agana)',
                    'code' => 'GU APR',
                    'country_id' => 90,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            269 =>
                array (
                    'id' => 270,
                    'name' => 'Champerico',
                    'code' => 'GT CHR',
                    'country_id' => 89,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            270 =>
                array (
                    'id' => 271,
                    'name' => 'Puerto Barrios',
                    'code' => 'GT PBR',
                    'country_id' => 89,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            271 =>
                array (
                    'id' => 272,
                    'name' => 'Santo Tomas De
Castilla',
                    'code' => 'GT STC',
                    'country_id' => 89,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            272 =>
                array (
                    'id' => 273,
                    'name' => 'Conakry',
                    'code' => 'GN CKY',
                    'country_id' => 84,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            273 =>
                array (
                    'id' => 274,
                    'name' => 'Port Kamsar',
                    'code' => 'GN KMR',
                    'country_id' => 84,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            274 =>
                array (
                    'id' => 275,
                    'name' => 'Bissau',
                    'code' => 'GW BXO',
                    'country_id' => 91,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            275 =>
                array (
                    'id' => 276,
                    'name' => 'Georgetown',
                    'code' => 'GY GEO',
                    'country_id' => 92,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            276 =>
                array (
                    'id' => 277,
                    'name' => 'New Amsterdam',
                    'code' => 'GY QSK',
                    'country_id' => 92,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            277 =>
                array (
                    'id' => 278,
                    'name' => 'Port Au Prince',
                    'code' => 'HT PAP',
                    'country_id' => 96,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            278 =>
                array (
                    'id' => 279,
                    'name' => 'La Ceiba',
                    'code' => 'HN LCE',
                    'country_id' => 94,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            279 =>
                array (
                    'id' => 280,
                    'name' => 'Puerto Castilla',
                    'code' => 'HN PCA',
                    'country_id' => 94,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            280 =>
                array (
                    'id' => 281,
                    'name' => 'Puerto Cortes',
                    'code' => 'HN PCR',
                    'country_id' => 94,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            281 =>
                array (
                    'id' => 282,
                    'name' => 'San Lorenzo',
                    'code' => 'HN SLO',
                    'country_id' => 94,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            282 =>
                array (
                    'id' => 283,
                    'name' => 'Tela',
                    'code' => 'HN TEA',
                    'country_id' => 94,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            283 =>
                array (
                    'id' => 284,
                    'name' => 'Hong Kong',
                    'code' => 'HK HKG',
                    'country_id' => 93,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            284 =>
                array (
                    'id' => 285,
                    'name' => 'Akureyri',
                    'code' => 'IS AKU',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            285 =>
                array (
                    'id' => 286,
                    'name' => 'Hafnarfjordur',
                    'code' => 'IS HAF',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            286 =>
                array (
                    'id' => 287,
                    'name' => 'Isafjordur',
                    'code' => 'IS ISA',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            287 =>
                array (
                    'id' => 288,
                    'name' => 'Keflavik',
                    'code' => 'IS KEV',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            288 =>
                array (
                    'id' => 289,
                    'name' => 'Reykjavik',
                    'code' => 'IS REY',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            289 =>
                array (
                    'id' => 290,
                    'name' => 'Vestmannaeyjar',
                    'code' => 'IS VES',
                    'country_id' => 106,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            290 =>
                array (
                    'id' => 291,
                    'name' => 'Bombay (Mumbai)',
                    'code' => 'IN BOM',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            291 =>
                array (
                    'id' => 292,
                    'name' => 'Calcutta (Kolkata)',
                    'code' => 'IN CCU',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            292 =>
                array (
                    'id' => 293,
                    'name' => 'Chennai (Madras)',
                    'code' => 'IN MAA',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            293 =>
                array (
                    'id' => 294,
                    'name' => 'Cochin',
                    'code' => 'IN COK',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            294 =>
                array (
                    'id' => 295,
                    'name' => 'Kandla',
                    'code' => 'IN IXY',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            295 =>
                array (
                    'id' => 296,
                    'name' => 'Nhava Sheva',
                    'code' => 'IN NSA',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            296 =>
                array (
                    'id' => 297,
                    'name' => '(Jawaharlal Nehru)',
                    'code' => 'IN NSA',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            297 =>
                array (
                    'id' => 298,
                    'name' => 'Tuticorin',
                    'code' => 'IN TUT',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            298 =>
                array (
                    'id' => 299,
                    'name' => 'Vishakhapatnam',
                    'code' => 'IN VTZ',
                    'country_id' => 102,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            299 =>
                array (
                    'id' => 300,
                    'name' => 'Cilacap, Java',
                    'code' => 'ID CXP',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            300 =>
                array (
                    'id' => 301,
                    'name' => '(Tanjung Intan)',
                    'code' => 'ID CXP',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            301 =>
                array (
                    'id' => 302,
                    'name' => 'Cirebon, Java',
                    'code' => 'ID CBN',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            302 =>
                array (
                    'id' => 303,
                    'name' => 'Jakarta, Java',
                    'code' => 'ID TPP',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            303 =>
                array (
                    'id' => 304,
                    'name' => '(Tanjung Priok)',
                    'code' => '',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            304 =>
                array (
                    'id' => 305,
                    'name' => 'Kupang, Timor',
                    'code' => 'ID KOE',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            305 =>
                array (
                    'id' => 306,
                    'name' => 'Palembang, Sumatra',
                    'code' => 'ID PLM',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            306 =>
                array (
                    'id' => 307,
                    'name' => 'Semarang, Java',
                    'code' => 'ID SRG',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            307 =>
                array (
                    'id' => 308,
                    'name' => '(Tanjung Emas)',
                    'code' => 'ID SRG',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            308 =>
                array (
                    'id' => 309,
                    'name' => 'Surabaya, Java',
                    'code' => 'ID SUB',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            309 =>
                array (
                    'id' => 310,
                    'name' => '(Tanjung Perak)',
                    'code' => 'ID SUB',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            310 =>
                array (
                    'id' => 311,
                    'name' => 'Ujung Pandang,',
                    'code' => 'ID UPG',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            311 =>
                array (
                    'id' => 312,
                    'name' => 'Sulawesi (Makassar)',
                    'code' => 'ID UPG',
                    'country_id' => 98,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            312 =>
                array (
                    'id' => 313,
                    'name' => 'Abadan',
                    'code' => 'IR ABD',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            313 =>
                array (
                    'id' => 314,
                    'name' => 'Bandar Abbas',
                    'code' => 'IR BND',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            314 =>
                array (
                    'id' => 315,
                    'name' => 'Bandar Anzali',
                    'code' => 'IR BAZ',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            315 =>
                array (
                    'id' => 316,
                    'name' => 'Bandar Mahshahr',
                    'code' => 'IR MRX',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            316 =>
                array (
                    'id' => 317,
                    'name' => 'Bushehr',
                    'code' => 'IR BUZ',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            317 =>
                array (
                    'id' => 318,
                    'name' => 'Imam Khomeini',
                    'code' => 'IR BKM',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            318 =>
                array (
                    'id' => 319,
                    'name' => 'Khorramshahr',
                    'code' => 'IR KHO',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            319 =>
                array (
                    'id' => 320,
                    'name' => 'Lavan',
                    'code' => 'IR LVP',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            320 =>
                array (
                    'id' => 321,
                    'name' => 'Sirri Island',
                    'code' => 'IR SXI',
                    'country_id' => 105,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            321 =>
                array (
                    'id' => 322,
                    'name' => 'Basra',
                    'code' => 'IQ BSR',
                    'country_id' => 104,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            322 =>
                array (
                    'id' => 323,
                    'name' => 'Khor al Zubair',
                    'code' => 'IQ KAZ',
                    'country_id' => 104,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            323 =>
                array (
                    'id' => 324,
                    'name' => 'Umm Qasr',
                    'code' => 'IQ UQR',
                    'country_id' => 104,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            324 =>
                array (
                    'id' => 325,
                    'name' => 'Arklow',
                    'code' => 'IE ARK',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            325 =>
                array (
                    'id' => 326,
                    'name' => 'Cork',
                    'code' => 'IE ORK',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            326 =>
                array (
                    'id' => 327,
                    'name' => 'Drogheda',
                    'code' => 'IE DRO',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            327 =>
                array (
                    'id' => 328,
                    'name' => 'Dublin',
                    'code' => 'IE DUB',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            328 =>
                array (
                    'id' => 329,
                    'name' => '(Shannon Foynes
Port)',
                    'code' => 'IE FOV',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            329 =>
                array (
                    'id' => 330,
                    'name' => 'Galway',
                    'code' => 'IE GWY',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            330 =>
                array (
                    'id' => 331,
                    'name' => 'New Ross',
                    'code' => 'IE NRS',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            331 =>
                array (
                    'id' => 332,
                    'name' => 'Waterford',
                    'code' => 'IE WAT',
                    'country_id' => 99,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            332 =>
                array (
                    'id' => 333,
                    'name' => 'Ashdod',
                    'code' => 'IL ASH',
                    'country_id' => 100,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            333 =>
                array (
                    'id' => 334,
                    'name' => 'Ashkelon',
                    'code' => 'IL AKL',
                    'country_id' => 100,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            334 =>
                array (
                    'id' => 335,
                    'name' => 'Eilat',
                    'code' => 'IL ETH',
                    'country_id' => 100,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            335 =>
                array (
                    'id' => 336,
                    'name' => 'Hadera',
                    'code' => 'IL HAD',
                    'country_id' => 100,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            336 =>
                array (
                    'id' => 337,
                    'name' => 'Haifa',
                    'code' => 'IL HFA',
                    'country_id' => 100,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            337 =>
                array (
                    'id' => 338,
                    'name' => 'Augusta',
                    'code' => 'IT AUG',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            338 =>
                array (
                    'id' => 339,
                    'name' => 'Bagnoli',
                    'code' => 'IT BLN',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            339 =>
                array (
                    'id' => 340,
                    'name' => 'Bari',
                    'code' => 'IT BRI',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            340 =>
                array (
                    'id' => 341,
                    'name' => 'Brindisi',
                    'code' => 'IT BDS',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            341 =>
                array (
                    'id' => 342,
                    'name' => 'Gela',
                    'code' => 'IT GEA',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            342 =>
                array (
                    'id' => 343,
                    'name' => 'Genoa',
                    'code' => 'IT GOA',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            343 =>
                array (
                    'id' => 344,
                    'name' => 'La Spezia',
                    'code' => 'IT SPE',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            344 =>
                array (
                    'id' => 345,
                    'name' => 'Livorno',
                    'code' => 'IT LIV',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            345 =>
                array (
                    'id' => 346,
                    'name' => 'Messina',
                    'code' => 'IT MSN',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            346 =>
                array (
                    'id' => 347,
                    'name' => 'Milazzo',
                    'code' => 'IT MLZ',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            347 =>
                array (
                    'id' => 348,
                    'name' => 'Napoli (Naples)',
                    'code' => 'IT NAP',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            348 =>
                array (
                    'id' => 349,
                    'name' => 'Palermo',
                    'code' => 'IT PMO',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            349 =>
                array (
                    'id' => 350,
                    'name' => 'Porto Torres',
                    'code' => 'IT PTO',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            350 =>
                array (
                    'id' => 351,
                    'name' => 'Ravenna',
                    'code' => 'IT RAN',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            351 =>
                array (
                    'id' => 352,
                    'name' => 'Sarroch (Porto Foxi)',
                    'code' => 'IT PFX',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            352 =>
                array (
                    'id' => 353,
                    'name' => 'Savona-Vado',
                    'code' => 'IT SVN',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            353 =>
                array (
                    'id' => 354,
                    'name' => 'Taranto',
                    'code' => 'IT TAR',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            354 =>
                array (
                    'id' => 355,
                    'name' => 'Trieste',
                    'code' => 'IT TRS',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            355 =>
                array (
                    'id' => 356,
                    'name' => 'Venice',
                    'code' => 'IT VCE',
                    'country_id' => 107,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            356 =>
                array (
                    'id' => 357,
                    'name' => 'Kingston',
                    'code' => 'JM KIN',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            357 =>
                array (
                    'id' => 358,
                    'name' => 'Montego Bay',
                    'code' => 'JM MBJ',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            358 =>
                array (
                    'id' => 359,
                    'name' => 'Ocho Rios',
                    'code' => 'JM OCJ',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            359 =>
                array (
                    'id' => 360,
                    'name' => 'Port Antonio',
                    'code' => 'JM POT',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            360 =>
                array (
                    'id' => 361,
                    'name' => 'Port Esquivel',
                    'code' => 'JM PEV',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            361 =>
                array (
                    'id' => 362,
                    'name' => 'Rocky Point',
                    'code' => 'JM ROP',
                    'country_id' => 109,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            362 =>
                array (
                    'id' => 363,
                    'name' => 'Akita',
                    'code' => 'JP AXT',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            363 =>
                array (
                    'id' => 364,
                    'name' => 'Amagasaki',
                    'code' => 'JP AMA',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            364 =>
                array (
                    'id' => 365,
                    'name' => 'Chiba',
                    'code' => 'JP CHB',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            365 =>
                array (
                    'id' => 366,
                    'name' => 'Hachinohe',
                    'code' => 'JP HHE',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            366 =>
                array (
                    'id' => 367,
                    'name' => 'Hakodate, Hokkaido',
                    'code' => 'JP HKD',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            367 =>
                array (
                    'id' => 368,
                    'name' => 'Higashiharima',
                    'code' => 'JP HHR',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            368 =>
                array (
                    'id' => 369,
                    'name' => 'Himeji',
                    'code' => 'JP HIM',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            369 =>
                array (
                    'id' => 370,
                    'name' => 'Hiroshima',
                    'code' => 'JP HIJ',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            370 =>
                array (
                    'id' => 371,
                    'name' => 'Kawasaki',
                    'code' => 'JP KWS',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            371 =>
                array (
                    'id' => 372,
                    'name' => 'Kinuura',
                    'code' => 'JP KNU',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            372 =>
                array (
                    'id' => 373,
                    'name' => 'Kobe',
                    'code' => 'JP UKB',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            373 =>
                array (
                    'id' => 374,
                    'name' => 'Kushiro, Hokkaido',
                    'code' => 'JP KUH',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            374 =>
                array (
                    'id' => 375,
                    'name' => 'Mizushima',
                    'code' => 'JP MIZ',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            375 =>
                array (
                    'id' => 376,
                    'name' => 'Moji',
                    'code' => 'JP MOJ',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            376 =>
                array (
                    'id' => 377,
                    'name' => 'Nagoya',
                    'code' => 'JP NGO',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            377 =>
                array (
                    'id' => 378,
                    'name' => 'Osaka',
                    'code' => 'JP OSA',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            378 =>
                array (
                    'id' => 379,
                    'name' => 'Sakai',
                    'code' => 'JP SAK',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            379 =>
                array (
                    'id' => 380,
                    'name' => 'Sakata',
                    'code' => 'JP SKT',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            380 =>
                array (
                    'id' => 381,
                    'name' => 'Shimizu',
                    'code' => 'JP SMZ',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            381 =>
                array (
                    'id' => 382,
                    'name' => 'Tokyo',
                    'code' => 'JP TYO',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            382 =>
                array (
                    'id' => 383,
                    'name' => 'Tomakomai,
Hokkaido',
                    'code' => 'JP TMK',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            383 =>
                array (
                    'id' => 384,
                    'name' => 'Yokohama',
                    'code' => 'JP YOK',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            384 =>
                array (
                    'id' => 385,
                    'name' => 'Aqaba (El Akaba)',
                    'code' => 'JO AQJ',
                    'country_id' => 111,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            385 =>
                array (
                    'id' => 386,
                    'name' => 'Lamu',
                    'code' => 'KE LAU',
                    'country_id' => 112,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            386 =>
                array (
                    'id' => 387,
                    'name' => 'Mombasa',
                    'code' => 'KE MBA',
                    'country_id' => 112,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            387 =>
                array (
                    'id' => 388,
                    'name' => 'Betio (Tarawa)',
                    'code' => 'KI TRW',
                    'country_id' => 115,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            388 =>
                array (
                    'id' => 389,
                    'name' => 'Chongjin',
                    'code' => 'KP CHO',
                    'country_id' => 118,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            389 =>
                array (
                    'id' => 390,
                    'name' => 'Haeju',
                    'code' => 'KP HAE',
                    'country_id' => 118,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            390 =>
                array (
                    'id' => 391,
                    'name' => 'Nampo',
                    'code' => 'KP NAM',
                    'country_id' => 118,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            391 =>
                array (
                    'id' => 392,
                    'name' => 'Wonsan',
                    'code' => 'KP WON',
                    'country_id' => 118,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            392 =>
                array (
                    'id' => 393,
                    'name' => 'Busan (Pusan)',
                    'code' => 'KR PUS',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            393 =>
                array (
                    'id' => 394,
                    'name' => 'Chinhae',
                    'code' => 'KR CHF',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            394 =>
                array (
                    'id' => 395,
                    'name' => 'Inchon',
                    'code' => 'KR INC',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            395 =>
                array (
                    'id' => 396,
                    'name' => 'Masan',
                    'code' => 'KR MAS',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            396 =>
                array (
                    'id' => 397,
                    'name' => 'Mokpo',
                    'code' => 'KR MOK',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            397 =>
                array (
                    'id' => 398,
                    'name' => 'Pohang',
                    'code' => 'KR KPO',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            398 =>
                array (
                    'id' => 399,
                    'name' => 'Tonghae',
                    'code' => 'KR TGH',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            399 =>
                array (
                    'id' => 400,
                    'name' => 'Ulsan',
                    'code' => 'KR USN',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            400 =>
                array (
                    'id' => 401,
                    'name' => 'Yosu (Yeosu)',
                    'code' => 'KR YOS',
                    'country_id' => 119,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            401 =>
                array (
                    'id' => 402,
                    'name' => 'Mina al Ahmadi',
                    'code' => 'KW MEA',
                    'country_id' => 120,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            402 =>
                array (
                    'id' => 403,
                    'name' => 'Mina Saud',
                    'code' => 'KW MIS',
                    'country_id' => 120,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            403 =>
                array (
                    'id' => 404,
                    'name' => 'Shuwaikh',
                    'code' => 'KW SWK',
                    'country_id' => 120,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            404 =>
                array (
                    'id' => 405,
                    'name' => 'Liepaja',
                    'code' => 'LV LPX',
                    'country_id' => 132,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            405 =>
                array (
                    'id' => 406,
                    'name' => 'Riga',
                    'code' => 'SU RIX',
                    'country_id' => 132,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            406 =>
                array (
                    'id' => 407,
                    'name' => 'Ventspils',
                    'code' => 'LV VNT',
                    'country_id' => 132,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            407 =>
                array (
                    'id' => 408,
                    'name' => 'Beirut',
                    'code' => 'LB BEY',
                    'country_id' => 124,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            408 =>
                array (
                    'id' => 409,
                    'name' => 'Chekka',
                    'code' => 'LB CHK',
                    'country_id' => 124,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            409 =>
                array (
                    'id' => 410,
                    'name' => 'Selaata',
                    'code' => 'LB SEL',
                    'country_id' => 124,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            410 =>
                array (
                    'id' => 411,
                    'name' => 'Sidon',
                    'code' => 'LB SDN',
                    'country_id' => 124,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            411 =>
                array (
                    'id' => 412,
                    'name' => 'Tripoli',
                    'code' => 'LB KYE',
                    'country_id' => 124,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            412 =>
                array (
                    'id' => 413,
                    'name' => 'Buchanan',
                    'code' => 'LR UCN',
                    'country_id' => 128,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            413 =>
                array (
                    'id' => 414,
                    'name' => 'Greenville',
                    'code' => 'LR GRE',
                    'country_id' => 128,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            414 =>
                array (
                    'id' => 415,
                    'name' => 'Monrovia',
                    'code' => 'LR MLW',
                    'country_id' => 128,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            415 =>
                array (
                    'id' => 416,
                    'name' => 'Bingazi (Benghazi)',
                    'code' => 'LY BEN',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            416 =>
                array (
                    'id' => 417,
                    'name' => 'Derna',
                    'code' => 'LY DNF',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            417 =>
                array (
                    'id' => 418,
                    'name' => 'Marsa El Brega',
                    'code' => 'LY LMQ',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            418 =>
                array (
                    'id' => 419,
                    'name' => 'Misurata (Qasr
Ahmed)',
                    'code' => 'LY MRA',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            419 =>
                array (
                    'id' => 420,
                    'name' => 'Ras Lanuf',
                    'code' => 'LY RLA',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            420 =>
                array (
                    'id' => 421,
                    'name' => 'Tobruk',
                    'code' => 'LY TOB',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            421 =>
                array (
                    'id' => 422,
                    'name' => 'Tripoli',
                    'code' => 'LY TIP',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            422 =>
                array (
                    'id' => 423,
                    'name' => 'Zuara',
                    'code' => 'LY ZUA',
                    'country_id' => 133,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            423 =>
                array (
                    'id' => 424,
                    'name' => 'Klaipeda',
                    'code' => 'LT KLJ',
                    'country_id' => 130,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            424 =>
                array (
                    'id' => 425,
                    'name' => 'Macau (Macao,
Aomen)',
                    'code' => 'MOMFM',
                    'country_id' => 145,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            425 =>
                array (
                    'id' => 426,
                    'name' => 'Antsiranana',
                    'code' => 'MG DIE',
                    'country_id' => 139,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            426 =>
                array (
                    'id' => 427,
                    'name' => 'Majunga (Mahajanga)',
                    'code' => 'MG MJN',
                    'country_id' => 139,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            427 =>
                array (
                    'id' => 428,
                    'name' => 'Toamasina
(Tamatave)',
                    'code' => 'MG TOA',
                    'country_id' => 139,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            428 =>
                array (
                    'id' => 429,
                    'name' => 'Tulear (Toliara)',
                    'code' => 'MG TLE',
                    'country_id' => 139,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            429 =>
                array (
                    'id' => 430,
                    'name' => 'Bintulu, Sarawak',
                    'code' => 'MY BTU',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            430 =>
                array (
                    'id' => 431,
                    'name' => 'Kota Kinabalu, Sabah',
                    'code' => 'MY BKI',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            431 =>
                array (
                    'id' => 432,
                    'name' => 'Kuantan',
                    'code' => 'MY KUA',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            432 =>
                array (
                    'id' => 433,
                    'name' => 'Kuching, Sarawak',
                    'code' => 'MY KCH',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            433 =>
                array (
                    'id' => 434,
                    'name' => 'Kudat, Sabah',
                    'code' => 'MY KUD',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            434 =>
                array (
                    'id' => 435,
                    'name' => 'Labuan, Sabah',
                    'code' => 'MY LBU',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            435 =>
                array (
                    'id' => 436,
                    'name' => 'Lahad Datu, Sabah',
                    'code' => 'MY LDU',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            436 =>
                array (
                    'id' => 437,
                    'name' => 'Lumut',
                    'code' => 'MY LUM',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            437 =>
                array (
                    'id' => 438,
                    'name' => 'Miri, Sarawak',
                    'code' => 'MY MYY',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            438 =>
                array (
                    'id' => 439,
                    'name' => 'Pasir Gudang, Johor',
                    'code' => 'MY PGU',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            439 =>
                array (
                    'id' => 440,
                    'name' => 'Penang (Georgetown)',
                    'code' => 'MY PEN',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            440 =>
                array (
                    'id' => 441,
                    'name' => 'Port Dickson',
                    'code' => 'MY PDI',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            441 =>
                array (
                    'id' => 442,
                    'name' => 'Port Klang (Kelang)',
                    'code' => 'MY PKL',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            442 =>
                array (
                    'id' => 443,
                    'name' => 'Sandakan, Sabah',
                    'code' => 'MY SDK',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            443 =>
                array (
                    'id' => 444,
                    'name' => 'Sibu, Sarawak',
                    'code' => 'MY SBW',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            444 =>
                array (
                    'id' => 445,
                    'name' => 'Tanjung Pelepas,
Johor',
                    'code' => 'MY TPP',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            445 =>
                array (
                    'id' => 446,
                    'name' => 'Tawau, Sabah',
                    'code' => 'MY TWU',
                    'country_id' => 155,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            446 =>
                array (
                    'id' => 447,
                    'name' => 'Valletta',
                    'code' => 'MT MLA',
                    'country_id' => 150,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            447 =>
                array (
                    'id' => 448,
                    'name' => 'Fort de France',
                    'code' => 'MQ FDF',
                    'country_id' => 147,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            448 =>
                array (
                    'id' => 449,
                    'name' => 'Nouadhibou',
                    'code' => 'MR NDB',
                    'country_id' => 148,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            449 =>
                array (
                    'id' => 450,
                    'name' => 'Nouakchott',
                    'code' => 'MR NKC',
                    'country_id' => 148,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            450 =>
                array (
                    'id' => 451,
                    'name' => 'Port Louis',
                    'code' => 'MU PLU',
                    'country_id' => 148,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            451 =>
                array (
                    'id' => 452,
                    'name' => 'Acapulco',
                    'code' => 'MX ACA',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            452 =>
                array (
                    'id' => 453,
                    'name' => 'Coatzacoalcos',
                    'code' => 'MX COA',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            453 =>
                array (
                    'id' => 454,
                    'name' => 'Guaymas',
                    'code' => 'MX GYM',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            454 =>
                array (
                    'id' => 455,
                    'name' => 'La Paz',
                    'code' => 'MX LAP',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            455 =>
                array (
                    'id' => 456,
                    'name' => 'Lazaro Cardenas',
                    'code' => 'MX LZC',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            456 =>
                array (
                    'id' => 457,
                    'name' => 'Manzanillo',
                    'code' => 'MX ZLO',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            457 =>
                array (
                    'id' => 458,
                    'name' => 'Mazatlan',
                    'code' => 'MX MZT',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            458 =>
                array (
                    'id' => 459,
                    'name' => 'Progreso',
                    'code' => 'MX PGO',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            459 =>
                array (
                    'id' => 460,
                    'name' => 'Salina Cruz',
                    'code' => 'MX SCX',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            460 =>
                array (
                    'id' => 461,
                    'name' => 'Tampico',
                    'code' => 'MX TAM',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            461 =>
                array (
                    'id' => 462,
                    'name' => 'Topolobampo',
                    'code' => 'MX TPB',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            462 =>
                array (
                    'id' => 463,
                    'name' => 'Tuxpan',
                    'code' => 'MX TUX',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            463 =>
                array (
                    'id' => 464,
                    'name' => 'Veracruz',
                    'code' => 'MX VER',
                    'country_id' => 154,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            464 =>
                array (
                    'id' => 465,
                    'name' => 'Pohnpei (Ex Ponape)',
                    'code' => 'FM PNI',
                    'country_id' => 71,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            465 =>
                array (
                    'id' => 466,
                    'name' => 'Monaco',
                    'code' => 'MC MON',
                    'country_id' => 135,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            466 =>
                array (
                    'id' => 467,
                    'name' => 'Bar',
                    'code' => 'CS BAR',
                    'country_id' => 137,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            467 =>
                array (
                    'id' => 468,
                    'name' => 'Kotor',
                    'code' => 'CS KOT',
                    'country_id' => 137,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            468 =>
                array (
                    'id' => 469,
                    'name' => 'Plymouth',
                    'code' => 'MS PLY',
                    'country_id' => 149,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            469 =>
                array (
                    'id' => 470,
                    'name' => 'Agadir',
                    'code' => 'MA AGA',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            470 =>
                array (
                    'id' => 471,
                    'name' => 'Casablanca',
                    'code' => 'MA CAS',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            471 =>
                array (
                    'id' => 472,
                    'name' => 'El Jadida',
                    'code' => 'MA ELJ',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            472 =>
                array (
                    'id' => 473,
                    'name' => 'Kenitra',
                    'code' => 'MA NNA',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            473 =>
                array (
                    'id' => 474,
                    'name' => 'Mohammedia',
                    'code' => 'MA MOH',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            474 =>
                array (
                    'id' => 475,
                    'name' => 'Safi',
                    'code' => 'MA SFI',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            475 =>
                array (
                    'id' => 476,
                    'name' => 'Tangier',
                    'code' => 'MA TNG',
                    'country_id' => 134,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            476 =>
                array (
                    'id' => 477,
                    'name' => 'Beira',
                    'code' => 'MZ BEW',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            477 =>
                array (
                    'id' => 478,
                    'name' => 'Inhambane',
                    'code' => 'MZ INH',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            478 =>
                array (
                    'id' => 479,
                    'name' => 'Maputo',
                    'code' => 'MZ MPM',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            479 =>
                array (
                    'id' => 480,
                    'name' => 'Nacala',
                    'code' => 'MZ MNC',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            480 =>
                array (
                    'id' => 481,
                    'name' => 'Pemba',
                    'code' => 'MZ POL',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            481 =>
                array (
                    'id' => 482,
                    'name' => 'Quelimane',
                    'code' => 'MZ UEL',
                    'country_id' => 156,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            482 =>
                array (
                    'id' => 483,
                    'name' => 'Bassein',
                    'code' => 'MM BSX',
                    'country_id' => 143,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            483 =>
                array (
                    'id' => 484,
                    'name' => 'Moulmein',
                    'code' => 'MM MNU',
                    'country_id' => 143,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            484 =>
                array (
                    'id' => 485,
                    'name' => 'Yangon',
                    'code' => 'MM RGN',
                    'country_id' => 143,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            485 =>
                array (
                    'id' => 486,
                    'name' => 'Luderitz',
                    'code' => 'NA LUD',
                    'country_id' => 157,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            486 =>
                array (
                    'id' => 487,
                    'name' => 'Walvis Bay',
                    'code' => 'NA WVB',
                    'country_id' => 157,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            487 =>
                array (
                    'id' => 488,
                    'name' => 'Nauru Island',
                    'code' => 'NR INU',
                    'country_id' => 166,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            488 =>
                array (
                    'id' => 489,
                    'name' => 'Amsterdam',
                    'code' => 'NL AMS',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            489 =>
                array (
                    'id' => 490,
                    'name' => 'Delfzijl',
                    'code' => 'NL DZL',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            490 =>
                array (
                    'id' => 491,
                    'name' => 'Dordrecht',
                    'code' => 'NL DOR',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            491 =>
                array (
                    'id' => 492,
                    'name' => 'Eemshaven',
                    'code' => 'NL EEM',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            492 =>
                array (
                    'id' => 493,
                    'name' => 'Groningen',
                    'code' => 'NL GRQ',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            493 =>
                array (
                    'id' => 494,
                    'name' => 'IJmuiden',
                    'code' => 'NL IJM',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            494 =>
                array (
                    'id' => 495,
                    'name' => 'Rotterdam',
                    'code' => 'NL RTM',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            495 =>
                array (
                    'id' => 496,
                    'name' => 'Terneuzen',
                    'code' => 'NL TNZ',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            496 =>
                array (
                    'id' => 497,
                    'name' => 'Kralendijk, Bonaire',
                    'code' => 'AN KRA',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            497 =>
                array (
                    'id' => 498,
                    'name' => 'Philipsburg',
                    'code' => 'AN PHI',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            498 =>
                array (
                    'id' => 499,
                    'name' => 'Willemstad',
                    'code' => 'AN WIL',
                    'country_id' => 163,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            499 =>
                array (
                    'id' => 500,
                    'name' => 'Noumea',
                    'code' => 'NC NOU',
                    'country_id' => 158,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));
        \DB::table('ports')->insert(array (
            0 =>
                array (
                    'id' => 501,
                    'name' => 'Thio',
                    'code' => 'NC THI',
                    'country_id' => 158,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 502,
                    'name' => 'Auckland',
                    'code' => 'NZ AKL',
                    'country_id' => 168,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 503,
                    'name' => 'Otago Harbour',
                    'code' => 'NZ ORR',
                    'country_id' => 168,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 504,
                    'name' => 'Tauranga',
                    'code' => 'NZ TRG',
                    'country_id' => 168,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 505,
                    'name' => 'Wellington',
                    'code' => 'NZ WLG',
                    'country_id' => 168,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 506,
                    'name' => 'Bluefields',
                    'code' => 'NI BEF',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 507,
                    'name' => 'Corinto',
                    'code' => 'NI CIO',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 508,
                    'name' => 'El Bluff',
                    'code' => 'NI ELB',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 509,
                    'name' => 'Puerto Cabezas',
                    'code' => 'NI PUZ',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 510,
                    'name' => 'Puerto Sandino',
                    'code' => 'NI PSN',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 511,
                    'name' => 'San Juan Del Sur',
                    'code' => 'NI SJS',
                    'country_id' => 162,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 512,
                    'name' => 'Calabar',
                    'code' => 'NG CBQ',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 513,
                    'name' => 'Lagos',
                    'code' => 'NG LOS',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 514,
                    'name' => 'Onne',
                    'code' => 'NG ONN',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 515,
                    'name' => 'Port Harcourt',
                    'code' => 'NG PHC',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 516,
                    'name' => 'Sapele',
                    'code' => 'NG SPL',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 517,
                    'name' => 'Tin Can Island',
                    'code' => 'NG TIN',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 518,
                    'name' => 'Warri',
                    'code' => 'NG WAR',
                    'country_id' => 161,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 519,
                    'name' => 'Saipan',
                    'code' => 'MP SPN',
                    'country_id' => 146,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 520,
                    'name' => 'Bergen',
                    'code' => 'NO BGO',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 521,
                    'name' => 'Drammen',
                    'code' => 'NO DRM',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 522,
                    'name' => 'Grenland Harbour
(Rafnes, Heroya,',
                    'code' => 'n/a',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 523,
                    'name' => 'Hammerfest',
                    'code' => 'NO HFT',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 524,
                    'name' => 'Harstad',
                    'code' => 'NO HRD',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 525,
                    'name' => 'Haugesund',
                    'code' => 'NO HAU',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 526,
                    'name' => 'Kristiansand',
                    'code' => 'NO KRS',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 527,
                    'name' => 'Larvik',
                    'code' => 'NO LAR',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 528,
                    'name' => 'Oslo',
                    'code' => 'NO OSL',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 529,
                    'name' => 'Stavanger',
                    'code' => 'NO SVG',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 530,
                    'name' => 'Trondheim',
                    'code' => 'NO TRD',
                    'country_id' => 164,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            30 =>
                array (
                    'id' => 531,
                    'name' => 'Karachi',
                    'code' => 'PK KHI',
                    'country_id' => 175,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            31 =>
                array (
                    'id' => 532,
                    'name' => 'Muhammad Bin
Qasim',
                    'code' => 'PK BQM',
                    'country_id' => 175,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            32 =>
                array (
                    'id' => 533,
                    'name' => 'Colon',
                    'code' => 'PA ONX',
                    'country_id' => 170,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            33 =>
                array (
                    'id' => 534,
                    'name' => 'Cristobal',
                    'code' => 'PA CTB',
                    'country_id' => 170,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            34 =>
                array (
                    'id' => 535,
                    'name' => 'Vacamonte',
                    'code' => 'PA VAC',
                    'country_id' => 170,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            35 =>
                array (
                    'id' => 536,
                    'name' => 'Kieta',
                    'code' => 'PG KIE',
                    'country_id' => 173,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            36 =>
                array (
                    'id' => 537,
                    'name' => 'Lae',
                    'code' => 'PG LAE',
                    'country_id' => 173,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            37 =>
                array (
                    'id' => 538,
                    'name' => 'Madang',
                    'code' => 'PG MAG',
                    'country_id' => 173,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            38 =>
                array (
                    'id' => 539,
                    'name' => 'Port Moresby',
                    'code' => 'PG POM',
                    'country_id' => 173,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            39 =>
                array (
                    'id' => 540,
                    'name' => 'Rabaul',
                    'code' => 'PG RAB',
                    'country_id' => 173,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            40 =>
                array (
                    'id' => 541,
                    'name' => 'Callao',
                    'code' => 'PE CLL',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            41 =>
                array (
                    'id' => 542,
                    'name' => 'Chimbote',
                    'code' => 'PE CHM',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            42 =>
                array (
                    'id' => 543,
                    'name' => 'Ilo',
                    'code' => 'PE ILO',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            43 =>
                array (
                    'id' => 544,
                    'name' => 'Matarani',
                    'code' => 'PE MRI',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            44 =>
                array (
                    'id' => 545,
                    'name' => 'Paita',
                    'code' => 'PE PAI',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            45 =>
                array (
                    'id' => 546,
                    'name' => 'Salaverry',
                    'code' => 'PE SVY',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            46 =>
                array (
                    'id' => 547,
                    'name' => 'Talara',
                    'code' => 'PE TYL',
                    'country_id' => 171,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            47 =>
                array (
                    'id' => 548,
                    'name' => 'Batangas',
                    'code' => 'PH BTG',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            48 =>
                array (
                    'id' => 549,
                    'name' => 'Cagayan de Oro,',
                    'code' => 'PH CGY',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            49 =>
                array (
                    'id' => 550,
                    'name' => 'Cebu',
                    'code' => 'PH CEB',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            50 =>
                array (
                    'id' => 551,
                    'name' => 'Davao, Mindanao',
                    'code' => 'PH DVO',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            51 =>
                array (
                    'id' => 552,
                    'name' => 'Iligan, Mindanao',
                    'code' => 'PH IGN',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            52 =>
                array (
                    'id' => 553,
                    'name' => 'Iloilo',
                    'code' => 'PH ILO',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            53 =>
                array (
                    'id' => 554,
                    'name' => 'Jolo',
                    'code' => 'PH JOL',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            54 =>
                array (
                    'id' => 555,
                    'name' => 'Legaspi, Davao',
                    'code' => 'PH LGP',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            55 =>
                array (
                    'id' => 556,
                    'name' => 'Manila',
                    'code' => 'PH MNL',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            56 =>
                array (
                    'id' => 557,
                    'name' => 'Puerto Princesa,',
                    'code' => 'PH PPS',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            57 =>
                array (
                    'id' => 558,
                    'name' => 'San Fernando, Luzon',
                    'code' => 'PH SFE',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            58 =>
                array (
                    'id' => 559,
                    'name' => 'Subic Bay',
                    'code' => 'PH SFS',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            59 =>
                array (
                    'id' => 560,
                    'name' => 'Zamboanga,
Mindanao',
                    'code' => 'PH ZAM',
                    'country_id' => 174,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            60 =>
                array (
                    'id' => 561,
                    'name' => 'Gdansk',
                    'code' => 'PL GDN',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            61 =>
                array (
                    'id' => 562,
                    'name' => 'Gdynia',
                    'code' => 'PL GDY',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            62 =>
                array (
                    'id' => 563,
                    'name' => 'Kolobrzeg',
                    'code' => 'PL KOL',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            63 =>
                array (
                    'id' => 564,
                    'name' => 'Swinoujscie',
                    'code' => 'PL SWI',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            64 =>
                array (
                    'id' => 565,
                    'name' => 'Szczecin',
                    'code' => 'PL SZZ',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            65 =>
                array (
                    'id' => 566,
                    'name' => 'Ustka',
                    'code' => 'PL UST',
                    'country_id' => 176,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            66 =>
                array (
                    'id' => 567,
                    'name' => 'Aveiro',
                    'code' => 'PT AVE',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            67 =>
                array (
                    'id' => 568,
                    'name' => 'Leixoes',
                    'code' => 'PT LEI',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            68 =>
                array (
                    'id' => 569,
                    'name' => 'Lisbon',
                    'code' => 'PT LIS',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            69 =>
                array (
                    'id' => 570,
                    'name' => 'Portimao',
                    'code' => 'PT PRM',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            70 =>
                array (
                    'id' => 571,
                    'name' => 'Setubal',
                    'code' => 'PT SET',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            71 =>
                array (
                    'id' => 572,
                    'name' => 'Viana Do Castelo',
                    'code' => 'PT VDC',
                    'country_id' => 181,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            72 =>
                array (
                    'id' => 573,
                    'name' => 'Guanica Harbour',
                    'code' => 'PR GUX',
                    'country_id' => 179,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            73 =>
                array (
                    'id' => 574,
                    'name' => 'Guayanilla',
                    'code' => 'PR GUY',
                    'country_id' => 179,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            74 =>
                array (
                    'id' => 575,
                    'name' => 'Las Mareas',
                    'code' => 'PR LAM',
                    'country_id' => 179,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            75 =>
                array (
                    'id' => 576,
                    'name' => 'Ponce',
                    'code' => 'PR PSE',
                    'country_id' => 179,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            76 =>
                array (
                    'id' => 577,
                    'name' => 'San Juan',
                    'code' => 'PR SJU',
                    'country_id' => 179,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            77 =>
                array (
                    'id' => 578,
                    'name' => 'Doha',
                    'code' => 'QA DOH',
                    'country_id' => 184,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            78 =>
                array (
                    'id' => 579,
                    'name' => 'Halul Island',
                    'code' => 'QA HAL',
                    'country_id' => 184,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            79 =>
                array (
                    'id' => 580,
                    'name' => 'Ras Laffan',
                    'code' => 'QA RLF',
                    'country_id' => 184,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            80 =>
                array (
                    'id' => 581,
                    'name' => 'Umm Said (Mesaieed)',
                    'code' => 'QA UMS',
                    'country_id' => 184,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            81 =>
                array (
                    'id' => 582,
                    'name' => '(Pointe des Galets)',
                    'code' => 'RE',
                    'country_id' => 185,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            82 =>
                array (
                    'id' => 583,
                    'name' => 'Braila',
                    'code' => 'RO BRA',
                    'country_id' => 186,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            83 =>
                array (
                    'id' => 584,
                    'name' => 'Constantza',
                    'code' => 'RO CND',
                    'country_id' => 186,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            84 =>
                array (
                    'id' => 585,
                    'name' => 'Mangalia',
                    'code' => 'RO MAG',
                    'country_id' => 186,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            85 =>
                array (
                    'id' => 586,
                    'name' => 'Sulina',
                    'code' => 'RO SUL',
                    'country_id' => 186,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            86 =>
                array (
                    'id' => 587,
                    'name' => 'Kaliningrad',
                    'code' => 'SU KGD',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            87 =>
                array (
                    'id' => 588,
                    'name' => 'Kholmsk',
                    'code' => 'RU KHO',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            88 =>
                array (
                    'id' => 589,
                    'name' => 'Murmansk',
                    'code' => 'RU MMK',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            89 =>
                array (
                    'id' => 590,
                    'name' => 'Nakhodka',
                    'code' => 'RU NJK',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            90 =>
                array (
                    'id' => 591,
                    'name' => 'Novorossiysk',
                    'code' => 'RU NVS',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            91 =>
                array (
                    'id' => 592,
                    'name' => 'St Petersburg',
                    'code' => 'RU LED',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            92 =>
                array (
                    'id' => 593,
                    'name' => 'Tuapse',
                    'code' => 'RU TUA',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            93 =>
                array (
                    'id' => 594,
                    'name' => 'Vladivostok',
                    'code' => 'RU VVO',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            94 =>
                array (
                    'id' => 595,
                    'name' => 'Vyborg',
                    'code' => 'RU VYG',
                    'country_id' => 188,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            95 =>
                array (
                    'id' => 596,
                    'name' => 'Basseterre',
                    'code' => 'KN BAS',
                    'country_id' => 117,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            96 =>
                array (
                    'id' => 597,
                    'name' => 'Castries (St Lucia)',
                    'code' => 'LC SLU',
                    'country_id' => 125,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            97 =>
                array (
                    'id' => 598,
                    'name' => 'Vieux Fort',
                    'code' => 'LC VIF',
                    'country_id' => 125,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            98 =>
                array (
                    'id' => 599,
                    'name' => 'Kingstown',
                    'code' => 'VC KTN',
                    'country_id' => 233,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            99 =>
                array (
                    'id' => 600,
                    'name' => 'Apia',
                    'code' => 'WS APW',
                    'country_id' => 240,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            100 =>
                array (
                    'id' => 601,
                    'name' => 'Santo Antonio',
                    'code' => 'ST SAA',
                    'country_id' => 205,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            101 =>
                array (
                    'id' => 602,
                    'name' => 'Sao Tome',
                    'code' => 'ST TMS',
                    'country_id' => 205,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            102 =>
                array (
                    'id' => 603,
                    'name' => 'Dammam',
                    'code' => 'SA DMN',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            103 =>
                array (
                    'id' => 604,
                    'name' => 'Dhuba',
                    'code' => 'SA DHU',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            104 =>
                array (
                    'id' => 605,
                    'name' => 'Gizan',
                    'code' => 'SA GIZ',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            105 =>
                array (
                    'id' => 606,
                    'name' => 'Jeddah',
                    'code' => 'SA JED',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            106 =>
                array (
                    'id' => 607,
                    'name' => 'Jubail',
                    'code' => 'SA JUB',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            107 =>
                array (
                    'id' => 608,
                    'name' => 'Rabigh',
                    'code' => 'SA RAB',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            108 =>
                array (
                    'id' => 609,
                    'name' => 'Ras al Mishab',
                    'code' => 'SA RAM',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            109 =>
                array (
                    'id' => 610,
                    'name' => 'Ras Tanura',
                    'code' => 'SA RTA',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            110 =>
                array (
                    'id' => 611,
                    'name' => 'Yanbu',
                    'code' => 'SA YNB',
                    'country_id' => 190,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            111 =>
                array (
                    'id' => 612,
                    'name' => 'Dakar',
                    'code' => 'SN DKR',
                    'country_id' => 201,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            112 =>
                array (
                    'id' => 613,
                    'name' => 'Port Victoria',
                    'code' => 'SC POV',
                    'country_id' => 192,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            113 =>
                array (
                    'id' => 614,
                    'name' => 'Freetown',
                    'code' => 'SL FNA',
                    'country_id' => 199,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            114 =>
                array (
                    'id' => 615,
                    'name' => 'Pepel',
                    'code' => 'SL PEP',
                    'country_id' => 199,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            115 =>
                array (
                    'id' => 616,
                    'name' => 'Singapore',
                    'code' => 'SG SIN',
                    'country_id' => 195,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            116 =>
                array (
                    'id' => 617,
                    'name' => 'Izola',
                    'code' => 'SI IZO',
                    'country_id' => 197,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            117 =>
                array (
                    'id' => 618,
                    'name' => 'Koper',
                    'code' => 'SI KOP',
                    'country_id' => 197,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            118 =>
                array (
                    'id' => 619,
                    'name' => 'Piran',
                    'code' => 'SI PIR',
                    'country_id' => 197,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            119 =>
                array (
                    'id' => 620,
                    'name' => 'Honiara',
                    'code' => 'SB HIR',
                    'country_id' => 191,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            120 =>
                array (
                    'id' => 621,
                    'name' => 'Noro, New Georgia',
                    'code' => 'SB NOR',
                    'country_id' => 191,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            121 =>
                array (
                    'id' => 622,
                    'name' => 'Viru Harbour',
                    'code' => 'SB VIU',
                    'country_id' => 191,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            122 =>
                array (
                    'id' => 623,
                    'name' => 'Yandina, Pavuvu
Island',
                    'code' => 'SB XYA',
                    'country_id' => 191,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            123 =>
                array (
                    'id' => 624,
                    'name' => 'Berbera',
                    'code' => 'SO BBO',
                    'country_id' => 202,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            124 =>
                array (
                    'id' => 625,
                    'name' => 'Kismayu',
                    'code' => 'SO KMU',
                    'country_id' => 202,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            125 =>
                array (
                    'id' => 626,
                    'name' => 'Merca',
                    'code' => 'SO MER',
                    'country_id' => 202,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            126 =>
                array (
                    'id' => 627,
                    'name' => 'Mogadishu',
                    'code' => 'SO MGQ',
                    'country_id' => 202,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            127 =>
                array (
                    'id' => 628,
                    'name' => 'Cape Town',
                    'code' => 'ZA CPT',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            128 =>
                array (
                    'id' => 629,
                    'name' => 'Durban',
                    'code' => 'ZA DUR',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            129 =>
                array (
                    'id' => 630,
                    'name' => 'Mossel Bay',
                    'code' => 'ZA MZY',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            130 =>
                array (
                    'id' => 631,
                    'name' => 'Port Elizabeth',
                    'code' => 'ZA PLZ',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            131 =>
                array (
                    'id' => 632,
                    'name' => 'Richards Bay',
                    'code' => 'ZA RCB',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            132 =>
                array (
                    'id' => 633,
                    'name' => 'Saldanha Bay',
                    'code' => 'ZA SDB',
                    'country_id' => 244,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            133 =>
                array (
                    'id' => 634,
                    'name' => 'Aviles',
                    'code' => 'ES AVS',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            134 =>
                array (
                    'id' => 635,
                    'name' => 'Barcelona',
                    'code' => 'ES BCN',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            135 =>
                array (
                    'id' => 636,
                    'name' => 'Bilbao',
                    'code' => 'ES BIO',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            136 =>
                array (
                    'id' => 637,
                    'name' => 'Cadiz',
                    'code' => 'ES CAD',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            137 =>
                array (
                    'id' => 638,
                    'name' => 'Cartagena',
                    'code' => 'ES CAR',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            138 =>
                array (
                    'id' => 639,
                    'name' => 'Castellon',
                    'code' => 'ES CAS',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            139 =>
                array (
                    'id' => 640,
                    'name' => 'Ceuta',
                    'code' => 'ES CEU',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            140 =>
                array (
                    'id' => 641,
                    'name' => 'Huelva',
                    'code' => 'ES HUV',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            141 =>
                array (
                    'id' => 642,
                    'name' => 'Malaga',
                    'code' => 'ES AGP',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            142 =>
                array (
                    'id' => 643,
                    'name' => 'Pasajes',
                    'code' => 'ES PAS',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            143 =>
                array (
                    'id' => 644,
                    'name' => 'Santander',
                    'code' => 'ES SDR',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            144 =>
                array (
                    'id' => 645,
                    'name' => 'Tarragona',
                    'code' => 'ES TAR',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            145 =>
                array (
                    'id' => 646,
                    'name' => 'Valencia',
                    'code' => 'ES VLC',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            146 =>
                array (
                    'id' => 647,
                    'name' => 'Vigo',
                    'code' => 'ES VGO',
                    'country_id' => 66,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            147 =>
                array (
                    'id' => 648,
                    'name' => 'Colombo',
                    'code' => 'LK CMB',
                    'country_id' => 127,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            148 =>
                array (
                    'id' => 649,
                    'name' => 'Jaffna',
                    'code' => 'LK JAF',
                    'country_id' => 127,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            149 =>
                array (
                    'id' => 650,
                    'name' => 'Trincomalee',
                    'code' => 'LK TRR',
                    'country_id' => 127,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            150 =>
                array (
                    'id' => 651,
                    'name' => 'Jamestown',
                    'code' => 'SH SHN',
                    'country_id' => 196,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            151 =>
                array (
                    'id' => 652,
                    'name' => 'St Pierre',
                    'code' => 'PM FSP',
                    'country_id' => 177,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            152 =>
                array (
                    'id' => 653,
                    'name' => 'Port Sudan',
                    'code' => 'SD PZU',
                    'country_id' => 193,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            153 =>
                array (
                    'id' => 654,
                    'name' => 'Moengo',
                    'code' => 'SR MOJ',
                    'country_id' => 203,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            154 =>
                array (
                    'id' => 655,
                    'name' => 'Nieuw Nickerie',
                    'code' => 'SR ICK',
                    'country_id' => 203,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            155 =>
                array (
                    'id' => 656,
                    'name' => 'Paramaribo',
                    'code' => 'SR PBM',
                    'country_id' => 203,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            156 =>
                array (
                    'id' => 657,
                    'name' => 'Paranam',
                    'code' => 'SR PRM',
                    'country_id' => 203,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            157 =>
                array (
                    'id' => 658,
                    'name' => 'Wageningen',
                    'code' => 'SR AGI',
                    'country_id' => 203,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            158 =>
                array (
                    'id' => 659,
                    'name' => 'Gavle',
                    'code' => 'SE GVX',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            159 =>
                array (
                    'id' => 660,
                    'name' => 'Gothenburg
(Goteborg)',
                    'code' => 'SE GOT',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            160 =>
                array (
                    'id' => 661,
                    'name' => 'Halmstad',
                    'code' => 'SE HAD',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            161 =>
                array (
                    'id' => 662,
                    'name' => 'Kalmar',
                    'code' => 'SE KLR',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            162 =>
                array (
                    'id' => 663,
                    'name' => 'Karlshamn',
                    'code' => 'SE KAN',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            163 =>
                array (
                    'id' => 664,
                    'name' => 'Malmo',
                    'code' => 'SE MMA',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            164 =>
                array (
                    'id' => 665,
                    'name' => 'Solvesborg',
                    'code' => 'SE SOL',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            165 =>
                array (
                    'id' => 666,
                    'name' => 'Stockholm',
                    'code' => 'SE STO',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            166 =>
                array (
                    'id' => 667,
                    'name' => 'Sundsvall',
                    'code' => 'SE SDL',
                    'country_id' => 194,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            167 =>
                array (
                    'id' => 668,
                    'name' => 'Basel',
                    'code' => 'CH BSL',
                    'country_id' => 41,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            168 =>
                array (
                    'id' => 669,
                    'name' => 'Baniyas',
                    'code' => 'SY BAN',
                    'country_id' => 208,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            169 =>
                array (
                    'id' => 670,
                    'name' => 'Hualien',
                    'code' => 'TW HUN',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            170 =>
                array (
                    'id' => 671,
                    'name' => 'Kaohsiung',
                    'code' => 'TW KHH',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            171 =>
                array (
                    'id' => 672,
                    'name' => 'Kaohsiung',
                    'code' => 'TW KHH',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            172 =>
                array (
                    'id' => 673,
                    'name' => 'Keelung (Chilung)',
                    'code' => 'TW KEL',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            173 =>
                array (
                    'id' => 674,
                    'name' => 'Suao',
                    'code' => 'TW SUO',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            174 =>
                array (
                    'id' => 675,
                    'name' => 'Taichung',
                    'code' => 'TW TXG',
                    'country_id' => 224,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            175 =>
                array (
                    'id' => 676,
                    'name' => 'Dar Es Salaam',
                    'code' => 'TZ DAR',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            176 =>
                array (
                    'id' => 677,
                    'name' => 'Kilwa Masoko',
                    'code' => 'TZ KIM',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            177 =>
                array (
                    'id' => 678,
                    'name' => 'Lindi',
                    'code' => 'TZ LDI',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            178 =>
                array (
                    'id' => 679,
                    'name' => 'Mtwara',
                    'code' => 'TZ MYW',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            179 =>
                array (
                    'id' => 680,
                    'name' => 'Pangani',
                    'code' => 'TZ PAN',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            180 =>
                array (
                    'id' => 681,
                    'name' => 'Tanga',
                    'code' => 'TZ TGT',
                    'country_id' => 225,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            181 =>
                array (
                    'id' => 682,
                    'name' => 'Bangkok',
                    'code' => 'TH BKK',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            182 =>
                array (
                    'id' => 683,
                    'name' => 'Laem Chabang',
                    'code' => 'TH LCH',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            183 =>
                array (
                    'id' => 684,
                    'name' => 'Pattani',
                    'code' => 'TH PAN',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            184 =>
                array (
                    'id' => 685,
                    'name' => 'Phuket',
                    'code' => 'TH HKT',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            185 =>
                array (
                    'id' => 686,
                    'name' => 'Sattahip',
                    'code' => 'TH SAT',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            186 =>
                array (
                    'id' => 687,
                    'name' => 'Songkhla',
                    'code' => 'TH SGZ',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            187 =>
                array (
                    'id' => 688,
                    'name' => 'Sriracha',
                    'code' => 'TH SRI',
                    'country_id' => 214,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            188 =>
                array (
                    'id' => 689,
                    'name' => 'Kpeme',
                    'code' => 'TG KPE',
                    'country_id' => 213,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            189 =>
                array (
                    'id' => 690,
                    'name' => 'Lome',
                    'code' => 'TG LFW',
                    'country_id' => 213,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            190 =>
                array (
                    'id' => 691,
                    'name' => 'Neiafu',
                    'code' => 'TO NEI',
                    'country_id' => 220,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            191 =>
                array (
                    'id' => 692,
                    'name' => 'Nukualofa',
                    'code' => 'TO TBU',
                    'country_id' => 220,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            192 =>
                array (
                    'id' => 693,
                    'name' => 'Pangai',
                    'code' => 'TO PAN',
                    'country_id' => 220,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            193 =>
                array (
                    'id' => 694,
                    'name' => 'Point Fortin',
                    'code' => 'TT PTF',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            194 =>
                array (
                    'id' => 695,
                    'name' => 'Point Lisas',
                    'code' => 'TT PTS',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            195 =>
                array (
                    'id' => 696,
                    'name' => 'Pointe a Pierre',
                    'code' => 'TT PTP',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            196 =>
                array (
                    'id' => 697,
                    'name' => 'Scarborough',
                    'code' => 'TT SCA',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            197 =>
                array (
                    'id' => 698,
                    'name' => 'Spain',
                    'code' => 'TT POS',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            198 =>
                array (
                    'id' => 699,
                    'name' => 'Tembladora',
                    'code' => 'TT TEM',
                    'country_id' => 222,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            199 =>
                array (
                    'id' => 700,
                    'name' => 'Bizerte',
                    'code' => 'TN BIZ',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            200 =>
                array (
                    'id' => 701,
                    'name' => 'Gabes',
                    'code' => 'TN GAE',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            201 =>
                array (
                    'id' => 702,
                    'name' => 'La Goulette',
                    'code' => 'TN LGN',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            202 =>
                array (
                    'id' => 703,
                    'name' => 'Sfax',
                    'code' => 'TN SFA',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            203 =>
                array (
                    'id' => 704,
                    'name' => 'Sousse',
                    'code' => 'TN SUS',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            204 =>
                array (
                    'id' => 705,
                    'name' => 'Tunis',
                    'code' => 'TN TUN',
                    'country_id' => 219,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            205 =>
                array (
                    'id' => 706,
                    'name' => 'Derince',
                    'code' => 'TR DRC',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            206 =>
                array (
                    'id' => 707,
                    'name' => 'Dikili',
                    'code' => 'TR DIK',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            207 =>
                array (
                    'id' => 708,
                    'name' => 'Gemlik',
                    'code' => 'TR GEM',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            208 =>
                array (
                    'id' => 709,
                    'name' => 'Hopa, Artvin',
                    'code' => 'TR HOP',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            209 =>
                array (
                    'id' => 710,
                    'name' => 'Iskenderun, Hatay',
                    'code' => 'TR ISK',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            210 =>
                array (
                    'id' => 711,
                    'name' => 'Istanbul',
                    'code' => 'TR IST',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            211 =>
                array (
                    'id' => 712,
                    'name' => 'Trabzon',
                    'code' => 'TR TZX',
                    'country_id' => 221,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            212 =>
                array (
                    'id' => 713,
                    'name' => 'Grand Turk Island',
                    'code' => 'TC GDT',
                    'country_id' => 210,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            213 =>
                array (
                    'id' => 714,
                    'name' => 'Providenciales',
                    'code' => 'TC PLS',
                    'country_id' => 210,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            214 =>
                array (
                    'id' => 715,
                    'name' => 'Funafuti',
                    'code' => 'TV FUN',
                    'country_id' => 223,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            215 =>
                array (
                    'id' => 716,
                    'name' => 'Aberdeen',
                    'code' => 'GB ABD',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            216 =>
                array (
                    'id' => 717,
                    'name' => 'Belfast',
                    'code' => 'GB BEL',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            217 =>
                array (
                    'id' => 718,
                    'name' => 'Bristol',
                    'code' => 'GB BRS',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            218 =>
                array (
                    'id' => 719,
                    'name' => 'Dover',
                    'code' => 'GB DVR',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            219 =>
                array (
                    'id' => 720,
                    'name' => 'Falmouth',
                    'code' => 'GB FAL',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            220 =>
                array (
                    'id' => 721,
                    'name' => 'Felixstowe',
                    'code' => 'GB FXT',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            221 =>
                array (
                    'id' => 722,
                    'name' => 'Glasgow',
                    'code' => 'GB GLW',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            222 =>
                array (
                    'id' => 723,
                    'name' => 'Grangemouth',
                    'code' => 'GB GRG',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            223 =>
                array (
                    'id' => 724,
                    'name' => 'Hull',
                    'code' => 'GB HUL',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            224 =>
                array (
                    'id' => 725,
                    'name' => 'Leith',
                    'code' => 'GB LEI',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            225 =>
                array (
                    'id' => 726,
                    'name' => 'Liverpool',
                    'code' => 'GB LIV',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            226 =>
                array (
                    'id' => 727,
                    'name' => 'London',
                    'code' => 'GB LON',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            227 =>
                array (
                    'id' => 728,
                    'name' => 'Manchester',
                    'code' => 'GB MNC',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            228 =>
                array (
                    'id' => 729,
                    'name' => 'Peterhead Bay',
                    'code' => 'GB PHD',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            229 =>
                array (
                    'id' => 730,
                    'name' => 'Plymouth',
                    'code' => 'GB PLY',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            230 =>
                array (
                    'id' => 731,
                    'name' => 'Portsmouth',
                    'code' => 'GB PME',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            231 =>
                array (
                    'id' => 732,
                    'name' => 'Scapa Flow',
                    'code' => 'GB SFW',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            232 =>
                array (
                    'id' => 733,
                    'name' => 'Southampton',
                    'code' => 'GB SOU',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            233 =>
                array (
                    'id' => 734,
                    'name' => 'Sullom Voe',
                    'code' => 'GB SUL',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            234 =>
                array (
                    'id' => 735,
                    'name' => 'Teesport',
                    'code' => 'GB TEE',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            235 =>
                array (
                    'id' => 736,
                    'name' => 'Thamesport',
                    'code' => 'GB RCS',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            236 =>
                array (
                    'id' => 737,
                    'name' => 'Tyne',
                    'code' => 'GB TYN',
                    'country_id' => 75,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            237 =>
                array (
                    'id' => 738,
                    'name' => 'Berdyansk',
                    'code' => 'UA ERD',
                    'country_id' => 226,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            238 =>
                array (
                    'id' => 739,
                    'name' => 'Kherson',
                    'code' => 'UA KHE',
                    'country_id' => 226,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            239 =>
                array (
                    'id' => 740,
                    'name' => 'Odessa',
                    'code' => 'UA ODS',
                    'country_id' => 226,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            240 =>
                array (
                    'id' => 741,
                    'name' => 'Reni',
                    'code' => 'UA RNI',
                    'country_id' => 226,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            241 =>
                array (
                    'id' => 742,
                    'name' => 'Sevastopol',
                    'code' => 'UA SVP',
                    'country_id' => 226,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            242 =>
                array (
                    'id' => 743,
                    'name' => 'Ajman',
                    'code' => 'AE AJM',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            243 =>
                array (
                    'id' => 744,
                    'name' => 'Das Island',
                    'code' => 'AE DAS',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            244 =>
                array (
                    'id' => 745,
                    'name' => 'Dubai (Port Rashid)',
                    'code' => 'AE DXB',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            245 =>
                array (
                    'id' => 746,
                    'name' => 'Fujairah',
                    'code' => 'AE FJR',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            246 =>
                array (
                    'id' => 747,
                    'name' => 'Jebel Dhanna/Ruwais',
                    'code' => 'AE JEA',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            247 =>
                array (
                    'id' => 748,
                    'name' => 'Khor Fakkan',
                    'code' => 'AE KLF',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            248 =>
                array (
                    'id' => 749,
                    'name' => 'Mina Saqr',
                    'code' => 'AE MSA',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            249 =>
                array (
                    'id' => 750,
                    'name' => 'Mina Zayed',
                    'code' => 'AE MZD',
                    'country_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            250 =>
                array (
                    'id' => 751,
                    'name' => 'Anacortes',
                    'code' => 'US AOT',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            251 =>
                array (
                    'id' => 752,
                    'name' => 'Ashtabula',
                    'code' => 'US ASF',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            252 =>
                array (
                    'id' => 753,
                    'name' => 'Baltimore',
                    'code' => 'US BAL',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            253 =>
                array (
                    'id' => 754,
                    'name' => 'Baton Rouge',
                    'code' => 'US BTR',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            254 =>
                array (
                    'id' => 755,
                    'name' => 'Beaumont',
                    'code' => 'US BPT',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            255 =>
                array (
                    'id' => 756,
                    'name' => 'Boston',
                    'code' => 'US BOS',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            256 =>
                array (
                    'id' => 757,
                    'name' => 'Charleston',
                    'code' => 'US CHS',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            257 =>
                array (
                    'id' => 758,
                    'name' => 'Chicago',
                    'code' => 'US CHI',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            258 =>
                array (
                    'id' => 759,
                    'name' => 'Cleveland',
                    'code' => 'US CLE',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            259 =>
                array (
                    'id' => 760,
                    'name' => 'Corpus Christi',
                    'code' => 'US CRP',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            260 =>
                array (
                    'id' => 761,
                    'name' => 'Detroit',
                    'code' => 'US DET',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            261 =>
                array (
                    'id' => 762,
                    'name' => 'Duluth-Superior',
                    'code' => 'US DLH',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            262 =>
                array (
                    'id' => 763,
                    'name' => 'Freeport',
                    'code' => 'US FRP',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            263 =>
                array (
                    'id' => 764,
                    'name' => 'Hampton Roads
(Norfolk, Chesapeake,',
                    'code' => 'US HNV',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            264 =>
                array (
                    'id' => 765,
                    'name' => 'Honolulu',
                    'code' => 'US HNL',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            265 =>
                array (
                    'id' => 766,
                    'name' => 'Houston',
                    'code' => 'US HOU',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            266 =>
                array (
                    'id' => 767,
                    'name' => 'Huntington - Tri-State
(WV)',
                    'code' => 'US HTS',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            267 =>
                array (
                    'id' => 768,
                    'name' => 'Jacksonville',
                    'code' => 'US JAX',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            268 =>
                array (
                    'id' => 769,
                    'name' => 'Lake Charles',
                    'code' => 'US LCH',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            269 =>
                array (
                    'id' => 770,
                    'name' => 'Long Beach',
                    'code' => 'US LGB',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            270 =>
                array (
                    'id' => 771,
                    'name' => 'Los Angeles',
                    'code' => 'US LAX',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            271 =>
                array (
                    'id' => 772,
                    'name' => 'Manatee',
                    'code' => 'US MEE',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            272 =>
                array (
                    'id' => 773,
                    'name' => 'Memphis',
                    'code' => 'US MEM',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            273 =>
                array (
                    'id' => 774,
                    'name' => 'Miami',
                    'code' => 'US MIA',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            274 =>
                array (
                    'id' => 775,
                    'name' => 'Mobile',
                    'code' => 'US MOB',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            275 =>
                array (
                    'id' => 776,
                    'name' => 'New Orleans',
                    'code' => 'US',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            276 =>
                array (
                    'id' => 777,
                    'name' => 'New York/New Jersey',
                    'code' => 'US NYC',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            277 =>
                array (
                    'id' => 778,
                    'name' => 'Oakland',
                    'code' => 'US OAK',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            278 =>
                array (
                    'id' => 779,
                    'name' => 'Pascagoula',
                    'code' => 'US PGL',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            279 =>
                array (
                    'id' => 780,
                    'name' => 'Philadelphia',
                    'code' => 'US PHL',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            280 =>
                array (
                    'id' => 781,
                    'name' => 'Pittsburgh',
                    'code' => 'US PIT',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            281 =>
                array (
                    'id' => 782,
                    'name' => 'Plaquemines
(Louisiana)',
                    'code' => 'US PLQ',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            282 =>
                array (
                    'id' => 783,
                    'name' => 'Port Arthur',
                    'code' => 'US POA',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            283 =>
                array (
                    'id' => 784,
                    'name' => 'Port Everglades',
                    'code' => 'US PEF',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            284 =>
                array (
                    'id' => 785,
                    'name' => 'Portland (Maine)',
                    'code' => 'US PWM',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            285 =>
                array (
                    'id' => 786,
                    'name' => 'Portland (Oregon)',
                    'code' => 'US PDX',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            286 =>
                array (
                    'id' => 787,
                    'name' => 'Richmond (CA)',
                    'code' => 'US RCH',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            287 =>
                array (
                    'id' => 788,
                    'name' => 'Richmond (VA)',
                    'code' => 'US RIC',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            288 =>
                array (
                    'id' => 789,
                    'name' => 'Savannah',
                    'code' => 'US SAV',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            289 =>
                array (
                    'id' => 790,
                    'name' => 'Seattle',
                    'code' => 'US SEA',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            290 =>
                array (
                    'id' => 791,
                    'name' => 'South Louisiana',
                    'code' => 'US LUA',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            291 =>
                array (
                    'id' => 792,
                    'name' => 'Tacoma',
                    'code' => 'US ACI',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            292 =>
                array (
                    'id' => 793,
                    'name' => 'Tampa',
                    'code' => 'US TPA',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            293 =>
                array (
                    'id' => 794,
                    'name' => 'Texas City',
                    'code' => 'US TXT',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            294 =>
                array (
                    'id' => 795,
                    'name' => 'Valdez',
                    'code' => 'US VDZ',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            295 =>
                array (
                    'id' => 796,
                    'name' => 'Wilmington (DE)',
                    'code' => 'US ILM',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            296 =>
                array (
                    'id' => 797,
                    'name' => 'Wilmington (NC)',
                    'code' => 'US ILG',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            297 =>
                array (
                    'id' => 798,
                    'name' => 'Yakutat',
                    'code' => 'US YAK',
                    'country_id' => 229,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            298 =>
                array (
                    'id' => 799,
                    'name' => 'Fray Bentos',
                    'code' => 'UY FZB',
                    'country_id' => 230,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            299 =>
                array (
                    'id' => 800,
                    'name' => 'Montevideo',
                    'code' => 'UY MVD',
                    'country_id' => 230,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            300 =>
                array (
                    'id' => 801,
                    'name' => 'Nueva Palmira',
                    'code' => 'UY NVP',
                    'country_id' => 230,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            301 =>
                array (
                    'id' => 802,
                    'name' => 'Paysandu',
                    'code' => 'UY PDU',
                    'country_id' => 230,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            302 =>
                array (
                    'id' => 803,
                    'name' => 'Port Vila',
                    'code' => 'VU VLI',
                    'country_id' => 238,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            303 =>
                array (
                    'id' => 804,
                    'name' => 'Santo',
                    'code' => 'VU SAN',
                    'country_id' => 238,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            304 =>
                array (
                    'id' => 805,
                    'name' => 'Bajo Grande Refinery',
                    'code' => 'VE BJV',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            305 =>
                array (
                    'id' => 806,
                    'name' => 'Cumana (Puerto
Sucre)',
                    'code' => 'VE CUM',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            306 =>
                array (
                    'id' => 807,
                    'name' => 'La Guaira',
                    'code' => 'VE LAG',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            307 =>
                array (
                    'id' => 808,
                    'name' => 'La Salina',
                    'code' => 'VE LSV',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            308 =>
                array (
                    'id' => 809,
                    'name' => 'Maracaibo',
                    'code' => 'VE MAR',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            309 =>
                array (
                    'id' => 810,
                    'name' => 'Matanzas',
                    'code' => 'VE MTV',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            310 =>
                array (
                    'id' => 811,
                    'name' => 'Palua',
                    'code' => 'VE PLA',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            311 =>
                array (
                    'id' => 812,
                    'name' => 'Puerto Cabello',
                    'code' => 'VE PBL',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            312 =>
                array (
                    'id' => 813,
                    'name' => 'Puerto La Cruz',
                    'code' => 'VE PCZ',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            313 =>
                array (
                    'id' => 814,
                    'name' => 'Punta Cardon',
                    'code' => 'VE PCN',
                    'country_id' => 234,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            314 =>
                array (
                    'id' => 815,
                    'name' => 'Danang',
                    'code' => 'VN DAD',
                    'country_id' => 237,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            315 =>
                array (
                    'id' => 816,
                    'name' => 'Haiphong',
                    'code' => 'VN HPH',
                    'country_id' => 237,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            316 =>
                array (
                    'id' => 817,
                    'name' => 'Ho Chi Minh City',
                    'code' => 'VN SGN',
                    'country_id' => 237,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            317 =>
                array (
                    'id' => 818,
                    'name' => 'Hon Gay',
                    'code' => 'VN HON',
                    'country_id' => 237,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            318 =>
                array (
                    'id' => 819,
                    'name' => 'Nha Trang',
                    'code' => 'VN NHA',
                    'country_id' => 237,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            319 =>
                array (
                    'id' => 820,
                    'name' => 'Charlotte Amalie,',
                    'code' => 'VI STT',
                    'country_id' => 236,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            320 =>
                array (
                    'id' => 821,
                    'name' => 'Christiansted, St.
Croix',
                    'code' => 'VI CTD',
                    'country_id' => 236,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            321 =>
                array (
                    'id' => 822,
                    'name' => 'Limetree Bay',
                    'code' => 'VI LIB',
                    'country_id' => 236,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            322 =>
                array (
                    'id' => 823,
                    'name' => 'Aden',
                    'code' => 'YE ADE',
                    'country_id' => 242,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            323 =>
                array (
                    'id' => 824,
                    'name' => 'Hodeidah',
                    'code' => 'YE HOD',
                    'country_id' => 242,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            324 =>
                array (
                    'id' => 825,
                    'name' => 'Mokha',
                    'code' => 'YE MOK',
                    'country_id' => 242,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            325 =>
                array (
                    'id' => 826,
                    'name' => 'Mukalla',
                    'code' => 'YE MKX',
                    'country_id' => 242,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}