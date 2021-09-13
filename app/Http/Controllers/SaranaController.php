<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran() {
        return "Perkantoran";
    }

    public function laboratorium() {
        return "Laboratorium <br><br>
            Lab. Basis data,  Lab. Pemrograman,  Lab. Studio Proyek,  Lab. Image dan Graphics,  Lab. Komputasi dan Jaringan
            Lab. Informatika, dan Lab. Sistem Informasi"
        ;
    }

    public function kelas() {
        return "Ruang Kelas <br><br>
            Jurusan Teknologi Informasi memiliki 2 kriteria ruang kelas yang digunakan untuk melakukan sesi perkuliahan teori. 
            Dua kriteria tersebut antara lain Kelas Reguler (KR) dan Kelas Bersama (KB). KR digunakan untuk perkuliahan dengan 
            peserta kuliah sebanyak 1 kelas (kapasitas ruangan hanya kurang lebih untuk 30 mahasiswa), sedangkan KB digunakan untuk 
            kuliah bersama dari 2 kelas (kapasitas ruangan sebanyak 60 mahasiswa). Lokasi KR dan KB tersebar di 2 gedung, baik 
            gedung AF maupun gedung T.Sipil lt. 7 dan 8."
        ;
    }

    public function lainnya() {
        return "Lainnya <br><br>
            Kantin, Ruang Baca, Ruang Admin, Mushola, dan Lobby"
        ;
    }
}
