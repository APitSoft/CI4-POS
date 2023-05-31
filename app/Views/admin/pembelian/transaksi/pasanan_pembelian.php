<?php echo main_header('Pembelian ', 'Pesanan Pembelian'); ?>
<?= main_periode('Daftar Pesanan Pembelian'); ?>
<?= main_button('Purchase Order Baru', 1, 1, 'pembelian/transaksi/pesananpembelian/entri'); ?>

<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor #</th>
                            <th>Tanggal</th>
                            <th>Pemasok</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="fw-bold">Total</td>
                            <td>0</td>
                            <td colspan="3"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: '<?= base_url('pembelian/transaksi/pesananpembeliantable') ?>'
        });
    });
</script>