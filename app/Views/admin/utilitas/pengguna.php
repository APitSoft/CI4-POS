<div class="containe-fluid">
    <?= main_header('Utilitas', 'Pengguna Aplikasi') ?>
    <?= main_periode('Daftar Pengguna Aplikasi', 0) ?>
    <?= main_button('Data Baru', 1, 1, '', 'tambahDataModal') ?>

    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="text-align: center">User ID</th>
                <th style="text-align: center">Nama Lengkap</th>
                <th style="text-align: center">Cabang</th>
                <th style="text-align: center;width:16%;">&nbsp</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<!-- Bootstrap modal -->
<div class="modal fade" id="tambahDataModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data Pengguna Aplikasi</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa-solid fa-close"></i></span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="0" name="id" />
                    <div class="form-body">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">User ID</label>
                                <div class="col-md-9">
                                    <input name="uidlogin" placeholder="ID Pemakai" class="form-control input-medium" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input name="password" placeholder="Password" type="password" class="form-control input-medium">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Nama Karyawan</label>
                                <div class="col-md-9">

                                    <input name="karyawan" placeholder="Nama Karyawan" class="form-control input-medium" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Kode Unit</label>
                                <div class="col-md-9">
                                    <select name="unit" class="form-select">
                                        <option value="">--Pilih Kode--</option>
                                        <option value="01">01-PUSAT</option>
                                        <option value="02">02-CAB. KRWNG</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Grup Pengguna</label>
                                <div class="col-md-9">
                                    <select name="grup" class="form-select">
                                        <option value="">--Pilih Grup--</option>
                                        <option value="1">ADMINISTRATOR PUSAT</option>
                                        <option value="2">Area Manager</option>
                                        <option value="3">Marketing</option>
                                        <option value="4">Logistik / Gudang</option>
                                        <option value="5">Purchasing n Finance</option>
                                        <option value="6">Penjualan / Fakt-Ptg</option>
                                        <option value="8">ADMINISTRATOR CABANG</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script>
    $(document).ready(function() {
        $('#table').DataTable({});
    });
</script>