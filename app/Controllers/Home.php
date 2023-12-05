<?php

namespace App\Controllers;
use App\Models\PerangkatModel;
class Home extends BaseController
{
    protected $perangkatModel;

    public function __construct()
    {
        $this->perangkatModel = new PerangkatModel();
    }

    public function index()
    {
        $data = [
            'title' => $this->judul_web,
            'perangkat' => $this->perangkatModel->findAll()
        ];

        return view('index', $data);
    }
}
