<?= main_header('Penjualan', 'Data Sales', 'Penjualan', 'Sales') ?>
<?= main_periode('Daftar Sales', 0) ?>
<?= main_button('Data Baru', 1, 0, '', 'tambahDataModal') ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;width:30%">Nama Sales</th>
                            <th style="text-align: center;width:20%">No. Telpon</th>
                            <th style="text-align: center;width:20%">Area</th>
                            <th style="text-align: center;width:16%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap modal -->
<div class="modal fade" id="tambahDataModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data Sales</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-close"></i></button>
            </div>
            <div class="modal-body form">
                <form id="submit_form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group mb-2">
                            <div class="row">
                                <label class="control-label pt-2 col-md-3">Nama</label>
                                <div class="col-md-9">
                                    <input name="nama" placeholder="Nama Sales" class="form-control" type="text">
                                    <span class="namaErr"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="row">
                                <label class="control-label pt-2 col-md-3">Telpon</label>
                                <div class="col-md-9">
                                    <input name="telp" placeholder="Nomor Telpon" class="form-control" type="text">
                                    <span class="telpErr"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <div class="row">
                                <label class="control-label pt-2 col-md-3">Area</label>
                                <div class="col-md-9">
                                    <input name="area" placeholder="Area yang dicover Marketing" class="form-control" type="text">
                                    <span class="areaErr"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end modal-footer">
                        <button type="submit" id="btnSave" class="btn btn-primary me-2">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: '<?= base_url('penjualan/daftarmarketingtable') ?>'
        });
    });

    $('.add-btn').click(function(e) {
        e.preventDefault();
        $('#tambahDataModal form').trigger('reset');
        $('input[name=id]').val(0);
    });


    // Add & Update Data 
    $('#submit_form').submit(function(e) {
        e.preventDefault();
        var id = $('input[name=id]').val();
        $.ajax({
            type: "post",
            url: "<?= base_url('penjualan/marketingadd/') ?>" + id,
            data: $(this).serialize(),
            dataType: "json",
            success: function(res) {
                if (res.error) {
                    if (res.namaErr) {
                        $('.namaErr').html(res.namaErr);
                    } else {
                        $('.namaErr').html(res.namaErr);
                    }
                    if (res.telpErr) {
                        $('.telpErr').html(res.telpErr);
                    } else {
                        $('.telpErr').html(res.telpErr);
                    }
                    if (res.areaErr) {
                        $('.areaErr').html(res.areaErr);
                    } else {
                        $('.areaErr').html(res.areaErr);
                    }
                } else {
                    $('#tambahDataModal').modal('hide');
                    table_reload('table');
                }
            }
        });
    });

    function daftar_marketing_edit(id) {
        $('#tambahDataModal').modal('show');
        $.ajax({
            type: "post",
            url: "<?= base_url('penjualan/marketingedit/') ?>" + id,
            dataType: "json",
            success: function(res) {
                $('input[name=id]').val(res.id);
                $('input[name=nama]').val(res.nama);
                $('input[name=telp]').val(res.telp);
                $('input[name=area]').val(res.area);
            }
        });
    }

    function daftar_marketing_delete(id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "post",
                url: "<?= base_url('penjualan/daftarmarketingdelete/') ?>" + id,
                dataType: "json",
                success: function(res) {
                    table_reload('table');
                }
            });
        }
    }
</script>