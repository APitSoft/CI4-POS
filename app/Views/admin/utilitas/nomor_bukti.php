<div class="container-fluid">
    <?= main_header('Utilitas', 'Data Master Nomor Bukti', 'Utilitas', 'Nomor Bukti') ?>
    <?= main_periode('Daftar Kode Nomor Bukti', 0) ?>




    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active fs-6 fw-bold" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">No urut</button>
            <button class="nav-link fs-6 fw-bold" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">No Faktur Pajak</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="my-3">
                <button class=" btn btn-default refresh-btn fw-bold"><i class="fa-solid fa-refresh fw-bold"></i> Refresh</button>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="text-align: center">Kode</th>
                        <th style="text-align: center">Nomor Urut</th>
                        <th style="text-align: center">Keterangan</th>

                        <th style="text-align: center;width:16%;">&nbsp</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="my-3">
                <button class="btn btn-success refresh-btn fw-bold"><i class="fa-solid fa-refresh fw-bold"></i> Refresh</button>
            </div>

            <table id="table1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="text-align: center">Kode</th>
                        <th style="text-align: center">Nomor Date</th>
                        <th style="text-align: center">Nomor Urut</th>
                        <th style="text-align: center">Keterangan</th>

                        <th style="text-align: center;width:16%;">&nbsp</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table').DataTable({});
        $('#table1').DataTable({});
    });
</script>