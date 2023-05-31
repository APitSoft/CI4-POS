<?= main_header('Pembelian ', ' Entri Pesanan Pembelian', '', ''); ?>
<?= main_periode('Daftar Pesanan Pembelian'); ?>
<?php $db = db_connect(); ?>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>

    </div>

    <div class="portlet-body form">
        <form id="submit_form" class="form-horizontal">
            <input type="hidden" name="id" value="0">
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold fs-6" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pesanan Pembelian</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold fs-6" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Biaya Lain-Lain</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pemasok</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="supp" name="supp" class="form-select input-medium select2me" data-placeholder="Pilih...">
                                                        <option value="" class="">---- pilih supplier----</option>
                                                        <?php
                                                        $suplier = $db->table('suplier')->get()->getResult();
                                                        foreach ($suplier as $key => $value) { ?>
                                                            <option value="<?= $value->kode ?>"><?= $value->nama ?></option>
                                                        <?php }
                                                        ?>
                                                    </select>
                                                    <span class="suppErr"></span>
                                                    <span class="input-group-btn position-absolute start-100 h-100 top-0">
                                                        <a class="btn green" onclick="showsupname()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">PPN</label>
                                            <div class="col-md-4">
                                                <select name="sppn" id="sppn1" class="form-select select2me input-medium">
                                                    <option value="">pilih</option>
                                                    <option value="Y">Ya</option>
                                                    <option value="T">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">PraPo</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <input type="text" class="form-control input-medium" placeholder="" name="prapo" id="prapo" value="" readonly>
                                                    <span class="input-group-btn position-absolute start-100 h-100 top-0">
                                                        <a class="btn blue" id="getrapo1" data-bs-toggle="modal" href="#getrapo" onclick="showmohon()"><i class="fa fa-search"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tanggal PO</label>
                                            <div class="col-md-3">
                                                <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-17">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Keterangan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" placeholder="" name="ket" id="ket" value="">
                                            </div>
                                            <span class="ketErr"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tanggal Kirim</label>
                                            <div class="col-md-4">
                                                <input id="tanggalkirim" name="tanggalkirim" class="form-control input-medium" type="date" value="2023-04-17" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pembayaran</label>
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="" readonly>
                                                <select name="top" id="top1" class="form-select select2me input-medium" onchange="total()">
                                                    <option>pilih</option>
                                                    <option value="T">Tunai</option>
                                                    <option value="K">Kredit</option>
                                                </select>
                                                <span class="topErr"></span>
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
                                                <th width="35%" style="text-align: center">Nama Barang</th>
                                                <th width="10%" style="text-align: center">Kuantitas</th>
                                                <th width="10%" style="text-align: center">Satuan</th>
                                                <th width="15%" style="text-align: center">Harga</th>
                                                <th width="5%" style="text-align: center"></th>
                                                <th width="10%" style="text-align: center">Diskon</th>
                                                <th width="15%" style="text-align: center">Total Harga</th>
                                                <th width="3%"></th>

                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td width="35%">
                                                        <select name="kode[]" id="kode1" class="select2_el_barang_filter form-select input-largex kode" onchange="selectCurrent(1)">
                                                            <option value="">--- Pilih Barang ---</option>
                                                            <?php
                                                            $db = db_connect();
                                                            $barang = $db->table('inventory_barang')->get()->getResult();
                                                            foreach ($barang as $key => $v) { ?>
                                                                <option unit="<?= $v->satuan ?>" stock="<?= $v->stok ?>" price="<?= $v->hargajual ?>" value="<?= $v->kodeitem ?>"><?= $v->namebarang ?></option>

                                                            <?php }
                                                            ?>
                                                        </select>
                                                    </td>

                                                    <!--td width="30%" ><input name="nama[]"    id="namabarang0" type="text" class="form-control "  onkeypress="return tabE(this,event)" readonly></td-->
                                                    <td width="10%">
                                                        <input name="qty[]" onkeyup="total_sub()" value="1" id="qty1" type="text" class="form-control rightJustified">
                                                        <input name="stok_min[]" value="1" id="stok_min1" type="hidden" class="form-control rightJustified">
                                                    </td>
                                                    <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control ">
                                                    </td>
                                                    <td width="15%"><input name="harga[]" onkeyup="total_sub()" value="0" id="harga1" type="text" class="form-control rightJustified"></td>
                                                    <td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td>
                                                    <td width="10%"><input name="disc[]" onkeyup="total_sub()" value="0" id="disc1" type="text" class="form-control rightJustified "></td>
                                                    <td width="20%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%"></td>

                                                    <td width="3%">
                                                        <button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa-solid fa-trash-can"></i></button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="wells">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bodycontainer- scrollable-">
                                        <table id="datatable2" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable pasanan-table">
                                            <thead>
                                                <th width="45%" style="text-align: center">#Kode/ Nama Biaya</th>
                                                <th width="15%" style="text-align: center">Jumlah</th>
                                                <th width="40%" style="text-align: center">Keterangan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="45%">
                                                        <select name="lkode[]" class="select2_el form-select input-xlarge">
                                                            <option value="">--- Pilih Akun ---</option>
                                                            <option value="Kash & Bank">Kash & Bank</option>

                                                        </select>
                                                    </td>


                                                    <td width="15%"><input name="ljumlah[]" id="" type="text" class="form-control rightJustified ljumlah" value="0" onkeyup="sub_total2()"></td>
                                                    <input type="text" name="bank_total" id="bank_total" value="0">
                                                    <td width="40%"><input name="lket[]" id="" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="wells">
                                        <button type="button" class="btn green" onclick="addRow('datatable2', 'pasanan_pembelian_tr')"><i class="fa fa-plus"></i> </button>
                                        <button type="button" class="btn red" onclick="deleteLastRow('datatable2')"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="wells">
                                <button type="submit" id="save_btn" class="btn blue"><i class="fa fa-save"></i> Simpan</button>

                                <div class="btn-group">
                                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fas fa-edit"></i> Data Baru</button>
                                </div>
                                <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3 invoice-block">
                            <div class="well p-2">
                                <table id="tabeltotal">
                                    <tr>
                                        <td width="40%"><strong>SUB TOTAL</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vsubtotal">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>DISKON</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vdiskon">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>DPP</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_dpp">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>PPN</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vppn">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>BIAYA LAIN</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vbiayalain">0</span></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%"><strong>TOTAL</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vtotal">0</span></strong></td>
                                    </tr>
                                    <input type="hidden" name="all_total" id="all_total">
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="getrapo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <span id="getprapo">
                <div class="modal-header">
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Daftar PRA PO</h4>
                    <h5><strong><span id="namabarangharga"></span></strong></h5>
                </div>
                <div class="modal-body">
                    <div id="showmohondata">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btntutup" class="btn red" data-bs-dismiss="modal">Tutup</button>
                </div>
            </span>
        </div>
    </div>
