<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('/authentication', 'Auth::login_check');
$routes->get('/logout', 'Auth::log_out');
$routes->get('/', 'Auth::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/profile', 'Home::profile');
$routes->post('/commonedit', 'CommonFun::common_edit');
$routes->post('/commondelete', 'CommonFun::common_delete');

// Pembelian Section Route


$routes->group('kasbank', static function ($routes) {
    //Second Link
    $routes->group('transaksi', static function ($routes) {
        $routes->get('penerimaan', 'Kasbank::penerimaan');
        $routes->get('penerimaan/entri', 'Kasbank::penerimaan_entri');
        $routes->get('pembayaran/entri', 'Kasbank::pembayaran_entri');
        // $routes->get('prapembelian/entri(:any)?', 'Pembelian::pra_pembelian_entri$1');
        $routes->get('transfer_bank/entri(:any)?', 'Kasbank::transfer_entri$1');
        // $routes->get('transfer_bank/entri/', 'Kasbank::transfer_entri');
        $routes->post('bank-delete/(:any)', 'Kasbank::bank_delete/$1');
        $routes->post('transfer-bank-add', 'Kasbank::transfer_bank_add');
        $routes->get('transfer-table', 'Kasbank::transfer_table');

        $routes->get('pembayaran', 'Kasbank::pembayaran');
        $routes->get('transferbank', 'Kasbank::transfer_bank');
    });
    //Third Link
    $routes->get('laporan', 'Kasbank::laporan');
    //Fourth Link
    $routes->group('exportdata', static function ($routes) {
        $routes->get('datasubpembelian', 'Pembelian::data_sub_pembelian');
        $routes->get('datapembelian', 'Pembelian::data_pembelian');
    });
});


$routes->group('bukubesar', static function ($routes) {
    //Second Link
    $routes->group('datamaster', static function ($routes) {
        $routes->get('kodeakun', 'Bukubesar::kode_akun');

        $routes->post('kodeakun-add', 'Bukubesar::kodeakun_add');
        $routes->get('kodeakuntable', 'Bukubesar::kodeakun_table');
        // $routes->post('kodeakun-edit/(:any)', 'Bukubesar::kode_akun_edit/$1');
        $routes->post('akundelete/(:any)', 'Bukubesar::kodedelete/$1');
        // $routes->post('akun-delete/(:any)', 'Bukubesar:kodedelete/$1');


        $routes->get('saldoawalakun', 'Bukubesar::saldo_awal_akun');
        $routes->post('saldoawalakun-add', 'Bukubesar::saldo_awal_add');
        $routes->get('saldo-table', 'Bukubesar::saldo_table');
    });
    $routes->group('transaksi', static function ($routes) {
        $routes->get('entrijurnal', 'Bukubesar::entri_jurnal');
        $routes->get('daftarjurnal', 'Bukubesar::daftar_jurnal');
        $routes->get('daftarjurnal/entri', 'Bukubesar::daftar_jurnal_entri');
        $routes->get('tutupbuku', 'Bukubesar::tutup_buku');
    });
    //Third Link
    $routes->get('laporan', 'Bukubesar::laporan');
    $routes->post('laporan-add', 'Bukubesar::laporan_add');
    //Fourth Link
    $routes->group('exportdata', static function ($routes) {
        $routes->get('datasubpembelian', 'Pembelian::data_sub_pembelian');
        $routes->get('datapembelian', 'Pembelian::data_pembelian');
    });
});

