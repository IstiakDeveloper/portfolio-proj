<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $main = Main::first();

        return view('pages.index', compact('main'));
    }

    public function admin(){
        return view('pages.admin.dashboard');
    }

}
