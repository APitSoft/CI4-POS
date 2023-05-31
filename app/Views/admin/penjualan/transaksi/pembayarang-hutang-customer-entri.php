<?= main_header('Penjualan', 'Penerimaan', 'Daftar Penerimaan Penjualan', 'Entri Penerimaan') ?>


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
                            <a href="#tab1" data-bs-toggle="tab">
                                Penerimaan
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Terima Dari</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="cust" name="cust" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>---Pilih Customer</option>
                                                        <option value="CS.000001">RS AL ISLAM</option>
                                                        <option value="CS.000002">RSIA LIMIJATI</option>
                                                        <option value="CS.000003">RS ADVENT</option>
                                                        <option value="CS.000004">RS BORROMEUS</option>
                                                        <option value="CS.000006">RS HERMINA ARCAMANIK</option>
                                                        <option value="CS.000007">RS IMMANUEL</option>
                                                        <option value="CS.000009">KLINIK PERISAI HUSADA</option>
                                                        <option value="CS.000017">RS CAHYA KAWALUYAN</option>
                                                        <option value="CS.000025">RSU KASIH BUNDA</option>
                                                        <option value="CS.000039">RS KARISMA CIMAREME</option>
                                                        <option value="CS.000042">RSU MUHAMMADIYAH</option>
                                                        <option value="CS.000044">RS HERMINA PASTUR</option>
                                                        <option value="CS.000046">RS AL ISLAM LOG</option>
                                                        <option value="CS.000047">RS SANTO YUSUF</option>
                                                        <option value="CS.000049">RS IMC</option>
                                                        <option value="CS.000050">RSU HARAPAN KELUARGA</option>
                                                        <option value="CS.000052">PT RAJAWALI PERMATA ASIA</option>
                                                        <option value="CS.000057">RSIA MELINDA 1</option>
                                                        <option value="CS.000059">APOTEK KOPO</option>
                                                        <option value="CS.000062">RSU MELINDA 2</option>
                                                        <option value="CS.000065">RS KEBONJATI</option>
                                                        <option value="CS.000068">KLINIK UTAMA HANDAYANI</option>
                                                        <option value="CS.000075">CALYSTA SKIN CARE</option>
                                                        <option value="CS.000086">APOTEK CAHAYA</option>
                                                        <option value="CS.000107">RS AVISENA</option>
                                                        <option value="CS.000127">EXPIRED (KADALUARSA)</option>
                                                        <option value="CS.000135">KLINIK HARAPAN KELUARGA</option>
                                                        <option value="CS.000151">APOTEK PRIMA</option>
                                                        <option value="CS.000153">KLINIK UTAMA GENTA ARAS SALAMA</option>
                                                        <option value="CS.000167">RS PINDAD</option>
                                                        <option value="CS.000177">RS KARTINI</option>
                                                        <option value="CS.000183">RS UNGGUL KARSA MEDIKA</option>
                                                        <option value="CS.000185">RS GRAHA BUNDA</option>
                                                        <option value="CS.000195">RS EDELWEISS</option>
                                                        <option value="CS.000207">KLINIK UTAMA YUWA RAJA</option>
                                                        <option value="CS.000210">KLINIK UTAMA CAHAYA QALBU</option>
                                                        <option value="CS.000214">RS BAROS</option>
                                                        <option value="CS.000215">RS JASA KARTINI</option>
                                                        <option value="CS.000217">KLINIK UTAMA BUNDA NANDA</option>
                                                        <option value="CS.000218">KLINIK PRIMA HUSADA</option>
                                                        <option value="CS.000220">RS RAMA HADI</option>
                                                        <option value="CS.000221">RS AMANDA</option>
                                                        <option value="CS.000223">RS HERMINA SUKABUMI</option>
                                                        <option value="CS.000224">RSU BUNGSU</option>
                                                        <option value="CS.000230">RS SENTRAL MEDIKA MITRATAMA</option>
                                                        <option value="CS.000232">RS HERMINA KARAWANG</option>
                                                        <option value="CS.000234">RS HERMINA BOGOR</option>
                                                        <option value="CS.000235">RSIA HARAPAN BUNDA</option>
                                                        <option value="CS.000239">RS AS-SHOFWAN</option>
                                                        <option value="CS.000240">RS IZZA</option>
                                                        <option value="CS.000242">RS HERMINA GRAND WISATA</option>
                                                        <option value="CS.000244">RSJP PARAMARTA</option>
                                                        <option value="CS.000246">RUMAH SAKIT UMUM DAERAH PELABUHANRATU KABUPATEN</option>
                                                        <option value="CS.000247">RS HERMINA SOREANG</option>
                                                        <option value="CS.000250">NN</option>
                                                        <option value="CS.000257">PT ANUGERAH CORONA MEDIKA</option>
                                                        <option value="CS.000258">RS HERMINA TASIKMALAYA</option>
                                                        <option value="CS.000260">RSIA MITRA FAMILY</option>
                                                        <option value="CS.000262">KLINIK PRATAMA KASIH BUNDA</option>
                                                        <option value="CS.000263">KLINIK PRATAMA PT KAHATEX</option>
                                                        <option value="CS.000264">KLINIK MITRA MEDIKA PADALARANG</option>
                                                        <option value="CS.000266">KLINIK MITRA MEDIKA CIMAREME</option>
                                                        <option value="CS.000267">KLINIK PRATAMA DR. DEDE GUNAWAN</option>
                                                        <option value="CS.000268">RS MEDIROSSA 2</option>
                                                        <option value="CS.000271">MAYAPADA HOSIPTAL BANDUNG</option>
                                                    </select>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn blue" onclick="getfaktur()"><i class="fa fa-download"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">No. Bukti #</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="ST.2023.04.000062" readonly>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Kas/Bank</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <select id="kasbank" name="kasbank" class="form-select input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option value="110101">Kas Kecil</option>
                                                        <option value="110102">Bank</option>
                                                        <option value="110103">Bank BJB</option>
                                                        <option value="110201">Deposito Bank</option>
                                                        <option value="110202">BRI</option>
                                                        <option value="110104">New Account</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tgl Bayar</label>
                                            <div class="col-md-4">
                                                <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-18" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Metode Bayar</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <select id="metodebayar" name="metodebayar" class="form-select input-small select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option value="T">Tunai</option>
                                                        <option value="C">Cek/Giro</option>
                                                        <option value="F">Transfer Bank</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-medium" name="nomorcek" id="nomorcek" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Tanggal Cek</label>
                                            <div class="col-md-4">
                                                <input id="tanggalcek" name="tanggalcek" class="form-control input-medium" type="date" value="2023-04-18" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Nilai Pembayaran</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <input type="text" class="form-control input-medium rightJustified" name="jumlahbayar" id="jumlahbayar" value="0" readonly>
                                                    <span class="input-group-btn position-absolute start-100 top-0">
                                                        <a class="btn green" onclick="total()"><i class="fa fa-refresh"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Keterangan</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-large" name="keterangan" id="keterangan" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table id="datatable overflow-auto" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <thead>
                                            <tr>
                                                <th width="12%" style="text-align: center">No. Faktur</th>
                                                <th width="10%" style="text-align: center">Tgl. Faktur</th>
                                                <th width="10%" style="text-align: center">Total Faktur</th>
                                                <th width="10%" style="text-align: center">Terhutang</th>
                                                <th width="10%" style="text-align: center">Uang Muka</th>
                                                <th width="10%" style="text-align: center">Bayar</th>
                                                <th width="5%" style="text-align: center">Diskon</th>
                                                <th width="10%" style="text-align: center">Pembayaran</th>

                                            </tr>
                                            <thead>

                                            <tbody>
                                                <tr>

                                                    <td width="12%"><input name="faktur[]" id="faktur1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly></td>
                                                    <td width="10%"><input name="tglfaktur[]" id="tglfaktur1" type="text" class="form-control " onkeypress="return tabE(this,event)" readonly></td>
                                                    <td width="10%"><input name="totfaktur[]" id="totfaktur1" type="text" class="form-control rightJustified" readonly></td>
                                                    <td width="10%"><input name="hutang[]" id="hutang1" type="text" class="form-control rightJustified" readonly></td>
                                                    <td width="10%"><input name="uangmuka[]" id="uangmuka1" type="text" class="form-control rightJustified" readonly></td>
                                                    <td width="10%"><input name="bayar[]" onchange="totalline(1)" value="0" id="bayar1" type="text" class="form-control rightJustified" onclick="formatCurrency(this)"></td>
                                                    <td width="5%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified " onclick="formatCurrency(this)"></td>
                                                    <td width="10%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab1-->
                </div>
                <!--tab-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="wells">
                            <button type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
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
                                    <td width="40%"><strong>DISKON</strong></td>
                                    <td width="1%"><strong>:</strong></td>
                                    <td width="59" align="right"><strong><span id="_vdiskon"></span></strong></td>
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