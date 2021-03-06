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
  <title>Administrar FTP | UpToFTP</title>
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
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="box-footer">
                      <label for="ftp" class="control-label"></label>
                      <button id="addFTP" type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#ModalAddFTP"><i class="fas fa-plus-square"></i></button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div id="divForm" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="hostName" class="col-sm-5 control-label">Host Name</label>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <input type="text" class="form-control Requerido" id="hostName" name="hostName" placeholder="Host Name">
                      <span for="hostName" class="help-block text-muted"></span>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <label for="Password" class="col-sm-2 control-label">Password</label>

                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <input type="password" class="form-control Requerido RegClave" id="Password" name="Password" placeholder="Password">
                    <span for="Password" class="help-block text-muted"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden">
                    <input type="password" class="form-control Requerido " id="idFtp" name="idFtp" placeholder="idUser">
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <label for="UserName" class="col-sm-5 control-label">User name</label>

                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control Requerido RegUserFTP" id="UserName" name="UserName" placeholder="UserName">
                    <span for="UserName" class="help-block text-muted"></span>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <button id="deleteFTP" type="button" class="btn btn-info pull-right"><i class="fas fa-trash-alt"></i></i>Eliminar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="box-footer">
        <button id="save" type="button" class="btn btn-info pull-right">Guardar</button>
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
  <!-- Modal Add FTP -->
  <div class="modal fade" id="ModalAddFTP"tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar Cuenta FTP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formAddFTP" class="form-horizontal">
            <div class="wrapper">
              <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="hostNameFTP" class="col-sm-5 control-label">Host Name</label>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <input type="text" class="form-control Requerido" id="hostNameFTP" name="hostName" placeholder="Host Name">
                      <span for="hostNameFTP" class="help-block text-muted"></span>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <label for="PasswordFTP" class="col-sm-2 control-label">Password</label>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input type="password" class="form-control Requerido RegClave" id="PasswordFTP" name="Password" placeholder="Password">
                    <span for="PasswordFTP" class="help-block text-muted"></span>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <label for="UserNameFTP" class="col-sm-5 control-label">User name</label>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control Requerido RegUserFTP" id="UserNameFTP" name="UserName" placeholder="UserName">
                    <span for="UserNameFTP" class="help-block text-muted"></span>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                  <label for="" class="col-sm-5 control-label">&nbsp</label>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button id="testingFTP" type="button" class="btn btn-primary">Testear conexion</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button id="SaveFTP" type="button" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal Add FTP -->
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

<!-- notify -->
<script src="../lib/notify.js"></script>
<script src="../js/util.js"></script>
<script src="../js/ftp.js"></script>

<script>
  $(document).ready(function()
  {
    var ftp = new Ftp;
    ftp.getFtpAcount(0, ftp);

    $("#ftp").change(function()
    {
      if($(this).val() != 0 && $(this).val() != '')
      {
        ftp.getDataUser($(this).val());
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

    $("#SaveFTP").click(function()
    {
      EvalRegV2($("#formAddFTP"), function(bResp)
      {
        if(bResp)
        {
          let data = SerializeForm($("#formAddFTP"));
          Formdata = BuildForm(data);
          ftp.saveDataUser(Formdata, ftp);
        }
      })
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
