<?php

namespace App\Controllers;

class Tefa extends BaseController
{
    public function index()
    {
        $data = [
            "title"=> "Beranda | Teaching Factory",
        ];

        return view("tefa/beranda", $data);
    }

    public function pembayaran()
    {
        $data = [
            "title"=> "Pembayaran | Teaching Factory"
        ];

        return view("tefa/pembayaran", $data);
    }

    public function kontak()
    {
        $data = [
            "title"=> "Kontak | Teaching Factory"
        ];

        return view("tefa/kontak", $data);
    }

    public function save()
    {
        $this->kontakModel->save([
            'email' => $this->request->getVar('email'),
            'masalah' => $this->request->getVar('masalah')
        ]);

        session()->setFlashdata("pesan", "Pertanyaan Terkirim");

        return redirect()->to("/tefa/kontak");
    }
    public function testimoni()
    {
        $testimoniModel = $this->testimoniModel->findAll();

        $data = [
            "title"=> "Ulasan | Teaching Factory",
            "testimoni"=> $testimoniModel,
        ];

        return view("tefa/testimoni", $data);
    }
    public function save_testimoni() 
    {
        $this->testimoniModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'rating' => $this->request->getVar('rating'),
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata("pesan", "Ulasan Terkirim");

        return redirect()->to("/tefa/testimoni");
    }

    public function form_ulasan() {
        $data = [
            "title"=> "Form Ulasan | Teaching Factory"
        ];

        return view("tefa/form_ulasan", $data);
    }
}