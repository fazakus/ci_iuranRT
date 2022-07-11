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
        $nama = $this->request->getPost('nama');
        $kelamin = $this->request->getPost('kelamin');
        $alamat = $this->request->getPost('alamat');
        $no_rumah = $this->request->getPost('no_rumah');
        $status = $this->request->getPost('status');

        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'kelamin' => $kelamin,
            'alamat' => $alamat,
            'no_rumah' => $no_rumah,
            'status' => $status
        ];

        $result = $this->ModelWarga->add($data);
        if ($result > 0) {
            echo ('Data berhasil ditambahkan');
            return redirect()->to(base_url('/warga'));
        } else {
            echo ('Data gagal ditambahkan');
            return redirect()->to(base_url('/warga/add'));
        }
    }

    //=====edit=====
    public function edit($id)
    {
        helper(['form', 'url']);

        $title = "Edit Data Warga";

        $ModelWarga = new ModelWarga();

        $data = array(
            'warga' => $ModelWarga->find($id)
        );
        return view('editwarga', compact('data', 'title'));
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $title = "Edit Data Warga";

        $ModelWarga = new ModelWarga();

        $validation = $this->validate([
            'nik' => [
                'rules' => 'required|min_length[5]|max_length[16]',
                'errors' => [
                    'required' => 'NIK tidak boleh kosong'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            'kelamin' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Kelamin tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'no_rumah' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'No Rumah tidak boleh kosong'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Status tidak boleh kosong'
                ]
            ]
        ]);

        if(!$validation){
            $ModelWarga = new ModelWarga();

            return view('editwarga', [
                'warga' => $ModelWarga->find($id),
                'validation' => $this->validator
            ]);  
        }else{
            $ModelWarga->update($id, [
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'kelamin' => $this->request->getPost('kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'no_rumah' => $this->request->getPost('no_rumah'),
                'status' => $this->request->getPost('status'),
            ]);

            echo ('Data berhasil di ubah');
            return redirect()->to(base_url('/warga'));
        }
    }

    //=====edit=====
    public function delete($id)
    {
        $ModelWarga = new ModelWarga();
        $title = 'Hapus Data Warga';
        $link = 'warga/delete';

        $warga = $ModelWarga->find($id);

        if($warga){
            $ModelWarga->delete($id);
            echo ('Data berhasil dihapus');
            return redirect()->to(base_url('/warga'));
        }
    }

    

} //.end of class Page