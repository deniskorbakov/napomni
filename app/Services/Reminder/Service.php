<?php

namespace App\Services\Reminder;

use App\Models\Recorder;
use DateTime;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data) {
        date_default_timezone_set("Europe/Moscow");

        //добавляем время
        $dataTime = new DateTime($data["time"]);
        //отнимаем от время записи время за сколько уведомлять
        $dataTime->modify("-${data["value"]} hours");
        //переводим в формат ч:м:с
        $newTime = $dataTime->format("H:i:s");

        $dataEng = [
            'Monday'=> 'Понедельник',
            'Tuesday'=> 'Вторник',
            'Wednesday'=> 'Среда',
            'Thursday' => 'Четверг',
            'Friday'=> 'Пятница',
            'Saturday'=> 'Суббота',
            'Sunday'=> 'Воскресенье',
        ];

        $weekEng = array_search($data['date'], $dataEng);

        Recorder::create([
            'name' => $data['name'],
            'content' => $data['content'],
            'value' => $data['value'],
            'notify_for' => $newTime,
            'date' => $weekEng,
            'time' => $data['time'],
            'user_id' => Auth::id(),
            'user_email' => Auth::user()->value('email')
        ]);
    }

    public function update($data, $recorder) {
        date_default_timezone_set("Europe/Moscow");

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
    }
}
