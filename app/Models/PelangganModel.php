<?php

namespace App\Models;

use CodeIgniter\Model;
// use ReturnTypeWillChange;

class PelangganModel extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_pelanggan', 'no_id', 'alamat', 'no_telp'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getPelanggan($no_id = false){
        // Jika tidak memiliki paramatere maka query seluruh data
        if($no_id == false){
            return $this->findAll();
        }
        // Jika ada parameter yang ditambahkan maka tampilkan data pertama
        return $this->where(['no_id' => $no_id])->first();
    }

    public function cari($keyword){
        return $this->table('pelanggan')->like('no_id', $keyword)->orLike('nama_pelanggan', $keyword);
    }
}