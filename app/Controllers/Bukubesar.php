<?php

namespace App\Controllers;

class Bukubesar extends BaseController
{
    public function kode_akun()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/data_master/kode_akun',
        ];
        return view('layout/layout', $data);
    }

    public function saldo_awal_akun()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/data_master/saldo_awal_akun',
        ];
        return view('layout/layout', $data);
    }

    public function entri_jurnal()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/transaksi/entri_jurnal',
        ];
        return view('layout/layout', $data);
    }

    public function daftar_jurnal()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/transaksi/daftar_jurnal',
        ];
        return view('layout/layout', $data);
    }

    public function daftar_jurnal_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/transaksi/daftar_jurnal_entri',
        ];
        return view('layout/layout', $data);
    }

    public function tutup_buku()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/transaksi/tutup_buku',
        ];
        return view('layout/layout', $data);
    }

    public function laporan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/buku_besar/laporan',
        ];
        return view('layout/layout', $data);
    }


    public function kodeakun_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('tbl_kode_akun');
        $input = $this->request->getPost();
        $validation->setRule('kode_akun', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('nama_akun', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('tipe_akun', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('akun_induk', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('kode_panerimaan', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('kode_pengeluaran', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('akun_transaksi', 'The Please fill in requirment field is required', 'required');
        $id = $input['id'];



        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kode_akun' => $input['kode_akun'],
                'nama_akun' => $input['nama_akun'],
                'tipe_akun' => $input['tipe_akun'],
                'akun_induk' => $input['akun_induk'],
                'kode_panerimaan' => $input['kode_panerimaan'],
                'kode_pengeluaran' => $input['kode_pengeluaran'],
                'akun_transaksi' => $input['akun_transaksi'],
            ];

            if ($id == 0) {
                $result = $builder->insert($data);
                if ($result) {
                    // route_to(base_url('kasbank/transaksi/transferbank'));
                    echo json_encode(['message' => 'Inserted']);
                }
            } else {
                $result = $builder->where('id', $id)->update($data);
                if ($result) {
                    echo json_encode(['message' => 'Update']);
                }
            }
        } else {
            $arr = [
                'error' => true,
                'oneErr' => $validation->showError('kode_akun'),
                'twoErr' => $validation->showError('nama_akun'),
                'threeErr' => $validation->showError('tipe_akun'),
                'fourErr' => $validation->showError('akun_induk'),
                'fiveErr' => $validation->showError('kode_panerimaan'),
                'sixErr' => $validation->showError('kode_pengeluaran'),
                'sevenErr' => $validation->showError('akun_transaksi'),


            ];
            echo json_encode($arr);
        }
    }

    public function kodeakun_table()
    {
        $db = db_connect();
        $res = $db->table('tbl_kode_akun')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->kode_akun,
                $value->nama_akun,
                $value->tipe_akun,
                $value->akun_transaksi,


                // $value->status == null ? '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">Edit</a>' : '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">View</a>',

                '<button type="btn" onclick="kode_edit(' . $value->id . ')" class="btn btn-primary me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> edit</button>
                <button type="btn" onclick="kode_delete(' . $value->id . ')" class="btn btn-danger me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> Delete</button>'

            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }
    public function kode_akun_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('tbl_kode_akun')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }
    public function kodedelete($id = '')
    {
        $db = db_connect();
        $builder = $db->table('tbl_kode_akun');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }
    public function saldo_awal_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('saldo_awal_akun');
        $input = $this->request->getPost();
        $validation->setRule('kodeakun', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('debet', 'The Please fill in requirment field is required', 'required');
        $validation->setRule('kredit', 'The Please fill in requirment field is required', 'required');
        $id = $input['id'];

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kodeakun' => $input['kodeakun'],
                'debet' => $input['debet'],
                'kredit' => $input['kredit'],

            ];

            if ($id == 0) {
                $result = $builder->insert($data);
                if ($result) {
                    echo json_encode(['message' => 'Inserted']);
                }
            } else {
                $result = $builder->where('id', $id)->update($data);
                if ($result) {
                    echo json_encode(['message' => 'Update']);
                }
            }
        } else {
            $arr = [
                'error' => true,
                'oneErr' => $validation->showError('kodeakun'),
                'twoErr' => $validation->showError('debet'),
                'threeErr' => $validation->showError('kredit'),



            ];
            echo json_encode($arr);
        }
    }
    public function saldo_table()
    {
        $db = db_connect();
        $builder = $db->table('saldo_awal_akun as saldo');
        $builder->select('akun.*, akun.id as a_id, saldo.*');
        $builder->join('tbl_kode_akun as akun', 'akun.id = saldo.akun_id');
        $result = $builder->get()->getResult();

        $res = [];
        $data = [];
        foreach ($result as $val) {
            $data[] = [
                $val->kodeakun,
                $val->nama_akun,
                $val->debet,
                $val->kredit,
                '<button type="btn" onclick="kode_edit(' . $val->id . ')" class="btn btn-primary me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> edit</button>
                <button type="btn" onclick="kode_delete(' . $val->id . ')" class="btn btn-danger me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> Delete</button>'
            ];
        }

        echo json_encode(['data' => $data]);
    }

    // laporan
    public function laporan_add(){
          $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('buku_leporan');
        $input = $this->request->getPost();
        $validation->setRule('idlap', 'The  requirment fillaps', 'required');
        $validation->setRule('cabang', 'The requirment fillaps', 'required');
        $id = $input['id'];

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'idlap' => $input['idlap'],
                'tanggal1' => $input['tanggal1'],
                'tanggal2' => $input['tanggal2'],
                'perk' => $input['perk'],
                'cabang' => $input['cabang'],
            ];
            if ($id == 0) {
                $result = $builder->insert($data);
                if ($result) {
                    echo json_encode(['message' => 'Inserted']);
                }
            } else {
                $result = $builder->where('id', $id)->update($data);
                if ($result) {
                    echo json_encode(['message' => 'Update']);
                }
            }
        } else {
            $arr = [
                'error' => true,
                'oneErr' => $validation->showError('idlap'),
                'twoErr' => $validation->showError('cabang'),
            ];
            echo json_encode($arr);
        }
     
        
    }
}
