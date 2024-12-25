<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
//print_r($_POST);
    if(isset($_POST['submit'])){
            $type = $_POST['type']; 
            $status = 'Approved';
            $qty = $_POST['qty'];
            $item = $_POST['item'];

        $sql = "UPDATE `item_borrowreturn` 
                SET status = '".$status."',
                    approved_by = '".$_SESSION['id']."',
                    approved_date = '".date("Y-m-d H:i:s")."'
                    WHERE id = '".$_POST['id']."'; ";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> alert("Returned Success!") </script>';
            header('Refresh:0; url=index.php');
        }

        if($type == 'Lend') { 
            $sql = "UPDATE `item` 
            SET lend_qty = lend_qty + '".$qty."',
                pending_qty = pending_qty - '".$qty."'
                WHERE id = '".$item."'; ";
            $result = $conn->query($sql) or die($conn->error);
        }

        if($type == 'Use') { 
            $sql = "UPDATE `item` 
            SET use_qty = use_qty + '".$qty."',
                pending_qty = pending_qty - '".$qty."'
                WHERE id = '".$item."'; ";
            $result = $conn->query($sql) or die($conn->error);
        }

    } else {
        header('Refresh:0; url=index.php');
    }

    if(isset($_POST['submitrej'])){
        $type = $_POST['type']; 
        $status = 'Rejected';
        $qty = $_POST['qty'];
        $item = $_POST['item'];

    $sql = "UPDATE `item_borrowreturn` 
            SET status = '".$status."',
                approved_by = '".$_SESSION['id']."',
                approved_date = '".date("Y-m-d H:i:s")."'
                WHERE id = '".$_POST['id']."'; ";
    $result = $conn->query($sql) or die($conn->error);
    if($result){
        echo '<script> alert("Rejected Success!") </script>';
        header('Refresh:0; url=index.php');
    }

    if($type == 'Lend') { 
        $sql = "UPDATE `item` 
        SET total_qty = total_qty + '".$qty."',
            pending_qty = pending_qty - '".$qty."'
            WHERE id = '".$item."'; ";
        $result = $conn->query($sql) or die($conn->error);
    }

    if($type == 'Use') { 
        $sql = "UPDATE `item` 
        SET total_qty = total_qty + '".$qty."',
            pending_qty = pending_qty - '".$qty."'
            WHERE id = '".$item."'; ";
        $result = $conn->query($sql) or die($conn->error);
    }

} else {
    header('Refresh:0; url=index.php');
}
?>