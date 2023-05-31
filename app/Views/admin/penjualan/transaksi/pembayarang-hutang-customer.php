<?= main_header('Penjualan', 'Penerimaan', 'Penjualan', 'Data Penerimaan') ?>
<?= main_periode('Daftar Penerimaan Penjualan') ?>
<?= main_button('Data Baru', 0, 1, 'penjualan/transaksi/pembayaranhutangcustomer/entri') ?>


<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <!--th style="text-align: center">Register</th-->
                            <th style="text-align: center">Nomor #</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">No. Cek</th>
                            <th style="text-align: center">Tanggal Cek</th>
                            <th style="text-align: center">Pelanggan</th>
                            <th style="text-align: center">Bank</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Nilai Pembayaran</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <td colspan="7" style="text-align:right">Total:</td>
                        <td style="text-align:right"></td>
                        <td></td>
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