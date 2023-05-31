<?= main_header('Penjualan', 'Pesanan Penjualan', 'Penjualan', 'Data Pesanan Penjualan') ?>
<?= main_periode('Daftar Pesanan Penjualan') ?>
<?= main_button('PASANAN MASUK', 0, 1, 'penjualan/transaksi/pesananmasuk/entri') ?>


<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Nomor #</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Pelanggan</th>
                            <th style="text-align: center">Keterangan</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Total</th>
                            <th>aksi</th>
                            <th>&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <td colspan="6" style="text-align:right">Total:</td>
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
        $('#table').DataTable({
            ajax: '<?= base_url('penjualan/transaksi/pesanantable') ?>'
        });

    });
</script>