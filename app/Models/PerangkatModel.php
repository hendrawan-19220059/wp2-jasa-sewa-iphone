<?php

namespace App\Models;

use CodeIgniter\Model;
// use ReturnTypeWillChange;

class PerangkatModel extends Model
{
    protected $table      = 'perangkat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_perangkat', 'nama_perangkat', 'memory', 'warna', 'gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getPerangkat($kode_perangkat = false){
        // Jika tidak memiliki paramatere maka query seluruh data
        if($kode_perangkat == false){
            return $this->findAll();
        }
        // Jika ada parameter yang ditambahkan maka tampilkan data pertama
        return $this->where(['kode_perangkat' => $kode_perangkat])->first();
    }

    public function cari($keyword){
        return $this->table('perangkat')->like('kode_perangkat', $keyword)->orLike('nama_perangkat', $keyword);
    }
}