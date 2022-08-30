<?php

namespace App\Controllers;

class PagesController {
    public function home() {

        return view('index');
    }

    public function info() {

        return view('info');
    }
}