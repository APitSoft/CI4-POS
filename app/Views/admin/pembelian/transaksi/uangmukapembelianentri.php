<?php echo main_header('Pembelian ', 'Uang Muka Pembelian', ' Daftar Uang Muka Pembelian', 'Entri Data'); ?>



<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>*Data Baru
        </div>

    </div>

    <div class="portlet-body form">
        <form id="frmpembelian" class="form-horizontal" method="post">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="col-md-3 control-label pt-2">Pemasok</label>
                                <div class="col-md-6">
                                    <div class="input-group position-relative">
                                        <select id="supp" name="supp" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                            <option>----PILIH-----</option>
                                            <option value="SP.000119">PT CIPTA MEDIKA INDONESIA</option>
                                            <option value="SP.000117">PT MENSA BINASUKSES</option>
                                            <option value="SP.000117">PT MENSA BINASUKSES</option>
                                            <option value="SP.000072">PT CIPTA SUKSES MEDIKA</option>
                                            <option value="SP.000188">PT OCEAN MEDIKA INDONESIA</option>
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
                                    <input type="text" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="PM.2023.04.000001" readonly>
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
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-medium" placeholder="" name="nomorfaktur" id="nomorfaktur" value="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="col-md-3 control-label pt-2">No. PO</label>
                                <div class="col-md-6">
                                    <div class="input-group position-relative">
                                        <select id="kodepo" name="kodepo" class="form-control input-medium select2me">
                                            <option value="">---Tanpa PO---</option>
                                        </select>
                                        <span class="input-group-btn position-absolute start-100 top-0">
                                            <a class="btn green" onclick="getpoheader();"><i class="fa fa-refresh"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="col-md-3 control-label pt-2">Jumlah PO</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-medium" placeholder="" name="jumlahpo" id="jumlahpo" value="0" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4><b><i>Pembayaran</i></b></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="col-md-3 control-label pt-2">Uang Muka</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-medium" placeholder="" name="uangmuka" id="uangmuka" value="0">
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
                                    <input type="text" class="form-control input-medium" placeholder="" name="keterangan" id="keterangan" value="">
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
                                <label class="col-md-3 control-label pt-2">Rek. Tujuan</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-medium" placeholder="" name="norek" id="norek" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-plus"></i> Data Baru</button>
                </div>
        </form>
    </div>
</div>