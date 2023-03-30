<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\StoreRequest;
use App\Http\Requests\Reminder\UpdateRequest;
use App\Models\Recorder;
use DateTime;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Recorder $recorder)
    {
        date_default_timezone_set("Europe/Moscow");
        $data = $request->validated();

        //добавляем время
        $dataTime = new DateTime($data["time"]);
        //отнимаем от время записи время за сколько уведомлять
        $dataTime->modify("-${data["value"]} hours");
        //переводим в формат времени
        $newTime = $dataTime->format("H:i:s");

        $recorder->update(
            [   'name' => $data["name"],
                'content' => $data["content"],
                'value' => $data["value"],
                'notify_for' => $newTime,
                'date' => $data["date"],
                'time' => $data["time"],
            ]
        );
        return redirect()->route('reminders.show',$recorder->id);
    }
}
