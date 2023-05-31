<div class="containe-fluid">
    <?= main_header('Utilitas', 'Grup Pemakai') ?>
    <?= main_periode('Daftar Grup Pemakai Aplikasi', 0) ?>
    <?= main_button('Data Baru', 1, 1, '', 'tambahDataModal') ?>


    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="text-align: center">Kode</th>
                <th style="text-align: center">Nama</th>

                <th style="text-align: center;width:23%;">&nbsp</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<!-- Bootstrap modal -->
<div class="modal fade" id="tambahDataModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data Grup Pemakai</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa-solid fa-close"></i></span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Kode</label>
                                <div class="col-md-9">
                                    <input name="kode" placeholder="Kode Pemakai" class="form-control input-small" maxlength="6" type="text" readonly>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Nama Grup</label>
                                <div class="col-md-9">
                                    <input name="nama" placeholder="Nama Grup Pemakai" class="form-control" maxlength="30" type="text">
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


<div class="modal fade" id="menuapp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title2">Grup Pemakai</h4>

            </div>
            <div class="modal-body" id="menuappbody">

            </div>
            <div class="modal-footer">
                <button type="button" id="btntutup" class="btn red" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table').DataTable({});
    });
</script>