<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
class ShowController extends BaseController
{
    public function __invoke(Recorder $recorder)
    {
        $dataRu = [
            'Понедельник'=> 'Monday',
            'Вторник'=> 'Tuesday',
            'Среда'=> 'Wednesday',
            'Четверг' => 'Thursday',
            'Пятница'=> 'Friday',
            'Суббота'=> 'Saturday',
            'Воскресенье'=> 'Sunday',
        ];

        $weekRu = array_search($recorder['date'], $dataRu);
        return view('reminders.show', compact('recorder', 'weekRu'));
    }
}
