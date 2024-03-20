<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Latihan CodeIgniter',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view("pages/home", $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view("pages/about", $data);
    }

    public function contact()
    {
        $data = [
            "title"=> "Contact Us",
            "alamat"=> [
                [
                    'tipe' => 'Rumah',
                    'alamat'=> 'JL. abc No. 123',
                    'kota'=> 'Subang'
                ],
                [
                    'tipe'=> 'Kantor',
                    'alamat'=> 'JL. Garuda 8 No. 15',
                    'kota'=> 'Subang'
                ]
            ]
        ];

        return view("pages/contact", $data);
    }
}
