<?php

namespace App\Models;

use CodeIgniter\Model;
// use ReturnTypeWillChange;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['tanggal_transaksi', 'id_pelanggan', 'id', 'kode_perangkat'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getTransaksi($id_transaksi = false){
        // Jika tidak memiliki paramatere maka query seluruh data
        if($id_transaksi == false){
            return $this->findAll();
        }
        // Jika ada parameter yang ditambahkan maka tampilkan data pertama
        return $this->where(['id_transaksi' => $id_transaksi])->first();
    }

    public function cari($keyword){
        return $this->table('transaksi')->like('id_pelanggan', $keyword)->orLike('id', $keyword);
    }
}