<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    //
    /*public function find(Request $request) {
        $criteria = $request->all();

        $criteria['from'] = date(strtotime($criteria['from']));
        $criteria['to'] = date(strtotime($criteria['to']));

        $schedule = Schedule::all()->filter(function ($item) use ($criteria){
            $current = date(strtotime($item->ngay));
           if ($criteria['from'] >= $current and $current <= $criteria['from']) {
               if ($item->movie->doTuoi == $criteria['age']) {
                   if ($item->movie->theLoai == $criteria['genre']) {
                       if ($item->cinema->name == $criteria['cinema']) {
                           return $item;
                       }
                   }
               }
           }
        });

        return response($schedule);
    }*/
}
