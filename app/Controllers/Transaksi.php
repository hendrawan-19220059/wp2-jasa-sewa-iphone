<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\UserModel;
use App\Models\PerangkatModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;
    protected $perangkatModel;
    protected $pelangganModel;
    protected $userModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->perangkatModel = new PerangkatModel();
        $this->userModel = new UserModel();
        $this->pelangganModel = new PelangganModel();

        
    }



    public function index()
    {
        // $currentPage = $this->request->getVar('page_perangkat') ? $this->request->getVar('page_perangkat') : 1;
        
        $keyword = $this->request->getVar('keyword');
        
        if($keyword){
            $transaksi = $this->transaksiModel->cari($keyword);
        }else {
            $transaksi = $this->transaksiModel->getTransaksiData();
        }
        
        $data = [
            'title' => "". $this->judul_web,
            'transaksi' => $transaksi,
            'pager' => $this->transaksiModel->pager,
            // 'currentPage' => $currentPage
        ];
        return view('templates/header', $data) . view('/transaksi/index', $data) . view('templates/footer');
    }
    
    

    public function create(){
        session();
        $data = [
            'title' => "Transaksi". $this->judul_web,
            'perangkat' => $this->perangkatModel->findAll(),
            'pelanggan' => $this->pelangganModel->findAll(),
            'user' => $this->userModel->findAll(),
            'validation' => \Config\Services::validation()
        ];
        
        return view('templates/header', $data) . view('transaksi/tambah_transaksi') . view('templates/footer');
    }



    public function save(){ 
        $this->transaksiModel->save([
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
            'id_pelanggan' => $this->request->getPost('id_pelanggan'),
            'id_perangkat'=> $this->request->getPost('id_perangkat'),
            'id'=> $this->request->getPost('user_id'),
        ]);

        // Menambahkan session sebelum redirect untuk alert
        // session()->setFlashdata("pesan", "Data berhasil ditambahkan!");
        
        return redirect()->to('/transaksi');
    }
    
}
