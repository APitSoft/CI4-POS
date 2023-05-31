<!doctype html>
<html lang="en">

<?php

use CodeIgniter\View; ?>

<head>

    <meta charset="utf-8" />
    <title><?= $title ?? '' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>public/assets/images/favicon.png">

    <!-- Bootstrap Css -->
    <link href="<?= BASEURL ?>public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= BASEURL ?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL ?>public/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL ?>public/assets/css/ajf-css.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL ?>public/assets/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL ?>public/assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
    <!-- Data Table Css  -->
    <link href="<?= BASEURL ?>public/assets/datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
    <!-- App Css-->
    <link href="<?= BASEURL ?>public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <script src="<?= BASEURL ?>public/assets/datatable/jquery-3.5.1.js"></script>
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php echo view('layout/header') ?>
        <?php echo view('layout/sidebar') ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <?php echo view($body) ?>

                    <!-- footer section  -->
                    <?php echo view('layout/footer') ?>
                </div>
            </div>
            <!-- End Page-content -->

        </div>
    </div>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <!-- <script src="<?= BASEURL ?>public/assets/js/jquery-3.5.1.js"></script> -->
    <script src="<?= BASEURL ?>public/assets/datatable/jquery.dataTables.min.js"></script>

    <script src="<?= BASEURL ?>public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/libs/node-waves/waves.min.js"></script>
    <!-- <script src="cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->

    <?php
    if (!empty($js)) {
        foreach ($js as $key => $value) {
            echo '<script src="' . BASEURL . $value . '"></script>';
        }
    }
    ?>




    <!-- App js -->
    <script>
        ! function(s) {
            "use strict";
            var e, t = localStorage.getItem("language"),
                n = "en";

            function a(e) {
                document.getElementById("header-lang-img") && ("en" == e ? document.getElementById("header-lang-img").src = "<?= BASEURL ?>public/assets/images/flags/us.jpg" : "sp" == e ? document.getElementById("header-lang-img").src = "<?= BASEURL ?>public/assets/images/flags/spain.jpg" : "gr" == e ? document.getElementById("header-lang-img").src = "<?= BASEURL ?>public/assets/images/flags/germany.jpg" : "it" == e ? document.getElementById("header-lang-img").src = "<?= BASEURL ?>public/assets/images/flags/italy.jpg" : "ru" == e && (document.getElementById("header-lang-img").src = "<?= BASEURL ?>public/assets/images/flags/russia.jpg"), localStorage.setItem("language", e), null == (t = localStorage.getItem("language")) && a(n), s.getJSON("<?= BASEURL ?>lang/" + t + ".json", function(e) {
                    s("html").attr("lang", t), s.each(e, function(e, t) {
                        "head" === e && s(document).attr("title", t.title), s("[key='" + e + "']").text(t)
                    })
                }))
            }

            function c() {
                for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, s = e.length; t < s; t++) "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), null !== e[t].nextElementSibling && e[t].nextElementSibling.classList.remove("show"))
            }

            function r(e) {
                1 == s("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (s("html").removeAttr("dir"), s("#dark-mode-switch").prop("checked", !1), s("#rtl-mode-switch").prop("checked", !1), s("#dark-rtl-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "<?= BASEURL ?>css/bootstrap.min.css"), s("#app-style").attr("href", "<?= BASEURL ?>css/app.min.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) : 1 == s("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (s("html").removeAttr("dir"), s("#light-mode-switch").prop("checked", !1), s("#rtl-mode-switch").prop("checked", !1), s("#dark-rtl-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "<?= BASEURL ?>css/bootstrap-dark.min.css"), s("#app-style").attr("href", "<?= BASEURL ?>css/app-dark.min.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == s("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e ? (s("#light-mode-switch").prop("checked", !1), s("#dark-mode-switch").prop("checked", !1), s("#dark-rtl-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "<?= BASEURL ?>css/bootstrap-rtl.min.css"), s("#app-style").attr("href", "<?= BASEURL ?>css/app-rtl.min.css"), s("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "rtl-mode-switch")) : 1 == s("#dark-rtl-mode-switch").prop("checked") && "dark-rtl-mode-switch" === e && (s("#light-mode-switch").prop("checked", !1), s("#rtl-mode-switch").prop("checked", !1), s("#dark-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "<?= BASEURL ?>css/bootstrap-dark-rtl.min.css"), s("#app-style").attr("href", "<?= BASEURL ?>css/app-dark-rtl.min.css"), s("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "dark-rtl-mode-switch"))
            }

            function l() {
                document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), s("body").removeClass("fullscreen-enable"))
            }
            s("#side-menu").metisMenu(), s("#vertical-menu-btn").on("click", function(e) {
                    e.preventDefault(), s("body").toggleClass("sidebar-enable"), 992 <= s(window).width() ? s("body").toggleClass("vertical-collpsed") : s("body").removeClass("vertical-collpsed")
                }), s("#sidebar-menu a").each(function() {
                    var e = window.location.href.split(/[?#]/)[0];
                    this.href == e && (s(this).addClass("active"), s(this).parent().addClass("mm-active"), s(this).parent().parent().addClass("mm-show"), s(this).parent().parent().prev().addClass("mm-active"), s(this).parent().parent().parent().addClass("mm-active"), s(this).parent().parent().parent().parent().addClass("mm-show"), s(this).parent().parent().parent().parent().parent().addClass("mm-active"))
                }), s(document).ready(function() {
                    var e;
                    0 < s("#sidebar-menu").length && 0 < s("#sidebar-menu .mm-active .active").length && (300 < (e = s("#sidebar-menu .mm-active .active").offset().top) && (e -= 300, s(".vertical-menu .simplebar-content-wrapper").animate({
                        scrollTop: e
                    }, "slow")))
                }), s(".navbar-nav a").each(function() {
                    var e = window.location.href.split(/[?#]/)[0];
                    this.href == e && (s(this).addClass("active"), s(this).parent().addClass("active"), s(this).parent().parent().addClass("active"), s(this).parent().parent().parent().addClass("active"), s(this).parent().parent().parent().parent().addClass("active"), s(this).parent().parent().parent().parent().parent().addClass("active"), s(this).parent().parent().parent().parent().parent().parent().addClass("active"))
                }), s('[data-bs-toggle="fullscreen"]').on("click", function(e) {
                    e.preventDefault(), s("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)
                }), document.addEventListener("fullscreenchange", l), document.addEventListener("webkitfullscreenchange", l), document.addEventListener("mozfullscreenchange", l), s(".right-bar-toggle").on("click", function(e) {
                    s("body").toggleClass("right-bar-enabled")
                }), s(document).on("click", "body", function(e) {
                    0 < s(e.target).closest(".right-bar-toggle, .right-bar").length || s("body").removeClass("right-bar-enabled")
                }),
                function() {
                    if (document.getElementById("topnav-menu-content")) {
                        for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, s = e.length; t < s; t++) e[t].onclick = function(e) {
                            "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"))
                        };
                        window.addEventListener("resize", c)
                    }
                }(), [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e) {
                    return new bootstrap.Tooltip(e)
                }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
                    return new bootstrap.Popover(e)
                }), [].slice.call(document.querySelectorAll(".offcanvas")).map(function(e) {
                    return new bootstrap.Offcanvas(e)
                }), window.sessionStorage && ((e = sessionStorage.getItem("is_visited")) ? (s(".right-bar input:checkbox").prop("checked", !1), s("#" + e).prop("checked", !0), r(e)) : sessionStorage.setItem("is_visited", "light-mode-switch")), s("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch, #dark-rtl-mode-switch").on("change", function(e) {
                    r(e.target.id)
                }), s("#password-addon").on("click", function() {
                    0 < s(this).siblings("input").length && ("password" == s(this).siblings("input").attr("type") ? s(this).siblings("input").attr("type", "input") : s(this).siblings("input").attr("type", "password"))
                }), null != t && t !== n && a(t), s(".language").on("click", function(e) {
                    a(s(this).attr("data-lang"))
                }), s(window).on("load", function() {
                    s("#status").fadeOut(), s("#preloader").delay(350).fadeOut("slow")
                }), Waves.init(), s("#checkAll").on("change", function() {
                    s(".table-check .form-check-input").prop("checked", s(this).prop("checked"))
                }), s(".table-check .form-check-input").change(function() {
                    s(".table-check .form-check-input:checked").length == s(".table-check .form-check-input").length ? s("#checkAll").prop("checked", !0) : s("#checkAll").prop("checked", !1)
                })
        }(jQuery);
    </script>



    <!-- =============================Basic Design Start============================== -->
    <!-- Main Header Area Start -->
    <?php
    function main_header($pagetitle, $pagename, $second_link_name = '', $third_link_name = '', $second_url = '', $third_url = '')
    {
    ?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-title">
                    <?= $pagetitle ?> <small><?= $pagename ?></small>
                </h3>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?= BASEURL ?>">Awal</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?= $second_url != '' ? BASEURL . $second_url : '#' ?>"><?= $second_link_name != '' ? $second_link_name : $pagetitle ?></a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?= $third_url != '' ? BASEURL . $third_url : '' ?>"><?= $third_link_name != '' ? '' : 'Data' ?> <?= $third_link_name != '' ? $third_link_name : $pagename ?></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Main Header Area End -->

    <!-- Main Periode Area Start -->
    <?php
    function main_periode($periodecaption, $is_show_periodebadge = 1)
    {
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet" style="margin-bottom: 15px;">
                    <div class="portlet-title">
                        <div class="caption">
                            <?= $periodecaption ?>
                            <?php
                            if ($is_show_periodebadge == 1) {
                            ?>
                                <span class="badge bg-warning text-light" style="border-radius: 0px !important;">
                                    Periode <?= date_format(date_create(date('Y-m')), "F-Y") ?> </span>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Main Periode Area End -->

    <!-- Main Add Button Area Start -->
    <?php
    function main_button($btnname, $is_show_refreshbtn = 1, $is_show_datebtn = 1, $url = '', $id = '')
    {
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet">
                    <div class="portlet-body">
                        <div class="table-toolbar d-flex justify-content-between">
                            <div class="d-flex">
                                <?php
                                if ($btnname != '') {
                                    if (!empty($id)) { ?>
                                        <button type="button" data-bs-target="#<?= $id ?>" data-bs-toggle='modal' class="btn fw-bold me-2 add-btn">
                                            <i class="fa fa-plus"></i>
                                            <?= $btnname ?>
                                        </button>
                                    <?php } else if (!empty($url)) {
                                    ?>
                                        <a href="<?= base_url() . $url ?>" class="btn add-btn fw-bold me-2">
                                            <i class="fa fa-plus"></i>
                                            <?= $btnname ?>
                                        </a>
                                    <?php
                                    } else { ?>
                                        <button type="button" class="btn add-btn fw-bold me-2">
                                            <i class="fa fa-plus"></i>
                                            <?= $btnname ?>
                                        </button>
                                    <?php }
                                }
                                if ($is_show_refreshbtn == 1) {
                                    ?>
                                    <button class="btn btn-default refresh-btn fw-bold"><i class="fa-solid fa-refresh fw-bold"></i> Refresh</button>
                                <?php
                                }
                                ?>
                            </div>
                            <div>
                                <?php
                                if ($is_show_datebtn == 1) {
                                ?>
                                    <button class="btn btn-default refresh-btn fw-bold"><span style="margin-right: 3px;">Data</span> <i class="fa-solid fa-angle-down"></i></button>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Main Add Button Area End -->
    <!-- =============================Basic Design End============================== -->

    <script>
        //Current Element Delete & Data Add & Last Emement Delete Common Function
        let appendData = {
            'pre_pembelian_entri': '<td><select class="form-select"><option>select</option></select></td><td><input class="form-control" type="text"></td><td><input class="form-control" type="text"></td><td><input class="form-control" type="text"></td><td><button type="button" onclick="deleteCurrentRow(this)" class="btn red"><i class="fa-regular fa-trash-can"></i></button></td>',

            'penerimaan_entri': '<td width="40%"> <select name="kode[]" id="kode1"class="select2_el_barang_filter form-select" onchange="showbarangname(this.value, 1)"></select> </td> <td width="20%"> <input name="no_batch[]"id="no_batch"type="text"class="form-control rightJustified"></tb><td width="15%"> <input name="tgl_exp[]" id="tgl_exp" type="text" placeholder="yyyy-mm-dd"class="form-control rightJustified"></td> <td width="10%"><input name="qty[]"onchange="check_qty(this.value, 1)"value="1"id="qty1" type="text"class="form-control rightJustified"><input name="qty_po[]"value="1"id="qty_po1"type="hidden"class="form-control rightJustified" ><input name="disc[]"value= "0"id="disc1"type="hidden"class="form-control rightJustified"></td> <td width="10%"><input name="sat[]"id="sat1" type="text"class = "form-control"onkeypress = "return tabE(this,event)" ><input name="hargabeli[]"id="harga1"type="hidden"class="form-control"></td> <td width ="5%"><button type="button"onclick="deleteCurrentRow(this)"class="btn red"> <i class="fa fa-trash-can"> </i></button></td>',

            'return_pembelian_entri': '<td width="20%"><select name="kode[]"id="kode1" class="select2_el_barang_filter form-control input-largex"onchange="showbarangname(this.value, 1)"><option value="">--- Pilih Barang ---</option></select></td><td width="8%"><input name="qty[]" onchange="totalline(1);total()" value="0" id="qty1" type="text" class="form-control rightJustified"></td><td width="10%"><input name="sat[]" id="sat1" type="text" class="form-control " onkeypress="return tabE(this,event)"> </td><td width="10%"><input name="no_batch[]" id="no_batch1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td> <td width="10%"><input name="tgl_exp[]" id="tgl_exp1" type="text" class="form-control " onkeypress="return tabE(this,event)"></td><td width="15%"><input name="harga[]" onchange="totalline(1)" value="0" id="harga1" type="text" class="form-control rightJustified"></td><td><a class="btn default" id="lupharga1" data-toggle="modal" href="#lupharga" onclick="getidharga(this.id)"><i class="fa fa-search"></i></a></td><td width="8%"><input name="disc[]" onchange="totalline(1)" value="0" id="disc1" type="text" class="form-control rightJustified "></td><td width="15%"><input name="jumlah[]" id="jumlah1" ;="" type="text" class="form-control rightJustified" size="40%" onchange="total()"></td>',
        }

        //Add Table Element
        function addRow(tableId, appendDataKey) {
            let tableBody = document.querySelector(`#${tableId} tbody`);
            let tr = document.createElement('tr');
            tr.innerHTML = appendData[appendDataKey];
            tableBody.appendChild(tr);
        }

        //Delete Table Element Current Row
        function deleteCurrentRow(e) {
            if (e.closest('tr').id == '') {
                e.closest('tr').remove();
            }
        }

        //Delete Table Element Last Row
        function deleteLastRow(tableId) {
            let tableBody = document.querySelector(`#${tableId} tbody`);
            if (tableBody.lastChild.id == '') {
                tableBody.removeChild(tableBody.lastChild);
            }
        }
    </script>

    <script>
        let isTrue = true;

        let errorMessage = {
            'barang_valid': ['kategori', 'namebarang', 'hargajual', 'gudang', 'rak', 'ppn', 'merk', 'satuan', 'stok', 'stokmin', 'stokmax', 'cabang'],
            'gudang_valid': ['nameErr'],
        }

        // Data Insert Update Function
        function submitData(fromId, getInputId, url, validationObject = '', modalId = '', reload = '') {
            if (isTrue) {
                $(`#${fromId}`).submit(function(e) {
                    e.preventDefault();
                    let getId = $(`#${getInputId}`).val();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: `<?= BASEURL ?>${url}/` + getId,
                        data: formData,
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            isTrue = false;

                            if (data.error) {
                                let validation = errorMessage[`${validationObject}`];
                                if (validation.length > 0) {
                                    validation.forEach(function(value) {
                                        if (data[value] != undefined) {
                                            $(`#${value}`).html(data[value]);
                                        } else {
                                            $(`#${value}`).html('');
                                        }
                                    })
                                }
                            } else {
                                if (modalId != '') {
                                    $(`#${modalId}`).modal('hide');
                                }

                                if (reload != '') {
                                    if (reload.startsWith('http')) {
                                        window.location.href = `${reload}`;
                                    } else {
                                        table_reload(reload)
                                    }
                                }
                            }
                        }
                    });
                })
            }
        }

        //Data Delete Funcion
        function daleteData(url, idNumber, tableName) {
            if (confirm('Are you sure?')) {
                $.ajax({
                    type: "post",
                    url: `<?= BASEURL ?>${url}/` + idNumber,
                    dataType: "json",
                    success: function(res) {
                        table_reload(tableName);
                    }
                });
            }
        }
    </script>

    <script>
        function table_reload(table) {
            $('#' + table).DataTable().ajax.reload();
        }

        $('.refresh-btn').click(function(e) {
            e.preventDefault();
            table_reload('table');
        });
    </script>
</body>


</html>


<!-- 
    ftp.bdisp.net
    root@internet-bhai.bdisp.net
    ^fNJ_o#wS.S{ 
-->