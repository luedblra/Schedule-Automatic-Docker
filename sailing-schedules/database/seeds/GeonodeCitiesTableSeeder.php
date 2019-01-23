<?php

use Illuminate\Database\Seeder;

class GeonodeCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('geonode_cities')->delete();
        
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cityName' => 'Kipindi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cityName' => 'Ipole',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'cityName' => 'Watsi-Genge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'cityName' => 'Charlotte (Skidegate)',
                'code' => 'CASKI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'cityName' => 'Homer',
                'code' => 'USHOI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'cityName' => 'Hartsdale',
                'code' => 'USHAS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'cityName' => 'Killingholme',
                'code' => 'GBKGH',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'cityName' => 'Shoreham',
                'code' => 'GBSHO',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'cityName' => 'Southend',
                'code' => 'GBSND',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'cityName' => 'Santa Fe',
                'code' => 'ARSFN',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'cityName' => 'Punta De Palmas',
                'code' => 'VEPLV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'cityName' => 'Moin Bay',
                'code' => 'CRMOB',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'cityName' => 'Canaport',
                'code' => 'CACPT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'cityName' => 'Winslow',
                'code' => 'USWSE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'cityName' => 'West Foreland',
                'code' => 'USWFO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'cityName' => 'Redwood City',
                'code' => 'USRWC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'cityName' => 'Shawano',
                'code' => 'USSWS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'cityName' => 'Mars',
                'code' => 'USXJB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'cityName' => 'Sullom Voe',
                'code' => 'GBSUL',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'cityName' => 'Salina',
                'code' => 'ITSLA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'cityName' => 'Eleusis',
                'code' => 'GREEU',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
            'cityName' => 'Syros (Syra)',
                'code' => 'GRJSY',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'cityName' => 'Cebu',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'cityName' => 'Coco Grove Nature Resort',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'cityName' => 'Pointe Des Galets',
                'code' => 'REPDG',
                'country' => 'Reunion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
            'cityName' => 'Sulina (Port Et Zone Franche)',
                'code' => 'ROSUL',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'cityName' => 'Damman',
                'code' => 'SADMN',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'cityName' => 'Tijuana',
                'code' => 'MXTIJ',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'cityName' => 'Jose Ignacio Terminal',
                'code' => 'UYJIT',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'cityName' => 'Khark Island',
                'code' => 'IRKHK',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'cityName' => 'Bandar Mahshahr',
                'code' => 'IRMRX',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
            'cityName' => 'Porto Foxi (Sarroch)',
                'code' => 'ITPFX',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'cityName' => 'Gutthom',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'cityName' => 'Rharous',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'cityName' => 'Ambohitsara',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'cityName' => 'Pomala',
                'code' => 'IDPUM',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'cityName' => 'Telok Ayer',
                'code' => 'IDTKA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'cityName' => 'Lifake',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'cityName' => 'Vum',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'cityName' => 'Escravos',
                'code' => 'NGESC',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'cityName' => 'My Tho',
                'code' => 'VNMUT',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'cityName' => 'Yafala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'cityName' => 'Isokolokoto',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'cityName' => 'Nkuvu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'cityName' => 'Koko',
                'code' => 'NGKOK',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'cityName' => 'Pugwash',
                'code' => 'CAPUG',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
            'cityName' => 'Liege (Luik)',
                'code' => 'BELGG',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'cityName' => 'Naha',
                'code' => 'JPNAH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'cityName' => 'Cossack Pioneer',
                'code' => NULL,
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'cityName' => 'Des Plaines',
                'code' => 'USDES',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'cityName' => 'Oakhamness',
                'code' => 'GBOAK',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'cityName' => 'Hunterston',
                'code' => 'GBHST',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'cityName' => 'Faslane',
                'code' => 'GBFAS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'cityName' => 'Palma Mallorca',
                'code' => 'ESPMI',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'cityName' => 'Moji',
                'code' => 'JPMOJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'cityName' => 'Sendai',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
            'cityName' => 'Port Of Aqtau (Aktau)',
                'code' => NULL,
                'country' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'cityName' => 'Bassein',
                'code' => 'MMBSX',
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'cityName' => 'La Palma',
                'code' => 'PAPLP',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'cityName' => 'Lajes',
                'code' => 'PTLAJ',
                'country' => 'Azores Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'cityName' => 'Mesaieed',
                'code' => 'QAUMS',
                'country' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'cityName' => 'Punta Colorada',
                'code' => 'ARPCO',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'cityName' => 'South Riding Point',
                'code' => 'BSSRP',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'cityName' => 'Woodlands',
                'code' => 'SGWDL',
                'country' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'cityName' => 'Aioi',
                'code' => 'JPAIO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'cityName' => 'Mukho',
                'code' => 'KRMUK',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'cityName' => 'Arman',
                'code' => 'RUARM',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'cityName' => 'Tuxpan',
                'code' => 'MXTUX',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'cityName' => 'Puerto Miranda / Maracaibo L.',
                'code' => 'VEMIV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'cityName' => 'La Salina / Maracaibo L',
                'code' => 'VELSV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'cityName' => 'Moulmein',
                'code' => 'MMMNU',
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'cityName' => 'Sidi Kerir',
                'code' => 'EGSKT',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'cityName' => 'Stignaesvaerkets Havn',
                'code' => 'DKSTG',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'cityName' => 'Ulindi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'cityName' => 'Inkoo',
                'code' => 'FIINK',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'cityName' => 'Crooked Island',
                'code' => 'BSCRI',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'cityName' => 'Barahona',
                'code' => 'DOBRX',
                'country' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'cityName' => 'Bandar Abbas',
                'code' => 'IRBND',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'cityName' => 'Forno',
                'code' => 'BRFNO',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'cityName' => 'Kalecik',
                'code' => 'CYKAL',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'cityName' => 'El Iskandariya',
                'code' => 'EGALY',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'cityName' => 'Ras Shukheir',
                'code' => 'EGRSH',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'cityName' => 'Lingah',
                'code' => 'IRLIN',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'cityName' => 'Basrah',
                'code' => 'IQBSR',
                'country' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'cityName' => 'Hibiki',
                'code' => 'JPHBK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'cityName' => 'Yawata',
                'code' => 'JPYWT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'cityName' => 'Juaymah Terminal',
                'code' => 'SAJUT',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'cityName' => 'Tembladora',
                'code' => 'TTTEM',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'cityName' => 'Haydarpasa',
                'code' => 'TRHAY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'cityName' => 'Foca',
                'code' => 'TRFOC',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'cityName' => 'St Thomas Island',
                'code' => 'VISTT',
                'country' => 'United States Virgin Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'cityName' => 'Barcadera',
                'code' => 'AWBAR',
                'country' => 'Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'cityName' => 'Bullen Bay',
                'code' => 'ANBUB',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'cityName' => 'Zayed',
                'code' => 'AEMZD',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'cityName' => 'Barbuda',
                'code' => 'AGBBQ',
                'country' => 'Antigua and Barbuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'cityName' => 'Jiangyin',
                'code' => 'CNJIA',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'cityName' => 'Sittwe',
                'code' => 'MMAKY',
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'cityName' => 'Lilanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'cityName' => 'Pointe A La Hache',
                'code' => 'USPHC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'cityName' => 'Port Of Semey',
                'code' => NULL,
                'country' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'cityName' => 'Antwerp',
                'code' => NULL,
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'cityName' => 'Navarino',
                'code' => 'GRNAV',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'cityName' => 'Port Of Atyrau',
                'code' => NULL,
                'country' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'cityName' => 'Malingu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'cityName' => 'Bolafa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
            'cityName' => 'Malta (Valetta)',
                'code' => 'MTMLA',
                'country' => 'Malta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'cityName' => 'Makayabo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'cityName' => 'N\'Gi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'cityName' => 'Za\'Farana',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'cityName' => 'Saleologa',
                'code' => NULL,
                'country' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'cityName' => 'Itoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'cityName' => 'Lilo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'cityName' => 'Karhanywa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'cityName' => 'Bangu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'cityName' => 'Aola Bay',
                'code' => 'SBAOB',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'cityName' => 'Walton',
                'code' => 'CAWTN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
            'cityName' => 'Northville (Riverhead)',
                'code' => 'USNVR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'cityName' => 'Felton',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'cityName' => 'Tanamo',
                'code' => 'CUTAN',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'cityName' => 'Fraser Mills',
                'code' => 'CAFRM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'cityName' => 'Berville',
                'code' => 'FRBEV',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'cityName' => 'Bagotville',
                'code' => 'CABGT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'cityName' => 'Norsworthy',
                'code' => 'USNSW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'cityName' => 'Hamaroy',
                'code' => 'NOHMY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'cityName' => 'Melilli',
                'code' => 'ITMEL',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'cityName' => 'Studstrupvaerkets Havn',
                'code' => 'DKSSV',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'cityName' => 'Nowy Port',
                'code' => 'PLNOW',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'cityName' => 'Thira',
                'code' => 'GRJTR',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'cityName' => 'Mutsuogawara',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'cityName' => 'Ras Laffan',
                'code' => NULL,
                'country' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'cityName' => 'Shortland Harbour',
                'code' => 'SBSHH',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'cityName' => 'Hera fishing port',
                'code' => NULL,
                'country' => 'Timor-Leste',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'cityName' => 'Thi Nai',
                'code' => NULL,
                'country' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'cityName' => 'Ras Zubbaya',
                'code' => 'AEDUY',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'cityName' => 'New Holland',
                'code' => 'GBNHO',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'cityName' => 'Djerba',
                'code' => 'TNDJE',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'cityName' => 'Talca',
                'code' => 'CLTLX',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'cityName' => 'Kuantan',
                'code' => 'MYKUA',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'cityName' => 'Kerteh Terminal',
                'code' => 'MYKET',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'cityName' => 'Mokpo',
                'code' => 'KRMOK',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'cityName' => 'Port Kelang',
                'code' => 'MYPKG',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'cityName' => 'Guaranao Bay',
                'code' => 'VEGUB',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'cityName' => 'Henjam',
                'code' => 'IRHEJ',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'cityName' => 'Okayama',
                'code' => 'JPOKJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'cityName' => 'Tianjinxingang',
                'code' => 'CNTXG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'cityName' => 'Fao',
                'code' => 'IQFAO',
                'country' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'cityName' => 'Acapulco',
                'code' => 'MXACA',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'cityName' => 'Banten',
                'code' => 'IDCIG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'cityName' => 'Ain Sukhna',
                'code' => 'EGAIS',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'cityName' => 'Rothesay',
                'code' => 'GBRAY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'cityName' => 'Port Huron',
                'code' => 'USPHN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'cityName' => 'Patterson',
                'code' => 'USPAN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'cityName' => 'Stanlow',
                'code' => 'GBSOW',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'cityName' => 'Porvoo',
                'code' => 'FIPRV',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'cityName' => 'Apra',
                'code' => 'GUAPR',
                'country' => 'Guam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'cityName' => 'Misumi',
                'code' => 'JPMIS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'cityName' => 'Oshima',
                'code' => 'JPOSM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'cityName' => 'Nagoya',
                'code' => 'JPNGO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'cityName' => 'Dhuba',
                'code' => 'SADHU',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'cityName' => 'La Pampilla',
                'code' => 'PELPP',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'cityName' => 'Providenciales',
                'code' => 'TCPLS',
                'country' => 'Turks and Caicos Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'cityName' => 'Trinidad',
                'code' => 'BOTDD',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'cityName' => 'Tutunciftlik',
                'code' => 'TRTUT',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'cityName' => 'Gokova',
                'code' => 'TRGKV',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'cityName' => 'Gulluk',
                'code' => 'TRGUL',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'cityName' => 'Haimen',
                'code' => 'CNHME',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'cityName' => 'Chennai',
                'code' => 'INMAA',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'cityName' => 'Boza',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'cityName' => 'Ama',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'cityName' => 'Port Of Pavlodar',
                'code' => NULL,
                'country' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'cityName' => 'Montoir',
                'code' => NULL,
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'cityName' => 'Kingushi Aval',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'cityName' => 'Mabunde',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
            'cityName' => 'Sevilla (Seville)',
                'code' => 'ESSVQ',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'cityName' => 'De Bwina',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'cityName' => 'Kikundi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'cityName' => 'Bremerton',
                'code' => 'USPWT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'cityName' => 'Annicet / Ntantu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'cityName' => 'Hongai',
                'code' => 'VNHON',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'cityName' => 'Wamba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'cityName' => 'Malela',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'cityName' => 'Lachine',
                'code' => 'CALAC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
            'cityName' => 'Trois-Rivieres (Three Rivers)',
                'code' => 'CATRR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'cityName' => 'Naryan Mar',
                'code' => 'RUNNM',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'cityName' => 'Cape Race',
                'code' => 'CACRE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'cityName' => 'Lindesnes',
                'code' => 'NOLDS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'cityName' => 'Sortland',
                'code' => 'NOSLX',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'cityName' => 'Eemshaven',
                'code' => 'NLEEM',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'cityName' => 'Ras Budran',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'cityName' => 'Kashima',
                'code' => 'JPKSM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'cityName' => 'Mtwapa',
                'code' => NULL,
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'cityName' => 'Sour',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'cityName' => 'Ruse',
                'code' => 'BGRDU',
                'country' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'cityName' => 'Ringi Cove',
                'code' => 'SBRIN',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'cityName' => 'Allardyce Harbour',
                'code' => 'SBALB',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'cityName' => 'Porto Alexandre',
                'code' => 'AOPLE',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'cityName' => 'Malongo',
                'code' => 'AOMAL',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'cityName' => 'Vita',
                'code' => 'CUVIT',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'cityName' => 'Xingang',
                'code' => NULL,
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'cityName' => 'Marans',
                'code' => 'FRMRN',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'cityName' => 'Higashi-Harima',
                'code' => 'JPTSG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'cityName' => 'Labuan',
                'code' => 'MYLBU',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'cityName' => 'Butzfleth',
                'code' => 'DEBUZ',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'cityName' => 'Brevik',
                'code' => 'NOBVK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'cityName' => 'Coloncha',
                'code' => 'VECOL',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'cityName' => 'El Tablazo / Maracaibo L',
                'code' => 'VEETV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'cityName' => 'Balogo',
                'code' => 'PHBLG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'cityName' => 'Pyongtaek',
                'code' => 'KRPTK',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'cityName' => 'Cumarebo',
                'code' => 'VECMR',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'cityName' => 'Las Piedras',
                'code' => 'VELSP',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'cityName' => 'Patillos',
                'code' => 'CLPTI',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'cityName' => 'Map Ta Phut',
                'code' => 'THMAT',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'cityName' => 'Wemyss Bay',
                'code' => 'GBWMB',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'cityName' => 'Clydeport',
                'code' => 'GBCYP',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'cityName' => 'Barrow Island',
                'code' => 'AUBWB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'cityName' => 'Moskenes',
                'code' => 'NOMSK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'cityName' => 'Ramfjordnes',
                'code' => 'NORMJ',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'cityName' => 'Dingle',
                'code' => 'GBDIN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'cityName' => 'Port Taranaki',
                'code' => 'NZNPL',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'cityName' => 'Marsden Point',
                'code' => 'NZMAP',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'cityName' => 'Douglas',
                'code' => 'GBDGS',
                'country' => 'Isle of Man',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
            'cityName' => 'Europoort (Europort)',
                'code' => 'NLEUR',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'cityName' => 'Cabo Negro',
                'code' => 'CLCNX',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'cityName' => 'Zhangzhou',
                'code' => 'CNZZU',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'cityName' => 'Vadinar',
                'code' => 'INVAD',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'cityName' => 'Kozhikode',
                'code' => 'INCCJ',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'cityName' => 'Fukui',
                'code' => 'JPFKJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'cityName' => 'Ryotsu',
                'code' => 'JPSDO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'cityName' => 'Cul De Sac',
                'code' => 'LCCDS',
                'country' => 'Saint Lucia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'cityName' => 'Misima Island',
                'code' => 'PGMIS',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'cityName' => 'Skredsvik',
                'code' => 'SESKR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'cityName' => 'Saleef Port',
                'code' => 'YESAL',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'cityName' => 'Fuikbaai',
                'code' => 'ANFUI',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'cityName' => 'Mina Saqr',
                'code' => 'AEMSA',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'cityName' => 'Ed Daliah',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'cityName' => 'Hitachinaka',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'cityName' => 'Kunde',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'cityName' => 'Manombo',
                'code' => 'MGMOB',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'cityName' => 'Osaka',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'cityName' => 'Rochester',
                'code' => 'USROC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'cityName' => 'Shwishwi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'cityName' => 'Kashofu I',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
            'cityName' => 'Aguathuna (Port Au Port)',
                'code' => 'CAPAP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'cityName' => 'Ferndale',
                'code' => 'USFDT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'cityName' => 'Brooklyn',
                'code' => 'CABKN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'cityName' => 'Ballast Head',
                'code' => 'AUBAH',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'cityName' => 'Fort Albany',
                'code' => 'CAFAL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'cityName' => 'Port Arthur',
                'code' => 'CAPOA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'cityName' => 'Father Point',
                'code' => 'CAFAP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'cityName' => 'Traver',
                'code' => 'USTVY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'cityName' => 'Ramseur',
                'code' => 'USRSR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'cityName' => 'Thamshavn',
                'code' => 'NOTHA',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'cityName' => 'Granton',
                'code' => 'GBGRN',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'cityName' => 'Straumsvik',
                'code' => 'ISSTR',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'cityName' => 'Akrotiri',
                'code' => 'CYAKT',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'cityName' => 'Arguineguin',
                'code' => 'ESARI',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'cityName' => 'Tokyo',
                'code' => 'JPTYO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'cityName' => 'Hakata',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'cityName' => 'Muhammad Bin Qasim',
                'code' => 'PKBQM',
                'country' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'cityName' => 'Barcelona',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'cityName' => 'Basarabi',
                'code' => 'ROBAB',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'cityName' => 'Buka Ipangu',
                'code' => NULL,
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'cityName' => 'Michurin',
                'code' => 'BGMIC',
                'country' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'cityName' => 'Port Kamsar',
                'code' => 'GNKMR',
                'country' => 'Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'cityName' => 'Dibaya',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'cityName' => 'Bena Dibele',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'cityName' => 'Bashishombe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'cityName' => 'Mapangu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'cityName' => 'Kasenyi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'cityName' => 'Mahagi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'cityName' => 'Mushimbake',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'cityName' => 'Lumbu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'cityName' => 'Kilwa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'cityName' => 'Masia',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'cityName' => 'Libenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'cityName' => 'Zongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'cityName' => 'Kamba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'cityName' => 'Havana',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'cityName' => 'Ibaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'cityName' => 'Gabia',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'cityName' => 'Popokabaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'cityName' => 'Kasenga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'cityName' => 'Pania-Mutombo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'cityName' => 'Businga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'cityName' => 'Kutu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'cityName' => 'Keta',
                'code' => 'GHKIT',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'cityName' => 'Galle',
                'code' => 'LKGAL',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'cityName' => 'Savanna La Mar',
                'code' => 'JMSLM',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'cityName' => 'Baraderes',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'cityName' => 'Lille',
                'code' => 'FRLLE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'cityName' => 'Prudhoe',
                'code' => 'USPUO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'cityName' => 'Soyo-Quinfuquena Terminal',
                'code' => 'AOSOQ',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'cityName' => 'Langkawi',
                'code' => 'MYLGK',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'cityName' => 'Sevivara Point',
                'code' => 'IDSVP',
                'country' => 'Timor-Leste',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'cityName' => 'Kaohsiung',
                'code' => 'TWKHH',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'cityName' => 'Yonkers',
                'code' => 'USYON',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'cityName' => 'General Santos',
                'code' => 'PHDAD',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'cityName' => 'Kailanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'cityName' => 'St Petersburg',
                'code' => 'RULED',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'cityName' => 'Puerto Barrios',
                'code' => 'GTPBR',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'cityName' => 'Conakry',
                'code' => 'GNCKY',
                'country' => 'Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'cityName' => 'Jacmel',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'cityName' => 'Bocagrande',
                'code' => 'USBCG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'cityName' => 'Shimizu',
                'code' => 'JPSMZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'cityName' => 'Limetree Bay',
                'code' => 'VILIB',
                'country' => 'United States Virgin Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'cityName' => 'Larne',
                'code' => 'GBLAR',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'cityName' => 'Tarragona',
                'code' => 'ESTAR',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'cityName' => 'Yanonge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'cityName' => 'Saint George\'S',
                'code' => 'GDSTG',
                'country' => 'Grenada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'cityName' => 'Seattle',
                'code' => 'USSEA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'cityName' => 'Vestmanhavn',
                'code' => 'FOVES',
                'country' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'cityName' => 'Oulu',
                'code' => 'FIOUL',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'cityName' => 'Mo I Rana',
                'code' => 'NOMQN',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'cityName' => 'Marsaxlokk',
                'code' => 'MTMAR',
                'country' => 'Malta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'cityName' => 'Caticlan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'cityName' => 'Sitia',
                'code' => 'GRJSH',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'cityName' => 'Qurayyat',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'cityName' => 'Bahia de Caraquez',
                'code' => 'ECBHA',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'cityName' => 'Hadsund',
                'code' => 'DKHSU',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'cityName' => 'Rio Marina',
                'code' => 'ITRMA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'cityName' => 'Lorient',
                'code' => 'FRLRT',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'cityName' => 'Binga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'cityName' => 'Gruvon',
                'code' => 'SEGRU',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'cityName' => 'Svelgen',
                'code' => 'NOSVE',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'cityName' => 'Ormara',
                'code' => 'PKORW',
                'country' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'cityName' => 'El Minie',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'cityName' => 'Lubeck',
                'code' => 'DELBC',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'cityName' => 'Killybegs',
                'code' => 'IEKBS',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'cityName' => 'Haderslev',
                'code' => 'DKHAD',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'cityName' => 'Hirohata',
                'code' => 'JPHRH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'cityName' => 'Kuwait Navy Base',
                'code' => NULL,
                'country' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'cityName' => 'Polloc',
                'code' => 'PHPLC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'cityName' => 'Vavony',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'cityName' => 'Port Dover',
                'code' => 'CAPDV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'cityName' => 'Hobro',
                'code' => 'DKHBO',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'cityName' => 'Sharjah',
                'code' => 'AESHJ',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'cityName' => 'Alliance',
                'code' => 'USAIH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'cityName' => 'Riga',
                'code' => 'LVRIX',
                'country' => 'Latvia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'cityName' => 'Isthmia',
                'code' => 'GRITM',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'cityName' => 'Cotonou',
                'code' => 'BJCOO',
                'country' => 'Benin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'cityName' => 'Levis',
                'code' => 'CALEV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'cityName' => 'Porto Corsini',
                'code' => 'ITPCS',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'cityName' => 'Burgeo',
                'code' => 'CABUO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'cityName' => 'Limni',
                'code' => 'GRLII',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'cityName' => 'Cobh',
                'code' => 'IECOB',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'cityName' => 'Genova',
                'code' => NULL,
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'cityName' => 'Leer',
                'code' => 'DELEE',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'cityName' => 'Yanai',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'cityName' => 'Naze',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'cityName' => 'Baku',
                'code' => NULL,
                'country' => 'Azerbaijan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'cityName' => 'Shelburne',
                'code' => 'CASBU',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'cityName' => 'Hopa',
                'code' => 'TRHOP',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'cityName' => 'Soraker',
                'code' => 'SESOR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'cityName' => 'En Naqoura',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'cityName' => 'El Heri',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'cityName' => 'Port Colborne',
                'code' => 'CAPCO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'cityName' => 'Pomoyo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'cityName' => 'Cadiz',
                'code' => 'ESCAD',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'cityName' => 'Luebo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'cityName' => 'Salaverry',
                'code' => 'PESVY',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'cityName' => 'Paita',
                'code' => 'PEPAI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'cityName' => 'Redon',
                'code' => 'FRRDN',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'cityName' => 'Ambalavontaka',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'cityName' => 'Luabo',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'cityName' => 'Fortune',
                'code' => 'CAFOR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'cityName' => 'Basongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'cityName' => 'Irebu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'cityName' => 'Ampanotoamaizina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'cityName' => 'Sabine',
                'code' => 'USSAB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'cityName' => 'Fernandina Beach',
                'code' => 'USFEB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'cityName' => 'Basankusu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'cityName' => 'Kitaibaraki',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'cityName' => 'Point Comfort',
                'code' => 'USPCR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'cityName' => 'Zelenika',
                'code' => 'YUZEL',
                'country' => 'Montenegro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'cityName' => 'Bangkok',
                'code' => 'THBKK',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'cityName' => 'Bangui',
                'code' => NULL,
                'country' => 'Central African Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'cityName' => 'Maluku',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'cityName' => 'Corail',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'cityName' => 'Dong Hoi',
                'code' => 'VNDOH',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'cityName' => 'Es Saadiyat',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'cityName' => 'Talibon',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'cityName' => 'Dongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'cityName' => 'Kalundu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'cityName' => 'Lukolela',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'cityName' => 'Uvira',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'cityName' => 'Lusengo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'cityName' => 'Favignana',
                'code' => 'ITFAV',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'cityName' => 'Portsmouth',
                'code' => 'GBPME',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'cityName' => 'Bujumbura',
                'code' => NULL,
                'country' => 'Burundi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'cityName' => 'Lulonga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'cityName' => 'Antsiramihanana',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'cityName' => 'Carloforte',
                'code' => 'ITCLF',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'cityName' => 'Kavieng',
                'code' => 'PGKVG',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'cityName' => 'Es Safra',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'cityName' => 'Lokoja',
                'code' => NULL,
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'cityName' => 'Glomfjord',
                'code' => 'NOGLO',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'cityName' => 'Sawakin',
                'code' => NULL,
                'country' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'cityName' => 'Baddeck',
                'code' => 'CABAD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'cityName' => 'Dakar',
                'code' => 'SNDKR',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'cityName' => 'Liloan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'cityName' => 'Kisangani',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'cityName' => 'Kalemie',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'cityName' => 'Ilebo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'cityName' => 'Umm Qasr',
                'code' => 'IQUQR',
                'country' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'cityName' => 'Bolobo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'cityName' => 'Baybay',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'cityName' => 'Hilongos',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'cityName' => 'Morondava',
                'code' => 'MGMOQ',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'cityName' => 'Temera',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'cityName' => 'Wau',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'cityName' => 'Tema',
                'code' => 'GHTEM',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'cityName' => 'Lusambo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'cityName' => 'Kinshasa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'cityName' => 'Akula',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'cityName' => 'Mushie',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'cityName' => 'Niamina',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'cityName' => 'Funchal',
                'code' => 'PTFNC',
                'country' => 'Madeira Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'cityName' => 'Cheikh Zennad',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'cityName' => 'Kirango',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'cityName' => 'Contrecoeur',
                'code' => 'CACOC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'cityName' => 'Abidjan',
                'code' => 'CIABJ',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'cityName' => 'Mogadishu',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'cityName' => 'Amal',
                'code' => 'SEAMA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'cityName' => 'Lome',
                'code' => 'TGLFW',
                'country' => 'Togo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'cityName' => 'Monrovia',
                'code' => 'LRMLW',
                'country' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'cityName' => 'Freetown',
                'code' => 'SLFNA',
                'country' => 'Sierra Leone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'cityName' => 'Bissau',
                'code' => 'GWOXB',
                'country' => 'Guinea-Bissau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'cityName' => 'Katonda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'cityName' => 'Bugarura',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'cityName' => 'San Isidro',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'cityName' => 'Berbera',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'cityName' => 'Surigao',
                'code' => 'PHSUG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'cityName' => 'Kiumba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'cityName' => 'La Louviere',
                'code' => 'BELLO',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'cityName' => 'Ardalstangen',
                'code' => 'NOARD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'cityName' => 'Cartagena',
                'code' => 'COCTG',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'cityName' => 'Belawan',
                'code' => 'IDBLW',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'cityName' => 'Gorontalo',
                'code' => 'IDGTO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'cityName' => 'Foundiougne',
                'code' => 'SNFOU',
                'country' => 'Senegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'cityName' => 'Andranokoditra',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'cityName' => 'Dusseldorf',
                'code' => 'DEDUS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'cityName' => 'Bukavu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'cityName' => 'Goma',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'cityName' => 'Iharana',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'cityName' => 'Odessa',
                'code' => 'UAODS',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'cityName' => 'Kherson',
                'code' => 'UAKHE',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'cityName' => 'Yalta',
                'code' => 'UAYAL',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'cityName' => 'Kerch',
                'code' => 'UAKEH',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'cityName' => 'Reni',
                'code' => 'UARNI',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'cityName' => 'Mariupol',
                'code' => NULL,
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'cityName' => 'Vung Tau',
                'code' => 'VNVUT',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'cityName' => 'Owen Sound',
                'code' => 'CAOWS',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'cityName' => 'Parry Sound',
                'code' => 'CAPRS',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'cityName' => 'Port Weller',
                'code' => 'CAPWE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'cityName' => 'Gatun',
                'code' => 'PAGTN',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'cityName' => 'Mushuni',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'cityName' => 'Wafania',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'cityName' => 'Matane',
                'code' => 'CAYME',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'cityName' => 'Isongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'cityName' => 'Verdal',
                'code' => 'NOVER',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'cityName' => 'Stewart',
                'code' => 'CASTW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'cityName' => 'Tshumbiri',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'cityName' => 'Butala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'cityName' => 'Eolo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'cityName' => 'Tampina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'cityName' => 'Marovintsy',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'cityName' => 'Yumbi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'cityName' => 'Mobeka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'cityName' => 'Iloilo',
                'code' => 'PHCRT',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'cityName' => 'Aden',
                'code' => 'YEADE',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'cityName' => 'Mangai',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'cityName' => 'Lodi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'cityName' => 'Bokila',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'cityName' => 'Burea',
                'code' => 'SEBUR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'cityName' => 'Fecamp',
                'code' => 'FRFEC',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'cityName' => 'Banjul',
                'code' => 'GMBJL',
                'country' => 'Gambia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'cityName' => 'Gambela',
                'code' => NULL,
                'country' => 'Ethiopia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'cityName' => 'Itang',
                'code' => NULL,
                'country' => 'Ethiopia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'cityName' => 'Moa',
                'code' => 'CUMOA',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'cityName' => 'Pilon',
                'code' => 'CUPIL',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'cityName' => 'Renk',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'cityName' => 'Tripoli',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'cityName' => 'Lattakia',
                'code' => 'SYLTK',
                'country' => 'Syrian Arab Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'cityName' => 'Tartous',
                'code' => 'SYTTS',
                'country' => 'Syrian Arab Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'cityName' => 'Kabara',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'cityName' => 'Juba',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'cityName' => 'Adok',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'cityName' => 'Malakal',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'cityName' => 'Bor',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'cityName' => 'Mopti',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'cityName' => 'Bentiu',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'cityName' => 'Toliara',
                'code' => 'MGTLE',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'cityName' => 'Toamasina',
                'code' => 'MGTMM',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'cityName' => 'Beirut',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'cityName' => 'Aqaba',
                'code' => 'JOAQJ',
                'country' => 'Jordan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'cityName' => 'Koulikoro',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'cityName' => 'Shambe',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'cityName' => 'Wema',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'cityName' => 'Ibembo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'cityName' => 'Muntu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'cityName' => 'Botende',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'cityName' => 'Kimbe',
                'code' => 'PGKIM',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'cityName' => 'Fomboni',
                'code' => 'KMFOU',
                'country' => 'Comoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'cityName' => 'Aitape',
                'code' => 'PGATP',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'cityName' => 'Mombasa',
                'code' => 'KEMBA',
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'cityName' => 'Zeytinburnu',
                'code' => 'TRZEY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'cityName' => 'Les Cayes',
                'code' => 'HTACA',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'cityName' => 'Milwaukee',
                'code' => 'USMKE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'cityName' => 'Port Washington',
                'code' => 'USPWA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'cityName' => 'Oswego',
                'code' => 'USOSW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'cityName' => 'Crescent City',
                'code' => 'USCEC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'cityName' => 'Bucksport',
                'code' => 'USBUP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'cityName' => 'Carmanville',
                'code' => 'CACMV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'cityName' => 'Squamish',
                'code' => 'CASQA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'cityName' => 'Unalaska',
                'code' => 'USUAA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'cityName' => 'Dutch Harbor',
                'code' => 'USDUT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'cityName' => 'Atreco',
                'code' => 'USATR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'cityName' => 'Lake Charles',
                'code' => 'USLCH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'cityName' => 'Plaquemine',
                'code' => 'USPLQ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'cityName' => 'Wilmington',
                'code' => 'USILM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'cityName' => 'Coos Bay',
                'code' => 'USCOB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'cityName' => 'Montreal',
                'code' => 'CAMTR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'cityName' => 'Sydney',
                'code' => 'CASYD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'cityName' => 'Newcastle',
                'code' => 'CANCT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'cityName' => 'Long Harbour',
                'code' => 'CALOH',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'cityName' => 'Brunswick',
                'code' => 'USSSI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'cityName' => 'Annapolis',
                'code' => 'USANP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'cityName' => 'Liverpool',
                'code' => 'CALIV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'cityName' => 'Brockville',
                'code' => 'CABCK',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'cityName' => 'Bangor',
                'code' => 'USBGR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'cityName' => 'Becancour',
                'code' => 'CABEC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'cityName' => 'Silverdale',
                'code' => 'USSIF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'cityName' => 'Cowichan Bay',
                'code' => 'CACCB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'cityName' => 'Lewisporte',
                'code' => 'CALWP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'cityName' => 'Campbell River',
                'code' => 'CACAM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'cityName' => 'Port Angeles',
                'code' => 'USCLM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'cityName' => 'Lamlash',
                'code' => 'GBLAH',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'cityName' => 'Burntisland',
                'code' => 'GBBTL',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'cityName' => 'Portrush',
                'code' => 'GBPTR',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'cityName' => 'Patmos',
                'code' => 'GRPMS',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'cityName' => 'Chioggia',
                'code' => 'ITCHI',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'cityName' => 'Trieste',
                'code' => 'ITTRS',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'cityName' => 'Puttgarden',
                'code' => 'DEPUT',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'cityName' => 'Sassnitz',
                'code' => 'DESAS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'cityName' => 'Conneaut',
                'code' => 'USCDY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'cityName' => 'Windsor',
                'code' => 'CAWND',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'cityName' => 'Wrightsville',
                'code' => 'USXOG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'cityName' => 'Lewes',
                'code' => 'USLWP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'cityName' => 'Tenes',
                'code' => 'DZTEN',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'cityName' => 'Horten',
                'code' => 'NOHOR',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'cityName' => 'Slemmestad',
                'code' => 'NOSLM',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'cityName' => 'Svano',
                'code' => 'SESVX',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'cityName' => 'Kristiansund',
                'code' => 'NOKSU',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'cityName' => 'Ellesmere Port',
                'code' => 'GBELL',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'cityName' => 'Immingham',
                'code' => 'GBIMM',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'cityName' => 'Solin',
                'code' => 'HRSLN',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'cityName' => 'Pauillac',
                'code' => 'FRPAP',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'cityName' => 'Braila',
                'code' => 'ROBRA',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'cityName' => 'Bakar',
                'code' => 'HRBAK',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'cityName' => 'Rochefort',
                'code' => 'FRRCO',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'cityName' => 'Shengjin',
                'code' => 'ALSHG',
                'country' => 'Albania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'cityName' => 'Rye',
                'code' => 'GBRYE',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'cityName' => 'Calais',
                'code' => 'FRCQF',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'cityName' => 'Tilbury',
                'code' => 'GBTIL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'cityName' => 'Rochford',
                'code' => 'GBRFD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'cityName' => 'Maldon',
                'code' => 'GBMAL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'cityName' => 'Tarbert',
                'code' => 'GBTAB',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'cityName' => 'Bremen',
                'code' => 'DEBRE',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'cityName' => 'Runcorn',
                'code' => 'GBRUN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'cityName' => 'Khanom',
                'code' => 'THKHA',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'cityName' => 'El Jadida',
                'code' => 'MAELJ',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'cityName' => 'Kitakyushu',
                'code' => 'JPTBT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'cityName' => 'Collo',
                'code' => 'DZCOL',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'cityName' => 'Bizerte',
                'code' => 'TNBIZ',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'cityName' => 'Safi',
                'code' => 'MASFI',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'cityName' => 'Porto Amboim',
                'code' => 'AOPBN',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'cityName' => 'Songkhla',
                'code' => 'THSGZ',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'cityName' => 'Hirao',
                'code' => 'JPHRA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'cityName' => 'Tonda',
                'code' => 'JPTND',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'cityName' => 'Kainan',
                'code' => 'JPKAI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'cityName' => 'Naruto',
                'code' => 'JPNRU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'cityName' => 'Caleta Olivia',
                'code' => 'ARCVI',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'cityName' => 'Nelson',
                'code' => 'NZNSN',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'cityName' => 'Albany',
                'code' => 'AUALH',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'cityName' => 'Fortaleza',
                'code' => 'BRFOR',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'cityName' => 'Bintulu',
                'code' => 'MYBTU',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'cityName' => 'Bais',
                'code' => 'PHBAI',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'cityName' => 'Sanya',
                'code' => 'CNSYX',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'cityName' => 'Shuidong',
                'code' => 'CNSDG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'cityName' => 'Hong Kong',
                'code' => 'HKHKG',
                'country' => 'Hong Kong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'cityName' => 'Shantou',
                'code' => 'CNSWA',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'cityName' => 'Nishihara',
                'code' => 'JPNHR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'cityName' => 'Shimabara',
                'code' => 'JPSMB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'cityName' => 'Kanda',
                'code' => 'JPKND',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'cityName' => 'Tateyama',
                'code' => 'JPTTY',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'cityName' => 'Tsuiyama',
                'code' => 'JPTYM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'cityName' => 'Erdek',
                'code' => 'TRERK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'cityName' => 'Hakodate',
                'code' => 'JPHKD',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'cityName' => 'Novorossiysk',
                'code' => 'RUNVS',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'cityName' => 'Strahan',
                'code' => 'AUSRN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'cityName' => 'Picton',
                'code' => 'NZPCN',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'cityName' => 'Bell Bay',
                'code' => 'AUBEL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'cityName' => 'Bahia Blanca',
                'code' => 'ARBHI',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'cityName' => 'Wallaroo',
                'code' => 'AUWAL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'cityName' => 'Yamba',
                'code' => 'AUYBA',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'cityName' => 'Gladstone',
                'code' => 'AUGLT',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'cityName' => 'Papeete',
                'code' => 'PFPPT',
                'country' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'cityName' => 'Bislig',
                'code' => 'PHBPH',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'cityName' => 'Huangpu',
                'code' => 'CNHUA',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'cityName' => 'Shibushi',
                'code' => 'JPSBS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'cityName' => 'Usuki',
                'code' => 'JPUSK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'cityName' => 'Tomakomai',
                'code' => 'JPTMK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'cityName' => 'Haikou',
                'code' => 'CNHAK',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'cityName' => 'Nakhodka',
                'code' => 'RUNJK',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'cityName' => 'Bowen',
                'code' => 'AUZBO',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'cityName' => 'Cairns',
                'code' => 'AUCNS',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'cityName' => 'Kudat',
                'code' => 'MYKUD',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'cityName' => 'Araya',
                'code' => 'VEARA',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'cityName' => 'Beypore',
                'code' => 'INBEY',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'cityName' => 'Mundra',
                'code' => 'INMUN',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'cityName' => 'Gasan',
                'code' => 'PHGAS',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'cityName' => 'Tabaco',
                'code' => 'PHTBC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'cityName' => 'Tanabe',
                'code' => 'JPTAE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'cityName' => 'Hikari',
                'code' => 'JPHKR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'cityName' => 'Onoda',
                'code' => 'JPOND',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'cityName' => 'Qingdao',
                'code' => 'CNTAO',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'cityName' => 'Weihai',
                'code' => 'CNWEI',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'cityName' => 'Onagawa',
                'code' => 'JPONG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'cityName' => 'Vladivostok',
                'code' => 'RUVVO',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'cityName' => 'Tuapse',
                'code' => 'RUTUA',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'cityName' => 'Parnu',
                'code' => 'EEPAR',
                'country' => 'Estonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'cityName' => 'Hanko',
                'code' => 'FIHKO',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'cityName' => 'Kantvik',
                'code' => 'FIKNT',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'cityName' => 'Pechenga',
                'code' => 'RUPCE',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'cityName' => 'Pevek',
                'code' => 'RUPWE',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'cityName' => 'Lirquen',
                'code' => 'CLLQN',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'cityName' => 'Puerto Carreno',
                'code' => 'COPCR',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'cityName' => 'Chalna',
                'code' => 'BDCHL',
                'country' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'cityName' => 'Narayanganj',
                'code' => 'BDNAR',
                'country' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'cityName' => 'Sint Nicolaas',
                'code' => 'AWSNL',
                'country' => 'Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'cityName' => 'Hamilton',
                'code' => 'BMBDA',
                'country' => 'Bermuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'cityName' => 'Puerto Deseado',
                'code' => 'ARPUD',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'cityName' => 'San Antonio',
                'code' => 'CLSAI',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'cityName' => 'Oranjestad',
                'code' => 'AWORJ',
                'country' => 'Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'cityName' => 'La Guaira',
                'code' => 'VELAG',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'cityName' => 'Tampico',
                'code' => 'MXTAM',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'cityName' => 'Iquitos',
                'code' => 'PEIQT',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'cityName' => 'Puerto Castilla',
                'code' => 'HNPCA',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'cityName' => 'Corinto',
                'code' => 'NICIO',
                'country' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'cityName' => 'Matarani',
                'code' => 'PEMRI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'cityName' => 'Chetumal',
                'code' => 'MXCTM',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'cityName' => 'Ras Tanura',
                'code' => 'SARTA',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'cityName' => 'Derince',
                'code' => 'TRDRC',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'cityName' => 'Samsun',
                'code' => 'TRSSX',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'cityName' => 'Caldera',
                'code' => 'CLCLD',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'cityName' => 'Golfito',
                'code' => 'CRGLF',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'cityName' => 'Fatsa',
                'code' => 'TRFAS',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'cityName' => 'Cesme',
                'code' => 'TRCES',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'cityName' => 'Vacamonte',
                'code' => 'PAVAC',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'cityName' => 'Parana',
                'code' => 'ARPRA',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'cityName' => 'Ibicuy',
                'code' => 'ARIBY',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'cityName' => 'Caripito',
                'code' => 'VECAR',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'cityName' => 'Androka',
                'code' => 'MGADK',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'cityName' => 'Arecibo',
                'code' => 'PRARE',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'cityName' => 'Paraiso',
                'code' => 'PAPAI',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'cityName' => 'Las Mareas',
                'code' => 'PRLAM',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'cityName' => 'Aliaga',
                'code' => 'TRALI',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'cityName' => 'Takoradi',
                'code' => 'GHTKD',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'cityName' => 'Gelibolu',
                'code' => 'TRGEL',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'cityName' => 'Pepel',
                'code' => 'SLPEP',
                'country' => 'Sierra Leone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'cityName' => 'Winneba',
                'code' => 'GHWEA',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'cityName' => 'Warrenpoint',
                'code' => 'GBWPT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'cityName' => 'Kappeln',
                'code' => 'DEKAP',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'cityName' => 'Wladyslawowo',
                'code' => 'PLWLA',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'cityName' => 'Bandholm',
                'code' => 'DKBDX',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'cityName' => 'Kalundborg',
                'code' => 'DKKAL',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'cityName' => 'Kilchoan',
                'code' => 'GBKOA',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'cityName' => 'Falkenberg',
                'code' => 'SEFAG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'cityName' => 'Aalborg',
                'code' => 'DKAAL',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'cityName' => 'Mariestad',
                'code' => 'SEMAD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'cityName' => 'Kristinehamn',
                'code' => 'SEKHN',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'cityName' => 'Skelleftehamn',
                'code' => 'SESKE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'cityName' => 'Gavle',
                'code' => 'SEGVX',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'cityName' => 'Saint-Marc',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'cityName' => 'Panarukan',
                'code' => 'IDPRN',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'cityName' => 'Merauke',
                'code' => 'IDMKQ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'cityName' => 'Kasim',
                'code' => 'IDKAS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'cityName' => 'Mamuju',
                'code' => 'IDMJU',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'cityName' => 'Pantoloan',
                'code' => 'IDPTL',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'cityName' => 'Cardenas',
                'code' => 'CUCAR',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'cityName' => 'Ceiba Hueca',
                'code' => 'CUCEI',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'cityName' => 'Puerto Cabezas',
                'code' => 'NIPUZ',
                'country' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'cityName' => 'Chekka',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'cityName' => 'El Qalamoun',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'cityName' => 'Port Stanley',
                'code' => 'CAPST',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'cityName' => 'Beppu',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'cityName' => 'Charleston',
                'code' => 'USCHS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'cityName' => 'Oceanside',
                'code' => 'USXJX',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'cityName' => 'Huntington Beach',
                'code' => 'USHTD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'cityName' => 'Kenosha',
                'code' => 'USENW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'cityName' => 'New Orleans',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'cityName' => 'Dunkirk',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'cityName' => 'Balanacan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'cityName' => 'Kake',
                'code' => 'USKAE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'cityName' => 'Cape Town',
                'code' => 'ZACPT',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'cityName' => 'Avondale',
                'code' => 'USAVD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'cityName' => 'Rimouski',
                'code' => 'CARIM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'cityName' => 'Hilo',
                'code' => 'USITO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'cityName' => 'Melilla',
                'code' => 'ESMLN',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'cityName' => 'Harbour Grace',
                'code' => 'CAHRE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'cityName' => 'Santa Cruz',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'cityName' => 'Lisala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'cityName' => 'El Aabde',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'cityName' => 'Mutarara',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'cityName' => 'Bagnoli',
                'code' => 'ITBLN',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'cityName' => 'Gijon',
                'code' => 'ESGIJ',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'cityName' => 'Constanta',
                'code' => 'ROCND',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'cityName' => 'Vallvik',
                'code' => 'SEVAL',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'cityName' => 'Essaouira',
                'code' => NULL,
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'cityName' => 'Sandnessjoen',
                'code' => 'NOSSJ',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'cityName' => 'Skjervoy',
                'code' => 'NOSKY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'cityName' => 'Termoli',
                'code' => 'ITTMI',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'cityName' => 'Santander',
                'code' => 'ESSDR',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'cityName' => 'Kabala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'cityName' => 'Hennebont',
                'code' => 'FRHET',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'cityName' => 'Mayamba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'cityName' => 'Portici',
                'code' => 'ITPTC',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'cityName' => 'Bari',
                'code' => 'ITBRI',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'cityName' => 'Harlingen',
                'code' => 'NLHAR',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'cityName' => 'Tshimbane',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'cityName' => 'Honsater',
                'code' => 'SEHON',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'cityName' => 'Ristiina',
                'code' => 'FIRIS',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'cityName' => 'Kuopio',
                'code' => 'FIKUO',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'cityName' => 'Chola',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'cityName' => 'Chemba',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'cityName' => 'Fond Mombin',
                'code' => 'HTFOM',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'cityName' => 'Bourem',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'cityName' => 'Bamba',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'cityName' => 'Maintirano',
                'code' => 'MGMXT',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'cityName' => 'Borongan',
                'code' => 'PHBGV',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'cityName' => 'Aroroy',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'cityName' => 'Kaukauna',
                'code' => 'USKAU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'cityName' => 'Palembang',
                'code' => 'IDPLM',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'cityName' => 'Pasni',
                'code' => 'PKPSI',
                'country' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'cityName' => 'Kialo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'cityName' => 'Ipaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'cityName' => 'Chatham',
                'code' => 'CACTM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'cityName' => 'Fort Liberte',
                'code' => 'HTFLI',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'cityName' => 'Blind River',
                'code' => 'CABLR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'cityName' => 'Harrisville',
                'code' => 'USHVW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'cityName' => 'Makelele',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'cityName' => 'Bialla',
                'code' => 'PGBAA',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'cityName' => 'Vanimo',
                'code' => 'PGVAI',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'cityName' => 'Jeremie',
                'code' => 'HTJEE',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'cityName' => 'Oakville',
                'code' => 'CAOAK',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'cityName' => 'Revere',
                'code' => 'USRVR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'cityName' => 'Eastport',
                'code' => 'USEPM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'cityName' => 'Dingwall',
                'code' => 'CADWL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'cityName' => 'Good Hope',
                'code' => 'USGDH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'cityName' => 'Port Wentworth',
                'code' => 'USPWN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'cityName' => 'Bridgeport',
                'code' => 'USBDR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'cityName' => 'Arichat',
                'code' => 'CAARI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'cityName' => 'Vancouver',
                'code' => 'USBCC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'cityName' => 'Astoria',
                'code' => 'USAST',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'cityName' => 'Catalina',
                'code' => 'CACAT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'cityName' => 'Crofton',
                'code' => 'CACRO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'cityName' => 'Port Sulphur',
                'code' => 'USSUL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'cityName' => 'Antioch',
                'code' => 'USANZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'cityName' => 'Marion',
                'code' => 'USMZZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'cityName' => 'Yarmouth',
                'code' => 'CAYQI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'cityName' => 'Morristown',
                'code' => 'USMJG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'cityName' => 'Zeballos',
                'code' => 'CAZEB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'cityName' => 'Ketchikan',
                'code' => 'USKTN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'cityName' => 'Edmonds',
                'code' => 'USEOW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'cityName' => 'Orehoved',
                'code' => 'DKORE',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'cityName' => 'Vordingborg',
                'code' => 'DKVOR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'cityName' => 'Limhamn',
                'code' => 'SELIM',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'cityName' => 'Ayr',
                'code' => 'GBAYR',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'cityName' => 'Kalamaki',
                'code' => 'GRKLM',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'cityName' => 'Vieste',
                'code' => 'ITVIE',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'cityName' => 'Senj',
                'code' => 'HRSEN',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'cityName' => 'La Pallice',
                'code' => 'FRLPE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'cityName' => 'Langesund',
                'code' => 'NOLAD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'cityName' => 'Paskallavik',
                'code' => 'SEPAS',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'cityName' => 'Gary',
                'code' => 'USGYY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'cityName' => 'Amherstburg',
                'code' => 'CAAMH',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'cityName' => 'Benicia',
                'code' => 'USBNC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'cityName' => 'Fort Bragg',
                'code' => 'USFOB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'cityName' => 'New Haven',
                'code' => 'USHVN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'cityName' => 'Mossel Bay',
                'code' => 'ZAMZY',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'cityName' => 'Kilwa Kivinje',
                'code' => 'TZKIK',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'cityName' => 'Maizuru',
                'code' => 'JPMAI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'cityName' => 'Kayts',
                'code' => 'LKKAY',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'cityName' => 'Encarnacion',
                'code' => 'PYENO',
                'country' => 'Paraguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'cityName' => 'Ciudad Bolivar',
                'code' => 'VECBL',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'cityName' => 'Nesseby',
                'code' => 'NONSB',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'cityName' => 'Appledore',
                'code' => 'GBAPP',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'cityName' => 'Ramsgate',
                'code' => 'GBRMG',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'cityName' => 'Padstow',
                'code' => 'GBPAD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'cityName' => 'Hamble',
                'code' => 'GBHAM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'cityName' => 'Maastricht',
                'code' => 'NLMST',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'cityName' => 'Bridgwater',
                'code' => 'GBBRW',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'cityName' => 'Zeebrugge',
                'code' => 'BEZEE',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'cityName' => 'Newport',
                'code' => 'GBNPT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'cityName' => 'Emmerich',
                'code' => 'DEEMM',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'cityName' => 'Waterford',
                'code' => 'IEWAT',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'cityName' => 'Tralee',
                'code' => 'IETRA',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'cityName' => 'Elsfleth',
                'code' => 'DEELS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'cityName' => 'Warrington',
                'code' => 'GBWRN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'cityName' => 'Gabes',
                'code' => 'TNGAE',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'cityName' => 'Rabat',
                'code' => 'MARBA',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'cityName' => 'Mategata',
                'code' => 'JPMAG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'cityName' => 'Miyaura',
                'code' => 'JPOMS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'cityName' => 'Toba',
                'code' => 'JPTOB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'cityName' => 'Mostaganem',
                'code' => 'DZMOS',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'cityName' => 'Dellys',
                'code' => 'DZDEL',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'cityName' => 'Krabi',
                'code' => 'THKBV',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'cityName' => 'Kure',
                'code' => 'JPKRE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'cityName' => 'Santo Antonio',
                'code' => 'STSAA',
                'country' => 'Sao Tome and Principe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'cityName' => 'Zamboanga',
                'code' => 'PHBLU',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'cityName' => 'Mati',
                'code' => 'PHMXI',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'cityName' => 'Buna',
                'code' => 'PGBNA',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'cityName' => 'Bluff',
                'code' => 'NZBLU',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'cityName' => 'Kingscote',
                'code' => 'AUKGC',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'cityName' => 'Broome',
                'code' => 'AUBME',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'cityName' => 'Ilheus',
                'code' => 'BRIOS',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'cityName' => 'Aracaju',
                'code' => 'BRAJU',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'cityName' => 'Taiohae',
                'code' => 'PFTAI',
                'country' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'cityName' => 'Miri',
                'code' => 'MYMYY',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'cityName' => 'Bagan Luar',
                'code' => 'MYBWH',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'cityName' => 'Sandakan',
                'code' => 'MYSDK',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'cityName' => 'Taroa',
                'code' => 'MHTAR',
                'country' => 'Marshall Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'cityName' => 'Anamur',
                'code' => 'TRANA',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'cityName' => 'Pampatar',
                'code' => 'VEPMP',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'cityName' => 'Jimenez',
                'code' => 'PHJNZ',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'cityName' => 'Wenzhou',
                'code' => 'CNWNZ',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'cityName' => 'Hamada',
                'code' => 'JPHMD',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'cityName' => 'Edincik',
                'code' => 'TREDK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'cityName' => 'Mangalia',
                'code' => 'ROMAG',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'cityName' => 'Rapid Bay',
                'code' => 'AURAB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'cityName' => 'Port Pirie',
                'code' => 'AUPPI',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'cityName' => 'Port Augusta',
                'code' => 'AUPUG',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'cityName' => 'Geraldton',
                'code' => 'AUGET',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'cityName' => 'Aburatsu',
                'code' => 'JPABU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'cityName' => 'Minamata',
                'code' => 'JPMIN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'cityName' => 'Sasebo',
                'code' => 'JPSSB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'cityName' => 'Karatsu',
                'code' => 'JPKAR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'cityName' => 'Akkeshi',
                'code' => 'JPAKE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'cityName' => 'Darwin',
                'code' => 'AUDRW',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'cityName' => 'Tanjong Pagar',
                'code' => 'SGTPG',
                'country' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'cityName' => 'Semporna',
                'code' => 'MYSMM',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'cityName' => 'Bandar Seri Begawan',
                'code' => 'BNBWN',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'cityName' => 'Paranam',
                'code' => 'SRPRM',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'cityName' => 'Bartica',
                'code' => 'GYGFO',
                'country' => 'Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'cityName' => 'Port Holland',
                'code' => 'PHPHD',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'cityName' => 'Quilon',
                'code' => 'INQUI',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'cityName' => 'Tolong',
                'code' => 'PHTLG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'cityName' => 'Coro',
                'code' => 'VECZE',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'cityName' => 'Cuddalore',
                'code' => 'INCDL',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'cityName' => 'Matsunaga',
                'code' => 'JPMNG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'cityName' => 'Hibi',
                'code' => 'JPHIB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'cityName' => 'Yokkaichi',
                'code' => 'JPYKK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'cityName' => 'Ishinomaki',
                'code' => 'JPISM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'cityName' => 'Dalian',
                'code' => 'CNDLC',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'cityName' => 'Belomorsk',
                'code' => 'RUBEM',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'cityName' => 'Pelotas',
                'code' => 'BRPET',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'cityName' => 'Puerto Ayacucho',
                'code' => 'VEPYH',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'cityName' => 'Anqing',
                'code' => 'CNAQG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'cityName' => 'Tongling',
                'code' => 'CNTOL',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'cityName' => 'Santos',
                'code' => 'BRSSZ',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'cityName' => 'Caldera',
                'code' => 'CRCAL',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'cityName' => 'Lazaro Cardenas',
                'code' => 'MXLZC',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'cityName' => 'Manzanillo',
                'code' => 'MXZLO',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'cityName' => 'Mazatlan',
                'code' => 'MXMZT',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'cityName' => 'Quequen',
                'code' => 'ARQQN',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'cityName' => 'Itajai',
                'code' => 'BRITJ',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'cityName' => 'Antofagasta',
                'code' => 'CLANF',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'cityName' => 'Vitoria',
                'code' => 'BRVIX',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'cityName' => 'Mahanoro',
                'code' => 'MGVVB',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'cityName' => 'Cristobal',
                'code' => 'PACTB',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'cityName' => 'Quemchi',
                'code' => 'CLQMC',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'cityName' => 'Cotabato',
                'code' => 'PHCBO',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'cityName' => 'La Libertad',
                'code' => 'SVLLD',
                'country' => 'El Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'cityName' => 'Finike',
                'code' => 'TRFIN',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'cityName' => 'Christiansted',
                'code' => 'VICTD',
                'country' => 'United States Virgin Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'cityName' => 'Nueva Palmira',
                'code' => 'UYNVP',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'cityName' => 'Tocopilla',
                'code' => 'CLTOQ',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'cityName' => 'Carupano',
                'code' => 'VECUP',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'cityName' => 'Portsmouth',
                'code' => 'DMPOR',
                'country' => 'Dominica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'cityName' => 'Coatzacoalcos',
                'code' => 'MXCOA',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'cityName' => 'Mayaguez',
                'code' => 'PRMAZ',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'cityName' => 'Andros Town',
                'code' => 'BSASD',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'cityName' => 'Nassau',
                'code' => 'BSNAS',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'cityName' => 'Gorele',
                'code' => 'TRGOR',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'cityName' => 'Campana',
                'code' => 'ARCMP',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'cityName' => 'Zarate',
                'code' => 'ARZAE',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'cityName' => 'Rosario',
                'code' => 'ARROS',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'cityName' => 'Pekalongan',
                'code' => 'IDPEX',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'cityName' => 'Luwuk',
                'code' => 'IDLUW',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'cityName' => 'Matanzas',
                'code' => 'CUQMA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'cityName' => 'Diamante',
                'code' => 'ARDME',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'cityName' => 'Eccles',
                'code' => 'GBECS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'cityName' => 'Castro',
                'code' => 'CLWCA',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'cityName' => 'Port Esquivel',
                'code' => 'JMPEV',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'cityName' => 'Arica',
                'code' => 'CLARI',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'cityName' => 'Doha',
                'code' => 'QADOH',
                'country' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'cityName' => 'Port Harcourt',
                'code' => 'NGPHC',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'cityName' => 'Buchanan',
                'code' => 'LRUCN',
                'country' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'cityName' => 'Ziguinchor',
                'code' => 'SNZIG',
                'country' => 'Senegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'cityName' => 'Kpeme',
                'code' => 'TGKPE',
                'country' => 'Togo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'cityName' => 'Jask',
                'code' => 'IRJAK',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'cityName' => 'Wilhelmshaven',
                'code' => 'DEWVN',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'cityName' => 'Fleetwood',
                'code' => 'GBFLE',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'cityName' => 'Iskenderun',
                'code' => 'TRISK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'cityName' => 'Bangor',
                'code' => 'GBBNG',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'cityName' => 'Gelting',
                'code' => 'DEGEL',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'cityName' => 'Torekov',
                'code' => 'SETOV',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'cityName' => 'Coleraine',
                'code' => 'GBCLR',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'cityName' => 'Sakskobing',
                'code' => 'DKSAX',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'cityName' => 'Horsens',
                'code' => 'DKHOR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'cityName' => 'Aberdeen',
                'code' => 'GBABD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'cityName' => 'Halden',
                'code' => 'NOHAL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'cityName' => 'Fredrikstad',
                'code' => 'NOFRK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'cityName' => 'Vanersborg',
                'code' => 'SEVAN',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'cityName' => 'Skogby',
                'code' => 'FISKB',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'cityName' => 'Hallstavik',
                'code' => 'SEHAK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'cityName' => 'Rauma',
                'code' => 'FIRAU',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'cityName' => 'Hudiksvall',
                'code' => 'SEHUV',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'cityName' => 'Tornio',
                'code' => 'FITOR',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'cityName' => 'Batskarsnas',
                'code' => 'SEBAT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'cityName' => 'Sete',
                'code' => 'FRSET',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'cityName' => 'Trollhattan',
                'code' => 'SETHN',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'cityName' => 'Batroun',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'cityName' => 'Tumaco',
                'code' => 'COTCO',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'cityName' => 'Kalianget',
                'code' => 'IDKAT',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'cityName' => 'Bontang',
                'code' => 'IDBXT',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'cityName' => 'Nouadhibou',
                'code' => 'MRNDB',
                'country' => 'Mauritania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'cityName' => 'Guayabal',
                'code' => 'CUGYB',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'cityName' => 'Casilda',
                'code' => 'CUCAS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'cityName' => 'Boca Chica',
                'code' => 'DOBCC',
                'country' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'cityName' => 'Ilo',
                'code' => 'PEILQ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'cityName' => 'Pisco',
                'code' => 'PEPIO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'cityName' => 'Daru',
                'code' => 'PGDAU',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'cityName' => 'Port Credit',
                'code' => 'CAPCR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'cityName' => 'Belleville',
                'code' => 'CABLV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'cityName' => 'El Berbara',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'cityName' => 'Kawaihae',
                'code' => 'USKWH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'cityName' => 'Rumonge',
                'code' => NULL,
                'country' => 'Burundi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'cityName' => 'Panama City',
                'code' => 'USPFN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'cityName' => 'Moss Landing',
                'code' => 'USMLG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'cityName' => 'Richmond',
                'code' => 'USRCH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'cityName' => 'Fenit',
                'code' => 'IEFEN',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'cityName' => 'Portland',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'cityName' => 'Bumbuli',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'cityName' => 'Bisenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'cityName' => 'Tubod',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'cityName' => 'Westwego',
                'code' => 'USWWO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'cityName' => 'Chandler',
                'code' => 'CACHR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'cityName' => 'Victoria',
                'code' => 'CAVIC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'cityName' => 'Nawiliwili',
                'code' => 'USNWL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'cityName' => 'Kikwit',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'cityName' => 'Dekese',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'cityName' => 'Brownsville',
                'code' => 'USBRO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'cityName' => 'Santa Clara',
                'code' => 'USSCZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'cityName' => 'Stockton',
                'code' => 'USSCK',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'cityName' => 'Oarai',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'cityName' => 'Norfolk',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'cityName' => 'Invergordon',
                'code' => 'GBIVG',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'cityName' => 'Ribadeo',
                'code' => 'ESRIB',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'cityName' => 'Arbatax',
                'code' => 'ITATX',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'cityName' => 'Thasos',
                'code' => 'GRTSO',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'cityName' => 'Sligo',
                'code' => 'IESLI',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'cityName' => 'Gdansk',
                'code' => 'PLGDN',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'cityName' => 'Kesennuma',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'cityName' => 'Dartmouth',
                'code' => 'GBDTM',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'cityName' => 'Palamos',
                'code' => 'ESPAL',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'cityName' => 'Monkoto',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'cityName' => 'Treguier',
                'code' => 'FRTRE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'cityName' => 'Rota',
                'code' => 'ESROT',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'cityName' => 'Adra',
                'code' => 'ESADR',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'cityName' => 'Siracusa',
                'code' => 'ITSIR',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'cityName' => 'Mosango',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'cityName' => 'Grenaa',
                'code' => 'DKGRE',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'cityName' => 'Risor',
                'code' => 'NORIS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'cityName' => 'Balsta',
                'code' => 'SEBAA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'cityName' => 'Boende',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'cityName' => 'Pucallpa',
                'code' => 'PEPCL',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'cityName' => 'Imatra',
                'code' => 'FIIMA',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'cityName' => 'Onitsha',
                'code' => NULL,
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'cityName' => 'Jbail',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'cityName' => 'Gonaives',
                'code' => 'HTGVS',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'cityName' => 'Melut',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'cityName' => 'Livorno',
                'code' => 'ITLIV',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'cityName' => 'Miragoane',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'cityName' => 'San Antonio',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'cityName' => 'Tonka',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'cityName' => 'Soalala',
                'code' => 'MGDWB',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'cityName' => 'Cam Ranh',
                'code' => NULL,
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'cityName' => 'Danao',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'cityName' => 'San Fernando',
                'code' => 'PHSFE',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'cityName' => 'Manakara',
                'code' => 'MGWVK',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'cityName' => 'Bacon',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'cityName' => 'Jebel Dhanna',
                'code' => 'AEJED',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'cityName' => 'Roxas',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'cityName' => 'Can Tho',
                'code' => 'VNVCA',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'cityName' => 'De Pere',
                'code' => 'USDRW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'cityName' => 'L\'Anse',
                'code' => 'USLAJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'cityName' => 'Manitowoc',
                'code' => 'USMTW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'cityName' => 'Kalehe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'cityName' => 'Bondo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'cityName' => 'Lotumbe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'cityName' => 'Bathurst',
                'code' => 'CABAT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'cityName' => 'Rabaul',
                'code' => 'PGRAB',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'cityName' => 'Digby',
                'code' => 'CADIG',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'cityName' => 'Juneau',
                'code' => 'USJNU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'cityName' => 'Yakutat',
                'code' => 'USYAK',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'cityName' => 'Tyonek',
                'code' => 'USTYE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'cityName' => 'Hahnville',
                'code' => 'USHAH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'cityName' => 'Norco',
                'code' => 'USNCM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'cityName' => 'Beaumont',
                'code' => 'USBPT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'cityName' => 'Savannah',
                'code' => 'USSAV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'cityName' => 'Georgetown',
                'code' => 'USGGE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'cityName' => 'Baltimore',
                'code' => 'USBAL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'cityName' => 'Gardiner',
                'code' => 'USGDR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'cityName' => 'Port Hawkesbury',
                'code' => 'CAPHW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'cityName' => 'Longview',
                'code' => 'USLOG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'cityName' => 'Palmetto',
                'code' => 'USPMT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'cityName' => 'Chemainus',
                'code' => 'CACHM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'cityName' => 'Port Arthur',
                'code' => 'USPOA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'cityName' => 'Mobile',
                'code' => 'USMOB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'cityName' => 'Cambridge',
                'code' => 'USCGE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'cityName' => 'Salem',
                'code' => 'USSLM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'cityName' => 'Parrsboro',
                'code' => 'CAPAR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'cityName' => 'Port Moody',
                'code' => 'CAPMO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'cityName' => 'Ocean Falls',
                'code' => 'CAOFA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'cityName' => 'Bella Coola',
                'code' => 'CABLC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'cityName' => 'Haines',
                'code' => 'USHNS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'cityName' => 'Foynes',
                'code' => 'IEFOV',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'cityName' => 'Marstal',
                'code' => 'DKMRS',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'cityName' => 'Sunderland',
                'code' => 'GBSUN',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'cityName' => 'Oban',
                'code' => 'GBOBA',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'cityName' => 'Sines',
                'code' => 'PTSIE',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'cityName' => 'Arcachon',
                'code' => 'FRARC',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'cityName' => 'Dieppe',
                'code' => 'FRDPE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'cityName' => 'Galway',
                'code' => 'IEGWY',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'cityName' => 'Ustka',
                'code' => 'PLUST',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'cityName' => 'Nykobing Mors',
                'code' => 'DKNYM',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'cityName' => 'Oxelosund',
                'code' => 'SEOXE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'cityName' => 'Skudeneshavn',
                'code' => 'NOSKU',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'cityName' => 'Wyandotte',
                'code' => 'USWYD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'cityName' => 'Hydaburg',
                'code' => 'USHYG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'cityName' => 'Kilwa Masoko',
                'code' => 'TZKIM',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'cityName' => 'Rorvik',
                'code' => 'NORVK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'cityName' => 'Seaham',
                'code' => 'GBSEA',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'cityName' => 'Sharpness',
                'code' => 'GBSSS',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'cityName' => 'Hartlepool',
                'code' => 'GBHTP',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'cityName' => 'Monfalcone',
                'code' => 'ITMNF',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'cityName' => 'Strasbourg',
                'code' => 'FRSXB',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'cityName' => 'Abbeville',
                'code' => 'FRABB',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'cityName' => 'Fowey',
                'code' => 'GBFOY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'cityName' => 'Teignmouth',
                'code' => 'GBTNM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'cityName' => 'Cowes',
                'code' => 'GBCOW',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'cityName' => 'Fawley',
                'code' => 'GBFAW',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'cityName' => 'Purfleet',
                'code' => 'GBPFT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'cityName' => 'Oosterhout',
                'code' => 'NLOOS',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'cityName' => 'Dordrecht',
                'code' => 'NLDOR',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'cityName' => 'Wivenhoe',
                'code' => 'GBWIV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'cityName' => 'Mistley',
                'code' => 'GBMIS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'cityName' => 'Varberg',
                'code' => 'SEVAG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'cityName' => 'Fosdyke',
                'code' => 'GBFDK',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'cityName' => 'Pulupandan',
                'code' => 'PHPUL',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'cityName' => 'Funabashi',
                'code' => 'JPOGA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'cityName' => 'Hatsukaichi',
                'code' => 'JPAKT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'cityName' => 'Tangier',
                'code' => 'MATNG',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'cityName' => 'Shimonoseki',
                'code' => 'JPSHS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'cityName' => 'Tokuyama',
                'code' => 'JPTKY',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'cityName' => 'Talasea',
                'code' => 'PGTLW',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'cityName' => 'Akaroa',
                'code' => 'NZAKA',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'cityName' => 'Hobart',
                'code' => 'AUHBA',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'cityName' => 'Thames',
                'code' => 'NZTMZ',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'cityName' => 'Rio Grande',
                'code' => 'BRRIG',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'cityName' => 'Mourilyan',
                'code' => 'AUMOU',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'cityName' => 'Bakapit',
                'code' => 'MYBKP',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'cityName' => 'Catbalogan',
                'code' => 'PHCTS',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'cityName' => 'Tagbilaran',
                'code' => 'PHTAG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'cityName' => 'Beihai',
                'code' => 'CNBHY',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'cityName' => 'Miyazu',
                'code' => 'JPMIY',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'cityName' => 'Kiire',
                'code' => 'JPKII',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'cityName' => 'Tsukumi',
                'code' => 'JPTMI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'cityName' => 'Cheju',
                'code' => 'KRCHA',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'cityName' => 'Yosu',
                'code' => 'KRYOS',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'cityName' => 'Nanao',
                'code' => 'JPNNO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'cityName' => 'Naoetsu',
                'code' => 'JPNAO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'cityName' => 'Kemi',
                'code' => 'FIKEM',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'cityName' => 'Comodoro Rivadavia',
                'code' => 'ARCRD',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'cityName' => 'Motueka',
                'code' => 'NZMZP',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'cityName' => 'Napier',
                'code' => 'NZNPE',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'cityName' => 'Gisborne',
                'code' => 'NZGIS',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'cityName' => 'Auckland',
                'code' => 'NZAKL',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'cityName' => 'Ardrossan',
                'code' => 'AUARD',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'cityName' => 'Port Macquarie',
                'code' => 'AUPQQ',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'cityName' => 'Brisbane',
                'code' => 'AUBNE',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'cityName' => 'Rockhampton',
                'code' => 'AUROK',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'cityName' => 'Wyndham',
                'code' => 'AUWYN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'cityName' => 'Los Organos',
                'code' => 'PELOO',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'cityName' => 'Santana',
                'code' => 'BRSAN',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'cityName' => 'Lundu',
                'code' => 'MYLUN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'cityName' => 'Karwar',
                'code' => 'INKRW',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'cityName' => 'Shanwei',
                'code' => 'CNSWE',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'cityName' => 'Miyako',
                'code' => 'JPMYK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'cityName' => 'Kwinana',
                'code' => 'AUKWI',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'cityName' => 'Porto Seguro',
                'code' => 'BRBPS',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'cityName' => 'Pasir Gudang',
                'code' => 'MYPGU',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'cityName' => 'Toledo',
                'code' => 'PHTLD',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'cityName' => 'Pondicherry',
                'code' => 'INPNY',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'cityName' => 'Laoag',
                'code' => 'PHLAO',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'cityName' => 'Jakhau',
                'code' => 'INJAK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'cityName' => 'Kotka',
                'code' => 'FIKTK',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'cityName' => 'Fukue',
                'code' => 'JPFUJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'cityName' => 'Tonghae',
                'code' => 'KRTGH',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'cityName' => 'Gremikha',
                'code' => 'RUGRH',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'cityName' => 'Severomorsk',
                'code' => 'RUSRM',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'cityName' => 'Jiujiang',
                'code' => 'CNJIU',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'cityName' => 'Zhenjiang',
                'code' => 'CNZHE',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'cityName' => 'Porto Velho',
                'code' => 'BRPVH',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'cityName' => 'Alanya',
                'code' => 'TRALA',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'cityName' => 'Talcahuano',
                'code' => 'CLTAL',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'cityName' => 'Pamatacual',
                'code' => 'VEPAM',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'cityName' => 'Ashdod',
                'code' => 'ILASH',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'cityName' => 'Itaqui',
                'code' => 'BRITQ',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'cityName' => 'Szczecin',
                'code' => 'PLSZZ',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'cityName' => 'Jeddah',
                'code' => 'SAJED',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'cityName' => 'Guaymas',
                'code' => 'MXGYM',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'cityName' => 'Izmir',
                'code' => 'TRIZM',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'cityName' => 'Puntarenas',
                'code' => 'CRPAS',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'cityName' => 'Chaguaramas',
                'code' => 'TTCHA',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'cityName' => 'Kingstown',
                'code' => 'VCKTN',
                'country' => 'Saint Vincent and the Grenadines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'cityName' => 'Belize City',
                'code' => 'BZBZE',
                'country' => 'Belize',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'cityName' => 'Port Antonio',
                'code' => 'JMPOT',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'cityName' => 'Ocho Rios',
                'code' => 'JMOCJ',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'cityName' => 'Frederiksted',
                'code' => 'VIFRD',
                'country' => 'United States Virgin Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'cityName' => 'San Carlos',
                'code' => 'MXSCR',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'cityName' => 'Ushuaia',
                'code' => 'ARUSH',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'cityName' => 'Iquique',
                'code' => 'CLIQQ',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'cityName' => 'Almirante',
                'code' => 'PAPAM',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'cityName' => 'Puerto Cortes',
                'code' => 'HNPCR',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'cityName' => 'Banggai',
                'code' => 'IDBGG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'cityName' => 'Mariel',
                'code' => 'CUMAR',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'cityName' => 'Manzanillo',
                'code' => 'CUMZO',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'cityName' => 'La Romana',
                'code' => 'DOLRM',
                'country' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'cityName' => 'Salina Cruz',
                'code' => 'MXSCX',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'cityName' => 'Basseterre',
                'code' => 'KNBAS',
                'country' => 'Saint Kitts and Nevis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'cityName' => 'Nueva Gerona',
                'code' => 'CUGER',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'cityName' => 'Rock Sound',
                'code' => 'BSRSD',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'cityName' => 'Tasucu',
                'code' => 'TRTAS',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'cityName' => 'Bodrum',
                'code' => 'TRBXN',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'cityName' => 'San Lorenzo',
                'code' => 'ARSLO',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'cityName' => 'Matanzas',
                'code' => 'VEMTV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'cityName' => 'Sambava',
                'code' => 'MGSVB',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'cityName' => 'Pedregal',
                'code' => 'PAPED',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'cityName' => 'Livingston',
                'code' => 'GTLIV',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'cityName' => 'Ordu',
                'code' => 'TRORD',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'cityName' => 'Gizo',
                'code' => 'SBGZO',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'cityName' => 'Pebane',
                'code' => 'MZPEB',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'cityName' => 'Greenville',
                'code' => 'LRGRE',
                'country' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'cityName' => 'Ras Gharib',
                'code' => 'EGRAG',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'cityName' => 'Clifden',
                'code' => 'IECLI',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'cityName' => 'Schleswig',
                'code' => 'DESLS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'cityName' => 'Cairnryan',
                'code' => 'GBCYN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'cityName' => 'Ronne',
                'code' => 'DKRNN',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'cityName' => 'Naestved',
                'code' => 'DKNVD',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'cityName' => 'Rudkobing',
                'code' => 'DKRKB',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'cityName' => 'Skive',
                'code' => 'DKSKV',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'cityName' => 'Norresundby',
                'code' => 'DKNRS',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'cityName' => 'Rekefjord',
                'code' => 'NOREK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'cityName' => 'Porsgrunn',
                'code' => 'NOPOR',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'cityName' => 'Sarpsborg',
                'code' => 'NOSPG',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'cityName' => 'Karlstad',
                'code' => 'SEKSD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'cityName' => 'Drammen',
                'code' => 'NODRM',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'cityName' => 'Levanger',
                'code' => 'NOLEV',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'cityName' => 'Le Treport',
                'code' => 'FRLTR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'cityName' => 'Lorain',
                'code' => 'USLOR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'cityName' => 'Noro',
                'code' => 'SBNOR',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'cityName' => 'Two Rivers',
                'code' => 'USTWR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'cityName' => 'Baytown',
                'code' => 'USHPY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'cityName' => 'Pascagoula',
                'code' => 'USPGL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'cityName' => 'Probolinggo',
                'code' => 'IDPRO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'cityName' => 'Lembar',
                'code' => 'IDAMP',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'cityName' => 'Bima',
                'code' => 'IDBMU',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'cityName' => 'La Libertad',
                'code' => 'ECLLD',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'cityName' => 'Media Luna',
                'code' => 'CUMEL',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'cityName' => 'Supe',
                'code' => 'PESUP',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'cityName' => 'Cartagena',
                'code' => NULL,
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'cityName' => 'Grand Haven',
                'code' => 'USGHN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'cityName' => 'Morehead City',
                'code' => 'USMRH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'cityName' => 'Morro Bay',
                'code' => 'USMJK',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'cityName' => 'Molanda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'cityName' => 'Palompon',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'cityName' => 'Clarenville',
                'code' => 'CACLE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'cityName' => 'Yorktown',
                'code' => 'USYKW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'cityName' => 'Richmond',
                'code' => 'USRIC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'cityName' => 'Bugo',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'cityName' => 'Varna',
                'code' => NULL,
                'country' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'cityName' => 'Visby',
                'code' => 'SEVBY',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'cityName' => 'Pozzallo',
                'code' => 'ITPZL',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'cityName' => 'Ustica',
                'code' => 'ITUST',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'cityName' => 'Catanzaro',
                'code' => 'ITQCZ',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'cityName' => 'Stralsund',
                'code' => 'DESTL',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'cityName' => 'Hamina',
                'code' => 'FIHMN',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'cityName' => 'Kaskinen',
                'code' => 'FIKAS',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'cityName' => 'Brixham',
                'code' => 'GBBRX',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'cityName' => 'Moana',
                'code' => 'ESMOA',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'cityName' => 'Muros',
                'code' => 'ESMRS',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'cityName' => 'San Sebastian',
                'code' => 'ESEAS',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'cityName' => 'Kabumbulu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'cityName' => 'Ankoro',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'cityName' => 'Bejaia',
                'code' => 'DZBJA',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'cityName' => 'Bolomba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'cityName' => 'Kenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'cityName' => 'Caia',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'cityName' => 'Ayamonte',
                'code' => 'ESAYA',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'cityName' => 'Otranto',
                'code' => 'ITOTO',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'cityName' => 'Calvi',
                'code' => 'FRCLY',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'cityName' => 'Sidi Ifni',
                'code' => NULL,
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'cityName' => 'Ronnskar',
                'code' => 'SEROR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'cityName' => 'Joutseno',
                'code' => 'FIJOU',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'cityName' => 'Kayes',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'cityName' => 'Maripipi',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'cityName' => 'Cataingan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'cityName' => 'Paramaribo',
                'code' => 'SRPBM',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'cityName' => 'Kiri',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'cityName' => 'Tripoli',
                'code' => 'LYTIP',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'cityName' => 'Manila',
                'code' => 'PHMNL',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'cityName' => 'Bikoro',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'cityName' => 'Pilar',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'cityName' => 'Glace Bay',
                'code' => 'CAGLB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'cityName' => 'Penuba',
                'code' => 'IDPNG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'cityName' => 'Escanaba',
                'code' => 'USESC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'cityName' => 'Duluth',
                'code' => 'USDLH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'cityName' => 'Silver Bay',
                'code' => 'USSIB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'cityName' => 'Algoma',
                'code' => 'USAMZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'cityName' => 'Petoskey',
                'code' => 'USPET',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'cityName' => 'Bilili',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'cityName' => 'Burin',
                'code' => 'CABUI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'cityName' => 'Mompanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'cityName' => 'Lokolenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'cityName' => 'Bulungu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'cityName' => 'Sherbrooke',
                'code' => 'CASBR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'cityName' => 'Petit Goave',
                'code' => 'HTPEG',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'cityName' => 'Kieta',
                'code' => 'PGKIE',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'cityName' => 'Antalaha',
                'code' => 'MGANM',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'cityName' => 'North Bend',
                'code' => 'USOTH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'cityName' => 'Cheticamp',
                'code' => 'CACHT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'cityName' => 'Quebec',
                'code' => 'CAQUE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'cityName' => 'Grand Bank',
                'code' => 'CAGRB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'cityName' => 'Churchill',
                'code' => 'CACHV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'cityName' => 'Nome',
                'code' => 'USOME',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'cityName' => 'Orange',
                'code' => 'USORG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'cityName' => 'Burlington',
                'code' => 'USBTV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'cityName' => 'Port Jefferson',
                'code' => 'USPTJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'cityName' => 'Saugerties',
                'code' => 'USSUV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'cityName' => 'Ottawa',
                'code' => 'CAOTT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'cityName' => 'New Glasgow',
                'code' => 'CANGL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'cityName' => 'Pictou',
                'code' => 'CAPTO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'cityName' => 'Kelso',
                'code' => 'USKLS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'cityName' => 'Marystown',
                'code' => 'CAMTN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'cityName' => 'Galveston',
                'code' => 'USGLS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'cityName' => 'Marrero',
                'code' => 'USMAR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'cityName' => 'Salisbury',
                'code' => 'USSLS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'cityName' => 'Hoboken',
                'code' => 'USHOB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'cityName' => 'Wareham',
                'code' => 'USWMV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'cityName' => 'Prescott',
                'code' => 'CAPRE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'cityName' => 'Sheet Harbour',
                'code' => 'CASHH',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'cityName' => 'Souris',
                'code' => 'CASOU',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'cityName' => 'Bay Roberts',
                'code' => 'CABYR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'cityName' => 'Orcas',
                'code' => 'USXJY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'cityName' => 'Botwood',
                'code' => 'CABWD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'cityName' => 'Lomond',
                'code' => 'CALMD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'cityName' => 'Kitimat',
                'code' => 'CAKTM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'cityName' => 'Akutan',
                'code' => 'USAKU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'cityName' => 'Nobeoka',
                'code' => 'JPNOB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'cityName' => 'Kastrup',
                'code' => 'DKKTP',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'cityName' => 'Itea',
                'code' => 'GRITA',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'cityName' => 'Portoferraio',
                'code' => 'ITPFE',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'cityName' => 'Deauville',
                'code' => 'FRDOL',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'cityName' => 'Bar',
                'code' => 'YUBAR',
                'country' => 'Montenegro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'cityName' => 'Norderney',
                'code' => 'DENRD',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'cityName' => 'Farsund',
                'code' => 'NOFAN',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'cityName' => 'Lillesand',
                'code' => 'NOLIL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'cityName' => 'Izon',
                'code' => 'FRIZO',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'cityName' => 'Luderitz',
                'code' => 'NALUD',
                'country' => 'Namibia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'cityName' => 'Ambriz',
                'code' => 'AOAZZ',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'cityName' => 'Onahama',
                'code' => 'JPONA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'cityName' => 'Paranagua',
                'code' => 'BRPNG',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'cityName' => 'Skagastrond',
                'code' => 'ISSKA',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'cityName' => 'Harwich',
                'code' => 'GBHRW',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'cityName' => 'Cannes',
                'code' => 'FRCEQ',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'cityName' => 'Koper',
                'code' => 'SIKOP',
                'country' => 'Slovenia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'cityName' => 'Porto Santo Stefano',
                'code' => 'ITPSS',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'cityName' => 'Pula',
                'code' => 'HRPUY',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'cityName' => 'Pontrieux',
                'code' => 'FRPOX',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'cityName' => 'Truro',
                'code' => 'GBTRU',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'cityName' => 'Par',
                'code' => 'GBPAR',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'cityName' => 'Deal',
                'code' => 'GBDEX',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'cityName' => 'Cardiff',
                'code' => 'GBCDF',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'cityName' => 'Avonmouth',
                'code' => 'GBAVO',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'cityName' => 'Portbury',
                'code' => 'GBPRU',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'cityName' => 'Coryton',
                'code' => 'GBCOY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'cityName' => 'Pembroke',
                'code' => 'GBPEM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'cityName' => 'Dunmore East',
                'code' => 'IEDNM',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'cityName' => 'Groningen',
                'code' => 'NLGRQ',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'cityName' => 'Ghazaouet',
                'code' => 'DZGHA',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'cityName' => 'Al Hoceima',
                'code' => 'MAAHU',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'cityName' => 'Skikda',
                'code' => 'DZSKI',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'cityName' => 'Soma',
                'code' => 'JPSMA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'cityName' => 'Zanzibar',
                'code' => 'TZZNZ',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'cityName' => 'Phuket',
                'code' => 'THHKT',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'cityName' => 'Phangnga',
                'code' => 'THPHA',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'cityName' => 'Chanthaburi',
                'code' => 'THCHA',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'cityName' => 'Port Chalmers',
                'code' => 'NZPOE',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'cityName' => 'Stanley',
                'code' => 'AUSTA',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'cityName' => 'Beachport',
                'code' => 'AUBCH',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'cityName' => 'Port Kembla',
                'code' => 'AUPKL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'cityName' => 'Tome',
                'code' => 'CLTOM',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'cityName' => 'Los Vilos',
                'code' => 'CLLOS',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'cityName' => 'Tramandai',
                'code' => 'BRTRM',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'cityName' => 'Imbituba',
                'code' => 'BRIBB',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'cityName' => 'Urangan',
                'code' => 'AUURN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'cityName' => 'Pisagua',
                'code' => 'CLPIS',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'cityName' => 'Vaitape',
                'code' => 'PFVAI',
                'country' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'cityName' => 'Tsuruga',
                'code' => 'JPTRG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'cityName' => 'Wallace Bay',
                'code' => 'MYWAL',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'cityName' => 'Yangjiang',
                'code' => 'CNYJI',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'cityName' => 'Okha',
                'code' => 'INOKH',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'cityName' => 'Yantian',
                'code' => 'CNYTN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'cityName' => 'Sakito',
                'code' => 'JPSTO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'cityName' => 'Takuma',
                'code' => 'JPTKM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'cityName' => 'Marugame',
                'code' => 'JPMAR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'cityName' => 'Yokosuka',
                'code' => 'JPYOS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'cityName' => 'Hachinohe',
                'code' => 'JPHHE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'cityName' => 'Hereke',
                'code' => 'TRHER',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'cityName' => 'Ayancik',
                'code' => 'TRAYA',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'cityName' => 'Mori',
                'code' => 'JPMOR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'cityName' => 'Kushiro',
                'code' => 'JPKUH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'cityName' => 'Kaitangata',
                'code' => 'NZKTG',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'cityName' => 'Timaru',
                'code' => 'NZTIU',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'cityName' => 'Lyttelton',
                'code' => 'NZLYT',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'cityName' => 'Christchurch',
                'code' => 'NZCHC',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'cityName' => 'Necochea',
                'code' => 'ARNEC',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'cityName' => 'Tauranga',
                'code' => 'NZTRG',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'cityName' => 'Dargaville',
                'code' => 'NZDGR',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'cityName' => 'Busselton',
                'code' => 'AUBUS',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'cityName' => 'Bundaberg',
                'code' => 'AUBDB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'cityName' => 'Sibu',
                'code' => 'MYSBW',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'cityName' => 'Jolo',
                'code' => 'PHJOL',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'cityName' => 'Tumpat',
                'code' => 'MYTUM',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'cityName' => 'Fayid',
                'code' => 'EGFAD',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'cityName' => 'Miike',
                'code' => 'JPMII',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'cityName' => 'Uwajima',
                'code' => 'JPUWA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'cityName' => 'Innoshima',
                'code' => 'JPINS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'cityName' => 'Itozaki',
                'code' => 'JPITO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'cityName' => 'Townsville',
                'code' => 'AUTSV',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'cityName' => 'Seletar',
                'code' => 'SGSLT',
                'country' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'cityName' => 'La Estacada',
                'code' => 'VELEC',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'cityName' => 'Jose Panganiban',
                'code' => 'PHJPM',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'cityName' => 'Lingayen',
                'code' => 'PHLIN',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'cityName' => 'Bhavnagar',
                'code' => 'INBHU',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'cityName' => 'Pusan',
                'code' => 'KRPUS',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'cityName' => 'Wonsan',
                'code' => 'KPWON',
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'cityName' => 'Noshiro',
                'code' => 'JPNSR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'cityName' => 'Yingkou',
                'code' => 'CNYIK',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'cityName' => 'Tuzla',
                'code' => 'TRTUZ',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'cityName' => 'Korsakov',
                'code' => 'RUKOR',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'cityName' => 'Turku',
                'code' => 'FITKU',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'cityName' => 'Wuhan',
                'code' => 'CNWUH',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'cityName' => 'Canakkale',
                'code' => 'TRCKZ',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'cityName' => 'Buenos Aires',
                'code' => 'ARBUE',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'cityName' => 'Farafangana',
                'code' => 'MGRVA',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'cityName' => 'Valparaiso',
                'code' => 'CLVAP',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'cityName' => 'Tubarao',
                'code' => 'BRTUB',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'cityName' => 'Belem',
                'code' => 'BRBEL',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'cityName' => 'Acajutla',
                'code' => 'SVAQJ',
                'country' => 'El Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'cityName' => 'Freeport',
                'code' => 'BSFPO',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'cityName' => 'Puerto Cabello',
                'code' => 'VEPBL',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'cityName' => 'Topolobampo',
                'code' => 'MXTPB',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'cityName' => 'Quintero',
                'code' => 'CLQTV',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'cityName' => 'Guayacan',
                'code' => 'CLGYC',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'cityName' => 'Taltal',
                'code' => 'CLTTC',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'cityName' => 'Punta Cardon',
                'code' => 'VEPCN',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'cityName' => 'Ayvalik',
                'code' => 'TRAYV',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'cityName' => 'Alvarado',
                'code' => 'MXAVD',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'cityName' => 'Santa Rosalia',
                'code' => 'MXSRL',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'cityName' => 'Inebolu',
                'code' => 'TRINE',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'cityName' => 'Talara',
                'code' => 'PETYL',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'cityName' => 'Nieuw Nickerie',
                'code' => 'SRICK',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'cityName' => 'Bridgetown',
                'code' => 'BBBGI',
                'country' => 'Barbados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'cityName' => 'Ponce',
                'code' => 'PRPSE',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'cityName' => 'Guayanilla',
                'code' => 'PRGUY',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'cityName' => 'Dumai',
                'code' => 'IDDUM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'cityName' => 'Waingapu',
                'code' => 'IDWGP',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'cityName' => 'Cienfuegos',
                'code' => 'CUCFG',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'cityName' => 'Puerto Sandino',
                'code' => 'NIPSN',
                'country' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'cityName' => 'Nanchital',
                'code' => 'MXNAN',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'cityName' => 'Ramallo',
                'code' => 'ARRAM',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'cityName' => 'Hambantota',
                'code' => 'LKHBA',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'cityName' => 'Aguadulce',
                'code' => 'PAAGD',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'cityName' => 'Kourou',
                'code' => 'GFQKR',
                'country' => 'French Guiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'cityName' => 'Champerico',
                'code' => 'GTCHR',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'cityName' => 'Pago Pago',
                'code' => 'ASPPG',
                'country' => 'American Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'cityName' => 'Port Said',
                'code' => 'EGPSD',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'cityName' => 'Lae',
                'code' => 'PGLAE',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'cityName' => 'Duran',
                'code' => 'ECDUN',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'cityName' => 'Hadera',
                'code' => 'ILHAD',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'cityName' => 'Hamburg',
                'code' => 'DEHAM',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'cityName' => 'Norddeich',
                'code' => 'DENOE',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'cityName' => 'Goole',
                'code' => 'GBGOO',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'cityName' => 'Drogheda',
                'code' => 'IEDRO',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'cityName' => 'Whitby',
                'code' => 'GBWTB',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'cityName' => 'Nysted',
                'code' => 'DKNTD',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'cityName' => 'Kerteminde',
                'code' => 'DKKTD',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'cityName' => 'Kolding',
                'code' => 'DKKOL',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'cityName' => 'Old Kilpatrick',
                'code' => 'GBOKK',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'cityName' => 'Ardrishaig',
                'code' => 'GBASG',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'cityName' => 'Malpe',
                'code' => 'INMAL',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'cityName' => 'North Berwick',
                'code' => 'GBNBW',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'cityName' => 'Randers',
                'code' => 'DKRAN',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'cityName' => 'Mariager',
                'code' => 'DKMRR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'cityName' => 'Strangnas',
                'code' => 'SESTQ',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'cityName' => 'Lysaker',
                'code' => 'NOLYS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'cityName' => 'Sandarne',
                'code' => 'SESAE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'cityName' => 'Haukipudas',
                'code' => 'FIHAU',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'cityName' => 'Namibe',
                'code' => 'AOMSZ',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'cityName' => 'Sheboygan',
                'code' => 'USSBZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'cityName' => 'East London',
                'code' => 'ZAELS',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'cityName' => 'Otake',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'cityName' => 'Honolulu',
                'code' => 'USHNL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'cityName' => 'Santa Marta',
                'code' => 'COSMR',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'cityName' => 'Jakarta',
                'code' => 'IDJKT',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'cityName' => 'Tanjung Priok',
                'code' => 'IDTPP',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'cityName' => 'Kupang',
                'code' => 'IDKOE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'cityName' => 'Bitung',
                'code' => 'IDBIT',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'cityName' => 'Puna',
                'code' => 'ECPUN',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'cityName' => 'Banes',
                'code' => 'CUBAN',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'cityName' => 'Cabo Blanco',
                'code' => 'PECAB',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'cityName' => 'Port Tampa',
                'code' => 'USPOT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'cityName' => 'Apalachicola',
                'code' => 'USAAF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'cityName' => 'El Segundo',
                'code' => 'USELS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'cityName' => 'Ngali',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'cityName' => 'Coron',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'cityName' => 'Maasin',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'cityName' => 'Asau',
                'code' => NULL,
                'country' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'cityName' => 'Bandundu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'cityName' => 'Ubay',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'cityName' => 'Davant',
                'code' => 'USDVT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'cityName' => 'Pasadena',
                'code' => 'USPSD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'cityName' => 'Cameron',
                'code' => 'USCXM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'cityName' => 'Everett',
                'code' => 'USEVT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'cityName' => 'Hopewell',
                'code' => 'USHPW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'cityName' => 'San Mateo',
                'code' => 'USSMK',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'cityName' => 'San Carlos',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'cityName' => 'Khulna',
                'code' => NULL,
                'country' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'cityName' => 'Alexandria',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'cityName' => 'Hungnam',
                'code' => NULL,
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'cityName' => 'Antibes',
                'code' => 'FRANT',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'cityName' => 'Wallhamn',
                'code' => 'SEWAL',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'cityName' => 'Skiathos',
                'code' => 'GRJSI',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'cityName' => 'Sagunto',
                'code' => 'ESSAG',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'cityName' => 'Biarritz',
                'code' => 'FRBIQ',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'cityName' => 'Forsmark',
                'code' => 'SEFOR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'cityName' => 'Mongstad',
                'code' => 'NOMON',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'cityName' => 'Torquay',
                'code' => 'GBTOR',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'cityName' => 'Parga',
                'code' => 'GRPAR',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'cityName' => 'Douarnenez',
                'code' => 'FRDRZ',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'cityName' => 'Paris',
                'code' => 'FRPAR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'cityName' => 'Faro',
                'code' => 'PTFAO',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'cityName' => 'Portimao',
                'code' => 'PTPRM',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'cityName' => 'Denia',
                'code' => 'ESDNA',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'cityName' => 'Keramoti',
                'code' => 'GRKER',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'cityName' => 'Bordeaux',
                'code' => 'FRBOD',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'cityName' => 'Lyngor',
                'code' => 'NOLNG',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'cityName' => 'Otterbacken',
                'code' => 'SEOTT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'cityName' => 'Enkoping',
                'code' => 'SEENK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'cityName' => 'Norrtalje',
                'code' => 'SENOE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'cityName' => 'Yangambi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'cityName' => 'Lowa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'cityName' => 'Kabimba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'cityName' => 'Lappeenranta',
                'code' => 'FILPP',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'cityName' => 'Selaata',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'cityName' => 'Amirabad',
                'code' => NULL,
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'cityName' => 'Ende',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'cityName' => 'Thilawa',
                'code' => NULL,
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'cityName' => 'Lafiteau',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'cityName' => 'Segou',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'cityName' => 'Diafarabe',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'cityName' => 'Dire',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'cityName' => 'Mahajanga',
                'code' => 'MGMJN',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'cityName' => 'Appleton',
                'code' => 'USATW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'cityName' => 'Davao',
                'code' => 'PHBIY',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'cityName' => 'Larena',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'cityName' => 'Kopmanholmen',
                'code' => 'SEKMH',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'cityName' => 'Andranomahitsy',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'cityName' => 'Marohita',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'cityName' => 'Marofinaritra',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'cityName' => 'Nosy Varika',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'cityName' => 'Ambahy',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'cityName' => 'Limassol',
                'code' => 'CYLMS',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'cityName' => 'Gwadar',
                'code' => 'PKGWD',
                'country' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'cityName' => 'Basoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'cityName' => 'Ahus',
                'code' => 'SEAHU',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'cityName' => 'Lewiston',
                'code' => 'USLUT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'cityName' => 'Hamilton',
                'code' => 'CAHAM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'cityName' => 'Yalusaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'cityName' => 'Lomami',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'cityName' => 'Waka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'cityName' => 'Waka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'cityName' => 'Wewak',
                'code' => 'PGWWK',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'cityName' => 'Amamapare',
                'code' => 'IDAMA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'cityName' => 'Lorengau',
                'code' => 'PGLOR',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'cityName' => 'Searsport',
                'code' => 'USSRP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'cityName' => 'Charlottetown',
                'code' => 'CACHA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'cityName' => 'Moosonee',
                'code' => 'CAMOU',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'cityName' => 'Masset',
                'code' => 'CAZMT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'cityName' => 'Donaldsonville',
                'code' => 'USDNA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'cityName' => 'Clinton',
                'code' => 'USCLB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'cityName' => 'Provincetown',
                'code' => 'USPVC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'cityName' => 'Alsen',
                'code' => 'USAEN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'cityName' => 'Cornwall',
                'code' => 'CACWL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'cityName' => 'Kalama',
                'code' => 'USKAL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'cityName' => 'Olympia',
                'code' => 'USOLM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'cityName' => 'Holyrood',
                'code' => 'CAHOD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'cityName' => 'Gaspe',
                'code' => 'CAGPE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'cityName' => 'Freeport',
                'code' => 'USFRP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'cityName' => 'San Diego',
                'code' => 'USSAN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'cityName' => 'Perth Amboy',
                'code' => 'USPAY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'cityName' => 'Yarmouth',
                'code' => 'USYAR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'cityName' => 'Le Havre',
                'code' => 'FRLEH',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'cityName' => 'Nanaimo',
                'code' => 'CANNO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'cityName' => 'Springdale',
                'code' => 'CASPD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'cityName' => 'Anchorage',
                'code' => 'USANC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'cityName' => 'Grasten',
                'code' => 'DKGRA',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'cityName' => 'Tayport',
                'code' => 'GBTAY',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'cityName' => 'Buckie',
                'code' => 'GBBUC',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'cityName' => 'Katakolon',
                'code' => 'GRKAK',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'cityName' => 'Perama',
                'code' => 'GRPER',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'cityName' => 'Messina',
                'code' => 'ITMSN',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'cityName' => 'Piombino',
                'code' => 'ITPIO',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'cityName' => 'Oaxen',
                'code' => 'SEOAX',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'cityName' => 'Gluckstadt',
                'code' => 'DEGLU',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'cityName' => 'Vallejo',
                'code' => 'USVLO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'cityName' => 'Piney Point',
                'code' => 'USPYP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'cityName' => 'New Castle',
                'code' => 'USNQS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'cityName' => 'Camden',
                'code' => 'USCDE',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'cityName' => 'Woods Hole',
                'code' => 'USWOH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'cityName' => 'Emden',
                'code' => 'DEEME',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'cityName' => 'Sakai',
                'code' => 'JPSAK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'cityName' => 'Mindelo',
                'code' => 'CVMIN',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'cityName' => 'Heroya',
                'code' => 'NOHRY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'cityName' => 'Maloy',
                'code' => 'NOMAY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'cityName' => 'Canvey Island',
                'code' => 'GBCAN',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'cityName' => 'Whitstable',
                'code' => 'GBWTS',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'cityName' => 'Bayonne',
                'code' => 'FRBAY',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'cityName' => 'Medgidia',
                'code' => 'ROMED',
                'country' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'cityName' => 'Libourne',
                'code' => 'FRLIB',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'cityName' => 'Morlaix',
                'code' => 'FRMXN',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'cityName' => 'Lannion',
                'code' => 'FRLAI',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'cityName' => 'Penzance',
                'code' => 'GBPEN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'cityName' => 'Duisburg',
                'code' => 'DEDUI',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'cityName' => 'Fishguard',
                'code' => 'GBFIS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'cityName' => 'Beaumaris',
                'code' => 'GBBMR',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'cityName' => 'Port Sunlight',
                'code' => 'GBPSU',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'cityName' => 'Villanueva',
                'code' => 'PHVNV',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'cityName' => 'Masinloc',
                'code' => 'PHMSC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'cityName' => 'Nasipit',
                'code' => 'PHNAS',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'cityName' => 'San Jose',
                'code' => 'PHSJI',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'cityName' => 'Sakaide',
                'code' => 'JPSKD',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'cityName' => 'Fushiki',
                'code' => 'JPFSK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'cityName' => 'Annaba',
                'code' => 'DZAAE',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'cityName' => 'Lindi',
                'code' => 'TZLDI',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'cityName' => 'Tanga',
                'code' => 'TZTGT',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'cityName' => 'Uraga',
                'code' => 'JPKRH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'cityName' => 'Lazarev',
                'code' => 'RULAZ',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'cityName' => 'Iwanai',
                'code' => 'JPIWN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'cityName' => 'Bunbury',
                'code' => 'AUBUY',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'cityName' => 'Whyalla',
                'code' => 'AUWYA',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'cityName' => 'Thevenard',
                'code' => 'AUTHE',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'cityName' => 'Coffs Harbour',
                'code' => 'AUCFS',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'cityName' => 'Antonina',
                'code' => 'BRANT',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'cityName' => 'Port Hedland',
                'code' => 'AUPHE',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'cityName' => 'Maceio',
                'code' => 'BRMCZ',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'cityName' => 'Funafuti',
                'code' => 'TVFUN',
                'country' => 'Tuvalu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'cityName' => 'Lingga',
                'code' => 'MYLGG',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'cityName' => 'Seria',
                'code' => 'BNSER',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'cityName' => 'Cavite',
                'code' => 'PHCVE',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'cityName' => 'Sakaiminato',
                'code' => 'JPSMN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'cityName' => 'Cide',
                'code' => 'TRCID',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'cityName' => 'Nemuro',
                'code' => 'JPNEM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'cityName' => 'Rumoi',
                'code' => 'JPRMI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'cityName' => 'Kronshtadt',
                'code' => 'RUKDT',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'cityName' => 'Primorsk',
                'code' => 'RUPRI',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'cityName' => 'Beringovskiy',
                'code' => 'RUBER',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'cityName' => 'Launceston',
                'code' => 'AULST',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'cityName' => 'Ulverstone',
                'code' => 'AUULV',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'cityName' => 'Corral',
                'code' => 'CLCRR',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'cityName' => 'Portland',
                'code' => 'AUPTJ',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'cityName' => 'Melbourne',
                'code' => 'AUMEL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'cityName' => 'San Fernando',
                'code' => 'ARSFE',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'cityName' => 'Porto Alegre',
                'code' => 'BRPOA',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'cityName' => 'Carnarvon',
                'code' => 'AUCVQ',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'cityName' => 'Poro',
                'code' => 'NCPOR',
                'country' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'cityName' => 'Mackay',
                'code' => 'AUMKY',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'cityName' => 'Batu Pahat',
                'code' => 'MYBAT',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'cityName' => 'Muar',
                'code' => 'MYMUA',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'cityName' => 'Smalkalden',
                'code' => 'SRSMA',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'cityName' => 'Guanta',
                'code' => 'VEGUT',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'cityName' => 'Iligan',
                'code' => 'PHIGN',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'cityName' => 'Daman',
                'code' => 'INDAM',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'cityName' => 'Senzaki',
                'code' => 'JPSZK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'cityName' => 'Kawasaki',
                'code' => 'JPKWS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'cityName' => 'Choshi',
                'code' => 'JPCHO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'cityName' => 'Dandong',
                'code' => 'CNDDG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'cityName' => 'Kamaishi',
                'code' => 'JPKIS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'cityName' => 'Qinhuangdao',
                'code' => 'CNSHP',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'cityName' => 'Samani',
                'code' => 'JPSAM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'cityName' => 'Otsu',
                'code' => 'JPOTU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'cityName' => 'Anan',
                'code' => 'JPANA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'cityName' => 'Eden',
                'code' => 'AUQDN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'cityName' => 'Fremantle',
                'code' => 'AUFRE',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'cityName' => 'Parnaiba',
                'code' => 'BRPHB',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'cityName' => 'Kuala Belait',
                'code' => 'BNKUB',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'cityName' => 'Muara',
                'code' => 'BNMUA',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'cityName' => 'Kuala Terengganu',
                'code' => 'MYTGG',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'cityName' => 'Sangi',
                'code' => 'PHSNG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'cityName' => 'Basuo',
                'code' => 'CNBAS',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'cityName' => 'Puri',
                'code' => 'INPUR',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'cityName' => 'Kikuma',
                'code' => 'JPKIK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'cityName' => 'Alleppey',
                'code' => 'INALF',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'cityName' => 'Toyohashi',
                'code' => 'JPTHS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'cityName' => 'Haeju',
                'code' => 'KPHAE',
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'cityName' => 'Shiogama',
                'code' => 'JPSGM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'cityName' => 'Sakata',
                'code' => 'JPSKT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'cityName' => 'Ofunato',
                'code' => 'JPOFT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'cityName' => 'Muroran',
                'code' => 'JPMUR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'cityName' => 'Vanino',
                'code' => 'RUVNN',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'cityName' => 'Onega',
                'code' => 'RUONG',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'cityName' => 'Wuhu',
                'code' => 'CNWHI',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'cityName' => 'Nanjing',
                'code' => 'CNNKG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'cityName' => 'Goya',
                'code' => 'AROYA',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'cityName' => 'Puerto Sucre',
                'code' => 'VECUM',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'cityName' => 'Puerto Limon',
                'code' => 'CRLIO',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'cityName' => 'Balboa',
                'code' => 'PABLB',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'cityName' => 'Cirebon',
                'code' => 'IDCBN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'cityName' => 'Banjarmasin',
                'code' => 'IDBDJ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'cityName' => 'Callao',
                'code' => 'PECLL',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'cityName' => 'Mudanya',
                'code' => 'TRMUD',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'cityName' => 'Karabiga',
                'code' => 'TRKRB',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'cityName' => 'Sinop',
                'code' => 'TRSIC',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'cityName' => 'Puerto Montt',
                'code' => 'CLPMC',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'cityName' => 'San Vicente',
                'code' => 'CLSVE',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'cityName' => 'New Amsterdam',
                'code' => 'GYQSK',
                'country' => 'Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'cityName' => 'Progreso',
                'code' => 'MXPGO',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'cityName' => 'La Union',
                'code' => 'SVLUN',
                'country' => 'El Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'cityName' => 'Port Morant',
                'code' => 'JMPMO',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'cityName' => 'San Blas',
                'code' => 'MXSBS',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'cityName' => 'Fethiye',
                'code' => 'TRFET',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'cityName' => 'Rize',
                'code' => 'TRRIZ',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'cityName' => 'Kankesanturai',
                'code' => 'LKKNK',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'cityName' => 'Corrientes',
                'code' => 'ARCNQ',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'cityName' => 'La Brea',
                'code' => 'TTLAB',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'cityName' => 'San Lorenzo',
                'code' => 'HNSLO',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'cityName' => 'Salt River',
                'code' => 'JMSRI',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'cityName' => 'Carrington',
                'code' => 'GBCRT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'cityName' => 'Aguadilla',
                'code' => 'PRBQN',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'cityName' => 'Chiriqui Grande',
                'code' => 'PACHG',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'cityName' => 'Black River',
                'code' => 'JMBLR',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'cityName' => 'Suez',
                'code' => 'EGSUZ',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'cityName' => 'Sattahip',
                'code' => 'THSAT',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'cityName' => 'Apia',
                'code' => 'WSAPW',
                'country' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'cityName' => 'Dzaoudzi',
                'code' => 'KMDZA',
                'country' => 'Mayotte',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'cityName' => 'Cap-Haitien',
                'code' => 'HTCAP',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'cityName' => 'Abu Qir',
                'code' => 'EGAKI',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'cityName' => 'Harper',
                'code' => 'LRHAR',
                'country' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'cityName' => 'Khorramshahr',
                'code' => 'IRKHO',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'cityName' => 'Axim',
                'code' => 'GHAXI',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'cityName' => 'Bengkulu',
                'code' => 'IDBKS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'cityName' => 'Makassar',
                'code' => 'IDUPG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'cityName' => 'Nunukan',
                'code' => 'IDNNX',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'cityName' => 'Balikpapan',
                'code' => 'IDBPN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'cityName' => 'Singkawang',
                'code' => 'IDSKW',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'cityName' => 'Guayaquil',
                'code' => 'ECGYE',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'cityName' => 'Antilla',
                'code' => 'CUANT',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'cityName' => 'Baracoa',
                'code' => 'CUBCA',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'cityName' => 'Niquero',
                'code' => 'CUNIQ',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'cityName' => 'Jucaro',
                'code' => 'CUJUC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'cityName' => 'Pacasmayo',
                'code' => 'PEPAC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'cityName' => 'Lavan',
                'code' => 'IRLVP',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'cityName' => 'Phu My',
                'code' => 'VNPHU',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'cityName' => 'Bonthe',
                'code' => 'SLBTE',
                'country' => 'Sierra Leone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'cityName' => 'Jambi',
                'code' => 'IDDJB',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'cityName' => 'Jamestown',
                'code' => 'SHSHN',
                'country' => 'Saint Helena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'cityName' => 'Hull',
                'code' => 'GBHUL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'cityName' => 'Wismar',
                'code' => 'DEWIS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'cityName' => 'Greenore',
                'code' => 'IEGRN',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'cityName' => 'Newry',
                'code' => 'GBNRY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'cityName' => 'Wigtown',
                'code' => 'GBWIG',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'cityName' => 'Palnackie',
                'code' => 'GBPAL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'cityName' => 'Odense',
                'code' => 'DKODE',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'cityName' => 'Skoghall',
                'code' => 'SESKO',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'cityName' => 'Struer',
                'code' => 'DKSTR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'cityName' => 'Portree',
                'code' => 'GBPRT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'cityName' => 'Menstad',
                'code' => 'NOMEN',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'cityName' => 'Fagerstrand',
                'code' => 'NOFAX',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'cityName' => 'Odda',
                'code' => 'NOODD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'cityName' => 'Helsinki',
                'code' => 'FIHEL',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'cityName' => 'Norheimsund',
                'code' => 'NONHS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'cityName' => 'Isnas',
                'code' => 'FIISN',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'cityName' => 'Akranes',
                'code' => 'ISAKR',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'cityName' => 'Haparanda',
                'code' => 'SEHAA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'cityName' => 'Munising',
                'code' => 'USMUI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'cityName' => 'Ej Jiye',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'cityName' => 'Alotau',
                'code' => 'PGGUR',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'cityName' => 'Yandina',
                'code' => 'SBXYA',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'cityName' => 'Huron',
                'code' => 'USHUB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'cityName' => 'Menasha',
                'code' => 'USMEZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'cityName' => 'Enfe',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'cityName' => 'Port Lavaca',
                'code' => 'USPLV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'cityName' => 'Grand Isle',
                'code' => 'USGIJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'cityName' => 'Gulfport',
                'code' => 'USGPT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'cityName' => 'Alameda',
                'code' => 'USNGZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'cityName' => 'Whitegate',
                'code' => 'IEWHI',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'cityName' => 'Buna',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'cityName' => 'Nakatsu',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'cityName' => 'La Goulette',
                'code' => 'TNLGN',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'cityName' => 'Port Gamble',
                'code' => 'USPGH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'cityName' => 'Coupeville',
                'code' => 'USCBL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'cityName' => 'Makurazaki',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'cityName' => 'Port Everglades',
                'code' => 'USPEF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'cityName' => 'Sarasota',
                'code' => 'USSRB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'cityName' => 'Tappahannock',
                'code' => 'USTKV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'cityName' => 'Port Bell',
                'code' => NULL,
                'country' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'cityName' => 'Currimao',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'cityName' => 'Pasacao',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'cityName' => 'Port Hardy',
                'code' => 'CAPHY',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'cityName' => 'Kosti',
                'code' => NULL,
                'country' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'cityName' => 'Dili',
                'code' => NULL,
                'country' => 'Timor-Leste',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'cityName' => 'Uig',
                'code' => 'GBUIG',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'cityName' => 'Lochmaddy',
                'code' => 'GBLMA',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'cityName' => 'Jonkoping',
                'code' => 'SEJKG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'cityName' => 'Amorgos',
                'code' => 'GRAMO',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'cityName' => 'Kos',
                'code' => 'GRKGS',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'cityName' => 'Gandia',
                'code' => 'ESGAN',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'cityName' => 'Procida',
                'code' => 'ITPRO',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'cityName' => 'Anzio',
                'code' => 'ITANZ',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'cityName' => 'Viareggio',
                'code' => 'ITVIA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'cityName' => 'Almeria',
                'code' => 'ESLEI',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'cityName' => 'Civitavecchia',
                'code' => 'ITCVV',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'cityName' => 'Basel',
                'code' => 'CHBSL',
                'country' => 'Switzerland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'cityName' => 'Kapanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'cityName' => 'Libanda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'cityName' => 'Mopeia',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'cityName' => 'Gennevilliers',
                'code' => 'FRGVL',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'cityName' => 'Ponta Delgada',
                'code' => 'PTPDL',
                'country' => 'Azores Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'cityName' => 'Horta',
                'code' => 'PTHOR',
                'country' => 'Azores Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'cityName' => 'Fayala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'cityName' => 'Pitea',
                'code' => 'SEPIT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'cityName' => 'Umea',
                'code' => 'SEUME',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'cityName' => 'Dapa',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'cityName' => 'Bindja',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'cityName' => 'Antsiranana',
                'code' => 'MGDIE',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'cityName' => 'Caraquet',
                'code' => 'CACAQ',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'cityName' => 'Tandayag',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'cityName' => 'Atimonan',
                'code' => 'PHATI',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'cityName' => 'Muyumba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'cityName' => 'Kabalo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'cityName' => 'Nha Trang',
                'code' => 'VNNHA',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'cityName' => 'Ankarefo',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'cityName' => 'Uleelheue',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'cityName' => 'Paphos',
                'code' => 'CYPFO',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'cityName' => 'Matnog',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'cityName' => 'Hantsport',
                'code' => 'CAHPT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'cityName' => 'Sorel',
                'code' => 'CASOR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'cityName' => 'Likulu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'cityName' => 'Green Bay',
                'code' => 'USGRB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'cityName' => 'Leland',
                'code' => 'USLLD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'cityName' => 'Charlevoix',
                'code' => 'USCSX',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'cityName' => 'Oshawa',
                'code' => 'CAQWA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'cityName' => 'Ikali',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'cityName' => 'Moma',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'cityName' => 'Inkaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'cityName' => 'Bokote',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'cityName' => 'Boyenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'cityName' => 'Likimi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'cityName' => 'Kirundu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'cityName' => 'Lisafa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'cityName' => 'Dungarvan',
                'code' => 'IEDGV',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'cityName' => 'Boston',
                'code' => 'USBOS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'cityName' => 'Jonesport',
                'code' => 'USJON',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'cityName' => 'Summerside',
                'code' => 'CASUM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'cityName' => 'Argentia',
                'code' => 'CANWP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'cityName' => 'Corner Brook',
                'code' => 'CACBK',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'cityName' => 'Prince Rupert',
                'code' => 'CAPRR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'cityName' => 'Solomon',
                'code' => 'USSLK',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'cityName' => 'Taft',
                'code' => 'USTFT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'cityName' => 'Convent',
                'code' => 'USCNV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'cityName' => 'Madisonville',
                'code' => 'USMVQ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'cityName' => 'Paulsboro',
                'code' => 'USPAU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'cityName' => 'New London',
                'code' => 'USNLD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'cityName' => 'Vineyard Haven',
                'code' => 'USVYH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'cityName' => 'Scituate',
                'code' => 'USSCU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'cityName' => 'Albany',
                'code' => 'USALB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'cityName' => 'Troy',
                'code' => 'USTRY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'cityName' => 'Bridgewater',
                'code' => 'CABRW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'cityName' => 'Shelton',
                'code' => 'USSQR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'cityName' => 'Fort Pierce',
                'code' => 'USFPR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'cityName' => 'Texas City',
                'code' => 'USTXT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'cityName' => 'Braithwaite',
                'code' => 'USBWT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'cityName' => 'Carrabelle',
                'code' => 'USCRB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'cityName' => 'Baton Rouge',
                'code' => 'USBTR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'cityName' => 'Providence',
                'code' => 'USPVD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'cityName' => 'Portsmouth',
                'code' => 'USPSM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'cityName' => 'Burutu',
                'code' => 'NGBUR',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'cityName' => 'Bellingham',
                'code' => 'USBLI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'cityName' => 'Hampden',
                'code' => 'CAHMP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'cityName' => 'Baie Verte',
                'code' => 'CABVE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'cityName' => 'Jedway',
                'code' => 'CAJED',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'cityName' => 'Skagway',
                'code' => 'USSGY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'cityName' => 'Whittier',
                'code' => 'USWQF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'cityName' => 'Newport Beach',
                'code' => 'USJNP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'cityName' => 'Cockenzie',
                'code' => 'GBCNZ',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'cityName' => 'Lochaline',
                'code' => 'GBLOL',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'cityName' => 'Ermioni',
                'code' => 'GRERM',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'cityName' => 'Alicante',
                'code' => 'ESALC',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'cityName' => 'Benidorm',
                'code' => 'ESBEM',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'cityName' => 'Dun Laoghaire',
                'code' => 'IEDLG',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'cityName' => 'Thisted',
                'code' => 'DKTED',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'cityName' => 'Kopervik',
                'code' => 'NOKOP',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1836,
                'cityName' => 'Erie',
                'code' => 'USERI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1837,
                'cityName' => 'Forestville',
                'code' => 'CAFRV',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1838,
                'cityName' => 'Port Nolloth',
                'code' => 'ZANOL',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1839,
                'cityName' => 'Arzew',
                'code' => 'DZAZW',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1840,
                'cityName' => 'Nishinomiya',
                'code' => 'JPNYA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'cityName' => 'Beykoz',
                'code' => 'TRBEY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1842,
                'cityName' => 'Mannar',
                'code' => 'LKMAN',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1843,
                'cityName' => 'Larkollen',
                'code' => 'NOLRK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1844,
                'cityName' => 'Workington',
                'code' => 'GBWOR',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1845,
                'cityName' => 'Rasa',
                'code' => 'HRRAS',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1846,
                'cityName' => 'Brightlingsea',
                'code' => 'GBBLS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1847,
                'cityName' => 'Schiedam',
                'code' => 'NLSCI',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1848,
                'cityName' => 'Boston',
                'code' => 'GBBOS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1849,
                'cityName' => 'Papenburg',
                'code' => 'DEPAP',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1850,
                'cityName' => 'Eastham',
                'code' => 'GBEAM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1851,
                'cityName' => 'Gainsborough',
                'code' => 'GBGAI',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1852,
                'cityName' => 'Casablanca',
                'code' => 'MACAS',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1853,
                'cityName' => 'Iwakuni',
                'code' => 'JPIWK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1854,
                'cityName' => 'Richards Bay',
                'code' => 'ZARCB',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1855,
                'cityName' => 'Cabinda',
                'code' => 'AOCAB',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1856,
                'cityName' => 'Tufi',
                'code' => 'PGTFI',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1857,
                'cityName' => 'Salamaua',
                'code' => 'PGSMU',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1858,
                'cityName' => 'Rio Gallegos',
                'code' => 'ARRGL',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1859,
                'cityName' => 'Invercargill',
                'code' => 'NZIVC',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1860,
                'cityName' => 'Burnie',
                'code' => 'AUBWT',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1861,
                'cityName' => 'Port Latta',
                'code' => 'AUPLA',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1862,
                'cityName' => 'Numazu',
                'code' => 'JPNUM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1863,
                'cityName' => 'Cabedelo',
                'code' => 'BRCDO',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1864,
                'cityName' => 'Lahad Datu',
                'code' => 'MYLDU',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1865,
                'cityName' => 'Sipitang',
                'code' => 'MYSPT',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1866,
                'cityName' => 'Culion',
                'code' => 'PHCUJ',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1867,
                'cityName' => 'Nantong',
                'code' => 'CNNTG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1868,
                'cityName' => 'Nagahama',
                'code' => 'JPNGH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1869,
                'cityName' => 'Larnaca',
                'code' => 'CYLCA',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1870,
                'cityName' => 'Famagusta',
                'code' => 'CYFMG',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1871,
                'cityName' => 'Uglegorsk',
                'code' => 'RUUGL',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1872,
                'cityName' => 'Severodvinsk',
                'code' => 'RUSEW',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1873,
                'cityName' => 'Akita',
                'code' => 'JPAXT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1874,
                'cityName' => 'Nepoui',
                'code' => 'NCNEP',
                'country' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1875,
                'cityName' => 'Sukumo',
                'code' => 'JPSUK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1876,
                'cityName' => 'Takehara',
                'code' => 'JPTHR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1877,
                'cityName' => 'Antalya',
                'code' => 'TRAYT',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1878,
                'cityName' => 'Wanganui',
                'code' => 'NZWAG',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1879,
                'cityName' => 'Ube',
                'code' => 'JPUBJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1880,
                'cityName' => 'Weipa',
                'code' => 'AUWEI',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1881,
                'cityName' => 'Natal',
                'code' => 'BRNAT',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1882,
                'cityName' => 'Dumaguete',
                'code' => 'PHDGT',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1883,
                'cityName' => 'El Palito',
                'code' => 'VEELP',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'cityName' => 'Saipan',
                'code' => 'MPSPN',
                'country' => 'Northern Mariana Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1885,
                'cityName' => 'Vengurla',
                'code' => 'INVEN',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1886,
                'cityName' => 'Xiamen',
                'code' => 'CNXMN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'cityName' => 'Ismailia',
                'code' => 'EGISM',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1888,
                'cityName' => 'Ise',
                'code' => 'JPISE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1889,
                'cityName' => 'Amagasaki',
                'code' => 'JPAMA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1890,
                'cityName' => 'Eceabat',
                'code' => 'TRECE',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1891,
                'cityName' => 'Veraval',
                'code' => 'INVVA',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1892,
                'cityName' => 'Surat',
                'code' => 'INSTV',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1893,
                'cityName' => 'Kartal',
                'code' => 'TRKAR',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1894,
                'cityName' => 'Amasra',
                'code' => 'TRAMA',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'cityName' => 'Vyborg',
                'code' => 'RUVYG',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1896,
                'cityName' => 'Gualeguaychu',
                'code' => 'ARGHU',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1897,
                'cityName' => 'Shanghai',
                'code' => 'CNSHA',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1898,
                'cityName' => 'Wuzhou',
                'code' => 'CNWUZ',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1899,
                'cityName' => 'Igarka',
                'code' => 'RUIAA',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1900,
                'cityName' => 'Coquimbo',
                'code' => 'CLCQQ',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1901,
                'cityName' => 'Trujillo',
                'code' => 'PETRU',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1902,
                'cityName' => 'Zorritos',
                'code' => 'PEZOR',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1903,
                'cityName' => 'Kingston',
                'code' => 'JMKIN',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1904,
                'cityName' => 'Ensenada',
                'code' => 'MXESE',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1905,
                'cityName' => 'Gemlik',
                'code' => 'TRGEM',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1906,
                'cityName' => 'Huasco',
                'code' => 'CLHSO',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1907,
                'cityName' => 'Maroantsetra',
                'code' => 'MGWMN',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1908,
                'cityName' => 'El Guamache',
                'code' => 'VEEGU',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1909,
                'cityName' => 'Frontera',
                'code' => 'MXFRN',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1910,
                'cityName' => 'Salto',
                'code' => 'UYSTY',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1911,
                'cityName' => 'Giresun',
                'code' => 'TRGIR',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1912,
                'cityName' => 'Trabzon',
                'code' => 'TRTZX',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1913,
                'cityName' => 'Amuay',
                'code' => 'VEAMY',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1914,
                'cityName' => 'Castries',
                'code' => 'LCSLU',
                'country' => 'Saint Lucia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1915,
                'cityName' => 'La Ceiba',
                'code' => 'HNLCE',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1916,
                'cityName' => 'Tela',
                'code' => 'HNTEA',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1917,
                'cityName' => 'Partington',
                'code' => 'GBPTT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1918,
                'cityName' => 'Tekirdag',
                'code' => 'TRTEK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1919,
                'cityName' => 'Posadas',
                'code' => 'ARPSS',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'cityName' => 'Formosa',
                'code' => 'ARFMA',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1921,
                'cityName' => 'San Pedro',
                'code' => 'ARXPD',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1922,
                'cityName' => 'Punta Arenas',
                'code' => 'CLPUQ',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1923,
                'cityName' => 'Amapala',
                'code' => 'HNAMP',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1924,
                'cityName' => 'Cayenne',
                'code' => 'GFCAY',
                'country' => 'French Guiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1925,
                'cityName' => 'Port Kaiser',
                'code' => 'JMPKS',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1926,
                'cityName' => 'Villa Constitucion',
                'code' => 'ARVCN',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1927,
                'cityName' => 'Paysandu',
                'code' => 'UYPDU',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1928,
                'cityName' => 'Madang',
                'code' => 'PGMAG',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1929,
                'cityName' => 'Haifa',
                'code' => 'ILHFA',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1930,
                'cityName' => 'Damietta',
                'code' => 'EGDAM',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1931,
                'cityName' => 'Port Moresby',
                'code' => 'PGPOM',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1932,
                'cityName' => 'Phnom Penh',
                'code' => 'KHPNH',
                'country' => 'Cambodia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1933,
                'cityName' => 'Manggar',
                'code' => 'IDMAN',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1934,
                'cityName' => 'Neiafu',
                'code' => 'TONEI',
                'country' => 'Tonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1935,
                'cityName' => 'Moroni',
                'code' => 'KMYVA',
                'country' => 'Comoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'cityName' => 'Barranquilla',
                'code' => 'COBAQ',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1937,
                'cityName' => 'Tegal',
                'code' => 'IDTEG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1938,
                'cityName' => 'Jayapura',
                'code' => 'IDDJJ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1939,
                'cityName' => 'Bula',
                'code' => 'IDBUA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1940,
                'cityName' => 'Poso',
                'code' => 'IDPSJ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1941,
                'cityName' => 'Nuevitas',
                'code' => 'CUNVT',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1942,
                'cityName' => 'Huacho',
                'code' => 'PEHCO',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1943,
                'cityName' => 'Chimbote',
                'code' => 'PECHM',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1944,
                'cityName' => 'Puerto Chicama',
                'code' => 'PEPCH',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1945,
                'cityName' => 'Praia',
                'code' => 'CVRAI',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1946,
                'cityName' => 'Tel Aviv',
                'code' => 'ILJFA',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1947,
                'cityName' => 'Saltpond',
                'code' => 'GHSPD',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1948,
                'cityName' => 'Sekondi',
                'code' => 'GHSEK',
                'country' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1949,
                'cityName' => 'Sfax',
                'code' => 'TNSFA',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1950,
                'cityName' => 'Oran',
                'code' => 'DZORN',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1951,
                'cityName' => 'Dundalk',
                'code' => 'IEDDK',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1952,
                'cityName' => 'Grossenbrode',
                'code' => 'DEGRO',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1953,
                'cityName' => 'Sassandra',
                'code' => 'CIZSS',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1954,
                'cityName' => 'Campbeltown',
                'code' => 'GBCBT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1955,
                'cityName' => 'Port Ellen',
                'code' => 'GBPLN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1956,
                'cityName' => 'Skaerbaek',
                'code' => 'DKSKB',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1957,
                'cityName' => 'Borgholm',
                'code' => 'SEBOM',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1958,
                'cityName' => 'Grimstad',
                'code' => 'NOGTD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1959,
                'cityName' => 'Larvik',
                'code' => 'NOLAR',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1960,
                'cityName' => 'Stockholm',
                'code' => 'SESTO',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1961,
                'cityName' => 'Lappohja',
                'code' => 'FILAP',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'cityName' => 'Trondheim',
                'code' => 'NOTRD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1963,
                'cityName' => 'Sarafand',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'cityName' => 'Port Maitland',
                'code' => 'CAPTM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1965,
                'cityName' => 'Buffalo',
                'code' => 'USBUF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1966,
                'cityName' => 'El Ouzaai',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1967,
                'cityName' => 'Dbaiye',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1968,
                'cityName' => 'Moba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1969,
                'cityName' => 'Toronto',
                'code' => 'CATOR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1970,
                'cityName' => 'Halat',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1971,
                'cityName' => 'Santa Barbara',
                'code' => 'USSBA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1972,
                'cityName' => 'Alexandria',
                'code' => 'EGALY',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1973,
                'cityName' => 'Nioki',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1974,
                'cityName' => 'Virac',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1975,
                'cityName' => 'Zarzis',
                'code' => NULL,
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1976,
                'cityName' => 'Balykchy',
                'code' => NULL,
                'country' => 'Kyrgyzstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1977,
                'cityName' => 'Tadoussac',
                'code' => 'CATAD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1978,
                'cityName' => 'Palm Beach',
                'code' => 'USPAB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'cityName' => 'Wilmington',
                'code' => 'USWTN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1980,
                'cityName' => 'Jinja',
                'code' => NULL,
                'country' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1981,
                'cityName' => 'Nishinoomote',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1982,
                'cityName' => 'Chiang Saen',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'cityName' => 'La Spezia',
                'code' => NULL,
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1984,
                'cityName' => 'Wexford',
                'code' => 'IEWEX',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1985,
                'cityName' => 'Kaolack',
                'code' => 'SNKLC',
                'country' => 'Senegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1986,
                'cityName' => 'Valencia',
                'code' => 'ESVLC',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1987,
                'cityName' => 'Capraia',
                'code' => 'ITCPA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1988,
                'cityName' => 'Stocka',
                'code' => 'SESTA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1989,
                'cityName' => 'Nea Karvali',
                'code' => 'GRNKV',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1990,
                'cityName' => 'Barcelona',
                'code' => 'ESBCN',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1991,
                'cityName' => 'Ajaccio',
                'code' => 'FRAJA',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1992,
                'cityName' => 'Mulongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1993,
                'cityName' => 'Quimper',
                'code' => 'FRUIP',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1994,
                'cityName' => 'Dinga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1995,
                'cityName' => 'Lusanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1996,
                'cityName' => 'Djombo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1997,
                'cityName' => 'Marromeu',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1998,
                'cityName' => 'Skopelos',
                'code' => 'GRSKO',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1999,
                'cityName' => 'Yerakini',
                'code' => 'GRYER',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'cityName' => 'Portland',
                'code' => 'GBPTL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'cityName' => 'Tonsberg',
                'code' => 'NOTON',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2002,
                'cityName' => 'Lidkoping',
                'code' => 'SELDK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2003,
                'cityName' => 'Hafnarfjordur',
                'code' => 'ISHAF',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2004,
                'cityName' => 'Brunsbuttel',
                'code' => 'DEBRB',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2005,
                'cityName' => 'Isambo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2006,
                'cityName' => 'Ed Daoura',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2007,
                'cityName' => 'Aka',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2008,
                'cityName' => 'Hue',
                'code' => 'VNHUI',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'cityName' => 'Georgetown',
                'code' => 'SHASI',
                'country' => 'Saint Helena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2010,
                'cityName' => 'Manangareza',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2011,
                'cityName' => 'Sondrara',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2012,
                'cityName' => 'Ambodiharina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2013,
                'cityName' => 'Ambodisaina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'cityName' => 'Halifax',
                'code' => 'CAHAL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2015,
                'cityName' => 'Aparri',
                'code' => 'PHAPR',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2016,
                'cityName' => 'Yambinga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2017,
                'cityName' => 'Samarai',
                'code' => 'PGSQT',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2018,
                'cityName' => 'Bokakata',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2019,
                'cityName' => 'Ikela',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'cityName' => 'Kalonda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2021,
                'cityName' => 'Kimbao',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2022,
                'cityName' => 'Oshwe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2023,
                'cityName' => 'Collingwood',
                'code' => 'CACOL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2024,
                'cityName' => 'Mackinac Island',
                'code' => 'USMCD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2025,
                'cityName' => 'Superior',
                'code' => 'USSUW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2026,
                'cityName' => 'Muskegon',
                'code' => 'USMKG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2027,
                'cityName' => 'Marathon',
                'code' => 'CAMAR',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2028,
                'cityName' => 'Puerto Suarez',
                'code' => 'BOPSZ',
                'country' => 'Bolivia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2029,
                'cityName' => 'Busira',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2030,
                'cityName' => 'Mampoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2031,
                'cityName' => 'Ekuta',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2032,
                'cityName' => 'Pono',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2033,
                'cityName' => 'Kinyezire',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2034,
                'cityName' => 'North Weymouth',
                'code' => 'USNWY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2035,
                'cityName' => 'Masbate',
                'code' => 'PHMBT',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2036,
                'cityName' => 'Lunenburg',
                'code' => 'CALUN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2037,
                'cityName' => 'Port Alice',
                'code' => 'CAPAC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2038,
                'cityName' => 'Port Edward',
                'code' => 'CAPTE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2039,
                'cityName' => 'Wrangell',
                'code' => 'USWRG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'cityName' => 'Pelican',
                'code' => 'USPEC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2041,
                'cityName' => 'Cordova',
                'code' => 'USCDV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2042,
                'cityName' => 'Portland',
                'code' => 'USPWM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2043,
                'cityName' => 'Lockeport',
                'code' => 'CALCP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2044,
                'cityName' => 'Weymouth',
                'code' => 'CAWEY',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2045,
                'cityName' => 'Massena',
                'code' => 'USMSS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2046,
                'cityName' => 'Iona',
                'code' => 'CAION',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2047,
                'cityName' => 'Louisbourg',
                'code' => 'CALOU',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2048,
                'cityName' => 'Warrenton',
                'code' => 'USWTO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2049,
                'cityName' => 'Port Royal',
                'code' => 'USPRL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2050,
                'cityName' => 'Port Alberni',
                'code' => 'CAPAB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2051,
                'cityName' => 'Port Mellon',
                'code' => 'CAPML',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2052,
                'cityName' => 'Comox',
                'code' => 'CACOX',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'cityName' => 'Tahsis',
                'code' => 'CAPTA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2054,
                'cityName' => 'Petersburg',
                'code' => 'USPBU',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2055,
                'cityName' => 'Seward',
                'code' => 'USSEW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2056,
                'cityName' => 'Caen',
                'code' => 'FRCFR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2057,
                'cityName' => 'Bogense',
                'code' => 'DKBGZ',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2058,
                'cityName' => 'Figeholm',
                'code' => 'SEFIG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2059,
                'cityName' => 'Girvan',
                'code' => 'GBGIR',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060,
                'cityName' => 'Vardo',
                'code' => 'NOVAO',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2061,
                'cityName' => 'Korsor',
                'code' => 'DKKRR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2062,
                'cityName' => 'Rorvig',
                'code' => 'DKRRV',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2063,
                'cityName' => 'Corinth',
                'code' => 'GRCRG',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2064,
                'cityName' => 'Milazzo',
                'code' => 'ITMLZ',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2065,
                'cityName' => 'La Rochelle',
                'code' => 'FRLRH',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2066,
                'cityName' => 'Kalmar',
                'code' => 'SEKLR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2067,
                'cityName' => 'Stavanger',
                'code' => 'NOSVG',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2068,
                'cityName' => 'Toledo',
                'code' => 'USTOL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2069,
                'cityName' => 'Wilmington',
                'code' => 'USILG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2070,
                'cityName' => 'Marcus Hook',
                'code' => 'USMAH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2071,
                'cityName' => 'Mtwara',
                'code' => 'TZMYW',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2072,
                'cityName' => 'Kashiwazaki',
                'code' => 'JPAIK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2073,
                'cityName' => 'Sal Rei',
                'code' => 'CVSAR',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2074,
                'cityName' => 'Vasteras',
                'code' => 'SEVST',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2075,
                'cityName' => 'Kalajoki',
                'code' => 'FIKJO',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2076,
                'cityName' => 'Holyhead',
                'code' => 'GBHLY',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2077,
                'cityName' => 'Pontevedra',
                'code' => 'ESPEV',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2078,
                'cityName' => 'Paimpol',
                'code' => 'FRPAI',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2079,
                'cityName' => 'Rouen',
                'code' => 'FRURO',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2080,
                'cityName' => 'Poole',
                'code' => 'GBPOO',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2081,
                'cityName' => 'Newhaven',
                'code' => 'GBNHV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2082,
                'cityName' => 'Portslade',
                'code' => 'GBPTS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2083,
                'cityName' => 'Faversham',
                'code' => 'GBFAV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2084,
                'cityName' => 'Felixstowe',
                'code' => 'GBFXT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2085,
                'cityName' => 'Deventer',
                'code' => 'NLDEV',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2086,
                'cityName' => 'New Ross',
                'code' => 'IENRS',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2087,
                'cityName' => 'Mostyn',
                'code' => 'GBCHE',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2088,
                'cityName' => 'Garston',
                'code' => 'GBGTN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2089,
                'cityName' => 'Bromborough',
                'code' => 'GBBHK',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2090,
                'cityName' => 'Pattani',
                'code' => 'THPAN',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2091,
                'cityName' => 'Romblon',
                'code' => 'PHRLN',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2092,
                'cityName' => 'Sale',
                'code' => 'MASAL',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2093,
                'cityName' => 'Sousse',
                'code' => 'TNSUS',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2094,
                'cityName' => 'Benguela',
                'code' => 'AOBUG',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2095,
                'cityName' => 'Pangani',
                'code' => 'TZPAN',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2096,
                'cityName' => 'Kantang',
                'code' => 'THKAN',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2097,
                'cityName' => 'Kudamatsu',
                'code' => 'JPKUD',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2098,
                'cityName' => 'Westport',
                'code' => 'NZWSZ',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2099,
                'cityName' => 'Mount Maunganui',
                'code' => 'NZMMU',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2100,
                'cityName' => 'Maldonado',
                'code' => 'UYMDO',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2101,
                'cityName' => 'Namatanai',
                'code' => 'PGATN',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2102,
                'cityName' => 'Port Lincoln',
                'code' => 'AUPLO',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2103,
                'cityName' => 'Esperance',
                'code' => 'AUEPR',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2104,
                'cityName' => 'Sao Sebastiao',
                'code' => 'BRSSO',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2105,
                'cityName' => 'Point Samson',
                'code' => 'AUPSM',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2106,
                'cityName' => 'Lucinda',
                'code' => 'AULUC',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2107,
                'cityName' => 'Macapa',
                'code' => 'BRMCP',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2108,
                'cityName' => 'Tarawa',
                'code' => 'KITRW',
                'country' => 'Kiribati',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2109,
                'cityName' => 'Male',
                'code' => 'MVMLE',
                'country' => 'Maldives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2110,
                'cityName' => 'Kota Kinabalu',
                'code' => 'MYBKI',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2111,
                'cityName' => 'Hondagua',
                'code' => 'PHHON',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2112,
                'cityName' => 'Mangrol',
                'code' => 'INMGR',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2113,
                'cityName' => 'Puerto Princesa',
                'code' => 'PHPPS',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2114,
                'cityName' => 'Macau',
                'code' => 'MOFMM',
                'country' => 'Macao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2115,
                'cityName' => 'Fuzhou',
                'code' => 'CNFOC',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2116,
                'cityName' => 'Omaezaki',
                'code' => 'JPOMZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2117,
                'cityName' => 'Kisarazu',
                'code' => 'JPKZU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2118,
                'cityName' => 'Otaru',
                'code' => 'JPOTR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2119,
                'cityName' => 'Sochi',
                'code' => 'RUSOC',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2120,
                'cityName' => 'Dunedin',
                'code' => 'NZDUD',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2121,
                'cityName' => 'Oamaru',
                'code' => 'NZOAM',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2122,
                'cityName' => 'Wellington',
                'code' => 'NZWLG',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2123,
                'cityName' => 'Warrnambool',
                'code' => 'AUWMB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2124,
                'cityName' => 'Whangarei',
                'code' => 'NZWRE',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2125,
                'cityName' => 'Carmelo',
                'code' => 'UYCAR',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2126,
                'cityName' => 'Port Alma',
                'code' => 'AUPTL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2127,
                'cityName' => 'Wageningen',
                'code' => 'SRAGI',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2128,
                'cityName' => 'Ozamis',
                'code' => 'PHOZC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2129,
                'cityName' => 'Belekeri',
                'code' => 'INBLK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2130,
                'cityName' => 'Zhangjiagang',
                'code' => 'CNZJG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2131,
                'cityName' => 'Samos',
                'code' => 'GRSMI',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2132,
                'cityName' => 'Lebu',
                'code' => 'CLLEB',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2133,
                'cityName' => 'Aratu',
                'code' => 'BRARB',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2134,
                'cityName' => 'Johor Bahru',
                'code' => 'MYJHB',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2135,
                'cityName' => 'Kuching',
                'code' => 'MYKCH',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2136,
                'cityName' => 'Limbang',
                'code' => 'MYLMN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2137,
                'cityName' => 'Chichiriviche',
                'code' => 'VECHV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2138,
                'cityName' => 'Tandoc',
                'code' => 'PHTDC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2139,
                'cityName' => 'Honavar',
                'code' => 'INHON',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2140,
                'cityName' => 'Calapan',
                'code' => 'PHCLP',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2141,
                'cityName' => 'Bedi',
                'code' => 'INBED',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2142,
                'cityName' => 'Keelung',
                'code' => 'TWKEL',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2143,
                'cityName' => 'Ningbo',
                'code' => 'CNNGB',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2144,
                'cityName' => 'Kuchinotsu',
                'code' => 'JPKUC',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2145,
                'cityName' => 'Fukuyama',
                'code' => 'JPFKY',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2146,
                'cityName' => 'Shimoda',
                'code' => 'JPSMD',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2147,
                'cityName' => 'Masan',
                'code' => 'KRMAS',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2148,
                'cityName' => 'Ulsan',
                'code' => 'KRUSN',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2149,
                'cityName' => 'Kunsan',
                'code' => 'KRKUV',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2150,
                'cityName' => 'Longkou',
                'code' => 'CNLKU',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2151,
                'cityName' => 'Maltepe',
                'code' => 'TRMAL',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2152,
                'cityName' => 'Naantali',
                'code' => 'FINLI',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2153,
                'cityName' => 'Riohacha',
                'code' => 'CORCH',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2154,
                'cityName' => 'Raahe',
                'code' => 'FIRAA',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2155,
                'cityName' => 'Diu',
                'code' => 'INDIU',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2156,
                'cityName' => 'Jiangmen',
                'code' => 'CNJMN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2157,
                'cityName' => 'Eregli',
                'code' => 'TRELI',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2158,
                'cityName' => 'Dudinka',
                'code' => 'RUDUD',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2159,
                'cityName' => 'Gilau',
                'code' => 'PGGIL',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2160,
                'cityName' => 'Kas',
                'code' => 'TRKAS',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2161,
                'cityName' => 'Veracruz',
                'code' => 'MXVER',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2162,
                'cityName' => 'Manaus',
                'code' => 'BRMAO',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2163,
                'cityName' => 'Pertigalete',
                'code' => 'VEPRG',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2164,
                'cityName' => 'Puerto Madero',
                'code' => 'MXPMD',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2165,
                'cityName' => 'Puerto Vallarta',
                'code' => 'MXPVR',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2166,
                'cityName' => 'Kusadasi',
                'code' => 'TRKUS',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2167,
                'cityName' => 'Zonguldak',
                'code' => 'TRZON',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2168,
                'cityName' => 'Coronel',
                'code' => 'CLCNL',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2169,
                'cityName' => 'Lota',
                'code' => 'CLLTA',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2170,
                'cityName' => 'Marmaris',
                'code' => 'TRMRM',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2171,
                'cityName' => 'Quepos',
                'code' => 'CRXQP',
                'country' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2172,
                'cityName' => 'Minatitlan',
                'code' => 'MXMTT',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2173,
                'cityName' => 'Izmit',
                'code' => 'TRIZT',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2174,
                'cityName' => 'Asuncion',
                'code' => 'PYASU',
                'country' => 'Paraguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2175,
                'cityName' => 'Puerto Natales',
                'code' => 'CLPNT',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2176,
                'cityName' => 'Vatomandry',
                'code' => 'MGVAT',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2177,
                'cityName' => 'Liverpool',
                'code' => 'GBLIV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2178,
                'cityName' => 'Manchester',
                'code' => 'GBMNC',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2179,
                'cityName' => 'Puerto Madryn',
                'code' => 'ARPMY',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2180,
                'cityName' => 'Jaffna',
                'code' => 'LKJAF',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2181,
                'cityName' => 'Onne',
                'code' => 'NGONN',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2182,
                'cityName' => 'Padang',
                'code' => 'IDPDG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2183,
                'cityName' => 'Sinabang',
                'code' => 'IDSNG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2184,
                'cityName' => 'Banyuwangi',
                'code' => 'IDBUG',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2185,
                'cityName' => 'Semarang',
                'code' => 'IDSRG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2186,
                'cityName' => 'Ambon',
                'code' => 'IDAMQ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2187,
                'cityName' => 'Kendari',
                'code' => 'IDKDI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2188,
                'cityName' => 'Manado',
                'code' => 'IDMDC',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2189,
                'cityName' => 'Sangkulirang',
                'code' => 'IDSKI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2190,
                'cityName' => 'Bluefields',
                'code' => 'NIBEF',
                'country' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2191,
                'cityName' => 'Puerto Plata',
                'code' => 'DOPOP',
                'country' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2192,
                'cityName' => 'Mollendo',
                'code' => 'PEMLQ',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2193,
                'cityName' => 'Atico',
                'code' => 'PEATI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2194,
                'cityName' => 'Huarmey',
                'code' => 'PEHUY',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2195,
                'cityName' => 'Palmeira',
                'code' => 'CVPAL',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2196,
                'cityName' => 'Port Louis',
                'code' => 'MUPLU',
                'country' => 'Mauritius',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2197,
                'cityName' => 'Sao Tome',
                'code' => 'STTMS',
                'country' => 'Sao Tome and Principe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2198,
                'cityName' => 'Itzehoe',
                'code' => 'DEITZ',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2199,
                'cityName' => 'Hochdonn',
                'code' => 'DEHOD',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2200,
                'cityName' => 'Greifswald',
                'code' => 'DEGRD',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2201,
                'cityName' => 'Whitehaven',
                'code' => 'GBWHV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2202,
                'cityName' => 'Aabenraa',
                'code' => 'DKAAB',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2203,
                'cityName' => 'Flekkefjord',
                'code' => 'NOFFD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2204,
                'cityName' => 'Skaelskor',
                'code' => 'DKSSK',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2205,
                'cityName' => 'Klaipeda',
                'code' => 'LTKLJ',
                'country' => 'Lithuania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2206,
                'cityName' => 'Ronneby',
                'code' => 'SERNB',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2207,
                'cityName' => 'Klintehamn',
                'code' => 'SEKLI',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2208,
                'cityName' => 'Wick',
                'code' => 'GBWIC',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2209,
                'cityName' => 'Norrsundet',
                'code' => 'SENOT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2210,
                'cityName' => 'Orkanger',
                'code' => 'NOORK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2211,
                'cityName' => 'Malm',
                'code' => 'NOMLM',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2212,
                'cityName' => 'Logstor',
                'code' => 'DKLGR',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2213,
                'cityName' => 'Guangzhou',
                'code' => 'CNCAN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2214,
                'cityName' => 'Port Clinton',
                'code' => 'USPTT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2215,
                'cityName' => 'Racine',
                'code' => 'USRAC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2216,
                'cityName' => 'Sarnia',
                'code' => 'CASNI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2217,
                'cityName' => 'Ashland',
                'code' => 'USASX',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2218,
                'cityName' => 'Bang Saphan',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2219,
                'cityName' => 'Goderich',
                'code' => 'CAGOH',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2220,
                'cityName' => 'Kingston',
                'code' => 'CAKIN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2221,
                'cityName' => 'Morgan City',
                'code' => 'USMGN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2222,
                'cityName' => 'Kfar Aabida',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'cityName' => 'Pensacola',
                'code' => 'USPNS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2224,
                'cityName' => 'Roscoff',
                'code' => 'FRROS',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2225,
                'cityName' => 'Lokandu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2226,
                'cityName' => 'Kailenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2227,
                'cityName' => 'Brookes Point',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2228,
                'cityName' => 'Benghazi',
                'code' => 'LYBEN',
                'country' => 'Libyan Arab Jamahiriya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2229,
                'cityName' => 'Ranong',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2230,
                'cityName' => 'Gretna',
                'code' => 'USGTL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2231,
                'cityName' => 'Chicoutimi',
                'code' => 'CACHI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2232,
                'cityName' => 'Carbonear',
                'code' => 'CACRB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2233,
                'cityName' => 'Ishigaki',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2234,
                'cityName' => 'Kowe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2235,
                'cityName' => 'Brindisi',
                'code' => NULL,
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2236,
                'cityName' => 'Inverness',
                'code' => 'GBINV',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2237,
                'cityName' => 'Blankaholm',
                'code' => 'SEBLA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2238,
                'cityName' => 'Stenungsund',
                'code' => 'SESTE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2239,
                'cityName' => 'Kristiansand',
                'code' => 'NOKRS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2240,
                'cityName' => 'Naxos',
                'code' => 'GRJNX',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2241,
                'cityName' => 'Porto Garibaldi',
                'code' => 'ITPGA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2242,
                'cityName' => 'Split',
                'code' => 'HRSPU',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2243,
                'cityName' => 'Zadar',
                'code' => 'HRZAD',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2244,
                'cityName' => 'Sikea',
                'code' => 'SESIK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2245,
                'cityName' => 'Molfetta',
                'code' => 'ITMOL',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2246,
                'cityName' => 'Manfredonia',
                'code' => 'ITMFR',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'cityName' => 'Vasto',
                'code' => 'ITVSO',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'cityName' => 'Corcubion',
                'code' => 'ESCCN',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2249,
                'cityName' => 'Kindu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2250,
                'cityName' => 'Salerno',
                'code' => 'ITSAL',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2251,
                'cityName' => 'Nantes',
                'code' => 'FRNTE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2252,
                'cityName' => 'Lezardrieux',
                'code' => 'FRLEZ',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2253,
                'cityName' => 'Torre Annunziata',
                'code' => 'ITTOA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2254,
                'cityName' => 'Marseille',
                'code' => 'FRMRS',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2255,
                'cityName' => 'Blyth',
                'code' => 'GBBLY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'cityName' => 'Perth',
                'code' => 'GBPER',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2257,
                'cityName' => 'Tallinn',
                'code' => 'EETLL',
                'country' => 'Estonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2258,
                'cityName' => 'Skanevik',
                'code' => 'NOSEI',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2259,
                'cityName' => 'Kuji',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2260,
                'cityName' => 'Bronnoysund',
                'code' => 'NOBNN',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2261,
                'cityName' => 'Savonlinna',
                'code' => 'FISVL',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'cityName' => 'Bomputu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2263,
                'cityName' => 'Elila',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2264,
                'cityName' => 'Pweto',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2265,
                'cityName' => 'Bukama',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2266,
                'cityName' => 'Inongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2267,
                'cityName' => 'Cua Lo',
                'code' => NULL,
                'country' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2268,
                'cityName' => 'Clayton',
                'code' => 'USCLY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2269,
                'cityName' => 'Allen',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'cityName' => 'Tabuelan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2271,
                'cityName' => 'Belo Tsiribihina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'cityName' => 'Salehy',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2273,
                'cityName' => 'Marinette',
                'code' => 'USMOY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2274,
                'cityName' => 'Vancouver',
                'code' => 'CAVAN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2275,
                'cityName' => 'Cheboygan',
                'code' => 'USCHG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2276,
                'cityName' => 'Elingampangu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2277,
                'cityName' => 'Besow',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2278,
                'cityName' => 'Bokungu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2279,
                'cityName' => 'Welland',
                'code' => 'CAWEL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2280,
                'cityName' => 'Baringa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2281,
                'cityName' => 'Isangi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2282,
                'cityName' => 'Bokwankusu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2283,
                'cityName' => 'Georgetown',
                'code' => 'CAGGW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2284,
                'cityName' => 'Gold River',
                'code' => 'CAGOL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2285,
                'cityName' => 'Valdez',
                'code' => 'USVDZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2286,
                'cityName' => 'Port Neches',
                'code' => 'USPON',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2287,
                'cityName' => 'Gramercy',
                'code' => 'USGRY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2288,
                'cityName' => 'Reserve',
                'code' => 'USRSF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2289,
                'cityName' => 'Geismar',
                'code' => 'USGSM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2290,
                'cityName' => 'New Bedford',
                'code' => 'USEWB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2291,
                'cityName' => 'Quincy',
                'code' => 'USMQI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2292,
                'cityName' => 'Waddington',
                'code' => 'USWAD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2293,
                'cityName' => 'Moncton',
                'code' => 'CAMNT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2294,
                'cityName' => 'Port Orchard',
                'code' => 'USPXO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2295,
                'cityName' => 'Ostrica',
                'code' => 'USOST',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2296,
                'cityName' => 'Martinez',
                'code' => 'USMRZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2297,
                'cityName' => 'Fredericksburg',
                'code' => 'USFDB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2298,
                'cityName' => 'Onset',
                'code' => 'USONL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2299,
                'cityName' => 'Sandwich',
                'code' => 'USSWC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2300,
                'cityName' => 'Ogdensburg',
                'code' => 'USOGS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2301,
                'cityName' => 'Ladysmith',
                'code' => 'CALAD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2302,
                'cityName' => 'Powell River',
                'code' => 'CAPOW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2303,
                'cityName' => 'Aviles',
                'code' => 'ESAVS',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2304,
                'cityName' => 'Hopedale',
                'code' => 'CAHOP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2305,
                'cityName' => 'Port Townsend',
                'code' => 'USTWD',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2306,
                'cityName' => 'Dragor',
                'code' => 'DKDRA',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2307,
                'cityName' => 'Silloth',
                'code' => 'GBSIL',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2308,
                'cityName' => 'Ardrossan',
                'code' => 'GBARD',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2309,
                'cityName' => 'Catania',
                'code' => 'ITCTA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2310,
                'cityName' => 'Megara',
                'code' => 'GRMGR',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2311,
                'cityName' => 'Burgas',
                'code' => 'BGBOJ',
                'country' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2312,
                'cityName' => 'Venice',
                'code' => 'ITVCE',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2313,
                'cityName' => 'Ashtabula',
                'code' => 'USASF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2314,
                'cityName' => 'Metlakatla',
                'code' => 'USMTM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2315,
                'cityName' => 'Perryville',
                'code' => 'USPYX',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2316,
                'cityName' => 'Sparrows Point',
                'code' => 'USSRT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2317,
                'cityName' => 'Eureka',
                'code' => 'USEKA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2318,
                'cityName' => 'Tiverton',
                'code' => 'USTIV',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2319,
                'cityName' => 'Asilah',
                'code' => 'MAASI',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2320,
                'cityName' => 'Sariyer',
                'code' => 'TRSRY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2321,
                'cityName' => 'Buatan',
                'code' => 'IDBUN',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2322,
                'cityName' => 'Holmestrand',
                'code' => 'NOHOL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2323,
                'cityName' => 'Hargshamn',
                'code' => 'SEHAN',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2324,
                'cityName' => 'Fosnavag',
                'code' => 'NOFOS',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2325,
                'cityName' => 'Munksund',
                'code' => 'SEMUN',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2326,
                'cityName' => 'Narvik',
                'code' => 'NONVK',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2327,
                'cityName' => 'Ravenna',
                'code' => 'ITRAN',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'cityName' => 'Bassens',
                'code' => 'FRBAS',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2329,
                'cityName' => 'Vannes',
                'code' => 'FRVNE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2330,
                'cityName' => 'Southampton',
                'code' => 'GBSOU',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2331,
                'cityName' => 'Bideford',
                'code' => 'GBBID',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2332,
                'cityName' => 'North Woolwich',
                'code' => 'GBWOL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2333,
                'cityName' => 'Moerdijk',
                'code' => 'NLMOE',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2334,
                'cityName' => 'Colchester',
                'code' => 'GBCOL',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2335,
                'cityName' => 'Vlaardingen',
                'code' => 'NLVLA',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2336,
                'cityName' => 'Rotterdam',
                'code' => 'NLRTM',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2337,
                'cityName' => 'Zaandam',
                'code' => 'NLZAA',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2338,
                'cityName' => 'Wisbech',
                'code' => 'GBWIS',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2339,
                'cityName' => 'Den Helder',
                'code' => 'NLDHR',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2340,
                'cityName' => 'Mega',
                'code' => 'JPHIM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2341,
                'cityName' => 'Dublin',
                'code' => 'IEDUB',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2342,
                'cityName' => 'Agadir',
                'code' => 'MAAGA',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2343,
                'cityName' => 'Niihama',
                'code' => 'JPIHA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2344,
                'cityName' => 'Shimotsu',
                'code' => 'JPSMT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2345,
                'cityName' => 'Nasugbu',
                'code' => 'PHNUG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2346,
                'cityName' => 'Mohammedia',
                'code' => 'MAMOH',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2347,
                'cityName' => 'Kanokawa',
                'code' => 'JPKKW',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2348,
                'cityName' => 'Larache',
                'code' => 'MALAR',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2349,
                'cityName' => 'Abau',
                'code' => 'PGABW',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2350,
                'cityName' => 'Greymouth',
                'code' => 'NZGMN',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2351,
                'cityName' => 'Kaikoura',
                'code' => 'NZKBZ',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2352,
                'cityName' => 'Devonport',
                'code' => 'AUDPO',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2353,
                'cityName' => 'Tutoia',
                'code' => 'BRTUT',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2354,
                'cityName' => 'Port Dickson',
                'code' => 'MYPDI',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2355,
                'cityName' => 'Tawau',
                'code' => 'MYTWU',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2356,
                'cityName' => 'Gingoog',
                'code' => 'PHGIN',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2357,
                'cityName' => 'Catia La Mar',
                'code' => 'VECLM',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2358,
                'cityName' => 'Tellicherry',
                'code' => 'INTEL',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2359,
                'cityName' => 'Imari',
                'code' => 'JPIMI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2360,
                'cityName' => 'Kyrenia',
                'code' => 'CYKYR',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2361,
                'cityName' => 'Kholmsk',
                'code' => 'RUKHO',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2362,
                'cityName' => 'Tolkkinen',
                'code' => 'FITOK',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2363,
                'cityName' => 'Kandalaksha',
                'code' => 'RUKAN',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2364,
                'cityName' => 'Wairoa',
                'code' => 'NZWIR',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2365,
                'cityName' => 'Geelong',
                'code' => 'AUGEX',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2366,
                'cityName' => 'Opua',
                'code' => 'NZOPX',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2367,
                'cityName' => 'Kouaoua',
                'code' => 'NCKOU',
                'country' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2368,
                'cityName' => 'Dampier',
                'code' => 'AUDAM',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2369,
                'cityName' => 'Moengo',
                'code' => 'SRMOJ',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2370,
                'cityName' => 'Saganoseki',
                'code' => 'JPSAG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2371,
                'cityName' => 'Onomichi',
                'code' => 'JPONO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2372,
                'cityName' => 'Gamagori',
                'code' => 'JPGAM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2373,
                'cityName' => 'Slavyanka',
                'code' => 'RUSKA',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2374,
                'cityName' => 'Cooktown',
                'code' => 'AUCTN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2375,
                'cityName' => 'Areia Branca',
                'code' => 'BRARE',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2376,
                'cityName' => 'Lumut',
                'code' => 'MYLUM',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2377,
                'cityName' => 'Dungun',
                'code' => 'MYDGN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2378,
                'cityName' => 'Weston',
                'code' => 'MYWES',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2379,
                'cityName' => 'Turiamo',
                'code' => 'VETUR',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2380,
                'cityName' => 'Shingu',
                'code' => 'JPSHN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'cityName' => 'Owase',
                'code' => 'JPOWA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2382,
                'cityName' => 'Izuhara',
                'code' => 'JPIZH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2383,
                'cityName' => 'Hagi',
                'code' => 'JPHAG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2384,
                'cityName' => 'Changhang',
                'code' => 'KRCHG',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2385,
                'cityName' => 'Shakhtersk',
                'code' => 'RUSHA',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2386,
                'cityName' => 'De-Kastri',
                'code' => 'RUDKA',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2387,
                'cityName' => 'Murmansk',
                'code' => 'RUMMK',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2388,
                'cityName' => 'Ciudad Guayana',
                'code' => 'VECGU',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2389,
                'cityName' => 'Huangshi',
                'code' => 'CNHSI',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2390,
                'cityName' => 'Tianjin',
                'code' => 'CNTSN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2391,
                'cityName' => 'Salvador',
                'code' => 'BRSSA',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2392,
                'cityName' => 'San Juan',
                'code' => 'PRSJU',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2393,
                'cityName' => 'Montevideo',
                'code' => 'UYMVD',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2394,
                'cityName' => 'Recife',
                'code' => 'BRREC',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2395,
                'cityName' => 'Georgetown',
                'code' => 'GYGEO',
                'country' => 'Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2396,
                'cityName' => 'Corumba',
                'code' => 'BRCMG',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2397,
                'cityName' => 'Charlestown',
                'code' => 'KNNEV',
                'country' => 'Saint Kitts and Nevis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2398,
                'cityName' => 'Fray Bentos',
                'code' => 'UYFZB',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2399,
                'cityName' => 'Chanaral',
                'code' => 'CLCNR',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2400,
                'cityName' => 'Point Fortin',
                'code' => 'TTPTF',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2401,
                'cityName' => 'Sorong',
                'code' => 'IDSOQ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2402,
                'cityName' => 'Labuha',
                'code' => 'IDLAH',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2403,
                'cityName' => 'Caibarien',
                'code' => 'CUCAI',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2404,
                'cityName' => 'San Nicolas',
                'code' => 'PESNX',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2405,
                'cityName' => 'Puerto La Cruz',
                'code' => 'VEPCZ',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2406,
                'cityName' => 'Rabigh',
                'code' => 'SARAB',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2407,
                'cityName' => 'Puerto Williams',
                'code' => 'CLWPU',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2408,
                'cityName' => 'Dikili',
                'code' => 'TRDIK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2409,
                'cityName' => 'Trincomalee',
                'code' => 'LKTRR',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2410,
                'cityName' => 'San Julian',
                'code' => 'ARULA',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2411,
                'cityName' => 'Montego Bay',
                'code' => 'JMMBJ',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2412,
                'cityName' => 'Morombe',
                'code' => 'MGMXM',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2413,
                'cityName' => 'Guanaja',
                'code' => 'HNGJA',
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2414,
                'cityName' => 'San Sebastian',
                'code' => 'ARSSN',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2415,
                'cityName' => 'Mejillones',
                'code' => 'CLMJS',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2416,
                'cityName' => 'Puerto Armuelles',
                'code' => 'PAAML',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2417,
                'cityName' => 'Abadan',
                'code' => 'IRABD',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2418,
                'cityName' => 'Pangai',
                'code' => 'TOPAN',
                'country' => 'Tonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2419,
                'cityName' => 'Bolama',
                'code' => 'GWBOL',
                'country' => 'Guinea-Bissau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2420,
                'cityName' => 'Preston',
                'code' => 'GBPRE',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2421,
                'cityName' => 'Rendsburg',
                'code' => 'DEREN',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2422,
                'cityName' => 'Gdynia',
                'code' => 'PLGDY',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2423,
                'cityName' => 'Gateshead',
                'code' => 'GBGAT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2424,
                'cityName' => 'Dumfries',
                'code' => 'GBDUM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2425,
                'cityName' => 'Rosyth',
                'code' => 'GBROY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2426,
                'cityName' => 'Inverkeithing',
                'code' => 'GBINK',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2427,
                'cityName' => 'Kirkcaldy',
                'code' => 'GBKKD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2428,
                'cityName' => 'Degerhamn',
                'code' => 'SEDEG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2429,
                'cityName' => 'Halmstad',
                'code' => 'SEHAD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2430,
                'cityName' => 'Tvedestrand',
                'code' => 'NOTVE',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2431,
                'cityName' => 'Skien',
                'code' => 'NOSKE',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2432,
                'cityName' => 'Molde',
                'code' => 'NOMOL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2433,
                'cityName' => 'Kramfors',
                'code' => 'SEKRF',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2434,
                'cityName' => 'Colon',
                'code' => 'PAONX',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2435,
                'cityName' => 'Sandusky',
                'code' => 'USSDY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2436,
                'cityName' => 'Tolu',
                'code' => 'COTLU',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2437,
                'cityName' => 'Surabaya',
                'code' => 'IDSUB',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2438,
                'cityName' => 'Gresik',
                'code' => 'IDGRE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2439,
                'cityName' => 'Maumere',
                'code' => 'IDMOF',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2440,
                'cityName' => 'Manokwari',
                'code' => 'IDMKW',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2441,
                'cityName' => 'Tarakan',
                'code' => 'IDTRK',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2442,
                'cityName' => 'Pontianak',
                'code' => 'IDPNK',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2443,
                'cityName' => 'Manta',
                'code' => 'ECMEC',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2444,
                'cityName' => 'Sanchez',
                'code' => 'DOSNZ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2445,
                'cityName' => 'Chancay',
                'code' => 'PECHY',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2446,
                'cityName' => 'Pimentel',
                'code' => 'PEPMT',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2447,
                'cityName' => 'Cape Vincent',
                'code' => 'USCVI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2448,
                'cityName' => 'Basco',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2449,
                'cityName' => 'Key West',
                'code' => 'USEYW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2450,
                'cityName' => 'South Haven',
                'code' => 'USSOH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2451,
                'cityName' => 'Jagna',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2452,
                'cityName' => 'Mbandaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2453,
                'cityName' => 'Ubundu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2454,
                'cityName' => 'Bumba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2455,
                'cityName' => 'Lomela',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2456,
                'cityName' => 'Bekungu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2457,
                'cityName' => 'Myrtle Grove',
                'code' => 'USMYG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2458,
                'cityName' => 'Neah Bay',
                'code' => 'USNEB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2459,
                'cityName' => 'Port San Luis',
                'code' => 'USPSL',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2460,
                'cityName' => 'Rhyl',
                'code' => 'GBRHY',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2461,
                'cityName' => 'Peterhead',
                'code' => 'GBPHD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2462,
                'cityName' => 'Amalfi',
                'code' => 'ITAMA',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2463,
                'cityName' => 'Golfo Aranci',
                'code' => 'ITGAI',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2464,
                'cityName' => 'Wolgast',
                'code' => 'DEWOL',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2465,
                'cityName' => 'Oregrund',
                'code' => 'SEOGR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2466,
                'cityName' => 'Calbayog',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2467,
                'cityName' => 'Malembe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2468,
                'cityName' => 'Bongandanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2469,
                'cityName' => 'Chupanga',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2470,
                'cityName' => 'Cascais',
                'code' => 'PTCAS',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2471,
                'cityName' => 'Bagata',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2472,
                'cityName' => 'Bastad',
                'code' => 'SEBAS',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2473,
                'cityName' => 'Arboga',
                'code' => 'SEARA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2474,
                'cityName' => 'Otsuchi',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2475,
                'cityName' => 'Skelleftea',
                'code' => 'SESFT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2476,
                'cityName' => 'Finnsnes',
                'code' => 'NOFNE',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2477,
                'cityName' => 'Charre',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2478,
                'cityName' => 'Bolondo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2479,
                'cityName' => 'Markala',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2480,
                'cityName' => 'Mananjary',
                'code' => 'MGMNJ',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2481,
                'cityName' => 'Cam Pha',
                'code' => 'VNCPH',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2482,
                'cityName' => 'Anakitaina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2483,
                'cityName' => 'Aketi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2484,
                'cityName' => 'Moliro',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2485,
                'cityName' => 'Namorona',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2486,
                'cityName' => 'Berevo',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2487,
                'cityName' => 'Skadovsk',
                'code' => 'UASKD',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2488,
                'cityName' => 'Sorsogon',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2489,
                'cityName' => 'Honiara',
                'code' => 'SBHIR',
                'country' => 'Solomon islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2490,
                'cityName' => 'Gaza',
                'code' => NULL,
                'country' => 'Gaza Strip',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2491,
                'cityName' => 'Port Stanley',
                'code' => 'FKPSY',
            'country' => 'Falkland Islands (Malvinas)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2492,
                'cityName' => 'Bata',
                'code' => 'GQBSG',
                'country' => 'Equatorial Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2493,
                'cityName' => 'Borj Islam',
                'code' => NULL,
                'country' => 'Syrian Arab Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2494,
                'cityName' => 'Tanjong Penjuru',
                'code' => 'SGTPN',
                'country' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2495,
                'cityName' => 'Sovetskaya Gavan',
                'code' => 'RUSOG',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2496,
                'cityName' => 'Degrad Des Cannes',
                'code' => 'GFDDC',
                'country' => 'French Guiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2497,
                'cityName' => 'Guiria',
                'code' => 'VEGUI',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2498,
                'cityName' => 'San Marcos Island',
                'code' => 'MXSMI',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2499,
                'cityName' => 'Tanjung Pandan',
                'code' => 'IDTJQ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2500,
                'cityName' => 'Sodertalje',
                'code' => 'SESOE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'cityName' => 'Pine Island',
                'code' => 'USPNI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2502,
                'cityName' => 'Masindi',
                'code' => NULL,
                'country' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2503,
                'cityName' => 'Port St Joe',
                'code' => 'USPSJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2504,
                'cityName' => 'Tiko',
                'code' => 'CMTKC',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2505,
                'cityName' => 'Garoua',
                'code' => 'CMGOU',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2506,
                'cityName' => 'Gustavia',
                'code' => 'GPGUS',
                'country' => 'Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2507,
                'cityName' => 'Mokha',
                'code' => 'YEMOK',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2508,
                'cityName' => 'Bataan',
                'code' => 'PHBTN',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2509,
                'cityName' => 'St Michiels Bay',
                'code' => 'ANSMB',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2510,
                'cityName' => 'Fangcheng',
                'code' => 'CNFAN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2511,
                'cityName' => 'Douala',
                'code' => 'CMDLA',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2512,
                'cityName' => 'Port Qaboos',
                'code' => 'OMOPQ',
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2513,
                'cityName' => 'Libreville',
                'code' => 'GALBV',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2514,
                'cityName' => 'Owendo',
                'code' => 'GAOWE',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2515,
            'cityName' => 'Ras Isa (Shore Tanks)',
                'code' => 'YERAI',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2516,
                'cityName' => 'Rosas',
                'code' => 'ESROS',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2517,
                'cityName' => 'Mersa Matruh',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2518,
                'cityName' => 'Malahayati',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2519,
                'cityName' => 'Lhokseumawe',
                'code' => 'IDLSW',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2520,
                'cityName' => 'Gilimanuk',
                'code' => 'IDGIL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2521,
                'cityName' => 'Padangbai',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2522,
                'cityName' => 'Ango-Ango',
                'code' => 'CDANG',
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2523,
                'cityName' => 'Isabela De Sagua',
                'code' => 'CUIDS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2524,
                'cityName' => 'Tunas De Zaza',
                'code' => 'CUTDZ',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2525,
                'cityName' => 'General San Martin',
                'code' => 'PEGSM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2526,
                'cityName' => 'Ambila Lemaitso',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2527,
                'cityName' => 'Vohitramposina',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2528,
                'cityName' => 'Port Bouet',
                'code' => 'CIPBT',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2529,
                'cityName' => 'Naluuyan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2530,
                'cityName' => 'Ghent',
                'code' => 'BEGNE',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2531,
                'cityName' => 'Ikoko-Mutaka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2532,
                'cityName' => 'Imbanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2533,
                'cityName' => 'St John',
                'code' => 'CASJB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2534,
                'cityName' => 'Mont Louis',
                'code' => 'CAMOL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2535,
                'cityName' => 'Mellville',
                'code' => 'USMVI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2536,
                'cityName' => 'Doornzelle',
                'code' => 'BEDOE',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2537,
                'cityName' => 'Angra Dos Reis',
                'code' => 'BRADR',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2538,
                'cityName' => 'Imam Hasan',
                'code' => 'IRIMH',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2539,
                'cityName' => 'Fanara',
                'code' => 'EGFAN',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2540,
                'cityName' => 'Campo',
                'code' => 'CMCMO',
                'country' => 'Equatorial Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2541,
                'cityName' => 'Sika',
                'code' => 'INSIK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2542,
                'cityName' => 'Matsue',
                'code' => 'JPMTE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2543,
                'cityName' => 'San Fernando De Apure',
                'code' => 'VESFD',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2544,
                'cityName' => 'Kalamansig',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2545,
                'cityName' => 'Port Of Spain',
                'code' => 'TTPOS',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2546,
                'cityName' => 'Basse Terre',
                'code' => 'GPBBR',
                'country' => 'Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2547,
                'cityName' => 'Georgetown',
                'code' => 'KYGEC',
                'country' => 'Cayman Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2548,
                'cityName' => 'Laem Chabang',
                'code' => 'THLCH',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2549,
                'cityName' => 'Khor Al Fakkan',
                'code' => 'AEKLF',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2550,
                'cityName' => 'Nukualofa',
                'code' => 'TOTBU',
                'country' => 'Tonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2551,
                'cityName' => 'Pladju',
                'code' => 'IDPLA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2552,
                'cityName' => 'Loviisa',
                'code' => 'FILOV',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2553,
                'cityName' => 'Sault Ste Marie',
                'code' => 'CASSM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2554,
                'cityName' => 'Stephenville',
                'code' => 'CAYJT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2555,
                'cityName' => 'Norfolk-Newport News',
                'code' => 'USNEN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2556,
                'cityName' => 'Wenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2557,
                'cityName' => 'L\'Ile Rousse',
                'code' => 'FRILR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2558,
                'cityName' => 'Gunung Sitoli',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2559,
                'cityName' => 'Kungsor',
                'code' => 'SEKGR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2560,
                'cityName' => 'Nasser',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2561,
                'cityName' => 'Bepumba',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2562,
                'cityName' => 'Jounie',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2563,
                'cityName' => 'Oktyabrsk',
                'code' => 'UAOCT',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2564,
                'cityName' => 'Port Gentil',
                'code' => 'GAPOG',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2565,
                'cityName' => 'San Carlos De La Rapita',
                'code' => 'ESSCR',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2566,
                'cityName' => 'Celukan Bawang',
                'code' => 'IDCEB',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2567,
                'cityName' => 'Rio Haina',
                'code' => 'DOHAI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2568,
                'cityName' => 'Limune',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2569,
                'cityName' => 'Losambo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2570,
                'cityName' => 'El Arish',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2571,
                'cityName' => 'Vinaroz',
                'code' => 'ESVZR',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2572,
                'cityName' => 'Stylis',
                'code' => 'GRSYS',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2573,
                'cityName' => 'Morbylanga',
                'code' => 'SEMOR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2574,
                'cityName' => 'Ilyichevsk',
                'code' => 'UAILK',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2575,
                'cityName' => 'Anevoranto',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2576,
                'cityName' => 'Ciudad Del Carmen',
                'code' => 'MXCME',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2577,
                'cityName' => 'Cagayan De Oro',
                'code' => 'PHCGY',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2578,
                'cityName' => 'San Pedro',
                'code' => 'CISPY',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2579,
                'cityName' => 'Rogers',
                'code' => 'USRJM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2580,
                'cityName' => 'Kismayu',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2581,
                'cityName' => 'Bandar Taheri',
                'code' => NULL,
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2582,
                'cityName' => 'Macina',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2583,
                'cityName' => 'Hornefors',
                'code' => 'SEHNF',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2584,
                'cityName' => 'Lanshan',
                'code' => 'CNLSN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2585,
                'cityName' => 'Chikoma',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2586,
                'cityName' => 'Sevastopol',
                'code' => 'UASVP',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2587,
                'cityName' => 'Berdyansk',
                'code' => 'UAERD',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2588,
                'cityName' => 'Izmail',
                'code' => 'UAIZM',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2589,
                'cityName' => 'Evpatoria',
                'code' => NULL,
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2590,
                'cityName' => 'Feodosia',
                'code' => NULL,
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2591,
                'cityName' => 'N\'Gongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2592,
                'cityName' => 'Sohar',
                'code' => 'OMSOH',
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2593,
                'cityName' => 'Imesse',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2594,
                'cityName' => 'Mabenga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2595,
                'cityName' => 'Bosaso',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2596,
                'cityName' => 'Mersin',
                'code' => 'TRMER',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2597,
                'cityName' => 'Balangala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2598,
                'cityName' => 'Modombe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2599,
                'cityName' => 'St Andrews',
                'code' => 'CASAD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2600,
                'cityName' => 'Chesapeake',
                'code' => 'USUFG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2601,
                'cityName' => 'Liepaya',
                'code' => 'LVLPX',
                'country' => 'Latvia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2602,
                'cityName' => 'Skaramanga',
                'code' => 'GRSKA',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2603,
                'cityName' => 'Castellammare Del Golfo',
                'code' => 'ITCTR',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2604,
                'cityName' => 'Petit Couronne',
                'code' => 'FRPET',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2605,
                'cityName' => 'Tonnay Charente',
                'code' => 'FRTON',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2606,
                'cityName' => 'La Skhirra',
                'code' => 'TNLSK',
                'country' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2607,
                'cityName' => 'Port Victoria',
                'code' => 'SCPOV',
                'country' => 'Seychelles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2608,
                'cityName' => 'Ajman',
                'code' => 'AEAJM',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2609,
                'cityName' => 'Tokushima',
                'code' => 'JPTKS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2610,
                'cityName' => 'Caloundra Head',
                'code' => 'AUCAL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2611,
                'cityName' => 'Neendhakara',
                'code' => 'INNEE',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2612,
                'cityName' => 'Heianza',
                'code' => 'JPHEI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2613,
                'cityName' => 'Monbetsu',
                'code' => 'JPMBE',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2614,
                'cityName' => 'Arkhangelsk',
                'code' => 'RUARH',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2615,
                'cityName' => 'Yawatahama',
                'code' => 'JPYWH',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2616,
                'cityName' => 'Funakawa',
                'code' => 'JPFNK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2617,
                'cityName' => 'Nevelsk',
                'code' => 'RUNEV',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2618,
                'cityName' => 'Saa Luiz',
                'code' => 'BRSLZ',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2619,
                'cityName' => 'Bheemunipatnam',
                'code' => 'INBHM',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2620,
                'cityName' => 'Mytilene',
                'code' => 'GRMJT',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2621,
                'cityName' => 'Ashkelon',
                'code' => 'ILAKL',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2622,
                'cityName' => 'Chacabuco',
                'code' => 'CLCHB',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2623,
                'cityName' => 'Santo Tomas De Castilla',
                'code' => 'GTSTC',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2624,
                'cityName' => 'Koh Si Chang',
                'code' => 'THKSI',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2625,
                'cityName' => 'Sharm El Sheikh',
                'code' => 'EGSSH',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2626,
                'cityName' => 'Fujairah',
                'code' => 'AEFJR',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2627,
                'cityName' => 'Hormuz',
                'code' => 'IRHOR',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2628,
                'cityName' => 'Travemunde',
                'code' => 'DETRV',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2629,
                'cityName' => 'Aamshite',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2630,
                'cityName' => 'Elizabeth',
                'code' => 'USELZ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2631,
                'cityName' => 'St Malo',
                'code' => 'FRSML',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2632,
                'cityName' => 'Stratoni',
                'code' => 'GRSTI',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2633,
                'cityName' => 'Tranoy',
                'code' => 'NOTRY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2634,
                'cityName' => 'Figueira Da Foz',
                'code' => 'PTFDF',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2635,
                'cityName' => 'Vanga',
                'code' => NULL,
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2636,
                'cityName' => 'Begiro',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2637,
                'cityName' => 'Catagbacan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2638,
                'cityName' => 'Petit Trou De Nippes',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2639,
                'cityName' => 'Mitshakilaf',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2640,
                'cityName' => 'Bokoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2641,
                'cityName' => 'Havre St Pierre',
                'code' => 'CAHSP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2642,
                'cityName' => 'Newbury',
                'code' => 'USNEY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2643,
                'cityName' => 'Ijmuiden',
                'code' => 'NLIJM',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2644,
                'cityName' => 'Vastervik',
                'code' => 'SEVVK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2645,
                'cityName' => 'Abu Zenima',
                'code' => 'EGAZA',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2646,
                'cityName' => 'Lervik',
                'code' => 'NOLER',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2647,
                'cityName' => 'Kuala Tanjung',
                'code' => 'IDTJB',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2648,
                'cityName' => 'Tanjung Balai',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2649,
                'cityName' => 'Tambo De Mora',
                'code' => 'PETDM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2650,
                'cityName' => 'El Ferrol',
                'code' => 'ESFER',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2651,
                'cityName' => 'Matsuyama',
                'code' => 'JPMYJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2652,
                'cityName' => 'Legazpi',
                'code' => 'PHLGP',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2653,
                'cityName' => 'Elat',
                'code' => 'ILETH',
                'country' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2654,
                'cityName' => 'Chiba',
                'code' => 'JPCHB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2655,
                'cityName' => 'Anadyr',
                'code' => 'RUDYR',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2656,
                'cityName' => 'Kanazawa',
                'code' => 'JPKNZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2657,
                'cityName' => 'Uraga',
                'code' => 'JPURG',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2658,
                'cityName' => 'Suzaki',
                'code' => 'JPSUZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2659,
                'cityName' => 'Ominato',
                'code' => 'JPOMT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2660,
                'cityName' => 'Lith',
                'code' => 'SALIT',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2661,
                'cityName' => 'Niigata',
                'code' => 'JPKIJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2662,
                'cityName' => 'Pointe A Pierre',
                'code' => 'TTPTP',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2663,
                'cityName' => 'Clifton Point',
                'code' => 'BSCLP',
                'country' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2664,
                'cityName' => 'Mar Del Plata',
                'code' => 'ARMDQ',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2665,
                'cityName' => 'Puerto De Hierro',
                'code' => 'VEPHO',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2666,
                'cityName' => 'San Nicolas De Los Los Arroyos',
                'code' => 'ARSNS',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2667,
                'cityName' => 'Glasson Dock',
                'code' => 'GBGLD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2668,
                'cityName' => 'Burns Harbour',
                'code' => 'USBNB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2669,
                'cityName' => 'Dammam',
                'code' => NULL,
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2670,
                'cityName' => 'Simonstown',
                'code' => 'ZASMN',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2671,
                'cityName' => 'Modiokoy',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2672,
                'cityName' => 'Dioro',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2673,
                'cityName' => 'Hanoi',
                'code' => 'VNHAN',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2674,
                'cityName' => 'Serinam',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2675,
                'cityName' => 'Manakampahiny',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2676,
                'cityName' => 'Pointe-a-Pitre',
                'code' => 'GPPTP',
                'country' => 'Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2677,
                'cityName' => 'Bosanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2678,
                'cityName' => 'Dalhousie',
                'code' => 'CADHS',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2679,
                'cityName' => 'Ibeka',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2680,
                'cityName' => 'Makoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2681,
                'cityName' => 'Yumurtalik Bay',
                'code' => 'TRYUM',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2682,
                'cityName' => 'Nikiski',
                'code' => 'USNKI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2683,
                'cityName' => 'Kings Bay',
                'code' => 'USKBA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2684,
                'cityName' => 'Clark City',
                'code' => 'CACLC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2685,
                'cityName' => 'Sukhumi',
                'code' => 'GESUI',
                'country' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2686,
                'cityName' => 'Pozos Colorados',
                'code' => 'COPOC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2687,
                'cityName' => 'Tandjung Uban',
                'code' => 'IDTUB',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2688,
                'cityName' => 'Pangkal Balam',
                'code' => 'IDPGX',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2689,
                'cityName' => 'Pare Pare',
                'code' => 'IDPAP',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2690,
                'cityName' => 'Chah-Bahar',
                'code' => 'IRZBR',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2691,
                'cityName' => 'Stadersand',
                'code' => 'DESTS',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2692,
                'cityName' => 'Hiroshima',
                'code' => 'JPHIJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2693,
                'cityName' => 'Abu Rudeis',
                'code' => 'EGAUE',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2694,
                'cityName' => 'Laayoune',
                'code' => 'MAEUN',
                'country' => 'Western Sahara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2695,
                'cityName' => 'Haiphong',
                'code' => 'VNHPH',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2696,
                'cityName' => 'Haypoint',
                'code' => 'AUHPT',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2697,
                'cityName' => 'Tanjong Mani',
                'code' => 'MYTMI',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2698,
                'cityName' => 'Ainoura',
                'code' => 'JPAIN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2699,
                'cityName' => 'El Beddaoui',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2700,
                'cityName' => 'Port Yabucoa',
                'code' => 'PRPYA',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2701,
                'cityName' => 'Blowing Point',
                'code' => 'AIBLP',
                'country' => 'Anguilla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2702,
                'cityName' => 'Concepcion Del Uruguay',
                'code' => 'ARCOU',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2703,
                'cityName' => 'Thorshavn',
                'code' => 'FOTHO',
                'country' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2704,
                'cityName' => 'Aeroskobing',
                'code' => 'DKARK',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2705,
                'cityName' => 'Samui',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2706,
                'cityName' => 'Riviere Du Loup',
                'code' => 'CARDL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2707,
                'cityName' => 'Vila Do Porto',
                'code' => 'PTVDP',
                'country' => 'Azores Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2708,
                'cityName' => 'Port La Nouvelle',
                'code' => 'FRNOU',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2709,
                'cityName' => 'Tulagi',
                'code' => NULL,
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2710,
                'cityName' => 'Kingushi Amont',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2711,
                'cityName' => 'Bena Makina',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2712,
            'cityName' => 'Villagarcia  (De Arosa)',
                'code' => 'ESVIL',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2713,
                'cityName' => 'El Maameltayne',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2714,
                'cityName' => 'Vung Ang',
                'code' => NULL,
                'country' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2715,
                'cityName' => 'Duong Dong',
                'code' => NULL,
                'country' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2716,
                'cityName' => 'Kalomala',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2717,
                'cityName' => 'Twillinggate',
                'code' => 'CATWI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2718,
                'cityName' => 'Velsen',
                'code' => 'NLVEL',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2719,
                'cityName' => 'Havre De Grace',
                'code' => 'USHDC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2720,
                'cityName' => 'Boulogne Sur Mer',
                'code' => 'FRBOL',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2721,
                'cityName' => 'Yokohama',
                'code' => 'JPYOK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2722,
                'cityName' => 'Aomori',
                'code' => 'JPAOJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2723,
                'cityName' => 'Posyet',
                'code' => 'RUPSE',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2724,
                'cityName' => 'Miyazaki',
                'code' => 'JPKMI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2725,
                'cityName' => 'Sejingkat',
                'code' => 'MYSEJ',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2726,
                'cityName' => 'Dwarkar',
                'code' => 'INDWA',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2727,
                'cityName' => 'Kuala Beukah',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2728,
                'cityName' => 'Pangkalang Susu',
                'code' => 'IDSSO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2729,
                'cityName' => 'Tanjung Sekong',
                'code' => 'IDMRK',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2730,
                'cityName' => 'Moskalvo',
                'code' => 'RUMVO',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2731,
                'cityName' => 'Ras Al Mishab',
                'code' => 'SARAM',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2732,
                'cityName' => 'Fort-De-France',
                'code' => 'MQFDF',
                'country' => 'Martinique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2733,
                'cityName' => 'St John\'S',
                'code' => 'AGSJO',
                'country' => 'Antigua and Barbuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2734,
                'cityName' => 'Husevig',
                'code' => 'FOHUS',
                'country' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2735,
                'cityName' => 'Port-Au-Prince',
                'code' => 'HTPAP',
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2736,
                'cityName' => 'Koverhar',
                'code' => 'FIKVH',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2737,
                'cityName' => 'Matsusaka',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2738,
                'cityName' => 'Saldanha Bay',
                'code' => 'ZASDB',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2739,
                'cityName' => 'El Aaqaybe',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2740,
                'cityName' => 'Malanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2741,
                'cityName' => 'Damaguit',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2742,
                'cityName' => 'Port-De-Paix',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2743,
                'cityName' => 'Vila Real De Santo Antonio',
                'code' => 'PTVRL',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2744,
                'cityName' => 'Bundala',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2745,
                'cityName' => 'Masindi',
                'code' => NULL,
                'country' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2746,
                'cityName' => 'St Helier',
                'code' => 'GBSTH',
                'country' => 'Jersey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2747,
                'cityName' => 'Qui Nhon',
                'code' => 'VNUIH',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2748,
                'cityName' => 'Kolumboma',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2749,
                'cityName' => 'Port Cartier',
                'code' => 'CAPCA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2750,
                'cityName' => 'Port Aux Basques',
                'code' => 'CAPBQ',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2751,
                'cityName' => 'Port Menier',
                'code' => 'CAPME',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2752,
                'cityName' => 'Sitra',
                'code' => 'BHSIT',
                'country' => 'Bahrain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2753,
                'cityName' => 'Takamatsu',
                'code' => 'JPTAK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2754,
                'cityName' => 'Vestmannaeyjar - Hofn',
                'code' => 'ISVES',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2755,
                'cityName' => 'King\'S Lynn',
                'code' => 'GBKLN',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2756,
                'cityName' => 'Bruges',
                'code' => 'BEBGS',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2757,
                'cityName' => 'Portmadoc',
                'code' => 'GBPMD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2758,
                'cityName' => 'Chiwan',
                'code' => 'CNCWN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2759,
                'cityName' => 'El Meks',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2760,
                'cityName' => 'Jurong',
                'code' => 'SGJUR',
                'country' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2761,
                'cityName' => 'Hosojima',
                'code' => 'JPHSM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2762,
                'cityName' => 'Bandirmar',
                'code' => 'TRBDM',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2763,
                'cityName' => 'Ras Al Khafji',
                'code' => 'SARAR',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2764,
                'cityName' => 'Pakan Baru',
                'code' => 'IDPAK',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2765,
                'cityName' => 'San Juan De La Costa',
                'code' => 'MXSJC',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2766,
                'cityName' => 'Ras Lanuf',
                'code' => 'LYRLA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2767,
                'cityName' => 'Sungai Pakning',
                'code' => 'IDSEQ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2768,
                'cityName' => 'Pandjang',
                'code' => 'IDSPA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2769,
                'cityName' => 'Habana',
                'code' => 'CUHAV',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2770,
                'cityName' => 'Santiago De Cuba',
                'code' => 'CUSCU',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2771,
                'cityName' => 'San Juan Del Sur',
                'code' => 'NISJS',
                'country' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2772,
                'cityName' => 'Mutsamudu',
                'code' => 'KMMUT',
                'country' => 'Comoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2773,
                'cityName' => 'Wadi Halfa',
                'code' => NULL,
                'country' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2774,
                'cityName' => 'Anecho',
                'code' => 'TGANE',
                'country' => 'Togo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2775,
                'cityName' => 'Assinie',
                'code' => 'CIASS',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2776,
                'cityName' => 'Middlesborough',
                'code' => 'GBMID',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2777,
                'cityName' => 'Soderkoping',
                'code' => 'SESOG',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2778,
                'cityName' => 'Stromstad',
                'code' => 'SESMD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2779,
                'cityName' => 'Loppa',
                'code' => 'NOLOP',
                'country' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2780,
                'cityName' => 'Gizan',
                'code' => 'SAGIZ',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2781,
                'cityName' => 'Anse-D\'Hainault',
                'code' => NULL,
                'country' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2782,
                'cityName' => 'Ukatura',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2783,
                'cityName' => 'Bandar Khomeini',
                'code' => 'IRBKM',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2784,
                'cityName' => 'Gros Cacouna',
                'code' => 'CAGCA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2785,
                'cityName' => 'Malemba-N\'Kulu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2786,
                'cityName' => 'Alcacer',
                'code' => 'ESAQE',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2787,
                'cityName' => 'Sriracha',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2788,
                'cityName' => 'Asalouyeh',
                'code' => NULL,
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2789,
                'cityName' => 'Mongalia',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2790,
                'cityName' => 'Mulifana',
                'code' => NULL,
                'country' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2791,
                'cityName' => 'Nowshahr',
                'code' => NULL,
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2792,
                'cityName' => 'Antsohily',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2793,
                'cityName' => 'Baie Comeau',
                'code' => 'CABCO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2794,
                'cityName' => 'Monument',
                'code' => 'USMEB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2795,
                'cityName' => 'St Johns',
                'code' => 'CASJF',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2796,
                'cityName' => 'Komatsujima',
                'code' => 'JPKOM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2797,
                'cityName' => 'Ras Al Khaimah',
                'code' => 'AERKT',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2798,
                'cityName' => 'Nagapattinam',
                'code' => 'INNPT',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2799,
                'cityName' => 'Al Khobar',
                'code' => 'SAALK',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2800,
                'cityName' => 'Izumisano',
                'code' => 'JPIZS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2801,
                'cityName' => 'Buyukcekmece',
                'code' => 'TRBCE',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2802,
                'cityName' => 'Batumi',
                'code' => 'GEBUS',
                'country' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2803,
                'cityName' => 'Poti',
                'code' => 'GEPTI',
                'country' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2804,
                'cityName' => 'Botany Bay',
                'code' => 'AUBTB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2805,
                'cityName' => 'Barquito',
                'code' => 'CLBAR',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2806,
                'cityName' => 'Coondapur',
                'code' => 'INCOO',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2807,
                'cityName' => 'Nagasaki',
                'code' => 'JPNGS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2808,
                'cityName' => 'Kem',
                'code' => 'RUKEM',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2809,
                'cityName' => 'Rio De Janeiro',
                'code' => 'BRRIO',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2810,
                'cityName' => 'St Georges',
                'code' => 'BMSGE',
                'country' => 'Bermuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2811,
                'cityName' => 'Tore',
                'code' => 'SETOE',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2812,
                'cityName' => 'Morro Redondo',
                'code' => 'MXMRE',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2813,
                'cityName' => 'Santa Cruz Del Sur',
                'code' => 'CUSCS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2814,
                'cityName' => 'Clarencia',
                'code' => 'CLCLR',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2815,
                'cityName' => 'Bahia De Las Minas',
                'code' => 'PAPBM',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2816,
                'cityName' => 'Adabiya',
                'code' => 'EGADA',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2817,
                'cityName' => 'Gocek',
                'code' => 'TRGCK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2818,
                'cityName' => 'Port Novo',
                'code' => 'BJPTN',
                'country' => 'Benin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2819,
                'cityName' => 'Thingeyri',
                'code' => 'ISTEY',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2820,
                'cityName' => 'Aarhus',
                'code' => NULL,
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2821,
                'cityName' => 'Tubigon',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2822,
                'cityName' => 'Goteborg',
                'code' => 'SEGOT',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2823,
                'cityName' => 'Dokese',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2824,
                'cityName' => 'Patreksfjordur - Hofn',
                'code' => 'ISPAT',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2825,
                'cityName' => 'Niafunke',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2826,
                'cityName' => 'Grand Lahou',
                'code' => 'CIGLU',
                'country' => 'Cote d\'Ivoire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2827,
                'cityName' => 'Watsi-Kengo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2828,
                'cityName' => 'Farosund',
                'code' => 'SEFSD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2829,
                'cityName' => 'Bantry Bay',
                'code' => 'IEBYT',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2830,
                'cityName' => 'Leksvik',
                'code' => 'NOLKV',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2831,
                'cityName' => 'Sandvik',
                'code' => 'SESAK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2832,
                'cityName' => 'Viana Do Castelo',
                'code' => 'PTVDC',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2833,
                'cityName' => 'Imabari',
                'code' => 'JPIMB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2834,
                'cityName' => 'Lord Howe Is',
                'code' => 'AULDH',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2835,
                'cityName' => 'Sao Francisco Do Sul',
                'code' => 'BRSFS',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2836,
                'cityName' => 'Karikal',
                'code' => 'INKRK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2837,
                'cityName' => 'Bacolod',
                'code' => 'PHBCD',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2838,
                'cityName' => 'Kochi',
                'code' => 'JPKCZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2839,
                'cityName' => 'Nampo',
                'code' => 'KPNAM',
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2840,
                'cityName' => 'Bakirkoy',
                'code' => 'TRBAK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2841,
                'cityName' => 'Stromma',
                'code' => 'FISTR',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2842,
                'cityName' => 'Cambay',
                'code' => 'INCAM',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2843,
                'cityName' => 'Yura',
                'code' => 'JPYUR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2844,
                'cityName' => 'Hamamatsu',
                'code' => 'JPHMM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2845,
                'cityName' => 'Lianyungang',
                'code' => 'CNLYG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2846,
                'cityName' => 'Rizhao',
                'code' => 'CNRZH',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2847,
                'cityName' => 'Paradip',
                'code' => 'INPRT',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2848,
                'cityName' => 'Jubail',
                'code' => 'SAJUB',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2849,
                'cityName' => 'Zuara',
                'code' => 'LYZUA',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2850,
                'cityName' => 'Zawia Terminal',
                'code' => 'LYZAW',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2851,
                'cityName' => 'Misurata',
                'code' => 'LYMRA',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2852,
                'cityName' => 'Sirte',
                'code' => 'LYSRT',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2853,
                'cityName' => 'Marsa El Brega',
                'code' => 'LYLMQ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2854,
                'cityName' => 'Zueitina',
                'code' => 'LYZUE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2855,
                'cityName' => 'Ras El Hilal',
                'code' => NULL,
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2856,
                'cityName' => 'La Ceiba / Maracaibo L',
                'code' => 'VELCV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2857,
                'cityName' => 'N\'Ta',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2858,
                'cityName' => 'Tan Tan',
                'code' => NULL,
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2859,
                'cityName' => 'Latchi',
                'code' => 'CYLAT',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2860,
                'cityName' => 'Telok Anson',
                'code' => 'MYTAN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2861,
                'cityName' => 'Ambarli',
                'code' => 'TRAMB',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2862,
                'cityName' => 'Bachaquero / Maracaibo L',
                'code' => 'VEBAV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2863,
                'cityName' => 'San Jose',
                'code' => 'CRSJO',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2864,
                'cityName' => 'Guanica Harbour',
                'code' => 'PRGUX',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2865,
                'cityName' => 'Port Saint Louis',
                'code' => 'MGPSL',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2866,
                'cityName' => 'Subic Bay',
                'code' => 'PHSFS',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2867,
                'cityName' => 'Thorold',
                'code' => 'CATHD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2868,
            'cityName' => 'Sept Iles (Seven Is.)',
                'code' => 'CASEI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2869,
                'cityName' => 'Milner Bay',
                'code' => 'AUMIB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2870,
                'cityName' => 'Algonac',
                'code' => 'USALG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2871,
                'cityName' => 'Vestvagoy',
                'code' => 'NOVVY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2872,
                'cityName' => 'Point Of Ayre',
                'code' => 'GBPTA',
                'country' => 'Isle of Man',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2873,
                'cityName' => 'Niteroi',
                'code' => 'BRNTR',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2874,
                'cityName' => 'Zeit Bay',
                'code' => 'EGZEI',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2875,
                'cityName' => 'Kokura',
                'code' => 'JPKOK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2876,
                'cityName' => 'Naoshima',
                'code' => 'JPNAS',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2877,
                'cityName' => 'Noere',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2878,
                'cityName' => 'Ducos',
                'code' => 'NCDUS',
                'country' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2879,
                'cityName' => 'El Real',
                'code' => 'PAELE',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2880,
                'cityName' => 'Pio V. Corpuz',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2881,
                'cityName' => 'Chongjin',
                'code' => 'KPCHO',
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2882,
                'cityName' => 'Keret',
                'code' => 'RUKER',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2883,
                'cityName' => 'Yanbo',
                'code' => 'SAYNB',
                'country' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2884,
                'cityName' => 'Palua',
                'code' => 'VEPLA',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2885,
                'cityName' => 'Hovic',
                'code' => 'VIHOC',
                'country' => 'United States Virgin Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2886,
                'cityName' => 'Da Nang',
                'code' => 'VNDAD',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2887,
                'cityName' => 'Kralendijk',
                'code' => 'ANKRA',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2888,
                'cityName' => 'Rasta',
                'code' => 'SERST',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2889,
                'cityName' => 'Kobe',
                'code' => 'JPUKB',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2890,
                'cityName' => 'Rijeka Bakar',
                'code' => 'HRRJK',
                'country' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2891,
                'cityName' => 'Port Dinorwic',
                'code' => 'GBPDI',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2892,
                'cityName' => 'Bushehr',
                'code' => 'IRBUZ',
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2893,
                'cityName' => 'Eagle River',
                'code' => 'USERQ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2894,
                'cityName' => 'Guantanamo Bay',
                'code' => 'CUGUB',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2895,
                'cityName' => 'Paramonga',
                'code' => 'PEPAM',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2896,
                'cityName' => 'La Have',
                'code' => 'CALHA',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2897,
                'cityName' => 'Kemaman',
                'code' => 'MYKEM',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2898,
                'cityName' => 'New Mangalore',
                'code' => 'INNML',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2899,
                'cityName' => 'Kunak',
                'code' => 'MYKUN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2900,
                'cityName' => 'Bajo Grande / Maracaibo L',
                'code' => 'VEBJV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2901,
                'cityName' => 'Doha',
                'code' => NULL,
                'country' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2902,
                'cityName' => 'Carleton',
                'code' => 'CACLT',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2903,
                'cityName' => 'Norwich',
                'code' => 'USNOC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2904,
                'cityName' => 'Silvertown',
                'code' => 'GBSVT',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2905,
                'cityName' => 'Blenheim',
                'code' => 'NZBHE',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2906,
                'cityName' => 'Kumlinge',
                'code' => 'FIKUM',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2907,
                'cityName' => 'Leticia',
                'code' => 'COLET',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2908,
                'cityName' => 'Tanjong Salirong',
                'code' => 'BNTAS',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2909,
                'cityName' => 'Porto Grande',
                'code' => 'CVPGR',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2910,
                'cityName' => 'Vassiliko',
                'code' => 'CYVAS',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2911,
                'cityName' => 'Dhekelia',
                'code' => 'CYDHK',
                'country' => 'Dhekelia and Akrotiri SBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2912,
                'cityName' => 'Hurghada',
                'code' => 'EGHRG',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2913,
                'cityName' => 'Ras Bahrgan',
                'code' => 'IRRBA',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2914,
                'cityName' => 'Khor Al Zubair',
                'code' => 'IQKAZ',
                'country' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2915,
                'cityName' => 'Amamioshima',
                'code' => 'JPASJ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2916,
                'cityName' => 'Tokachi',
                'code' => 'JPTOK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2917,
                'cityName' => 'Kompongsom',
                'code' => 'KHKOS',
                'country' => 'Cambodia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2918,
                'cityName' => 'Cayo Arcas Terminal',
                'code' => 'MXCAT',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2919,
                'cityName' => 'Penang',
                'code' => 'MYPEN',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2920,
                'cityName' => 'Nauru Island',
                'code' => 'NRINU',
                'country' => 'Nauru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2921,
                'cityName' => 'Buka',
                'code' => 'PGBUA',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2922,
                'cityName' => 'Bumpyo',
                'code' => 'KPREM',
                'country' => 'Dem People\'s Rep of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2923,
                'cityName' => 'Toyama',
                'code' => 'JPTOY',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2924,
                'cityName' => 'Parainen',
                'code' => 'FIPAR',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2925,
                'cityName' => 'Kosseir',
                'code' => 'EGKOS',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2926,
                'cityName' => 'Hunting',
                'code' => 'USHNT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2927,
                'cityName' => 'Loch Ewe',
                'code' => 'GBLHE',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2928,
                'cityName' => 'Port Of Turkmenbashi',
                'code' => NULL,
                'country' => 'Turkmenistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2929,
                'cityName' => 'Batempa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2930,
                'cityName' => 'Dunda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2931,
                'cityName' => 'Kashab',
                'code' => NULL,
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2932,
                'cityName' => 'Olympia',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2933,
                'cityName' => 'Musoko',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2934,
                'cityName' => 'Kashofu Ii',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2935,
                'cityName' => 'Roebourne',
                'code' => 'AURBU',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2936,
                'cityName' => 'Balao',
                'code' => 'ECEBL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2937,
                'cityName' => 'Bamberton',
                'code' => 'CABAM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2938,
                'cityName' => 'San Clemente',
                'code' => 'USXMO',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2939,
                'cityName' => 'Castle Island',
                'code' => 'USCAI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2940,
                'cityName' => 'Tammisaari',
                'code' => 'FITAI',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2941,
                'cityName' => 'Hualien',
                'code' => 'TWHUN',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2942,
                'cityName' => 'Moni Anchorage',
                'code' => 'CYMOI',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2943,
                'cityName' => 'Wadi Feiran',
                'code' => 'EGWAF',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2944,
                'cityName' => 'Rhodes',
                'code' => 'GRRHO',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2945,
                'cityName' => 'Cape Comorin',
                'code' => 'INCCN',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2946,
                'cityName' => 'Shahid Rajee',
                'code' => NULL,
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2947,
                'cityName' => 'Inchon',
                'code' => 'KRINC',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2948,
                'cityName' => 'Zouq',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2949,
                'cityName' => 'Tsoni',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2950,
                'cityName' => 'Malatapay',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2951,
                'cityName' => 'Leixoes',
                'code' => 'PTLEI',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2952,
                'cityName' => 'Main Brook',
                'code' => 'CAMBR',
                'country' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2953,
                'cityName' => 'Karskar',
                'code' => 'SEKAS',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2954,
                'cityName' => 'Nghe Tinh',
                'code' => 'VNNGT',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2955,
                'cityName' => 'Vishakhapatnam',
                'code' => 'INVTZ',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2956,
                'cityName' => 'Boleke',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2957,
                'cityName' => 'Mompono',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2958,
                'cityName' => 'Berori',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2959,
                'cityName' => 'Hoquiam-Aberdeen Apt',
                'code' => 'USHQM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2960,
                'cityName' => 'Destrehan',
                'code' => 'USNEW',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2961,
                'cityName' => 'Ellsworth',
                'code' => 'USEWT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2962,
                'cityName' => 'Portofino',
                'code' => 'ITPTF',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2963,
                'cityName' => 'Gravenchon',
                'code' => 'FRGRN',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2964,
            'cityName' => 'Dunkerque (Dunkirk)',
                'code' => 'FRDKK',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2965,
            'cityName' => 'Hemiksem (Hemixen)',
                'code' => 'BEHEX',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2966,
                'cityName' => 'Barry Dock',
                'code' => 'GBBAD',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2967,
                'cityName' => 'Shikama',
                'code' => 'JPSKM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2968,
                'cityName' => 'Sriracha',
                'code' => 'THSRI',
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2969,
                'cityName' => 'Oita',
                'code' => 'JPOIT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2970,
                'cityName' => 'Westernport',
                'code' => 'AUWEP',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2971,
                'cityName' => 'Mansonville',
                'code' => 'CAMAN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2972,
                'cityName' => 'Streator',
                'code' => 'USSTR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2973,
                'cityName' => 'Kings Mountain',
                'code' => 'USKIN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2974,
                'cityName' => 'Redcliff Bay',
                'code' => 'GBREB',
                'country' => 'U.K. of Great Britain & Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2975,
                'cityName' => 'Voltri',
                'code' => 'ITVTI',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2976,
                'cityName' => 'Doubtful Sound',
                'code' => 'NZDGO',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2977,
                'cityName' => 'Karachi',
                'code' => 'PKKHI',
                'country' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2978,
                'cityName' => 'Pietarsaari',
                'code' => 'FIPRS',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2979,
                'cityName' => 'Texel',
                'code' => 'NLTEX',
                'country' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2980,
                'cityName' => 'Vila De Conde',
                'code' => 'BRVDC',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2981,
                'cityName' => 'Mersa El Hamra',
                'code' => 'EGMAH',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2982,
                'cityName' => 'Hannan',
                'code' => 'JPHAN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2983,
                'cityName' => 'Etajima',
                'code' => 'JPETA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2984,
                'cityName' => 'Futajima',
                'code' => 'JPFUT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2985,
                'cityName' => 'Matsushima',
                'code' => 'JPMAT',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2986,
                'cityName' => 'Jambongan',
                'code' => 'MYJAM',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2987,
                'cityName' => 'Perim Island',
                'code' => 'YEPRM',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2988,
                'cityName' => 'Suape',
                'code' => 'BRSUA',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2989,
                'cityName' => 'Bahia De Sepetiba',
                'code' => 'BRSPB',
                'country' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2990,
                'cityName' => 'Zhanjiang',
                'code' => 'CNZHA',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2991,
                'cityName' => 'Suao',
                'code' => 'TWSUO',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2992,
                'cityName' => 'Zhoushan',
                'code' => 'CNZOS',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2993,
                'cityName' => 'Waverley Harbour',
                'code' => 'NZWAV',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2994,
                'cityName' => 'Okpo',
                'code' => 'KROKP',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2995,
                'cityName' => 'Mezen',
                'code' => 'RUMEZ',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2996,
                'cityName' => 'Port Isabel-Brownsville',
                'code' => 'USPIS',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2997,
                'cityName' => 'Matilde',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2998,
                'cityName' => 'Maleke',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2999,
                'cityName' => 'Ekolosongo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 3000,
                'cityName' => 'Sopot',
                'code' => 'PLSOP',
                'country' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'cityName' => 'Trial Bay',
                'code' => 'AUTRB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3002,
                'cityName' => 'Belledune',
                'code' => 'CABEL',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3003,
                'cityName' => 'Cape Hatteras',
                'code' => 'USCPH',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3004,
                'cityName' => 'Brekstad',
                'code' => 'NOBKD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3005,
                'cityName' => 'Londonderry',
                'code' => 'GBLDY',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3006,
                'cityName' => 'Enstedvaerkets Havn',
                'code' => 'DKENS',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 3007,
                'cityName' => 'St Vincent',
                'code' => 'VCSVD',
                'country' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3008,
                'cityName' => 'Gemikonagi',
                'code' => 'CYMPB',
                'country' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3009,
                'cityName' => 'Caleta Tagus',
                'code' => 'ECCAT',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 3010,
                'cityName' => 'Geisum Terminal',
                'code' => 'EGGEI',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3011,
                'cityName' => 'Yali Island',
                'code' => 'GRYLI',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3012,
                'cityName' => 'Zante',
                'code' => 'GRZAN',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 3013,
                'cityName' => 'Puerto Quetzal',
                'code' => 'GTPRQ',
                'country' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 3014,
                'cityName' => 'Redi',
                'code' => 'INRED',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 3015,
                'cityName' => 'Dos Bocas Terminal',
                'code' => 'MXDBT',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3016,
                'cityName' => 'Braz',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3017,
                'cityName' => 'Ilha Salia',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3018,
                'cityName' => 'Porto',
                'code' => 'PTOPO',
                'country' => 'Madeira Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3019,
                'cityName' => 'Yarimca',
                'code' => 'TRYAR',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3020,
                'cityName' => 'Taichung',
                'code' => 'TWTXG',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3021,
                'cityName' => 'Punta Cuchillo',
                'code' => 'VEPCU',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3022,
                'cityName' => 'Port Rashid',
                'code' => 'AEPRA',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 3023,
                'cityName' => 'Quanzhou',
                'code' => 'CNQZJ',
                'country' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 3024,
                'cityName' => 'Lusanga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 3025,
                'cityName' => 'Agio Theodoroi',
                'code' => 'GRAGT',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 3026,
                'cityName' => 'Muguza',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 3027,
                'cityName' => 'Kabwirwa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 3028,
                'cityName' => 'Anzali',
                'code' => NULL,
            'country' => 'Iran  (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 3029,
                'cityName' => 'Halytsynove',
                'code' => NULL,
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 3030,
                'cityName' => 'Ambavan\'i Sahavato',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 3031,
                'cityName' => 'Djoku-Punda',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 3032,
                'cityName' => 'Esbjerg',
                'code' => 'DKEBJ',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 3033,
                'cityName' => 'Kimpasa',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 3034,
                'cityName' => 'Nijniy Pyanj',
                'code' => NULL,
                'country' => 'Afghanistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 3035,
                'cityName' => 'Prachuap',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 3036,
                'cityName' => 'Supsa',
                'code' => NULL,
                'country' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 3037,
                'cityName' => 'Safaga',
                'code' => 'EGSGA',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 3038,
                'cityName' => 'Songo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 3039,
                'cityName' => 'Berenice',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 3040,
                'cityName' => 'Oki',
                'code' => 'JPOKI',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 3041,
            'cityName' => 'Ithaki (Ithaca)',
                'code' => 'GRITH',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 3042,
            'cityName' => 'Kymi (Kimi)',
                'code' => 'GRKIM',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 3043,
                'cityName' => 'Alger',
                'code' => 'DZALG',
                'country' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 3044,
                'cityName' => 'Cap Lopez',
                'code' => 'GACLZ',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 3045,
                'cityName' => 'Gamba',
                'code' => 'GAGAX',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 3046,
                'cityName' => 'Levkas',
                'code' => 'GRLEV',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 3047,
                'cityName' => 'Ekuata',
                'code' => 'GAEKU',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 3048,
                'cityName' => 'Dajla',
                'code' => NULL,
                'country' => 'Western Sahara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 3049,
                'cityName' => 'Ngqura',
                'code' => NULL,
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 3050,
                'cityName' => 'Slagenstangen',
                'code' => 'NOSLG',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 3051,
                'cityName' => 'Sejero',
                'code' => 'DKSJO',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 3052,
                'cityName' => 'Raoul Port',
                'code' => NULL,
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 3053,
                'cityName' => 'Lucina',
                'code' => 'GALUC',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 3054,
                'cityName' => 'Minamiise',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 3055,
                'cityName' => 'Masiakampy',
                'code' => NULL,
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 3056,
                'cityName' => 'Ust Dunaysk',
                'code' => 'UAUDY',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 3057,
                'cityName' => 'Colonia',
                'code' => 'UYCYR',
                'country' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 3058,
                'cityName' => 'Baniyas',
                'code' => 'SYBAN',
                'country' => 'Syrian Arab Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 3059,
                'cityName' => 'Bosenge',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 3060,
            'cityName' => 'Lavrion (Laurium)',
                'code' => 'GRLAV',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 3061,
                'cityName' => 'Belgorod-Dnestrovskiy',
                'code' => 'UABGD',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 3062,
                'cityName' => 'Brake',
                'code' => 'DEBKE',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 3063,
                'cityName' => 'N\'Giri',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 3064,
                'cityName' => 'Fabieza',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 3065,
                'cityName' => 'Clear',
                'code' => 'USCXI',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 3066,
                'cityName' => 'Kole',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 3067,
                'cityName' => 'Bwajingi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 3068,
                'cityName' => 'Nahr El Kalb',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 3069,
                'cityName' => 'Boburu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 3070,
                'cityName' => 'Kuzulu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 3071,
                'cityName' => 'Nyaroump',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 3072,
                'cityName' => 'El Maadiya Port',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 3073,
                'cityName' => 'Kilrush',
                'code' => 'IEKLR',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 3074,
                'cityName' => 'Nkora',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 3075,
                'cityName' => 'Shediac',
                'code' => 'CASHE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 3076,
                'cityName' => 'Al-Tour',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 3077,
                'cityName' => 'Salinetas',
                'code' => 'ESSAT',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 3078,
                'cityName' => 'Khoasrowabad',
                'code' => NULL,
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 3079,
                'cityName' => 'El Bware',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 3080,
                'cityName' => 'Nossi-Be',
                'code' => 'MGNOS',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 3081,
                'cityName' => 'Mona Island',
                'code' => 'USOIS',
                'country' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 3082,
                'cityName' => 'Silistra',
                'code' => 'BGSLS',
                'country' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 3083,
                'cityName' => 'Holmsund',
                'code' => 'SEHLD',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 3084,
                'cityName' => 'Dilovasi',
                'code' => NULL,
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 3085,
                'cityName' => 'Akdeniz',
                'code' => NULL,
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 3086,
                'cityName' => 'Quang Ninh',
                'code' => 'VNQNH',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 3087,
                'cityName' => 'Saigon',
                'code' => 'VNSGN',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 3088,
                'cityName' => 'Green Harbor',
                'code' => NULL,
                'country' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 3089,
                'cityName' => 'Cebu',
                'code' => 'PHCEB',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 3090,
                'cityName' => 'Hodeidah',
                'code' => 'YEHOD',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 3091,
                'cityName' => 'Kamtsha',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 3092,
                'cityName' => 'Tanjung Balai Karimun',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 3093,
                'cityName' => 'Butonyi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 3094,
                'cityName' => 'Kishenyabuhyo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 3095,
                'cityName' => 'Kagobe',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 3096,
                'cityName' => 'Mushange I & II',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 3097,
                'cityName' => 'Kamasha',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 3098,
                'cityName' => 'Mwiri',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 3099,
                'cityName' => 'Karhulo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 3100,
                'cityName' => 'Kirabo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 3101,
                'cityName' => 'Nsulo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 3102,
                'cityName' => 'Kaseke',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 3103,
                'cityName' => 'Kihara',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 3104,
                'cityName' => 'Yuzhnyy',
                'code' => 'UAYUZ',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 3105,
                'cityName' => 'Nikolayev',
                'code' => 'UANIK',
                'country' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 3106,
                'cityName' => 'Mazinga',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 3107,
                'cityName' => 'Tsu',
                'code' => 'JPTSU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 3108,
                'cityName' => 'El Sokhna',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 3109,
                'cityName' => 'Malela',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 3110,
                'cityName' => 'Makanza',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 3111,
                'cityName' => 'Kese',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 3112,
                'cityName' => 'Bec D\'Ambes',
                'code' => 'FRBEC',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 3113,
                'cityName' => 'La Mede',
                'code' => 'FRLMD',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 3114,
                'cityName' => 'Kilo 29',
                'code' => NULL,
                'country' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 3115,
                'cityName' => 'Bususulu',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 3116,
                'cityName' => 'Bokolo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 3117,
                'cityName' => 'Goose Bay',
                'code' => 'CAGOO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 3118,
                'cityName' => 'Gildeskal',
                'code' => 'NOGIL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 3119,
                'cityName' => 'Siglufjordur - Hofn',
                'code' => 'ISSIG',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 3120,
                'cityName' => 'Nuweibah',
                'code' => 'EGNUW',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 3121,
                'cityName' => 'Metar',
                'code' => NULL,
                'country' => 'Ethiopia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 3122,
                'cityName' => 'Tolanaro',
                'code' => 'MGFTU',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 3123,
                'cityName' => 'Goli Goli',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 3124,
                'cityName' => 'Oro Bay',
                'code' => 'PGROR',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 3125,
                'cityName' => 'Aneway Bay',
                'code' => 'PGANB',
                'country' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 3126,
                'cityName' => 'Gota',
                'code' => 'SEGOA',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 3127,
                'cityName' => 'Quang Ngai',
                'code' => 'VNXNG',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 3128,
                'cityName' => 'Valleyfield',
                'code' => 'CAVLF',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 3129,
                'cityName' => 'Tracy',
                'code' => 'CATRC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 3130,
                'cityName' => 'Port Canaveral',
                'code' => 'USPCA',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 3131,
                'cityName' => 'Nanoose',
                'code' => 'CANNE',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 3132,
                'cityName' => 'Ioco',
                'code' => 'CAIOC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 3133,
                'cityName' => 'Marieberg',
                'code' => 'SEMAR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 3134,
                'cityName' => 'Keflavikurkaupstadur',
                'code' => 'ISKEV',
                'country' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 3135,
            'cityName' => 'Brussel (Bruxelles)',
                'code' => 'BEBRU',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 3136,
            'cityName' => 'Antwerpen (Antwerp)',
                'code' => 'BEANR',
                'country' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 3137,
                'cityName' => 'Mishima-Kawanoe',
                'code' => 'JPKWN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 3138,
                'cityName' => 'Kenitra-Media',
                'code' => 'MANNA',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 3139,
                'cityName' => 'Unye',
                'code' => 'TRUNY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 3140,
                'cityName' => 'Suminoe',
                'code' => 'JPSUM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 3141,
                'cityName' => 'Tabangoa',
                'code' => 'PHTBG',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 3142,
                'cityName' => 'Rottnest Island',
                'code' => 'AURTS',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 3143,
                'cityName' => 'Bathurst Island',
                'code' => 'AUBRT',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 3144,
                'cityName' => 'King Bay',
                'code' => 'AUKIB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 3145,
                'cityName' => 'Frobisher Bay',
                'code' => 'CAFBB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 3146,
                'cityName' => 'Smith\'S Bluff',
                'code' => 'USSML',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 3147,
                'cityName' => 'Stamps',
                'code' => 'USSTM',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 3148,
                'cityName' => 'Valloy',
                'code' => 'NOVAL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 3149,
                'cityName' => 'Saltdal',
                'code' => 'NOSDL',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 3150,
                'cityName' => 'Otago Harbour',
                'code' => 'NZORR',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 3151,
                'cityName' => 'Jawaharlal Nehru',
                'code' => 'INNSA',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 3152,
                'cityName' => 'Mitajiri',
                'code' => 'JPNAN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 3153,
                'cityName' => 'Uchiura',
                'code' => 'JPUCR',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 3154,
                'cityName' => 'Wajima',
                'code' => 'JPWJM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 3155,
                'cityName' => 'Mina Saud',
                'code' => 'KWMIS',
                'country' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 3156,
                'cityName' => 'Gan Island',
                'code' => 'MVGAN',
                'country' => 'Maldives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 3157,
                'cityName' => 'Labuan Hadji',
                'code' => 'MYLBH',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 3158,
                'cityName' => 'Malacca',
                'code' => 'MYMKZ',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 3159,
                'cityName' => 'Thialis',
                'code' => 'FRTHI',
                'country' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 3160,
                'cityName' => 'Diliskelesi',
                'code' => 'TRDIL',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 3161,
                'cityName' => 'Ras Al Kalib',
                'code' => 'YERAK',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 3162,
                'cityName' => 'Isla De Pascua',
                'code' => 'CLIPC',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 3163,
                'cityName' => 'Tuticorin',
                'code' => 'INTUT',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 3164,
                'cityName' => 'Kokkola',
                'code' => 'FIKOK',
                'country' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 3165,
                'cityName' => 'Campbellton',
                'code' => 'CACOM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 3166,
                'cityName' => 'Mananara',
                'code' => 'MGWMR',
                'country' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 3167,
                'cityName' => 'Kyndby / Krostrup/',
                'code' => 'DKKBY',
                'country' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 3168,
                'cityName' => 'Skutskar',
                'code' => 'SESSR',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 3169,
                'cityName' => 'Fairport',
                'code' => 'USFPT',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 3170,
                'cityName' => 'Sena',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 3171,
            'cityName' => 'Lisboa (Lisbon)',
                'code' => 'PTLIS',
                'country' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 3172,
                'cityName' => 'Berre',
                'code' => 'FRBEE',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 3173,
                'cityName' => 'Falconara',
                'code' => 'ITFAL',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 3174,
                'cityName' => 'Puerto Bolivar',
                'code' => 'COPBO',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 3175,
                'cityName' => 'Tjilatjap',
                'code' => 'IDTJI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 3176,
                'cityName' => 'Manati',
                'code' => 'CUMNT',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 3177,
                'cityName' => 'Kalimnos Island',
                'code' => 'GRKMI',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 3178,
                'cityName' => 'Kish Island',
                'code' => NULL,
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 3179,
                'cityName' => 'La Plata',
                'code' => 'ARLPG',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 3180,
                'cityName' => 'Estero Bay',
                'code' => 'USESB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 3181,
                'cityName' => 'Strand',
                'code' => 'NOSTD',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 3182,
            'cityName' => 'Olbia (Terranova)',
                'code' => 'ITOLB',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 3183,
                'cityName' => 'Budge-Budge',
                'code' => 'INBUD',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 3184,
                'cityName' => 'Mizushima',
                'code' => 'JPMIZ',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 3185,
                'cityName' => 'Tagonoura',
                'code' => 'JPTGO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 3186,
                'cityName' => 'Abashiri',
                'code' => 'JPABA',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 3187,
                'cityName' => 'Ez Zahrani',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 3188,
                'cityName' => 'Pakera Point',
                'code' => NULL,
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 3189,
                'cityName' => 'Skua Venture',
                'code' => NULL,
                'country' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 3190,
                'cityName' => 'Point Galeota',
                'code' => 'TTPTG',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 3191,
                'cityName' => 'Sarkoy',
                'code' => 'TRSRK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 3192,
                'cityName' => 'Red Beach',
                'code' => 'VNRBE',
                'country' => 'Viet Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 3193,
                'cityName' => 'Caracasbaii',
                'code' => 'ANCRB',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 3194,
                'cityName' => 'San Antonio Este',
                'code' => 'ARSAE',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 3195,
                'cityName' => 'Min-Al-Fahal',
                'code' => 'OMMFH',
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 3196,
                'cityName' => 'Port Medway',
                'code' => 'CAPMW',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 3197,
                'cityName' => 'Come By Chance Bay',
                'code' => 'CACBC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 3198,
                'cityName' => 'Aughinish Island',
                'code' => 'IEAUG',
                'country' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 3199,
                'cityName' => 'Tagoloan Mis. Or',
                'code' => 'PHTGO',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 3200,
                'cityName' => 'Golcuk',
                'code' => 'TRGOK',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 3201,
                'cityName' => 'Endau',
                'code' => 'MYEND',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 3202,
                'cityName' => 'Iokanka',
                'code' => 'RUIOK',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 3203,
                'cityName' => 'Cozumel',
                'code' => 'MXCZM',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 3204,
                'cityName' => 'Port Dalrymple',
                'code' => 'AUPTD',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 3205,
                'cityName' => 'Cape Preston',
                'code' => 'AUCPN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 3206,
                'cityName' => 'Pointe Au Pic',
                'code' => 'CAPPC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 3207,
                'cityName' => 'Chester',
                'code' => 'CACST',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 3208,
                'cityName' => 'Gray',
                'code' => 'USGRG',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 3209,
                'cityName' => 'Corpus Christi',
                'code' => 'USCRP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 3210,
                'cityName' => 'Halvorshavn',
                'code' => 'NOHAN',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 3211,
                'cityName' => 'Nador',
                'code' => 'MANDR',
                'country' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 3212,
                'cityName' => 'Rotuma',
                'code' => 'FJRTA',
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 3213,
                'cityName' => 'Himeji',
                'code' => 'JPABO',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 3214,
                'cityName' => 'Hiki',
                'code' => 'JPHIK',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 3215,
                'cityName' => 'Vuda',
                'code' => 'FJVUD',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 3216,
                'cityName' => 'Sumenep',
                'code' => 'IDSUP',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 3217,
                'cityName' => 'Puerto Padre',
                'code' => 'CUPPA',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 3218,
                'cityName' => 'Kinwan',
                'code' => 'JPKIN',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 3219,
                'cityName' => 'Tahara',
                'code' => 'JPATM',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 3220,
                'cityName' => 'Kinuura',
                'code' => 'JPKNU',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 3221,
                'cityName' => 'Pohang',
                'code' => 'KRKPO',
                'country' => 'Republic of Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 3222,
                'cityName' => 'Tanjong Kling',
                'code' => 'MYTKL',
                'country' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 3223,
                'cityName' => 'Okhotsk',
                'code' => 'RUOHO',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 3224,
                'cityName' => 'Vostochniy',
                'code' => 'RUVYP',
                'country' => 'Russian Federation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 3225,
                'cityName' => 'Choiseul Bay',
                'code' => 'SBCHY',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 3226,
                'cityName' => 'Grand Turk Island',
                'code' => 'TCGDT',
                'country' => 'Turks and Caicos Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 3227,
                'cityName' => 'Point Lisas',
                'code' => 'TTPTS',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 3228,
                'cityName' => 'Ceyhan',
                'code' => 'TRCEY',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 3229,
                'cityName' => 'Puerto Ordaz',
                'code' => 'VEPZO',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 3230,
                'cityName' => 'Lumut',
                'code' => 'BNLUM',
                'country' => 'Brunei Darussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 3231,
                'cityName' => 'Cruz Grande',
                'code' => 'CLCGR',
                'country' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 3232,
                'cityName' => 'San Lorenzo / Maracaibo L',
                'code' => 'VESLV',
                'country' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 3233,
                'cityName' => 'Hamburg-Harburg',
                'code' => 'DEHBU',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 3234,
                'cityName' => 'Rosarito Terminal',
                'code' => 'MXRST',
                'country' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 3235,
                'cityName' => 'Shuaiba',
                'code' => 'KWMIB',
                'country' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 3236,
                'cityName' => 'Benoa',
                'code' => 'IDBOA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 3237,
                'cityName' => 'El Dekheila',
                'code' => 'EGEDK',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 3238,
                'cityName' => 'Tyne',
                'code' => 'GBTYN',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 3239,
                'cityName' => 'Alesund',
                'code' => 'NOAES',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 3240,
                'cityName' => 'Ichikikushikino',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 3241,
                'cityName' => 'Bagata',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 3242,
                'cityName' => 'San Jose Carangian',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 3243,
                'cityName' => 'Warnemunde',
                'code' => 'DEWAR',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 3244,
                'cityName' => 'Ramsey',
                'code' => 'GBRSY',
                'country' => 'Isle of Man',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 3245,
                'cityName' => 'Hamrawein',
                'code' => 'EGHAM',
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 3246,
                'cityName' => 'Suez Canal',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 3247,
                'cityName' => 'Santo Tomas De Castilla',
                'code' => NULL,
                'country' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 3248,
                'cityName' => 'Mumbai',
                'code' => NULL,
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 3249,
                'cityName' => 'Sirri Island',
                'code' => 'IRSXI',
            'country' => 'Iran (Islamic Republic of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 3250,
                'cityName' => 'Port Rhoades',
                'code' => 'JMPRH',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 3251,
                'cityName' => 'Higashikagawa',
                'code' => NULL,
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 3252,
                'cityName' => 'Port Of Oskemen',
                'code' => NULL,
                'country' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 3253,
                'cityName' => 'Shuwaikh',
                'code' => 'KWSWK',
                'country' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 3254,
                'cityName' => 'Ain El Mraisse _El Manara',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 3255,
                'cityName' => 'Ain El Mraisse _El Jisr',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 3256,
                'cityName' => 'Sangatta',
                'code' => 'IDTBA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 3257,
                'cityName' => 'Salinas',
                'code' => 'ECSNC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 3258,
                'cityName' => 'Manzanillo',
                'code' => 'DOMAN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 3259,
                'cityName' => 'Jardim',
                'code' => NULL,
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 3260,
                'cityName' => 'Payardi',
                'code' => 'PAPAY',
                'country' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 3261,
                'cityName' => 'Viru Harbour',
                'code' => 'SBVIU',
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 3262,
                'cityName' => 'Malloco Bay',
                'code' => NULL,
                'country' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 3263,
                'cityName' => 'Bartin',
                'code' => 'TRBTN',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 3264,
                'cityName' => 'Punta Quilla',
                'code' => 'ARPQU',
                'country' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 3265,
                'cityName' => 'Ras Sudr',
                'code' => NULL,
                'country' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 3266,
                'cityName' => 'Santa Fe',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 3267,
                'cityName' => 'Hagnaya',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 3268,
                'cityName' => 'Polambato',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 3269,
                'cityName' => 'Naval',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 3270,
                'cityName' => 'Bulan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 3271,
                'cityName' => 'Termiz',
                'code' => NULL,
                'country' => 'Uzbekistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 3272,
                'cityName' => 'Palanca Terminal',
                'code' => 'AOPAT',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 3273,
                'cityName' => 'Novo Redondo',
                'code' => 'AONOE',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 3274,
                'cityName' => 'Willemstad',
                'code' => 'ANWIL',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 3275,
                'cityName' => 'Philipsburg',
                'code' => 'ANPHI',
                'country' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 3276,
                'cityName' => 'Zurku Island',
                'code' => 'AEZUR',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 3277,
                'cityName' => 'Arzanah Island',
                'code' => 'AEARZ',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 3278,
                'cityName' => 'Das Island',
                'code' => 'AEDAS',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 3279,
                'cityName' => 'Abu Al Bukhoosh',
                'code' => 'AEABU',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 3280,
                'cityName' => 'Halul',
                'code' => 'QAHAL',
                'country' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 3281,
                'cityName' => 'Fateh Terminal',
                'code' => 'AEFAT',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 3282,
                'cityName' => 'Mubarek Terminal',
                'code' => 'AEMUB',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 3283,
                'cityName' => 'Jebel Ali',
                'code' => 'AEJEA',
                'country' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 3284,
                'cityName' => 'Port Huon',
                'code' => 'AUPHU',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 3285,
                'cityName' => 'Port Giles',
                'code' => 'AUPGI',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 3286,
                'cityName' => 'Cape Leeuwin',
                'code' => 'AUCLN',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 3287,
                'cityName' => 'Port Bonython',
                'code' => 'AUPBY',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 3288,
                'cityName' => 'Useless Loop',
                'code' => 'AUUSL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 3289,
                'cityName' => 'Exmouth',
                'code' => 'AUPEX',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 3290,
                'cityName' => 'Saladin Marine Terminal',
                'code' => 'AUSMT',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 3291,
                'cityName' => 'Varanus Island',
                'code' => 'AUVAR',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 3292,
                'cityName' => 'Abbot Point',
                'code' => 'AUABP',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 3293,
                'cityName' => 'Yampi',
                'code' => 'AUYAM',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 3294,
                'cityName' => 'Cape Flattery',
                'code' => 'AUCQP',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 3295,
                'cityName' => 'M\'Bya Terminal',
                'code' => 'GAMBY',
                'country' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 3296,
                'cityName' => 'Saida',
                'code' => NULL,
                'country' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 3297,
                'cityName' => 'Merca',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 3298,
                'cityName' => 'Guiuan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 3299,
                'cityName' => 'Thursday Island',
                'code' => 'AUTIS',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 3300,
                'cityName' => 'Port Stanvac',
                'code' => 'AUPST',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 3301,
                'cityName' => 'Newcastle',
                'code' => 'AUNTL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 3302,
                'cityName' => 'South West Rocks',
                'code' => 'AUSWR',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 3303,
                'cityName' => 'Port Walcott',
                'code' => 'AUPWL',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 3304,
                'cityName' => 'Spring Bay',
                'code' => 'AUSPB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 3305,
                'cityName' => 'Clarence River',
                'code' => 'AUCLR',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 3306,
                'cityName' => 'Derby',
                'code' => 'AUDRB',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 3307,
                'cityName' => 'Gove',
                'code' => 'AUGOV',
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 3308,
                'cityName' => 'Griffin Venture',
                'code' => NULL,
                'country' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 3309,
                'cityName' => 'Long Pond',
                'code' => 'CALOP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 3310,
                'cityName' => 'Fort Chimo',
                'code' => 'CAFCM',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 3311,
                'cityName' => 'Deception Bay',
                'code' => 'CADEB',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 3312,
                'cityName' => 'Shippegan',
                'code' => 'CASHP',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 3313,
                'cityName' => 'Harmac',
                'code' => 'CAHMC',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 3314,
                'cityName' => 'Woodfibre',
                'code' => 'CAWOO',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 3315,
                'cityName' => 'Duncan Bay',
                'code' => 'CADCN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 3316,
                'cityName' => 'Port Simpson',
                'code' => 'CAPSI',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 3317,
                'cityName' => 'Algona',
                'code' => 'USUBJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 3318,
                'cityName' => 'Hyde',
                'code' => 'USHYD',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 3319,
                'cityName' => 'Nanisivik',
                'code' => 'CANVK',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 3320,
                'cityName' => 'Port Alfred',
                'code' => 'CAPAF',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 3321,
                'cityName' => 'Pointe Noire',
                'code' => NULL,
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 3322,
                'cityName' => 'Clarkson',
                'code' => 'CACSN',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 3323,
                'cityName' => 'Parlier',
                'code' => 'USPAR',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 3324,
                'cityName' => 'Brooklyn',
                'code' => 'USBOY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 3325,
                'cityName' => 'Cape Fear',
                'code' => 'USCFN',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 3326,
                'cityName' => 'Sewells Point',
                'code' => 'USSWP',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 3327,
                'cityName' => 'Cape Charles',
                'code' => 'USCCJ',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 3328,
                'cityName' => 'Hampton-Newport News-Williamsb.',
                'code' => 'USPHF',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 3329,
                'cityName' => 'El Capitan',
                'code' => 'USELC',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 3330,
                'cityName' => 'Eden',
                'code' => 'USEDB',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 3331,
                'cityName' => 'Manchester',
                'code' => 'USMNY',
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 3332,
                'cityName' => 'Jacintoport',
                'code' => NULL,
                'country' => 'United States of America',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 3333,
                'cityName' => 'Vanylven',
                'code' => 'NOVAY',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 3334,
                'cityName' => 'Hitra',
                'code' => 'NOHIT',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 3335,
                'cityName' => 'Stjordal',
                'code' => 'NOSTJ',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 3336,
                'cityName' => 'Flora',
                'code' => 'NOFRO',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 3337,
            'cityName' => 'Fuglafirdi (Fuglefjord)',
                'code' => 'FOFUG',
                'country' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 3338,
                'cityName' => 'Haldia',
                'code' => 'INHAL',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 3339,
                'cityName' => 'Barton',
                'code' => 'GBBNM',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 3340,
                'cityName' => 'Islay',
                'code' => 'GBIYP',
                'country' => 'U.K. of Great Britain and Northern Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 3341,
                'cityName' => 'Onehunga',
                'code' => 'NZONE',
                'country' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 3342,
            'cityName' => 'Idhra (Hydra)',
                'code' => 'GRHYD',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 3343,
                'cityName' => 'Achladi',
                'code' => 'GRACL',
                'country' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 3344,
                'cityName' => 'Hitachi',
                'code' => 'JPHTC',
                'country' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 3345,
                'cityName' => 'Chiang Khong',
                'code' => NULL,
                'country' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 3346,
                'cityName' => 'Stormskaer',
                'code' => 'STSOK',
                'country' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 3347,
                'cityName' => 'Mina Salman',
                'code' => 'BHMIN',
                'country' => 'Bahrain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 3348,
                'cityName' => 'Meteghan',
                'code' => 'CAMET',
                'country' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 3349,
                'cityName' => 'Bremerhaven',
                'code' => NULL,
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 3350,
                'cityName' => 'Las Palmas',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 3351,
                'cityName' => 'Algeciras',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 3352,
                'cityName' => 'Cochin',
                'code' => 'INCOK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 3353,
                'cityName' => 'Navalakhi',
                'code' => 'INNAV',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 3354,
                'cityName' => 'Mandvi',
                'code' => 'INMDV',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 3355,
                'cityName' => 'Porbandar',
                'code' => 'INPBD',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 3356,
                'cityName' => 'Mormugao',
                'code' => 'INMRM',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 3357,
                'cityName' => 'Mangalore',
                'code' => 'INIXE',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 3358,
                'cityName' => 'Kakinada',
                'code' => 'INKAK',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 3359,
                'cityName' => 'Kandla',
                'code' => 'INIXY',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 3360,
                'cityName' => 'Salalah',
                'code' => 'OMRAY',
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 3361,
                'cityName' => 'Assab',
                'code' => NULL,
                'country' => 'Eritrea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 3362,
                'cityName' => 'Calcutta',
                'code' => 'INCCU',
                'country' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 3363,
                'cityName' => 'Waiyavu',
                'code' => NULL,
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 3364,
                'cityName' => 'Blackpoint',
                'code' => NULL,
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 3365,
                'cityName' => 'Port Sudan',
                'code' => NULL,
                'country' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 3366,
                'cityName' => 'Koro Jetty',
                'code' => NULL,
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 3367,
                'cityName' => 'Nabouwalu Jetty',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 3368,
                'cityName' => 'Tat Taung',
                'code' => NULL,
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 3369,
                'cityName' => 'Lenakel',
                'code' => NULL,
                'country' => 'Vanuatu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 3370,
                'cityName' => 'Taungup',
                'code' => NULL,
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 3371,
                'cityName' => 'Kyaukpyu',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 3372,
                'cityName' => 'Gwa',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 3373,
                'cityName' => 'Duqm',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 3374,
                'cityName' => 'Esmeraldas',
                'code' => 'ECESM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 3375,
                'cityName' => 'Bahia Honda',
                'code' => 'CUBHO',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 3376,
                'cityName' => 'Cabanas',
                'code' => 'CUCAB',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 3377,
                'cityName' => 'Loheiya',
                'code' => 'YELOH',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 3378,
                'cityName' => 'Massawa',
                'code' => NULL,
                'country' => 'Eritrea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 3379,
                'cityName' => 'Luanda',
                'code' => 'AOLAD',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 3380,
                'cityName' => 'Colombo',
                'code' => 'LKCMB',
                'country' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 3381,
                'cityName' => 'Nabukeru',
                'code' => NULL,
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 3382,
                'cityName' => 'Yangon',
                'code' => 'MMRGN',
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 3383,
                'cityName' => 'Port Elizabeth',
                'code' => 'ZAPLZ',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 3384,
                'cityName' => 'Mongla',
                'code' => 'BDMGL',
                'country' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 3385,
                'cityName' => 'Culasi',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 3386,
                'cityName' => 'Tacloban',
                'code' => 'PHTAC',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 3387,
                'cityName' => 'Ormoc',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 3388,
                'cityName' => 'Isabel',
                'code' => 'PHISL',
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 3389,
                'cityName' => 'Bantayan',
                'code' => NULL,
                'country' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 3390,
                'cityName' => 'Sihanoukville',
                'code' => 'KHSIH',
                'country' => 'Cambodia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 3391,
                'cityName' => 'San Pedro De Macoris',
                'code' => 'DOSPM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 3392,
                'cityName' => 'Mukalla',
                'code' => 'YEMKX',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 3393,
                'cityName' => 'Nishtun',
                'code' => 'YENIS',
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 3394,
                'cityName' => 'El Ma\'an',
                'code' => NULL,
                'country' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 3395,
                'cityName' => 'Kiunga',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 3396,
                'cityName' => 'Lamu',
                'code' => 'KELAU',
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 3397,
                'cityName' => 'Malindi',
                'code' => 'KEMYD',
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 3398,
                'cityName' => 'Kilifi',
                'code' => NULL,
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 3399,
                'cityName' => 'Shimoni',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 3400,
                'cityName' => 'Kisumu',
                'code' => NULL,
                'country' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 3401,
                'cityName' => 'Ibo',
                'code' => 'MZIBO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 3402,
                'cityName' => 'Pemba',
                'code' => 'MZPOL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 3403,
                'cityName' => 'Memba',
                'code' => 'MZMEM',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 3404,
                'cityName' => 'Mocambique',
                'code' => 'MZMZQ',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 3405,
                'cityName' => 'Angoche',
                'code' => 'MZANO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 3406,
                'cityName' => 'Moma',
                'code' => 'MZMMW',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 3407,
                'cityName' => 'Quelimane',
                'code' => 'MZUEL',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 3408,
                'cityName' => 'Nacala',
                'code' => 'MZMNC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 3409,
                'cityName' => 'Pointe Noire',
                'code' => 'CGPNR',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 3410,
                'cityName' => 'Santa Lucia',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 3411,
                'cityName' => 'Ash Shihr',
                'code' => NULL,
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 3412,
            'cityName' => 'Ras Isa (SBM)',
                'code' => NULL,
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 3413,
                'cityName' => 'Pastelillo',
                'code' => 'CUPAS',
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 3414,
                'cityName' => 'Preston',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 3415,
                'cityName' => 'Punta Gorda',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 3416,
                'cityName' => 'Palenque',
                'code' => 'DOPAL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 3417,
                'cityName' => 'Chittagong',
                'code' => 'BDCGP',
                'country' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 3418,
                'cityName' => 'Porto Belo',
                'code' => 'MZPBE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 3419,
                'cityName' => 'Chinde',
                'code' => 'MZINE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 3420,
                'cityName' => 'Beira',
                'code' => 'MZBEW',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 3421,
                'cityName' => 'Inhambane',
                'code' => 'MZINH',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 3422,
                'cityName' => 'Walvis Bay',
                'code' => 'NAWVB',
                'country' => 'Namibia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 3423,
                'cityName' => 'Maputo',
                'code' => 'MZMPM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 3424,
                'cityName' => 'Bela Vista',
                'code' => 'MZBEL',
                'country' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 3425,
                'cityName' => 'Djeno Terminal',
                'code' => 'CGDJE',
                'country' => 'Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 3426,
                'cityName' => 'Port Vila',
                'code' => 'VUVLI',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 3427,
                'cityName' => 'Forari Bay',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 3428,
                'cityName' => 'Port Sandwich',
                'code' => 'VUPSA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 3429,
                'cityName' => 'Santo',
                'code' => 'VUSAN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 3430,
                'cityName' => 'Lautoka',
                'code' => 'FJLTK',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 3431,
                'cityName' => 'Suva',
                'code' => 'FJSUV',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 3432,
                'cityName' => 'Vatia',
                'code' => 'FJVAT',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 3433,
                'cityName' => 'Levuka',
                'code' => 'FJLEV',
                'country' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 3434,
                'cityName' => 'Malau',
                'code' => 'FJMAL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 3435,
                'cityName' => 'Lambasa',
                'code' => 'FJLBS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 3436,
                'cityName' => 'Savusavu',
                'code' => 'FJSUV',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 3437,
                'cityName' => 'Abu Kammash',
                'code' => 'LYABK',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 3438,
                'cityName' => 'Homs',
                'code' => NULL,
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 3439,
                'cityName' => 'Al Khoms',
                'code' => NULL,
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 3440,
                'cityName' => 'Es Sider',
                'code' => 'LYESI',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 3441,
                'cityName' => 'Derna',
                'code' => 'LYDNF',
                'country' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 3442,
                'cityName' => 'Tobruq',
                'code' => 'LYTOB',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 3443,
                'cityName' => 'Buenaventura',
                'code' => 'COBUN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 3444,
                'cityName' => 'Turbo',
                'code' => 'COTRB',
                'country' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 3445,
                'cityName' => 'Mamonal',
                'code' => 'COMAM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 3446,
                'cityName' => 'Litzlitz',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 3447,
                'cityName' => 'Loltong',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 3448,
                'cityName' => 'Sola',
                'code' => NULL,
                'country' => 'Vanuatu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 3449,
                'cityName' => 'Anelgaohat',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 3450,
                'cityName' => 'Thandwe',
                'code' => NULL,
                'country' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 3451,
                'cityName' => 'Masirah',
                'code' => NULL,
                'country' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 3452,
                'cityName' => 'Sur',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 3453,
                'cityName' => 'Istanbul',
                'code' => 'TRIST',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 3454,
                'cityName' => 'Sabang',
                'code' => 'IDSBG',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 3455,
                'cityName' => 'Blang Lancang',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 3456,
                'cityName' => 'Kuala Langsa',
                'code' => 'IDKUA',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 3457,
                'cityName' => 'Bengkalis',
                'code' => 'IDBKI',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 3458,
                'cityName' => 'Tanjung Pinang',
                'code' => 'IDTNJ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 3459,
                'cityName' => 'Kidjang',
                'code' => 'IDKID',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 3460,
                'cityName' => 'Dabo',
                'code' => 'IDDAS',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 3461,
                'cityName' => 'Muntok',
                'code' => 'IDMUO',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 3462,
                'cityName' => 'Semangka Bay',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 3463,
                'cityName' => 'Sibolga',
                'code' => 'IDSLG',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 3464,
                'cityName' => 'Susoh',
                'code' => 'IDSUS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 3465,
                'cityName' => 'Meulaboh',
                'code' => 'IDMEQ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 3466,
                'cityName' => 'Cilacap',
                'code' => 'IDCXP',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 3467,
                'cityName' => 'Rembang',
                'code' => 'IDREM',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 3468,
                'cityName' => 'Kayangan',
                'code' => NULL,
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 3469,
                'cityName' => 'Biak',
                'code' => 'IDBIK',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 3470,
                'cityName' => 'Ternate',
                'code' => 'IDTTE',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 3471,
                'cityName' => 'Namlea',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 3472,
                'cityName' => 'Malili',
                'code' => 'IDMLI',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 3473,
                'cityName' => 'Tubang',
                'code' => 'IDTBN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 3474,
                'cityName' => 'Samarinda',
                'code' => 'IDSRI',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 3475,
                'cityName' => 'Sampit',
                'code' => 'IDSMQ',
                'country' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 3476,
                'cityName' => 'Nouakchott',
                'code' => 'MRNKC',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 3477,
                'cityName' => 'Puerto Bolivar',
                'code' => 'ECPBO',
                'country' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 3478,
                'cityName' => 'Boma',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 3479,
                'cityName' => 'Banana',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 3480,
                'cityName' => 'Bukoba',
                'code' => NULL,
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 3481,
                'cityName' => 'Port of Scarborough',
                'code' => 'PATT',
                'country' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 3482,
                'cityName' => 'Macabi',
                'code' => NULL,
                'country' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 3483,
                'cityName' => 'Palo Alto',
                'code' => 'CUPAL',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 3484,
                'cityName' => 'Santo Domingo',
                'code' => 'DOSDQ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 3485,
                'cityName' => 'Puerto Viejo De Azua',
                'code' => 'DOPVA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 3486,
                'cityName' => 'Cabo Rojo',
                'code' => 'DOCBJ',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 3487,
                'cityName' => 'San Juan',
                'code' => 'PESJA',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 3488,
                'cityName' => 'Samanco',
                'code' => 'PESAM',
                'country' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 3489,
                'cityName' => 'Eten',
                'code' => 'PEEEN',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 3490,
                'cityName' => 'Negritos',
                'code' => 'PENGS',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 3491,
                'cityName' => 'Woodbridge Bay Port',
                'code' => 'DMRSU',
                'country' => 'Dominica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 3492,
                'cityName' => 'Rocky Point',
                'code' => 'JMROP',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 3493,
                'cityName' => 'Lucea',
                'code' => 'JMLUC',
                'country' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 3494,
                'cityName' => 'Mwanza',
                'code' => NULL,
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 3495,
                'cityName' => 'Port Royal',
                'code' => 'JMPRO',
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 3496,
                'cityName' => 'Djibouti',
                'code' => NULL,
                'country' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 3497,
                'cityName' => 'Balhaf',
                'code' => NULL,
                'country' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 3498,
                'cityName' => 'Kribi',
                'code' => 'CMKBI',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 3499,
                'cityName' => 'Pennington',
                'code' => 'NGPEN',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 3500,
                'cityName' => 'Antan Terminal',
                'code' => 'NGANT',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('geonode_cities')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'cityName' => 'Sapele',
                'code' => 'NGSPL',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3502,
                'cityName' => 'Bonny',
                'code' => 'NGBON',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3503,
                'cityName' => 'Brass',
                'code' => 'NGBRA',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3504,
                'cityName' => 'Calabar',
                'code' => 'NGCBQ',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3505,
                'cityName' => 'Warri',
                'code' => 'NGWAR',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3506,
                'cityName' => 'Que Oboe / Eket',
                'code' => 'NGOBO',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 3507,
                'cityName' => 'Kole Terminal',
                'code' => 'CMKOL',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3508,
                'cityName' => 'Moudi Terminal',
                'code' => 'CMMOU',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3509,
                'cityName' => 'Victoria',
                'code' => 'CMVCC',
                'country' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 3510,
                'cityName' => 'Lagos',
                'code' => 'NGLOS',
                'country' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3511,
                'cityName' => 'Dar Es Salaam',
                'code' => 'TZDAR',
                'country' => 'United Republic of Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3512,
                'cityName' => 'Matadi',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 3513,
                'cityName' => 'Lobito',
                'code' => 'AOLOB',
                'country' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 3514,
                'cityName' => 'Durban',
                'code' => 'ZADUR',
                'country' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 3515,
                'cityName' => 'Kombo',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3516,
                'cityName' => 'Ingende',
                'code' => NULL,
                'country' => 'Democratic Republic of the Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3517,
                'cityName' => 'Gao',
                'code' => NULL,
                'country' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3518,
                'cityName' => 'Weno',
                'code' => ' ',
            'country' => 'Micronesia (Federated States of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3519,
                'cityName' => 'Tomil',
                'code' => ' ',
            'country' => 'Micronesia (Federated States of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3520,
                'cityName' => 'Okat',
                'code' => ' ',
            'country' => 'Micronesia (Federated States of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3521,
                'cityName' => 'Utwa Small Vessel',
                'code' => ' ',
            'country' => 'Micronesia (Federated States of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3522,
                'cityName' => 'Pohnpei',
                'code' => ' ',
            'country' => 'Micronesia (Federated States of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}