<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['name' => 'CGV', 'diachi' => 'Vivo City', 'image' => 'cgv.jpeg', 'background' => 'bcgv.jpg'],
            ['name' => 'BHD', 'diachi' => 'Bitexco', 'image' => 'bhd.png', 'background' => 'bbhd.jpg'],
            ['name' => 'Cinestar', 'diachi' => 'Quốc Thanh', 'image' => 'cinesta.png', 'background' => 'bcinestar.jpg'],
            ['name' => 'Galaxy', 'diachi' => 'Nguyễn Du', 'image' => 'galaxy.png', 'background' => 'bgalaxy.jpg']
        ];

        Cinema::insert($data);
    }
}
