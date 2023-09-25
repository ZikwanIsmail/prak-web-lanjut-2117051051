<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $helpers = ['Form'];

    public function index()
    {
        // Kode untuk halaman index (jika ada)
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id' => 1, // Sesuaikan dengan id kelas pada database
                'nama_kelas' => 'A',
            ],
            [
                'id' => 2, // Sesuaikan dengan id kelas pada database
                'nama_kelas' => 'B',
            ],
            [
                'id' => 3, // Sesuaikan dengan id kelas pada database
                'nama_kelas' => 'C',
            ],
            [
                'id' => 4, // Sesuaikan dengan id kelas pada database
                'nama_kelas' => 'D',
            ],
        ];

        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap isi field Nama.',
                ],
            ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => 'Harap isi field NPM.',
                    'is_unique' => 'NPM sudah ada dalam database.',
                ],
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap pilih Kelas.',
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        return view('profile', $data);
    }
}
