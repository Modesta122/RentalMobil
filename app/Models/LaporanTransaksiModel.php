<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanTransaksiModel extends Model
{
    protected $table = 'laporan_transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal_laporan', 'id_transaksi', 'keterangan'];
}
