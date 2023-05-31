<?= main_header('Penjualan', 'Penerimaan', 'Daftar Retur Penjualan', ' Entri Retur') ?>



<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>
    </div>

    <div class="portlet-body form">
        <form id="frmPenjualan" class="form-horizontal" method="post">
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                Retur
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="home" aria-selected="true">
                                Info
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pelanggan</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="cust" name="cust" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>---Pilih Customer</option>
                                                        <option value="CS.000265">KLINIK MITRA MEDIKA BANDUNG </option>
                                                        <option value="CS.000266">KLINIK MITRA MEDIKA CIMAREME </option>
                                                        <option value="CS.000267">KLINIK PRATAMA DR. DEDE GUNAWAN </option>
                                                        <option value="CS.000271">MAYAPADA HOSIPTAL BANDUNG </option>
                                                        <option value="CS.000273">PCR Adjust </option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="showpo();showheader()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Retur #</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="SR.2023.04.000006" readonly>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Faktur</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div id="listpo"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <thead>
                                            <th width="20%" style="text-align: center">Nama Barang</th>
                                            <th width="8%" style="text-align: center">Kuantitas</th>
                                            <th width="10%" style="text-align: center">Satuan</th>
                                            <th width="12%" style="text-align: center">No Batch</th>
                                            <th width="8%" style="text-align: center">Tanggal EXP</th>
                                            <th width="15%" style="text-align: center">Harga</th>
                                            <th width="5%" style="text-align: center"></th>
                                            <th width="8%" style="text-align: center">Diskon</th>
                                            <th width="15%" style="text-align: center">Total Harga</th>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td width="20%">
                                                    <select name="kode[]" id="kode1" class="select2_el_barang_filter form-select input-largex" onchange="showbarangname(this.value, 1)">
                                                        <option value="">--- Pilih Barang ---</option>
                                                    </select>
                                                </td>

                                                <!--td width="30%" ><input name="nama[]"    id="namabarang0" type="text" class="form-control "  onkeypress="return tabE(this,event)" readonly></td-->
                                                <td width="8%"><input name="qty[]" onchange="totalline(1);total()" value="1" id="qty1" type="text" class="form-control rightJustified"></td>
                                                <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly></td>
                                                <td width="12%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control ">
                                                </td>
                                                <td width="8%"><input name="tgl_exp[]" id="tgl_exp1" type="text" class="form-control ">
                                                </td>
                                                <td width="15%"><input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified" readonly></td>
                                                <td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td>
                                                <td width="8%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified " readonly></td>
                                                <td width="15%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="addRow('datatable','penjualan_retur_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash-can"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab1-->

                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
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

                                                                <option value="1">
                                                                    GUDANG PUSAT</option>
                                                                <option value="4">
                                                                    New Gudang</option>
                                                            </select>
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
                                                    <label class="col-md-3 control-label pt-2">PPN</label>
                                                    <div class="col-md-4">
                                                        <select name="sppn" id="sppn" class="form-select select2me input-small" onchange="total()">
                                                            <!-- <option value="Y">Ya</option>
														  <option value="T" selected>Tidak</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Keterangan</label>
                                                    <div class="col-md-4">
                                                        <textarea row="3" class="form-control input-xlarge" placeholder="" name="keterangan" id="keterangan" maxlength="100"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab2-->
                </div>
                <!--tab-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="wells">
                            <button id="btnsimpan" type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>


                            <div class="btn-group">
                                <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fas fa-edit"></i> Data Baru</button>
                            </div>
                            <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                        </div>
                    </div>

                    <div class="col-md-4 invoice-block">
                        <div class="well p-3">
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
                                    <td width="40%"><strong>TOTAL</strong></td>
                                    <td width="1%"><strong>:</strong></td>
                                    <td width="59" align="right"><strong><span id="_vtotal"></span></strong></td>
                                </tr>

                            </table>
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
        'penjualan_retur_entri': '<td width="20%"><select name="kode[]" id="kode1" class="select2_el_barang_filter form-select input-largex" onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select></td><td width="8%"><input name="qty[]" onchange="totalline(1);total()" value="1" id="qty1" type="text" class="form-control rightJustified"></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly=""></td><td width="12%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control "></td><td width="8%"><input name="tgl_exp[]" id="tgl_exp1" type="text" class="form-control "></td><td width="15%"><input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified" readonly=""></td><td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td><td width="8%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified " readonly=""></td><td width="15%"><input name="jumlah[]" id="jumlah1" ;="" type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly=""></td>'
    }

    //Add Table Element
    function addRow(tableId, appendDataKey) {
        let tableBody = document.querySelector(`#${tableId} tbody`);
        let tr = document.createElement('tr');
        tr.innerHTML = appendData[appendDataKey];
        tableBody.appendChild(tr);
    }

    //Delete Table Element Last Row
    function deleteLastRow(tableId) {
        let tableBody = document.querySelector(`#${tableId} tbody`);
        if (tableBody.lastChild.id == '') {
            tableBody.removeChild(tableBody.lastChild);
        }
    }
</script>