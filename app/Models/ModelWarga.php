<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ModelWarga extends Model{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id' , 'nik' , 'nama' , 'alamat' , 'kelamin' , 'no_rumah' , 'status'];
    protected $db;


    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }
}