<?php
include '../view/classHTML.php';

use view\classHTML\classHTML as renderHTML;
$renderHTML = new renderHTML;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FTP | UptoFTP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../lib/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../lib/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../lib/AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../lib/AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css">

  <!-- select2 -->
  <link rel="stylesheet" href="../lib/AdminLTE-2.4.5/bower_components/select2/dist/css/select2.min.css">
  

  <!-- style app -->
  <link rel="stylesheet" href="../css/app.css">
  <style type="text/css">
    .btn-app {
   /* border-radius: 3px!important;
    position: relative!important;
     padding: 0!important; 
    margin: 0 0 10px 10px!important;
     min-width: 0!important; 
     height: 0!important; 
    text-align: center!important;
    color: #666!important;
    border: 1px solid #ddd!important;
    background-color: #f4f4f4!important;
    font-size: 12px!important;*/
    }
  </style>
  <!-- Morris chart -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  // Header
    $renderHTML->renderElement(1);
    // Menu
    $renderHTML->renderElement(2);
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h2>Administrar cuentas FTP</h2>
        </div>
        <div class="container">
          <form id="formUser" class="form-horizontal">
            <div class="box-body container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="form-group">
                          <label for="ftp" class="control-label">Cuentas FTP</label>
                            <select id="ftp"  class="select2" style="width: 100%">
                              <option value=0>seleccione una cuenta FTP</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div id="divTable" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title routeDir">FTP Directory</h3>
                    <a class="btn" data-toggle="tooltip" data-placement="top" title="Agregar archivo">
                      <i class="fas fa-plus pointer"></i>
                    </a>
                    <a class="btn" data-toggle="tooltip" data-placement="top" title="Agregar carpeta">
                      <i class="fas fa-folder-plus pointer"></i>
                    </a>


                  </div>
            <!-- /.box-header -->
                  <div class="box-body">
                    <table id="tableFTP" class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Size</th>
                          <th>Type</th>
                          <th>Actions</th>                        
                      </tr>
                    </tbody>
                  </table>
                  </div>
            <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    
                  </div>
              </div>
              
            </div>
              </div>
          </div>
        </form>
      </div>
      </div>
    </section>

 
  </div>
  <?php
    $renderHTML->renderElement(3);
  ?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

  <div class="modalSpinner">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../lib/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../lib/AdminLTE-2.4.5/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../lib/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="../lib/AdminLTE-2.4.5/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../lib/AdminLTE-2.4.5/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->

<!-- Select2 -->
<script src="../lib/AdminLTE-2.4.5/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- DATATABLE   -->

<script src="../lib/AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.js"></script>

<!-- DATATABLE   -->

<!-- notify -->
<script src="../lib/notify.js"></script>
<script src="../js/util.js"></script>
<script src="../js/ftp.js"></script>

<script>
  $(document).ready(function()
  {
    $('[data-toggle="tooltip"]').tooltip()
    var ftp = new Ftp;
    ftp.getFtpAcount();

    $("#ftp").change(function()
    {
      console.log($(this).val())
      if($(this).val() != 0 && $(this).val() != '')
      {
        ftp.getDataUser($(this).val(), ftp);
      }
    });

    $("#tableFTP > tbody").on("click", function()
    {
      
      if($(this).find("td:eq(4)").text() == 'folder')
      {

      }
    })



    $("#addFTP").click(function()
    {
      
    });

    $("#save").click(function()
    {
      EvalRegV2($("#formUser"), function(bResp)
      {
        if(bResp)
        {
          let data = SerializeForm($("#formUser"));
          Formdata = BuildForm(data);
          ftp.updateDataUser(Formdata, ftp);
        }
      })
    });

    $(document).on( "click",  ".actionsFTP",  function ()
    {
      console.log("aqui");
      switch($(this).data('type'))
      {
        case '1':

        break;

        case '2':
        
        break;

        case '3':
        
        break;

        case '4':
        
        break;

        default:

      }
    });

    $("#deleteFTP").click(function()
    {
      let data = SerializeForm($("#formUser"));
      Formdata = BuildForm(data);
      ftp.deletedAccount(Formdata, ftp);
    });

    $("#testingFTP").click(function()
    {
        ftp.testConection();
    });


  })
</script>

</body>
</html>
