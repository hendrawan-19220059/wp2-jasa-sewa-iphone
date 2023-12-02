<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        
    }



    public function index()
    {
        // $currentPage = $this->request->getVar('page_perangkat') ? $this->request->getVar('page_perangkat') : 1;
        
        $keyword = $this->request->getVar('keyword');
        
        if($keyword){
            $perangkat = $this->transaksiModel->cari($keyword);
        }else {
            $perangkat = $this->transaksiModel->findAll();
        }


        
        $data = [
            'title' => "". $this->judul_web,
            'perangkat' => $this->transaksiModel->paginate(5, 'perangkat'),
            'pager' => $this->transaksiModel->pager,
            // 'currentPage' => $currentPage
        ];
        return view('templates/header', $data) . view('/transaksi/index', $data) . view('templates/footer');
    }
    
    

    public function create(){
        session();
        $data = [
            'title' => "Tambah Perangkat". $this->judul_web,
            'validation' => \Config\Services::validation()
        ];
        
        return view('templates/header', $data) . view('perangkat/tambah_perangkat') . view('templates/footer');
    }



    public function save(){ 
        // validasi input
        if(!$this->validate([
            'kode_perangkat' => [
                'rules' => 'is_unique[perangkat.kode_perangkat]',
                'errors' => [
                    'is_unique' => 'Kode Perangkat sudah terdaftar!'
                ]
                ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors'=> [
                    'max_size' => 'Ukuran gambar tidak boleh melebihi 2 Mb',
                    'is_image' => 'File yang anda upload bukan gambar',
                    'mime_in' => 'Ekstensi file yang anda gunakan tidak tepat!'
                ]
                ]
        ])){
            $validation = \Config\Services::validation();
            // Mengembalikan ke halaman tambah perangkat
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Ambil gambar
        $gambar_perangkat = $this->request->getFile('gambar');


        if($gambar_perangkat->getError() == 4){
            $nama_gambar = 'default.jpg';

        }else{
            // Pindahkan gambar
            $gambar_perangkat->move('img/perangkat');
            // Ambil nama gambar
            $nama_gambar = $gambar_perangkat->getName();
        }



        $this->transaksiModel->save([
            'kode_perangkat' => $this->request->getPost('kode_perangkat'),
            'nama_perangkat' => $this->request->getPost('nama_perangkat'),
            'memory'=> $this->request->getPost('memory'),
            'warna' => $this->request->getPost('warna'),
            'gambar' => $nama_gambar
        ]);

        // Menambahkan session sebelum redirect untuk alert
        session()->setFlashdata("pesan", "Data berhasil ditambahkan!");

        return redirect()->to('/perangkat');
    }
    
    public function detail($kode_perangkat){
        $data = [
            'title' => "Detail Perangkat". $this->judul_web,
            'perangkat' => $this->transaksiModel->getPerangkat($kode_perangkat)
        ];
        
        if(empty($data['perangkat'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data perangkat tidak ditemukan!");
        };
        
        return view('templates/header', $data) . view('perangkat/detail_perangkat', $data) . view('templates/footer');
    }


    public function update($id){
        session();
        $data = [
            'title' => "Update Perangkat". $this->judul_web,
            'validation' => \Config\Services::validation(),
            'perangkat' => $this->transaksiModel->getPerangkat($id)
        ];     
        return view('templates/header', $data) . view('perangkat/update_perangkat') . view('templates/footer');
    }



    public function change($id){
        if(!$this->validate([
            'kode_perangkat' => [
                'rules' => 'is_unique[perangkat.kode_perangkat, id,' .  $id . ']',
                'errors' => [
                    'is_unique' => 'Kode Perangkat sudah terdaftar!'
                ]
                ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors'=> [
                    'max_size' => 'Ukuran gambar tidak boleh melebihi 2 Mb',
                    'is_image' => 'File yang anda upload bukan gambar',
                    'mime_in' => 'Ekstensi file yang anda gunakan tidak tepat!'
                ]
                ]
        ])) {
           
            $validation = \Config\Services::validation();
            // Mengembalikan ke halaman tambah perangkat
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        
        $perangkat = $this->transaksiModel->find($id);
        $gambar_perangkat = $this->request->getFile('gambar');
        $nama_gambar_lama = $perangkat['gambar'];
        $nama_gambar = '';

        // dd($nama_gambar_lama);

        if($gambar_perangkat->getError() != 4){
            unlink('img/perangkat/'. $nama_gambar_lama);
            // Pindahkan gambar
            $gambar_perangkat->move('img/perangkat');
            // Ambil nama gambar
            $nama_gambar = $gambar_perangkat->getName();
        }else{
            $nama_gambar = $nama_gambar_lama;
        }


        $this->transaksiModel->save([
            'id' => $id,
            'kode_perangkat' => $this->request->getPost('kode_perangkat'),
            'nama_perangkat' => $this->request->getPost('nama_perangkat'),
            'memory'=> $this->request->getPost('memory'),
            'warna' => $this->request->getPost('warna'),
            'gambar' => $nama_gambar
        ]);

        // Menambahkan session sebelum redirect untuk alert
        session()->setFlashdata("pesan", "Data berhasil diubah!");

        return redirect()->to('/perangkat');

    }

    public function delete($id){
        $perangkat = $this->transaksiModel->find($id);
                
        // Delete gambar di file lokal
        if($perangkat['gambar'] != 'default.jpg'){
            unlink('img/perangkat/'. $perangkat['gambar']);
        }
        
        // Delete gambar di database
        $this->transaksiModel->where(['id' => $id])->delete();

        // Kirim pesan ke halaman selanjutnya
        session()->setFlashdata('pesan-hapus', 'Data Berhasil Dihapus!');

        // Redirect ke halaman awal
        return redirect()->back();
    }   

}