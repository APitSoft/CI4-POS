<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dashboard()
    {
        if (empty(session()->get('username'))) {
            return redirect()->to('/');
        } else {
            $css = [];
            $js = ['public/assets/js/pages/apexcharts.init.js', 'public/assets/libs/apexcharts/apexcharts.min.js'];
            $data  = [
                'css' => $css,
                'js' => $js,
                'title' => 'e-Abiyosoft &#8482;',
                'body' => 'admin/dashboard',
            ];
            return view('layout/layout', $data);
        }
    }
    public function profile()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/profile',
        ];
        return view('layout/layout', $data);
    }
}
