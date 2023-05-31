<?= main_header('Pembelian', 'Retur',) ?>
<?= main_periode('Daftar Retur Pembelian', 1) ?>
<?= main_button('Data Baru', 0, 1, 'pembelian/transaksi/returpembelian/entri') ?>





<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor#</th>
                            <th>Tanggal</th>
                            <th>Pemasok</th>
                            <th>Keterangan</th>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable({});
    });
</script>