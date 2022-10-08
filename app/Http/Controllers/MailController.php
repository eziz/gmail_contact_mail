<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Log;
use Exception;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Eziz Soyunov',
            'subject' => 'Do your job on time',
            'body' => 'This is for testing email using gmail'
        ];

        try {
            Mail::to('ezizce@gmail.com')->send(new MailNotify($data));
            return response()->json(['Greate check your email box']);
        } catch (Exception $e) {
            dd($e);
            return response()->json(['Sorry something wrong']);
        }
    }
}
