<?php

namespace App\Http\Controllers\Reminder;

use App\Models\Recorder;
class EditController extends BaseController
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

        return view('reminders.edit', compact('recorder', 'weekRu'));
    }
}
