<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\RegistrationModel;

class RegistrationController extends Controller{

    public function submit(RegistrationRequest $req){ //submit(Request $req)
        //dd($req); //Вывести все полученные данные
        //dd($req->input('login'));
        /*$validation = $req->validate([
            'login' => 'required|min:5|max:50'
        ]);*/
        $registration = new RegistrationModel();
        $registration->login    = $req->input('login');
        $registration->email    = $req->input('email');
        $registration->password = $req->input('password');
        $registration->save();

        return redirect()->route('home')->with('success', 'Регистрация прошла успешно!');
    }
}
