<?php

namespace App\Listeners;

use App\Mail\SendNotificationMail;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailtoUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Mail::to('m.askerova.99@mail.ru')->send(new UserRegisterMail(User::first()));
    }
}
