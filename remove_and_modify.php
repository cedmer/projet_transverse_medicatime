<?php

include("conn.php");

$id = $_GET['id'];

$sql = "DELETE FROM `tableau` WHERE `tid` = $id";

if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
}

mysqli_close($conn);

die("<script>window.location.href= 'medicatime.php'</script>");
