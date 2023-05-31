<?= main_header('Pembelian', 'Pesanan Pra Pembelian', 'Daftar Pesanan Pra Pembelian', 'Entri Pesanan Pra Pembelian', 'pembelian/transaksi/prapembelian') ?>


<?php
$db = db_connect();
if (!empty($id)) {
    $table_data = $db->table('pra_pembelian')->where('id', $id)->get()->getRow();
}
?>

<div class="row">
    <div class="col-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    *New Data
                </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="submit_form" class="form-horizontal form-bordered1">
                    <input type="hidden" name="id" value="<?= isset($table_data) ? $table_data->id : 0 ?>">
                    <div class="form-body">
                        <div class="tabbable tabbable-custom tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd; padding: 8px 0px;">
                                    <a href="#tab1" data-toggle="tab">
                                        Pesanan Pra Pembelian
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <!-- First Row -->
                                    <div class="row justify-content-between">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="tanggal" class="form-label">Tanggal PRAPO</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="tanggal" name="tanggal" class="form-control" type="date" value="<?= isset($table_data) ? date('Y-m-d', strtotime($table_data->date)) : date('Y-m-d') ?>">
                                                    <span class="tanggalErr"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="nomor" class="form-label">Nomor #</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="nomor" name="nomor" class="form-control" type="text" placeholder="Nomor Auto" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Row -->
                                    <div class="row justify-content-between mt-3">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="keterangan" name="keterangan" value="<?= isset($table_data) ? $table_data->keterangan : '' ?>" class="form-control" type="text">
                                                    <span class="keteranganErr"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <!-- <label for="nomor" class="form-label">Nomor #</label> -->
                                                </div>
                                                <div class="col-8">
                                                    <span class="btn blue" data-bs-toggle="modal" data-bs-target="#bufferStock"> Buffer Stock <i class="fa fa-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Row -->
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div style="overflow-x: auto;">
                                                <div class="datatable-example">
                                                    <table id="table" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                                        <thead>
                                                            <tr>
                                                                <th width="35%" style="text-align: center">Nama Barang</th>
                                                                <th width="10%" style="text-align: center">Kuantitas</th>
                                                                <th width="10%" style="text-align: center">stock</th>
                                                                <th width="10%" style="text-align: center">Satuan</th>
                                                                <th width="5%"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($table_data) && !empty($table_data->items)) {
                                                                $data = json_decode($table_data->items);
                                                                $count = 0;
                                                                foreach ($data as $value) {
                                                                    $count++;
                                                            ?>
                                                                    <tr>
                                                                        <td width="35%">
                                                                            <select onchange="selectCurrent('<?= $count ?>')" name="kode[]" id="kode<?= $count ?>" class="select2_el_barang_filter form-select input-largex select2-hidden-accessible kode" tabindex="-1" aria-hidden="true">
                                                                                <option unit="" value="" stock="" price="">--- Pilih Barang ---</option>
                                                                                <?php
                                                                                $db = db_connect();
                                                                                $barang = $db->table('inventory_barang')->get()->getResult();
                                                                                foreach ($barang as $k => $v) { ?>
                                                                                    <option unit="<?= $v->satuan ?>" stock="<?= $v->stok ?>" price="<?= $v->hargajual ?>" value="<?= $v->kodeitem ?>" <?= $v->kodeitem == $value->item_name ? 'selected' : '' ?>><?= $v->namebarang ?></option>
                                                                                <?php }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td width="10%">
                                                                            <input name="qty[]" id="qty<?= $count ?>" type="text" class="form-control rightJustified" value="<?= $value->qty ?>">
                                                                            <input name="stok_min[]" value="<?= $value->price ?>" id="stok_min<?= $count ?>" type="hidden" class="form-control rightJustified">
                                                                        </td>
                                                                        <td width="10%">
                                                                            <input name="stock[]" value="<?= $value->stock ?>" id="stock<?= $count ?>" type="text" readonly="" class="form-control rightJustified">
                                                                        </td>
                                                                        <td width="10%">
                                                                            <input name="sat[]" id="sat<?= $count ?>" type="text" class="form-control " value="<?= $value->sat ?>">
                                                                            <input name="harga[]" value="0" id="harga<?= $count ?>" type="hidden" class="form-control rightJustified">
                                                                        </td>
                                                                        <td width="5%">
                                                                            <button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                <?php }
                                                            } else { ?>
                                                                <tr>
                                                                    <td width="35%">
                                                                        <select onchange="selectCurrent(1)" name="kode[]" id="kode1" class="select2_el_barang_filter form-select input-largex select2-hidden-accessible kode" tabindex="-1" aria-hidden="true">
                                                                            <option unit="" value="" stock="" price="">--- Pilih Barang ---</option>
                                                                            <?php
                                                                            $db = db_connect();
                                                                            $barang = $db->table('inventory_barang')->get()->getResult();
                                                                            foreach ($barang as $k => $v) { ?>
                                                                                <option unit="<?= $v->satuan ?>" stock="<?= $v->stok ?>" price="<?= $v->hargajual ?>" value="<?= $v->kodeitem ?>"><?= $v->namebarang ?></option>
                                                                            <?php }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                    <td width="10%">
                                                                        <input name="qty[]" oninput="totalline(1);total()" value="1" id="qty1" type="text" class="form-control rightJustified" onchange="stok_min(1)">
                                                                        <input name="stok_min[]" value="1" id="stok_min1" type="hidden" class="form-control rightJustified">
                                                                    </td>
                                                                    <td width="10%">
                                                                        <input name="stock[]" value="" id="stock1" type="text" readonly="" class="form-control rightJustified">
                                                                    </td>
                                                                    <td width="10%">
                                                                        <input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                                        <input name="harga[]" value="0" id="harga1" type="hidden" class="form-control rightJustified">
                                                                    </td>
                                                                    <td width="5%">
                                                                        <button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            <?php }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="button" onclick="addRow('example', 'pre_pembelian_entri')" class="btn green"><i class="fa fa-plus"></i> </button> -->

                                    <button type="button" onclick="add_row('table')" class="btn green"><i class="fa fa-plus"></i> </button>
                                    <div class="mt-4">
                                        <button type="submit" id="save_btn" class="btn blue me-1"><i class="fa fa-save"></i> Simpan</button>
                                        <button type="button" class="btn green"><i class="fa-regular fa-pen-to-square"></i> Data Baru</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Here -->
