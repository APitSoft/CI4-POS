<?php

namespace App\Controllers;

class Inventory extends BaseController
{
    //Kategori Page Start Here
    public function kategori()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Kategori',
            'body' => 'admin/inventory/data_master/kategori',
        ];
        return view('layout/layout', $data);
    }

    public function kategori_add($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_kategori');
        $input = $this->request->getPost();
        $validation->setRule('nama', 'Nama', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
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
            ];
            echo json_encode($arr);
        }
    }

    public function kategori_table()
    {
        $db = db_connect();
        $res = $db->table('inventory_kategori')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                '<button class="btn btn-primary me-2 mb-2" onclick="kategori_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="kategori_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function kategori_edit($id)
    {
        $db = db_connect();
        $row = $db->table('inventory_kategori')->where('id', $id)->get()->getRow();
        echo json_encode($row);
    }

    public function kategori_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_kategori');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    //Rak Page Start Here
    public function rak()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Rak',
            'body' => 'admin/inventory/data_master/rak',
        ];
        return view('layout/layout', $data);
    }

    public function rak_add($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_rak');
        $input = $this->request->getPost();
        $validation->setRule('nama', 'Nama', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
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
            ];
            echo json_encode($arr);
        }
    }

    public function rak_table()
    {
        $db = db_connect();
        $res = $db->table('inventory_rak')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                '<button class="btn btn-primary me-2 mb-2" onclick="rak_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="rak_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function rak_edit($id)
    {
        $this->Common_model->data_edit($id, 'inventory_rak');
        // $db = db_connect();
        // $row = $db->table('inventory_rak')->where('id', $id)->get()->getRow();
        // echo json_encode($row);
    }

    public function rak_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_kategori');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    //Gudang Page Start Here
    public function gudang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Gudang',
            'body' => 'admin/inventory/data_master/gudang',
        ];
        return view('layout/layout', $data);
    }

    //Gudang Data Submit
    public function gudang_data_submit()
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_gudang');
        $input = $this->request->getPost();
        $id = $input['id'];
        $validation->setRule('nama', 'Nama', 'required');
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
            ];
            if ($id != 0) {
                $result = $builder->where('id', $id)->update($data);
                if ($result) {
                    echo json_encode(['message' => 'Updated']);
                }
            } else {
                $data = $this->request->getPost();
                $result = $builder->insert($data);
                if ($result) {
                    echo json_encode(['message' => 'inserted']);
                }
            }
        } else {
            $arr = [
                'error' => true,
                'nameErr' => $validation->showError('nama'),
            ];
            echo json_encode($arr);
        }
    }

    //Gudang Data Get
    public function gudang_data_get()
    {
        $db = db_connect();
        $res = $db->table('inventory_gudang')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                'PUSAT',
                '<button class="btn btn-primary me-2 mb-2" onclick="data_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="data_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    //Gudang Data Edit
    public function gudang_data_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_gudang')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    //Gudang Data Delete
    public function gudang_data_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_gudang');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    //Satuan Page Start Here ===================
    public function satuan()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Satuan',
            'body' => 'admin/inventory/data_master/satuan',
        ];
        return view('layout/layout', $data);
    }

    public function satuan_add($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_satuan');
        $input = $this->request->getPost();
        $validation->setRule('nama', 'Nama', 'required');

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
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
            ];
            echo json_encode($arr);
        }
    }

    public function satuan_table()
    {
        $db = db_connect();
        $res = $db->table('inventory_satuan')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                '<button class="btn btn-primary me-2 mb-2" onclick="data_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="data_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function satuan_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_satuan')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function satuan_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_satuan');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }
    // Satuan End ========================= 


    //Merk Page Start Here
    public function merk()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Merk',
            'body' => 'admin/inventory/data_master/merk',
        ];
        return view('layout/layout', $data);
    }

    public function merk_add($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_merk');
        $input = $this->request->getPost();
        $validation->setRule(
            'nama',
            'Nama',
            'required'
        );

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
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
            ];
            echo json_encode($arr);
        }
    }

    public function merk_table()
    {
        $db = db_connect();
        $res = $db->table('inventory_merk')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                '<button class="btn btn-primary me-2 mb-2" onclick="data_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="data_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function merk_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_merk')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function merk_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_merk');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }

    //Barang Page Start Here
    public function barang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Barang',
            'body' => 'admin/inventory/data_master/barang',
        ];
        return view('layout/layout', $data);
    }

    //Barang Data Submit
    public function barang_data_submit($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_barang');

        $validation->setRule('kategori', 'Kategori', 'required');
        $validation->setRule('namebarang', 'Name Barang', 'required');
        $validation->setRule('hargajual', 'Harga Jual', 'required');
        $validation->setRule('gudang', 'Gudang', 'required');
        $validation->setRule('rak', 'Rak', 'required');
        $validation->setRule('ppn', 'PPN', 'required');
        $validation->setRule('merk', 'Merk', 'required');
        $validation->setRule('satuan', 'Satuan', 'required');
        $validation->setRule('stok', 'Stok', 'required');
        $validation->setRule('stokmin', 'Stok Min', 'required');
        $validation->setRule('stokmax', 'Stok Max', 'required');
        $validation->setRule('cabang', 'Cabang', 'required');
        if ($validation->withRequest($this->request)->run()) {
            if ($id > 0) {
            } else {
                $data = $this->request->getPost();
                $result = $builder->insert($data);
                if ($result) {
                    echo json_encode(['message' => 'inserted']);
                }
            }
        } else {
            $arr = [
                'error' => true,
                'kategori' => $validation->showError('kategori'),
                'namebarang' => $validation->showError('namebarang'),
                'hargajual' => $validation->showError('hargajual'),
                'gudang' => $validation->showError('gudang'),
                'rak' => $validation->showError('rak'),
                'ppn' => $validation->showError('ppn'),
                'merk' => $validation->showError('merk'),
                'satuan' => $validation->showError('satuan'),
                'stok' => $validation->showError('stok'),
                'stokmin' => $validation->showError('stokmin'),
                'stokmax' => $validation->showError('stokmax'),
                'cabang' => $validation->showError('cabang'),
            ];
            echo json_encode($arr);
        }
    }

    //Harga Barang Per Customer Page Start Here
    public function harga_barang_per_customer()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Harga Barang Per Customer',
            'body' => 'admin/inventory/data_master/harga-barang',
        ];
        return view('layout/layout', $data);
    }

    public function harga_barang_add($id)
    {
        $validation =  \Config\Services::validation();
        $db = db_connect();
        $builder = $db->table('inventory_harga_barang');
        $input = $this->request->getPost();
        $validation->setRule(
            'nama',
            'Nama',
            'required'
        );

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama' => $input['nama'],
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
            ];
            echo json_encode($arr);
        }
    }


    public function harga_barang_table()
    {
        $db = db_connect();
        $res = $db->table('inventory_harga_barang')->get()->getResult();
        $result = array();
        $data = [];
        foreach ($res as $value) {
            $data[] = [
                $value->id,
                $value->nama,
                '<button class="btn btn-primary me-2 mb-2" onclick="data_edit(' . $value->id . ')"><i class="fa-solid fa-edit text-white"></i> Edit</button><button class="btn btn-danger mb-2" onclick="data_delete(' . $value->id . ')"><i class="fa-solid fa-trash-can"></i> Delete</button>'
            ];
        }

        $result = ['data' => $data];
        echo json_encode($result);
    }

    public function harga_barang_edit($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_harga_barang')->where('id', $id)->get()->getRow();
        echo json_encode($builder);
    }

    public function harga_barang_delete($id)
    {
        $db = db_connect();
        $builder = $db->table('inventory_harga_barang');
        $delete = $builder->delete(['id' => $id]);
        if ($delete) {
            echo json_encode(['message' => 'Deleted']);
        }
    }
    //Stok Opname Page Start Here
    public function stok_opname()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Stok Opname',
            'body' => 'admin/inventory/transaksi/stock-opname',
        ];
        return view('layout/layout', $data);
    }
    public function stok_opname_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Stok Opname',
            'body' => 'admin/inventory/transaksi/stock-opname-entri',
        ];
        return view('layout/layout', $data);
    }

    //Permohonan Mutasi Cabang Page Start Here
    public function permohonan_mutasi_cabang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Permohonan Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/permohonan-mutasi-cabang',
        ];
        return view('layout/layout', $data);
    }
    public function permohonan_mutasi_cabang_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Permohonan Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/permohonan-mutasi-cabang-entri',
        ];
        return view('layout/layout', $data);
    }

    //Mutasi Cabang Page Start Here
    public function mutasi_cabang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/mutasi-cabang',
        ];
        return view('layout/layout', $data);
    }

    public function mutasi_cabang_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/mutasi-cabang-entri',
        ];
        return view('layout/layout', $data);
    }

    //Persetujuan Mutasi Cabang Page Start Here
    public function persetujuan_mutasi_cabang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Persetujuan Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/persetujuan-mutasi-cabang',
        ];
        return view('layout/layout', $data);
    }
    public function persetujuan_mutasi_cabang_entri()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Persetujuan Mutasi Cabang',
            'body' => 'admin/inventory/transaksi/persetujuan-mutasi-cabang-entri',
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
            'body' => 'admin/inventory/laporan',
        ];
        return view('layout/layout', $data);
    }

    //Import Data Barang Page Start Here
    public function import_data_barang()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Import Data Barang',
            'body' => 'admin/inventory/import-data-barang',
        ];
        return view('layout/layout', $data);
    }

    //Data Stock Page Start Here
    public function data_stock()
    {
        $css = [];
        $js = [];
        $data  = [
            'css' => $css,
            'js' => $js,
            'title' => 'Data Stock',
            'body' => 'admin/inventory/exportData/data-steck',
        ];
        return view('layout/layout', $data);
    }
}
