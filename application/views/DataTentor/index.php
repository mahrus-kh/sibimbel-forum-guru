<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=base_url('assets/images/logotitle.png')?>" type="image/gif">
  <title>SI BIMBEL | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');
        echo link_tag('assets/plugins/datatables/jquery.dataTables.min.css"');
        echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
  ?>
  <!-- Font Awesome -->
  <?php echo link_tag('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>
  <!-- Theme style -->
  <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo link_tag('assets/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo current_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BFG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Bimbel Forum Guru</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
               <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="user-image" alt="User Image"/>
               <span class="hidden-xs"><?php echo $this->session->nama;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image"/><p>
                <?php echo $this->session->nama;?> - Administrator</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                   <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     <div class="user-panel">
       <div class="pull-left image">
         <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image" />s</div>
       <div class="pull-left info">
         <p><?php echo $this->session->nama;?></p>
           <a href="#">Online</a>
       </div>
     </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url('dashboard/show')?>"><i class="glyphicon glyphicon-dashboard"></i><span> DASHBOARD</span></a></li>
        <li class="active treeview menu-open">
          <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data/siswa/show')?>"><i class="glyphicon glyphicon-minus"></i> Siswa Bimbel</a></li>
            <li><a href="<?php echo base_url('data/wali/show')?>"><i class="glyphicon glyphicon-minus"></i> Wali / Orang Tua</a></li>
            <li class="active"><a href="<?php echo base_url('data/tentor/show')?>"><i class="glyphicon glyphicon-minus"></i> Tentor / Pengajar</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('data/bimbel/show')?>"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><span> DATA BIMBEL</span></a></li>
        <li><a href="<?php echo base_url('data/pembayaran/show')?>"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i><span> PEMBAYARAN</span></a></li>
        <li><a href="<?php echo base_url('data/penjadwalan/show')?>"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span> PENJADWALAN</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-cog"></i><span> SETUP</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('setup/program-pilihan/show')?>"><i class="glyphicon glyphicon-minus"></i> Program & Pilihan</a></li>
              <li><a href="<?php echo base_url('setup/biaya-diskon/show')?>"><i class="glyphicon glyphicon-minus"></i> Biaya & Diskon</a></li>
              <li><a href="<?php echo base_url('setup/tahun-ajaran/show')?>"><i class="glyphicon glyphicon-minus"></i> Tahun Ajaran</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('laporan/bimbel-pembayaran')?>"><i class="glyphicon glyphicon-file" aria-hidden="true"></i><span> LAPORAN - LAPORAN</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('administrator/show')?>"><i class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
            <li><a href="<?php echo base_url('administrator/setup-akun')?>"><i class="glyphicon glyphicon-minus"></i> Setup Akun</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('login/logout')?>"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span> LOGOUT</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3><i class=""></i></h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-green fa fa-check"></span>
          <div class="info-box-content">
            <span class="info-box-text">Aktif Mengajar</span>
            <span class="info-box-number"><div id="aktif_mengajar"></div></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-blue fa fa-circle-o"></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Tentor</span>
            <span class="info-box-number"><div id="jml_tentor"></div></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-red fa fa-times"></span>
          <div class="info-box-content">
            <span class="info-box-text">Tidak Aktif Mengajar</span>
            <span class="info-box-number"><div id="tidak_aktif_mengajar"></div></span>
          </div>
        </div>
      </div>
    </div>
        <div class="box box-primary flat">
          <div class="box-header with-border">
            <h4 class="box-tittle">Data Tentor / Pengajar</h4>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-primary btn-sm" onclick="add_tentor()"><span class="glyphicon glyphicon-plus"></span> Data Tentor</button>
              </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tentor-dt">
                <thead>
                  <tr class="info">
                    <th>Nama Lengkap</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>Tools</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
          </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
        <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; BIMBEL FORUM GURU Malang<a href="#"></a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
</body>
</html>
<script type="text/javascript">
    var tentor_dt;
    var method;
    var id_update_tentor;
    $(document).ready(function (e) {
        count_tentor()
        tentor_dt = $("#tentor-dt").DataTable({
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "ajax": {"url":"show_data_tentor", "type":"POST"},
            "columns": [
                {"data":'nama'},
                {"data":"telepon", "orderable":false},
                {"data":"status", "class": "text-center"},
                {"data":"tools", "class": "text-center", "orderable":false}
            ],
        });
        $("#trash_tentor").click(function () {
            $.ajax({
                type: "POST",
                url: "trash_tentor",
                data: {id_trash_tentor:$("#id_trash_tentor").val()},
                success: function (data) {
                    if (data == 1){
                        $("#modal-trash-tentor").modal("hide")
                        tentor_dt.ajax.reload(null,false);
                        count_tentor()
                    }
                }
            })
        });
    });

    function add_tentor() {
        method = "add_tentor"
        id_update_tentor = ""
        $("#Aktif").prop('checked',true)
        $("#Tidak-Aktif").prop('checked',false)
        $("#form-tentor")[0].reset()
        $('.modal-title').html("Tambah Tentor / Pengajar")
        $("#act").html("SIMPAN")
        $("#modal-tentor").modal("show")

    };
    function edit_tentor(id_tentor) {
        method = "update_tentor"
        id_update_tentor = id_tentor
        $("#form-tentor")[0].reset()
        $('.modal-title').html("Detail Tentor / Pengajar")
        $("#act").html("UPDATE")

        $.ajax({
            type: "POST",
            url: "edit_tentor",
            dataType: "JSON",
            data: {id_tentor:id_tentor},
            success: function (data) {
                $('[name="nama"]').val(data.nama)
                if (data.status == "Aktif") {
                    $("#Aktif").prop('checked',true)
                    $("#Tidak-Aktif").prop('checked',false)
                }
                else if(data.status == "Tidak Aktif") {
                    $("#Aktif").prop('checked',false)
                    $("#Tidak-Aktif").prop('checked',true)
                }
                $('[name="pekerjaan"]').val(data.pekerjaan)
                $('[name="alamat"]').val(data.alamat)
                $('[name="telepon"]').val(data.telepon)
                $('[name="keterangan"]').val(data.keterangan)
                $("#modal-tentor").modal("show")
            }
        });
    };
    function save_tentor() {
        if($('[name="nama"]').val() == ""){
            alert("Nama Tentor Wajib Diisi !!!")
        }else {
            if(method == "add_tentor"){
                $.ajax({
                   type: "POST",
                   url: method,
                   data: $("#form-tentor").serialize(),
                   success: function (data) {
                       if (data == 1){
                           $("#modal-tentor").modal("hide")
                           tentor_dt.ajax.reload(null,false)
                           count_tentor()
                       }
                   } 
                });
            }else if(method == "update_tentor"){
                $.ajax({
                    type: "POST",
                    url: method,
                    data: {id_tentor:id_update_tentor,nama:$('[name="nama"]').val(),status:$('input:radio[name=status]:checked').val(),pekerjaan:$('[name="pekerjaan"]').val(),alamat:$('[name="alamat"]').val(),telepon:$('[name="telepon"]').val(),keterangan:$('[name="keterangan"]').val()},
                    success: function (data) {
                        if (data == 1){
                            $("#modal-tentor").modal("hide")
                            tentor_dt.ajax.reload(null,false)
                            count_tentor()
                        }
                    }
                });
            }
        }
    };
    function del_tentor(id_tentor) {
        $("#id_trash_tentor").val(id_tentor)
        $("#modal-trash-tentor").modal("show")
    };
    function count_tentor() {
        $.ajax({
            type: "POST",
            url: "count_tentor",
            dataType: "json",
            success: function (data) {
                $("#aktif_mengajar").html(data.aktif_mengajar)
                $("#jml_tentor").html(data.jml_tentor)
                $("#tidak_aktif_mengajar").html(data.tidak_aktif_mengajar)
            }
        });
    };

</script>