<?php
 
namespace App\Controllers;
 
use App\Models\PerangkatModel;
use App\Controllers\BaseController;
use App\Models\PelangganModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{

    protected $perangkatModel;
    protected $pelangganModel;
    protected $userListModel;

    public function __construct()
    {
        $this->perangkatModel = new PerangkatModel();
        $this->pelangganModel = new PelangganModel();
        $this->userListModel = new UserModel();
    }
    public function index()
    {
        session();
        $data = [
            'title' => "Dashboard". $this->judul_web,
            'perangkat' => $this->perangkatModel->countAll(),
            'pelanggan' => $this->pelangganModel->countAll(),
            'userList' => $this->userListModel->countAll()
        ];

        return view('templates/header', $data) . view('dashboard/dashboard') . view('templates/footer');

    }
}