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
            'transaksi' => $this->transaksiModel->paginate(5, 'perangkat'),
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
        // validasi input
        // $rules = [
        //     'tanggal_transaksi' => [
        //         'rules' => 'valid_date[m/d/Y]'
        //         ]
        //         ];
                
        // if(!$this->validate($rules)){
        //     $validation = \Config\Services::validation();
        //     // Mengembalikan ke halaman tambah perangkat
        //     return redirect()->back()->withInput()->with('validation', $validation);
        // }

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
    
   
    public function delete($id){
        // Delete gambar di database
        $this->transaksiModel->where(['id_transaksi' => $id])->delete();

        // Kirim pesan ke halaman selanjutnya
        session()->setFlashdata('pesan-hapus', 'Data Berhasil Dihapus!');

        // Redirect ke halaman awal
        return redirect()->back();
    }   

}
