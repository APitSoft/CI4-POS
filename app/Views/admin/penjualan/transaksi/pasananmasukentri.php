<?= main_header('Penjualan', 'Data Customer', ' Daftar Pesanan Penjualan', 'Entri Pesanan Penjualan') ?>


<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>
    </div>

    <div class="portlet-body form">
        <form id="submit_form" class="form-horizontal">
            <input type="hidden" value="<?= ($data != []) ? $data->id : 0 ?>" name="id" />
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pesanan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Biaya Lainnya</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Dipesan Oleh *</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="cust" name="cust" onchange="customer_data(this.value)" class="form-control input-medium select2me" data-placeholder="Pilih...">
                                                        <option>---Pilih Customer</option>
                                                        <?php foreach ($res as $key) { ?>
                                                            <option value="<?= $key->id ?>" <?= ($data != []) ? (($key->id == $data->cust_id) ? "selected" : '') : '' ?>><?= $key->nama ?></option>
                                                        <?php } ?>

                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="getcs()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Pesanan # *</label>
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="" readonly>
                                                <input type="text" class="form-control input-medium" placeholder="Nomor Auto" value="<?= ($data != []) ? $data->nomorbukti : '' ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-md-3 control-label pt-2">Tanggal *</label>
                                                <div class="col-md-4">
                                                    <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="<?= ($data != []) ? date('Y-m-d', strtotime($data->tanggal)) : date('Y-m-d') ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Marketing</label>
                                            <div class="col-md-4">
                                                <!-- <select id="marketing1" name="sales"
                                                class="form-control input-medium select2me" data-placeholder="Pilih..."
                                                onkeypress="return tabE(this,event)">
                                                <option value="">pilih</option>
                                                                                                <option value="2">
                                                    KAR</option>
                                                                                                <option value="3">
                                                    CHR</option>
                                                                                                <option value="4">
                                                    VIN</option>
                                                                                                <option value="5">
                                                    YPY</option>
                                                                                                <option value="6">
                                                    KUS</option>
                                                                                                <option value="7">
                                                    OFC</option>
                                                                                            </select> -->
                                                <input id="marketing" readonly name="sales" class="form-control input-medium" type="text" value="<?= ($data != []) ? $data->marketing : '' ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">PPN</label>
                                            <div class="col-md-4">
                                                <select name="sppn" id="sppn" class="form-control select2me input-medium">
                                                    <option value="">pilih</option>
                                                    <option value="Y">Ya</option>
                                                    <option value="T">Tidak</option>
                                                </select>
                                                <!-- <input id="sppn1" name="sppn" class="form-control input-medium" type="text"   > -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pembayaran</label>
                                            <div class="col-md-4">
                                                <select name="pembayaran" id="" class="form-control select2me input-medium" value="<?= ($data != []) ? $data->pembayaran : '' ?>">
                                                    <option value="T">Tunai</option>
                                                    <option value="K">Kredit</option>
                                                </select>
                                                <!-- <input id="pembayaran1" name="pembayaran" class="form-control input-medium" type="text"   > -->
                                                <input type="hidden" class="form-control input-medium" name="saldokredit" id="saldokredit" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. PO</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" name="no-po" id="no-po" value="<?= ($data != []) ? $data->no_po : '' ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                            <thead>
                                                <th width="48%" style="text-align: center">Nama Barang</th>
                                                <th width="25%" style="text-align: center">Kuantitas</th>
                                                <th width="25%" style="text-align: center">Satuan</th>
                                                <th width="2%" style="text-align: center"></th>
                                            </thead>
                                            <tbody>
                                                <?php if ($data != []) {
                                                    $chaild_data = json_decode($data->pesanan_items);
                                                    foreach ($chaild_data as $key) {
                                                ?>
                                                        <tr>
                                                            <td width="50%">
                                                                <select name="kode[]" id="kode1" class="select2_el_barang_filter form-control kode " onchange="showbarangname(this.value, 1)">
                                                                    <option value="">--- Pilih Barang ---</option>

                                                                </select>
                                                                <input name="cn1[]" onchange="totalline(1)" value="0" id="a-cn1" type="hidden" class="form-control rightJustified">
                                                            </td>

                                                            <!--td width="30%" ><input name="nama[]"    id="namabarang0" type="text" class="form-control "  onkeypress="return tabE(this,event)" readonly></td-->
                                                            <td width="25%">
                                                                <input name="qty[]" onchange="totalline(1);total()" value="<?= $key->qty ?>" id="qty1" type="text" class="form-control rightJustified">

                                                                <input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="hidden" class="form-control rightJustified">

                                                                <input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="hidden" class="form-control rightJustified ">

                                                                <input name="cn2[]" onchange="totalline(1)" value="0" id="b-cn1" type="hidden" class="form-control rightJustified">
                                                            </td>
                                                            <td width="25%">
                                                                <input name="sat[]" id="sat1" type="text" value="<?= $key->sat ?>" class="form-control ">

                                                                <input name="jumlah[]" id="jumlah0" ; type="hidden" class="form-control rightJustified" size="40%">

                                                                <input name="cn3[]" onchange="totalline(1)" value="0" id="c-cn1" type="hidden" class="form-control rightJustified">
                                                            </td>
                                                            <td width="2%"><a class="btn default" id="infobrg1" data-toggle="modal" href="#infobrg" onclick="infobrg(this.id)"><i class="fa fa-info"></i></a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                } else { ?>
                                                    <tr>
                                                        <td width="50%">
                                                            <select name="kode[]" id="kode1" class="select2_el_barang_filter form-control kode " onchange="showbarangname(this.value, 1)">
                                                                <option value="">--- Pilih Barang ---</option>

                                                            </select>
                                                            <input name="cn1[]" onchange="totalline(1)" value="0" id="a-cn1" type="hidden" class="form-control rightJustified">
                                                        </td>

                                                        <!--td width="30%" ><input name="nama[]"    id="namabarang0" type="text" class="form-control "  onkeypress="return tabE(this,event)" readonly></td-->
                                                        <td width="25%">
                                                            <input name="qty[]" onchange="totalline(1);total()" value="" id="qty1" type="text" class="form-control rightJustified">

                                                            <input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="hidden" class="form-control rightJustified">

                                                            <input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="hidden" class="form-control rightJustified ">

                                                            <input name="cn2[]" onchange="totalline(1)" value="0" id="b-cn1" type="hidden" class="form-control rightJustified">
                                                        </td>
                                                        <td width="25%">
                                                            <input name="sat[]" id="sat1" type="text" value="" class="form-control ">

                                                            <input name="jumlah[]" id="jumlah0" ; type="hidden" class="form-control rightJustified" size="40%">

                                                            <input name="cn3[]" onchange="totalline(1)" value="0" id="c-cn1" type="hidden" class="form-control rightJustified">
                                                        </td>
                                                        <td width="2%"><a class="btn default" id="infobrg1" data-toggle="modal" href="#infobrg" onclick="infobrg(this.id)"><i class="fa fa-info"></i></a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="add_row('datatable')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <button type="button" onclick="deleteRow('datatable')" class="btn red"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Tgl Kirim</label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon">
                                                            <i class="fa fa-calendar"></i>
                                                            <input id="tanggalkirim" name="tanggal_kirim" class="form-control date-picker input-medium" type="text" value="<?= ($data != []) ? $data->tanggal_kirim : date('d-m-Y') ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" placeholder="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Keterangan</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-large" placeholder="" name="keterangan" id="keterangan" value="<?= ($data != []) ? $data->keterangan : '' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Alamat</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="alamat" id="alamat"><?= ($data != []) ? $data->alamat : '' ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="datatable2" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <thead>
                                            <th width="45%" style="text-align: center">#Kode/ Nama Biaya</th>
                                            <th width="15%" style="text-align: center">Jumlah</th>
                                            <th width="40%" style="text-align: center">Keterangan</th>
                                        </thead>
                                        <tbody>
                                            <?php if ($data != []) {
                                                $biaya_data = json_decode($data->biaya_items);
                                                foreach ($biaya_data as $key) {
                                            ?>
                                                    <tr>
                                                        <td width="45%">
                                                            <select name="lkode[]" class="select2_el form-control input-xlarge">
                                                                <option value="">--- Pilih Akun ---</option>
                                                            </select>
                                                        </td>
                                                        <td width="15%"><input name="ljumlah[]" id="ljumlah0" type="text" class="form-control rightJustified" onkeyup="total_sub()" value="<?= $key->qty ?>"></td>
                                                        <td width="40%"><input name="lket[]" id="lket0" type="text" class="form-control " value=""></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr>
                                                    <td width="45%">
                                                        <select name="lkode[]" class="select2_el form-control input-xlarge">
                                                            <option value="">--- Pilih Akun ---</option>
                                                        </select>
                                                    </td>
                                                    <td width="15%"><input name="ljumlah[]" id="ljumlah0" type="text" class="form-control rightJustified" onkeyup="total_sub()" value=""></td>
                                                    <td width="40%"><input name="lket[]" id="lket0" type="text" class="form-control " value=""></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="wells">
                                        <button type="button" onclick="add_row('datatable2')" class="btn green"><i class="fa fa-plus"></i> </button>
                                        <button type="button" onclick="deleteRow('datatable2')" class="btn red"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="wells">
                                <button type="submit" onclick="" id="save_btn" class="btn blue"><i class="fa fa-save"></i>
                                    Simpan</button>
                                <div class="btn-group">
                                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
                                </div>
                                <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3 invoice-block">
                            <div class="well">
                                <table>
                                    <tr>
                                        <td width="40%"><strong>SUB TOTAL</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vsubtotal"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>DISKON</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vdiskon"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>DPP</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_dpp"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>PPN</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vppn"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>BIAYA LAIN</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vbiayalain"></span></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>TOTAL</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vtotal"></span></strong></td>
                                        <input type="hidden" id="_h_total"  name="_h_total">

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        var tasks = new Array();
        $('input[name^="ljumlah"]').each(function() {
            tasks.push($(this).val());
        });
        var total = 0;
        for (var i = 0; i < tasks.length; i++) {
            total += tasks[i] << 0;
        }
        $('#_vbiayalain').text(total.toFixed(2));
        $('#_vtotal').text(total.toFixed(2));
        $('#_h_total').val(total);
        <?php
        $db = db_connect();
        $builder = $db->table('pesanan_masuk')->get()->getLastRow();
        $count_row = $builder->id;
        $kode = 'SOP.' . date('Y.m') . '.' . sprintf('%06d', $builder->id + 1);
        ?>
        $('input[name=nomorbukti]').val('<?= $kode ?>');

    });

    function customer_data(id) {
        $.ajax({
            url: "<?= base_url('penjualan/transaksi/show_data/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(res) {
                
                $('#marketing').val(res.marketting_data.nama);
                
               $('#sppn').val(res.customer_data.sppn);
            }
        });
    }
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    function add_row(table) {
        var $tableBody = $('#' + table).find("tbody"),
            $trLast = $tableBody.find("tr:last"),
            $trNew = $trLast.clone();
        $trLast.after($trNew);

    }

    //Delete Table Element Last Row
    function deleteRow(tableId) {
        //alert('fghfg');
        $('#' + tableId + ' tr:last').remove();
    }

    function total_sub(id) {

        var tasks = new Array();
        $('input[name^="ljumlah"]').each(function() {
            tasks.push($(this).val());
        });
        var total = 0;
        for (var i = 0; i < tasks.length; i++) {
            total += tasks[i] << 0;
        }
        $('#_vbiayalain').text(total.toFixed(2));
        $('#_vtotal').text(total.toFixed(2));
        $('#_h_total').val(total);

    }
    $('#submit_form').submit(function(e) {
        e.preventDefault();
        var id = $('input[name=id]').val();
        $.ajax({
            url: "<?= base_url('penjualan/transaksi/pesanansub') ?>",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function(res) {
                top.location.href = "<?= base_url('penjualan/transaksi/pesananmasuk') ?>"
            }
        });

    });
</script>