<?= main_header('PEMBELIAN', 'Export Data',) ?>
<?= main_periode('Laporan Sub Penjualan ', 1) ?>
<?= main_button('', 0, 1,) ?>



<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <button class="p-1 ">Copy</button>
                <button class="p-1 ">Excel</button>
                <button class="p-1 ">CSV</button>
                <button class="p-1 ">PDF</button>
                <table id="sub_penjualan" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <!--th style="text-align: center">Register</th-->
                            <th style="text-align: center">No Nota</th>
                            <th style="text-align: center">tgl Penjualan</th>
                            <th style="text-align: center">Nama Barang</th>
                            <th style="text-align: center">qty</th>
                            <th style="text-align: center">satuan</th>
                            <th style="text-align: center">Harga jual</th>
                            <th style="text-align: center">Disc</th>
                            <th style="text-align: center">Sub jumlah</th>
                            <th style="text-align: center">Disc Rp</th>
                            <th style="text-align: center">Jumlah</th>
                            <th style="text-align: center">CN 1</th>
                            <th style="text-align: center">Bagian 1</th>
                            <th style="text-align: center">Total CN 1</th>
                            <th style="text-align: center">CN 2</th>
                            <th style="text-align: center">Bagian 2</th>
                            <th style="text-align: center">Total CN 2</th>
                            <th style="text-align: center">CN 3</th>
                            <th style="text-align: center">Bagian 3</th>
                            <th style="text-align: center">Total CN 3</th>
                            <th style="text-align: center">No Pajak</th>
                            <th style="text-align: center">Nama Customer</th>
                            <th style="text-align: center">Nama Yayasan/PT</th>
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
        $('#sub_penjualan').DataTable({});
    })
</script>