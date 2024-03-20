<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = "kontak";
    protected $allowedFields = ['email', 'masalah'];
    public function getKontak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where("id", $id)->first();
    }

    public function searchKontak($keyword)
    {
        return $this->like('email', $keyword)->findAll();
    }
}