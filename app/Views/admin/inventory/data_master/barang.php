<?= main_header('Inventory', 'Data Barang', 'Inventory', 'Barang') ?>
<?= main_periode('Daftar Barang', 0) ?>
<?= main_button('Data Baru', 1, 0, '', 'modal_form') ?>

<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;width:5%">Kode</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center;width:16%;">&nbsp</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-close"></i></button>
            </div>
            <div class="modal-body">
                <form id="submit">
                    <input type="text" value="0" id="id">
                    <div class="row ms-0">
                        <div class="col-6 mt-2">
                            <div class="mb-2 row">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Kategori</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="kategori" class="form-select">
                                        <option value="0">--Pilih--</option>
                                    </select>
                                    <span id="kategori"></span>
                                </div>
                                <!-- ================= -->
                                <div class="col-md-3 mt-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                </div>
                                <div class="col-md-9 mt-3">
                                    <input type="text" name="namebarang" class="form-control">
                                    <span id="namebarang"></span>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Harga Jual</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="hargajual" class="form-control" value="0">
                                            <span id="hargajual"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Harga Beli</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="hargabeli" class="form-control" readonly value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Gudang</label>
                                        </div>
                                        <div class="col-6">
                                            <select name="gudang" class="form-select">
                                                <option value="0">--Pilih--</option>
                                                <option value="a">aa</option>
                                            </select>
                                            <span id="gudang"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Rak</label>
                                        </div>
                                        <div class="col-6">
                                            <select name="rak" class="form-select">
                                                <option value="0">--Pilih--</option>
                                            </select>
                                            <span id="rak"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">PPN</label>
                                        </div>
                                        <div class="col-6">
                                            <select name="ppn" class="form-select">
                                                <option value="0">--Pilih--</option>
                                            </select>
                                            <span id="ppn"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Merk</label>
                                        </div>
                                        <div class="col-6">
                                            <select name="merk" class="form-select">
                                                <option value="0">--Pilih--</option>
                                            </select>
                                            <span id="merk"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <div class="col-6 mt-2">
                            <div class="mb-2 row">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Kode Item *</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="kodeitem" class="form-control" readonly>
                                </div>
                                <!-- ============= -->
                                <div class="col-md-3 mt-3">
                                    <label for="" class="form-label">Satuan</label>
                                </div>
                                <div class="col-md-9 mt-3">
                                    <select name="satuan" class="form-select">
                                        <option value="0">--Pilih--</option>
                                    </select>
                                    <span id="satuan"></span>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Stok</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="stok" class="form-control" value="0">
                                            <span id="stok"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3"></div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Stok Min</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="stokmin" class="form-control" value="0">
                                            <span id="stokmin"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label">Stok Max</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="stokmax" class="form-control" value="0">
                                            <span id="stokmin"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 mt-3">
                                    <div class="row">
                                        <div class="col-5">
                                            <label for="" class="form-label">Cabang</label>
                                        </div>
                                        <div class="col-7 ps-0">
                                            <select name="cabang" class="form-select">
                                                <option value="0">--Pilih Cabang--</option>
                                            </select>
                                            <span id="cabang"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <p class="text-center">
                                <button onclick="submitData('submit', 'id', 'inventory/datamaster/barang_data', 'barang_valid', 'modal_form')" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function() {
        $('#table').DataTable({});
    });
</script>