<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add - Item</title>
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
            <h1>Add - Item Info</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="../dashboard">Home</a></li> -->
              <li class="breadcrumb-item"><a href="../item">กลับไปหน้าวัสดุ</a></li>
              <li class="breadcrumb-item active">Add - Item</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-warning">
      <div class="card-header" style="background-color: #99ccff;">
        <h3 class="card-title">Data</h3>
        </div>
        <form action="create.php" method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-2">
              <div class="custom-file">
								<input type="file" class="custom-file-input" name="file" id="customFile">
							</div>	
              <figure class="figure text-center d-none mt-2">
								<input type="hidden" name="data_file">
								<img id="imgUpload" class="figure-img img-fluid rounded" style="width: 500px;">
							</figure>								
            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 p-2">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-2">
              <label>รูปภาพ</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose...</label>
                </div>
              </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 p-2">
            </div>

              <div class="col-12 col-sm-6 col-md-4 col-lg-4 p-2">
                <label for="item_id">รหัสวัสดุ</label>
                <input type="text" class="form-control" id="item_id" name="item_id" placeholder="Item Code" required>
              </div>
              <div class="col-12 col-sm-6 col-md-8 col-lg-8 p-2">
                <label for="item_name">ชื่อวัสดุ</label>
                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="price">Price (ถ้าของที่ต้องยืม Price = 0)</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
              </div>  
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-2">
                <label for="item_qty">จำนวนวัสดุ</label>
                <input type="number" class="form-control" id="item_qty" name="item_qty" placeholder="Qty." required>
              </div>  
              <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 p-2">
                <label for="type">Type</label>
                <select id="type" name='type' class="form-control" required>
                  <option value="">Select</option>
                  <option value='lend'>Lend</option>
                  <option value='use'>Use</option>
                </select>
              </div>   -->
            </div>
          </div>
         
       
            
          <div class="card-footer">
            <center>
              <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
              <a href="../item" class="btn btn-danger" type="button">ยกเลิก</a></button>
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
