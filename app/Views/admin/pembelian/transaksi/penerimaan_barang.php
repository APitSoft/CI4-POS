<?= main_header('Pembelian', 'Penerimaan Barang', '', ''); ?>
<?= main_periode('Daftar Penerimaan Barang'); ?>
<?= main_button('Receiving', 0, 1, 'pembelian/transaksi/penerimaanbarang/entri') ?>


<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>No</th>
                            <th>Nomor #</th>
                            <th>No. Terima</th>
                            <th>Tanggal</th>
                            <th>Pemasok</th>
                            <th>Keterangan</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
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