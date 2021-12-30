<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivePlan extends Mailable
{
    use Queueable, SerializesModels;

    private $phone;

    public function __construct($inputData)
    {
        $this->phone = $inputData['phone'];
    }

    public function build()
    {
        return $this->from('admin@visasurvey.com')
            ->subject('[Visa Survey] Có người liên hệ mới')
            ->view('emails.activeplan')
            ->with([
                'phone' => $this->phone
            ]);
    }
}