</div>

<script>
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    let appendData = {
        'pasanan_pembelian_tr': '<td width="45%"> <select name ="lkode[]"class ="select2_el form-select input-xlarge"><option value ="" > ---Pilih Akun--- </option><option value="Kash & Bank">Kash & Bank</option> </select> </td><td><input  name="ljumlah[]" onkeyup="sub_total2()" id="" type="text" class="form-control rightJustified ljumlah" value="0"></td><td><input class="form-control" type ="text"></td>',
    }

    //Add Table Element
    function addRow(tableId, appendDataKey) {
        var count = 1;
        let tableBody = document.querySelector(`#${tableId} tbody`);
        let tr = document.createElement('tr');
        tr.innerHTML = appendData[appendDataKey];
        tableBody.appendChild(tr);
        count++;

    }

    function total_sub() {
        var qty = Number($('#qty1').val());
        var price = Number($('#harga1').val());
        var discount = Number($('#disc1').val());

        var sub_total = qty * price;
        var d_price = (sub_total / 100) * discount;
        f_total = sub_total - d_price;

        $('#_vsubtotal').text(sub_total);
        $('#_vdiskon').text(d_price);
        $('#_dpp').text(f_total);
        $('#jumlah1').val(f_total);
        $('#_vppn').text(0);
        var bank_total = parseFloat($('#bank_total').val());
        var final_total = f_total + bank_total;
        console.log(final_total);
        $('#all_total').val(final_total);
        $('#_vbiayalain').text((bank_total));
        $('#_vtotal').text((final_total));
    }

    function sub_total2() {
        var total = 0;

        var array = new Array();
        $('input[name^="ljumlah"]').each(function() {
            array.push($(this).val());
        });
        for (var i = 0; i < array.length; i++) {
            total += array[i] << 0;
        }

        $('#bank_total').val(total);
        $('#_vbiayalain').text(total);
        var f_total = Number($('#jumlah1').val());
        var final_total = total + f_total;
        $('#_vtotal').text(final_total);
    }

    //Delete Table Element Current Row
    function deleteCurrentRow(e) {
        if (e.closest('tr').id == '') {
            e.closest('tr').remove();
        }
    }

    //Delete Table Element Last Row
    function deleteLastRow(tableId) {
        let tableBody = document.querySelector(`#${tableId} tbody`);
        if (tableBody.lastChild.id == '') {
            tableBody.removeChild(tableBody.lastChild);
        }
    }


    function selectCurrent(id) {
        var element = $('#kode1').find("option:selected");
        var unit = element.attr('unit');
        var price = element.attr('price');
        $('#sat1').val(unit).keyup();
        $('#harga1').val(price).keyup();
    }

    $('#qty1, #harga1, #disc1').keyup(function(e) {
        var qty = Number($('#qty1').val());
        var price = Number($('#harga1').val());
        var discount = Number($('#disc1').val());
        var total = qty * price;
        var d_price = (total / 100) * discount;
        $('#_vsubtotal').text(total);
        $('#_vdiskon').text(d_price);
        var f_total = total - d_price;
        $('#_dpp').text(f_total);
        $('#_vppn').text(0);

        var bank_total = Number($('#ljumlah0').val());
        $('#all_total').val(f_total + bank_total);
        $('#_vbiayalain').text(bank_total + f_total);
        $('#_vtotal').text(f_total + bank_total);

    });

    $('#submit_form').submit(function(e) {
        e.preventDefault();
        var err = ['suppErr', 'ketErr', 'topErr'];
        $.ajax({
            url: "<?= base_url('pembelian/transaksi/pesananpembelianadd') ?>",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function(res) {
                if (!res.error) {
                    window.location.href = "<?= base_url('pembelian/transaksi/pesananpembelian') ?>";
                } else {
                    $.each(err, function(i, v) {
                        $('.suppErr').html(res.suppErr);
                        $('.ketErr').html(res.ketErr);
                    });
                }
            }
        });
    });

    function showsupname() {
        $('#supp').val('');
    }
</script>