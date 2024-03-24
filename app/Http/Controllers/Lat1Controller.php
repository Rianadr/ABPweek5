<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Rian Adriansyah";
        $data["asal"]="Bandung";
        $data["komplek"]="Pinus";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Rian", "asal" => "Bandung"),
            array("nama" => "Nadirwey", "asal" => "Bandung Coret (Lembang)"),
            array("nama" => "Nico", "asal" => "Planet Panas (Bekasi)")
        );
        return view('v_latihan2', $data);
    }
}
