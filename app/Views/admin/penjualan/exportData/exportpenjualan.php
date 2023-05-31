<?= main_header('PEMBELIAN', 'Export Data',) ?>
<?= main_periode('Export PENJUALAN  ', 1) ?>
<?= main_button('', 0, 1,) ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <button class="p-1 ">Copy</button>
                <button class="p-1 ">Excel</button>
                <button class="p-1 ">CSV</button>
                <button class="p-1 ">PDF</button>
                <table id="export_pajak" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No Nota</th>
                            <th>Tgl Penjualan</th>
                            <th>Kode Customer</th>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telp</th>
                            <th>Hp</th>
                            <th>Nama Yayasan/PT</th>
                            <th>total</th>
                            <th>Termin</th>
                            <th>Tgl Jatuh Tempo</th>
                            <th>No konsiyansi</th>
                            <th>Bayar</th>
                            <th>Bruto</th>
                            <th>Disc Rp</th>
                            <th>DPP</th>
                            <th>PPN</th>
                            <th>Sisa Bayar</th>
                            <th>Marketing</th>
                            <th>Kode Bayar</th>
                            <th>Jenis Bayar</th>
                            <th>No Bayar</th>
                            <th>Ongkos Kirim</th>
                            <th>Limit Kredit</th>
                            <th>Saldo Kredit</th>
                            <th>User</th>
                            <th>Lunas</th>
                            <th>Tagihan</th>
                            <th>Terbilang</th>
                            <th>No Pajak</th>
                            <th>Total CN</th>
                            <th>No PO</th>
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
        $('#export_pajak').DataTable();
    })
</script>