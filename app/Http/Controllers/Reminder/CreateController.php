<?php

namespace App\Http\Controllers\Reminder;
class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('reminders.create');
    }
}
