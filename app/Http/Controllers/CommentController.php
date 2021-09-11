<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($name, $pesan) {
        return "Nama: $name <br>
            Pesan: $pesan";
    }
}
