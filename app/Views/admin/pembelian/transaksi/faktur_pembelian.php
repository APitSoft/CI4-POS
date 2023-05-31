<?= main_header('Pembelian', 'Faktur', 'Pembelian', 'Data Faktur') ?>
<?= main_periode('Daftar Faktur Pembelian'); ?>
<?= main_button('DAFTAR PENERIMAAN BARANG BARU', 0, 1, 'pembelian/transaksi/fakturpembelian/entri') ?>




<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">No. Faktur</th>
                            <th style="text-align: center">Tanggal Input</th>
                            <th style="text-align: center">Pemasok</th>
                            <th style="text-align: center">Keterangan</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Status Retur</th>
                            <th style="text-align: center">Tanggal Faktur</th>
                            <th style="text-align: center">Jatuh Tempo</th>
                            <th style="text-align: center">Total Faktur</th>
                            <th style="text-align: center">Pembayaran</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>

                        <td colspan="9" style="text-align:right">Total:</td>
                        <td style="text-align:right"></td>
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