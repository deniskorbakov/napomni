<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {

        return view('feedbacks.index');

    }
}
