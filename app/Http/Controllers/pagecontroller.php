<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class pagecontroller extends Controller {
    public function dashboard() {
        $pagetitle = 'Welcome to Perpustakaan Laravel';
        $pagesubtitle = '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi id explicabo laborum, quasi, eum veniam! Quia, laborum molestias labore fuga sequi temporibus modi ad rem accusantium, earum. Magnam, quibusdam sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime magnam totam iste sint.
        ';
        $description = '
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, a voluptates rerum ipsum inventore, adipisci temporibus sapiente exercitationem tempora similique quas quae repellat, harum ut necessitatibus, aliquid cumque fugiat recusandae?
        ';
        return view('index', compact('pagetitle', 'pagesubtitle', 'description'));
    }
    
    public function registermember() {
        $pagetitle = 'Registrasi Member Perpusla';
        return view('registermember', compact('pagetitle'));
    }

    public function datamember() {
        $pagetitle = 'Data Member Perpusla';
        return view('datamember', compact('pagetitle'));
    }

    public function registerpegawai() {
        $pagetitle = 'Registrasi Pegawai Perpusla';
        return view('registerpegawai', compact('pagetitle'));
    }

    public function datapegawai() {
        $pagetitle = 'Data Pegawai Perpusla';
        return view('datapegawai', compact('pagetitle'));
    }
}
