<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\StoreRequest;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $request->validated();

        Mail::to('hello@example.com')
            ->send(new Feedback($request));

        return redirect()->route('feedbacks.index')->with('success', 'You have successfully created the article.');

    }
}
