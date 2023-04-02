<?php

namespace App\Http\Controllers\Admin\Reminder;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {

        return view('admin.reminders.index');

    }
}
