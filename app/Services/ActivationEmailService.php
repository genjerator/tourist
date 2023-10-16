<?php

namespace App\Services;

use App\Mail\activationLinkMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ActivationEmailService
{
    public function sendActivationEmail(User $user)
    {
        // Create an instance of the activationLinkMail Mailable class
        $email = new activationLinkMail();
        $activationLink = 'test';
        // Customize the view name if needed
        // Customize any other data that should be passed to the view
        $email->with([
            'activationLink' => $activationLink, // Replace with your activation link
            'appName'  => config('app.name'),
            'userName' => $user->name,
        ]);

        // Specify the recipient's email address
        $recipientEmail = 'user@example.com'; // Replace with the actual recipient's email

        // Send the email
        Mail::to($recipientEmail)->send($email);
        //Mail::to('your_receiver_email@gmail.com')->send(new activationLinkMail());
        // Optionally, you can check if the email was sent successfully
        dump("AsasaS");
    }
}