// Pembelian Section Route
$routes->group('pembelian', static function ($routes) {
    //First Link
    $routes->get('suplier', 'Pembelian::suplier');
    $routes->post('suplieradd', 'Pembelian::suplier_add');
    $routes->get('supliertable', 'Pembelian::suplier_table');
    // $routes->get('supliertable', 'Pembelian::suplier_table');
    $routes->post('suplierdelete/(:any)', 'Pembelian::suplier_delete/$1');
    $routes->post('suplieredit/(:any)', 'Pembelian::suplier_edit/$1');
    $routes->post('suplierupdate/(:any)', 'Pembelian::suplier_update/$1');
    //Second Link
    $routes->group('transaksi', static function ($routes) {
        $routes->get('prapembelian', 'Pembelian::pra_pembelian');
        $routes->get('prapembeliantable', 'Pembelian::pra_pembelian_table');
        $routes->get('prapembelian/entri(:any)?', 'Pembelian::pra_pembelian_entri$1');
        $routes->post('prapembelianadd', 'Pembelian::pra_pembelian_add');
        $routes->get('pesananpembelian', 'Pembelian::pesanan_pembelian');
        $routes->get('pesananpembelian/entri', 'Pembelian::pesanan_pembelian_entri');
        $routes->post('pesananpembelianadd', 'Pembelian::pesanan_pembelian_add');
        $routes->get('pesananpembeliantable', 'Pembelian::pesanan_pembelian_table');
        $routes->get('penerimaanbarang', 'Pembelian::penerimaan_barang');
        $routes->get('penerimaanbarang/entri', 'Pembelian::penerimaan_barang_entri');
        $routes->get('fakturpembelian', 'Pembelian::faktur_pembelian');
        $routes->get('fakturpembelian/entri', 'Pembelian::faktur_pembelian_entri');
        $routes->get('uangmukapembelian', 'Pembelian::uang_muka_pembelian');
        $routes->get('uangmukapembelian/entri', 'Pembelian::uang_muka_pembelian_entri');
        $routes->get('pembayaranpembelian', 'Pembelian::pembayaran_pembelian');
        $routes->get('pembayaranpembelian/entri', 'Pembelian::pembayaran_pembelian_entri');
        $routes->get('returpembelian', 'Pembelian::retur_pembelian');
        $routes->get('returpembelian/entri', 'Pembelian::retur_pembelian_entri');
    });
    //Third Link
    $routes->get('laporan', 'Pembelian::laporan');
    //Fourth Link
    $routes->group('exportdata', static function ($routes) {
        $routes->get('datasubpembelian', 'Pembelian::data_sub_pembelian');
        $routes->get('datapembelian', 'Pembelian::data_pembelian');
    });
});

// Penjualan Section Route
$routes->group('penjualan', static function ($routes) {
    //First Link
    $routes->get('datacustomer', 'Penjualan::data_customer');
    $routes->post('datacustomeradd', 'Penjualan::data_customer_add');
    $routes->get('datacustomertable', 'Penjualan::data_customer_table');
    $routes->post('datacustomeredit/(:any)', 'Penjualan::data_customer_edit/$1');
    $routes->post('datacustomerupdate/(:any)', 'Penjualan::data_customer_update/$1');
    $routes->post('datacustomerdelete/(:any)', 'Penjualan::data_customer_delete/$1');
    //Second Link
    $routes->get('daftarmarketing', 'Penjualan::daftar_marketing');
    $routes->post('marketingadd/(:any)', 'Penjualan::marketing_add/$1');
    $routes->get('daftarmarketingtable', 'Penjualan::daftar_marketing_table');
    $routes->post('marketingedit/(:any)', 'Penjualan::marketing_edit/$1');
    $routes->post('daftarmarketingdelete/(:any)', 'Penjualan::daftar_marketing_delete/$1');
    //Third Link
    $routes->group('transaksi', static function ($routes) {
        $routes->get('pesananmasuk', 'Penjualan::pesanan_masuk');
        $routes->post('pesanansub', 'Penjualan::pesanan_sub');
        $routes->get('pesanantable', 'Penjualan::pesanan_table');
        $routes->get('pesananmasuk/entri(:any)?', 'Penjualan::pesanan_masuk_entri$1');
        $routes->get('show_data/(:any)', 'Penjualan::customerdata/$1');
        $routes->get('pesanandisiapkan', 'Penjualan::pesanan_disiapkan');
        $routes->get('pesanandisiapkan/entri', 'Penjualan::pesanan_disiapkan_entri');
        $routes->get('fakturpenjualan', 'Penjualan::faktur_penjualan');
        $routes->get('fakturpenjualan/entri', 'Penjualan::faktur_penjualan_entri');
        $routes->get('uangmukapenjualan', 'Penjualan::uang_muka_penjualan');
        $routes->get('uangmukapenjualan/entri', 'Penjualan::uang_muka_penjualan_entri');
        $routes->get('pembayaranhutangcustomer', 'Penjualan::pembayaran_hutang_customer');
        $routes->get('pembayaranhutangcustomer/entri', 'Penjualan::pembayaran_hutang_customer_entri');
        $routes->get('returpenjualan', 'Penjualan::retur_penjualan');
        $routes->get('returpenjualan/entri', 'Penjualan::retur_penjualan_entri');
    });
    //Fourth Link
    $routes->get('laporan', 'Penjualan::laporan');

    //Five Link
    $routes->group('exportdata', static function ($routes) {
        $routes->get('fakturpajak', 'Penjualan::faktur_pajak');
        $routes->get('datasubpenjualan', 'Penjualan::data_sub_penjualan');
        $routes->get('exportpenjualan', 'Penjualan::export_penjualan');
    });
});

