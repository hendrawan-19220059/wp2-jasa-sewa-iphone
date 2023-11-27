<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserList extends BaseController
{
    protected $userListModel;

    public function __construct()
    {
        $this->userListModel = new UserModel();
        
    }



    public function index()
    {
        $currentPage = $this->request->getVar('page_perangkat') ? $this->request->getVar('page_perangkat') : 1;
        
        $keyword = $this->request->getVar('keyword');
        
        if($keyword){
            $userList = $this->userListModel->cari($keyword);
        }else {
            $userList = $this->userListModel->findAll();
        }

        
        $data = [
            'title' => "User List". $this->judul_web,
            'userList' => $this->userListModel->paginate(5, 'perangkat'),
            'pager' => $this->userListModel->pager,
            'currentPage' => $currentPage
        ];
        return view('templates/header', $data) . view('/user-list/index', $data) . view('templates/footer');
    }
    

}
