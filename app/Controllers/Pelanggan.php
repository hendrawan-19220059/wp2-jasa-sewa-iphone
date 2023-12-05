<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new PelangganModel();
        
    }



    public function index()
    {
        $currentPage = $this->request->getVar('page_perangkat') ? $this->request->getVar('page_perangkat') : 1;
        
        $keyword = $this->request->getVar('keyword');
        
        if($keyword){
            $pelanggan = $this->pelangganModel->cari($keyword);
        }else {
            $pelanggan = $this->pelangganModel->findAll();
        }


        
        $data = [
            'title' => "List Pelanggan". $this->judul_web,
            'pelanggan' => $this->pelangganModel->paginate(5, 'perangkat'),
            'pager' => $this->pelangganModel->pager,
            'currentPage' => $currentPage
        ];
        return view('templates/header', $data) . view('/pelanggan/index', $data) . view('templates/footer');
    }
    
    

    public function create(){
        session();
        $data = [
            'title' => "Tambah Pelanggan". $this->judul_web,
            'validation' => \Config\Services::validation()
        ];
        
        return view('templates/header', $data) . view('pelanggan/tambah_pelanggan') . view('templates/footer');
    }


    public function save(){ 
        // validasi input
        $rules = [
            'nama_pelanggan' => ['rules' => 'required|min_length[4]|max_length[255]'],
            'no_id' => ['rules' => 'required|min_length[4]|max_length[255]|is_unique[users.nama]'],
            'alamat' => ['rules' => 'required|min_length[4]|max_length[255]'],
            'no_telp' => ['rules' => 'required|min_length[8]|max_length[255]'],
        ];


        if(!$this->validate($rules)){
            $validation = \Config\Services::validation();
            // Mengembalikan ke halaman tambah pelanggan
            return redirect()->back()->withInput()->with('validation', $validation);
        }


        $this->pelangganModel->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'no_id' => $this->request->getPost('no_id'),
            'alamat'=> $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
        ]);

        // Menambahkan session sebelum redirect untuk alert
        session()->setFlashdata("pesan", "Data berhasil ditambahkan!");

        return redirect()->to('/pelanggan');
    }
    

    public function update($id){
        session();
        $data = [
            'title' => "Update Pelanggan". $this->judul_web,
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->pelangganModel->getPelanggan($id)
        ];     
        return view('templates/header', $data) . view('pelanggan/update_pelanggan') . view('templates/footer');
    }



    public function change($id){
        $rules = [
            'no_id' => [
                'rules' => 'is_unique[pelanggan.no_id, id_pelanggan,' .  $id . ']',
                'errors' => [
                    'is_unique' => 'Id pelanggan sudah terdaftar!'
                ]
                ]
                ];


        if(!$this->validate($rules)) {
           
            $validation = \Config\Services::validation();
            // Mengembalikan ke halaman tambah perangkat
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        
        $pelanggan = $this->pelangganModel->find($id);
        


        $this->pelangganModel->save([
            'id_pelanggan' => $id,
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'no_id' => $this->request->getPost('no_id'),
            'alamat'=> $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
        ]);

        // Menambahkan session sebelum redirect untuk alert
        session()->setFlashdata("pesan", "Data berhasil diubah!");

        return redirect()->to('/pelanggan');

    }

    public function delete($id){

        $this->pelangganModel->where(['id_pelanggan' => $id])->delete();

        // Kirim pesan ke halaman selanjutnya
        session()->setFlashdata('pesan-hapus', 'Data Berhasil Dihapus!');

        // Redirect ke halaman awal
        return redirect()->back();
    }   

}
