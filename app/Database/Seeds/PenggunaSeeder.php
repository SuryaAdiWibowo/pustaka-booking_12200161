<?php

namespace App\Database\Seeds;
use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'Surya',
                'password' => md5('12200161')
            ],
            [   'nama'     => 'admin',
                'password' => md5('12345')
            ],
            [  'nama'     => '12200161',
                'password' => md5('SuryaAdiWIbowo')
            ],
            ];
            $p = new PenggunaModel();
            $p->insertBatch($data);
    }
}
