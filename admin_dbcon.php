<?php
$admin_dbcon=mysqli_connect("localhost","root","","madaripurbar");
mysqli_query($admin_dbcon,"SET CHARACTER SET 'utf8'");
mysqli_query($admin_dbcon,"SET SESSION collation_connection ='utf8_unicode_ci'");

?>