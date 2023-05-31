<?= main_header('Pembalian', 'Faktur', 'Daftar Faktur Pembelian', 'Entri Faktur') ?>



<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>


    </div>


    <div class="portlet-body form">
        <form id="frmpembelian" class="form-horizontal" method="post">
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active fs-5" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Faktur</button>
                            <button class="nav-link fs-5" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Info</button>
                            <button class="nav-link fs-5" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Biaya Lainnya</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">Pemasok</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="supp" name="supp" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>----PILIH-----</option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="showpb()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">Nomor #</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" placeholder="Nomor Auto" readonly>
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">Tanggal</label>
                                            <div class="col-md-4">
                                                <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-17" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">No. Faktur</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" placeholder="" name="nomorfaktur" id="nomorfaktur1" value="">
                                                <input type="hidden" class="form-control input-medium" placeholder="" name="gudang" id="gudang1" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">No. Terima</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <select name="kodepb" id="kodepb" class="form-select input-medium select2me">
                                                        <option value="">---Tanpa PB---</option>
                                                    </select>
                                                    <a class="btn blue" onclick="getpoheader();getpb();getbiaya()"><i class="fa fa-download"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <div class="form-group mb-3">	
                                                            <label class="col-md-3 control-label">No. Pesanan</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <select name="kodepo" id="kodepo" class="form-control input-medium select2me">																														    													            
                                                                    <option value="">---Tanpa PO---</option>
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <a class="btn blue" onclick="getpoheader();getpo();getbiaya()"><i class="fa fa-download"></i></a>
                                                                </span>	
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">PPN</label>
                                            <div class="col-md-4">
                                                <select name="sppn" id="sppn" class="form-select select2me input-medium" onchange="total()">
                                                    <option value="Y">Ya</option>
                                                    <option value="T">Tidak</option>
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
                                            <label class="col-md-3 control-label">Pembayaran</label>
                                            <div class="col-md-4">
                                                <select name="pembayaran" id="pembayaran" class="form-select select2me input-medium" onchange="total()">
                                                    <option value="T">Tunai</option>
                                                    <option value="K" selected="true">Kredit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label">No Faktur Pajak</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="no-pajak">
                                                <input type="hidden" id="no-po1" class="form-control" name="no-po" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <thead>
                                            <tr>
                                                <th width="35%" style="text-align: center">Nama Barang</th>
                                                <th width="8%" style="text-align: center">Kuantitas</th>
                                                <th width="10%" style="text-align: center">Satuan</th>
                                                <th width="10%" style="text-align: center">No Batch</th>
                                                <th width="15%" style="text-align: center">Harga</th>
                                                <th width="5%" style="text-align: center"></th>
                                                <th width="5%" style="text-align: center">Diskon</th>
                                                <th width="15%" style="text-align: center">Total Harga</th>
                                            </tr>
                                            <thead>
                                            <tbody>
                                                <tr>
                                                    <td width="35%">
                                                        <select name="kode[]" id="kode1" readonly class=" form-select input-largex" onchange="showbarangname(this.value, 1)">
                                                            <option value="">--- Pilih Barang ---</option>
                                                        </select>
                                                    </td>

                                                    <td width="8%"><input name="qty[]" onchange="totalline(1);total()" readonly value="0" id="qty1" type="text" class="form-control rightJustified"></td>
                                                    <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                    </td>
                                                    <td width="10%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly>
                                                        <input name="tgl_exp[]" id="tgl_exp1" type="hidden" class="form-control " readonly>

                                                    </td>
                                                    <td width="15%">
                                                        <input name="harga[]" harga onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified" readonly>
                                                    </td>
                                                    <td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td>
                                                    <td width="5%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified "></td>
                                                    <td width="15%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="addRow('datatable', 'faktur_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash-can"></i></button>
                                            </div>
                                        </div>
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
                                                    <label class="col-md-3 control-label">Tgl Kirim</label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon">
                                                            <i class="fa fa-calendar"></i>
                                                            <input id="tanggalkirim" name="tanggalkirim" class="form-control date-picker input-medium" type="text" value="17-04-2023" data-date-format="dd-mm-yyyy" data-date-viewmode="years" placeholder="" onkeypress="return tabE(this,event)" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label">Keterangan</label>
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
                                                    <label class="col-md-3 control-label">Alamat</label>
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
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="tab-pane fade show" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="datatable2" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                            <thead>
                                                <tr>
                                                    <th width="45%" style="text-align: center">#Kode/ Nama Biaya</th>
                                                    <th width="15%" style="text-align: center">Jumlah</th>
                                                    <th width="40%" style="text-align: center">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="45%">
                                                        <select name="lkode[]" class="select2_el form-select input-xlarge">
                                                            <option value="">--- Pilih Akun ---</option>
                                                        </select>
                                                    </td>
                                                    <td width="15%"><input name="ljumlah[]" id="ljumlah1" type="text" class="form-control rightJustified" onchange="total()" value="0"></td>
                                                    <td width="40%"><input name="lket[]" id="lket1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td>

                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-9">
                                        <div class="wells">
                                            <button type="button" onclick="addRow('datatable2','faktur_entri2')" class="btn green"><i class="fa fa-plus"></i> </button>
                                            <button type="button" onclick="deleteLastRow('datatable2','faktur_entri2')" class="btn red"><i class="fa fa-trash-can"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="wells">
                                <button type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i>
                                    Simpan</button>

                                <div class="btn-group">
                                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-pencil-square-o"></i> Data Baru</button>
                                </div>
                                <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                            </div>
                        </div>

                        <div class="col-md-4 invoice-block">
                            <div class="well">
                                <table>
                                    <tr>
                                        <td width="40%"><strong>SUB TOTAL</strong></td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vsubtotal"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>DISKON</strong>
                                            <input type="hidden" name="vdiskon" id="_vvdiskon">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vdiskon"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>DPP</strong>
                                            <input type="hidden" name="vdpp" id="_vvdpp">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_dpp"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>PPN</strong>
                                            <input type="hidden" name="vppn" id="_vvppn">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vppn"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>BIAYA LAIN</strong>
                                            <input type="hidden" name="vbiayalain" id="_vvbiayalain">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vbiayalain"></span></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>TOTAL</strong>
                                            <input type="hidden" name="vtotal" id="_vvtotal">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vtotal"></span></strong></td>
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
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    let appendData = {
        'faktur_entri': '<td width="35%"><select name="kode[]" id="kode1" readonly="" class=" form-select input-largex" onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select></td><td width="8%"><input name="qty[]" onchange="totalline(1);total()" readonly="" value="0" id="qty1" type="text" class="form-control rightJustified"></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="10%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly=""><input name="tgl_exp[]" id="tgl_exp1" type="hidden" class="form-control " readonly=""></td><td width="15%"><input name="harga[]" harga="" onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified" readonly=""></td><td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td><td width="5%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified "></td><td width="15%"><input name="jumlah[]" id="jumlah1" ;="" type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly=""></td>',

        'faktur_entri2': '<td width="45%"><select name="lkode[]" class="select2_el form-select input-xlarge"><option value="">--- Pilih Akun ---</option></select></td><td width="15%"><input name="ljumlah[]" id="ljumlah1" type="text" class="form-control rightJustified" onchange="total()" value="0"></td><td width="40%"><input name="lket[]" id="lket1" type="text"class="form-control " onkeypress="return tabE(this,event)"></td>',
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