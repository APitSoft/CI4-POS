<?= main_header('Penjualan', 'Pengiriman Pesanan', 'Penjualan', 'Data Pengiriman Pesanan') ?>
<?= main_periode('Daftar Pengiriman Pesanan', 0) ?>
<?= main_button('Daftar Pesanan Baru Masuk', 1, 0, 'penjualan/transaksi/pesanandisiapkan/entri') ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Nomor #</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Pelanggan</th>
                            <th style="text-align: center">Keterangan</th>
                            <th style="text-align: center">Status</th>
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
        $("#example").DataTable({});
    });
</script>