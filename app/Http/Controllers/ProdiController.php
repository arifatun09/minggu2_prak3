<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi() {
        return "Program Studi Manajemen Informatika";
    }

    public function ti() {
        return"Program Studi Teknik Informatika";
    }
}
