<?php

namespace App\Models;

use CodeIgniter\Model;

class SopirModel extends Model
{
    protected $table = 'sopir';
    protected $primaryKey = 'id_sopir';
    protected $allowedFields = ['nama', 'telepon', 'alamat', 'harga'];
}
