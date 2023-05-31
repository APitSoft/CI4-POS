<?= main_header('Penjualan', 'Faktur', 'Penjualan', ' Data Faktur') ?>
<?= main_periode('Daftar Faktur Penjualan', 0) ?>
<?= main_button('Daftar Pesanan Siap Faktur', 1, 0, 'penjualan/transaksi/fakturpenjualan/entri') ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">NO</th>
                            <th style="text-align: center">Nomor #</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Pelanggan</th>
                            <th style="text-align: center">Keterangan</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Status Retur</th>
                            <th style="text-align: center">Jatuh Tempo</th>
                            <th style="text-align: center">Total</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <td colspan="8" style="text-align:right">Total:</td>
                        <td style="text-align:right"></td>
                        <td colspan="2"></td>
                    </tfoot>
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