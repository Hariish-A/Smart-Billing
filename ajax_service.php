<?php
include('connect.php');

if(isset($_POST['drop_services']))
  {
       $sql_service1 ="SELECT * FROM products WHERE id  = '".$_POST['drop_services']."'";
        $result1=$conn->query($sql_service1);  
        $service1 = mysqli_fetch_array($result1);
        echo $service1['sale_price']; exit;
  }
?>