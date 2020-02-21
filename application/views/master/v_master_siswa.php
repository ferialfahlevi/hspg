Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Master Siswa</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#"><span>table</span></a></li>
                    <li class="active"><span>data-table</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
                    <div class="panel-heading">
                        <div class="pull-left">
                            <!-- <h6 class="panel-title txt-dark">Periode <?php echo $this->uri->segment('3');?></h6> -->
                        </div>
                        <div class="pull-right">
                            <div class="pull-left inline-block dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false" role="button" class="dropdown-toggle btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                    <li role="presentation"><a href="javascript:void(0)" id="refresh_catatan" class="refresh"><i class="icon wb-reply" aria-hidden="true"></i>Refresh</a></li>
                                <li role="presentation"><a href="<?php echo base_url('master/add_siswa');?>"><i class="icon wb-reply" aria-hidden="true"></i>Tambah Siswa</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-hover display  pb-30" >
                                        <thead>
                                            <tr>
                                                <th></th>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <!-- /Row -->
    </div>

    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2017 &copy; Magilla. Pampered by Hencework</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>
<!-- /Main Content -->

<script type="text/javascript">
    $('#refresh_catatan').on('click', function(){
        tampil_data_siswa();
    });
    tampil_data_siswa();
    function tampil_data_siswa(){
        $.ajax({
            type    : 'ajax',
            url     : '<?php echo base_url();?>master/list_siswa/',
            async   : false,
            dataType    : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>';
                    if (data[i].jenis_pendidikan == '3') {
                        html += '<td>'+"<button class='btn btn-danger btn-icon-anim btn-circle btn-sm'></button>"+'</td>';
                    } else if (data[i].jenis_pendidikan == '2') {
                        html += '<td>'+"<button class='btn btn-primary btn-icon-anim btn-circle btn-sm'></button>"+'</td>';
                    } else {
                        html += '<td>'+"<button class='btn btn-success btn-icon-anim btn-circle btn-sm'></button>"+'</td>';
                    }
                    html +=
                        '<td>'+data[i].no_induk+'</td>'+
                        '<td>'+data[i].nama_siswa+'</td>'+
                        '<td>'+"<button class='btn btn-success btn-icon-anim btn-circle btn-sm'>"+data[i].nama_kelas+"</button>"+'</td>'+
                        '<td>';
                        if (data[i].status == 'TIDAK AKTIF') {
                            html += '<div class="col-md-1"><a href="javascript:;"><span class="label label-danger">TIDAK AKTIF</span></a></div>';
                        } else {
                            html += '<div class="col-md-1"><a href="javascript:;"><span class="label label-success">AKTIF</span></a></div>';
                        }
                        html += '</td>'+
                        // '<td><a href="javascript:;" class="item_edit" data="'+data[i].id_siswa+'">Detail</a></td>'+
                        '<td><div class="col-md-1"><a href="<?php echo base_url('master/siswa/');?>'+data[i].id_siswa+'"><span class="label label-primary">Detail</span></a></div>'+
                        '</tr>';

                }
                $('#show_data').html(html);
            }
        });
    }
</script>