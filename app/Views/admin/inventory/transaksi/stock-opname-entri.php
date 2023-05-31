<?= main_header('Inventory', 'Stock Opname', 'Daftar Stok Opname', 'Entri Stok Opname') ?>



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
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fa fa-file"></i>
                                Stok Opname
                            </a>
                        </li>
                        <!--li class="">
								<a href="#tab2" data-toggle="tab">                                   
								   <i class="fa fa-info-circle"></i>
								   Info
								</a>
							</li-->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                            <label class="col-md-3 control-label pt-2">Petugas</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" name="pic" class="form-control" value="ajf">
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
                                            <label class="col-md-3 control-label pt-2">Gudang</label>
                                            <div class="col-md-4">
                                                <select id="gudang" name="gudang" class="form-control input-medium select2me" data-placeholder="Pilih..." onkeypress="return tabE(this,event)">
                                                    <option value="1">GUDANG PUSAT</option>
                                                    <option value="4">New Gudang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Nama Barang</label>
                                            <div class="col-md-4">
                                                <select id="barang" name="barang" class="form-control input-medium select2_el_barang_filter" data-placeholder="Pilih Barang..." onchange="showbarangname(this.value)" onkeypress="return tabE(this,event)">
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
                                            <label class="col-md-3 control-label pt-2">No. SO <font color="red">*</font></label>
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control input-medium" name="nomorbukti" id="nomorbukti" value="SOB.2023.04.000001" readonly>
                                                <input type="text" class="form-control input-medium" placeholder="Nomor Auto" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <label class="col-md-3 control-label pt-2">Satuan</font></label>
                                            <div class="col-md-4">
                                                <input type="text" name="sat" id="sat" class="form-control input-medium" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-hoverx table-stripedx table-borderedx table-condensed table-scrollable">
                                            <thead>
                                                <tr>
                                                    <th width="35%" style="text-align: center">No Batch</th>
                                                    <th width="5%" style="text-align: center"></th>
                                                    <th width="20%" style="text-align: center">tanggal exp</th>
                                                    <th width="15%" style="text-align: center">Kuantitas</th>
                                                </tr>
                                                <thead>
                                                <tbody>
                                                    <tr>
                                                        <td width="30%"><input name="no_batch[]" value="" id="no_batch1" type="text" class="form-control rightJustified"></td>
                                                        <td width="5%"><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupbatch" onclick="getbatch(this.id)"><i class="fa fa-search"></i></a></td>
                                                        <td width="15%"><input name="tgl_exp[]" value="" id="tgl_exp1" type="date()" placeholder='YYYY-MM-DD' class="form-control rightJustified"></td>
                                                        <td width="10%"><input name="qty[]" oninput="totalline()" value="0" id="qty1" type="text" class="form-control rightJustified"></td>

                                                    </tr>
                                                </tbody>
                                        </table>
                                        <div class="panel-footer clearfix"> <span class="pull-right">
                                                <input type="text" name="total" readonly id="total_qty" class="form-control" placeholder="Total kuantitas"></span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-9">
                                                <div class="wells">
                                                    <button type="button" onclick="addRow('datatable', 'inventory_stock_entri')" class="btn green"><i class="fa fa-plus"></i> </button>
                                                    <button type="button" onclick="deleteLastRow('datatable')" class="btn red"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="well">
                                    <button type="button" onclick="save()" class="btn blue"><i class="fa fa-save"></i> Simpan</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn green" onclick="this.form.reset();location.reload();"><i class="fa fa-edit"></i> Data Baru</button>
                                    </div>
                                    <h4><span id="error" style="display:none; color:#F00">Terjadi Kesalahan... </span> <span id="success" style="display:none; color:#0C0">Data sudah disimpan...</span></h4>
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
        'inventory_stock_entri': '<td width="30%"><input name="no_batch[]" value="" id="no_batch1" type="text" class="form-control rightJustified"></td><td width="5%"><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupbatch" onclick="getbatch(this.id)"><i class="fa fa-search"></i></a></td><td width="15%"><input name="tgl_exp[]" value="" id="tgl_exp1" type="date()" placeholder="YYYY-MM-DD" class="form-control rightJustified"></td><td width="10%"><input name="qty[]" oninput="totalline()" value="0" id="qty1" type="text" class="form-control rightJustified"></td>'
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