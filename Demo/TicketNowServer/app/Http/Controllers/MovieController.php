<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class MovieController extends Controller
{
    //
    public function find(Request $request) {
        $criteria = $request->all();

        $criteria['from'] = date(strtotime($criteria['from']));
        $criteria['to'] = date(strtotime($criteria['to']));

        $movies = Movie::where([
            ['doTuoi', '=', $criteria['age']],
            ['theLoai', '=', $criteria['genre']]
        ])->with('schedules')->get()->toArray();

        $phims = [];

        foreach ($movies as $key => $value) {
            $temp = array_filter($movies[$key]['schedules'], function ($item) use ($criteria) {
                $current = date(strtotime($item['ngay']));
                if ($criteria['from'] <= $current and $current <= $criteria['to']) {
                    if ($item['cumRap'] == $criteria['cinema']) {
                        return $item;
                    }
                }
            });
            if (empty($temp)) {
                unset($movies[$key]);
            } else {
                $movies[$key]['schedules'] = $temp;
            }
            $movies[$key]['schedules'] = array_values($temp);
        }

        for ($i = 0; $i < sizeof($movies); $i++) {
            $phims[$i]['phim'] = $movies[$i];
        }

        return response($phims);
    }
}

