<?= main_header('Pembelian', 'Pesanan Pra Pembelian') ?>
<?= main_periode('Daftar Pesanan Pra Pembelian', 1) ?>
<?= main_button('Pra Purchase Order Baru', 0, 1, 'pembelian/transaksi/prapembelian/entri') ?>



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
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: '<?= base_url('pembelian/transaksi/prapembeliantable') ?>'
        });
    });
</script>