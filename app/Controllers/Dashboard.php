<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
 
class Dashboard extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'title' => "Dashboard". $this->judul_web,
        ];

        return view('templates/header', $data) . view('dashboard/dashboard') . view('templates/footer');

    }
}