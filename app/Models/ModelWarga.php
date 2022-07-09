<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWarga extends Model{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedField = ['id' , 'nik' , 'nama' , 'alamat' , 'kelamin' , 'no_rumah' , 'status'];
}