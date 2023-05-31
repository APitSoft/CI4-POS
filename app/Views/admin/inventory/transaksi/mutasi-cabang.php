<?= main_header('Inventory', 'Mutasi Barang Antar Cabang', 'Inventory', 'Daftar Mutasi Barang Antar Cabang') ?>
<?= main_periode('Daftar Mutasi Barang Antar Cabang') ?>
<?= main_button('Daftar Mutasi Cabang', 0, 1, 'inventory/transaksi/mutasicabang/entri') ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No. Mutasi</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Pengirim Cabang</th>
                            <th style="text-align: center">Peneriman Cabang</th>
                            <th style="text-align: center">Keterangan</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Aksi</th>
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