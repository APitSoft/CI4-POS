<?= main_header('PEMBELIAN', 'Export Data',) ?>
<?= main_periode('Laporan export PEMBELIAN ', 1) ?>
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
                            <th style="text-align: center">Tgl Input</th>
                            <th style="text-align: center">Tgl Faktur</th>
                            <th style="text-align: center">Kode supplier</th>
                            <th style="text-align: center">Nama Supplier</th>
                            <th style="text-align: center">Alamat</th>
                            <th style="text-align: center">Kota</th>
                            <th style="text-align: center">Telp</th>
                            <th style="text-align: center">Hp</th>
                            <th style="text-align: center">NPWP</th>
                            <th style="text-align: center">Total</th>
                            <th style="text-align: center">Termin</th>
                            <th style="text-align: center">Tgl jatuh Tempo</th>
                            <th style="text-align: center">Bayar</th>
                            <th style="text-align: center">Bruto</th>
                            <th style="text-align: center">Disc</th>
                            <th style="text-align: center">DPP</th>
                            <th style="text-align: center">PPN</th>
                            <th style="text-align: center">Sisa bayar</th>
                            <th style="text-align: center">Jenis Bayar</th>
                            <th style="text-align: center">Nobayar</th>
                            <th style="text-align: center">Limit Kredit</th>
                            <th style="text-align: center">Saldo Kredit</th>
                            <th style="text-align: center">User</th>
                            <th style="text-align: center">lunas</th>
                            <th style="text-align: center">Tagihan</th>
                            <th style="text-align: center">Terbilang</th>
                            <th style="text-align: center">Nofaktur Supplier</th>
                            <th style="text-align: center">tgl Faktur Supplier</th>
                            <th style="text-align: center">NO PO</th>
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