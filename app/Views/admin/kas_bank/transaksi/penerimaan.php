<div class="container-fluid">
    <?= main_header('Keuangan', 'Daftar Penerimaan Kas/Bank', 'Keuangan', 'Data Penerimaan Kas/Bank') ?>
    <?= main_periode('Daftar Penerimaan Kas/Bank') ?>
    <?= main_button('Data Baru', 0, 1, 'kasbank/transaksi/penerimaan/entri') ?>

    <div class="datatable-example">
        <table class="table table-striped table-hover table-bordered" id="table">
            <thead>
                <tr>
                    <th style="text-align: center">No. Bukti</th>
                    <th style="text-align: center">Tanggal</th>
                    <th style="text-align: center">Uraian</th>
                    <th style="text-align: center">Jumlah</th>
                    <th style="text-align: center">Status</th>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                </tr>
            </thead>


            <tbody>

                <tr class="show1" id="row_BM2023.05.0002">
                    <td align="center">BM2023.05.0002</td>
                    <td align="center">02-05-2023</td>
                    <td>Penerimaan ST.2023.05.000014</td>
                    <td align="right">
                        599,400 </td>

                    <td style="text-align: center"> <span class="label label-sm label-success">
                            Posting
                        </span>


                    </td>

                    <td style="text-align: center">


                        <a href="https://ajf.sistemkesehatan.id/keuangan_masuk/edit/1621">Edit</a>
                    </td>
                    </td>
                    <td style="text-align: center">
                        <a class="delete" href="javascript:">Hapus</a>
                    </td>
                    <td style="text-align: center">

                        <a class="print_laporan" id="1621" href="#report" data-toggle="modal">Cetak</a>
                    </td>
                </tr>

                <tr class="show1" id="row_BM2023.05.0001">
                    <td align="center">BM2023.05.0001</td>
                    <td align="center">02-05-2023</td>
                    <td>Penerimaan ST.2023.05.000013</td>
                    <td align="right">
                        13,229,776 </td>

                    <td style="text-align: center"> <span class="label label-sm label-success">
                            Posting
                        </span>


                    </td>

                    <td style="text-align: center">


                        <a href="https://ajf.sistemkesehatan.id/keuangan_masuk/edit/1620">Edit</a>
                    </td>
                    </td>
                    <td style="text-align: center">
                        <a class="delete" href="javascript:">Hapus</a>
                    </td>
                    <td style="text-align: center">

                        <a class="print_laporan" id="1620" href="#report" data-toggle="modal">Cetak</a>
                    </td>
                </tr>

                <tr class="show1" id="row_BM2023.05.0001">
                    <td align="center">BM2023.05.0001</td>
                    <td align="center">02-05-2023</td>
                    <td>Penerimaan ST.2023.05.000015</td>
                    <td align="right">
                        13,229,776 </td>

                    <td style="text-align: center"> <span class="label label-sm label-success">
                            Posting
                        </span>


                    </td>

                    <td style="text-align: center">


                        <a href="https://ajf.sistemkesehatan.id/keuangan_masuk/edit/1622">Edit</a>
                    </td>
                    </td>
                    <td style="text-align: center">
                        <a class="delete" href="javascript:">Hapus</a>
                    </td>
                    <td style="text-align: center">

                        <a class="print_laporan" id="1622" href="#report" data-toggle="modal">Cetak</a>
                    </td>
                </tr>


            </tbody>
            <tfoot>

                <td colspan="3" style="text-align:right">Total:</td>
                <td style="text-align:right"></td>
                <td colspan="4"></td>


            </tfoot>

        </table>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table').DataTable({});
    });
</script>