<div class="modal fade" id="bufferStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar Barang Buffer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="portlet box blue">
                            <div class="portlet-title" style="padding: 2px 10px 2px 10px;">
                                <div class="d-flex justify-content-between align-items-center" style="font-size: 18px; font-weight: 400;">
                                    <span class="caption mb-0 d-flex align-items-center">
                                        <i class="fa fa-folder me-1"></i>Daftar Barang Buffer
                                    </span>
                                    <span>
                                        <button type="submit" class="btn blue float-end fw-bold"><i class="fa fa-check"></i> Simpan</button>
                                    </span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <div class="form-horizontal form-bordered1">
                                    <div class="form-body">
                                        <div class="tabbable tabbable-custom tabbable-full-width">
                                            <!-- <div class="tab-content">
                                                <div class="tab-pane active" id="tab1"> -->
                                            <!-- First Row -->
                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <div style="overflow-x: auto;">
                                                        <div class="datatable-example">
                                                            <table id="bufferStockTable" class="display datatable" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Kode item</th>
                                                                        <th>Nama Barang</th>
                                                                        <th>Tanggal Beli terakhir</th>
                                                                        <th>Stok Akhir</th>
                                                                        <th>stok minimal</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        <?php
        $db = db_connect();
        $builder = $db->table('pra_pembelian')->get()->getLastRow();
        $count_row = $builder->id;
        $kode = strlen($count_row) == 1 ? 'PPO.' . date('Y.m') . '.00000' . ($count_row + 1) : (strlen($count_row) == 2 ? 'PPO.' . date('Y.m') . '.0000' . ($count_row + 1) : (strlen($count_row) == 3 ? 'PPO.' . date('Y.m') . '.000' . ($count_row + 1) : (strlen($count_row) == 4 ? 'PPO.' . date('Y.m') . '.00' . ($count_row + 1) : (strlen($count_row) == 5 ? 'PPO.' . date('Y.m') . '.0' . ($count_row + 1) : 'PPO.' . date('Y.m') . '.000001'))));
        ?>
        $('input[name=nomor]').val('<?= isset($table_data) ? $table_data->nomor : $kode ?>');
    });

    function selectCurrent(id) {
        var element = $('#kode' + id).find("option:selected");
        var unit = element.attr('unit');
        var stock = element.attr('stock');
        var price = element.attr('price');
        var value = element.val();
        console.log(unit + '/' + value + '/' + price)
        $('#stok_min' + id).val(price);
        $('#stock' + id).val(stock);
        $('#sat' + id).val(unit);
    }

    $(document).ready(function() {
        $('#bufferStockTable').DataTable();
    });

    $('#submit_form').submit(function(e) {
        e.preventDefault();
        var id = $('input[name=id]').val();
        var arr = [];

        $.ajax({
            url: "<?= base_url('pembelian/transaksi/prapembelianadd') ?>",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function(res) {
                if (!res.error) {
                    window.location.href = "<?= base_url('pembelian/transaksi/prapembelian') ?>";
                } else {
                    $('.keteranganErr').html(res.keteranganErr);
                }
            }
        });
    });

    function add_row(table) {
        var $tableBody = $('#' + table).find("tbody"),
            $trLast = $tableBody.find("tr:last"),
            $trNew = $trLast.clone();
        $trLast.after($trNew);
        var len = $('#table tbody tr').length;

        $tableBody.find("tr:last .kode").attr('id', 'kode' + len)
        $tableBody.find("tr:last .kode").attr('onchange', 'selectCurrent(' + len + ')')
        $tableBody.find("tr:last #qty1").attr('id', 'qty' + len)
        $tableBody.find("tr:last #stok_min1").attr('id', 'stok_min' + len)
        $tableBody.find("tr:last #stock1").attr('id', 'stock' + len)
        $tableBody.find("tr:last #sat1").attr('id', 'sat' + len)
    }
</script>