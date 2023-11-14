<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),

        ];
        return view('admin/list_user', $data);
    }

    public function profile_admin(){
        return view('admin/profile_admin');
        }

        
    public function list_user(){
            return view('admin/list_user');
            }

     public function edit($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Edit User',
            'users' => $user,
        ];

        return view('admin/edit_user', $data);
    }

    public function update($id){
        $path = 'assets/upload/img';
        $foto = $this->request->getFile('user_image');

        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
        ];

        if ($foto->isValid()){
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)){
                $foto_path = base_url($path . $name);

                $data['user_image'] = $foto_path;
            }
        }

        $result = $this->userModel->updateUser($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/listuser'));
    }
    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'users' => $user,
        ];

        return view('admin/profile_user', $data);
    }
    public function destroy($id){
        $result = $this->userModel->deleteUser($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/listuser'))
        ->with ('success', 'Berhasil menghapus data');

        
    }
    public function dashboard(){
                return view('admin/dashboard_admin');
            }

}
