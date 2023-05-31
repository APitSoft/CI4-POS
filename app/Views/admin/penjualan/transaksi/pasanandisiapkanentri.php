<?= main_header('Penjualan', 'Pengiriman Pesanan', ' Daftar Pengiriman Pesanan ', 'Entri Pengiriman Pesanan') ?>



<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>
        <!--div class="tools">
						 <span class="label label-sm label-danger">										
						  REGISTER : 
						</span>

					</div-->

    </div>

    <div class="portlet-body form">
        <form id="frmpenjualan" class="form-horizontal" method="post">
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-file"></i> Pengiriman</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fa-solid fa-info-circle"></i> Info</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Kirim Ke</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="cust" name="cust" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>---Pilih Customer</option>
                                                        <?php foreach ($res as $key) { ?>
                                                            <option value="<?= $key->id ?>" <?= ($data != []) ? (($key->id == $data->cust_id) ? "selected" : '') : '' ?>><?= $key->nama ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="showpo()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Nomor #</label>
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" readonly value="">
                                                <input type="text" class="form-control input-medium" readonly placeholder="Nomor Auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tanggal</label>
                                            <div class="col-md-4">
                                                <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-18" />
                                                <input type="hidden" name="sppn" id="sppn" class="form-control input-medium" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Pesanan</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select name="kodeso" id="kodeso" class="form-select input-medium select2me">
                                                        <option value="">---Tanpa SO---</option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn blue" onclick="getpo();checkqty()"><i class="fa fa-download"></i></a>
                                                    </span>
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
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="no-po" name="no-po" class="form-control input-medium" type="hidden" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="row" style="background-color: #e6f7ff; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 2px; height: auto; overflow-x: scroll; padding: 5px; width: auto;">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable" style="width: 130%">
                                            <thead>
                                                <tr>
                                                    <th width="40%" style="text-align: center">Kode/Nama Barang</th>
                                                    <th width="15%" style="text-align: center">No Batch</th>
                                                    <th width="2%" style="text-align: center"></th>
                                                    <th width="15%" style="text-align: center">Tanggal EXP</th>
                                                    <th width="10%" style="text-align: center">qty</th>
                                                    <th width="10%" style="text-align: center">Stock</th>
                                                    <th width="10%" style="text-align: center">sat</th>
                                                    <th width="3%" style="text-align: center"></th>

                                                </tr>
                                                <thead>

                                                <tbody>
                                                    <tr>
                                                        <td width="40%">
                                                            <select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)">
                                                                <option> ---- Pilih Barang---- </option>
                                                            </select>
                                                        </td>
                                                        <td width="15%">
                                                            <input name="no_batch[]" readonly="" value="" id="no_batch1" type="text" class="form-control rightJustified">
                                                        </td>
                                                        <td width="2%">
                                                            <a class="btn default" id="lupharga1" data-toggle="modal" href="#lupbatch" onclick="getbatch(this.id)"><i class="fa fa-search"></i></a>
                                                        </td>
                                                        <td width="15%">
                                                            <input name="tgl_exp[]" value="" id="tgl_exp1" type="text" readonly class="form-control rightJustified">
                                                        </td>
                                                        <td width="10%">
                                                            <input name="qty[]" onchange="check_qty(this.value, 1)" oninput="totalline(1)" value="0" id="qty1" type="text" class="form-control rightJustified">
                                                            <input name="qty_jual[]" value="" id="qty_jual1" type="hidden" class="form-control rightJustified">
                                                            <input name="qtypesan[]" value="" id="qtypesan1" type="hidden" class="form-control rightJustified">
                                                        </td>
                                                        <td width="10%">
                                                            <input name="stock[]" oninput="totalline(1)" value="" id="stock1" type="text" class="form-control rightJustified" readonly>
                                                            <input name="qtysisapesan[]" value="" id="qtysisapesan1" type="hidden" class="form-control rightJustified">
                                                        </td>
                                                        <td width="10%">
                                                            <input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                        </td>
                                                        <td width="3%">
                                                            <button type="button" onclick="deleteRow(this)" class="btn red"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="addRow('datatable','penjualan_pesanan_disiapkan')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <!-- <button type="button" onclick="hapus()" class="btn red"><i class="fa fa-trash-o"></i></button> -->
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
                                                    <label class="col-md-3 control-label pt-2">Gudang</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <select id="gudang" name="gudang" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">

                                                                <option value="1" selected>
                                                                    GUDANG PUSAT</option>
                                                                <option value="4" selected>
                                                                    New Gudang</option>
                                                            </select>
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
                                                        <input type="text" class="form-control input-large" placeholder="" name="keterangan" id="keterangan" value="">
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
                                                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="well">
                                <button type="button" onclick="save()" id="save_btn1" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
                                <div class="btn-group">
                                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-pencil-square-o"></i> Data Baru</button>
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
        'penjualan_pesanan_disiapkan': '<td width="40%"><select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)"><option> ---- Pilih Barang---- </option></select></td><td width="15%"><input name="no_batch[]" readonly="" value="" id="no_batch1" type="text" class="form-control rightJustified"></td><td width="2%"><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupbatch" onclick="getbatch(this.id)"><i class="fa fa-search"></i></a></td><td width="15%"><input name="tgl_exp[]" value="" id="tgl_exp1" type="text" readonly="" class="form-control rightJustified"></td><td width="10%"><input name="qty[]" onchange="check_qty(this.value, 1)" oninput="totalline(1)" value="0" id="qty1" type="text" class="form-control rightJustified"><input name="qty_jual[]" value="" id="qty_jual1" type="hidden" class="form-control rightJustified"><input name="qtypesan[]" value="" id="qtypesan1" type="hidden" class="form-control rightJustified"></td><td width="10%"><input name="stock[]" oninput="totalline(1)" value="" id="stock1" type="text" class="form-control rightJustified" readonly=""><input name="qtysisapesan[]" value="" id="qtysisapesan1" type="hidden" class="form-control rightJustified"></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="3%"><button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa fa-trash"></i></button></td>'
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