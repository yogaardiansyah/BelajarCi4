<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function index(): string
    {
        return view('ttd');
    }
    // Data Mahasiswa Views
    public function datamhs(): string {
        return view('pages/DataMahasiswa',['title' => 'Data Mahasiswa']);
    }
    // Tentang Mahasiswa Views
    public function ttgmhs(): string {
        return view('pages/TentangMahasiswa',['title' => 'Tentang Mahasiswa']);
    }
    // Info Kampus Views
    public function infkampus(): string {
        return view('pages/infokampus',['title' => 'Info Kampus']);
    }
}
