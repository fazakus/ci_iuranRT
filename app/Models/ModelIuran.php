<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ModelIuran extends Model{
    protected $table = 'iuran';
    protected $primarykey = 'idiuran';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idiuran', 'keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah', 'id'];
    protected $db;

    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }
}