<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    //
    public function send() {
        $objectDemo = new \stdClass();
        $objectDemo -> reciever = 'Daryn';
        $objectDemo -> sender = 'Daryn';
        Mail::to('190103213@stu.sdu.edu.kz')->send(new DemoEmail($objectDemo));
    }
}
