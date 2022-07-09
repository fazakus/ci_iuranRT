<?php

namespace App\Controllers;

use App\Models\ModelWarga;

class Warga extends BaseController
{
    public function index()
    {
        $title = "DATA WARGA";
        $link = "warga";

        $model = new ModelWarga();
        $warga = $model->findAll();
        
        return view('datawarga', compact('warga', 'title'));
    }

    public function __construct()
    {
        $db = db_connect();
        $this->ModelWarga = new ModelWarga($db);
    }

    //=====add=====
    public function addwarga()
    {
        $title = "Tambah Data Warga";
        $link = "warga/add";
        return view('addwarga',compact('title', 'link'));
    }

    public function save()
    {
        $nik = $this->request->getPost('nik');
        $nik = $this->request->getPost('nama');
        $nik = $this->request->getPost('kelamin');
        $nik = $this->request->getPost('alamat');
        $nik = $this->request->getPost('no_rumah');
        $nik = $this->request->getPost('status');

        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'kelamin' => $kelamin,
            'alamat' => $alamat,
            'no_rumah' => $no_rumah,
            'status' => $status,
        ];

        $result = $this->WargaModel->add($data);
        if ($result > 0) {
            echo ('Data berhasil ditambahkan');
            return redirect()->to(base_url('/warga'));
        } else {
            echo ('Data gagal ditambahkan');
            return redirect()->to(base_url('/warga/add'));
        }
    }

} //.end of class Page