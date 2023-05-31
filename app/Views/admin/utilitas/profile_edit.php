<div class="containe-fluid">
    <?= main_header('Utilitas', 'Profil') ?>


    <div class="row profile">
        <div class="col-md-12">
            <div class="tabbable tabbable-custom tabbable-full-width">
                <ul class="nav nav-pills mb-3 pb-1 border-bottom border-2 border-primary" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab_1_1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Beranda</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab_1_3" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ubah Parameter</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="list-unstyled profile-nav">
                                    <li>
                                        <img src="../img/logo.png" class="img-responsive" alt="" />
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8 profile-info">
                                        <h1>PT. ANUGERAH JAYA FORDIC</h1>
                                        <p>
                                            Jl. Cibaduyut Raya Ruko M-Square Blok E No. 8 Bandung - Jawa Barat </p>
                                        <p>
                                        </p>
                                        <p>
                                            <a href="https://abiyosoft.com/">
                                                https://abiyosoft.com/ </a>
                                        </p>
                                        <ul class="list-inline">
                                            <li>
                                                <i class="fa fa-envelope"></i> fordic80@gmail.com
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                            </li>
                                        </ul>

                                        <h4>Periode Data Aktif : 5-2023</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1_3">
                        <style>
                            .control-label {
                                padding-left: 0px;
                                text-align: left;
                                width: 100%;
                            }
                        </style>
                        <div class="row profile-account">
                            <div class="col-md-3">
                                <div class="nav nav-tabs flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab_1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <i class="fa fa-angle-double-right float-start"></i> Identitas Perusahaan</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab_3" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <i class="fa fa-angle-double-right float-start"></i> Periode Data
                                    </button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#tab_4" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        <i class="fa fa-angle-double-right float-start"></i> Akun Referensi
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_1" class="tab-pane active">
                                        <form id="frmidusaha" role="form" action="#">
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Cabang </label>
                                                    <select class="form-select" name="_kodecbg">
                                                        <option value="01">PUSAT</option>
                                                        <option value="02">CAB. KRWNG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Nama </label>
                                                    <input type="text" placeholder="" class="form-control" value="PT. ANUGERAH JAYA FORDIC" id="_nama" name="_nama" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Nomor Telepon</label>
                                                    <input type="text" placeholder="" class="form-control" value="" id="_telpon" name="_telpon" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Nomor Fax</label>
                                                    <input type="text" placeholder="" class="form-control" value="022-5424180" id="_fax" name="_fax" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Handphone</label>
                                                    <input type="text" placeholder="" class="form-control" value="085102983855" id="_hp" name="_hp" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" placeholder="" class="form-control" value="fordic80@gmail.com" id="_email" name="_email" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Password Email</label>
                                                    <input type="text" placeholder="" class="form-control" value="bandung" id="_pwdemail" name="_pwdemail" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">SMTP Host</label>
                                                    <input type="text" placeholder="" class="form-control" value="niagahoster.com" id="_smtp_host" name="_smtp_host" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">SMTP Port</label>
                                                    <input type="text" placeholder="" class="form-control" value="" id="_smtp_port" name="_smtp_port" />
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Website</label>
                                                    <input type="text" placeholder="" class="form-control" value="https://abiyosoft.com/" id="_website" name="_website" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" placeholder="" class="form-control" value="Jl. Cibaduyut Raya Ruko M-Square Blok E No. 8 Bandung - Jawa Barat" id="_alamat1" name="_alamat1" />
                                                    <input type="text" placeholder="" class="form-control mt-2" value="" id="_alamat2" name="_alamat2" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Kota</label>
                                                    <input type="text" placeholder="" class="form-control" value="Bandung" id="_kota" name="_kota" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Kode Pos</label>
                                                    <input type="text" placeholder="" class="form-control" value="40238" id="_kodepos" name="_kodepos" />
                                                </div>
                                            </div>
                                            <div class="margiv-top-10">
                                                <a href="#" class="btn green" id="btnsimpanid">
                                                    Simpan
                                                </a>
                                                <a href="#" class="btn default">
                                                    Batal
                                                </a>
                                            </div>
                                            <h4><span id="error1" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success1" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                                        </form>
                                    </div>

                                    <div id="tab_3" class="tab-pane">
                                        <form id="frmperiode" role="form" action="#">
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Tahun </label>
                                                    <input type="text" placeholder="" class="form-control input-small" value="2023" id="_tahun" name="_tahun" maxlength="4" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="control-label">Bulan</label>
                                                    <select id="_bulan" name="_bulan" class="form-control input-sm select2me input-medium" data-placeholder="Pilih...">
                                                        <option value="NONE">&nbsp</option>
                                                        <option value="1">JANUARI</option>
                                                        <option value="2">PEBRUARI</option>
                                                        <option value="3">MARET</option>
                                                        <option value="4">APRIL</option>
                                                        <option value="5" selected='true'>MEI</option>
                                                        <option value="6">JUNI</option>
                                                        <option value="7">JULI</option>
                                                        <option value="8">AGUSTUS</option>
                                                        <option value="9">SEPTEMBER</option>
                                                        <option value="10">OKTOBER</option>
                                                        <option value="11">NOPEMBER</option>
                                                        <option value="12">DESEMBER</option>

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="margiv-top-10">
                                                <a href="#" class="btn green" id="btnsimpanperiode">
                                                    Simpan
                                                </a>
                                                <a href="#" class="btn default">
                                                    Batal
                                                </a>
                                            </div>
                                            <h4><span id="error3" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success3" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                                        </form>
                                    </div>
                                    <div id="tab_4" class="tab-pane">
                                        <form id="frmakun" role="form" action="#">
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun L/R Berjalan </label>
                                                    <select name="_akunlrberjalan" id="_akunlrberjalan" class="select2_el form-control input-xlarge">
                                                        <option value="300009">300009</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun L/R Lalu </label>
                                                    <select class="select2_el form-control input-xlarge" name="_akunlrlalu" id="_akunlrlalu">
                                                        <option value="300002">300002</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Persediaan Transit </label>
                                                    <select class="select2_el input-xlarge form-control " name="_akunpersediaantransit" id="_akunpersediaantransit">
                                                        <option value="110401">110401</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Persediaan </label>
                                                    <select class="select2_el form-control  input-xlarge" name="_akunpersediaan" id="_akunpersediaan">
                                                        <option value="110401">110401</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Biaya Kerugian Lain </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunbiayakerugianlain" id="_akunbiayakerugianlain">
                                                        <option value="1101">1101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Pendapatan Lain </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunpendapatanlain" id="_akunpendapatanlain">
                                                        <option value="1101">1101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Penjualan </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunpenjualan" id="_akunpenjualan">
                                                        <option value="400001">400001</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun PPN </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunppn" id="_akunppn">
                                                        <option value="110504">110504</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Ongkir </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunongkir" id="_akunongkir">
                                                        <option value="1101">1101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Uang Muka </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunuangmuka" id="_akunuangmuka">
                                                        <option value="110302">110302</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun HPP </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunhpp" id="_akunhpp">
                                                        <option value="5101">5101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Kas </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunkas" id="_akunkas">
                                                        <option value="110101">110101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Hutang </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunhutang" id="_akunhutang">
                                                        <option value="210101">210101</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun UM Jual </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunuangmukajual" id="_akunuangmukajual">
                                                        <option value="210102">210102</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Piutang </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunpiutang" id="_akunpiutang">
                                                        <option value="110301">110301</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Ongkir Jual </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunongkirjual" id="_akunongkirjual">
                                                        <option value="600014">600014</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Retur Jual </label>

                                                    <select class="form-control select2_el input-xlarge" name="_akunretjual" id="_akunretjual">
                                                        <option value="600014">600014</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class=" control-label">Akun Hutang Belum Ditagih </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akunhutangbeli" id="_akunhutangbeli">
                                                        <option value="210203">210203</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="">
                                                    <label class="col-md-3 control-label">Akun Diskon Penjualan </label>
                                                    <select class="form-control select2_el input-xlarge" name="_akundiskonjual" id="_akundiskonjual">
                                                        <option value=""></option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="margiv-top-10">
                                                <a href="#" class="btn green" id="btnsimpanakun">
                                                    Simpan
                                                </a>
                                                <a href="#" class="btn default">
                                                    Batal
                                                </a>
                                            </div>
                                            <h4><span id="error4" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success4" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                                        </form>
                                    </div>

                                    <div id="tab_5" class="tab-pane">
                                        <form id="frmnomor" role="form" action="#">
                                            <div class="form-group mb-3">
                                                <label class="control-label">Jurnal Umum</label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201700662" id="_nomor1" name="_nomor1" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Penerimaan Kas </label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201710221" id="_nomor2" name="_nomor2" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Pengeluaran Kas </label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201711473" id="_nomor3" name="_nomor3" />
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="control-label">Transfer Kas/Bank </label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201700005" id="_nomor5" name="_nomor5" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Penerimaan Bank </label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201270008" id="_nomor6" name="_nomor6" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Pengeluaran Bank </label>
                                                <input type="text" placeholder="" class="form-control input-small" value="201720194" id="_nomor7" name="_nomor7" />
                                            </div>


                                            <div class="margiv-top-10">
                                                <a href="#" class="btn green" id="btnsimpannomor">
                                                    Simpan
                                                </a>
                                                <a href="#" class="btn default">
                                                    Batal
                                                </a>
                                            </div>
                                            <h4><span id="error4" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success4" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
                                        </form>
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