<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\SendMails;
use App\Mail\SendContactMails;
use Illuminate\Http\Request;

class SendMailsController extends Controller
{
    public function store(Request $request)
    {
        $this->validations($request);

        $request['subject'] = $request->subject;

        if ($request->subject == 'Asztalfoglalás') {
            \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
                ->send(new SendMails($request->all()));

            return back()->with('success', 'Az asztalfoglalás sikeresen elküldve!');
        } elseif ($request->subject == 'Kapcsolat') {
            \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
                ->send(new SendContactMails($request->all()));

            return back()->with('success', 'A levél sikeresen elküldve!');
        }
    }

    public function validations(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($request->phone) {
            $request->validate([
                'phone' => 'required'
            ]);
        }

        if ($request->message) {
            $request->validate([
                'message' => 'required'
            ]);
        }

        if ($request->checkin) {
            $request->validate([
                'checkin' => 'required'
            ]);

            $request['checkin'] = Carbon::parse($request->checkin)->format('Y-m-d');
        }

        if ($request->time) {
            $request->validate([
                'time' => 'required'
            ]);
        }

        if ($request->persons) {
            $request->validate([
                'persons' => 'required'
            ]);
        }
    }
}
