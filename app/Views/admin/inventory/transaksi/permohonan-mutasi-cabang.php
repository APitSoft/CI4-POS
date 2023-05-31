<?= main_header('Inventory', 'Permintaan Mutasi Barang Antar Cabang', 'Inventory', 'Daftar Permintaan Mutasi Barang Antar Cabang') ?>
<?= main_periode('Daftar Permintaan Mutasi Barang Antar Cabang') ?>
<?= main_button('Daftar Permintaan Mutasi Cabang', 0, 1, 'inventory/transaksi/permohonanmutasicabang/entri') ?>

<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No. Mohon</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Cabang Asal</th>
                            <th style="text-align: center">Cabang Tujuan</th>
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