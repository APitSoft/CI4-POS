<?= main_header('Inventory', 'Approval Mutasi Barang Antar Cabang') ?>
<?= main_periode('Daftal Approval Mutasi Barang Antar Cabang', 1) ?>
<?= main_button('Daftar Approval Mutasi Cabang', 0, 1, 'inventory/transaksi/persetujuanmutasicabang/entri') ?>


<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="keuangan-keluar-list" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No. Approval</th>
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
        $("#keuangan-keluar-list").DataTable();
    })
</script>