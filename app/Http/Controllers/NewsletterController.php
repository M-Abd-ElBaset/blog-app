<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;
use \MailchimpMarketing\ApiClient;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);


        try {
            $newsletter->subscribe(request('email'));
            //09c3bad41f
        } catch (Exception $exception) {
            throw ValidationException::withMessages(['email' => "this email couldn't be added to our subscribers list"]);
        }

        return redirect(RouteServiceProvider::HOME)->with('success', 'You are now signed up for oure newsletter!');
    }
}
