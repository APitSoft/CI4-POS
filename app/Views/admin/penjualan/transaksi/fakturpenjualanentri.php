<?= main_header('Penjualan', 'Faktur', 'Daftar Faktur Penjualan', 'Entri Faktur') ?>





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
                            <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Faktur</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Biaya Lainnya</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pelanggan <span color="red">*</span></label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="cust" name="cust" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>---Pilih Customer</option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="showsd();getcs()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Faktur # <font color="red">*</font></label>
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="" readonly>
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
                                            <label class="col-md-3 control-label pt-2">Tanggal <font color="red">*</font></label>
                                            <div class="col-md-4">
                                                <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-18" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Kirim</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select name="kodesd" id="kodesd" class="form-control input-medium select2me">
                                                        <option value="">---Tanpa SD---</option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn blue" onclick="getsd()"><i class="fa fa-download"></i></a>
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
                                            <label class="col-md-3 control-label pt-2">PPN</label>
                                            <div class="col-md-4">
                                                <select name="sppn" id="sppn1" class="form-control select2me input-medium" onchange="total()">
                                                    <!-- <option value="Y">Ya</option>
																  <option value="T" selected>Tidak</option> -->
                                                </select>
                                                <!-- <input type="text" name="sppn" id="sppn" class="form-control"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No Faktur Pajak</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="010.007-23.57090608" name="no-pajak">
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
                                            <label class="col-md-3 control-label pt-2">No Pesanan</label>
                                            <div class="col-md-6">
                                                <input type="text" id="no-po" class="form-control" name="no-po" readonly>
                                                <input type="hidden" id="kodepo" class="form-control" name="kodepo" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pembayaran</label>
                                            <div class="col-md-4">
                                                <select name="pembayaran" id="pembayaran1" class="form-control select2me input-medium" onchange="total()">
                                                    <!--  <option value="T">Tunai</option>
																  <option value="K" selected="true">Kredit</option> -->
                                                </select>
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
                                            <th width="5%" style="text-align: center">Kuantitas</th>
                                            <th width="8%" style="text-align: center">Satuan</th>
                                            <th width="10%" style="text-align: center">Harga</th>
                                            <th width="5%" style="text-align: center"></th>
                                            <th width="8%" style="text-align: center">Diskon</th>
                                            <th width="15%" style="text-align: center">Total Harga</th>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td width="20%">
                                                    <select name="kode[]" id="kode1" class=" form-control input-largex" onchange="showbarangname(this.value, 1)">
                                                        <option value="">--- Pilih Barang ---</option>
                                                    </select>
                                                    <input name="no_batch[]" onchange="totalline(1)" value="" id="no_batch1" type="hidden" class="form-control rightJustified">
                                                    <input name="tgl_exp[]" onchange="totalline(1)" value="" id="tgl_exp1" type="hidden" class="form-control rightJustified">
                                                </td>

                                                <!--td width="30%" ><input name="nama[]"    id="namabarang0" type="text" class="form-control "  onkeypress="return tabE(this,event)" readonly></td-->
                                                <td width="5%"><input name="qty[]" readonly onchange="totalline(1);total()" value="1" id="qty1" type="text" class="form-control rightJustified"></td>
                                                <td width="8%">
                                                    <input name="sat[]" readonly id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                </td>
                                                <td width="10%">
                                                    <input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" readonly class="form-control rightJustified">
                                                    <input name="cn1[]" onchange="totalline(1)" value="0" id="a-cn1" type="hidden" class="form-control rightJustified">
                                                    <input name="hargabruto[]" placeholder='Harga Percust' id="hargabruto1" type="text" readonly class="form-control rightJustified">
                                                </td>
                                                <td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td>
                                                <td width="8%">
                                                    <input name="disc[]" readonly onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified ">
                                                    <input name="cn2[]" onchange="totalline(1)" value="0" id="b-cn1" type="hidden" class="form-control rightJustified">
                                                </td>
                                                <td width="15%">
                                                    <input name="jumlah[]" readonly id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()">
                                                    <input name="cn3[]" onchange="totalline(1)" value="0" id="c-cn1" type="hidden" class="form-control rightJustified">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="wells">
                                                <button type="button" onclick="addRow('datatable','penjualan_faktur_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash"></i></button>
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
                                                            <input id="tanggalkirim" name="tanggalkirim" class="form-control date-picker input-medium" type="text" value="18-04-2023" data-date-format="dd-mm-yyyy" data-date-viewmode="years" placeholder="" onkeypress="return tabE(this,event)" />
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Sales</label>
                                                    <div class="col-md-4">
                                                        <select id="sales1" name="sales" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                            <option>---- Pilih -----</option>
                                                            <option value="2">KAR</option>
                                                            <option value="3">CHR</option>
                                                            <option value="4">VIN</option>
                                                            <option value="5">YPY</option>
                                                            <option value="6">KUS</option>
                                                            <option value="7">OFC</option>
                                                        </select>
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
                                            <tr>
                                                <td width="45%">
                                                    <select name="lkode[]" id="lkode1" class="select2_el form-control input-xlarge">
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
                                        <button type="button" onclick="addRow('datatable2','penjualan_faktur_entri2')" class="btn green"><i class="fa fa-plus"></i> </button>
                                        <button type="button" onclick="deleteLastRow('datatable2')" class="btn red"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="wells">
                                <button id="btnsimpan" type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
                                <div class="btn-group">
                                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
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
                                        <td width="59" align="right"><strong><span id="_vbiayalain"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">
                                            <strong>TOTAL</strong>
                                            <input type="hidden" name="vtotal" id="_vvtotal">
                                        </td>
                                        <td width="1%"><strong>:</strong></td>
                                        <td width="59" align="right"><strong><span id="_vtotal"></span></strong></td>
                                    </tr>
                                    <input type="hidden" id="tersimpan">
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
        'penjualan_faktur_entri': '<td width="20%"><select name="kode[]" id="kode1" class=" form-control input-largex" onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select><input name="no_batch[]" onchange="totalline(1)" value="" id="no_batch1" type="hidden" class="form-control rightJustified"><input name="tgl_exp[]" onchange="totalline(1)" value="" id="tgl_exp1" type="hidden" class="form-control rightJustified"></td><td width="5%"><input name="qty[]" readonly="" onchange="totalline(1);total()" value="1" id="qty1" type="text" class="form-control rightJustified"></td><td width="8%"><input name="sat[]" readonly="" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="10%"><input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" readonly="" class="form-control rightJustified"><input name="cn1[]" onchange="totalline(1)" value="0" id="a-cn1" type="hidden" class="form-control rightJustified"><input name="hargabruto[]" placeholder="Harga Percust" id="hargabruto1" type="text" readonly="" class="form-control rightJustified"></td><td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td><td width="8%"><input name="disc[]" readonly="" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified "><input name="cn2[]" onchange="totalline(1)" value="0" id="b-cn1" type="hidden" class="form-control rightJustified"></td><td width="15%"><input name="jumlah[]" readonly="" id="jumlah1" ;="" type="text" class="form-control rightJustified" size="40%" onchange="total()"><input name="cn3[]" onchange="totalline(1)" value="0" id="c-cn1" type="hidden" class="form-control rightJustified"></td>',

        'penjualan_faktur_entri2': '<td width="45%"><select name="lkode[]" id="lkode1" class="select2_el form-control input-xlarge"><option value="">--- Pilih Akun ---</option></select> </td><td width="15%"><input name="ljumlah[]" id="ljumlah1" type="text" class="form-control rightJustified" onchange="total()" value="0"></td> <td width="40%"><input name="lket[]" id="lket1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td>'
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