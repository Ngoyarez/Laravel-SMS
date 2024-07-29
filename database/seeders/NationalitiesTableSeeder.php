<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nationalities')->delete();
        
        \DB::table('nationalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Afghan',
                'created_at' => '2024-06-24 10:39:56',
                'updated_at' => '2024-06-24 10:39:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albanian',
                'created_at' => '2024-06-24 10:39:56',
                'updated_at' => '2024-06-24 10:39:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Algerian',
                'created_at' => '2024-06-24 10:39:56',
                'updated_at' => '2024-06-24 10:39:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'American',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Andorran',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Angolan',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Antiguans',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Argentinean',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Armenian',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Australian',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Austrian',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Azerbaijani',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bahamian',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Bahraini',
                'created_at' => '2024-06-24 10:39:57',
                'updated_at' => '2024-06-24 10:39:57',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bangladeshi',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Barbadian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Barbudans',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Batswana',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Belarusian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Belgian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Belizean',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Beninese',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Bhutanese',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Bolivian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Bosnian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Brazilian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'British',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bruneian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Bulgarian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Burkinabe',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Burmese',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Burundian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Cambodian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Cameroonian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Canadian',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Cape Verdean',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Central African',
                'created_at' => '2024-06-24 10:39:58',
                'updated_at' => '2024-06-24 10:39:58',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Chadian',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Chilean',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Chinese',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Colombian',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Comoran',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Congolese',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Costa Rican',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Croatian',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Cuban',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Cypriot',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Czech',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Danish',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Djibouti',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Dominican',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Dutch',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'East Timorese',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Ecuadorean',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Egyptian',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Emirian',
                'created_at' => '2024-06-24 10:39:59',
                'updated_at' => '2024-06-24 10:39:59',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Equatorial Guinean',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Eritrean',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Estonian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Ethiopian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Fijian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Filipino',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Finnish',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'French',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Gabonese',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Gambian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Georgian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'German',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ghanaian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Greek',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Grenadian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Guatemalan',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Guinea-Bissauan',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Guinean',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Guyanese',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Haitian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Herzegovinian',
                'created_at' => '2024-06-24 10:40:00',
                'updated_at' => '2024-06-24 10:40:00',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Honduran',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Hungarian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'I-Kiribati',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Icelander',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Indian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Indonesian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Iranian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Iraqi',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Irish',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Israeli',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Italian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Ivorian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Jamaican',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Japanese',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Jordanian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Kazakhstani',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Kenyan',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Kittian and Nevisian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Kuwaiti',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Kyrgyz',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Laotian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Latvian',
                'created_at' => '2024-06-24 10:40:01',
                'updated_at' => '2024-06-24 10:40:01',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Lebanese',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Liberian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Libyan',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Liechtensteiner',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Lithuanian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Luxembourger',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Macedonian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Malagasy',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Malawian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Malaysian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Maldivan',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Malian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Maltese',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Marshallese',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Mauritanian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Mauritian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Mexican',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Micronesian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Moldovan',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Monacan',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Mongolian',
                'created_at' => '2024-06-24 10:40:02',
                'updated_at' => '2024-06-24 10:40:02',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Moroccan',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Mosotho',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Motswana',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Mozambican',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Namibian',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Nauruan',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Nepalese',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'New Zealander',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Nicaraguan',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Nigerian',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Nigerien',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'North Korean',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Northern Irish',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Norwegian',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Omani',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Pakistani',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Palauan',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Panamanian',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Papua New Guinean',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Paraguayan',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Peruvian',
                'created_at' => '2024-06-24 10:40:03',
                'updated_at' => '2024-06-24 10:40:03',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Polish',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Portuguese',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Qatari',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Romanian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Russian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Rwandan',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Saint Lucian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Salvadoran',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Samoan',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'San Marinese',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Sao Tomean',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Saudi',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Scottish',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Senegalese',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Serbian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Seychellois',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Sierra Leonean',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Singaporean',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Slovakian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Slovenian',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Solomon Islander',
                'created_at' => '2024-06-24 10:40:04',
                'updated_at' => '2024-06-24 10:40:04',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Somali',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'South African',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'South Korean',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Spanish',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Sri Lankan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Sudanese',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Surinamer',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Swazi',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Swedish',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Swiss',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Syrian',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Taiwanese',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Tajik',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Tanzanian',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Thai',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Togolese',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Tongan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Trinidadian/Tobagonian',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Tunisian',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Turkish',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Tuvaluan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Ugandan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Ukrainian',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Uruguayan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Uzbekistani',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Venezuelan',
                'created_at' => '2024-06-24 10:40:05',
                'updated_at' => '2024-06-24 10:40:05',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Vietnamese',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Welsh',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Yemenite',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Zambian',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Zimbabwean',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
        ));
        
        
    }
}