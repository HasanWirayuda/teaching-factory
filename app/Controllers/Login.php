<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $login = $this->request->getPost('login');
        if ($login) {
            $inputNomor = $this->request->getPost('inputNomor');
            $inputPassword = $this->request->getPost('inputPassword');

            if ($inputNomor == '' or $inputPassword == '') {
                $err = "Silahkan masukkan nomor telepon dan password";
            }

            if (empty($err)) {
                $dataPelanggan = $this->pelangganModel->where("no_hp", $inputNomor)->first();
                
                if (!$dataPelanggan) {
                    // Handle jika nomor HP tidak ditemukan
                    $err = "Nomor telepon tidak sesuai";
                } else {
                    if ($dataPelanggan['password'] != $inputPassword) {
                        $err = "Password tidak sesuai";
                    }
                }

                // Jika dataPelanggan tidak ditemukan, coba mencari sebagai admin
                if (!$dataPelanggan) {
                    $dataAdmin = $this->adminModel->where("no_hp", $inputNomor)->first();

                    if ($dataAdmin && $dataAdmin['password'] == $inputPassword) {
                        $dataSesi = [
                            'id' => $dataAdmin['id'],
                            'no_hp' => $dataAdmin['no_hp'],
                            'password' => $dataAdmin['password'],
                        ];
                        session()->set($dataSesi);
                        return redirect()->to('/admin/beranda');
                    } else {
                        // Handle jika admin tidak ditemukan atau password salah
                        $err = "Nomor telepon atau password tidak sesuai";
                    }
                }
            }

            if (empty($err)) {
                $dataSesi = [
                    'id' => $dataPelanggan['id'],
                    'no_hp' => $dataPelanggan['no_hp'],
                    'password' => $dataPelanggan['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('/admin/login_pelanggan');
            }

            if ($err) {
                session()->setFlashdata("inputNomor", $inputNomor);
                session()->setFlashdata('err', $err);
                return redirect()->to("/login");
            }
        }

        $data = [
            "title" => "Login | Teaching Factory",
        ];

        return view("tefa/login", $data);
    }
}
