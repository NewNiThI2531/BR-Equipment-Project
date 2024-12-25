<?php include_once('../authen.php') ?>
<?php
    
    //print_r($_POST);

    if(isset($_POST['submit'])){
        $role = $_POST['selectBox']; 

            $sql = "INSERT INTO `item_user` (`username`, `password`, `role`, `emp_id`, `emp_name`, `department`, `position`) 
                    VALUES ('".$_POST['username']."', 
                            '".$_POST['password']."', 
                            '".$role."', 
                            '".$_POST['emp_id']."',
                            '".$_POST['emp_name']."',
                            '".$_POST['department']."',
                            '".$_POST['position']."')";
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script>alert("Add Data Success!")</script>';
                header('Refresh:0; url="index.php"');
            }
       
    } else {
        header('location:index.php');
    }
?>