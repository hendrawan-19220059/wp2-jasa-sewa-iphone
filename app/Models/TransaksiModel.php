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

    protected $allowedFields = ['tanggal_transaksi', 'id_pelanggan', 'id', 'id_perangkat'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getTransaksiData($offset = 0, $limit = 10)
    {
        return $this->db->table('transaksi')
            ->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan')
            ->join('users', 'users.id = transaksi.id')
            ->join('perangkat', 'perangkat.id_perangkat = transaksi.id_perangkat')
            ->select('*')
            ->offset($offset)
            ->limit($limit)
            ->get()
            ->getResultArray();
    }

    public function cari($keyword){
        return $this->table('transaksi')->like('id_pelanggan', $keyword)->orLike('id', $keyword);
    }
}