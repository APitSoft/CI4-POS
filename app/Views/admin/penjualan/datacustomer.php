<?= main_header('Penjualan', 'Data Customer', 'Penjualan', 'Customer') ?>
<?= main_periode('Daftar Customer', 0) ?>
<?= main_button('Data Baru', 1, 0, '', 'tambahDataModal') ?>





<div class="row">
    <div class="col-12">
        <div style="overflow-x: auto;">
            <div class="datatable-example">
                <table id="table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;width:5%">Kode</th>
                            <th style="text-align: center;width:20%">Nama</th>
                            <th style="text-align: center;width:30%">Alamat</th>
                            <th style="text-align: center;width:10%">Telpon</th>
                            <th style="text-align: center;width:10%">Kontak</th>
                            <th style="text-align: center;width:10%">TOP</th>
                            <th style="text-align: center;width:16%">&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tambahDataModal" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data customer</h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-close"></i></button>
            </div>
            <div class="modal-body bg-white">
                <form id="submit_form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Kode</label>
                                        <div class="col-md-6">
                                            <input name="kode" placeholder="Kode" class="form-control input-small" maxlength="10" value="CS.000274" readonly type="text">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Tipe Customer</label>
                                        <div class="col-md-3">
                                            <select name="tipe" class="form-control">
                                                <option value="1">Rumah Sakit</option>
                                                <option value="2">Klinik</option>
                                                <option value="3">Sub Dist</option>
                                                <option value="4">Apotek</option>
                                                <option value="5">Perorangan</option>
                                            </select>
                                            <span class="tipeErr"></span>
                                        </div>
                                        <label class="control-label pt-2 col-md-3">Kredit</label>
                                        <div class="col-md-3">
                                            <select name="kredit" class="form-control">
                                                <option value="K">Ya</option>
                                                <option value="T" selected>Tidak</option>
                                            </select>
                                            <span class="kreditErr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Nama</label>
                                        <div class="col-md-9">
                                            <input name="nama" placeholder="Nama customer" class="form-control" type="text">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Telpon</label>
                                        <div class="col-md-3">
                                            <input name="telp" placeholder="Nomor Telp" class="form-control" maxlength="16" type="text">
                                        </div>
                                        <label class="control-label pt-2 col-md-3">Fax</label>
                                        <div class="col-md-3">
                                            <input name="fax" placeholder="Nomor fax" class="form-control" maxlength="16" type="text">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">KTP</label>
                                        <div class="col-md-3">
                                            <input name="ktp" placeholder="Nomor KTP" class="form-control" type="text">
                                            <span class="help-block"></span>
                                        </div>
                                        <label class="control-label pt-2 col-md-3">Handphone</label>
                                        <div class="col-md-3">
                                            <input name="hp" placeholder="Nomor HP" class="form-control" maxlength="16" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Kontak</label>
                                        <div class="col-md-3">
                                            <input name="contactname" placeholder="Nama Kontak Person" class="form-control" maxlength="40" type="text">
                                        </div>
                                        <label class="control-label pt-2 col-md-3">Email</label>
                                        <div class="col-md-3">
                                            <input name="email" placeholder="Alamat email" class="form-control" maxlength="40" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Alamat 1</label>
                                        <div class="col-md-9">
                                            <input name="alamat1" placeholder="Alamat customer" class="form-control" type="text">
                                            <span class="alamat1Err"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Alamat 2</label>
                                        <div class="col-md-9">
                                            <input name="alamat2" placeholder="Alamat customer" class="form-control" type="text">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Kota</label>
                                        <div class="col-md-3">
                                            <input name="kota" placeholder="Nama Kota" class="form-control" type="text">

                                        </div>
                                        <label class="control-label pt-2 col-md-3">Kode Pos</label>
                                        <div class="col-md-3">
                                            <input name="kodepos" placeholder="" class="form-control" type="text">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">NPWP</label>
                                        <div class="col-md-3">
                                            <input name="npwp" placeholder="No. NPWP" class="form-control" type="text" />
                                            <span class="npwpErr"></span>
                                        </div>
                                        <label class="control-label pt-2 col-md-3">Marketing</label>
                                        <div class="col-md-3">
                                            <!-- <input name="sales" placeholder="Kode Sales" class="form-control" maxlength="16" type="text"> -->
                                            <select id="sales" name="sales" class="form-control select2me" data-placeholder="Pilih...">
                                                <option value="">---Pilih Marketing</option>
                                                <?php
                                                $db = db_connect();
                                                $marketing = $db->table('daftar_marketing')->get()->getResult();
                                                foreach ($marketing as $key => $value) {
                                                    echo '<option value="' . $value->id . '">' . $value->nama . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Batas Kredit</label>
                                        <div class="col-md-9">
                                            <input name="bataskredit" placeholder="" class="form-control" type="text" />
                                            <span class="bataskreditErr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">T.O.P</label>
                                        <div class="col-md-9">
                                            <input name="top" placeholder="" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Nama Yayasan / PT</label>
                                        <div class="col-md-9">
                                            <input name="namapt" placeholder="" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-md-3 control-label pt-2">PPN</label>
                                        <div class="col-md-4">
                                            <select name="sppn" id="sppn" class="form-control input-medium">
                                                <option value="Y">Ya</option>
                                                <option value="T">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Saldo Kredit</label>
                                        <div class="col-md-9">
                                            <input name="saldokredit" readonly placeholder="" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="control-label pt-2 col-md-3">Cabang</label>
                                        <div class="col-md-3">
                                            <select class="form-control input-medium select_cabang" id="cabang" name="cabang">
                                                <option>---Pilih Cabang</option>
                                                <option value="01">
                                                    PUSAT </option>
                                                <option value="02">
                                                    CAB. KRWNG </option>
                                            </select>
                                            <span class="cabangErr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end bg-white">
                        <button type="submit" id="btnSave" class="btn btn-primary me-2">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: '<?= base_url('penjualan/datacustomertable') ?>'
        });
    });

    $('.add-btn').click(function(e) {
        e.preventDefault();
        <?php
        $db = db_connect();
        $builder = $db->table('data_customer');
        $count_row = $builder->select('id')->get()->getRow()->id;
        $kode = strlen($count_row) == 1 ? 'CS.00000' . ($count_row + 1) : (strlen($count_row) == 2 ? 'CS.0000' . ($count_row + 1) : (strlen($count_row) == 3 ? 'CS.000' . ($count_row + 1) : (strlen($count_row) == 4 ? 'CS.00' . ($count_row + 1) : (strlen($count_row) == 5 ? 'CS.0' . ($count_row + 1) : 'CS.000001'))));
        ?>
        $('#tambahDataModal form').trigger('reset');
        $('input[name=kode]').val('<?= $kode ?>');
        $('input[name=id]').val(0);
    });

    $('#submit_form').submit(function(e) {
        e.preventDefault();
        var id = $('input[name=id]').val();
        if (id == 0) {
            $.ajax({
                type: "post",
                url: "<?= base_url('penjualan/datacustomeradd') ?>",
                data: $(this).serialize(),
                dataType: "json",
                success: function(res) {
                    if (res.error) {
                        if (res.tipeErr) {
                            $('.tipeErr').html(res.tipeErr);
                        } else {
                            $('.tipeErr').html('');
                        }
                        if (res.kreditErr) {
                            $('.kreditErr').html(res.kreditErr);
                        } else {
                            $('.kreditErr').html('');
                        }
                        if (res.alamat1Err) {
                            $('.alamat1Err').html(res.alamat1Err);
                        } else {
                            $('.alamat1Err').html('');
                        }
                        if (res.npwpErr) {
                            $('.npwpErr').html(res.npwpErr);
                        } else {
                            $('.npwpErr').html('');
                        }
                        if (res.bataskreditErr) {
                            $('.bataskreditErr').html(res.bataskreditErr);
                        } else {
                            $('.bataskreditErr').html('');
                        }
                        if (res.cabangErr) {
                            $('.cabangErr').html(res.cabangErr);
                        } else {
                            $('.cabangErr').html('');
                        }
                    } else {
                        table_reload('table');
                        $('#tambahDataModal').modal('hide');
                    }

                }
            });
        } else {
            $.ajax({
                type: "post",
                url: "<?= base_url('penjualan/datacustomerupdate/') ?>" + id,
                data: $(this).serialize(),
                dataType: "json",
                success: function(res) {
                    if (res.error) {
                        if (res.tipeErr) {
                            $('.tipeErr').html(res.tipeErr);
                        } else {
                            $('.tipeErr').html('');
                        }
                        if (res.kreditErr) {
                            $('.kreditErr').html(res.kreditErr);
                        } else {
                            $('.kreditErr').html('');
                        }
                        if (res.alamat1Err) {
                            $('.alamat1Err').html(res.alamat1Err);
                        } else {
                            $('.alamat1Err').html('');
                        }
                        if (res.npwpErr) {
                            $('.npwpErr').html(res.npwpErr);
                        } else {
                            $('.npwpErr').html('');
                        }
                        if (res.bataskreditErr) {
                            $('.bataskreditErr').html(res.bataskreditErr);
                        } else {
                            $('.bataskreditErr').html('');
                        }
                        if (res.cabangErr) {
                            $('.cabangErr').html(res.cabangErr);
                        } else {
                            $('.cabangErr').html('');
                        }
                    } else {
                        table_reload('table');
                        $('#tambahDataModal').modal('hide');
                    }

                }
            });
        }
    });

    function data_customer_delete(id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "post",
                url: "<?= base_url('penjualan/datacustomerdelete/') ?>" + id,
                dataType: "json",
                success: function(res) {
                    table_reload('table');
                }
            });
        }
    }

    function data_customer_edit(id) {
        $('#tambahDataModal').modal('show');
        $.ajax({
            type: "post",
            url: "<?= base_url('penjualan/datacustomeredit/') ?>" + id,
            dataType: "json",
            success: function(res) {
                $('input[name=id]').val(res.id);
                $('input[name=kode]').val(res.kode);
                $('select[name=tipe]').val(res.tipe);
                $('select[name=kredit]').val(res.kredit);
                $('input[name=telp]').val(res.telp);
                $('input[name=npwp]').val(res.npwp);
                $('input[name=nama]').val(res.nama);
                $('input[name=alamat1]').val(res.alamat1);
                $('input[name=alamat2]').val(res.alamat2);
                $('input[name=fax]').val(res.fax);
                $('input[name=hp]').val(res.hp);
                $('input[name=contactname]').val(res.contactname);
                $('input[name=kota]').val(res.kota);
                $('input[name=email]').val(res.email);
                $('input[name=kodepos]').val(res.kodepos);
                $('input[name=ktp]').val(res.ktp);
                $('input[name=top]').val(res.top);
                $('select[name=sales]').val(res.sales);
                $('input[name=bataskredit]').val(res.bataskredit);
                $('input[name=namapt]').val(res.namapt);
                $('select[name=sppn]').val(res.sppn);
                $('input[name=saldokredit]').val(res.saldokredit);
                $('select[name=cabang]').val(res.cabang);
            }
        });
    }
</script>