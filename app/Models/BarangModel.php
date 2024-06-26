<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'nomor_telepon',
        'jenis_barang',
        'kuantitas_barang',
        'gambar_barang',
        'metode_penyerahan'
    ];
}
