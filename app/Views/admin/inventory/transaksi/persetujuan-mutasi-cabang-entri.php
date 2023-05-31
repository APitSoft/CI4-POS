<?= main_header('Inventory', 'Approval Mutasi Barang Antar Cabang') ?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i>*Data Baru
                </div>


            </div>

            <div class="portlet-body form">
                <form id="frmpenjualan" class="form-horizontal" method="post">
                    <div class="form-body">
                        <div class="tabbable tabbable-custom tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab">
                                        <i class="fa fa-file"></i>
                                        Approval Mutasi Barang Cabang
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row"> <label class="col-md-3 control-label pt-2">Tanggal</label>
                                                    <div class="col-md-4">
                                                        <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-19" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">No. Bukti</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" readonly value="">
                                                            <input type="text" placeholder="Otomatis" class="form-control input-medium" value="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Cabang terima</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group position-reletive">
                                                            <select id="cabang_terima" name="cabang_terima" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                                <option>---Pilih Cabang</option>
                                                            </select>
                                                            <span class="input-group-btn position-absolute start-100 h-100 top-0">
                                                                <a class="btn green" onclick="showmc()"><i class="fa fa-refresh"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Cabang kirim</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="ncabang_kirim" name="ncabang_kirim" class="form-control input-medium" value="" readonly>
                                                        <input type="hidden" id="cabang_kirim" name="cabang_kirim" class="form-control input-medium" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <div class="row">
                                                            <label class="col-md-3 control-label pt-2">Keterangan</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-large" placeholder="" name="keterangan" id="keterangan" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <div class="row">
                                                            <label class="col-md-3 control-label pt-2">No. Mutasi</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group position-reletive">
                                                                    <select name="nomutasi" id="nomutasi" class="form-control input-medium select2me">
                                                                        <option value="">---Tanpa Mutasi---</option>
                                                                    </select>
                                                                    <span class="input-group-btn position-absolute start-100 h-100 top-0">
                                                                        <a class="btn blue" onclick="getmc();checkqty()"><i class="fa fa-download"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <div class="row">
                                                            <label class="col-md-3 control-label pt-2">No Permintaan</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-large" placeholder="" name="nomohon" id="nomohon" value="" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="background-color: #e6f7ff; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 2px; height: auto; overflow-x: scroll; padding: 5px; width: auto;">
                                        <div class="col-md-12">

                                            <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable" style="width: 130%">
                                                <thead>
                                                    <tr>
                                                        <th width="30%" style="text-align: center">Kode/Nama Barang</th>
                                                        <th width="15%" style="text-align: center">No Batch</th>
                                                        <th width="15%" style="text-align: center">Tanggal EXP</th>
                                                        <th width="10%" style="text-align: center">qty kirim</th>
                                                        <th width="10%" style="text-align: center">sat</th>
                                                        <th width="3%"></th>
                                                    </tr>
                                                    <thead>
                                                    <tbody>
                                                        <tr>
                                                            <td width="30%">
                                                                <select name="kode[]" id="kode1" class="select2_el_barang_filter form-control" onchange="showbarangname(this.value, 1)">
                                                                    <option value="">--- Pilih Barang ---</option>
                                                                </select>
                                                            </td>
                                                            <td width="15%">
                                                                <input name="no_batch[]" readonly="" value="" id="no_batch1" type="text" class="form-control rightJustified">
                                                            </td>
                                                            <td width="15%"><input name="tgl_exp[]" value="" id="tgl_exp1" type="text" readonly class="form-control rightJustified">
                                                            </td>

                                                            <td width="10%">
                                                                <input name="qty[]" value="" onchange="check_qty(this.value, 1)" id="qty1" type="text" class="form-control rightJustified" readonly>
                                                            </td>
                                                            <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly>
                                                            </td>
                                                            <td width="3%">
                                                                <button type="button" onclick="deleteRow(this)" class="btn red"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-xs-9">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab1-->
                            </div>
                            <!--tab-->

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="well">
                                        <button type="button" onclick="save()" class="btn blue" id="save_btn1"><i class="fa fa-save"></i> Simpan</button>
                                        <div class="btn-group">
                                            <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
                                        </div>
                                        <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
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



<script>
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    let appendData = {
        'inventory_mutasi_cabang_entri': '<td width="30%"><select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select></td><td width="15%"><input name="no_batch[]" readonly="" value="" id="no_batch1" type="text" class="form-control rightJustified"></td><td width="2%"><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupbatch" onclick="getbatch(this.id)"><i class="fa fa-search"></i></a></td><td width="15%"><input name="tgl_exp[]" value="" id="tgl_exp1" type="text" readonly="" class="form-control rightJustified"></td><td width="10%"><input name="qty[]" value="0" onchange="check_qty(this.value, 1)" id="qty1" type="text" class="form-control rightJustified"><input name="qtybatch[]" value="1" id="qtybatch1" type="hidden" class="form-control rightJustified"><input name="qtymohon[]" value="1" id="qtymohon1" type="hidden" class="form-control rightJustified"></td><td width="10%"><input name="stock[]" oninput="totalline(1)" value="" id="stock1" type="text" class="form-control rightJustified" readonly=""><input name="qtylebih[]" value="1" id="qtylebih1" type="hidden" class="form-control rightJustified"></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="3%"><button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash-can"></i></button></td>'
    }

    //Add Table Element
    function addRow(tableId, appendDataKey) {
        let tableBody = document.querySelector(`#${tableId} tbody`);
        let tr = document.createElement('tr');
        tr.innerHTML = appendData[appendDataKey];
        tableBody.appendChild(tr);
    }

    //Delete Table Element Current Row
    function deleteCurrentRow(e) {
        if (e.closest('tr').id == '') {
            e.closest('tr').remove();
        }
    }
</script>