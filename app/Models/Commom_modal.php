<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembelian_model extends Model
{
    public function data_edit($id, $table)
    {
        $db = db_connect();
        $row = $db->table($table)->where('id', $id)->get()->getRow();
        echo json_encode($row);
    }
}
