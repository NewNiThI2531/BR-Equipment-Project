<?php 
  include_once('../authen.php');
  if(!isset($_GET['id'])){
    header('Location:index.php');
  }
  $sql = "SELECT * FROM `item` WHERE `id` = '".$_GET['id']."' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $sqlC = "SELECT * FROM `course_cer` WHERE `emp` = '".$_GET['id']."' ";
  // $sqlC = "SELECT * FROM training_course WHERE ID IN(SELECT Couse FROM course WHERE Emp = '".$_GET['id']."')";
  $resultC = $conn->query($sqlC);
  //$rowC = $resultC->fetch_assoc();
  //$arr_tag = explode(',', $row['tag']);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View - Item</title>
 

  
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
       
            <h1>View - Item</h1>
         
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="../dashboard">Home</a></li> -->
           
              <li class="breadcrumb-item"><a href="../item">Manage Item Info</a></li>
              <li class="breadcrumb-item active">View - Item</li>
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-warning">
        <div class="card-header">
       
          <h3 class="card-title">Item Info Data</h3>
        
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="" method="post">
          <div class="card-body">

          <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-2">
              <figure class="figure text-center d-block mt-2">
                  <input type="hidden" name="data_file" value="<?php echo $row['img']; ?>">
                  <img id="imgUpload" src="../../../assets/images/item/<?php echo $row['img']; ?>" class="figure-img img-fluid rounded" style="width: 500px;">
              </figure>
              </div>   
          </div>   

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="item_id">รหัสวัสดุ</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['item_id']; ?>
              </div>
          </div>  

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="item_name">ชื่อวัสดุ</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['item_name']; ?>
              </div>
          </div>  

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="price">ราคา</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['price']; ?>
              </div>
          </div>  

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="item_qty">จำนวน</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['item_qty']; ?>
              </div>
          </div>  

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="lend_qty">ยืม</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['lend_qty']; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="use_qty">เบิก</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['use_qty']; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="pending_qty">รอดำเนินการ</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['pending_qty']; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="total_qty">จำนวนคงเหลือ</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php echo $row['total_qty']; ?>
              </div>
          </div>
         
          <!-- <div class="row">
              <div class="col-12 col-sm-4 col-md-2 col-lg-2 p-2">
                <label for="type">Type</label>
              </div>
              <div class="col-12 col-sm-8 col-md-10 col-lg-10 p-2">
                <?php // if($row['type']=="lend"){echo "lend";}?>
                <?php //if($row['type']=="use"){echo "use";}?>
              </div>
          </div>   -->

            <input type="hidden" name="ID" value="<?php echo $_GET['id']; ?>">

            </div>
          <div class="card-footer n">
            <!-- <button type="submit" name="submit" class="btn btn-success">บันทึก</button> -->
            <center>
            <a href="../item" class="btn btn-primary" type="button">ตกลง</a></button>
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
