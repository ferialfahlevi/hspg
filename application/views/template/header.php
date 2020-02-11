<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="<?php echo base_url();?>assets/dashboard/vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        @keyframes ldio-h6jgeguck7v {
          0% { transform: translate(-50%,-50%) rotate(0deg); }
          100% { transform: translate(-50%,-50%) rotate(360deg); }
      }
      .ldio-h6jgeguck7v div {
          position: absolute;
          width: 60px;
          height: 60px;
          border: 10px solid #000000;
          border-top-color: transparent;
          border-radius: 50%;
      }
      .ldio-h6jgeguck7v div {
          animation: ldio-h6jgeguck7v 1s linear infinite;
          top: 50px;
          left: 50px
      }
      .loadingio-spinner-rolling-9v5cswxyf4i {
          width: 20px;
          height: 20px;
          display: inline-block;
          overflow: hidden;
          background: none;
      }
      .ldio-h6jgeguck7v {
          width: 100%;
          height: 100%;
          position: relative;
          transform: translateZ(0) scale(0.2);
          backface-visibility: hidden;
          transform-origin: 0 0; /* see note above */
      }
      .ldio-h6jgeguck7v div { box-sizing: content-box; }
      /* generated by https://loading.io/ */
  </style>
  <style type="text/css">
    @keyframes ldio-248v6shlhza {
      0% { transform: translate(-50%,-50%) rotate(0deg); }
      100% { transform: translate(-50%,-50%) rotate(360deg); }
  }
  .ldio-248v6shlhza div {
      position: absolute;
      width: 60px;
      height: 60px;
      border: 10px solid #000000;
      border-top-color: transparent;
      border-radius: 50%;
  }
  .ldio-248v6shlhza div {
      animation: ldio-248v6shlhza 1s linear infinite;
      top: 50px;
      left: 50px
  }
  .loadingio-spinner-rolling-fauj2zq9gid {
      width: 31px;
      height: 31px;
      display: inline-block;
      overflow: hidden;
      background: #ffffff;
  }
  .ldio-248v6shlhza {
      width: 100%;
      height: 100%;
      position: relative;
      transform: translateZ(0) scale(0.31);
      backface-visibility: hidden;
      transform-origin: 0 0; /* see note above */
  }
  .ldio-248v6shlhza div { box-sizing: content-box; }
  /* generated by https://loading.io/ */
</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">HSPG | TEBET</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['logged_in']['nama_user'];?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bars fa-fw"></i> Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Payment<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li id="last_periode">
                                            
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Master Data<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url('master/siswa');?>">Master Data Siswa</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('master/pendidik');?>">Master Data Pendidik</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Help<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/dashboard/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/jquery.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/bootstrap.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
      get_last_periode();
      function get_last_periode() {
        $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url();?>payment/last_periode',
                async   : false,
                dataType    : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += data[i].periode;
                    }
                    $('#last_periode').html('<a href="<?php echo base_url('payment/periodic/');?>'+html+'">Payment Control List</a>');
                }
            });
      }
    </script>

</body>

</html>
