<?= main_header('Inventory', 'Export Data') ?>
<?= main_periode('Laporan Export Stock', 1) ?>

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
                            <th>Nama Stock</th>
                            <th>Satuan</th>
                            <th>Stock awal</th>
                            <th>Kode Stock</th>
                            <th>Stock Akhir</th>
                            <th>Stock Order</th>
                            <th>Harga Beli</th>
                            <th>Nilai Stock</th>
                            <th>Stock Minimum</th>
                            <th>Stock Maximum</th>
                            <th>Merk</th>
                            <th>Kategori</th>

                            <th>PPN</th>
                            <th>Gudang</th>
                            <th>Tgl Beli</th>
                            <th>Tgl Exp</th>
                            <th>Tgl Jual</th>
                            <th>Cabang</th>
                            <th>Qty Terjual</th>
                            <th>Laba Terjual</th>

                            <th>Supplier 1</th>
                            <th>Supplier 2</th>
                            <th>Supplier 3</th>
                            <th>Supplier 4</th>

                            <th>bruto 1</th>
                            <th>bruto 2</th>
                            <th>bruto 3</th>
                            <th>bruto 4</th>

                            <th>disc 1</th>
                            <th>disc 2</th>
                            <th>disc 3</th>
                            <th>disc 4</th>

                            <th>Netto 1</th>
                            <th>Netto 2</th>
                            <th>Netto 3</th>
                            <th>Netto 4</th>
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
        $('#sub_penjualan').DataTable();
    });
</script>