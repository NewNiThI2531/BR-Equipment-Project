<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php

print_r($_GET);

    if (isset($_GET['id'])){
       
        $sqlB= "SELECT * FROM `item_borrowreturn` WHERE `id` = '".$_GET['id']."' ";
        $resultB = $conn->query($sqlB);
        $rowB = $resultB->fetch_assoc();

        $item = $rowB['item'];
        echo $qty = $rowB['qty'];

        $sqlItem = "SELECT * FROM `item` WHERE `id` = '".$item."' ";
        $resultItem = $conn->query($sqlItem);
        $rowItem = $resultItem->fetch_assoc();

         echo $pending_qty = $rowItem['pending_qty'];
         echo $total_qty = $rowItem['total_qty'];
         $status = 'Canceled';

        $sql = "UPDATE `item` 
        SET pending_qty = pending_qty - '".$qty."',
            total_qty = total_qty + '". $qty."'
            WHERE id = '".$item."'; ";
        $result = $conn->query($sql) or die($conn->error);

        $sql = "UPDATE `item_borrowreturn` 
        SET status = '". $status."'
            WHERE id = '".$_GET['id']."'; ";
        $result = $conn->query($sql) or die($conn->error);
        
        // $sql = "DELETE FROM `item_borrowreturn` WHERE `id` = '".$_GET['id']."' ";
        // $result = $conn->query($sql);

        if( $conn->affected_rows ){
            echo '<script> alert("Canceled Success!")</script>'; 
            header('Refresh:0; url=index.php'); 
        } else {
            echo '<script> alert("No Data!")</script>'; 
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Refresh:0; url=index.php');
    }

?>