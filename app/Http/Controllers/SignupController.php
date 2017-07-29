<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function Home() {

      $registers = [
        'naragorn',
        'chaimuangmai'
      ];
      return view('welcome', ['registers' => $registers]);
    }
}
