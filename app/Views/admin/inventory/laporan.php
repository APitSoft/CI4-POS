<?= main_header('Inventory', 'Laporan') ?>


<div class="row">
    <div class="col-md-12">

        <div class="note note-success">
            <p>
                Laporan - laporan untuk transaksi Inventory
                <br>
            </p>
        </div>

        <br>
        <!-- form-group -->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i>Parameter Laporan
                </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmlaporan" class="form-horizontal form-bordered1" method="post">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Nama Laporan</label>
                                        <div class="col-md-9">
                                            <select id="idlap" name="idlap" class="select2me bs-select form-control" data-show-subtext="true" data-placeholder="Pilih...">
                                                <optgroup label="Inventory">
                                                    <option data-subtext="101" value="101">Daftar Barang</option>
                                                    <option data-subtext="102" value="102">Kartu Stok Persediaan</option>
                                                    <option data-subtext="103" value="103">Umur Persediaan</option>
                                                    <option data-subtext="104" value="104">Laporan Mutasi Cabang</option>

                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Mulai</label>
                                        <div class="col-md-3 ">
                                            <input id="tanggal1" name="tanggal1" class="form-control  input-medium" type="date" value="2023-04-18" />
                                        </div>
                                        <label class="col-md-3  control-label mt-2">s/d</label>
                                        <div class="col-md-3 ">
                                            <input id="tanggal2" name="tanggal2" class="form-control input-medium" type="date" value="2023-04-18" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Kelompok Barang</label>
                                        <div class="col-md-9">
                                            <select id="kaateg" name="kateg" class="select2me bs-select form-control" data-show-subtext="true">
                                                <optgroup label="Daftar Kelompok Barang">
                                                    <option data-subtext="" value="">-- Semua --</option>
                                                    <option data-subtext="" value="6">
                                                        Non Elektromedik Steril</option>
                                                    <option data-subtext="" value="7">
                                                        Non Elektromedik Non Steril</option>
                                                    <option data-subtext="" value="8">
                                                        Elektromedik Non Radiasi</option>
                                                    <option data-subtext="" value="9">
                                                        Diagnostik In Vitro</option>
                                                    <option data-subtext="" value="10">
                                                        Non Alkes (Suket)</option>
                                                    <option data-subtext="" value="11">
                                                        New</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Barang</label>
                                        <div class="col-md-9">
                                            <select name="barang" id="barang" class="select2me bs-select form-control input-largex">
                                                <optgroup label="Daftar Barang">
                                                    <option data-subtext="" value="">-- Semua --</option>
                                                    <option data-subtext="" value="KB.000001">
                                                        1/2 KOCHER</option>
                                                    <option data-subtext="" value="KB.000002">
                                                        ABBOCATH 14</option>
                                                    <option data-subtext="" value="KB.000003">
                                                        ABBOCATH 16</option>
                                                    <option data-subtext="" value="KB.000004">
                                                        ABBOCATH 18</option>
                                                    <option data-subtext="" value="KB.000005">
                                                        ABBOCATH 24</option>
                                                    <option data-subtext="" value="KB.000006">
                                                        ABBOCATH 26</option>
                                                    <option data-subtext="" value="KB.000007">
                                                        ACCUPUNTURE NEDDLE 0,30X 40</option>
                                                    <option data-subtext="" value="KB.000008">
                                                        ACCUPUNTURE NEEDLE 0,25X25</option>
                                                    <option data-subtext="" value="KB.000009">
                                                        ACCUPUNTURE NEEDLE 0,25X40</option>
                                                    <option data-subtext="" value="KB.000010">
                                                        AIR CUSHION 40 CM</option>
                                                    <option data-subtext="" value="KB.000011">
                                                        ALKOHOL 70% MEDIKA 1 LTR</option>
                                                    <option data-subtext="" value="KB.000012">
                                                        ALKOHOL SWAB - REMEDI</option>
                                                    <option data-subtext="" value="KB.000013">
                                                        APRON PLASTIC 50 MIC DISP "REMEDI"</option>
                                                    <option data-subtext="" value="KB.000014">
                                                        AQUA DM</option>
                                                    <option data-subtext="" value="KB.000015">
                                                        ARM SLING JASPER JUNIOR</option>
                                                    <option data-subtext="" value="KB.000016">
                                                        ARM SLING JASPER SENIOR</option>
                                                    <option data-subtext="" value="KB.000017">
                                                        ARM SLING L</option>
                                                    <option data-subtext="" value="KB.000018">
                                                        ARM SLING M</option>
                                                    <option data-subtext="" value="KB.000019">
                                                        ARM SLING S</option>
                                                    <option data-subtext="" value="KB.000020">
                                                        ARTERY CLAM CVD 12,5CM</option>
                                                    <option data-subtext="" value="KB.000021">
                                                        ARTERY FORCEPT STR 14CM</option>
                                                    <option data-subtext="" value="KB.000022">
                                                        ARTEY CLAM CVD 14CM</option>
                                                    <option data-subtext="" value="KB.000023">
                                                        ARTEY CLAM CVD RENZ</option>
                                                    <option data-subtext="" value="KB.000024">
                                                        ARTEY CLAM CVD RRC</option>
                                                    <option data-subtext="" value="KB.000025">
                                                        ARTEY CLAM STR 14CM</option>
                                                    <option data-subtext="" value="KB.000026">
                                                        ARTEY CLAM STR 14CM RENZ</option>
                                                    <option data-subtext="" value="KB.000027">
                                                        AUTOCLAVE TAPE 19X50</option>
                                                    <option data-subtext="" value="KB.000028">
                                                        BAK INSTRUMENT KECIL 23 X 13 X 45</option>
                                                    <option data-subtext="" value="KB.000029">
                                                        BAK KORENTANG SH -512</option>
                                                    <option data-subtext="" value="KB.000030">
                                                        BANDAGE LIFERESOURSES 3 INC</option>
                                                    <option data-subtext="" value="KB.000031">
                                                        BANDAGE LIFERESOURSES 4 INC</option>
                                                    <option data-subtext="" value="KB.000032">
                                                        BANDAGE LIFERESOURSES 6 INC</option>
                                                    <option data-subtext="" value="KB.000033">
                                                        BIOSYN 3/0 SM 693</option>
                                                    <option data-subtext="" value="KB.000034">
                                                        BLOOD LANCET RENOMA</option>
                                                    <option data-subtext="" value="KB.000035">
                                                        BOTOL 1 LITER</option>
                                                    <option data-subtext="" value="KB.000036">
                                                        BOTOL 200 CC</option>
                                                    <option data-subtext="" value="KB.000037">
                                                        BOTOL 30 CC</option>
                                                    <option data-subtext="" value="KB.000038">
                                                        BOTOL 300 CC</option>
                                                    <option data-subtext="" value="KB.000039">
                                                        BOTOL 50 CC</option>
                                                    <option data-subtext="" value="KB.000040">
                                                        BOTOL 500 CC</option>
                                                    <option data-subtext="" value="KB.000041">
                                                        BOTOL TETES 30 ML BENING</option>
                                                    <option data-subtext="" value="KB.000042">
                                                        BOTOL TETES 30 ML PUTIH</option>
                                                    <option data-subtext="" value="KB.000043">
                                                        BRACKET HAND RUB</option>
                                                    <option data-subtext="" value="KB.000044">
                                                        BULK LIGATURE SCISSOR 14,5CM</option>
                                                    <option data-subtext="" value="KB.000045">
                                                        CANULRECTAL TUBE 20</option>
                                                    <option data-subtext="" value="KB.000046">
                                                        CANULRECTAL TUBE 24</option>
                                                    <option data-subtext="" value="KB.000047">
                                                        CANULRECTAL TUBE 28</option>
                                                    <option data-subtext="" value="KB.000048">
                                                        CANULRECTAL TUBE 30</option>
                                                    <option data-subtext="" value="KB.000049">
                                                        CANULRECTAL TUBE 32</option>
                                                    <option data-subtext="" value="KB.000050">
                                                        CELANA KHITAN L</option>
                                                    <option data-subtext="" value="KB.000051">
                                                        CELANA KHITAN M</option>
                                                    <option data-subtext="" value="KB.000052">
                                                        CELANA KHITAN S</option>
                                                    <option data-subtext="" value="KB.000672">
                                                        TOUNGE SPATEL KAYU NESCO (100 S)</option>
                                                    <option data-subtext="" value="KB.000054">
                                                        CHAT PACK PLUS 16 (6ITEM)</option>
                                                    <option data-subtext="" value="KB.000055">
                                                        CHAT PACK PLUS 18 (6ITEM)</option>
                                                    <option data-subtext="" value="KB.000325">
                                                        NEBULIZER ANAK REMEDI</option>
                                                    <option data-subtext="" value="KB.000057">
                                                        CITO BLOOD TRANSF SET DOUBLE CHAMBER BLO2S</option>
                                                    <option data-subtext="" value="KB.000058">
                                                        CITO INFUSION SET STD DEHP FREE INF20</option>
                                                    <option data-subtext="" value="KB.000059">
                                                        CITO INFUSION SET WITH FLOW REG AIR STOP INF20R.AS</option>
                                                    <option data-subtext="" value="KB.000060">
                                                        CITO THREEWAY STOPCOCK THR01</option>
                                                    <option data-subtext="" value="KB.000061">
                                                        CITRID ACID 1 LTR</option>
                                                    <option data-subtext="" value="KB.000062">
                                                        CONDOM CHATETER ONEMED L</option>
                                                    <option data-subtext="" value="KB.000063">
                                                        CONDOM CHATETER ONEMED M</option>
                                                    <option data-subtext="" value="KB.000064">
                                                        CONDOM CHATETER ONEMED S</option>
                                                    <option data-subtext="" value="KB.000065">
                                                        CONDOM SUTERA 12</option>
                                                    <option data-subtext="" value="KB.000067">
                                                        CONTAINER URINE RENOMA</option>
                                                    <option data-subtext="" value="KB.000068">
                                                        COPER-T ANDALAN</option>
                                                    <option data-subtext="" value="KB.000069">
                                                        COTTON BALL 100'S - KAMBIUM</option>
                                                    <option data-subtext="" value="KB.000070">
                                                        COTTON BAT (KAPAS GIGI)</option>
                                                    <option data-subtext="" value="KB.000071">
                                                        COTTON FACIAL 75GR WELLNESS</option>
                                                    <option data-subtext="" value="KB.000072">
                                                        CTG PAPER P 800 TWIN</option>
                                                    <option data-subtext="" value="KB.000073">
                                                        CURASPON STANDART 80X50X10</option>
                                                    <option data-subtext="" value="KB.000076">
                                                        CURRETE PACK STANDARD NO 18 (6ITEM)</option>
                                                    <option data-subtext="" value="KB.000077">
                                                        CURRETE PACK STANDARD NO 20 (6ITEM)</option>
                                                    <option data-subtext="" value="KB.000078">
                                                        DECK GLASS ASSISTEN 20 X 20</option>
                                                    <option data-subtext="" value="KB.000079">
                                                        DECK GLASS ASSISTEN 24 X 24</option>
                                                    <option data-subtext="" value="KB.000080">
                                                        DERMALON 3-0 1756-41</option>
                                                    <option data-subtext="" value="KB.000081">
                                                        DIAPER BP 8 L</option>
                                                    <option data-subtext="" value="KB.000082">
                                                        DIAPERS OTO 2 L</option>
                                                    <option data-subtext="" value="KB.000083">
                                                        DIAPERS OTO 6XL</option>
                                                    <option data-subtext="" value="KB.000084">
                                                        DIAPERS OTO 8 L</option>
                                                    <option data-subtext="" value="KB.000085">
                                                        DIAPERS POPOKU "S"</option>
                                                    <option data-subtext="" value="KB.000086">
                                                        DISCOFIX 3WAY +TUBING 10CM</option>
                                                    <option data-subtext="" value="KB.000087">
                                                        DOCTOR CAP REMEDI</option>
                                                    <option data-subtext="" value="KB.000088">
                                                        DOPPLER FHR DETECTOR E-BESTMAN</option>
                                                    <option data-subtext="" value="KB.000089">
                                                        DRESSING FORCEP 14CM</option>
                                                    <option data-subtext="" value="KB.000090">
                                                        DURAPORE 1538-1</option>
                                                    <option data-subtext="" value="KB.000091">
                                                        EKG PAPER BIONET 210X25</option>
                                                    <option data-subtext="" value="KB.000092">
                                                        EKG PAPER FUKUDA 50 X 30</option>
                                                    <option data-subtext="" value="KB.000093">
                                                        EKG PAPER FUKUDA 63X100X300</option>
                                                    <option data-subtext="" value="KB.000094">
                                                        EKG PAPER FUKUDA DENSHI 63 X 30</option>
                                                    <option data-subtext="" value="KB.000095">
                                                        EKG PAPER INNOMED R 80X30</option>
                                                    <option data-subtext="" value="KB.000096">
                                                        ELECTRO SURGICAL PEN DISP</option>
                                                    <option data-subtext="" value="KB.000097">
                                                        ELECTRO SURGICAL PEN DISP LIFE R</option>
                                                    <option data-subtext="" value="KB.000098">
                                                        ELECTRODA 3M RED DOT -2239</option>
                                                    <option data-subtext="" value="KB.000099">
                                                        ELECTRODA DWS VERMED</option>
                                                    <option data-subtext="" value="KB.000100">
                                                        ELECTRODA DWS HUREV HR-OPR42</option>
                                                    <option data-subtext="" value="KB.000101">
                                                        ETHYLCLORIDE "WALTER RITTER"</option>
                                                    <option data-subtext="" value="KB.000102">
                                                        ETT 2,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000103">
                                                        ETT 2,5 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000104">
                                                        ETT 3 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000105">
                                                        ETT 3 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000106">
                                                        ETT 3,5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000107">
                                                        ETT 4 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000108">
                                                        ETT 4,5 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000109">
                                                        ETT 4,5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000110">
                                                        ETT 4,5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000111">
                                                        ETT 5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000112">
                                                        ETT 5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000113">
                                                        ETT 5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000114">
                                                        ETT 5,5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000115">
                                                        ETT 5,5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000116">
                                                        ETT 6 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000117">
                                                        ETT 6 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000118">
                                                        ETT 6,5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000119">
                                                        ETT 6,5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000120">
                                                        ETT 7 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000121">
                                                        ETT 7 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000123">
                                                        ETT 7,5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000124">
                                                        ETT 7,5 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000125">
                                                        ETT 8 W/CUP REMEDI</option>
                                                    <option data-subtext="" value="KB.000126">
                                                        EYE PROTECTOR "BAND"STANDART</option>
                                                    <option data-subtext="" value="KB.000127">
                                                        FALMED APD WITHOUT SEAL</option>
                                                    <option data-subtext="" value="KB.000128">
                                                        FEEDING TUBE JMS 10</option>
                                                    <option data-subtext="" value="KB.000129">
                                                        FEEDING TUBE JMS 6 (40 CM)</option>
                                                    <option data-subtext="" value="KB.000130">
                                                        FEEDING TUBE TERUMO 5 (100 CM)</option>
                                                    <option data-subtext="" value="KB.000131">
                                                        FEEDING TUBE TERUMO 5 (40 CM)</option>
                                                    <option data-subtext="" value="KB.000132">
                                                        FEEDING TUBE TERUMO 8 (100 CM)</option>
                                                    <option data-subtext="" value="KB.000133">
                                                        FEEDING TUBE TERUMO 8 (40 CM)</option>
                                                    <option data-subtext="" value="KB.000134">
                                                        FEMALE CHATETER 12 AXIMED</option>
                                                    <option data-subtext="" value="KB.000135">
                                                        FEMALE CHATETER 14 MEDSUYUN</option>
                                                    <option data-subtext="" value="KB.000136">
                                                        FEMALE CHATETER 16 AXIMED</option>
                                                    <option data-subtext="" value="KB.000137">
                                                        FILASILK 0X90-30MM RB SLK105332</option>
                                                    <option data-subtext="" value="KB.000138">
                                                        FILASILK 1X75-37MM RB SLK015137N</option>
                                                    <option data-subtext="" value="KB.000139">
                                                        FILASILK 2-0X75-26MM RB SLK200327</option>
                                                    <option data-subtext="" value="KB.000141">
                                                        FILM SONY COLOUR UPC 1010</option>
                                                    <option data-subtext="" value="KB.000142">
                                                        FOL CHAT 2W REMEDI 10</option>
                                                    <option data-subtext="" value="KB.000143">
                                                        FOL CHAT 2W REMEDI 12</option>
                                                    <option data-subtext="" value="KB.000144">
                                                        FOL CHAT 2W REMEDI 14</option>
                                                    <option data-subtext="" value="KB.000145">
                                                        FOL CHAT 2W REMEDI 16</option>
                                                    <option data-subtext="" value="KB.000146">
                                                        FOL CHAT 2W REMEDI 18</option>
                                                    <option data-subtext="" value="KB.000147">
                                                        FOL CHAT 2W REMEDI 20</option>
                                                    <option data-subtext="" value="KB.000148">
                                                        FOL CHAT 2W REMEDI 22</option>
                                                    <option data-subtext="" value="KB.000149">
                                                        FOL CHAT 2W REMEDI 24</option>
                                                    <option data-subtext="" value="KB.000150">
                                                        FOL CHAT 2W REMEDI 6</option>
                                                    <option data-subtext="" value="KB.000151">
                                                        FOL CHAT 2W REMEDI 8</option>
                                                    <option data-subtext="" value="KB.000152">
                                                        FOL CHAT 2W-16FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000153">
                                                        FOL CHAT RUSCH GOLD 2W 10</option>
                                                    <option data-subtext="" value="KB.000154">
                                                        FOL CHAT RUSCH GOLD 2W 14</option>
                                                    <option data-subtext="" value="KB.000155">
                                                        FOL CHAT RUSCH GOLD 2W 16</option>
                                                    <option data-subtext="" value="KB.000156">
                                                        FOL CHAT RUSCH GOLD 2W 18</option>
                                                    <option data-subtext="" value="KB.000157">
                                                        FOL CHAT RUSCH GOLD 2W 22</option>
                                                    <option data-subtext="" value="KB.000158">
                                                        FOL CHAT RUSCH GOLD 3W 18</option>
                                                    <option data-subtext="" value="KB.000159">
                                                        FOL CHAT RUSCH GOLD 3W 20</option>
                                                    <option data-subtext="" value="KB.000160">
                                                        FOL CHAT RUSCH GOLD 3W 22</option>
                                                    <option data-subtext="" value="KB.000161">
                                                        FOL CHAT RUSCH GOLD 3W 24</option>
                                                    <option data-subtext="" value="KB.000162">
                                                        FOL CHAT RUSCH SILICONE 2W 16</option>
                                                    <option data-subtext="" value="KB.000163">
                                                        FOL CHAT RUSCH SILICONE 2W 18</option>
                                                    <option data-subtext="" value="KB.000166">
                                                        GELITA SPON STANDARD</option>
                                                    <option data-subtext="" value="KB.000167">
                                                        GENERAL CLEANER -25 LTR</option>
                                                    <option data-subtext="" value="KB.000170">
                                                        GLOVE GAMMEX PF 6,5</option>
                                                    <option data-subtext="" value="KB.000171">
                                                        GLOVE GAMMEX PF 7</option>
                                                    <option data-subtext="" value="KB.000172">
                                                        GLOVE GAMMEX PF 7,5</option>
                                                    <option data-subtext="" value="KB.000173">
                                                        GLOVE GAMMEX PF 8</option>
                                                    <option data-subtext="" value="KB.000174">
                                                        GLOVE GYNEC REMEDI 6,5</option>
                                                    <option data-subtext="" value="KB.000175">
                                                        GLOVE GYNEC REMEDI 7</option>
                                                    <option data-subtext="" value="KB.000176">
                                                        GLOVE GYNEC REMEDI 7,5</option>
                                                    <option data-subtext="" value="KB.000177">
                                                        GLOVE GYNEC REMEDI 8</option>
                                                    <option data-subtext="" value="KB.000178">
                                                        GLOVE LATEX FP REMEDI L</option>
                                                    <option data-subtext="" value="KB.000179">
                                                        GLOVE LATEX FP REMEDI M</option>
                                                    <option data-subtext="" value="KB.000180">
                                                        GLOVE LATEX FP REMEDI S</option>
                                                    <option data-subtext="" value="KB.000181">
                                                        GLOVE LATEX FP SHAMROCK M</option>
                                                    <option data-subtext="" value="KB.000622">
                                                        ETT 4,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000184">
                                                        GLOVE LATEX REMEDI M</option>
                                                    <option data-subtext="" value="KB.000185">
                                                        GLOVE LATEX REMEDI S</option>
                                                    <option data-subtext="" value="KB.000186">
                                                        GLOVE NITRIL FP REMEDI M</option>
                                                    <option data-subtext="" value="KB.000187">
                                                        GLOVE SENSI FP M</option>
                                                    <option data-subtext="" value="KB.000188">
                                                        GLOVE STERIL MAXTER 7</option>
                                                    <option data-subtext="" value="KB.000189">
                                                        GLOVE STERIL MAXTER 7,5</option>
                                                    <option data-subtext="" value="KB.000190">
                                                        GLOVE STERIL REMEDI 6</option>
                                                    <option data-subtext="" value="KB.000191">
                                                        GLOVE STERIL REMEDI 6,5</option>
                                                    <option data-subtext="" value="KB.000192">
                                                        GLOVE STERIL REMEDI 7</option>
                                                    <option data-subtext="" value="KB.000193">
                                                        GLOVE STERIL REMEDI 7,5</option>
                                                    <option data-subtext="" value="KB.000194">
                                                        GLOVE STERIL REMEDI FP 6</option>
                                                    <option data-subtext="" value="KB.000195">
                                                        GLOVE STERIL REMEDI FP 6,5</option>
                                                    <option data-subtext="" value="KB.000196">
                                                        GLOVE STERIL REMEDI FP 7</option>
                                                    <option data-subtext="" value="KB.000197">
                                                        GLOVE STERIL REMEDI FP 7,5</option>
                                                    <option data-subtext="" value="KB.000198">
                                                        GLOVE STERIL REMEDI FP 8</option>
                                                    <option data-subtext="" value="KB.000199">
                                                        GLOVE STERIL REMEDI 8</option>
                                                    <option data-subtext="" value="KB.000200">
                                                        GREEZAWAY NON COUSTIK 500 ML</option>
                                                    <option data-subtext="" value="KB.000202">
                                                        HAND SCRUB 5000 ML FRESCO</option>
                                                    <option data-subtext="" value="KB.000203">
                                                        HANSAPLAST 100`S</option>
                                                    <option data-subtext="" value="KB.000204">
                                                        HANSAPLAST JUMBO 50`S</option>
                                                    <option data-subtext="" value="KB.000205">
                                                        HARTMAN HEAMOST FORCEPT 14CM</option>
                                                    <option data-subtext="" value="KB.000206">
                                                        HARTMAN HEAMOST FORCEPT CVD 10CM</option>
                                                    <option data-subtext="" value="KB.000207">
                                                        HEAMOSTATIC PEAN FORCEPT 14CM</option>
                                                    <option data-subtext="" value="KB.000208">
                                                        HEPARIN CUP</option>
                                                    <option data-subtext="" value="KB.000209">
                                                        HOT COLD PACK GEL BRA</option>
                                                    <option data-subtext="" value="KB.000210">
                                                        HOT COLD PACK GEL EYE</option>
                                                    <option data-subtext="" value="KB.000211">
                                                        HOT COLD PACK GEL EYE PACK WITH MONKEY</option>
                                                    <option data-subtext="" value="KB.000212">
                                                        HOT COLD PACK GEL FACE MASK</option>
                                                    <option data-subtext="" value="KB.000213">
                                                        HOT COLD PACK GEL FORE HEAD</option>
                                                    <option data-subtext="" value="KB.000214">
                                                        HOT COLD PACK GEL SHOULDER</option>
                                                    <option data-subtext="" value="KB.000216">
                                                        ID BAND BABY PINK REMEDI</option>
                                                    <option data-subtext="" value="KB.000217">
                                                        ID BAND BABY BLUE ONEMED</option>
                                                    <option data-subtext="" value="KB.000218">
                                                        ID BAND BABY BLUE HOSPITEC</option>
                                                    <option data-subtext="" value="KB.000219">
                                                        ID BAND BABY PINK HOSPITECH</option>
                                                    <option data-subtext="" value="KB.000220">
                                                        ID BAND BABY PINK ONEMED</option>
                                                    <option data-subtext="" value="KB.000221">
                                                        ID BAND BABY RED REMEDI</option>
                                                    <option data-subtext="" value="KB.000222">
                                                        ID BAND BABY YELLOW REMEDI</option>
                                                    <option data-subtext="" value="KB.000223">
                                                        ID BAND DEWASA PINK HOSPITECH</option>
                                                    <option data-subtext="" value="KB.000224">
                                                        ID BAND DEWASA RED REMEDI</option>
                                                    <option data-subtext="" value="KB.000225">
                                                        ID BAND DURAMAX DWS BLUE 29X277</option>
                                                    <option data-subtext="" value="KB.000226">
                                                        ID BAND DURAMAX ANAK BLUE 19X186</option>
                                                    <option data-subtext="" value="KB.000227">
                                                        ID BAND DURAMAX ANAK PINIK 19X186</option>
                                                    <option data-subtext="" value="KB.000228">
                                                        ID BAND DWS BLUE HOSPITECH</option>
                                                    <option data-subtext="" value="KB.000229">
                                                        ID BAND INS CARD ANAK BLUE REMEDI</option>
                                                    <option data-subtext="" value="KB.000230">
                                                        ID BAND INS CARD ANAK PINK REMEDI</option>
                                                    <option data-subtext="" value="KB.000231">
                                                        ID BAND INS CARD ANAK RED REMEDI</option>
                                                    <option data-subtext="" value="KB.000232">
                                                        ID BAND INS CARD ANAK YELLOW REMEDI</option>
                                                    <option data-subtext="" value="KB.000233">
                                                        ID BAND INS CARD DWS BLUE REMEDI</option>
                                                    <option data-subtext="" value="KB.000234">
                                                        ID BAND INS CARD DWS PINK REMEDI</option>
                                                    <option data-subtext="" value="KB.000235">
                                                        ID BAND INS CARD DWS RED REMEDI</option>
                                                    <option data-subtext="" value="KB.000236">
                                                        ID BAND INS CARD DWS YELLOW REMEDI</option>
                                                    <option data-subtext="" value="KB.000237">
                                                        ID BAND KANCING RED</option>
                                                    <option data-subtext="" value="KB.000238">
                                                        ID BAND KANCING YELLOW</option>
                                                    <option data-subtext="" value="KB.000240">
                                                        INFUS SET DWS REMEDI 1009</option>
                                                    <option data-subtext="" value="KB.000241">
                                                        INFUS SET PED REMEDI</option>
                                                    <option data-subtext="" value="KB.000242">
                                                        INFUS SET TERUMO PED</option>
                                                    <option data-subtext="" value="KB.000243">
                                                        INTUBATION STYLET PASCHO 3,3</option>
                                                    <option data-subtext="" value="KB.000244">
                                                        IRIS SCISSOR SH/SH CVD 10.5CM</option>
                                                    <option data-subtext="" value="KB.000245">
                                                        IV CHAT FLASH REMEDI 26G</option>
                                                    <option data-subtext="" value="KB.000246">
                                                        IV CHAT FLASHREMEDI 18G</option>
                                                    <option data-subtext="" value="KB.000247">
                                                        IV CHAT FLASHREMEDI 20G</option>
                                                    <option data-subtext="" value="KB.000248">
                                                        IV CHAT FLASHREMEDI 22G</option>
                                                    <option data-subtext="" value="KB.000250">
                                                        IV CHAT TERUMO SURFLO 16G</option>
                                                    <option data-subtext="" value="KB.000251">
                                                        IV CHAT VASFLOW 18</option>
                                                    <option data-subtext="" value="KB.000252">
                                                        IV CHAT VASFLOW 20</option>
                                                    <option data-subtext="" value="KB.000253">
                                                        IV CHAT VASFLOW 22</option>
                                                    <option data-subtext="" value="KB.000254">
                                                        IV DRESSING 6X7 WINNER TRANSPPARANT</option>
                                                    <option data-subtext="" value="KB.000255">
                                                        IV DRESSING 6X8 NARAFIX</option>
                                                    <option data-subtext="" value="KB.000256">
                                                        JANGKA PINGGUL</option>
                                                    <option data-subtext="" value="KB.000257">
                                                        JARUM HECTING " MANI "</option>
                                                    <option data-subtext="" value="KB.000258">
                                                        KACA MATA BAYI "POSSEY"4645</option>
                                                    <option data-subtext="" value="KB.000259">
                                                        KAPAS 100 GRAM WACANA</option>
                                                    <option data-subtext="" value="KB.000260">
                                                        KAPAS 1000 GRAM 'CARRESA'</option>
                                                    <option data-subtext="" value="KB.000261">
                                                        KAPAS BOLA "CARRESSA"</option>
                                                    <option data-subtext="" value="KB.000262">
                                                        KASA 16X16CM WACANA</option>
                                                    <option data-subtext="" value="KB.000263">
                                                        KASA 16X16 HDC</option>
                                                    <option data-subtext="" value="KB.000265">
                                                        KASA HYDROPILE ROLL 40X80</option>
                                                    <option data-subtext="" value="KB.000266">
                                                        KASA LIPAT 7,5X7,5 16 PLY (250`S)</option>
                                                    <option data-subtext="" value="KB.000267">
                                                        KERTAS TIMBANG/PERKAMEN</option>
                                                    <option data-subtext="" value="KB.000268">
                                                        KOCHER HEAMOST FORCEPT CVD 14CM</option>
                                                    <option data-subtext="" value="KB.000269">
                                                        KOM BETADINE 8CM</option>
                                                    <option data-subtext="" value="KB.000270">
                                                        LABEL 60X30MM RC PRIME G1L CX</option>
                                                    <option data-subtext="" value="KB.000271">
                                                        LABEL 76X35 RC PRIME G1L BL</option>
                                                    <option data-subtext="" value="KB.000272">
                                                        LAMINARIA MEDGYN L</option>
                                                    <option data-subtext="" value="KB.000273">
                                                        LAMINARIA MEDGYN M</option>
                                                    <option data-subtext="" value="KB.000274">
                                                        LX DETERGENT XTRA</option>
                                                    <option data-subtext="" value="KB.000275">
                                                        LX NEUTRAL PLUS</option>
                                                    <option data-subtext="" value="KB.000276">
                                                        LX OXA</option>
                                                    <option data-subtext="" value="KB.000277">
                                                        LX POWER</option>
                                                    <option data-subtext="" value="KB.000278">
                                                        LX SOFT X-TRA PLUS</option>
                                                    <option data-subtext="" value="KB.000279">
                                                        LX XTREME</option>
                                                    <option data-subtext="" value="KB.000280">
                                                        MAIERS DRESSING FORCEP 30CM</option>
                                                    <option data-subtext="" value="KB.000282">
                                                        MASKER EAR LOP CITO</option>
                                                    <option data-subtext="" value="KB.000283">
                                                        MASKER KAIN REMEDI</option>
                                                    <option data-subtext="" value="KB.000284">
                                                        MASKER KN95 REMEDI</option>
                                                    <option data-subtext="" value="KB.000285">
                                                        MASKER TIE ON CITO</option>
                                                    <option data-subtext="" value="KB.000286">
                                                        MAYO GUEDEL 1 SIMACLUS</option>
                                                    <option data-subtext="" value="KB.000287">
                                                        MAYO GUEDEL 2 SIMACLUS</option>
                                                    <option data-subtext="" value="KB.000288">
                                                        MAYO GUEDEL 3 SIMACLUS</option>
                                                    <option data-subtext="" value="KB.000289">
                                                        MAYO GUEDEL 4 SIMACLUS</option>
                                                    <option data-subtext="" value="KB.000290">
                                                        MAYO GUEDEL 5 SIMACLUS</option>
                                                    <option data-subtext="" value="KB.000291">
                                                        MAYO GUEDEL RUSCH 5 CLEAR</option>
                                                    <option data-subtext="" value="KB.000292">
                                                        MEGASORB PGA 1X 90-48 RB MS011428</option>
                                                    <option data-subtext="" value="KB.000293">
                                                        MEGASORB PGA 2X90-48 RB MS029252</option>
                                                    <option data-subtext="" value="KB.000295">
                                                        MERISOFT-CHROMIC 0X76-40 RB ME4246</option>
                                                    <option data-subtext="" value="KB.000296">
                                                        MERISOFT-CHROMIC 1X100-45 RB ME4227</option>
                                                    <option data-subtext="" value="KB.000297">
                                                        MERISOFT-CHROMIC 2-0X75-40 RB ME200991</option>
                                                    <option data-subtext="" value="KB.000299">
                                                        MERISOFT-PLAIN 2-0X100-37 RB ME204237</option>
                                                    <option data-subtext="" value="KB.000300">
                                                        METAL CATH 12</option>
                                                    <option data-subtext="" value="KB.000301">
                                                        METHYLEN BLUE 100 ML-SKR</option>
                                                    <option data-subtext="" value="KB.000302">
                                                        METZEBAUM SCISSOR 18 CM HOHLKORPEL</option>
                                                    <option data-subtext="" value="KB.000303">
                                                        MICROPORE 3M 1 INC</option>
                                                    <option data-subtext="" value="KB.000304">
                                                        MICROPORE 3M 1/2 INC</option>
                                                    <option data-subtext="" value="KB.000305">
                                                        MICROPORE 3M 2 INC</option>
                                                    <option data-subtext="" value="KB.000306">
                                                        MICROSCOPE SLIDES SAIL BRAN 7101</option>
                                                    <option data-subtext="" value="KB.000307">
                                                        MINOR SET HOHKORPEL</option>
                                                    <option data-subtext="" value="KB.000308">
                                                        MITSU-PGLA 2-0X70-36MM RC PGN200466</option>
                                                    <option data-subtext="" value="KB.000309">
                                                        MITSU-PGLA 2-0X75-36MM HC RB PGN209140</option>
                                                    <option data-subtext="" value="KB.000310">
                                                        MITSU-PGLA 2-0X90-26MM RB PGN200369</option>
                                                    <option data-subtext="" value="KB.000312">
                                                        MITSU-PGLA 4-0X70-24MM CU RC PGN400451</option>
                                                    <option data-subtext="" value="KB.000314">
                                                        MONOSOF 3-0 SN 665</option>
                                                    <option data-subtext="" value="KB.000315">
                                                        MOSQUITO FORCEPT CVD 12,5CM</option>
                                                    <option data-subtext="" value="KB.000316">
                                                        MOSQUITO FORCEPT STR 12,5CM</option>
                                                    <option data-subtext="" value="KB.000317">
                                                        MOSQUITO FORCEPT STR 14CM</option>
                                                    <option data-subtext="" value="KB.000318">
                                                        MUCUS EXTRACTOR LOTUS FR 8</option>
                                                    <option data-subtext="" value="KB.000319">
                                                        MY JELLY ' 80 GRAM</option>
                                                    <option data-subtext="" value="KB.000320">
                                                        NASAL O2 PED LIFE R</option>
                                                    <option data-subtext="" value="KB.000321">
                                                        NASAL O2 REMEDI NEONATUS</option>
                                                    <option data-subtext="" value="KB.000322">
                                                        NASAL O2 REMEDI PED WHITE</option>
                                                    <option data-subtext="" value="KB.000324">
                                                        NASAL O2 RENOMA PED</option>
                                                    <option data-subtext="" value="KB.000326">
                                                        NEBULIZER DEWASA BM</option>
                                                    <option data-subtext="" value="KB.000327">
                                                        NEBULIZER DEWASA LIFE R</option>
                                                    <option data-subtext="" value="KB.000328">
                                                        NEBULIZER DEWASA REMEDI</option>
                                                    <option data-subtext="" value="KB.000329">
                                                        NEBULIZER GEA PEDIATRIC S0-1173</option>
                                                    <option data-subtext="" value="KB.000330">
                                                        NEBULIZER INNOSPIRE ELEGANCE PHILIP</option>
                                                    <option data-subtext="" value="KB.000331">
                                                        NEEDLE TERUMO 19G</option>
                                                    <option data-subtext="" value="KB.000332">
                                                        NEEDLE TERUMO 21G</option>
                                                    <option data-subtext="" value="KB.000333">
                                                        NEEDLE TERUMO 24G</option>
                                                    <option data-subtext="" value="KB.000334">
                                                        NEEDLE TERUMO 26G</option>
                                                    <option data-subtext="" value="KB.000335">
                                                        NEEDLE TERUMO 27G</option>
                                                    <option data-subtext="" value="KB.000336">
                                                        NEEDLE TERUMO AGANI 18G</option>
                                                    <option data-subtext="" value="KB.000337">
                                                        NEEDLE TERUMO AGANI 23G</option>
                                                    <option data-subtext="" value="KB.000338">
                                                        NEEDLE TERUMO AGANI 25G (25MM)</option>
                                                    <option data-subtext="" value="KB.000339">
                                                        NELATON CHATETER 14</option>
                                                    <option data-subtext="" value="KB.000340">
                                                        NELATON CHATETER 16</option>
                                                    <option data-subtext="" value="KB.000341">
                                                        NELATON CHATETER NO.10 (STERILE)</option>
                                                    <option data-subtext="" value="KB.000342">
                                                        NELATON CHATETER NO.12</option>
                                                    <option data-subtext="" value="KB.000343">
                                                        NELATON CHATETER NO.8 (STERILE)</option>
                                                    <option data-subtext="" value="KB.000344">
                                                        NURSE CAP REMEDI</option>
                                                    <option data-subtext="" value="KB.000345">
                                                        NURSE CAP REMEDI (MOP)</option>
                                                    <option data-subtext="" value="KB.000346">
                                                        O2 MASK NON REB REMEDI DWS ELONG</option>
                                                    <option data-subtext="" value="KB.000347">
                                                        O2 MASK NON REB REMEDI PED</option>
                                                    <option data-subtext="" value="KB.000348">
                                                        O2 MASK REMEDI ADULT ELONG (SUNGKUP)</option>
                                                    <option data-subtext="" value="KB.000349">
                                                        O2 MASK REMEDI PED (SUNGKUP)</option>
                                                    <option data-subtext="" value="KB.000350">
                                                        OKE PLAST BULAT 100 S</option>
                                                    <option data-subtext="" value="KB.000351">
                                                        OPERATING SCISSOR CVD 14CM</option>
                                                    <option data-subtext="" value="KB.000352">
                                                        OTOSCOP</option>
                                                    <option data-subtext="" value="KB.000353">
                                                        OXYGEN CONCENTRATOR AVNER</option>
                                                    <option data-subtext="" value="KB.000354">
                                                        PAPER THERMAL MITSUBISHI K 91 HG</option>
                                                    <option data-subtext="" value="KB.000355">
                                                        PARTUS INDUKSI A</option>
                                                    <option data-subtext="" value="KB.000356">
                                                        PARTUS SET HOHKORPEL</option>
                                                    <option data-subtext="" value="KB.000358">
                                                        PENROSE DRAIN 8 FR SEWOON</option>
                                                    <option data-subtext="" value="KB.000359">
                                                        PERFUSOR - LEITUNG: MR 150 CM</option>
                                                    <option data-subtext="" value="KB.000360">
                                                        PERFUSOR-ORIGINAL SPRITZE OPS 50ML</option>
                                                    <option data-subtext="" value="KB.000361">
                                                        PIPET DROP</option>
                                                    <option data-subtext="" value="KB.000362">
                                                        PIPET TETES PLASTIK 3 ML</option>
                                                    <option data-subtext="" value="KB.000363">
                                                        PISAU BEDAH"AESCULAP" 10</option>
                                                    <option data-subtext="" value="KB.000364">
                                                        PISAU BEDAH"AESCULAP" 11</option>
                                                    <option data-subtext="" value="KB.000365">
                                                        PISAU BEDAH"AESCULAP" 12</option>
                                                    <option data-subtext="" value="KB.000366">
                                                        PISAU BEDAH"AESCULAP" 15</option>
                                                    <option data-subtext="" value="KB.000367">
                                                        PISAU BEDAH"AESCULAP" 20</option>
                                                    <option data-subtext="" value="KB.000368">
                                                        PISAU BEDAH"AESCULAP" 23</option>
                                                    <option data-subtext="" value="KB.000369">
                                                        PISAU BEDAH"AESCULAP" 24</option>
                                                    <option data-subtext="" value="KB.000371">
                                                        PISPOT SODOK</option>
                                                    <option data-subtext="" value="KB.000372">
                                                        POLIBAN 10 CM X 2,7 M (4 INC)</option>
                                                    <option data-subtext="" value="KB.000373">
                                                        POLIBAN 15 CM X 2,7 M ( 6 INC )</option>
                                                    <option data-subtext="" value="KB.000374">
                                                        POLIBAN 7,5 CM X 2,7 M ( 3 INC )</option>
                                                    <option data-subtext="" value="KB.000375">
                                                        POLIFIX 10 CM X 5</option>
                                                    <option data-subtext="" value="KB.000376">
                                                        POLIFIX 5 CM X 5</option>
                                                    <option data-subtext="" value="KB.000377">
                                                        POLIGYP 10 CM X 2,7 M (4 INC)</option>
                                                    <option data-subtext="" value="KB.000378">
                                                        POLIGYP 15 CM X 2,7 M (6 INC)</option>
                                                    <option data-subtext="" value="KB.000379">
                                                        POLIGYP 7,5 CM X 2,7 M (3 INC)</option>
                                                    <option data-subtext="" value="KB.000380">
                                                        POLYSORB 0 90 CM GS-25 TCL 904</option>
                                                    <option data-subtext="" value="KB.000381">
                                                        POLYSORB 2-0 CL 811</option>
                                                    <option data-subtext="" value="KB.000382">
                                                        POT PLASTIK 100</option>
                                                    <option data-subtext="" value="KB.000383">
                                                        POT PLASTIK 15</option>
                                                    <option data-subtext="" value="KB.000384">
                                                        POT PLASTIK 15 GR HIJAU PEARL</option>
                                                    <option data-subtext="" value="KB.000385">
                                                        POT PLASTIK 20</option>
                                                    <option data-subtext="" value="KB.000386">
                                                        POT PLASTIK 30</option>
                                                    <option data-subtext="" value="KB.000387">
                                                        POT PLASTIK 30 GR RING PUTIH TUTUP PUTIH</option>
                                                    <option data-subtext="" value="KB.000388">
                                                        POT PLASTIK 50</option>
                                                    <option data-subtext="" value="KB.000389">
                                                        POT PLASTIK 50 ULIR</option>
                                                    <option data-subtext="" value="KB.000390">
                                                        POT PLASTIK 75</option>
                                                    <option data-subtext="" value="KB.000391">
                                                        POUCHES FLAT 100 X 200M YPAK</option>
                                                    <option data-subtext="" value="KB.000392">
                                                        POUCHES FLAT 150 X 200M YPAK</option>
                                                    <option data-subtext="" value="KB.000393">
                                                        POUCHES FLAT 250 X 200M YPAK</option>
                                                    <option data-subtext="" value="KB.000394">
                                                        POUCHES FLAT 400 X 200M YPAK</option>
                                                    <option data-subtext="" value="KB.000395">
                                                        POUCHES FLAT 75 X 200M YPAK</option>
                                                    <option data-subtext="" value="KB.000396">
                                                        POUCHES GUSSETE 150 X 100M YPAK</option>
                                                    <option data-subtext="" value="KB.000397">
                                                        POUCHES GUSSETE 250 X 100M YPAK</option>
                                                    <option data-subtext="" value="KB.000398">
                                                        POVIDONE 10% 30 ML OM (C50 BTL)</option>
                                                    <option data-subtext="" value="KB.000399">
                                                        POVIDONE IODINE 10% (1 LTR)</option>
                                                    <option data-subtext="" value="KB.000401">
                                                        QLICKSMART</option>
                                                    <option data-subtext="" value="KB.000402">
                                                        RANSEL VERBAN L</option>
                                                    <option data-subtext="" value="KB.000403">
                                                        BLOOD PACK 18 WING</option>
                                                    <option data-subtext="" value="KB.000404">
                                                        BLOOD PACK 20 WING</option>
                                                    <option data-subtext="" value="KB.000405">
                                                        INFUS PACK 18 WING</option>
                                                    <option data-subtext="" value="KB.000406">
                                                        INFUS PACK 22 WING</option>
                                                    <option data-subtext="" value="KB.000409">
                                                        REMEDI SOFT IV 6CM X 8CM 8822</option>
                                                    <option data-subtext="" value="KB.000410">
                                                        RIBBON 85X100 WAX FO</option>
                                                    <option data-subtext="" value="KB.000411">
                                                        RING IMPRESARIUM NO.6,5</option>
                                                    <option data-subtext="" value="KB.000412">
                                                        RING IMPRESARIUM NO.7</option>
                                                    <option data-subtext="" value="KB.000413">
                                                        RING IMPRESARIUM NO.7,5</option>
                                                    <option data-subtext="" value="KB.000414">
                                                        RING SPLINT 336 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000415">
                                                        ROCHESTER PEAN HEAMOST FORCEPT 14CM</option>
                                                    <option data-subtext="" value="KB.000420">
                                                        SHOE COVER 30X25 MEDITECH (25 S)</option>
                                                    <option data-subtext="" value="KB.000421">
                                                        SHOE COVER SOCO</option>
                                                    <option data-subtext="" value="KB.000422">
                                                        SILICONE DRAIN 4X6 (METERAN)</option>
                                                    <option data-subtext="" value="KB.000423">
                                                        SILICONE DRAIN 6 X 9 (METERAN)</option>
                                                    <option data-subtext="" value="KB.000424">
                                                        SILICONE DRAIN 7 X 10 (METERAN)</option>
                                                    <option data-subtext="" value="KB.000425">
                                                        SILICONE DRAIN 8 X 12 (METERAN)</option>
                                                    <option data-subtext="" value="KB.000426">
                                                        SILICONE FULL LENGTH INSOLE SIZE M VAR542</option>
                                                    <option data-subtext="" value="KB.000427">
                                                        SILICONE FULL LENGTH INSOLE SIZE S VAR542</option>
                                                    <option data-subtext="" value="KB.000428">
                                                        SIMS SCISSOR CVD 20CM</option>
                                                    <option data-subtext="" value="KB.000429">
                                                        SIMS SCISSOR STR 20CM</option>
                                                    <option data-subtext="" value="KB.000430">
                                                        SOFNOLIME/INTERSORB SODA</option>
                                                    <option data-subtext="" value="KB.000431">
                                                        SOFTEX MATERNITY</option>
                                                    <option data-subtext="" value="KB.000432">
                                                        SONY BLUE THERMAL UPT 517 BL</option>
                                                    <option data-subtext="" value="KB.000433">
                                                        SONY UPP 110 HG PAPER THERMAL</option>
                                                    <option data-subtext="" value="KB.000434">
                                                        SPALK 4X10</option>
                                                    <option data-subtext="" value="KB.000435">
                                                        SPALK 4X15</option>
                                                    <option data-subtext="" value="KB.000436">
                                                        SPALK 4X8</option>
                                                    <option data-subtext="" value="KB.000437">
                                                        SPALK 5X10</option>
                                                    <option data-subtext="" value="KB.000438">
                                                        SPALK 5X15</option>
                                                    <option data-subtext="" value="KB.000439">
                                                        SPALK 5X20</option>
                                                    <option data-subtext="" value="KB.000440">
                                                        SPALK 5X30</option>
                                                    <option data-subtext="" value="KB.000441">
                                                        SPALK 5X35</option>
                                                    <option data-subtext="" value="KB.000442">
                                                        SPALK 7X30</option>
                                                    <option data-subtext="" value="KB.000443">
                                                        SPALK 7X50</option>
                                                    <option data-subtext="" value="KB.000444">
                                                        SPALK 7X70</option>
                                                    <option data-subtext="" value="KB.000445">
                                                        SPALK 7X80</option>
                                                    <option data-subtext="" value="KB.000446">
                                                        SPALK ANAK 5X15</option>
                                                    <option data-subtext="" value="KB.000447">
                                                        SPALK BAYI 5X10</option>
                                                    <option data-subtext="" value="KB.000448">
                                                        SPALK TRIPLE 10X13X50CM</option>
                                                    <option data-subtext="" value="KB.000449">
                                                        SPALK TRIPLE 10X13X60CM</option>
                                                    <option data-subtext="" value="KB.000450">
                                                        SPALK TRIPLE 10X15X100</option>
                                                    <option data-subtext="" value="KB.000451">
                                                        SPINAL NEEDLE SPINOCAN 25</option>
                                                    <option data-subtext="" value="KB.000452">
                                                        SPINAL NEEDLE SPINOCAN 26</option>
                                                    <option data-subtext="" value="KB.000453">
                                                        SPINAL NEEDLE SPINOCAN 27</option>
                                                    <option data-subtext="" value="KB.000455">
                                                        SPONGE HOLDING FORCEPT STR 18CM</option>
                                                    <option data-subtext="" value="KB.000456">
                                                        SPUIT 3 CC GID CARE</option>
                                                    <option data-subtext="" value="KB.000459">
                                                        SPUIT REMEDI 5 CC</option>
                                                    <option data-subtext="" value="KB.000460">
                                                        SPUIT REMEDI 1 CC</option>
                                                    <option data-subtext="" value="KB.000461">
                                                        SPUIT REMEDI 10 CC</option>
                                                    <option data-subtext="" value="KB.000462">
                                                        SPUIT REMEDI 3 CC</option>
                                                    <option data-subtext="" value="KB.000463">
                                                        SPUIT TERUMO 1 CC TUBERCULIN</option>
                                                    <option data-subtext="" value="KB.000464">
                                                        SPUIT TERUMO 10 CC</option>
                                                    <option data-subtext="" value="KB.000465">
                                                        SPUIT TERUMO 20 CC</option>
                                                    <option data-subtext="" value="KB.000466">
                                                        SPUIT TERUMO 3 CC</option>
                                                    <option data-subtext="" value="KB.000467">
                                                        SPUIT TERUMO 5 CC</option>
                                                    <option data-subtext="" value="KB.000468">
                                                        SPUIT TERUMO 50 CC</option>
                                                    <option data-subtext="" value="KB.000469">
                                                        SPUIT TERUMO 60 CC CHATTIP</option>
                                                    <option data-subtext="" value="KB.000470">
                                                        STETHOSCOPE BIDAN</option>
                                                    <option data-subtext="" value="KB.000472">
                                                        STOMACH TUBE/NGT TERUMO 12</option>
                                                    <option data-subtext="" value="KB.000473">
                                                        STOMACH TUBE/NGT TERUMO 14</option>
                                                    <option data-subtext="" value="KB.000474">
                                                        STOMACH TUBE/NGT TERUMO 16</option>
                                                    <option data-subtext="" value="KB.000475">
                                                        STOMACH TUBE/NGT TERUMO 18</option>
                                                    <option data-subtext="" value="KB.000477">
                                                        SUCTION CHAT REMEDI 10</option>
                                                    <option data-subtext="" value="KB.000478">
                                                        SUCTION CHAT REMEDI 12</option>
                                                    <option data-subtext="" value="KB.000479">
                                                        SUCTION CHAT REMEDI 14</option>
                                                    <option data-subtext="" value="KB.000480">
                                                        SUCTION CHAT REMEDI 16</option>
                                                    <option data-subtext="" value="KB.000481">
                                                        SUCTION CHAT REMEDI 6</option>
                                                    <option data-subtext="" value="KB.000482">
                                                        SUCTION CHAT REMEDI 8</option>
                                                    <option data-subtext="" value="KB.000483">
                                                        SUCTION CONNECTING TUBING 3 M ABADA</option>
                                                    <option data-subtext="" value="KB.000484">
                                                        SURFANIOS</option>
                                                    <option data-subtext="" value="KB.000485">
                                                        SURGICAL PEN SKIN MARKER BLUE</option>
                                                    <option data-subtext="" value="KB.000486">
                                                        SURGICAL TAPE 1,25</option>
                                                    <option data-subtext="" value="KB.000487">
                                                        TABUNG REAKSI PYREX 10X75</option>
                                                    <option data-subtext="" value="KB.000489">
                                                        TENSIMETER JUMPER JPD HA 200</option>
                                                    <option data-subtext="" value="KB.000490">
                                                        TERMOMETER ABN DIGITAL</option>
                                                    <option data-subtext="" value="KB.000491">
                                                        TERMOMETER INFRARED JUMPER FR 202</option>
                                                    <option data-subtext="" value="KB.000492">
                                                        TISSUE FINO FORCEPT STR 10CM</option>
                                                    <option data-subtext="" value="KB.000493">
                                                        TISSUE GULUNG 'LIVI'</option>
                                                    <option data-subtext="" value="KB.000494">
                                                        TONGKAT 1 KAKI</option>
                                                    <option data-subtext="" value="KB.000495">
                                                        TONGKAT PYRAMID KAKI 4</option>
                                                    <option data-subtext="" value="KB.000496">
                                                        TORNIQUET REMEDI</option>
                                                    <option data-subtext="" value="KB.000497">
                                                        TOUNGE SPATEL KAYU (50 S)</option>
                                                    <option data-subtext="" value="KB.000498">
                                                        TOUNGE SPATEL SS</option>
                                                    <option data-subtext="" value="KB.000499">
                                                        ULTRASONIC NEBULIZER "POLYGREEN" KN 9210</option>
                                                    <option data-subtext="" value="KB.000500">
                                                        ULTRASONIQ GALON 5 KG</option>
                                                    <option data-subtext="" value="KB.000501">
                                                        UMBILICAL CLAM REMEDI</option>
                                                    <option data-subtext="" value="KB.000502">
                                                        UNDER PAD 60 X 90 HEALER</option>
                                                    <option data-subtext="" value="KB.000503">
                                                        URINAL PLASTIK LAKI</option>
                                                    <option data-subtext="" value="KB.000504">
                                                        URINAL PLASTIK WANITA</option>
                                                    <option data-subtext="" value="KB.000506">
                                                        URINE BAG REMEDI T VALVE</option>
                                                    <option data-subtext="" value="KB.000507">
                                                        URINE PED COLLECTORS MEDSUYUN</option>
                                                    <option data-subtext="" value="KB.000509">
                                                        VERBAND 10 CM / ( 4X10) HDC</option>
                                                    <option data-subtext="" value="KB.000510">
                                                        VERBAND 10CM ML (4X10)</option>
                                                    <option data-subtext="" value="KB.000512">
                                                        VERBAND 5 CM / (4X5) HDC</option>
                                                    <option data-subtext="" value="KB.000513">
                                                        VERBAND 5CM ML (4X5)</option>
                                                    <option data-subtext="" value="KB.000514">
                                                        VERBAND KAOS 10 CM</option>
                                                    <option data-subtext="" value="KB.000515">
                                                        VERBAND KAOS 15 CM</option>
                                                    <option data-subtext="" value="KB.000516">
                                                        VIEN FINDER</option>
                                                    <option data-subtext="" value="KB.000518">
                                                        WING NEEDLE 23 TERUMO</option>
                                                    <option data-subtext="" value="KB.000520">
                                                        WING NEEDLE 25 TERUMO</option>
                                                    <option data-subtext="" value="KB.000521">
                                                        WING NEEDLE 27 TERUMO</option>
                                                    <option data-subtext="" value="KB.000522">
                                                        WWZ ZAX 2 LT</option>
                                                    <option data-subtext="" value="KB.000524">
                                                        ACCUPUNTURE DONGBANG 0,25 X 25</option>
                                                    <option data-subtext="" value="KB.000525">
                                                        ACCUPUNTURE DONGBANG 0,25 X 40</option>
                                                    <option data-subtext="" value="KB.000526">
                                                        CERVICAL COLLAR HARD 201 M VARITEKS</option>
                                                    <option data-subtext="" value="KB.000800">
                                                        VAC SET WOUND CLOSE 600 ML FG18</option>
                                                    <option data-subtext="" value="KB.000532">
                                                        FOL CHAT 2W-16FR ABADA</option>
                                                    <option data-subtext="" value="KB.000534">
                                                        ANKLE SUPPORT (SOFT SPORT) SZ. L CODE 724</option>
                                                    <option data-subtext="" value="KB.000535">
                                                        ANKLE SUPPORT (SOFT SPORT) SZ. M CODE 724</option>
                                                    <option data-subtext="" value="KB.000536">
                                                        ANKLE SUPPORT (SOFT SPORT) SZ. S CODE 724</option>
                                                    <option data-subtext="" value="KB.000537">
                                                        ANTING TINDIK TEMBAK STUDEX GOLD</option>
                                                    <option data-subtext="" value="KB.000538">
                                                        BOTOL 100 CC</option>
                                                    <option data-subtext="" value="KB.000539">
                                                        CERVICAL COLLAR HARD 201 L VARITEKS</option>
                                                    <option data-subtext="" value="KB.000540">
                                                        CERVICAL COLLAR HARD 201 S VARITEKS</option>
                                                    <option data-subtext="" value="KB.000541">
                                                        CERVICAL COLLAR SOFT 203 L VARITEKS</option>
                                                    <option data-subtext="" value="KB.000542">
                                                        CERVICAL COLLAR SOFT 203 M VARITEKS</option>
                                                    <option data-subtext="" value="KB.000543">
                                                        ELASTIC LUMBOSACRAL CORSET 131 SZ. L</option>
                                                    <option data-subtext="" value="KB.000544">
                                                        ELASTIC LUMBOSACRAL CORSET 131 SZ. XL</option>
                                                    <option data-subtext="" value="KB.000545">
                                                        ELASTIC PREGNANCY CORSET 139 SIZE XL VARITEX</option>
                                                    <option data-subtext="" value="KB.000546">
                                                        ELASTIC WRIST BRACE SPLINT 307 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000547">
                                                        ELASTIC WRIST BRACE SPLINT 307 SIZE S VARITEX</option>
                                                    <option data-subtext="" value="KB.000548">
                                                        FOL CHAT RUSCH GOLD 2W 24</option>
                                                    <option data-subtext="" value="KB.000549">
                                                        GLOVE LATEX CHRONA M</option>
                                                    <option data-subtext="" value="KB.000550">
                                                        GLOVE LATEX PURE M</option>
                                                    <option data-subtext="" value="KB.000551">
                                                        ID BAND DWS BLUE GC</option>
                                                    <option data-subtext="" value="KB.000552">
                                                        IV CHAT FLASHREMEDI 24G</option>
                                                    <option data-subtext="" value="KB.000553">
                                                        KASA POTONG 20 X 20 CM</option>
                                                    <option data-subtext="" value="KB.000554">
                                                        KNEE BRACE WITH PATELLA 822 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000555">
                                                        KNEE BRACE WITH PATELLA 822 SIZE XL VARITEX</option>
                                                    <option data-subtext="" value="KB.000556">
                                                        KNEE HIGH VARICOSE 912 SIZE 2</option>
                                                    <option data-subtext="" value="KB.000557">
                                                        KNEE HIGH VARICOSE 912 SIZE 3</option>
                                                    <option data-subtext="" value="KB.000558">
                                                        KNEE HIGH VARICOSE 912 SIZE 4</option>
                                                    <option data-subtext="" value="KB.000559">
                                                        KNEE HIGH VARICOSE 912 SIZE 5</option>
                                                    <option data-subtext="" value="KB.000560">
                                                        KNEE SUPPORT (SOFT SPORT) SZ. L CODE 725</option>
                                                    <option data-subtext="" value="KB.000561">
                                                        KNEE SUPPORT (SOFT SPORT) SZ. M CODE 725</option>
                                                    <option data-subtext="" value="KB.000562">
                                                        KNEE SUPPORT (SOFT SPORT) SZ. S CODE 725</option>
                                                    <option data-subtext="" value="KB.000563">
                                                        KNITTED MALLEOL ANKLE SUPPORT SIZE L VARITEX</option>
                                                    <option data-subtext="" value="KB.000564">
                                                        LAMINARIA MEDGYN S</option>
                                                    <option data-subtext="" value="KB.000565">
                                                        LUMBAR SACRAL L LIFE R</option>
                                                    <option data-subtext="" value="KB.000566">
                                                        LUMBAR SACRAL M LIFE R</option>
                                                    <option data-subtext="" value="KB.000567">
                                                        LUMBAR SACRAL S LIFE R</option>
                                                    <option data-subtext="" value="KB.000568">
                                                        LUMBAR SACRAL XL LIFE R</option>
                                                    <option data-subtext="" value="KB.000569">
                                                        LUMBAR SACRAL XXL LIFE R</option>
                                                    <option data-subtext="" value="KB.000570">
                                                        LUMBOSTAD CORSET KODE 115 NO. 100</option>
                                                    <option data-subtext="" value="KB.000571">
                                                        MEGASORBPGA 3-0X70-24 RC MS300442</option>
                                                    <option data-subtext="" value="KB.000572">
                                                        MITSU-PGLA 2-0X90-36MM RB PGN209440 </option>
                                                    <option data-subtext="" value="KB.000573">
                                                        MITSU-PGLA 6-0X70-13MM RB PGN600134 </option>
                                                    <option data-subtext="" value="KB.000575">
                                                        RING BASEBALL SPLINT 331 SIZE L VARITEX</option>
                                                    <option data-subtext="" value="KB.000576">
                                                        RING BASEBALL SPLINT 331 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000577">
                                                        RING BASEBALL SPLINT 331 SIZE S VARITEX</option>
                                                    <option data-subtext="" value="KB.000578">
                                                        RING SPLINT 336 SIZE S VARITEX</option>
                                                    <option data-subtext="" value="KB.000579">
                                                        SILICONE DRAIN 4X6 (30CM)</option>
                                                    <option data-subtext="" value="KB.000580">
                                                        SILICONE DRAIN 6 X 9 (30 CM)</option>
                                                    <option data-subtext="" value="KB.000581">
                                                        SILICONE DRAIN 9 X 12 (METERAN)</option>
                                                    <option data-subtext="" value="KB.000582">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL II 911 (3) </option>
                                                    <option data-subtext="" value="KB.000583">
                                                        THUMB GRIP 305 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000584">
                                                        THUMB GRIP 305 SIZE S VARITEX</option>
                                                    <option data-subtext="" value="KB.000585">
                                                        WRIST DAN THUMB SUPP 722(SOFT SPORT) SIZE M VARITE</option>
                                                    <option data-subtext="" value="KB.000586">
                                                        WRIST SPLINT W/ THUMB GRIP 306 SIZE M VARITEX</option>
                                                    <option data-subtext="" value="KB.000587">
                                                        WRIST SPLINT W/ THUMB GRIP 306 SIZE XL VARITEX</option>
                                                    <option data-subtext="" value="KB.000588">
                                                        WRIST SPLINT1082 L</option>
                                                    <option data-subtext="" value="KB.000589">
                                                        WRIST SPLINT1082 M</option>
                                                    <option data-subtext="" value="KB.000590">
                                                        WRIST SPLINT1082 S</option>
                                                    <option data-subtext="" value="KB.000592">
                                                        INFUS PACK 20 WING</option>
                                                    <option data-subtext="" value="KB.000593">
                                                        BLOOD PACK 22 WING</option>
                                                    <option data-subtext="" value="KB.000594">
                                                        ETT 7 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000597">
                                                        TERMOMETER DIGITAL POLYGREEN KD 1471 </option>
                                                    <option data-subtext="" value="KB.000602">
                                                        FILAMIDE 10-0X38-6MM SPATULA DN NYL1003718</option>
                                                    <option data-subtext="" value="KB.000604">
                                                        INFUS PACK 24 WING</option>
                                                    <option data-subtext="" value="KB.000605">
                                                        SC PACK STANDARD IV18FOL16 (7 ITEM)</option>
                                                    <option data-subtext="" value="KB.000606">
                                                        SC PACK STANDARD IV20FOL18 (7 ITEM)</option>
                                                    <option data-subtext="" value="KB.000607">
                                                        MAYO GUEDEL RUSCH 3 CLEAR</option>
                                                    <option data-subtext="" value="KB.000608">
                                                        IV CHAT LAMED WITH PORT 22G</option>
                                                    <option data-subtext="" value="KB.000609">
                                                        IV CHAT LAMED WITH PORT 24G</option>
                                                    <option data-subtext="" value="KB.000610">
                                                        BIPO PAD DWS CABLE REM (KECIL)</option>
                                                    <option data-subtext="" value="KB.000611">
                                                        ETT 2 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000612">
                                                        ETT 7 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000613">
                                                        FOL CHAT RUSCH GOLD 2W 12</option>
                                                    <option data-subtext="" value="KB.000614">
                                                        NEEDLE TERUMO AGANI 27G</option>
                                                    <option data-subtext="" value="KB.000615">
                                                        ETT 6 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000616">
                                                        ETT 6,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000617">
                                                        FOL CHAT RUSCH GOLD 2W 20</option>
                                                    <option data-subtext="" value="KB.000618">
                                                        ETT 3,5 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000644">
                                                        ETT 7,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000619">
                                                        RING IMPRESARIUM NO.6</option>
                                                    <option data-subtext="" value="KB.000620">
                                                        RING IMPRESARIUM NO.8</option>
                                                    <option data-subtext="" value="KB.000621">
                                                        RING IMPRESARIUM NO.8,5</option>
                                                    <option data-subtext="" value="KB.000623">
                                                        ETT 5,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000624">
                                                        ETT 3,5 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000625">
                                                        ETT 8 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000626">
                                                        ETT 4 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000627">
                                                        MAYO GUEDEL RUSCH 1 CLEAR</option>
                                                    <option data-subtext="" value="KB.000628">
                                                        FOL CHAT RUSCH GOLD 2W 8</option>
                                                    <option data-subtext="" value="KB.000629">
                                                        INFUS SET BURETE TS M270LA TERUMO</option>
                                                    <option data-subtext="" value="KB.000630">
                                                        PAPER ECG MAC 400 80x90x250</option>
                                                    <option data-subtext="" value="KB.000631">
                                                        FEEDING TUBE TERUMO 3,5</option>
                                                    <option data-subtext="" value="KB.000632">
                                                        ETT 3,5 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000633">
                                                        ETT 4 NON KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000634">
                                                        INFUS SET STD DWS KLF GCC2</option>
                                                    <option data-subtext="" value="KB.000636">
                                                        ETT 4 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000650">
                                                        IV CHAT LAMED WITH PORT 20G</option>
                                                    <option data-subtext="" value="KB.000637">
                                                        FOL CHAT RUSCH SILICONE 2W 20</option>
                                                    <option data-subtext="" value="KB.000638">
                                                        IV CHAT WING COSMO MED 26</option>
                                                    <option data-subtext="" value="KB.000639">
                                                        POUCHES FLAT 100 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000640">
                                                        URINE BAG REMEDI PUSH FULL</option>
                                                    <option data-subtext="" value="KB.000641">
                                                        POUCHES GUSSETE 100 X 100M YPAK</option>
                                                    <option data-subtext="" value="KB.000642">
                                                        BIPO PAD ANAK CABLE REM (KECIL)</option>
                                                    <option data-subtext="" value="KB.000643">
                                                        KNEE HIGH VARICOSE 912 SIZE 1</option>
                                                    <option data-subtext="" value="KB.000645">
                                                        MASKER KF 94 REMEDI WHITE</option>
                                                    <option data-subtext="" value="KB.000647">
                                                        KAPAS 500 GRAM</option>
                                                    <option data-subtext="" value="KB.000648">
                                                        MASKER KF 94 REMEDI BLACK</option>
                                                    <option data-subtext="" value="KB.000652">
                                                        IV CHAT INFLO PLUS 20</option>
                                                    <option data-subtext="" value="KB.000653">
                                                        FOL CHAT RUSCH 2W 6 ULTRASIL</option>
                                                    <option data-subtext="" value="KB.000654">
                                                        PISAU CUKUR ANARAZOR</option>
                                                    <option data-subtext="" value="KB.000655">
                                                        FOL CHAT 2W-6FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000656">
                                                        FOL CHAT 2W-8FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000657">
                                                        FOL CHAT 2W-10FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000658">
                                                        FOL CHAT 2W-14FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000659">
                                                        FOL CHAT 2W-22FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000660">
                                                        NASAL O2 CHRONA ADULT</option>
                                                    <option data-subtext="" value="KB.000661">
                                                        KURSI RODA + COMMODE CHAIR</option>
                                                    <option data-subtext="" value="KB.000662">
                                                        IV DRESSING 6X7 SEMILLAS TRANSPPARANT (WITH NOTH)</option>
                                                    <option data-subtext="" value="KB.000663">
                                                        SUCTION CHAT WELLEAD 8</option>
                                                    <option data-subtext="" value="KB.000664">
                                                        IV CHAT ABADA WITH PORT 26G</option>
                                                    <option data-subtext="" value="KB.000674">
                                                        KERTAS LAKMUS MERAH NESCO</option>
                                                    <option data-subtext="" value="KB.000671">
                                                        VIRUZIME N</option>
                                                    <option data-subtext="" value="KB.000665">
                                                        SUCTION CHAT WELLEAD 6</option>
                                                    <option data-subtext="" value="KB.000666">
                                                        FOL CHAT 2W-24FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000667">
                                                        NELATON CHATETER STERILE REMEDI NO.10 </option>
                                                    <option data-subtext="" value="KB.000668">
                                                        NELATON CHATETER STERILE REMEDI NO.8</option>
                                                    <option data-subtext="" value="KB.000669">
                                                        ACCUPUNTURE DONGBANG 0,30 X 40</option>
                                                    <option data-subtext="" value="KB.000679">
                                                        MAYO GUEDEL 1 REMEDI</option>
                                                    <option data-subtext="" value="KB.000670">
                                                        ETT 5 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000673">
                                                        FOL CHAT 2W-18FR WELL LEAD</option>
                                                    <option data-subtext="" value="KB.000676">
                                                        COLOSTOMY BAG POUCH ADULT 82400 HOLISTER</option>
                                                    <option data-subtext="" value="KB.000697">
                                                        AMSORB PLUS/INTERSORB SODA</option>
                                                    <option data-subtext="" value="KB.000677">
                                                        GLOVE GAMMEX PF 6</option>
                                                    <option data-subtext="" value="KB.000678">
                                                        INTUBATION STYLET PASCHO 4,3</option>
                                                    <option data-subtext="" value="KB.000693">
                                                        ANIOSYEM X3</option>
                                                    <option data-subtext="" value="KB.000680">
                                                        MAYO GUEDEL 2 REMEDI</option>
                                                    <option data-subtext="" value="KB.000681">
                                                        MAYO GUEDEL 3 REMEDI</option>
                                                    <option data-subtext="" value="KB.000682">
                                                        MAYO GUEDEL 4 REMEDI</option>
                                                    <option data-subtext="" value="KB.000714">
                                                        ETT 6 KINGKING RUSCH NON CUP</option>
                                                    <option data-subtext="" value="KB.000683">
                                                        CONDOM CHATETER GEA M</option>
                                                    <option data-subtext="" value="KB.000684">
                                                        CONDOM CHATETER GEA L</option>
                                                    <option data-subtext="" value="KB.000692">
                                                        AV FISTULA NEEDLE 16G X 1-1/4</option>
                                                    <option data-subtext="" value="KB.000685">
                                                        INTUBATION STYLET PASCHO 2,2</option>
                                                    <option data-subtext="" value="KB.000686">
                                                        POUCHES Plasma Tyvek 150 x 100 M YPAK</option>
                                                    <option data-subtext="" value="KB.000687">
                                                        POUCHES FLAT 250 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000688">
                                                        POUCHES FLAT 400 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000689">
                                                        POUCHES FLAT 75 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000690">
                                                        POUCHES FLAT 150 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000691">
                                                        SILICONE FULL LENGTH INSOLE SIZE L VA542</option>
                                                    <option data-subtext="" value="KB.000708">
                                                        ME RAZOR PISAU CUKUR</option>
                                                    <option data-subtext="" value="KB.000694">
                                                        CONDOM CHATETER GEA S</option>
                                                    <option data-subtext="" value="KB.000712">
                                                        FOL CHAT RUSCH SILICONE 2W 12</option>
                                                    <option data-subtext="" value="KB.000695">
                                                        SPUIT 10 CC GID CARE</option>
                                                    <option data-subtext="" value="KB.000696">
                                                        NASAL O2 CHRONA PED</option>
                                                    <option data-subtext="" value="KB.000706">
                                                        MAYO GUEDEL 5 REMEDI</option>
                                                    <option data-subtext="" value="KB.000698">
                                                        NEEDLE TERUMO AGANI 26G</option>
                                                    <option data-subtext="" value="KB.000699">
                                                        NEEDLE TERUMO AGANI 24G</option>
                                                    <option data-subtext="" value="KB.000715">
                                                        IV CHAT COSMO MED 20</option>
                                                    <option data-subtext="" value="KB.000700">
                                                        FOL CHAT RUSCH SILICONE 2W 8</option>
                                                    <option data-subtext="" value="KB.000701">
                                                        CAVIRUB LIQUID CHG 4% (5 LTR)</option>
                                                    <option data-subtext="" value="KB.000702">
                                                        CAVIZYDE (5 LTR)</option>
                                                    <option data-subtext="" value="KB.000703">
                                                        CAVIZYME ULTRA (5 LTR)</option>
                                                    <option data-subtext="" value="KB.000704">
                                                        ETT SOFT RUBBER RED 7 RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000705">
                                                        ETT SOFT RUBBER RED 7,5 RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000707">
                                                        PISAU CUKUR SINGLE DAHLHAUSEN</option>
                                                    <option data-subtext="" value="KB.000713">
                                                        FOL CHAT RUSCH SILICONE 2W 14</option>
                                                    <option data-subtext="" value="KB.000716">
                                                        IV CHAT COSMO MED 22</option>
                                                    <option data-subtext="" value="KB.000718">
                                                        IV CHAT COSMO MED 24</option>
                                                    <option data-subtext="" value="KB.000719">
                                                        IV CHAT COSMO MED 26</option>
                                                    <option data-subtext="" value="KB.000720">
                                                        EXTENSION TUBING SET 150 CM</option>
                                                    <option data-subtext="" value="KB.000737">
                                                        IV CHAT COSMO MED 18</option>
                                                    <option data-subtext="" value="KB.000721">
                                                        MAYO GUEDEL 0 REMEDI</option>
                                                    <option data-subtext="" value="KB.000722">
                                                        POUCHES FLAT 200 X 200M ME</option>
                                                    <option data-subtext="" value="KB.000723">
                                                        ACCUPUNTURE NEDDLE 0,35 X 75</option>
                                                    <option data-subtext="" value="KB.000724">
                                                        MAYO GUEDEL RUSCH 0 CLEAR</option>
                                                    <option data-subtext="" value="KB.000725">
                                                        MAYO GUEDEL RUSCH 00 CLEAR</option>
                                                    <option data-subtext="" value="KB.000726">
                                                        MAYO GUEDEL RUSCH 000 CLEAR</option>
                                                    <option data-subtext="" value="KB.000745">
                                                        NASAL O2 ADULT LIFE R</option>
                                                    <option data-subtext="" value="KB.000732">
                                                        INFUS SET TERUMO DEWASA</option>
                                                    <option data-subtext="" value="KB.000727">
                                                        INFUS PACK 18 WING EXE</option>
                                                    <option data-subtext="" value="KB.000728">
                                                        INFUS PACK 20 WING EXE</option>
                                                    <option data-subtext="" value="KB.000729">
                                                        INFUS PACK 22 WING EXE</option>
                                                    <option data-subtext="" value="KB.000730">
                                                        INFUS PACK 24 WING EXE PLUS</option>
                                                    <option data-subtext="" value="KB.000731">
                                                        INFUS PACK 26 WING EXE PLUS</option>
                                                    <option data-subtext="" value="KB.000733">
                                                        RANSEL VERBAN M</option>
                                                    <option data-subtext="" value="KB.000734">
                                                        INFUS PACK 26 WING PLUS</option>
                                                    <option data-subtext="" value="KB.000735">
                                                        INFUS SET PED GP CARE</option>
                                                    <option data-subtext="" value="KB.000736">
                                                        INFUS PACK 24 WING PLUS</option>
                                                    <option data-subtext="" value="KB.000738">
                                                        MASKER KN95 FITCARE</option>
                                                    <option data-subtext="" value="KB.000740">
                                                        NEEDLE BD 26</option>
                                                    <option data-subtext="" value="KB.000741">
                                                        ID BAND INS CARD ANAK BLUE COSMO MED</option>
                                                    <option data-subtext="" value="KB.000742">
                                                        ID BAND INS CARD DWS BLUE COSMO MED</option>
                                                    <option data-subtext="" value="KB.000743">
                                                        IV CHAT WING COSMO MED 18</option>
                                                    <option data-subtext="" value="KB.000744">
                                                        POVIDONE 10% 60 ML OM </option>
                                                    <option data-subtext="" value="KB.000748">
                                                        BLOOD TRANSF SET DOUBLE CHAMBER KLF</option>
                                                    <option data-subtext="" value="KB.000746">
                                                        SPUIT 5 CC GID CARE</option>
                                                    <option data-subtext="" value="KB.000747">
                                                        IV CHAT WING COSMO MED 24</option>
                                                    <option data-subtext="" value="KB.000750">
                                                        STERANIOS 2%</option>
                                                    <option data-subtext="" value="KB.000749">
                                                        SPUIT 10 CC KDL</option>
                                                    <option data-subtext="" value="KB.000751">
                                                        IV CHAT ABADA WITH PORT 18G</option>
                                                    <option data-subtext="" value="KB.000752">
                                                        ACCUPUNTURE NEDDLE 0,18 X 70</option>
                                                    <option data-subtext="" value="KB.000753">
                                                        ID BAND INS CARD ANAK PINK COSMO MED</option>
                                                    <option data-subtext="" value="KB.000754">
                                                        BLOOD TRANSF SET ABADA</option>
                                                    <option data-subtext="" value="KB.000755">
                                                        REFRIGERATOR YC 80</option>
                                                    <option data-subtext="" value="KB.000756">
                                                        NEBULIZER ANAK LIFE R</option>
                                                    <option data-subtext="" value="KB.000757">
                                                        EXTENSION TUBE TERUMO SF ET 2527</option>
                                                    <option data-subtext="" value="KB.000758">
                                                        SPUIT 1 CC KDL</option>
                                                    <option data-subtext="" value="KB.000759">
                                                        SPUIT 3 CC KDL</option>
                                                    <option data-subtext="" value="KB.000760">
                                                        SPUIT 5 CC KDL</option>
                                                    <option data-subtext="" value="KB.000761">
                                                        KNEE HIGH VARICOSE 912 SIZE 7</option>
                                                    <option data-subtext="" value="KB.000775">
                                                        INFUS SET PED KDL</option>
                                                    <option data-subtext="" value="KB.000774">
                                                        KNEE BRACE HINGED STABILIZING 898</option>
                                                    <option data-subtext="" value="KB.000762">
                                                        ID BAND INS CARD DEWASA WHITE LIFE R</option>
                                                    <option data-subtext="" value="KB.000763">
                                                        ID BAND INS CARD DEWASA BLUE LIFE R</option>
                                                    <option data-subtext="" value="KB.000767">
                                                        IV CHAT ABADA WITH PORT 24G</option>
                                                    <option data-subtext="" value="KB.000791">
                                                        NELATON CHATETER STERILE REMEDI NO.14</option>
                                                    <option data-subtext="" value="KB.000768">
                                                        KASA ROLL GAUZE X-RAY 80x36 ME</option>
                                                    <option data-subtext="" value="KB.000786">
                                                        ETT 3 KINGKING RUSCH + CUP</option>
                                                    <option data-subtext="" value="KB.000792">
                                                        BLOOD PACK 24 WING</option>
                                                    <option data-subtext="" value="KB.000769">
                                                        INFUS PACK 26 WING</option>
                                                    <option data-subtext="" value="KB.000771">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CCL II 911 (2)</option>
                                                    <option data-subtext="" value="KB.000770">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CCL II 911 (1)</option>
                                                    <option data-subtext="" value="KB.000772">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CCL II 911 (4)</option>
                                                    <option data-subtext="" value="KB.000773">
                                                        KERTAS LAKMUS BIRU NESCO</option>
                                                    <option data-subtext="" value="KB.000776">
                                                        ELECTRODA DWS LIFE R</option>
                                                    <option data-subtext="" value="KB.000777">
                                                        THIGH HIGH VARICOSE STOCKING (CT) CCL I 931 (1)</option>
                                                    <option data-subtext="" value="KB.000778">
                                                        THIGH HIGH VARICOSE STOCKING (CT) CCL I 931 (2)</option>
                                                    <option data-subtext="" value="KB.000779">
                                                        THIGH HIGH VARICOSE STOCKING (CT) CCL I 931 (4)</option>
                                                    <option data-subtext="" value="KB.000780">
                                                        THIGH HIGH VARICOSE STOCKING (CT) CCL I 931 (5)</option>
                                                    <option data-subtext="" value="KB.000781">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL III 901 (1)</option>
                                                    <option data-subtext="" value="KB.000782">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL III 901 (2)</option>
                                                    <option data-subtext="" value="KB.000783">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL III 901 (3)</option>
                                                    <option data-subtext="" value="KB.000784">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL III 901 (4)</option>
                                                    <option data-subtext="" value="KB.000785">
                                                        THIGH HIGH VARICOSE STOCKING (OT) CLL III 901 (5)</option>
                                                    <option data-subtext="" value="KB.000787">
                                                        HERNIA MESH 8X15 DOLPHIN</option>
                                                    <option data-subtext="" value="KB.000790">
                                                        THREEWAY STOPCOCK GP CARE</option>
                                                    <option data-subtext="" value="KB.000788">
                                                        HERNIA MESH 30X30 DOLPHIN</option>
                                                    <option data-subtext="" value="KB.000801">
                                                        NASAL O2 CANUL CITO DEWASA</option>
                                                    <option data-subtext="" value="KB.000793">
                                                        INFUS PACK 26 WING PED</option>
                                                    <option data-subtext="" value="KB.000795">
                                                        MASKER EAR LOP MD</option>
                                                    <option data-subtext="" value="KB.000796">
                                                        IV CHAT WING COSMO MED 20</option>
                                                    <option data-subtext="" value="KB.000797">
                                                        IV CHAT WING COSMO MED 22</option>
                                                    <option data-subtext="" value="KB.000798">
                                                        KERTAS LAKMUS MERAH ASSISTENT</option>
                                                    <option data-subtext="" value="KB.000799">
                                                        CONTAINER URINE </option>
                                                    <option data-subtext="" value="KB.000805">
                                                        NASAL O2 NEONATUS LIFE R</option>
                                                    <option data-subtext="" value="KB.000803">
                                                        NASAL O2 CANUL CITO BALITA</option>
                                                    <option data-subtext="" value="KB.000802">
                                                        NASAL O2 CANUL CITO ANAK</option>
                                                    <option data-subtext="" value="KB.000804">
                                                        NASAL O2 CANUL CITO BAYI</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Cabang</label>
                                        <div class="col-md-9">
                                            <select id="cabang" name="cabang" class="select2me bs-select form-control" data-show-subtext="true" onchange="getgudang()">
                                                <optgroup label="Daftar Cabang">
                                                    <option data-subtext="" value="">-- Semua --</option>
                                                    <option data-subtext="" value="01">
                                                        PUSAT</option>
                                                    <option data-subtext="" value="02">
                                                        CAB. KRWNG</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <label class="col-md-3  control-label mt-2">Gudang</label>
                                        <div class="col-md-9">
                                            <select id="gudang" name="gudang" type="hidden" class="form-control bs-select select2me" disabled>
                                                <optgroup label="Daftar Gudang">
                                                    <option data-subtext="" value="">--- Semua ---</option>
                                                    <option data-subtext="" value="1">
                                                        GUDANG PUSAT</option>
                                                    <option data-subtext="" value="3">
                                                        Gd. KAWARANG</option>
                                                    <option data-subtext="" value="4">
                                                        New Gudang</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-actions fluid">
                            <div class="col-md-offset-3 col-md-7 text-center">
                                <a class="btn green print_laporan" onclick="javascript:window.open(_urlcetak(),'_blank');">Tampilkan</a>

                                <br />
                                <h4>
                                    <div class="err" id="resultss"></div>
                                </h4>

                                <div>
                                    <img id="proses" src="https://ajf.sistemkesehatan.id/assets/img/loading-spinner-blue.gif" class="img-responsive" style="visibility:hidden" />
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>