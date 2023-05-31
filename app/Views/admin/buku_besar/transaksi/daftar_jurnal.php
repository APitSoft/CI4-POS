<div class="container-fluid">
    <?= main_header('Buku Besar', 'Daftar Jurnal') ?>
    <?= main_periode('Daftar Jurnal', 0) ?>
    <?= main_button('Data Baru', 1, 1, 'bukubesar/transaksi/daftarjurnal/entri') ?>

    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="text-align: center; width:10%">#No. Jurnal</th>
                <th style="text-align: center; width:5%">No. Ref</th>
                <th style="text-align: center; width:10%">Tanggal</th>
                <th style="text-align: center; width:5%">Kode Akun</th>
                <th style="text-align: center; width:15%">Keterangan</th>
                <th style="text-align: center; width:10%">Debet</th>
                <th style="text-align: center; width:10%">Kredit</th>
                <th style="text-align: center; width:5%">Tipe</th>
                <th style="text-align: center;width:10%;">Aksi</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Total</td>
                <td>Debet</td>
                <td>Kredit</td>
                <td colspan="2"></td>
            </tr>
        </tfoot>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>