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
                    List Pendidik
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
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTable_pendidik">
                        <thead>
                            <tr>
                                <th>Nomor Induk</th>
                                <th>Nama Pendidik</th>
                                <th>Mata Pelajaran</th>
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
<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Detail Pendidik</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="modal-body">
                    <input name="id_control_list" id="id_control_list2" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK Pendidik</label>
                        <div class="col-xs-9">
                            <input name="nik_pendidik" id="nik_pendidik2" class="form-control" type="text" placeholder="NIK Pendidik" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pendidik</label>
                        <div class="col-xs-9">
                            <input name="nama_pendidik" id="nama_pendidik2" class="form-control" type="text" placeholder="Nama Pendidik" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin Pendidik</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="jk_pendidik" style="width:335px;">
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                <option value="L"><p name="jk_pendidik"></p></option>
                            </select>
                            <input name="jk_pendidik" id="jk_pendidik2" class="form-control" type="text" placeholder="Jenis Kelamin Pendidik" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Mata Pelajaran Utama</label>
                        <div class="col-xs-9">
                            <input name="mata_pelajaran" id="mata_pelajaran2" class="form-control" type="text" placeholder="Mata Pelajaran Utama" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat Pendidik</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" rows="3" style="width:335px;" name="alamat_pendidik" id="alamat_pendidik2"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Telp. Pendidik</label>
                        <div class="col-xs-9">
                            <input name="telp_pendidik" id="telp_pendidik2" class="form-control" type="text" placeholder="Telp. Pendidik" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email Pendidik</label>
                        <div class="col-xs-9">
                            <input name="email_pendidik" id="email_pendidik2" class="form-control" type="text" placeholder="Email Pendidik" style="width:335px;">
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
        tampil_data_pendidik();
        $('#dataTable_pendidik').dataTable();
        function tampil_data_pendidik() {
            $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url('master/list_pendidik');?>',
                async   : false,
                dataType: 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+data[i].nik_pendidik+'</td>'+
                        '<td>'+data[i].nama_pendidik+'</td>'+
                        '<td>'+data[i].mata_pelajaran+'</td>'+
                        '<td>Status</td>'+
                        '<td><a href="javascript:;" class="item_edit" data="'+data[i].id_pendidik+'">Detail</a></td>'+
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
                url  : "<?php echo base_url();?>master/get_pendidik_detail",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(){

                        $('#ModalaEdit').modal('show');
                        $('[name="id_pendidik"]').val(data.id_pendidik);
                        $('[name="nik_pendidik"]').val(data.nik_pendidik);
                        $('[name="nama_pendidik"]').val(data.nama_pendidik);
                        $('[name="jk_pendidik"]').val(data.jk_pendidik);
                        $('[name="mata_pelajaran"]').val(data.mata_pelajaran);
                        $('[name="alamat_pendidik"]').val(data.alamat_pendidik);
                        $('[name="telp_pendidik"]').val(data.telp_pendidik);
                        $('[name="email_pendidik"]').val(data.email_pendidik);
                        $('#jk_pendidik').html(data.jk_pendidik);
                    });
                }
            });
            return false;
        });
    });
</script>