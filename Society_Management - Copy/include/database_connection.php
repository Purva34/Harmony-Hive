<?php
 $conn = mysqli_connect("127.0.0.1", "root","","SMS");

 if (mysqli_connect_error()) {
echo "Failed to connect to MySQL!! Please connnect the admin.";
return;
    # code...
 }
?>