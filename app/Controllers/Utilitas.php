<?php

namespace App\Controllers;

class Utilitas extends BaseController
{
    public function pengguna()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/utilitas/pengguna',
        ];
        return view('layout/layout', $data);
    }

    public function grup_pemakai()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/utilitas/grup_pemakai',
        ];
        return view('layout/layout', $data);
    }

    public function kode_cabang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/utilitas/kode_cabang',
        ];
        return view('layout/layout', $data);
    }

    public function profile_edit()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/utilitas/profile_edit',
        ];
        return view('layout/layout', $data);
    }

    public function nomor_bukti()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/utilitas/nomor_bukti',
        ];
        return view('layout/layout', $data);
    }
}
