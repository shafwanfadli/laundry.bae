<?php
include "include/koneksi.php";
if(isset($_POST['no_order'])){
    $no_order = $_POST['no_order'];

    $sql = mysqli_query($conn, "SELECT * FROM transaksi WHERE No_Order = '$no_order'");
    $num = mysqli_num_rows($sql);

   
    if($num > 0){
        $row  = mysqli_fetch_assoc($sql);
        echo json_encode($row);
    }else{
        echo json_encode(array('success'=>'false'));
    }
    

    
    
}

?>
