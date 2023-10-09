<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;
use CodeIgniter\Commands\Utilities\Publish;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    protected $helpers = ['Form'];

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
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
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        $path = 'assets/upload/img/';

        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $allowedTypes = ['jpg', 'png', 'jpeg', 'gif']; // Jenis file gambar yang diizinkan
            if (in_array($foto->getClientExtension(), $allowedTypes)) {
                $name = $foto->getRandomName();
                $foto->move($path, $name);

                $fotoPath = base_url($path . $name);
            } else {
                $fotoPath = ''; // Set default path jika jenis file tidak valid
            }
        } else {
            $fotoPath = ''; // Set default path jika tidak ada foto yang diunggah atau terjadi kesalahan.
        }

        $rules = [
            'nama' => 'required',
            'npm' => 'required|is_unique[user.npm]',
        ];

        $errors = [
            'nama' => [
                'required' => 'Isi dulu bro.',
            ],
            'npm' => [
                'required' => 'Isi dulu bro.',
                'is_unique' => 'NPM sudah ada.',
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getPost('nama'),
            'id_kelas' => $this->request->getPost('kelas'),
            'npm' => $this->request->getPost('npm'),
            'foto' => $fotoPath,
        ]);

        return redirect()->to('/user');
    }

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }

    public function delete($id)
    {
        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->to('/user')->with('error', 'Data pengguna tidak ditemukan');
        }

        $this->userModel->delete($id);

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil dihapus');
    }
}
