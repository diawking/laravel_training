<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function hello() {
      return 'Hello from WelcomeController';
    }

    public function member() {
      return 'Member from WelcomeController';
    }

    public function page($id) {
      return "Page: $id";
    }

    public function title() {
      return view('index')
      ->with([
        'title' => 'Leavel 5 Training',
        'subtitle' => 'Introduction Laravel 5'
      ]);
    }
}
