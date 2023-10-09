<?php

namespace App\Database\Seeds;

use App\Models\KelasModel;
use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasModel = new KelasModel();

        $data = [
            [
                'nama_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'B',
            ],
            [
                'nama_kelas' => 'C',
            ],
            [
                'nama_kelas' => 'D',
            ],
        ];

        // Simpan data ke dalam tabel
        foreach ($data as $kelas) {
            $kelasModel->insert($kelas);
        }
    }
}