// Inventory Section Route
$routes->group('inventory', static function ($routes) {
    //First Link
    $routes->group('datamaster', static function ($routes) {
        $routes->get('kategori', 'Inventory::kategori');
        $routes->post('kategoriadd/(:any)', 'Inventory::kategori_add/$1');
        $routes->post('kategoriedit/(:any)', 'Inventory::kategori_edit/$1');
        $routes->post('kategoridelete/(:any)', 'Inventory::kategori_delete/$1');
        $routes->get('kategoritable', 'Inventory::kategori_table');
        $routes->get('rak', 'Inventory::rak');
        $routes->post('rakadd/(:any)', 'Inventory::rak_add/$1');
        $routes->post('rakedit/(:any)', 'Inventory::rak_edit/$1');
        $routes->post('rakdelete/(:any)', 'Inventory::rak_delete/$1');
        $routes->get('raktable', 'Inventory::rak_table');
        $routes->get('gudang', 'Inventory::gudang');
        $routes->post('gudang_data', 'Inventory::gudang_data_submit');
        $routes->get('gudang_data_get', 'Inventory::gudang_data_get');
        $routes->post('gudangdataedit/(:num)', 'Inventory::gudang_data_edit/$1');
        $routes->post('gudangdatadelete/(:num)', 'Inventory::gudang_data_delete/$1');
        $routes->get('satuan', 'Inventory::satuan');
        $routes->get('satuantable', 'Inventory::satuan_table');
        $routes->post('satuanadd/(:any)', 'Inventory::satuan_add/$1');
        $routes->post('satuanedit/(:any)', 'Inventory::satuan_edit/$1');
        $routes->post('satuandelete/(:any)', 'Inventory::satuan_delete/$1');
        $routes->get('merk', 'Inventory::merk');
        $routes->post('merkadd/(:any)', 'Inventory::merk_add/$1');
        $routes->post('merkedit/(:any)', 'Inventory::merk_edit/$1');
        $routes->post('merkdelete/(:any)', 'Inventory::merk_delete/$1');
        $routes->post('merkadd/(:any)', 'Inventory::merk_add/$1');
        $routes->get('merktable', 'Inventory::merk_table');
        $routes->get('barang', 'Inventory::barang');
        $routes->post('barang_data/(:num)', 'Inventory::barang_data_submit/$1');
        $routes->get('hargabarangpercustomer', 'Inventory::harga_barang_per_customer');
        $routes->post('hargabarangadd/(:any)', 'Inventory::harga_barang_add/$1');
        $routes->get('hargabarangtable', 'Inventory::harga_barang_table');
        $routes->post('hargabarangedit/(:any)', 'Inventory::harga_barang_edit/$1');
        $routes->post('hargabarangdelete/(:any)', 'Inventory::harga_barang_delete/$1');
    });
    //Second Link
    $routes->group('transaksi', static function ($routes) {
        $routes->get('stokopname', 'Inventory::stok_opname');
        $routes->get('stokopname/entri', 'Inventory::stok_opname_entri');
        $routes->get('permohonanmutasicabang', 'Inventory::permohonan_mutasi_cabang');
        $routes->get('permohonanmutasicabang/entri', 'Inventory::permohonan_mutasi_cabang_entri');
        $routes->get('mutasicabang', 'Inventory::mutasi_cabang');
        $routes->get('mutasicabang/entri', 'Inventory::mutasi_cabang_entri');
        $routes->get('persetujuanmutasicabang', 'Inventory::persetujuan_mutasi_cabang');
        $routes->get('persetujuanmutasicabang/entri', 'Inventory::persetujuan_mutasi_cabang_entri');
    });
    //Third Link
    $routes->get('laporan', 'Inventory::laporan');
    //Fourth Link
    $routes->get('importdatabarang', 'Inventory::import_data_barang');
    //Five Link
    $routes->group('exportdata', static function ($routes) {
        $routes->get('datastock', 'Inventory::data_stock');
    });
});

// Utilitas Section Route
$routes->group('utilitas', static function ($routes) {
    $routes->get('pengguna', 'Utilitas::pengguna');
    $routes->get('gruppemakai', 'Utilitas::grup_pemakai');
    $routes->get('kodecabang', 'Utilitas::kode_cabang');
    $routes->get('profileedit', 'Utilitas::profile_edit');
    $routes->get('nomorbukti', 'Utilitas::nomor_bukti');
});


//Data Submit
$routes->post('submit/(:num)', 'Pembelian::submit_data/$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
