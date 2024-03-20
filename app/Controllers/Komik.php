<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            "title"=> "Daftar Komik",
            "komik"=> $this->komikModel->getKomik(),
        ];

        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new KomikModel();

        return view("komik/index" , $data);
    }

    public function detail($slug) 
    {
        $data = [
            "title" => "Detail Komik",
            "komik" => $this->komikModel->getKomik($slug)
        ];

        // jika komik tidak ada di tabel
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug .' tidak ditemukan.');
        }

        return view("komik/detail" , $data);
    }

    public function create()
    {
        $data = [
            "title" => "Form Tambah Data Komik"
        ];

        return view("komik/create" , $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar("judul"), "-", true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
        ]);

        session()->setFlashdata('pesan','Data berhasil ditambahkan.');

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        $this->komikModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil dihapus.');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            "title" => "Form Ubah Data Komik",
            "komik" => $this->komikModel->getKomik($slug)
        ];

        return view("komik/edit" , $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar("judul"), "-", true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan','Data berhasil diubah.');

        return redirect()->to('/komik');
    }
}
