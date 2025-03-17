<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReportEmail extends Command
{
    protected $signature = 'email:send-report';
    protected $description = 'Send an email notification for the generated report';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userEmail = 'xfrykkynoobsterx@gmail.com';
        $subject = 'Reporte Generado';
        $message = 'Se ha generado un reporte. Puede encontrar los datos en la carpeta logs del software.';

        Mail::raw($message, function ($msg) use ($userEmail, $subject) {
            $msg->to($userEmail)->subject($subject);
        });

        $this->info('Email sent successfully.');
    }
}
