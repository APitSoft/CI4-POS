<?= main_header('Pembelian', 'Pembayaran', 'Pembelian', 'Data Pembayaran') ?>
<?= main_periode('Daftar Pembayaran Pembelian') ?>
<?= main_button('Data Baru', 0, 1, 'pembelian/transaksi/pembayaranpembelian/entri') ?>



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
                            <th style="text-align: center">Pemasok</th>
                            <th style="text-align: center">Bank</th>
                            <th style="text-align: center">Nilai Pembayaran</th>
                            <th>&nbsp</th>
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
        $('#example').DataTable({});
    });
</script>