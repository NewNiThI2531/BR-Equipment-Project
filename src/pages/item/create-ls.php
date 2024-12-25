<?php include_once('../authen.php') ?>
<?php

    

    if(isset($_POST['submit'])){

        if($_SESSION['role'] == 'admin') {
            $user = $_POST['user']; 
        }else{
            $user = $_SESSION['id'];
        }

        $item = $_POST['id'];

        // print($_SESSION['id']);
        // print_r($_POST);

        $qty = $_POST['qty'];
        $type = $_POST['type']; 
        $status  = 'Pending';

            $sql = "INSERT INTO `item_borrowreturn` (`user`, `item`, `qty`, `status`, `date`, `type`) 
                    VALUES ('".$user."', 
                            '".$item."', 
                            '".$qty."',
                            '".$status."',
                            '".date("Y-m-d H:i:s")."',
                            '".$type."')";
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script>alert("Add Data Success!")</script>';
                header('Refresh:0; url="index.php"');
            }

            if($type == 'Lend') { 
                $sql = "UPDATE `item` 
                SET pending_qty = pending_qty + '".$qty."',
                    total_qty = total_qty - '".$qty."'
                    WHERE id = '".$item."'; ";
                $result = $conn->query($sql) or die($conn->error);
            }

            if($type == 'Use') { 
                $sql = "UPDATE `item` 
                SET pending_qty = pending_qty + '".$qty."',
                    total_qty = total_qty - '".$qty."'
                    WHERE id = '".$item."'; ";
                $result = $conn->query($sql) or die($conn->error);
            }
       
    } else {
        header('location:index.php');
    }
?>