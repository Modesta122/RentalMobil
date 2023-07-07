<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_customer', 'id_kendaraan', 'id_sopir', 'tanggal_sewa', 'tanggal_kembali', 'total_harga'];
}
