<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use App\Models\UserModel;

use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Controller;
use App\Models\M_model;

class Home extends BaseController
{

    protected function isLoggedIn()
    {
         return session()->has('id');
     }
    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to('home/dashboard');
        }
        echo view ('login');
    }

    public function login()
    {
        echo view('login');
    }

    public function proses_login()
    {
        $model = new M_model;
        $a = $this->request->getpost('username');
        $b = $this->request->getpost('password');

        $isi = array(
            'username' => $a,
            'password' => $b
        );
        $cek = $model->getWhere2('user', $isi);
        if ($cek > 0) {
            session()->set('id_user', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('home/dashboard');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function dashboard()
    {
        echo view ('header');
        echo view ('menu');
        echo view('dashboard');
        echo view ('footer');
    }

    public function aksi_pesan()
    {
        $a = $this->request->getPost('tipe');
        $b = $this->request->getPost('waktu');
        $c = $this->request->getPost('harga');

        $simpan = array(
            'tipe' => $a,
            'waktu' => $b,
            'harga' => $c
        );
        $model = new M_model();
        $model->simpan('pesan', $simpan);
        return redirect()->to('/Home/dashboard');
    }
}