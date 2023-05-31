<?= main_header('Pembelian', 'Laporan', '', 'Laporan') ?>
<div class="row">
    <div class="col-md-12">

        <div class="note note-success">
            <p class="mb-0">
                Laporan - laporan untuk transaksi pembelian
            </p>
        </div>

        <br>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i>Parameter Laporan
                </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmlaporan" class="form-horizontal form-bordered1">
                    <div class="form-body">
                        <input type="text" value="" id="id">
                        <div class="row ms-0">
                            <div class="col-12 mt-2">
                                <div class="mb-2 row">
                                    <div class="col-md-3">
                                        <label for="nama_laporan" class="form-label">Nama Laporan</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select id="nama_laporan" name="nama_laporan" class="form-select">
                                            <option value="0">select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="mb-2 row">
                                    <div class="col-md-3">
                                        <label for="suplier" class="form-label">Suplier</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select id="suplier" name="suplier" class="form-select">
                                            <option value="0">select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="mulai" class="form-label">Mulai</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" id="mulai" name="mulai" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="sd" class="form-label">S/D</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" id="sd" name="sd" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="mb-2 row">
                                    <div class="col-md-3">
                                        <label for="barang" class="form-label">Barang</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select id="barang" name="barang" class="form-select">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="mb-2 row">
                                    <div class="col-md-3">
                                        <label for="cabang" class="form-label">Cabang</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select id="cabang" name="cabang" class="form-select">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="text-center">
                                    <button class="btn btn-success text-light" onclick="submitData('frmlaporan','id', 'submit')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>