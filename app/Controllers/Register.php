<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Register extends BaseController
{
 
    public function __construct(){
        helper(['form']);
    }
 
    public function index()
    {
        $data = [];
        return view('register', $data);
    }
   
    public function register()
    {
        $rules = [
            'username' => ['rules' => 'required|min_length[4]|max_length[255]|is_unique[users.username]'],
            'nama' => ['rules' => 'required|min_length[4]|max_length[255]|is_unique[users.nama]'],
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password'  => [ 'label' => 'confirm password', 'rules' => 'matches[password]']
        ];
           
 
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'nama'     => $this->request->getVar('nama'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
           
    }
}