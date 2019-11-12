<?php
function check_if_added_to_cart($item_id) {
require 'common.php';
$user_id= $_SESSION['user_id'];
$user_check_query ="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
$result = mysqli_query($conn, $user_check_query);
$rowcount=mysqli_num_rows($result);
if($rowcount >=1)
{
    return 1;
}
 else {
    return 0;
}
}
?>