<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cosplayer;

class CosplayerSeeder extends Seeder
{
    public function run()
    {
        $cosplayer = [
            [
                'name' => 'Khaliq',
                'email' => 'khaliq@gmail.com',
                'phone' => '082683670281',
                'address' => 'banjarmasin',
            ],
            [
                'name' => 'Rizky',
                'email' => 'rizky@gmail.com',
                'phone' => '082683670281',
                'address' => 'kayutangi',
            ],
            [
                'name' => 'Rizal',
                'email' => 'rizal@gmail.com',
                'phone' => '082683670281',
                'address' => 'cemara',
            ]
        ];
        foreach ($cosplayer as $item) {
            Cosplayer::create($item);
        }
    }
}