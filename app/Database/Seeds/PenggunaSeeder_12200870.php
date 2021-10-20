<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Muhammad fadil bahari',
                'password'  => md5('12200870')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200870',
                'password'  => md5('Muhammad fadil bahari')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
