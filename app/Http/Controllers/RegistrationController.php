<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate (request (),[
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

$user = User::create([
'name' => request('name'),
    'surname' => request('surname'),
'email' => request('email'),
'password' => bcrypt(request('password'))
]);

auth()->login($user);

return redirect('/');

}

}
