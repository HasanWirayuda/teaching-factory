<?php

namespace App\Controllers;

use App\Models\PaketModel;

class Paket extends BaseController
{
    
    protected $paketModel;

    public function __construct()
    {
        $this->paketModel = new PaketModel();

    }
    public function index()
    {
        $paket = $this->paketModel->findAll();

        $data = [
            "title"=> "Paket | Teaching Factory",
            "paket"=> $paket
        ];


        return view("paket/index", $data);
    }

    public function daftar()
    {
        $data = [
            "title"=> "Pendaftaran | Teaching Factory"
        ];

        return view("paket/daftar", $data);
    }

    public function save()
    {
        $this->pelangganModel->save([
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata("pesan", "Pendaftaran Berhasil");

        return redirect()->to("/paket");
    }
}