<?= main_header('Inventory', 'Permintaan Mutasi Barang Antar Cabang', 'Daftar Permintaan Mutasi', 'Entri Permintaan Mutasi Antar Cabang') ?>


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
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fa fa-file"></i>
                                Permintaan Mutasi Barang
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tanggal</label>
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
                                                    <input type="text" placeholder="Otomatis" name="nomorbukti" class="form-control" value="" readonly>
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
                                            <label class="col-md-3 control-label pt-2">Dari Cabang Asal</label>
                                            <div class="col-md-4">
                                                <select id="cabang_asal" name="cabang_asal" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                    <option>---Pilih Cabang</option>
                                                    <option value="01">PUSAT </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Ke Cabang Tujuan</label>
                                            <div class="col-md-4">
                                                <select id="cabang_tujuan" name="cabang_tujuan" class="form-select input-medium select2me" onchange="getbarang()" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                    <option>---Pilih Cabang</option>
                                                    <option value="02">CAB. KRWNG </option>
                                                </select>
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
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="background-color: #e6f7ff; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 2px; height: auto; overflow-x: scroll; padding: 5px; width: auto;">
                                <div class="col-md-12">
                                    <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th width="30%" style="text-align: center">Kode/Nama Barang</th>
                                                <th width="10%" style="text-align: center">qty</th>
                                                <th width="10%" style="text-align: center">Stock Asal</th>
                                                <th width="10%" style="text-align: center">satuan</th>
                                                <th width="5%"></th>
                                            </tr>
                                            <thead>
                                            <tbody>
                                                <tr>
                                                    <td width="30%">
                                                        <select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)">
                                                            <option value="">--- Pilih Barang ---</option>
                                                        </select>
                                                    </td>

                                                    <td width="10%">
                                                        <input name="qty[]" value="1" id="qty1" type="text" class="form-control rightJustified">
                                                    </td>
                                                    <td width="10%"><input name="stock[]" oninput="totalline(1)" value="" id="stock1" type="text" class="form-control rightJustified" readonly></td>
                                                    <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                    </td>
                                                    <td width="5%">
                                                        <button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash-can"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="addRow('datatable','inventory_permohon_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                            </div>
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



<script>
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    let appendData = {
        'inventory_permohon_entri': '<td width="30%"><select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select></td><td width="10%"><input name="qty[]" value="1" id="qty1" type="text" class="form-control rightJustified"></td><td width="10%"><input name="stock[]" oninput="totalline(1)" value="" id="stock1" type="text" class="form-control rightJustified" readonly=""></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="5%"><button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash-can"></i></button></td>'
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