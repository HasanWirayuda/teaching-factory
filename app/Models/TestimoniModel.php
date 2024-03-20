<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = "testimoni";
    protected $allowedFields = ['nama', 'email', 'rating', 'judul', 'deskripsi'];

    public function getTestimoni($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where("id", $id)->first();
    }

    public function searchTestimoni($keyword)
    {
        return $this->like('nama', $keyword)->findAll();
    }
}
