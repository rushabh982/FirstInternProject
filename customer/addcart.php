<?php

include "../shared/authguard_customer.php";
$pid=$_GET['pid'];
$userid=$_SESSION['userid'];

echo "Received pid=$pid";

include "../shared/connection.php";
$status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
if($status){
    echo "Added to Cart successfully";
}
else{
    echo "Failed to add to cart";
    echo mysqli_error($conn);
}


?>