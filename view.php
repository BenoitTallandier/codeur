<?php
include("DBconnection.php");
extract(mysqli_fetch_array(mysqli_query($db,"SELECT * FROM lien")));
echo $click;
?>