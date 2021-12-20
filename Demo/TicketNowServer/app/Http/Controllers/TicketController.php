<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    //
    public function delete(Request $request) {
        $input = $request->all();

        $ticket = Ticket::find($input['id']);
        $schedule = $ticket->schedule;

        $seats = explode(", ", $ticket->seat);

        foreach ($seats as $seat) {
            $schedule->choNgoi = str_replace($seat.":0", $seat.":1", $schedule->choNgoi);
            $schedule->save();
        }

        $ticket->delete();

        return response([
            ['feedback' => '1']
        ]);
    }

    public function index() {
        $tickets = auth()->user()->tickets->filter(function ($item) {
            $item->schedule;
            return $item;
        })->toArray();

        $bookedInfos = [];

        for ($i = 0; $i < sizeof($tickets); $i++) {
            $bookedInfos[$i]['ticket'] = $tickets[$i];
        }

        return response($bookedInfos);
    }

    public function book(Request $request) {
        $input = $request->all();

        $schedule = Schedule::find($input['schedule']);
        $map = $schedule->choNgoi;
        $seats = explode(", ", $input['seat']);
        foreach ($seats as $seat) {
            if (strpos($map, $seat.":0")) {
                return response([
                    ['feedback' => '0']
                ]);
            }
        }

        try {
            DB::transaction(function() use($input) {
                DB::table('schedules')
                    ->where('id', $input['schedule'])
                    ->update(['choNgoi' => $input['map']]);

                do {
                    $code = Str::random(10);
                } while (!Ticket::where('code', $code)->get()->isEmpty());

                DB::table('tickets')->insert([
                    'seat' => $input['seat'],
                    'code' => $code
                ]);
                $ticket = Ticket::where('code', $code)->get()->first();
                $ticket->user()->associate(auth()->user());
                $ticket->schedule()->associate(Schedule::find($input['schedule']));
                $ticket->save();
            });

            return response([
                ['feedback' => '1']
            ]);
        } catch (\Exception $exception) {
            return response([
                ['feedback' => $exception->getMessage()]
            ]);
        }
    }
}
