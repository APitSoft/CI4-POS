<?php

namespace App\Controllers;

class Kasbank extends BaseController
{
    public function penerimaan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/penerimaan',
        ];
        return view('layout/layout', $data);
    }

    public function penerimaan_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/penerimaan_entri',
        ];
        return view('layout/layout', $data);
    }
    public function transfer_entri($id = '')
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/transfer_bank_entri',
            'id' => $id ?? '',
        ];
        return view('layout/layout', $data);
    }
    public function pembayaran_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/pembayaran_entri',
        ];
        return view('layout/layout', $data);
    }

    public function pembayaran()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/pembayaran',
        ];
        return view('layout/layout', $data);
    }

    public function transfer_bank()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'e-Abiyosoft &#8482;',
            'body' => 'admin/kas_bank/transaksi/transfer_bank',
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
            'body' => 'admin/kas_bank/laporan',
        ];
        return view('layout/layout', $data);
    }

    public function transfer_bank_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('transfer_bank');
        $input = $this->request->getPost();
        $validation->setRule('information', 'Information', 'required');
        $validation->setRule('from_bank', 'From Bank', 'required');
        $validation->setRule('kas_bank', 'Kas Bank', 'required');
        $id = $input['id'];



        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nomorbukti' => $input['nomorbukti'],
                'tanggal' => $input['tanggal'],
                'from_bank' => $input['from_bank'],
                'information' => $input['information'],
                'kas_bank' => $input['kas_bank'],
                'transfer_value' => $input['transfer_value'],
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

                'nomorbuktierr' => $validation->showError('from_bank'),
                'informationerr' => $validation->showError('information'),
                'kas_bankerr' => $validation->showError('kas_bank'),


            ];
            echo json_encode($arr);
        }
    }
    public function transfer_table()
    {
        $db = db_connect();
        $res = $db->table('transfer_bank')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nomorbukti,
                $value->tanggal,
                $value->from_bank,
                $value->information,
                $value->kas_bank,
                $value->transfer_value,
                // $value->status == null ? '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">Edit</a>' : '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">View</a>',
                '<a href="' . base_url('kasbank/transaksi/transfer_bank/entri' . $value->id) . '" class="btn btn-primary me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> Edit</a>
                <a href="#" onclick="bank_delete(' . $value->id . ')" class="btn btn-danger me-2 mb-2" ><i class="fa-solid fa-edit text-white"></i> Delete</a>'

            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }
    public function bank_delete($id = '')
    {
        $db = db_connect();
        $builder = $db->table('transfer_bank');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }
}
