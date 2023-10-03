<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    protected $helpers = ['form'];

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
        $kelas = $this->kelasModel->getKelas(); // Pastikan model KelasModel bekerja dengan benar

        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if (!$this->validate([
            'nama' => 'required',
            'npm' => 'required|is_unique[user.npm]',
            'kelas' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
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

        return view('profile', $data); // Mengarahkan pengguna ke halaman profil pengguna yang baru dibuat
    }
}
