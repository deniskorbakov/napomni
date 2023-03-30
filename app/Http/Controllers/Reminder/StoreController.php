<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Models\Recorder;
use DateTime;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        date_default_timezone_set("Europe/Moscow");
        $data = $request->validated();

        //добавляем время
        $dataTime = new DateTime($data["time"]);
        //отнимаем от время записи время за сколько уведомлять
        $dataTime->modify("-${data["value"]} hours");
        //переводим в формат времени
        $newTime = $dataTime->format("H:i:s");

       Recorder::create([
           'name' => $data['name'],
           'content' => $data['content'],
           'value' => $newTime,
           'date' => $data['date'],
           'time' => $data['time'],
           'user_id' => Auth::id(),
           'user_email' => Auth::user()->value('email')
       ]);

       return redirect()->route('reminders.index');



    }
}
