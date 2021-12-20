<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
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
            ['ngay' => '01-01-2021', 'suatChieu' => '09:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'CGV'],
            ['ngay' => '01-01-2021', 'suatChieu' => '16:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '10:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '15:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'BHD'],
            ['ngay' => '04-01-2021', 'suatChieu' => '08:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '12:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '22:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'Cinestar'],
            ['ngay' => '06-01-2021', 'suatChieu' => '15:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '17:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Tiệc trăng máu', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '08:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '11:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '14:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '17:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'Galaxy'],
            ['ngay' => '06-01-2021', 'suatChieu' => '10:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'Galaxy'],
            ['ngay' => '03-01-2021', 'suatChieu' => '18:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '20:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '09:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '14:25', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '12:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Liên quân siêu thú', 'cumRap' => 'CGV'],
            ['ngay' => '01-01-2021', 'suatChieu' => '10:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'CGV'],
            ['ngay' => '01-01-2021', 'suatChieu' => '19:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '13:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '02-01-2021', 'suatChieu' => '16:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '02-01-2021', 'suatChieu' => '18:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '04-01-2021', 'suatChieu' => '11:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '04-01-2021', 'suatChieu' => '17:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '08:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '11:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '13:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '17:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'Cinestar'],
            ['ngay' => '02-01-2021', 'suatChieu' => '18:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'BHD'],
            ['ngay' => '02-01-2021', 'suatChieu' => '20:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Phù thủy, Phù thủy', 'cumRap' => 'BHD'],
            ['ngay' => '07-01-2021', 'suatChieu' => '07:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '09:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '12:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '20:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '07:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '09:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '12:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '20:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'BHD'],
            ['ngay' => '06-01-2021', 'suatChieu' => '07:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '06-01-2021', 'suatChieu' => '09:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '07-01-2021', 'suatChieu' => '12:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '07-01-2021', 'suatChieu' => '20:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kiếm khách', 'cumRap' => 'Cinestar'],
            ['ngay' => '02-01-2021', 'suatChieu' => '09:55', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '12:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '15:25', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '17:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '21:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'CGV'],
            ['ngay' => '05-01-2021', 'suatChieu' => '15:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '20:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'Cinestar'],
            ['ngay' => '08-01-2021', 'suatChieu' => '07:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'BHD'],
            ['ngay' => '08-01-2021', 'suatChieu' => '10:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'BHD'],
            ['ngay' => '08-01-2021', 'suatChieu' => '17:35', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Sài Gòn trong cơn mưa', 'cumRap' => 'BHD'],
            ['ngay' => '01-01-2021', 'suatChieu' => '15:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '01-01-2021', 'suatChieu' => '18:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '01-01-2021', 'suatChieu' => '22:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '02-01-2021', 'suatChieu' => '15:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '02-01-2021', 'suatChieu' => '08:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '02-01-2021', 'suatChieu' => '12:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Galaxy'],
            ['ngay' => '04-01-2021', 'suatChieu' => '15:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Cinestar'],
            ['ngay' => '04-01-2021', 'suatChieu' => '18:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Cinestar'],
            ['ngay' => '04-01-2021', 'suatChieu' => '22:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Fate/Stay Night', 'cumRap' => 'Cinestar'],
            ['ngay' => '08-01-2021', 'suatChieu' => '11:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'BHD'],
            ['ngay' => '08-01-2021', 'suatChieu' => '20:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'BHD'],
            ['ngay' => '07-01-2021', 'suatChieu' => '08:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'CGV'],
            ['ngay' => '07-01-2021', 'suatChieu' => '13:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'CGV'],
            ['ngay' => '05-01-2021', 'suatChieu' => '15:25', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '18:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'Cinestar'],
            ['ngay' => '07-01-2021', 'suatChieu' => '16:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'CGV'],
            ['ngay' => '07-01-2021', 'suatChieu' => '20:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thanh âm trong mắt em', 'cumRap' => 'CGV'],
            ['ngay' => '05-01-2021', 'suatChieu' => '10:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '14:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '19:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'Cinestar'],
            ['ngay' => '06-01-2021', 'suatChieu' => '09:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'BHD'],
            ['ngay' => '06-01-2021', 'suatChieu' => '17:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'BHD'],
            ['ngay' => '07-01-2021', 'suatChieu' => '10:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'BHD'],
            ['ngay' => '07-01-2021', 'suatChieu' => '18:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'BHD'],
            ['ngay' => '10-01-2021', 'suatChieu' => '11:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'Galaxy'],
            ['ngay' => '10-01-2021', 'suatChieu' => '20:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Thang máy', 'cumRap' => 'Galaxy'],
            ['ngay' => '03-01-2021', 'suatChieu' => '20:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '12:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '16:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'CGV'],
            ['ngay' => '01-01-2021', 'suatChieu' => '13:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'Galaxy'],
            ['ngay' => '02-01-2021', 'suatChieu' => '15:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'Cinestar'],
            ['ngay' => '02-01-2021', 'suatChieu' => '22:00', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ranh giới quỷ', 'cumRap' => 'Cinestar'],
            ['ngay' => '09-01-2021', 'suatChieu' => '09:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'CGV'],
            ['ngay' => '09-01-2021', 'suatChieu' => '12:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'CGV'],
            ['ngay' => '09-01-2021', 'suatChieu' => '19:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'CGV'],
            ['ngay' => '08-01-2021', 'suatChieu' => '13:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Cinestar'],
            ['ngay' => '08-01-2021', 'suatChieu' => '15:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Cinestar'],
            ['ngay' => '01-01-2021', 'suatChieu' => '19:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Cinestar'],
            ['ngay' => '06-01-2021', 'suatChieu' => '08:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Galaxy'],
            ['ngay' => '06-01-2021', 'suatChieu' => '18:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '13:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '19:35', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'Galaxy'],
            ['ngay' => '05-01-2021', 'suatChieu' => '10:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '20:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Những kẻ vô cảm', 'cumRap' => 'BHD'],
            ['ngay' => '03-01-2021', 'suatChieu' => '12:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'BHD'],
            ['ngay' => '03-01-2021', 'suatChieu' => '16:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'BHD'],
            ['ngay' => '03-01-2021', 'suatChieu' => '20:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'BHD'],
            ['ngay' => '03-01-2021', 'suatChieu' => '08:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'Cinestar'],
            ['ngay' => '03-01-2021', 'suatChieu' => '20:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'Cinestar'],
            ['ngay' => '04-01-2021', 'suatChieu' => '08:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '10:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '14:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'CGV'],
            ['ngay' => '04-01-2021', 'suatChieu' => '18:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'cumRap' => 'CGV'],
            ['ngay' => '07-01-2021', 'suatChieu' => '08:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '15:25', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Galaxy'],
            ['ngay' => '07-01-2021', 'suatChieu' => '19:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Galaxy'],
            ['ngay' => '09-01-2021', 'suatChieu' => '10:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Cinestar'],
            ['ngay' => '09-01-2021', 'suatChieu' => '14:55', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Cinestar'],
            ['ngay' => '09-01-2021', 'suatChieu' => '19:25', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Kẻ săn mộ', 'cumRap' => 'Cinestar'],
            ['ngay' => '01-01-2021', 'suatChieu' => '10:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'BHD'],
            ['ngay' => '01-01-2021', 'suatChieu' => '16:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'BHD'],
            ['ngay' => '01-01-2021', 'suatChieu' => '13:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'Galaxy'],
            ['ngay' => '01-01-2021', 'suatChieu' => '18:55', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'Galaxy'],
            ['ngay' => '02-01-2021', 'suatChieu' => '08:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '11:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '15:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'CGV'],
            ['ngay' => '02-01-2021', 'suatChieu' => '19:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'CGV'],
            ['ngay' => '03-01-2021', 'suatChieu' => '09:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'Cinestar'],
            ['ngay' => '03-01-2021', 'suatChieu' => '12:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'Cinestar'],
            ['ngay' => '03-01-2021', 'suatChieu' => '17:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Free Guy', 'cumRap' => 'Cinestar'],
            ['ngay' => '05-01-2021', 'suatChieu' => '10:15', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '13:45', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '16:10', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'BHD'],
            ['ngay' => '05-01-2021', 'suatChieu' => '21:40', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'BHD'],
            ['ngay' => '08-01-2021', 'suatChieu' => '08:50', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'Galaxy'],
            ['ngay' => '08-01-2021', 'suatChieu' => '12:20', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'Galaxy'],
            ['ngay' => '08-01-2021', 'suatChieu' => '17:30', 'choNgoi' => 'A1:1;A2:1;A3:1;A4:1;A5:1;A6:1;A7:1;A8:1;B1:1;B2:1;B3:1;B4:1;B5:1;B6:1;B7:1;B8:1;C1:1;C2:1;C3:1;C4:1;C5:1;C6:1;C7:1;C8:1', 'tenPhim' => 'Chị mười ba', 'cumRap' => 'Galaxy']
        ];
        Schedule::insert($data);
    }
}
