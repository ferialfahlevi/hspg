<style type="text/css">
    .borderless {
        border: 0;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Master Data - <?php echo ucfirst($this->uri->segment('2'));?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Siswa
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Tambah
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#" data-toggle="modal" data-target="#ModalTambah">Tambah Data Siswa</a>
                                </li>
                                <li><a href="#">Tambah Siswa Baru(On develop)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- <table class="table table-striped table-bordered table-hover" id="data_pendidik">
                        <thead>
                            <tr>
                                <th>No Induk</th>
                                <th>Nama</th>
                                <th>Mata Pelajaran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_pendidik">

                        </tbody>
                    </table> -->
                    <!-- /.table-responsive -->
                    <table width="100%" class="table table-bordered" id="dataTable_pendidik">
                        <thead>
                            <tr>
                                <th>Nomor Induk</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Status</th>
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
</div>
<!-- MODAL TAMBAH -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="pull-left">
                    <h3 class="modal-title" id="myModalLabel">Tambah Siswa</h3>
                </div>
            </div>
            <form class="form-horizontal" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor Induk Siswa</label>
                        <div class="col-xs-9">
                            <input name="no_induk_tambah" id="no_induk_tambah" class="form-control" type="text" placeholder="xx.xx.xx.xxx beserta titik" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Siswa</label>
                        <div class="col-xs-9">
                            <input name="nama_siswa_tambah" id="nama_siswa_tambah" class="form-control" type="text" placeholder="Nama Siswa" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kelas</label>
                        <div class="col-xs-9">
                            <select name="id_kelas_tambah" id="id_kelas_tambah" class="form-control" style="width:335px;">
                                <option value="--">-- Kelas --</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                                <option value="9">IX</option>
                                <option value="10P">X IPA</option>
                                <option value="10S">X IPS</option>
                                <option value="11P">XI IPA</option>
                                <option value="11S">XI IPS</option>
                                <option value="12P">XII IPA</option>
                                <option value="12S">XII IPS</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                            <select name="jk_siswa_tambah" id="jk_siswa_tambah" class="form-control" style="width:335px;">
                                <option value="--">-- Jenis Kelamin --</option>
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Agama</label>
                        <div class="col-xs-9">
                            <select name="agama_tambah" id="agama_tambah" class="form-control" style="width:335px;">
                                <option value="--">-- Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan Darah</label>
                        <div class="col-xs-9">
                            <select name="gol_darah_tambah" id="gol_darah_tambah" class="form-control" style="width:335px;">
                                <option value="--">-- Gol. Darah --</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tempat Lahir</label>
                        <div class="col-xs-9">
                            <input name="tempat_lahir_tambah" id="tempat_lahir_tambah" class="form-control" type="text" placeholder="Jakarta" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Lahir</label>
                        <div class="col-xs-9">
                            <input name="tanggal_lahir_tambah" id="tanggal_lahir_tambah" class="form-control" type="date" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat Siswa</label>
                        <div class="col-xs-9">
                            <textarea name="alamat_siswa_tambah" id="alamat_siswa_tambah" rows="3" class="form-control" style="width:335px;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Orang Tua/Wali</label>
                        <div class="col-xs-9">
                            <input name="wali_tambah" id="wali_tambah" class="form-control" type="text" placeholder="John/Lisa" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Telp.</label>
                        <div class="col-xs-9">
                            <input name="telp_tambah" id="telp_tambah" class="form-control" type="text" placeholder="08xxxxxxxxxx" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                            <input name="email_tambah" id="email_tambah" class="form-control" type="email" placeholder="john@gmail.com" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Pendidikan</label>
                        <div class="col-xs-9">
                            <select name="jenis_pendidikan_tambah" id="jenis_pendidikan_tambah" class="form-control" style="width:335px;">
                                <option value="0">-- Jenis Pendidikan --</option>
                                <option value="1">REGULER</option>
                                <option value="2">DI RUMAH</option>
                                <option value="3">TANPA GURU</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <select name="status_tambah" id="status_tambah" class="form-control" style="width:335px;">
                                <option value="0">-- Status --</option>
                                <option value="AKTIF">AKTIF</option>
                                <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                <option value="LULUS">LULUS</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p id="errorMessage"></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <div id="insert_siswa">
                        <div class="loadingio-spinner-rolling-fauj2zq9gid"><div class="ldio-248v6shlhza"><div></div></div></div>
                    </div>
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_insert">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL TAMBAH-->
<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="pull-left">
                    <h3 class="modal-title" id="myModalLabel">Detail Siswa</h3>
                </div>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Option
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Ubah Status Siswa Menjadi Lulus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Generate Payment
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu" id="list_periode">
                        </ul>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="post">
                <div class="modal-body">
                    <input name="id_control_list" id="id_control_list2" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor Induk Siswa</label>
                        <div class="col-xs-9">
                            <input name="no_induk" id="no_induk2" class="form-control" type="text" placeholder="Nomor Induk Siswa" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Siswa</label>
                        <div class="col-xs-9">
                            <input name="nama_siswa" id="nama_siswa2" class="form-control" type="text" placeholder="Nama Siswa" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Quick Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><h6>Kelas</h6></td>
                                        <td>
                                            <input name="nama_kelas" id="nama_kelas2" class="form-control borderless" type="text" placeholder="Kelas" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="pendaftaran"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Jenis Kelamin</h6></td>
                                        <td>
                                            <input name="jk_siswa" id="jk_siswa2" class="form-control borderless" type="text" placeholder="Jenis Kelamin" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="pangkal"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Agama</h6></td>
                                        <td>
                                            <input name="agama" id="agama2" class="form-control borderless" type="text" placeholder="Agama" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="heregistrasi"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Golongan Darah</h6></td>
                                        <td>
                                            <input name="gol_darah" id="gol_darah2" class="form-control borderless" type="text" placeholder="Golongan Darah" style="width:335px;">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="ujian"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Tempat Lahir</h6></td>
                                        <td>
                                            <input name="tempat_lahir" id="tempat_lahir2" class="form-control borderless" type="text" placeholder="Tempat Lahir" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_1"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Tanggal Lahir</h6></td>
                                        <td>
                                            <input name="tanggal_lahir" id="tanggal_lahir2" class="form-control borderless" type="text" placeholder="Tanggal Lahir" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Alamat Siswa</h6></td>
                                        <td>
                                            <input name="alamat_siswa" id="alamat_siswa2" class="form-control borderless" type="text" placeholder="Alamat Siswa" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Orang Tua/Wali Siswa</h6></td>
                                        <td>
                                            <input name="wali" id="wali2" class="form-control borderless" type="text" placeholder="Wali" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Telp.</h6></td>
                                        <td>
                                            <input name="telp" id="telp2" class="form-control borderless" type="text" placeholder="Telp" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td>
                                            <input name="email" id="email2" class="form-control borderless" type="email" placeholder="Email" style="width:335px;">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Status</h6></td>
                                        <td>
                                            <input name="status" id="status2" class="form-control borderless" type="text" placeholder="Status" style="width:335px;" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Jenis Pendidikan</h6></td>
                                        <td>
                                            <select class="form-control borderless" style="width:335px;" id="jenis_pendidikan2">

                                            </select>
                                            <!-- <input name="jenis_pendidikan" id="jenis_pendidikan2" class="form-control borderless" type="text" placeholder="Jenis Pendidikan" style="width:335px;" required> -->
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn_quick" data="kegiatan_2"><i class="fa fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#insert_siswa').hide();
        tampil_data_pendidik();
        dropdown_periode();
        // $('#coba1').append('<div class="loadingio-spinner-rolling-fauj2zq9gid"><div class="ldio-248v6shlhza"><div></div></div></div>');
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
                        html +=
                        '<li><a href="javascript:;" class="add_periode" data="'+data[i].periode+'">'+data[i].nama_periode+'</a>';
                    }
                    $('#list_periode').html(html);
                }
            });
        }

        

        $('#dataTable_pendidik').dataTable();

        //Simpan Barang
        $('#btn_insert').on('click',function(){
            var no_induk=$('[name="no_induk_tambah"]').val();
            var nama_siswa=$('[name="nama_siswa_tambah"]').val();
            var id_kelas=$('[name="id_kelas_tambah"]').val();
            var jk_siswa=$('[name="jk_siswa_tambah"]').val();
            var agama=$('[name="agama_tambah"]').val();
            var gol_darah=$('[name="gol_darah_tambah"]').val();
            var tempat_lahir=$('[name="tempat_lahir_tambah"]').val();
            var tanggal_lahir=$('[name="tanggal_lahir_tambah"]').val();
            var alamat_siswa=$('[name="alamat_siswa_tambah"]').val();
            var wali=$('[name="wali_tambah"]').val();
            var telp=$('[name="telp_tambah"]').val();
            var email=$('[name="email_tambah"]').val();
            var jenis_pendidikan=$('[name="jenis_pendidikan_tambah"]').val();
            var status=$('[name="status_tambah"]').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('master/update_siswa')?>",
                dataType : "JSON",
                data : {no_induk:no_induk , nama_siswa:nama_siswa, id_kelas:id_kelas, jk_siswa:jk_siswa, agama:agama, gol_darah:gol_darah, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir, alamat_siswa:alamat_siswa, wali:wali, telp:telp, email:email, jenis_pendidikan:jenis_pendidikan, status:status},
                beforeSend : function() {
                    $('#insert_siswa').show();
                },
                success: function(data){
                    alert('sukses!');
                    $('#insert_siswa').hide();
                    tampil_data_pendidik();
                },
                error: function(xhr, status, error){
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    // alert('Error - ' + errorMessage);
                    $('#errorMessage').html(errorMessage);
                }

            });
            return false;
        });

        function tampil_data_pendidik() {
            $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url('master/list_siswa');?>',
                async   : false,
                dataType: 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        if (data[i].jenis_pendidikan == '3') {
                            html += '<tr class="danger">'
                        } else if (data[i].jenis_pendidikan == '2') {
                            html += '<tr class="info">'
                        } else {
                            html += '<tr>'
                        }
                        html +=
                        '<td>'+data[i].no_induk+'</td>'+
                        '<td>'+data[i].nama_siswa+'</td>'+
                        '<td>'+data[i].nama_kelas+'</td>'+
                        '<td>'+data[i].status+'</td>'+
                        '<td><a href="javascript:;" class="item_edit" data="'+data[i].id_siswa+'">Detail</a></td>'+
                        '</tr>';

                    }
                    $('#show_data').html(html);
                }
            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id      = $(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url();?>master/get_siswa_detail",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(){

                        $('#ModalaEdit').modal('show');
                        $('[name="no_induk"]').val(data.no_induk);
                        $('[name="nama_siswa"]').val(data.nama_siswa);
                        $('[name="nama_kelas"]').val(data.nama_kelas);
                        $('[name="id_kelas"]').val(data.id_kelas);
                        $('[name="jk_siswa"]').val(data.jk_siswa);
                        $('[name="agama"]').val(data.agama);
                        $('[name="gol_darah"]').val(data.gol_darah);
                        $('[name="tempat_lahir"]').val(data.tempat_lahir);
                        $('[name="tanggal_lahir"]').val(data.tanggal_lahir);
                        $('[name="alamat_siswa"]').val(data.alamat_siswa);
                        $('[name="wali"]').val(data.wali);
                        $('[name="telp"]').val(data.telp);
                        $('[name="email"]').val(data.email);
                        $('[name="status"]').val(data.status);
                        $('[name="jenis_pendidikan"]').val(data.jenis_pendidikan);
                        if (data.jenis_pendidikan == '3') {
                            pilihan_pendidikan = 'TANPA GURU';
                        } else if (data.jenis_pendidikan == '2'){
                            pilihan_pendidikan = 'BELAJAR DIRUMAH';
                        } else if (data.jenis_pendidikan == '1') {
                            pilihan_pendidikan = 'REGULER';
                        }
                        // $('#jenis_pendidikan2').append(new Option(pilihan_pendidikan, data.jenis_pendidikan));
                    });
                    $('#jenis_pendidikan2').append(new Option(pilihan_pendidikan, data.jenis_pendidikan));
                    $('#jenis_pendidikan2').append(new Option('DI RUMAH', '2'));
                    $('#jenis_pendidikan2').append(new Option('TANPA GURU','3'));
                    /*$('#jenis_pendidikan2')
                        .append($("<option></option>")
                            .attr("value",pilihan_pendidikan)
                            .text(pilihan_pendidikan));*/
                        }
                    });
            return false;
        });
    });
</script>