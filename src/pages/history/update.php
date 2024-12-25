<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
//print_r($_POST);
    if(isset($_POST['submit'])){
      
            $status = 'Returned';
            echo $qty = $_POST['qty'];
            echo $item = $_POST['item'];

        $sql = "UPDATE `item_borrowreturn` 
                SET status = '".$status."',
                    returned_date = '".date("Y-m-d H:i:s")."'
                    WHERE id = '".$_POST['id']."'; ";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> alert("Returned Success!") </script>';
            header('Refresh:0; url=index.php');
        }

        $sql = "UPDATE `item` 
        SET lend_qty = lend_qty - '".$qty."',
            total_qty = total_qty + '".$qty."'
            WHERE id = '".$item."'; ";
        $result = $conn->query($sql) or die($conn->error);
    

    } else {
        header('Refresh:0; url=index.php');
    }
?>