<?= main_header('pembelian', 'Retur') ?>
<div class="row">
    <div class="col-md-12">
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
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Retur</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Info</button>

                                </div>
                            </nav>
                            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">Pemasok</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group position-reletive">
                                                            <select id="supp" name="supp" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                                <option>----PILIH-----</option>
                                                                <option value="SP.000003">PT ANUGRAHMITRA SELARAS </option>
                                                                <option value="SP.000005">PT CENTRAL BANDUNG RAYA </option>
                                                                <option value="SP.000006">CV BUANA MEDITAMA </option>
                                                                <option value="SP.000008">PT LABORA MANDIRI INDO PRATAMA </option>
                                                                <option value="SP.000009">PT MANDIRI NUGRAHA AJITUNGGAL </option>
                                                                <option value="SP.000010">PT MITRA ANTAR PUTRA </option>
                                                                <option value="SP.000012">CV PELITA KARYA MANDIRI </option>
                                                                <option value="SP.000013">PT INTISUMBER HASILSEMPURNA </option>
                                                                <option value="SP.000016">PYRA </option>
                                                                <option value="SP.000017">PT SENTRA ASIA GEMILANG </option>
                                                                <option value="SP.000019">PT TERANG BERSAUDARA </option>
                                                                <option value="SP.000021">CV ADIWARNA TUNGGAL JAYA </option>
                                                                <option value="SP.000023">PT PARIT PADANG GLOBAL </option>
                                                                <option value="SP.000025">PT CIPTA KARUNIA MANDIRI </option>
                                                                <option value="SP.000026">PT ENSEVAL PUTERA MEGATRADING TBK. </option>
                                                                <option value="SP.000027">PT SIDOLA </option>
                                                                <option value="SP.000028">PT PRIMA ALKESINDO NUSANTARA </option>
                                                                <option value="SP.000031">PT ABADINUSA USAHASEMESTA </option>
                                                                <option value="SP.000034">PT RAJAWALI PERMATA ASIA </option>
                                                                <option value="SP.000035">TERATE PLASTIC </option>
                                                                <option value="SP.000036">SAKURA MEDICAL </option>
                                                                <option value="SP.000039">PT ANUGRAH ARGON MEDICA </option>
                                                                <option value="SP.000043">PT CITRA VITA BUANA </option>
                                                                <option value="SP.000045">PT NUSA KHARISMA RAYA </option>
                                                                <option value="SP.000047">BP. HEINTJE </option>
                                                                <option value="SP.000051">PT SINAR RODA UTAMA </option>
                                                                <option value="SP.000055">PT BANCEUY TUNGGAL JAYA </option>
                                                                <option value="SP.000056">PT MUNGGARAN ROSARI INDONESIA </option>
                                                                <option value="SP.000057">PT MUZAMAL VENTURES INDONESIA </option>
                                                                <option value="SP.000060">ADJUSTMENT </option>
                                                                <option value="SP.000061">PT ANTARMITRA SEMBADA </option>
                                                                <option value="SP.000063">PT INDO ABADI SARI MAKMUR </option>
                                                                <option value="SP.000072">PT CIPTA SUKSES MEDIKA </option>
                                                                <option value="SP.000076">PT LUGINA RESTU EKATAMA </option>
                                                                <option value="SP.000092">PT BINDA JAKARTA </option>
                                                                <option value="SP.000098">PT SATO LABEL SOLUTIONS </option>
                                                                <option value="SP.000101">BP. YUSUF </option>
                                                                <option value="SP.000103">adjustmen u PACK ITEM (masuk) </option>
                                                                <option value="SP.000106">PT CORISE DERMA EXPERT </option>
                                                                <option value="SP.000108">PT INDO SANGHYANG </option>
                                                                <option value="SP.000109">PT DAYA AGUNG MANDIRI </option>
                                                                <option value="SP.000113">SAM MEDICAL </option>
                                                                <option value="SP.000114">PT MATESU ABADI </option>
                                                                <option value="SP.000117">PT MENSA BINASUKSES </option>
                                                                <option value="SP.000119">PT CIPTA MEDIKA INDONESIA </option>
                                                                <option value="SP.000125">PT BUANA INTIPRIMA USAHA </option>
                                                                <option value="SP.000126">PT CAKRA MEDIKA UTAMA </option>
                                                                <option value="SP.000132">PT GOLDEN GLOBE MEDICA </option>
                                                                <option value="SP.000137">PT MEDICAL GREY INTERNASIONAL </option>
                                                                <option value="SP.000138">PT DJUNIAR - DJUNIAR </option>
                                                                <option value="SP.000140">PT LARISINDO LESTARI </option>
                                                                <option value="SP.000154">PT ANUGERAH PHARMINDO LESTARI </option>
                                                                <option value="SP.000166">KIMIA FARMA TRADING DAN DISTRIBUTOR </option>
                                                                <option value="SP.000167">CV ADHERENCE MANUNGGAL PRADANA </option>
                                                                <option value="SP.000170">WENZHOU KLF MEDICAL PLASTICS CO;.LTD </option>
                                                                <option value="SP.000174">PT ANARA MEDICAL INDONESIA </option>
                                                                <option value="SP.000175">PT MITRA DISTRIBUSINDO SENTOSA </option>
                                                                <option value="SP.000177">PT SOLUSI FAJAR DISTRINDO </option>
                                                                <option value="SP.000178">PT SUKSES KITTA PRODUCTION </option>
                                                                <option value="SP.000179">PT DENA DANAR DJAYA </option>
                                                                <option value="SP.000180">ADJUSTMENT Masuk (Tukar Barang) </option>
                                                                <option value="SP.000181">PT ANUGERAH CORONA MEDIKA </option>
                                                                <option value="SP.000182">PT INOVASI SEHAT NUSANTARA </option>
                                                                <option value="SP.000183">PT CITRA JAYA AGUNG LESTARI </option>
                                                                <option value="SP.000184">UD RIZA SPALK </option>
                                                                <option value="SP.000187">ADJUSMENT SO </option>
                                                            </select>
                                                            <span class="input-group-btn position-absolute start-100 h-100 top-0">
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
                                                    <label class="col-md-3 control-label pt-2">No. Retur #</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="PR.2023.04.000004" readonly>

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
                                                        <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-04-19" />

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <label class="col-md-3 control-label pt-2">No. Faktur</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group position-reletive">
                                                            <select name="kodepu" id="kodepu" class="form-control input-medium select2me">
                                                                <option value="">---Tanpa Faktur---</option>
                                                            </select>
                                                            <span class="input-group-btn position-absolute start-100 h-100 top-0">
                                                                <a class="btn green" onclick="getpoheader();getpo();getbiaya()"><i class="fa fa-refresh"></i></a>
                                                            </span>

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
                                                        <th width="20%" style="text-align: center">Nama Barang</th>
                                                        <th width="8%" style="text-align: center">Kuantitas</th>
                                                        <th width="10%" style="text-align: center">Satuan</th>
                                                        <th width="10%" style="text-align: center">No Batch</th>
                                                        <th width="10%" style="text-align: center">Tanggal EXP</th>
                                                        <th width="15%" style="text-align: center">Harga</th>
                                                        <th width="5%" style="text-align: center"></th>
                                                        <th width="8%" style="text-align: center">Diskon</th>
                                                        <th width="15%" style="text-align: center">Total Harga</th>

                                                    </tr>
                                                    <thead>

                                                    <tbody>
                                                        <tr>
                                                            <td width="20%">
                                                                <select name="kode[]" id="kode1" class="select2_el_barang_filter form-control input-largex" onchange="showbarangname(this.value, 1)">
                                                                    <option value="">--- Pilih Barang ---</option>
                                                                </select>
                                                            </td>

                                                            <td width="8%"><input name="qty[]" onchange="totalline(1);total()" value="0" id="qty1" type="text" class="form-control rightJustified"></td>
                                                            <td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                            </td>
                                                            <td width="10%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                            </td>
                                                            <td width="10%"><input name="tgl_exp[]" id="tgl_exp1" type="text" class="form-control " onkeypress="return tabE(this,event)">
                                                            </td>
                                                            <td width="15%"><input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified"></td>
                                                            <td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td>
                                                            <td width="8%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified "></td>
                                                            <td width="15%"><input name="jumlah[]" id="jumlah1" ; type="text" class="form-control rightJustified" size="40%" onchange="total()"></td>

                                                        </tr>

                                                    </tbody>
                                            </table>

                                            <div class="row">
                                                <div class="col-xs-9">
                                                    <div class="wells">
                                                        <button type="button" onclick="addRow('datatable', 'return_pembelian_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                        <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                                                            <label class="col-md-3 control-label pt-2">Gudang</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <select id="gudang" name="gudang" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">

                                                                        <option value="1">
                                                                            GUDANG PUSAT</option>
                                                                        <option value="3">
                                                                            Gd. KAWARANG</option>
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
                                                                <select name="sppn" id="sppn" class="form-control select2me input-small" onchange="total()">

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
                        </div>
                        <!--tab-->
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
    </div>
</div>