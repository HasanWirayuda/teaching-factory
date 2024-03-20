<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = "pelanggan";
    protected $allowedFields = ['nama', 'no_hp', 'password', 'email', 'alamat'];

    public function getPelanggan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where("id", $id)->first();
    }

    public function searchPelanggan($keyword)
    {
        return $this->like('nama', $keyword)->findAll();
    }
}