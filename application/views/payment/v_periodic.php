<style type="text/css">
    .borderless {
        border: 0;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment Control</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Invoice Control List (<?php echo $this->uri->segment('3');?>)
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Pilih Periode</label>
                        <select class="form-control" id="periode">
                            <option>-- Pilih Periode --</option>
                        </select>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="mydata">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tunggakan</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- MODAL EDIT -->
    <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    <div class="pull-left">
                        <h3 class="modal-title" id="myModalLabel">Detail Pembayaran Siswa</h3>
                    </div>
                    <div class="pull-right">
                        <div id="update_spp">
                            <div class="loadingio-spinner-rolling-fauj2zq9gid"><div class="ldio-248v6shlhza"><div></div></div></div>
                        </div>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Option
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li id="invoice">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" method="post">
                    <div class="modal-body">
                        <input name="id_control_list" id="id_control_list2" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Periode</label>
                            <div class="col-xs-9">
                                <input name="periode_control_list" id="periode_control_list2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Siswa</label>
                            <div class="col-xs-9">
                                <input name="nama_siswa" id="nama_siswa2" class="form-control" type="text" placeholder="ID Siswa" style="width:335px;" readonly>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Status</th>
                                            <th>Quick Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h6>Pendaftaran</h6></td>
                                            <td>
                                                <input name="pendaftaran" id="pendaftaran2" class="form-control borderless" type="text" placeholder="Pendaftaran" style="width:335px;" required>
                                                <input name="pendaftaran3" id="pendaftaran3" class="form-control borderless" type="hidden" placeholder="Pendaftaran" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="pendaftaran"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Pangkal</h6></td>
                                            <td>
                                                <input name="pangkal" id="pangkal2" class="form-control borderless" type="text" placeholder="Pangkal" style="width:335px;" required>
                                                <input name="pangkal3" id="pangkal3" class="form-control borderless" type="hidden" placeholder="Pangkal" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="pangkal"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Heregistrasi</h6></td>
                                            <td>
                                                <input name="heregistrasi" id="heregistrasi2" class="form-control borderless" type="text" placeholder="Heregistrasi" style="width:335px;" required>
                                                <input name="heregistrasi3" id="heregistrasi3" class="form-control borderless" type="hidden" placeholder="Heregistrasi" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="heregistrasi"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Ujian</h6></td>
                                            <td>
                                                <input name="ujian" id="ujian2" class="form-control borderless" type="text" placeholder="Ujian" style="width:335px;" required>
                                                <input name="ujian3" id="ujian3" class="form-control borderless" type="hidden" placeholder="Ujian" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="ujian"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Uang Kegiatan 1</h6></td>
                                            <td>
                                                <input name="kegiatan_1" id="kegiatan_12" class="form-control borderless" type="text" placeholder="Uang kegiatan 1" style="width:335px;" required>
                                                <input name="kegiatan_13" id="kegiatan_13" class="form-control borderless" type="hidden" placeholder="Uang kegiatan 1" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_1"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Uang Kegiatan 2</h6></td>
                                            <td>
                                                <input name="kegiatan_2" id="kegiatan_22" class="form-control borderless" type="text" placeholder="Uang kegiatan 2" style="width:335px;" required>
                                                <input name="kegiatan_23" id="kegiatan_23" class="form-control borderless" type="hidden" placeholder="Uang kegiatan 2" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td> 
                                                <button class="btn btn-success btn-circle" id="btn_update" data-toggle='tooltip' data-placement='top' title='Update Data Payment?'><i class="fa fa-check"></i></button>
                                                <!-- <button class="btn btn-info" id="btn_update">Update</button> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">SPP Siswa Periode <?php echo $this->uri->segment('3');?></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Bulan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $month = array('juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'januari', 'februari', 'maret', 'april', 'mei', 'juni');

                                                foreach ($month as $bulan) {
                                                    $months = ucfirst($bulan);
                                                    echo 
                                                    "<tr>
                                                    <td>$months</td>
                                                    <td id='$bulan'></td>
                                                    <td>
                                                    <button type='button' class='btn btn-warning btn-circle btn_approve' data-toggle='tooltip' data-placement='top' title='Quick Approve SPP?' data='$bulan'><i class='fa fa-edit'></i></button>
                                                    </td>
                                                    </tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>


                    </div>

                </form>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
            </div>
        </div>
    </div>
    <!--END MODAL EDIT-->
    <!-- MODAL EDIT -->
    <div class="modal fade" id="ModalInvoice" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    <div class="pull-left">
                        <h3 class="modal-title" id="myModalLabel">Detail Pembayaran Siswa</h3>
                    </div>
                    <div class="pull-right">
                        <div id="update_spp">
                            <div class="loadingio-spinner-rolling-fauj2zq9gid"><div class="ldio-248v6shlhza"><div></div></div></div>
                        </div>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    </div>
                </div>
                <form class="form-horizontal" method="post">
                    <div class="modal-body">
                        <input name="id_control_list" id="id_control_list2" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Periode</label>
                            <div class="col-xs-9">
                                <input name="periode_control_list" id="periode_control_list2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Siswa</label>
                            <div class="col-xs-9">
                                <input name="nama_siswa" id="nama_siswa2" class="form-control" type="text" placeholder="ID Siswa" style="width:335px;" readonly>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Status</th>
                                            <th>Quick Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h6>Pendaftaran</h6></td>
                                            <td>
                                                <input name="pendaftaran" id="pendaftaran2" class="form-control borderless" type="text" placeholder="Pendaftaran" style="width:335px;" required>
                                                <input name="pendaftaran3" id="pendaftaran3" class="form-control borderless" type="hidden" placeholder="Pendaftaran" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="pendaftaran"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Pangkal</h6></td>
                                            <td>
                                                <input name="pangkal" id="pangkal2" class="form-control borderless" type="text" placeholder="Pangkal" style="width:335px;" required>
                                                <input name="pangkal3" id="pangkal3" class="form-control borderless" type="hidden" placeholder="Pangkal" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="pangkal"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Heregistrasi</h6></td>
                                            <td>
                                                <input name="heregistrasi" id="heregistrasi2" class="form-control borderless" type="text" placeholder="Heregistrasi" style="width:335px;" required>
                                                <input name="heregistrasi3" id="heregistrasi3" class="form-control borderless" type="hidden" placeholder="Heregistrasi" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="heregistrasi"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Ujian</h6></td>
                                            <td>
                                                <input name="ujian" id="ujian2" class="form-control borderless" type="text" placeholder="Ujian" style="width:335px;" required>
                                                <input name="ujian3" id="ujian3" class="form-control borderless" type="hidden" placeholder="Ujian" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="ujian"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Uang Kegiatan 1</h6></td>
                                            <td>
                                                <input name="kegiatan_1" id="kegiatan_12" class="form-control borderless" type="text" placeholder="Uang kegiatan 1" style="width:335px;" required>
                                                <input name="kegiatan_13" id="kegiatan_13" class="form-control borderless" type="hidden" placeholder="Uang kegiatan 1" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_1"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Uang Kegiatan 2</h6></td>
                                            <td>
                                                <input name="kegiatan_2" id="kegiatan_22" class="form-control borderless" type="text" placeholder="Uang kegiatan 2" style="width:335px;" required>
                                                <input name="kegiatan_23" id="kegiatan_23" class="form-control borderless" type="hidden" placeholder="Uang kegiatan 2" style="width:335px;" required>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">SPP Siswa Periode <?php echo $this->uri->segment('3');?></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Bulan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $month = array('juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'januari', 'februari', 'maret', 'april', 'mei', 'juni');

                                                foreach ($month as $bulan) {
                                                    $months = ucfirst($bulan);
                                                    echo 
                                                    "<tr>
                                                    <td>$months</td>
                                                    <td id='$bulan'></td>
                                                    <td>
                                                    <button type='button' class='btn btn-warning btn-circle btn_approve' data-toggle='tooltip' data-placement='top' title='Quick Approve SPP?' data='$bulan'><i class='fa fa-edit'></i></button>
                                                    </td>
                                                    </tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info" id="btn_update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL EDIT-->
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#update_spp').hide();
        tampil_data_list();
        dropdown_periode();
        $('#mydata').dataTable();

        $('#periode').on('change', function() {
            var qID = this.value;
            $(location).attr('href', "<?php echo base_url('payment/periodic/');?>"+qID);
        });

        function dropdown_periode() {
            $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url('master/list_periode');?>',
                async   : false,
                dataType: 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        $('#periode').append(new Option(data[i].nama_periode, data[i].periode));
                    }
                }
            });
        }

        function tampil_data_list(){
            $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url();?>payment/list_control/<?php echo $this->uri->segment('3');?>',
                async   : false,
                dataType    : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+data[i].nama_siswa+'</td>'+

                        '<td></td>'+
                        '<td></td>'+
                        '<td><a href="javascript:;" class="item_edit" data="'+data[i].no_induk+'">Detail</a></td>'+
                        '</tr>';

                    }
                    $('#show_data').html(html);
                }
            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id      = $(this).attr('data');
            var periode = '<?php echo $this->uri->segment('3');?>';
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url();?>payment/get_siswa_detail",
                dataType : "JSON",
                data : {id:id, periode:periode},
                success: function(data){
                    $.each(data,function(){
                        if (data.pendaftaran == '0') {
                            pendaftaran = "-";
                        } else if (data.pendaftaran == '1') {
                            pendaftaran = "SUDAH"
                        } else {
                            pendaftaran = data.pendaftaran;
                        }

                        if (data.pangkal == '0') {
                            pangkal = "-";
                        } else if (data.pangkal == '1') {
                            pangkal = "SUDAH"
                        } else {
                            pangkal = data.pangkal;
                        }

                        if (data.heregistrasi == '0') {
                            heregistrasi = "-";
                        } else if (data.heregistrasi == '1') {
                            heregistrasi = "SUDAH"
                        } else {
                            heregistrasi = data.heregistrasi;
                        }

                        if (data.ujian == '0') {
                            ujian = "-";
                        } else if (data.ujian == '1') {
                            ujian = "SUDAH"
                        } else {
                            ujian = data.ujian;
                        }

                        if (data.kegiatan_1 == '0') {
                            kegiatan_1 = "-";
                        } else if (data.kegiatan_1 == '1') {
                            kegiatan_1 = "SUDAH"
                        } else {
                            kegiatan_1 = data.kegiatan_1;
                        }

                        if (data.kegiatan_2 == '0') {
                            kegiatan_2 = "-";
                        } else if (data.kegiatan_2 == '1') {
                            kegiatan_2 = "SUDAH"
                        } else {
                            kegiatan_2 = data.kegiatan_2;
                        }


                        $('#ModalaEdit').modal('show');
                        $('[name="id_control_list"]').val(data.id_control_list);
                        $('[name="periode_control_list"]').val(data.periode_control_list);
                        $('[name="no_induk"]').val(data.no_induk);
                        $('[name="nama_siswa"]').val(data.nama_siswa);
                        $('[name="pendaftaran"]').val(pendaftaran);
                        $('[name="pangkal"]').val(pangkal);
                        $('[name="heregistrasi"]').val(heregistrasi);
                        $('[name="ujian"]').val(ujian);
                        $('[name="kegiatan_1"]').val(kegiatan_1);
                        $('[name="kegiatan_2"]').val(kegiatan_2);

                        $('[name="pendaftaran3"]').val(data.pendaftaran);
                        $('[name="pangkal3"]').val(data.pangkal);
                        $('[name="heregistrasi3"]').val(data.heregistrasi);
                        $('[name="ujian3"]').val(data.ujian);
                        $('[name="kegiatan_13"]').val(data.kegiatan_1);
                        $('[name="kegiatan_23"]').val(data.kegiatan_2);

                        if (data.spp_juli == '0') {
                            juli = "<p class='fa fa-times'></p>"
                        } else if (data.spp_juli == '1') {
                            juli = "<p class='fa fa-check'></p>"
                        } else {
                            juli = data.spp_juli;
                        }

                        if (data.spp_agustus == '0') {
                            agustus = "<p class='fa fa-times'></p>"
                        } else if (data.spp_agustus == '1') {
                            agustus = "<p class='fa fa-check'></p>"
                        } else {
                            agustus = data.spp_agustus;
                        }

                        if (data.spp_september == '0') {
                            september = "<p class='fa fa-times'></p>"
                        } else if (data.spp_september == '1') {
                            september = "<p class='fa fa-check'></p>"
                        } else {
                            september = data.spp_september;
                        }

                        if (data.spp_oktober == '0') {
                            oktober = "<p class='fa fa-times'></p>"
                        } else if (data.spp_oktober == '1') {
                            oktober = "<p class='fa fa-check'></p>"
                        } else {
                            oktober = data.spp_oktober;
                        }

                        if (data.spp_november == '0') {
                            november = "<p class='fa fa-times'></p>"
                        } else if (data.spp_november == '1') {
                            november = "<p class='fa fa-check'></p>"
                        } else {
                            november = data.spp_november;
                        }

                        if (data.spp_desember == '0') {
                            desember = "<p class='fa fa-times'></p>"
                        } else if (data.spp_desember == '1') {
                            desember = "<p class='fa fa-check'></p>"
                        } else {
                            desember = data.spp_desember;
                        }

                        if (data.spp_januari == '0') {
                            januari = "<p class='fa fa-times'></p>"
                        } else if (data.spp_januari == '1') {
                            januari = "<p class='fa fa-check'></p>"
                        } else {
                            januari = data.spp_januari;
                        }

                        if (data.spp_februari == '0') {
                            februari = "<p class='fa fa-times'></p>"
                        } else if (data.spp_februari == '1') {
                            februari = "<p class='fa fa-check'></p>"
                        } else {
                            februari = data.spp_februari;
                        }

                        if (data.spp_maret == '0') {
                            maret = "<p class='fa fa-times'></p>"
                        } else if (data.spp_maret == '1') {
                            maret = "<p class='fa fa-check'></p>"
                        } else {
                            maret = data.spp_maret;
                        }

                        if (data.spp_april == '0') {
                            april = "<p class='fa fa-times'></p>"
                        } else if (data.spp_april == '1') {
                            april = "<p class='fa fa-check'></p>"
                        } else {
                            april = data.spp_april;
                        }

                        if (data.spp_mei == '0') {
                            mei = "<p class='fa fa-times'></p>"
                        } else if (data.spp_mei == '1') {
                            mei = "<p class='fa fa-check'></p>"
                        } else {
                            mei = data.spp_mei;
                        }

                        if (data.spp_juni == '0') {
                            juni = "<p class='fa fa-times'></p>"
                        } else if (data.spp_juni == '1') {
                            juni = "<p class='fa fa-check'></p>"
                        } else {
                            juni = data.spp_juni;
                        }

                        $('#nama').html(data.nama_siswa);
                        $('#juli').html(juli);
                        $('#agustus').html(agustus);
                        $('#september').html(september);
                        $('#oktober').html(oktober);
                        $('#november').html(november);
                        $('#desember').html(desember);
                        $('#januari').html(januari);
                        $('#februari').html(februari);
                        $('#maret').html(maret);
                        $('#april').html(april);
                        $('#mei').html(mei);
                        $('#juni').html(juni);
                        $('#invoice').html('<a href="<?php echo base_url('payment/invoice/');?>'+data.id_control_list+'" id="generate_invoice" data="coba">Generate Invoice</a>');

                    });
}
});
return false;
});

        //Update Barang
        $('#btn_update').on('click',function(){
            var id_control_list=$('#id_control_list2').val();


            if ($('#pendaftaran2').val() == 'SUDAH') {
                var pendaftaran=$('#pendaftaran3').val();
            } else {
                var pendaftaran=$('#pendaftaran2').val();
            }

            if ($('#pangkal2').val() == 'SUDAH') {
                var pangkal=$('#pangkal3').val();
            } else {
                var pangkal=$('#pangkal2').val();
            }

            if ($('#heregistrasi2').val() == 'SUDAH') {
                var heregistrasi=$('#heregistrasi3').val();
            } else {
                var heregistrasi=$('#heregistrasi2').val();
            }

            if ($('#ujian2').val() == 'SUDAH') {
                var ujian=$('#ujian3').val();
            } else {
                var ujian=$('#ujian2').val();
            }

            if ($('#kegiatan_12').val() == 'SUDAH') {
                var kegiatan_1=$('#kegiatan_13').val();
            } else {
                var kegiatan_1=$('#kegiatan_12').val();
            }

            if ($('#kegiatan_22').val() == 'SUDAH') {
                var kegiatan_2=$('#kegiatan_23').val();
            } else {
                var kegiatan_2=$('#kegiatan_22').val();
            }

            var r = confirm("Apakah anda yakin untuk mengupdate pembayaran?");
            if (r == true) {
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('payment/update_pembayaran')?>",
                    dataType : "JSON",
                    data : {id_control_list:id_control_list, pendaftaran:pendaftaran, pangkal:pangkal, heregistrasi:heregistrasi, ujian:ujian, kegiatan_1:kegiatan_1, kegiatan_2:kegiatan_2},
                    success: function(data){
                        $('[name="periode_control_list"]').val("");
                        $('[name="nama_siswa"]').val("");
                        $('[name="pendaftaran"]').val("");
                        $('[name="pangkal"]').val("");
                        $('[name="heregistrasi"]').val("");
                        $('[name="ujian"]').val("");
                        $('[name="kegiatan_1"]').val("");
                        $('[name="kegiatan_2"]').val("");
                        $('#ModalaEdit').modal('hide');
                        alert("Sukses Mengupdate Pembayaran");
                        tampil_data_list();
                    }
                });
            }
            return false;
        });
        $('#generate_invoice').on('click', function(){
            var id=$(this).attr('data');
            alert(id);
        });
        //APPROVE
        $('.btn_approve').on('click', function(){

            var r = confirm("Apakah anda yakin untuk meng-approve spp?");
            if (r == true) {
                var id=$(this).attr('data');
                var id_control_list=$('#id_control_list2').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('payment/approve_spp')?>",
                    dataType : "JSON",
                    data : {id:id, id_control_list:id_control_list},
                    success: function(data){
                        // $('#ModalaEdit').modal('hide');
                        $('#'+id).html("<p class='fa fa-check'></p>");
                        // alert("Sukses meng-approve SPP");
                        tampil_data_list();
                    },
                    error: function(){
                        alert('Error to update SPP');
                        $('#'+id).html("<p class='fa fa-times'></p>");
                    }
                });
            }

            return false;
            /*$('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);*/
        });
        $('.btn_quick').on('click', function(){
            var id=$(this).attr('data');
            var id_control_list=$('#id_control_list2').val();
            var r = confirm("Apakah anda yakin untuk meng-approve pembayaran "+id+" ?");
            if (r == true) {
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('payment/approve_pembayaran')?>",
                    dataType : "JSON",
                    data : {id:id, id_control_list:id_control_list},
                    beforeSend : function() {
                        $('#update_spp').show();
                    },
                    success: function(data){
                        $('[name='+id+']').val("SUDAH");
                        // $('#ModalaEdit').modal('hide');
                        // $('#'+id).html("<p class='fa fa-check'></p>");
                        $('#update_spp').hide();
                        // alert("Sukses meng-update pembayaran "+id);
                        tampil_data_list();
                    },
                    error: function(){
                        alert('Error to update SPP');
                    }
                });
            }
            return false;
        });

    });
</script>