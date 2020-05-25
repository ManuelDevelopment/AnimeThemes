<?php

namespace App\Observers;

use App\Models\Invitation;
use App\Mail\InvitationEmail;
use Illuminate\Support\Facades\Mail;

class InvitationObserver
{
    /**
     * Handle the app models invitation "created" event.
     *
     * @param  \App\AppModelsInvitation  $appModelsInvitation
     * @return void
     */
    public function created(Invitation $invitation)
    {
        Mail::to($invitation->email)->queue(new InvitationEmail($invitation));
    }
}
