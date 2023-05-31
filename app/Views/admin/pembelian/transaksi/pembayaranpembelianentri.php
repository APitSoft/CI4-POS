<?= main_header('Pembelian', 'Pembayaran', ' Daftar Pembayaran Pembelian ', 'Entri Pembayaran') ?>


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
        <form id="frmpembelian" class="form-horizontal" method="post">
            <div class="form-body">
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-bs-toggle="tab">
                                Pembayaran
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Pembayaran Ke</label>
                                            <div class="col-md-6">
                                                <div class="input-group position-relative">
                                                    <select id="supp" name="supp" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option>----PILIH-----</option>
                                                        <option value="SP.000003">PT ANUGRAHMITRA SELARAS</option>
                                                        <option value="SP.000005">PT CENTRAL BANDUNG RAYA</option>
                                                        <option value="SP.000008">PT LABORA MANDIRI INDO PRATAMA</option>
                                                        <option value="SP.000009">PT MANDIRI NUGRAHA AJITUNGGAL</option>
                                                        <option value="SP.000012">CV PELITA KARYA MANDIRI</option>
                                                        <option value="SP.000013">PT INTISUMBER HASILSEMPURNA</option>
                                                        <option value="SP.000016">PYRA</option>
                                                        <option value="SP.000017">PT SENTRA ASIA GEMILANG</option>
                                                        <option value="SP.000019">PT TERANG BERSAUDARA</option>
                                                        <option value="SP.000021">CV ADIWARNA TUNGGAL JAYA</option>
                                                        <option value="SP.000025">PT CIPTA KARUNIA MANDIRI</option>
                                                        <option value="SP.000026">PT ENSEVAL PUTERA MEGATRADING TBK.</option>
                                                        <option value="SP.000027">PT SIDOLA</option>
                                                        <option value="SP.000028">PT PRIMA ALKESINDO NUSANTARA</option>
                                                        <option value="SP.000034">PT RAJAWALI PERMATA ASIA</option>
                                                        <option value="SP.000047">BP. HEINTJE</option>
                                                        <option value="SP.000055">PT BANCEUY TUNGGAL JAYA</option>
                                                        <option value="SP.000057">PT MUZAMAL VENTURES INDONESIA</option>
                                                        <option value="SP.000060">ADJUSTMENT</option>
                                                        <option value="SP.000063">PT INDO ABADI SARI MAKMUR</option>
                                                        <option value="SP.000072">PT CIPTA SUKSES MEDIKA</option>
                                                        <option value="SP.000076">PT LUGINA RESTU EKATAMA</option>
                                                        <option value="SP.000092">PT BINDA JAKARTA</option>
                                                        <option value="SP.000101">BP. YUSUF</option>
                                                        <option value="SP.000103">adjustmen u PACK ITEM (masuk)</option>
                                                        <option value="SP.000114">PT MATESU ABADI</option>
                                                        <option value="SP.000117">PT MENSA BINASUKSES</option>
                                                        <option value="SP.000119">PT CIPTA MEDIKA INDONESIA</option>
                                                        <option value="SP.000125">PT BUANA INTIPRIMA USAHA</option>
                                                        <option value="SP.000154">PT ANUGERAH PHARMINDO LESTARI</option>
                                                        <option value="SP.000167">CV ADHERENCE MANUNGGAL PRADANA</option>
                                                        <option value="SP.000174">PT ANARA MEDICAL INDONESIA</option>
                                                        <option value="SP.000177">PT SOLUSI FAJAR DISTRINDO</option>
                                                        <option value="SP.000182">PT INOVASI SEHAT NUSANTARA</option>
                                                        <option value="SP.000183">PT CITRA JAYA AGUNG LESTARI</option>
                                                        <option value="SP.000184">UD RIZA SPALK</option>
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
                                                <input type="text" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="PP.2023.04.000060" readonly>
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
                                                    <select id="kasbank" name="kasbank" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
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
                                                    <select id="metodebayar" name="metodebayar" class="form-control input-small select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                        <option value="T">Tunai</option>
                                                        <option value="C">Cek/Giro</option>
                                                        <option value="F">Transfer Bank</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-medium" name="nomorcek" id="nomorcek" value="">
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
                                    <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <thead>
                                            <tr>
                                                <th width="12%" style="text-align: center">No. Faktur</th>
                                                <th width="10%" style="text-align: center">Tgl. Faktur</th>
                                                <th width="10%" style="text-align: center">Total Faktur</th>
                                                <th width="10%" style="text-align: center">Terhutang</th>
                                                <th width="10%" style="text-align: center">Uang Muka</th>
                                                <th width="10%" style="text-align: center">Bayar</th>
                                                <th width="5%" style="text-align: center">Diskon</th>
                                                <th width="15%" style="text-align: center">Pembayaran</th>

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
                                                    <td width="15%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()" readonly></td>
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
                                    <td width="40%"><strong>TOTAL</strong></td>
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