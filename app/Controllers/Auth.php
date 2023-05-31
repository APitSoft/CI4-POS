<?php

namespace App\Controllers;

namespace App\Config\Session;

class Auth extends BaseController
{
    public function index()
    {
        if (!empty(session()->get('username'))) {
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            $css = [];
            $js = [];
            $data  = [
                'css' => $css,
                'js' => $js,
                'title' => 'e-Abiyosoft &#8482;',
            ];
            return view('admin/login', $data);
        }
    }

    public function login_check()
    {
        // $validation =  \Config\Services::validation();
        // $db = db_connect();
        // $builder = $db->table('suplier');
        $input = $this->request->getPost();

        if ($input['username'] == 'Ajf' && $input['password'] == 'ajf@2022') {
            $session = \Config\Services::session();
            $session->set(['username' => $input['username'], 'password' => $input['password']]);
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            return $this->response->redirect(base_url('/'));
        }
    }

    public function log_out()
    {
        session()->remove(['username', 'password']);
        return $this->response->redirect(base_url('/'));
    }
}
