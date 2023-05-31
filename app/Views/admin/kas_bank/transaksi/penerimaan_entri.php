<div class="container-fluid">
    <?= main_header('Keuangan ', 'Entri Penerimaan Kas/Bank', 'Daftar Penerimaan Kas/Bank', 'Entri Penerimaan Kas/Bank') ?>


    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>Form Entri Penerimaan
            </div>
            <div class="tools">


            </div>


        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form id="frmkeuangan" class="form-horizontal" method="post">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <label class="col-md-3 control-label">Nomor Bukti</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Nomor Otomatis" readonly name="nomorbukti" id="nomorbukti" value="" onkeypress="return tabE(this,event)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <label class="col-md-3 control-label">Tanggal</label>
                                    <div class="col-md-6">
                                        <input id="tanggal" name="tanggal" class="form-control input-medium" type="date" value="2023-05-04" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <label class="col-md-3 control-label">Kas/Bank</label>
                                    <div class="col-md-9">
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

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <label class="col-md-3 control-label">Cabang</label>
                                    <div class="col-md-6">
                                        <select id="unit" name="unit" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                            <option value="01">PUSAT</option>
                                            <option value="02">CAB. KRWNG</option>
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
                                    <label class="col-md-3 control-label">Diterima dari</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-medium" placeholder="" name="penerima" id="penerima" value="" onkeypress="return tabE(this,event)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <label class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-large" placeholder="" name="keterangan" id="keterangan" value="" onkeypress="return tabE(this,event)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered- table-condensed">
                                    <theads>
                                        <tr>
                                            <th width="20%" style="text-align: center">Kode Akun</th>
                                            <th width="60%" style="text-align: center">Uraian</th>
                                            <th width="20%" style="text-align: center">Jumlah</th>
                                        </tr>
                                    </theads>
                                </table>
                                <div class="bodycontainer scrollable">
                                    <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                        <tbody>
                                            <tr>
                                                <td width="20%">
                                                    <select name="akun[]" id="akun0" class="select2_el form-select" style="width:300px">
                                                        <option value="">--- Pilih Akun ---</option>
                                                    </select>
                                                </td>
                                                <td width="60%"><input name="ket[]" id="ket0" type="text" class="form-control " size="100%" onkeypress="return tabE(this,event)"></td>
                                                <td width="20%"><input name="jumlah[]" id="jumlah0" ; type="text" class="form-control rightJustified" size="40%" value="0" onChange="total();formatCurrency(this)" onkeypress="return tabE(this,event);formatCurrency(this)"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <table class="table table-condensed">
                                    <tfoot>
                                        <tr>
                                            <td width="20%"><button type="button" onclick="addRow('datatable', 'penerimaan_entri_tr')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <td width="60%" align="right">TOTAL</td>
                                            <td width="20%" align="right">
                                                <font color="red"><b><span id="_jumlah"></b></font></span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
                        <div class="btn-group">
                            <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
                        </div>
                    </div>
                    <h2><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h2>
            </form>
        </div>
    </div>
</div>


<script>
    //Current Element Delete & Data Add & Last Emement Delete Common Function
    let appendData = {
        'penerimaan_entri_tr': '<td width="20%"><select name="akun[]" id="akun0" class="select2_el form-control" style="width:300px"><option value="">--- Pilih Akun ---</option></select</td><td width="60%"><input name="ket[]" id="ket0" type="text" class="form-control " size="100%" onkeypress="return tabE(this,event)"></td><td width="20%"><input name="jumlah[]" id="jumlah0" ;="" type="text" class="form-control rightJustified" size="40%" value="0" onchange="total();formatCurrency(this)" onkeypress="return tabE(this,event);formatCurrency(this)"></td>',
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