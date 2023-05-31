<div class="container fluid">
    <?= main_header('Buku Besar', 'Saldo Awal Perkiraan') ?>
    <?= main_periode('Daftar Saldo Awal Akun Perkiraan', 0) ?>
    <?= main_button('Data Baru', 1, 1, '', 'tambahDataModal') ?>


    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="text-align: center; width:10%">Kode Perkiraan</th>
                <th style="text-align: center; width:44%">Nama</th>
                <th style="text-align: center; width:15%">Debet</th>
                <th style="text-align: center; width:15%">Kredit</th>
                <th style="text-align: center;width:20%;">&nbsp</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total</td>
                <td>Debet</td>
                <td>Kredit</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="tambahDataModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data Akun</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa-solid fa-close"></i></span></button>
            </div>
            <div class="modal-body form">
                <form id="submit_form" class="form-horizontal">
                    <input id="tableId" type="text" value="0" name="id" />
                    <div class="form-body">
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Kode Akun</label>
                                <div class="col-md-9">
                                    <select id="kodeakun" name="kodeakun" class="form-control input-mediumx " data-placeholder="Pilih...">
                                        <option value="">Select</option>
                                        <option value="110101">110101 - Kas Kecil</option>
                                        <option value="110102">110102 - Bank</option>
                                        <option value="110103">110103 - Bank BJB</option>
                                        <option value="110104">110104 - New Account</option>
                                    </select>
                                    <span id="kodeErr"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Debet</label>
                                <div class="col-md-9">
                                    <input id="debet" name="debet" placeholder="Debet" class="form-control input-medium" type="text" value="">
                                    <span id="debetErr"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <label class="control-label col-md-3">Kredit</label>
                                <div class="col-md-9">
                                    <input id="kredit" name="kredit" placeholder="Kredit" class="form-control input-medium" type="text" value="">
                                    <span id="krediErr"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btnSave" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: "<?= base_url('bukubesar/datamaster/saldo-table') ?>"
        });
        $('.add-btn').click(function() {
            $("#submit_form")[0].reset();
        })

        $("#submit_form").submit(function(e) {
            e.preventDefault();
            $id = $('#tableId').val();
            $.ajax({
                type: "post",
                url: "<?= base_url('bukubesar/datamaster/saldoawalakun-add') ?>",
                data: $(this).serialize(),
                dataType: "json",
                success: function(res) {
                    if (res.error) {
                        if (res.oneErr) {
                            $("#kodeErr").html(res.oneErr)
                        } else {
                            $("#kodeErr").html('')
                        }
                        if (res.twoErr) {
                            $("#debetErr").html(res.twoErr)
                        } else {
                            $("#debetErr").html('')
                        }
                        if (res.threeErr) {
                            $("#krediErr").html(res.threeErr)
                        } else {
                            $("#krediErr").html('')
                        }

                    } else {
                        table_reload('table');
                        $('#tambahDataModal').modal('hide');
                    }
                }
            })
        })
    });


    function kode_edit(id) {
        $('#tambahDataModal').modal('show');
        $.ajax({
            type: "post",
            url: "<?= base_url('commonedit') ?>",
            dataType: "json",
            data: {
                id: id,
                table: 'saldo_awal_akun',
            },
            success: function(data) {
                $('#tableId').val(data.id);
                $('#kodeakun').val(data.kodeakun);
                $('#debet').val(data.debet);
                $('#kredit').val(data.kredit);
            }
        });
    }


    function kode_delete(id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "post",
                url: "<?= base_url('commondelete') ?>",
                data: {
                    id: id,
                    table: 'saldo_awal_akun',
                },
                dataType: "json",
                success: function(res) {
                    table_reload('table');
                }
            });
        }
    }
</script>