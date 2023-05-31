<?php

namespace App\Controllers;

class Penjualan extends BaseController
{
    //Data Customer Page Start Here
    public function data_customer()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Data Customer',
            'body' => 'admin/penjualan/datacustomer',
        ];
        return view('layout/layout', $data);
    }

    public function data_customer_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('data_customer');
        $input = $this->request->getPost();
        $validation->setRule('tipe', 'Telp', 'required');
        $validation->setRule('kredit', 'Kredit', 'required');
        $validation->setRule('alamat1', 'Alamat 1', 'required');
        $validation->setRule('npwp', 'NPWP', 'required');
        $validation->setRule('bataskredit', 'BatasKredit', 'required');
        $validation->setRule('cabang', 'Cabang', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kode' => $input['kode'],
                'tipe' => $input['tipe'],
                'kredit' => $input['kredit'],
                'nama' => $input['nama'],
                'telp' => $input['telp'],
                'fax' => $input['fax'],
                'ktp' => $input['ktp'],
                'hp' => $input['hp'],
                'contactname' => $input['contactname'],
                'email' => $input['email'],
                'alamat1' => $input['alamat1'],
                'alamat2' => $input['alamat2'],
                'kota' => $input['kota'],
                'kodepos' => $input['kodepos'],
                'npwp' => $input['npwp'],
                'sales' => $input['sales'],
                'bataskredit' => $input['bataskredit'],
                'top' => $input['top'],
                'namapt' => $input['namapt'],
                'sppn' => $input['sppn'],
                'saldokredit' => $input['saldokredit'],
                'cabang' => $input['cabang'],
            ];

            $result = $builder->insert($data);
            if ($result) {
                echo json_encode(['message' => 'inserted']);
            }
        } else {
            $arr = [
                'error' => true,
                'tipeErr' => $validation->showError('tipe'),
                'kreditErr' => $validation->showError('kredit'),
                'alamat1Err' => $validation->showError('alamat1'),
                'npwpErr' => $validation->showError('npwp'),
                'bataskreditErr' => $validation->showError('bataskredit'),
                'cabangErr' => $validation->showError('cabang'),

            ];
            echo json_encode($arr);
        }
    }

    public function data_customer_table()
    {
        $db = db_connect();
        $res = $db->table('data_customer')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->kode,
                $value->nama,
                $value->alamat1,
                $value->telp,
                $value->contactname,
                $value->top,
                '<button class="btn btn-primary me-2 mb-2" onclick="data_customer_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="data_customer_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function data_customer_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('data_customer')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function data_customer_update($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('data_customer');
        $input = $this->request->getPost();
        $validation->setRule('tipe', 'Telp', 'required');
        $validation->setRule('kredit', 'Nama', 'required');
        $validation->setRule('alamat1', 'Alamat 1', 'required');
        $validation->setRule('npwp', 'NPWP', 'required');
        $validation->setRule('bataskredit', 'BatasKredit', 'required');
        $validation->setRule('cabang', 'Cabang', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kode' => $input['kode'],
                'tipe' => $input['tipe'],
                'kredit' => $input['kredit'],
                'nama' => $input['nama'],
                'telp' => $input['telp'],
                'fax' => $input['fax'],
                'ktp' => $input['ktp'],
                'hp' => $input['hp'],
                'contactname' => $input['contactname'],
                'email' => $input['email'],
                'alamat1' => $input['alamat1'],
                'alamat2' => $input['alamat2'],
                'kota' => $input['kota'],
                'kodepos' => $input['kodepos'],
                'npwp' => $input['npwp'],
                'sales' => $input['sales'],
                'bataskredit' => $input['bataskredit'],
                'top' => $input['top'],
                'namapt' => $input['namapt'],
                'sppn' => $input['sppn'],
                'saldokredit' => $input['saldokredit'],
                'cabang' => $input['cabang'],
            ];

            $result = $builder->where('id', $id)->update($data);
            if ($result) {
                echo json_encode(['message' => 'Updated']);
            }
        } else {
            $arr = [
                'error' => true,
                'tipeErr' => $validation->showError('tipe'),
                'kreditErr' => $validation->showError('kredit'),
                'alamat1Err' => $validation->showError('alamat1'),
                'npwpErr' => $validation->showError('npwp'),
                'bataskreditErr' => $validation->showError('bataskredit'),
                'cabangErr' => $validation->showError('cabang'),

            ];
            echo json_encode($arr);
        }
    }

    public function data_customer_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('data_customer');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }
    //Daftar Marketing Page Start Here
    public function daftar_marketing()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Daftar Marketing',
            'body' => 'admin/penjualan/daftarmarketing',
        ];
        return view('layout/layout', $data);
    }

    // Add & Update 
    public function marketing_add($id = '')
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('daftar_marketing');
        $input = $this->request->getPost();
        $validation->setRule('nama', 'Nama', 'required');
        $validation->setRule('telp', 'Telpon', 'required');
        $validation->setRule('area', 'Area', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
                'telp' => $input['telp'],
                'area' => $input['area'],
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
                'namaErr' => $validation->showError('nama'),
                'telpErr' => $validation->showError('telp'),
                'areaErr' => $validation->showError('area'),

            ];
            echo json_encode($arr);
        }
    }

    public function pesanan_sub()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('pesanan_masuk');
        $validation->setRule('cust', 'cust', 'required');
        $input = $this->request->getPost();
        $id = $input['id'];
        $arr_1 = [];
        $arr_2 = [];
        foreach ($input['kode'] as $key => $value) {
            $arr_1[] = [
                'item_name' => $input['kode'][$key],
                'qty' => $input['qty'][$key],
                'sat' => $input['sat'][$key]
            ];
        }
        foreach ($input['lkode'] as $key => $value) {
            $arr_2[] = [
                'item_name' => $input['lkode'][$key],
                'qty' => $input['ljumlah'][$key],
                'sat' => $input['lket'][$key]
            ];
        }

        if ($input['cust'] != 0) {
            $data = [
                'cust_id' => $input['cust'],
                'tanggal' => $input['tanggal'],
                'sppn' => $input['sppn'],
                'no_po' => $input['no-po'],
                'nomorbukti' => $input['nomorbukti'],
                'marketing' => $input['sales'],
                'pembayaran' => $input['pembayaran'],
                'tanggal_kirim' => $input['tanggal_kirim'],
                'total' => $input['_h_total'],
                'keterangan' => $input['keterangan'],
                'alamat' => $input['alamat'],
                'pesanan_items' => json_encode($arr_1),
                'biaya_items' => json_encode($arr_2),
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
                'customer' => $validation->showError('customer name not found'),
            ];
            echo json_encode($arr);
        }
    }
    public function daftar_marketing_table()
    {
        $db = db_connect();
        $res = $db->table('daftar_marketing')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->nama,
                $value->telp,
                $value->area,
                '<button class="btn btn-primary me-2 mb-2" onclick="daftar_marketing_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="daftar_marketing_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function marketing_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('daftar_marketing')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function daftar_marketing_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('daftar_marketing');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    //Pesanan Masuk Page Start Here
    public function pesanan_masuk()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'dfaf' => 'dfasfd',
            'title' => 'Pesanan Masuk',
            'body' => 'admin/penjualan/transaksi/pasananmasuk',
        ];
        return view('layout/layout', $data);
    }
    public function pesanan_table()
    {
        $db = db_connect();
        $res = $db->table('pesanan_masuk')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $index => $value) {
           
            $res = $db->table('data_customer')->where('id', $value->cust_id)->get()->getRow();
            $data[] = [
                $index + 1,
                $value->nomorbukti,
                $value->tanggal,
                $res->nama,
                $value->keterangan,
                $value->status == null ? '<span class="badge badge-warning">Barang Pendingan PRA PO</span>' : '<span class="badge badge-primary">Proses Menunggu PO</span>',
                $value->total,
                
                $value->status == null ? '<a href="' . base_url('penjualan/transaksi/pesananmasuk/entri/' . $value->id) . '">Edit</a>' : '<a href="' . base_url('penjualan/transaksi/pesananmasuk_entri/' . $value->id) . '">View</a>',
                $value->status == null ? '<button class="btn" onclick="return confirm("yes")">Hapus</button>' : '<button class="btn" onclick="return confirm("yes")">Hapus</button>'
            ];
        }
        $result = ['data' => $data];
        echo json_encode($result);
    }
    public function pesanan_masuk_entri($id='')
    {
        $css = [];
        $js = [];
        $db = db_connect();
        $data=[];
        if($id>0)
        {
            $data = $db->table('pesanan_masuk')->where('id', $id)->get()->getRow();
        }
        
        $res = $db->table('data_customer')->get()->getResult();
        $data  = [
            'css' => $css,
            'data' => $data ?? [],
            'js' => $js,
            'res' => $res,
            'title' => 'Pesanan Masuk',
            'body' => 'admin/penjualan/transaksi/pasananmasukentri',
            
        ];
        return view('layout/layout', $data);
    }
    public function customerdata($id)
    {
        $db = db_connect();
        $customer_data = $db->table('data_customer')->where('id', $id)->get()->getRow();
        $marketting_data = $db->table('daftar_marketing')->where('id', $customer_data->sales)->get()->getRow();
        $response = ['customer_data' => $customer_data,'marketting_data' => $marketting_data];
        echo json_encode($response);
    }
    //Pesanan Disiapkan Page Start Here
    public function pesanan_disiapkan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pesanan Disiapkan',
            'body' => 'admin/penjualan/transaksi/pasanandisiapkan',
        ];
        return view('layout/layout', $data);
    }

    public function pesanan_disiapkan_entri()
    {
        $css = [];
        $js = [];
        $db = db_connect();
        $res = $db->table('data_customer')->get()->getResult();
        $data  = [
            'css' => $css,
            'js' => $js,
            'res' => $res,
            'title' => 'Pesanan Disiapkan',
            'body' => 'admin/penjualan/transaksi/pasanandisiapkanentri',
        ];
        return view('layout/layout', $data);
    }

    //Faktur Penjualan Page Start Here
    public function faktur_penjualan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Faktur Penjualan',
            'body' => 'admin/penjualan/transaksi/fakturpenjualan',
        ];
        return view('layout/layout', $data);
    }
    public function faktur_penjualan_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Faktur Penjualan',
            'body' => 'admin/penjualan/transaksi/fakturpenjualanentri',
        ];
        return view('layout/layout', $data);
    }

    //Uang Muka Penjualan Page Start Here
    public function uang_muka_penjualan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Uang Muka Penjualan',
            'body' => 'admin/penjualan/transaksi/uang-muka-penjualan',
        ];
        return view('layout/layout', $data);
    }
    public function uang_muka_penjualan_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Uang Muka Penjualan',
            'body' => 'admin/penjualan/transaksi/uang-muka-penjualan-entri',
        ];
        return view('layout/layout', $data);
    }

    //Pembayaran Hutang Customer Page Start Here
    public function pembayaran_hutang_customer()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pembayaran Hutang Customer',
            'body' => 'admin/penjualan/transaksi/pembayarang-hutang-customer',
        ];
        return view('layout/layout', $data);
    }
    public function pembayaran_hutang_customer_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pembayaran Hutang Customer',
            'body' => 'admin/penjualan/transaksi/pembayarang-hutang-customer-entri',
        ];
        return view('layout/layout', $data);
    }

    //Retur Penjualan Page Start Here
    public function retur_penjualan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Retur Penjualan',
            'body' => 'admin/penjualan/transaksi/retur-penjualan',
        ];
        return view('layout/layout', $data);
    }
    public function retur_penjualan_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Retur Penjualan',
            'body' => 'admin/penjualan/transaksi/retur-penjualan-entri',
        ];
        return view('layout/layout', $data);
    }

    //Laporan Page Start Here
    public function laporan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Laporan',
            'body' => 'admin/penjualan/laporan',
        ];
        return view('layout/layout', $data);
    }

    //Faktur Pajak Page Start Here
    public function faktur_pajak()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Faktur Pajak',
            'body' => 'admin/penjualan/exportData/fakturpajak',
        ];
        return view('layout/layout', $data);
    }

    //Data Sub Penjualan Page Start Here
    public function data_sub_penjualan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Data Sub Penjualan',
            'body' => 'admin/penjualan/exportData/datasubpenjualan',
        ];
        return view('layout/layout', $data);
    }

    //Export Penjualan Page Start Here
    public function export_penjualan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Export Penjualan',
            'body' => 'admin/penjualan/exportData/exportpenjualan',
        ];
        return view('layout/layout', $data);
    }
}
