<?php 
  include_once('../authen.php');
  if(!isset($_GET['id'])){
    header('Location:index.php');
  }

  $sql = "SELECT * FROM `item_user`";
  $result = $conn->query($sql);

  $sqlItem = "SELECT * FROM `item` WHERE `total_qty` >= 1";
  $resultItem = $conn->query($sqlItem);

  $sqlB = "SELECT * FROM `view_itemborrowreturn` WHERE `id` = '".$_GET['id']."'";
  $resultB = $conn->query($sqlB);
  $rowB = $resultB->fetch_assoc();
  
  // $sql = "SELECT * FROM `item_borrowreturn` WHERE `id` = '".$_GET['id']."' ";
  // $result = $conn->query($sql);
  // $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Approve</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- style CSS-->
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- bootstrap-toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Approve</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../approve">Approve Info</a></li>
              <li class="breadcrumb-item active">Approve</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Data</h3>
        </div>
        <form action="update.php" method="post" enctype="multipart/form-data">
          <div class="card-body">

          <div class="form-group row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="user">ชื่อสมาชิก</label>
                <select id="user" name='user' class="form-control" disabled>
                  <option value="<?php echo $rowB['user']; ?>" ><?php echo $rowB['emp_id']; ?> <?php echo $rowB['emp_name']; ?></option>
                </select>
            </div>

              <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="item">ชื่อวัสดุ</label>
                <select id="item" name='item' class="form-control" readonly>             
                  <option value="<?php echo $rowB['item']; ?>" ><?php echo $rowB['item_id']; ?> <?php echo $rowB['item_name']; ?> </option>
                </select>
              </div>

              <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="qty">จำนวน</label>
                <input type="number" class="form-control" id="qty" name="qty" placeholder="Qty." value="<?php echo $rowB['qty']; ?>" readonly>
              </div> 

              <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="type">ประเภท</label>
                <select id="type" name='type' class="form-control" readonly>
                <option value="<?php echo $rowB['type']; ?>" ><?php echo $rowB['type']; ?></option>
                </select>
              </div>   

            </div>
          
         
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

           
          <div class="card-footer n">
          <center>
            <button type="submit" name="submit" class="btn btn-primary">อนุมัติวัสดุ</button>
            <button type="submit" name="submitrej" class="btn btn-warning text-white">ปฎิเสธวัสดุ</button>
            <a href="../approve" class="btn btn-danger" type="button">Cancel</a></button>
          </center>
          </div>
      </form> 
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- bootstrap-toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    //Preview Images and Check images size
    $('.custom-file-input').on('change', function(){
      var size = this.files[0].size / 1024 / 1024
      //console.log(size.toFixed(2))
      if(size.toFixed(2) > 2){
        alert('to big, maximum is 2 MB')
      } else {
        var fileName = $(this).val().split('\\').pop()
        $(this).siblings('.custom-file-label').html(fileName)
        if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
        }
      }
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    //ckeditor
//     CKEDITOR.replace( 'detail' ,{
//       filebrowserBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
//       filebrowserUploadUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
//       filebrowserImageBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
// });

  });
  
</script>

</body>
</html>
