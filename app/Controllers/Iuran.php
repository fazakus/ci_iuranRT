<?php
namespace App\Controllers;

use App\Models\ModelIuran;
use CodeIgniter\Config\View;

class Iuran extends BaseController
{
    public function index()
    {
        $title = "Data Iuran Warga";
        $link = 'iuran';
        $model = new ModelIuran();
        $iuran = $model->findAll();

        $db = \Config\Database::connect();

        return view('dataiuran', compact('iuran', 'title', 'link', 'db'));
    }

    public function __construct()
    {
        $db = db_connect();
        $this->ModelIuran = new ModelIuran($db);
        $this->db = db_connect();
    }

    //--------------add--------------
    public function addiuran()
    {
        $title = "Tambah Data Iuran";
        $link = "iuran/add";
        return view('addiuran', compact('title', 'link'));
    }

    public function save()
    {
        $id = $this->request->getPost('id');
        $tanggal = $this->request->getPost('tanggal');
        $jumlah = $this->request->getPost('jumlah');
        $keterangan = $this->request->getPost('keterangan');

        $gabungan = explode('-', $tanggal);
        $thn = $gabungan[0];
        $draftbln = $gabungan[1];
        $drafttgl = $gabungan [2];

        if(strlen($draftbln) == 1){
            $bln = '0'.$draftbln;
        }else{
            $bln = $draftbln;
        }

        if(strlen($drafttgl) == 1){
            $tgl = '0'.$drafttgl;
        }else{
            $tgl = $drafttgl;
        }

        $data = [
            'id' => $id,
            'tanggal' => $tgl,
            'bulan' => $bln,
            'tahun' => $thn,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
        ];

        $result = $this->ModelIuran->add($data);
        if ($result > 0) {
            echo ('Data Berhasi Ditambahkan');
            return redirect()->to(base_url('/iuran'));
        }else{
            echo ('Data Gagal Ditambahkan');
            return redirect()->to(base_url('iuran/add'));
        }
    }

    //--------------edit--------------
    public function editiuran($idiuran)
    {
        helper(['form', 'url']);

        $title = "Edit Iuran Warga";
        $link = "iuran/edit";

        $model = new ModelIuran();
        $dataiuran = array(
            'iuran' => $model->find($idiuran)
        );

        $iuran = $model->find($idiuran);
        return view('editiuran', compact('title', 'link', 'dataiuran'));
    }

    public function updateiuran($idiuran)
    {
        helper(['form', 'url']);

        $title = "Edit Iuran Warga";
        $link = "iuran/edit";

        $ModelIuran = new ModelIuran();

        $validation = $this->validate([
            'id'=> [
                'rules' => 'required', 'readonly' => true,
                'errors' => [
                    'required' => 'ID Warga harus diisi'
                ]
            ],
            'tanggal'=> [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tanggal harus diisi'
                ]
            ],
            'jumlah'=> [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah harus diisi'
                ]
            ],
            'keterangan'=> [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan harus diisi'
                ]
            ],
        ]);

        if(!$validation){
            $ModelIuran = new ModelIuran();

            return view('editiuran', [
                'iuran' => $ModelIuran->find($idIuran),
                'validation' => $this->validator
            ]);
        }else{
            $tanggal = $this->request->getPost('tanggal');

            $gabungan = explode('-', $tanggal);
            $thn = $gabungan[0];
            $bln = $gabungan[1];
            $tgl = $gabungan[2];

            $ModelIuran->update($idIuran, [
                'id' => $this->request->getPost('id'),
                'tanggal' => $tgl,
                'bulan' => $bln,
                'tahun' => $thn,
                'jumlah' => $this->request->getPost('jumlah'),
                'keterangan' => $this->request->getPost('keterangan')
            ]);

            echo ('Data berhassil diubah');
            return redirect()->to(base_url('/iuran'));
        }
    }

    //------------delete----------

    public function deletei($idiuran)
    {
        $ModelIuran = new ModelIuran();

        $title = "Hapus Iuran Warga";
        $link = "iuran/delete";

        $iuran = $ModelIuran->find($idiuran);

        if($iuran){
            $ModelIuran->delete($idiuran);
            echo ('Data berhasil dihapus');
            return redirect()->to(base_url('/iuran'));}
    }

}