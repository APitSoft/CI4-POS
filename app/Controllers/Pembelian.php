<?php

namespace App\Controllers;

use Config\Validation;

// $request = \Config\Services::request();
class Pembelian extends BaseController
{
    // =========================== Suplier Section Start ======================
    //Suplier Page Start Here
    public function suplier()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Suplier',
            'body' => 'admin/pembelian/suplier',
        ];
        return view('layout/layout', $data);
    }

    public function suplier_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('suplier');
        $input = $this->request->getPost();
        $validation->setRule('kode', 'Kode', 'required');
        $validation->setRule('telp', 'Telp', 'required');
        $validation->setRule('nama', 'Nama', 'required');
        $validation->setRule('alamat1', 'Alamat 1', 'required');
        $validation->setRule('kota', 'Kota', 'required');
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kode' => $input['kode'],
                'telp' => $input['telp'],
                'npwp' => $input['npwp'],
                'nama' => $input['nama'],
                'fax' => $input['fax'],
                'alamat1' => $input['alamat1'],
                'hp' => $input['hp'],
                'alamat2' => $input['alamat2'],
                'contactname' => $input['contactname'],
                'kota' => $input['kota'],
                'email' => $input['email'],
                'kodepos' => $input['kodepos'],
                'pkp' => $input['pkp'],
                'top' => $input['top']
            ];

            $result = $builder->insert($data);
            if ($result) {
                echo json_encode(['message' => 'inserted']);
            }
        } else {
            $arr = [
                'error' => true,
                'kodeErr' => $validation->showError('kode'),
                'telpErr' => $validation->showError('telp'),
                'namaErr' => $validation->showError('nama'),
                'alamatErr' => $validation->showError('alamat1'),
                'kotaErr' => $validation->showError('kota'),
            ];
            echo json_encode($arr);
        }
    }

    public function suplier_table()
    {
        $db = db_connect();
        $res = $db->table('suplier')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->kode,
                $value->nama,
                $value->alamat1,
                $value->telp,
                $value->contactname,
                '<button class="btn btn-primary me-2 mb-2" onclick="suplier_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="suplier_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function suplier_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('suplier')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function suplier_update($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('suplier');
        $input = $this->request->getPost();
        $validation->setRule('kode', 'Kode', 'required');
        $validation->setRule('telp', 'Telp', 'required');
        $validation->setRule('nama', 'Nama', 'required');
        $validation->setRule('alamat1', 'Alamat 1', 'required');
        $validation->setRule('kota', 'Kota', 'required');
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'kode' => $input['kode'],
                'telp' => $input['telp'],
                'npwp' => $input['npwp'],
                'nama' => $input['nama'],
                'fax' => $input['fax'],
                'alamat1' => $input['alamat1'],
                'hp' => $input['hp'],
                'alamat2' => $input['alamat2'],
                'contactname' => $input['contactname'],
                'kota' => $input['kota'],
                'email' => $input['email'],
                'kodepos' => $input['kodepos'],
                'pkp' => $input['pkp'],
                'top' => $input['top']
            ];

            $result = $builder->where('id', $id)->update($data);
            if ($result) {
                echo json_encode(['message' => 'Updated']);
            }
        } else {
            $arr = [
                'error' => true,
                'kodeErr' => $validation->showError('kode'),
                'telpErr' => $validation->showError('telp'),
                'namaErr' => $validation->showError('nama'),
                'alamatErr' => $validation->showError('alamat1'),
                'kotaErr' => $validation->showError('kota'),
            ];
            echo json_encode($arr);
        }
    }

    public function suplier_delete($id = '')
    {
        $db = db_connect();
        $builder = $db->table('suplier');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    // =========================== Suplier Section End ======================

    //Pra Pembelian Page Start Here
    public function pra_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pra Pembelian',
            'body' => 'admin/pembelian/transaksi/pra_pembelian',
        ];
        return view('layout/layout', $data);
    }


    //Pra Pembelian Entri Page Start Here
    public function pra_pembelian_entri($id = '')
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pra Pembelian',
            'body' => 'admin/pembelian/transaksi/pra_pembelian_entri',
            'id' => $id ?? '',
        ];
        return view('layout/layout', $data);
    }

    public function pra_pembelian_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('pra_pembelian');
        $input = $this->request->getPost();

        $validation->setRule('tanggal', 'Tanggal', 'required');
        $validation->setRule('keterangan', 'Keterangan', 'required');
        $id = $input['id'];
        $arr = [];

        foreach ($input['kode'] as $key => $value) {
            $arr[] = [
                'item_name' => $input['kode'][$key],
                'qty' => $input['qty'][$key],
                'stock' => $input['stock'][$key],
                'price' => $input['stok_min'][$key],
                'sat' => $input['sat'][$key],
            ];
        }
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'date' => $input['tanggal'],
                'nomor' => $input['nomor'],
                'keterangan' => $input['keterangan'],
                'items' => json_encode($arr),
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
                'tanggalErr' => $validation->showError('tanggal'),
                'keteranganErr' => $validation->showError('keterangan'),
            ];
            echo json_encode($arr);
        }
    }


    public function pra_pembelian_table()
    {
        $db = db_connect();
        $res = $db->table('pra_pembelian')->get()->getResult();
        $result = array();
        $data = [];
        $count = 1;
        foreach ($res as $value) {
            $count++;
            $data[] = [
                $count,
                $value->nomor,
                $value->date,
                $value->keterangan,
                $value->status == null ? '<span class="badge badge-warning">Barang Pendingan PRA PO</span>' : '<span class="badge badge-primary">Proses Menunggu PO</span>',
                $value->status == null ? '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">Edit</a>' : '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">View</a>',
                $value->status == null ? '<button class="btn" onclick="return confirm("yes")">Hapus</button>' : '<button class="btn" onclick="return confirm("yes")">Hapus</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }


    //Pesanan Pembelian Page Start Here
    public function pesanan_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pesanan Pembelian',
            'body' => 'admin/pembelian/transaksi/pasanan_pembelian',
        ];
        return view('layout/layout', $data);
    }
    //Pesanan Pembelian Page Start Here
    public function pesanan_pembelian_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pembelian',
            'body' => 'admin/pembelian/transaksi/pesananpembelianentri',
        ];
        return view('layout/layout', $data);
    }

    public function pesanan_pembelian_add()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('pesanan_pembelian');
        $input = $this->request->getPost();
        $validation->setRule('supp', 'Supplier', 'required');
        $validation->setRule('ket', 'Keterangan', 'required');
        $id = $input['id'];

        $arr = [];
        $arr2 = [];
        foreach ($input['kode'] as $key => $value) {
            $arr[] = [
                'item_kode' => $input['kode'][$key],
                'qty' => $input['qty'][$key],
                'stok_min' => $input['stok_min'][$key],
                'sat' => $input['stock'][$key],
                'harga' => $input['harga'][$key],
                'disc' => $input['disc'][$key],
                'jumlah' => $input['jumlah'][$key],
            ];
        }
        foreach ($input['lkode'] as $key => $value) {
            $arr2[] = [
                'item_kode' => $input['lkode'][$key],
                'jumlah' => $input['ljumlah'][$key],
                'ket' => $input['lket'][$key],
            ];
        }
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nomor' => 'PPO.' . date('Y.m') . '.' . sprintf('%06d', 1),
                'supp' => $input['supp'],
                'sppn' => $input['sppn'],
                'prapo' => $input['prapo'],
                'tanggal' => $input['tanggal'],
                'ket' => $input['ket'],
                'tanggalkirim' => $input['tanggalkirim'],
                'nomorbukti' => $input['nomorbukti'],
                'top' => $input['top'],
                'kode' => $input['kode'],
                'pesanan_items' => json_encode($arr),
                'biaya_items' => json_encode($arr2),
                'total' => $input['all_total'],
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
                'suppErr' => $validation->showError('supp'),
                'ketErr' => $validation->showError('ket'),
            ];
            echo json_encode($arr);
        }
    }

    public function pesanan_pembelian_table()
    {
        $db = db_connect();
        $res = $db->table('pesanan_pembelian')->get()->getResult();
        $result = array();
        $data = [];
        $count = 1;
        foreach ($res as $value) {
            $count++;
            $data[] = [
                $count,
                $value->nomor,
                $value->tanggal,
                $db->table('suplier')->where('kode', $value->supp)->get()->getRow()->nama ?? '',

                $value->ket,
                $value->status == null ? '<span class="badge badge-primary">Proses Penerimaan</span>' : '<span class="badge badge-primary">Proses Penerimaan</span>',
                $value->total,
                $value->status == null ? '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">Edit</a>' : '<a href="' . base_url('pembelian/transaksi/prapembelian/entri/' . $value->id) . '">View</a>',
                $value->status == null ? '<button class="btn" onclick="return confirm("yes")">Hapus</button>' : '<button class="btn" onclick="return confirm("yes")">Hapus</button>',
                '<a href="#">Cetak</a>',
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    //Penerimaan Barang Page Start Here
    public function penerimaan_barang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Penerimaan Barang',
            'body' => 'admin/pembelian/transaksi/penerimaan_barang',
        ];
        return view('layout/layout', $data);
    }

    public function penerimaan_barang_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Penerimaan Barang',
            'body' => 'admin/pembelian/transaksi/penerimaanbarangentri',
        ];
        return view('layout/layout', $data);
    }

    //Faktur Pembelian Page Start Here
    public function faktur_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Faktur Pembelian',
            'body' => 'admin/pembelian/transaksi/faktur_pembelian',
        ];
        return view('layout/layout', $data);
    }

    public function faktur_pembelian_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Faktur Pembelian',
            'body' => 'admin/pembelian/transaksi/fakturpembelianentri',
        ];
        return view(
            'layout/layout',
            $data
        );
    }

    //Uang Muka Pembelian Page Start Here
    public function uang_muka_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Uang Muka Pembelian',
            'body' => 'admin/pembelian/transaksi/uangmukapembelian',
        ];
        return view('layout/layout', $data);
    }
    public function uang_muka_pembelian_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Uang Muka Pembelian',
            'body' => 'admin/pembelian/transaksi/uangmukapembelianentri',
        ];
        return view('layout/layout', $data);
    }

    //Pembayaran Pembelian Page Start Here
    public function pembayaran_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pembayaran Pembelian',
            'body' => 'admin/pembelian/transaksi/pembayaran_pembelian',
        ];
        return view('layout/layout', $data);
    }
    public function pembayaran_pembelian_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Pembayaran Pembelian',
            'body' => 'admin/pembelian/transaksi/pembayaranpembelianentri',
        ];
        return view('layout/layout', $data);
    }

    //Retur Pembelian Page Start Here
    public function retur_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Retur Pembelian',
            'body' => 'admin/pembelian/transaksi/retur_pembelian',
        ];
        return view('layout/layout', $data);
    }

    public function retur_pembelian_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Retur Pembelian',
            'body' => 'admin/pembelian/transaksi/retur-pembelian-entri',
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
            'title' => 'Retur Pembelian',
            'body' => 'admin/pembelian/laporan',
        ];
        return view('layout/layout', $data);
    }

    //Data Submit
    public function submit_data($id)
    {
        // $data = [
        //     'nama_laporan' => $this->request->getPost('nama_laporan'),
        //     'suplier'  => $this->request->getPost('suplier'),
        //     'mulai'  => $this->request->getPost('mulai'),
        //     'sd'  => $this->request->getPost('sd'),
        //     'barang'  => $this->request->getPost('barang'),
        //     'cabang'  => $this->request->getPost('cabang'),
        // ];

        echo json_encode(true);
    }

    //Data Sub Pembeliad Page Start Here
    public function data_sub_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Data Sub Pembelian',
            'body' => 'admin/pembelian/exportData/dataSubPembelian',
        ];
        return view('layout/layout', $data);
    }

    //Data Pembeliad Page Start Here
    public function data_pembelian()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Data Pembelian',
            'body' => 'admin/pembelian/exportData/dataPembelian',
        ];
        return view('layout/layout', $data);
    }
}
