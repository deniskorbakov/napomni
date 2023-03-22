<?php

namespace App\Http\Controllers\Reminder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return(view('reminders.index'));
    }
}
