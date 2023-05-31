<?= main_header('Inventory', 'Stock Opname') ?>
<?= main_periode('Daftar Stock Opname', 0) ?>


<div class="row">
    <div class="col-md-12">
        <div class="portlet">
            <div class="portlet-body">
                <div class="table-toolbar d-flex justify-content-between">
                    <div class="d-flex">
                        <a href="<?= BASEURL ?>inventory/transaksi/stokopname/entri" class="btn add-btn fw-bold me-2">
                            <i class="fa fa-plus"></i>
                            Data Baru
                        </a>
                        <button class="btn btn-default refresh-btn fw-bold me-2"><i class="fa-solid fa-refresh fw-bold"></i> Refresh</button>
                        <button class="btn btn-default refresh-btn fw-bold me-2 text-white" style="background-color: #5bc0de;"><i class="fa-solid fa-folder fw-bold"></i> PRA SO</button>
                        <button class="btn btn-default refresh-btn fw-bold me-2 text-white" style="background-color: #428bca;"><i class="fa-solid fa-paper-plane fw-bold"></i> PRA SO</button>

                    </div>
                    <div>
                        <button class="btn btn-default refresh-btn fw-bold"><span style="margin-right: 3px;">Data</span> <i class="fa-solid fa-angle-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="datatable-example">
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="text-align: center;width:15%">Nama Gudang</th>
                <th style="text-align: center;width:10%">Tanggal</th>
                <th style="text-align: center;width:10%">Kode Item</th>
                <th style="text-align: center;width:30%">Nama Barang</th>
                <th style="text-align: center">Satuan</th>
                <th style="text-align: center">Qty</th>
                <th style="text-align: center;width:16%;">&nbsp</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('.table').DataTable({});
    });
</script>