<?php

namespace App\Observers;

use App\Models\User;
use App\Services\ActivationEmailService;

class UserObserver
{
    public function __construct(public readonly ActivationEmailService $emailService)
    {

    }

    public function created(User $user): void
    {
        // Send a welcome email to the newly created user
        $this->emailService->sendActivationEmail($user);
    }
}
