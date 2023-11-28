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
    
    // public function detail($kode_perangkat){
    //     $data = [
    //         'title' => "Detail Perangkat". $this->judul_web,
    //         'perangkat' => $this->pelangganModel->getPerangkat($kode_perangkat)
    //     ];
        
    //     if(empty($data['perangkat'])){
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException("Data perangkat tidak ditemukan!");
    //     };
        
    //     return view('templates/header', $data) . view('perangkat/detail_perangkat', $data) . view('templates/footer');
    // }


    public function update($id){
        session();
        $data = [
            'title' => "Update Perangkat". $this->judul_web,
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->pelangganModel->getPelanggan($id)
        ];     
        return view('templates/header', $data) . view('pelanggan/update_pelanggan') . view('templates/footer');
    }



    public function change($id){
        if(!$this->validate([
            'kode_perangkat' => [
                'rules' => 'is_unique[perangkat.kode_perangkat, id_pelanggan,' .  $id . ']',
                'errors' => [
                    'is_unique' => 'Kode Perangkat sudah terdaftar!'
                ]
                ]
                ]
        )) {
           
            $validation = \Config\Services::validation();
            // Mengembalikan ke halaman tambah perangkat
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        
        $perangkat = $this->pelangganModel->find($id);
        


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

    // public function delete($id){
    //     $perangkat = $this->pelangganModel->find($id);
                
    //     // Delete gambar di file lokal
    //     if($perangkat['gambar'] != 'default.jpg'){
    //         unlink('img/perangkat/'. $perangkat['gambar']);
    //     }
        
    //     // Delete gambar di database
    //     $this->pelangganModel->where(['id' => $id])->delete();

    //     // Kirim pesan ke halaman selanjutnya
    //     session()->setFlashdata('pesan-hapus', 'Data Berhasil Dihapus!');

    //     // Redirect ke halaman awal
    //     return redirect()->back();
    // }   

}
