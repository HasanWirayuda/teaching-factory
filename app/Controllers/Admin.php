<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function beranda()
    {
        $data = [
            "title" => "Beranda | Teaching Factory",
        ];

        return view("admin/beranda_admin", $data);
    }

    public function data_pelanggan()
    {
        $keyword = $this->request->getVar('search');
        $pelanggan = ($keyword) ? $this->pelangganModel->searchPelanggan($keyword) : $this->pelangganModel->findAll();

        $data = [
            "title" => "Data Pelanggan | Teaching Factory",
            "pelanggan" => $pelanggan
        ];


        return view("admin/data_pelanggan", $data);
    }

    public function delete_pelanggan($id)
    {
        $this->pelangganModel->delete($id);
        session()->setFlashdata("pesan", "Data Berhasil Dihapus");
        session()->setFlashdata("title", "Terhapus!");
        return redirect()->to('/admin/data_pelanggan');
    }

    public function edit_pelanggan($id)
    {
        $data = [
            "title" => "Form Edit | Teaching Factory",
            "pelanggan" => $this->pelangganModel->getPelanggan($id),
        ];

        return view("paket/edit", $data);
    }

    public function update_pelanggan($id)
    {
        $this->pelangganModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata("pesan", "Data Berhasil Diubah");
        session()->setFlashdata("title", "Berhasil!");

        return redirect()->to("/admin/data_pelanggan");
    }
    public function data_kontak()
    {
        $keyword = $this->request->getVar('search');
        $kontakModel = ($keyword) ? $this->kontakModel->searchKontak($keyword) : $this->kontakModel->findAll();

        $data = [
            "title" => "Data Kontak | Teaching Factory",
            "kontak" => $kontakModel
        ];

        return view("admin/data_kontak", $data);
    }

    public function delete_kontak($id)
    {
        $this->kontakModel->delete($id);
        session()->setFlashdata("pesan", "Data Berhasil Dihapus");
        session()->setFlashdata("title", "Terhapus!");
        return redirect()->to('/admin/data_kontak');
    }

    public function edit_kontak($id)
    {
        $data = [
            "title" => "Form Edit | Teaching Factory",
            "kontak" => $this->kontakModel->getKontak($id),
        ];

        return view("tefa/edit_kontak", $data);
    }

    public function update_kontak($id)
    {
        $this->kontakModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'masalah' => $this->request->getVar('masalah'),
        ]);

        session()->setFlashdata("pesan", "Data Berhasil Diubah");
        session()->setFlashdata("title", "Berhasil!");

        return redirect()->to("/admin/data_kontak");
    }
    public function data_testimoni()
    {
        $keyword = $this->request->getVar('search');
        $testimoniModel = ($keyword) ? $this->testimoniModel->searchTestimoni($keyword) : $this->testimoniModel->findAll();

        $data = [
            "title" => "Data Testimoni | Teaching Factory",
            "testimoni" => $testimoniModel,
        ];

        return view("admin/data_testimoni", $data);
    }

    public function delete_testimoni($id)
    {
        $this->testimoniModel->delete($id);
        session()->setFlashdata("pesan", "Data Berhasil Dihapus");
        session()->setFlashdata("title", "Terhapus!");
        return redirect()->to('/admin/data_testimoni');
    }

    public function edit_testimoni($id)
    {
        $data = [
            "title" => "Form Edit | Teaching Factory",
            "testimoni" => $this->testimoniModel->getTestimoni($id),
        ];

        return view("tefa/edit_testimoni", $data);
    }

    public function update_testimoni($id)
    {
        $this->testimoniModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'rating' => $this->request->getVar('rating'),
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ]);

        session()->setFlashdata("pesan", "Data Berhasil Diubah");
        session()->setFlashdata("title", "Berhasil!");

        return redirect()->to("/admin/data_testimoni");
    }

    public function login_pelanggan()
    {
        $dataPelanggan = $this->pelangganModel->find(session('id'));

        $data = [
            "title" => "Login | Teaching Factory",
            "dataPelanggan" => $dataPelanggan,
        ];

        return view("admin/login_pelanggan", $data);
    }
}