<?php

namespace Database\Seeders;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $schedules = Schedule::all();

        foreach ($schedules as $schedule) {
            $schedule->movie()->associate(Movie::where('tenPhim', $schedule->tenPhim)->get()->first());
            $schedule->save();
            $schedule->cinema()->associate(Cinema::where('name', $schedule->cumRap)->get()->first());
            $schedule->save();
        }
    }
}
