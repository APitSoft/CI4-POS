 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">
     <div data-simplebar class="h-100">
         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <!-- <div class="px-3 mb-5"><input type="text" class="form-control" style="border: none; border-bottom: 1px solid #ccd; background-color: transparent;"></div> -->
                 <li>
                     <a href="<?= BASEURL ?>" class="waves-effect">
                         <i class="bx bx-home-circle"></i>
                         <span key="t-dashboards">Dashboards</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bx-money"></i>
                         <span key="t-multi-level">Kas/Bank</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Transaksi</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'kasbank/transaksi/penerimaan' ?>" key="t-level-2-1"><i class="fa-solid fa-plus-circle" style="font-size: 13px;"></i> Penerimaan</a></li>
                                 <li><a href="<?= BASEURL . 'kasbank/transaksi/pembayaran' ?>" key="t-level-2-1"><i class="fa-solid fa-minus-circle" style="font-size: 13px;"></i> Pembayaran</a></li>
                                 <li><a href="<?= BASEURL . 'kasbank/transaksi/transferbank' ?>" key="t-level-2-2"><i class="fa-solid fa-right-left" style="font-size: 13px;"></i> Transfer Bank</a></li>
                             </ul>
                         </li>
                         <li><a href="<?= BASEURL . 'kasbank/laporan' ?>" key="t-level-1-1">Laporan</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bx-book"></i>
                         <span key="t-multi-level">Buku/Besar</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Data Master</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'bukubesar/datamaster/kodeakun' ?>" key="t-level-2-1">Kode Akun</a></li>
                                 <li><a href="<?= BASEURL . 'bukubesar/datamaster/saldoawalakun' ?>" key="t-level-2-1">Saldo Awal Akun</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Transaksi</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'bukubesar/transaksi/entrijurnal' ?>" key="t-level-2-1"><i class="fa-solid fa-edit" style="font-size: 13px;"></i> Entri Jurnal</a></li>
                                 <li><a href="<?= BASEURL . 'bukubesar/transaksi/daftarjurnal' ?>" key="t-level-2-1"><i class="fa-solid fa-list-ul" style="font-size: 13px;"></i> Daftar Jurnal</a></li>
                                 <li><a href="<?= BASEURL . 'bukubesar/transaksi/tutupbuku' ?>" key="t-level-2-1">Tutup Buku</a></li>
                             </ul>
                         </li>
                         <li><a href="<?= BASEURL . 'bukubesar/laporan' ?>" key="t-level-1-1">Laporan</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bxs-truck"></i>
                         <span key="t-multi-level">Pembelian</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li><a href="<?= BASEURL . 'pembelian/suplier' ?>" key="t-level-1-1">Supplier</a></li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Transaksi</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/prapembelian' ?>" key="t-level-2-1">Pra Pembelian</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/pesananpembelian' ?>" key="t-level-2-1">Pesanan Pembelian</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/penerimaanbarang' ?>" key="t-level-2-2">Penerimaan Barang</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/fakturpembelian' ?>" key="t-level-2-2">Faktur Pembelian</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/uangmukapembelian' ?>" key="t-level-2-2">Uang Muka Pembelian</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/pembayaranpembelian' ?>" key="t-level-2-2">Pembayaran Pembelian</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/transaksi/returpembelian' ?>" key="t-level-2-2">Retur Pembelian</a></li>
                             </ul>
                         </li>
                         <li><a href="<?= BASEURL . 'pembelian/laporan' ?>" key="t-level-1-1">Laporan</a></li>
                         <!-- <li><a href="<? //= BASEURL . 'submit/1' 
                                            ?>" key="t-level-1-1">Laporan</a></li> -->
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Export Data</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'pembelian/exportdata/datasubpembelian' ?>" key="t-level-2-1">Data Sub PEMBELIAN</a></li>
                                 <li><a href="<?= BASEURL . 'pembelian/exportdata/datapembelian' ?>" key="t-level-2-1">Data PEMBELIAN</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bx-cart"></i>
                         <span key="t-multi-level">Penjualan</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li><a href="<?= BASEURL . 'penjualan/datacustomer' ?>" key="t-level-1-1">Data Customer</a></li>
                         <li><a href="<?= BASEURL . 'penjualan/daftarmarketing' ?>" key="t-level-1-1">Daftera Marketing</a></li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Transaksi</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/pesananmasuk' ?>" key="t-level-2-1">Pesanan Masuk</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/pesanandisiapkan' ?>" key="t-level-2-1">Pesanan Disiapkan</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/fakturpenjualan' ?>" key="t-level-2-2">Faktur Penjualan</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/uangmukapenjualan' ?>" key="t-level-2-2">Uang Muka Penjualan</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/pembayaranhutangcustomer' ?>" key="t-level-2-2"> Pembayaran Hutang Customer</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/transaksi/returpenjualan' ?>" key="t-level-2-2">Retur Penjualan</a></li>
                             </ul>
                         </li>
                         <li><a href="<?= BASEURL . 'penjualan/laporan' ?>" key=" t-level-1-1">Laporan</a></li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Export Data</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'penjualan/exportdata/fakturpajak' ?>" key="t-level-2-1">Faktur Pajak</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/exportdata/datasubpenjualan' ?>" key="t-level-2-1">Data Sub Penjualan</a></li>
                                 <li><a href="<?= BASEURL . 'penjualan/exportdata/exportpenjualan' ?>" key="t-level-2-1">Export Penjualan</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="fa-solid fa-barcode"></i>
                         <span key="t-multi-level">Inventory</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Data Master</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/kategori' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Kategori</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/rak' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Rak</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/gudang' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Gudang</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/satuan' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Satuan</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/merk' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Merk</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/barang' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Barang</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/datamaster/hargabarangpercustomer' ?>" key="t-level-2-1"><i class="bx bx-edit"></i>Harga Barang per Customer</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Transaksi</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/transaksi/stokopname' ?>" key="t-level-2-1"><i class="bx bx-list-ul"></i>Stok Opname</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/transaksi/permohonanmutasicabang' ?>" key="t-level-2-1"><i class="bx bx-list-ul"></i>Permohonan Mutasi Cabang</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/transaksi/mutasicabang' ?>" key="t-level-2-1"><i class="bx bx-list-ul"></i>Mutasi Cabang</a>
                                 </li>
                                 <li>
                                     <a href="<?= BASEURL . 'inventory/transaksi/persetujuanmutasicabang' ?>" key="t-level-2-1"><i class="bx bx-list-ul"></i>Persetujuan Mutasi Cabang</a>
                                 </li>
                             </ul>
                         </li>
                         <li><a href="<?= BASEURL . 'inventory/laporan' ?>" key="t-level-1-1">Laporan</a></li>
                         <li><a href="<?= BASEURL . 'inventory/importdatabarang' ?>" key="t-level-1-1">Import Data Barang</a></li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Export Data</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="<?= BASEURL . 'inventory/exportdata/datastock' ?>" key="t-level-2-1"></i>Data Stock</a></li>
                         </li>
                     </ul>
                 </li>
             </ul>

             <li>
                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <i class="bx bx-cog"></i>
                     <span key="t-multi-level">Utilitas</span>
                 </a>
                 <ul class="sub-menu" aria-expanded="true">
                     <li><a href="<?= BASEURL . 'utilitas/pengguna' ?>" key="t-level-1-1">Pengguna Aplikasi</a></li>
                     <li><a href="<?= BASEURL . 'utilitas/gruppemakai' ?>" key="t-level-1-1">Grup Pemakai</a></li>
                     <li><a href="<?= BASEURL . 'utilitas/kodecabang' ?>" key="t-level-1-1">Kode Cabang</a></li>
                     <li><a href="<?= BASEURL . 'utilitas/profileedit' ?>" key="t-level-1-1">Profile</a></li>
                     <li><a href="<?= BASEURL . 'utilitas/nomorbukti' ?>" key="t-level-1-1">Nomor Bukti</a></li>
                 </ul>
             </li>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->