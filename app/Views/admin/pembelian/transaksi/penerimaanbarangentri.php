<?= main_header('Pembelian', 'Penerimaan Barang', 'Data Penerimaan Barang', 'Entri Penerimaan Barang'); ?>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa-solid fa-file"></i></button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa-solid fa-info-circle"></i></button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <div class="row">
                        <label class="col-md-3 control-label pt-2">Terima Dari</label>
                        <div class="col-md-7">
                            <div class="input-group position-relative">
                                <select id="supp" name="supp" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                    <option>----PILIH-----</option>
                                    <option value="SP.000119">PT CIPTA MEDIKA INDONESIA</option>
                                    <option value="SP.000117">PT MENSA BINASUKSES</option>
                                    <option value="SP.000117">PT MENSA BINASUKSES</option>
                                    <option value="SP.000072">PT CIPTA SUKSES MEDIKA</option>
                                    <option value="SP.000188">PT OCEAN MEDIKA INDONESIA</option>
                                    <option value="SP.000103">adjustmen u PACK ITEM (masuk)</option>
                                </select>
                                <span class="input-group-btn position-absolute start-100 top-0">
                                    <a class="btn green" onclick="showpo()" style="width: 80px;"><i class="fa fa-refresh"></i> PO</a>
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
                            <input type="hidden" class="form-control input-medium" name="nomorbukti" readonly id="nomorbukti" placeholder="No Auto" value="">
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
                        <label class="col-md-3 control-label pt-2">Gudang</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="gudang" name="gudang" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">

                                    <option value="1">GUDANG PUSAT</option>
                                    <option value="3">Gd. KAWARANG</option>
                                    <option value="4">New Gudang</option>
                                </select>
                            </div>
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
                                <select id="kodepo" name="kodepo" class="form-control input-medium select2me">
                                    <option value="">---Tanpa PO---</option>
                                </select>
                                <span class="input-group-btn position-absolute start-100 top-0">
                                    <a class="btn green" onclick="getpo();getpoheader()"><i class="fa fa-refresh"></i></a>
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
                        <label class="col-md-3 control-label pt-2">Tanggal</label>
                        <div class="col-md-4">
                            <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-17" />
                            <input type="hidden" name="sppn" id="sppn" class="form-control input-medium" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <div class="row">
                        <label class="col-md-3 control-label pt-2">No. Terima</label>
                        <div class="col-md-3">
                            <SELECT name="opsi_terima" id="opsi_terima" class=" form-control">
                                <option value="1">Surat Jalan</option>
                                <option value="2">Faktur</option>
                            </SELECT>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class=" form-control input-medium" placeholder="" name="noterima" id="noterima" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row" style="background-color: #e6f7ff; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 2px; height: auto; overflow-x: scroll; padding: 5px; width: auto;">
            <div class="col-md-12">

                <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable" style="width: 120%">
                    <thead>
                        <tr>
                            <th width="40%" style="text-align: center">Kode/Nama Barang</th>
                            <th width="20%" style="text-align: center">No Batch</th>
                            <th width="15%" style="text-align: center">Tanggal exp</th>
                            <th width="10%" style="text-align: center">qty</th>
                            <th width="10%" style="text-align: center">sat</th>
                            <th width="5%" style="text-align: center"></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr id="table_row">
                            <td width="40%">
                                <select name="kode[]" id="kode1" class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)">
                                </select>
                            </td>
                            <td width="20%"><input name="no_batch[]" id="no_batch" type="text" class="form-control rightJustified"></td>
                            <td width="15%"><input name="tgl_exp[]" id="tgl_exp" type="text" placeholder='yyyy-mm-dd' class="form-control rightJustified">

                            </td>
                            <td width="10%">
                                <input name="qty[]" onchange="check_qty(this.value, 1)" value="1" id="qty1" type="text" class="form-control rightJustified">
                                <input name="qty_po[]" value="1" id="qty_po1" type="hidden" class="form-control rightJustified">
                                <input name="disc[]" value="0" id="disc1" type="hidden" class="form-control rightJustified">
                            </td>
                            <td width="10%">
                                <input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                <input name="hargabeli[]" id="harga1" type="hidden" class="form-control ">
                            </td>
                            <td width="5%">
                                <button type="button" onclick="deleteRow(this)" class="btn red"><i class="fa fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mb-3 mt-2">
            <div class="col-xs-9">
                <div class="wells">
                    <button type="button" onclick="addRow('datatable', 'penerimaan_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                    <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
            </div>

        </div>

    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                                        <input id="tanggalkirim" name="tanggalkirim" class="form-control date-picker input-medium" type="text" value="17-04-2023" data-date-format="dd-mm-yyyy" data-date-viewmode="years" placeholder="" onkeypress="return tabE(this,event)" />
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




<div class="row mb-3 mt-2">
    <div class="col-xs-12">
        <div class="well">
            <button type="button" onclick="save()" id="save_btn" class="btn blue"><i class="fa fa-save"></i> Simpan</button>

            <div class="btn-group">
                <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
            </div>
            <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
        </div>
    </div>
</div>