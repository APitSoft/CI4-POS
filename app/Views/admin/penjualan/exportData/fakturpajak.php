<?= main_header('Penjualan', 'Export Data',) ?>
<?= main_periode('Export Faktur Pajak', 1) ?>
<?= main_button('', 0, 1,) ?>


<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="faktur_pajak" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Faktur Pajak</th>
                            <th style="text-align: center">No Nota</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">NO NPWP</th>
                            <th style="text-align: center">Pelanggan</th>
                            <th style="text-align: center">Nama Yayasan</th>
                            <th style="text-align: center">Alamat NPWP</th>
                            <th style="text-align: center">Nama Barang</th>
                            <th style="text-align: center">Qty</th>
                            <th style="text-align: center">Satuan</th>
                            <th style="text-align: center">Disc %</th>
                            <th style="text-align: center">Harga Jual</th>
                            <th style="text-align: center">Disc Rp</th>
                            <th style="text-align: center">DPP</th>
                            <th style="text-align: center">ppn</th>
                            <th style="text-align: center">Total</th>
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
        $('#faktur_pajak').DataTable({});
    })
</script>