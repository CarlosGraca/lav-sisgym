<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Membro;
use App\User;
use Auth;
use Mail;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $total = 0;/*Membro::where('status', 1)->where('tenant_id',Auth::user()->tenant_id)
                ->count();*/
        return view('adminlte::home',compact('total'));
    }

   /* public function mail()
    {
        $user =null;// User::find(1)->toArray();
        ///$user->email = $data['carlosgraca1713@gmail.com'];
        Mail::send('adminlte::auth.mails.confirmation', [], function($message)  {
            $message->to('carlosgraca1713@gmail.com');
            $message->subject('Mailgun Testing');
        });
        dd('Mail Send Successfully');
    }*/
}