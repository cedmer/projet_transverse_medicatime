<?php

include("conn.php");

if ($_POST['new_table']) {
    $sql = "TRUNCATE TABLE tableau";
    if (!mysqli_query($conn, $sql)) {
        die("Error: " . mysqli_error($conn));
    }
}

mysqli_close($conn);

die("<script>window.location.href= 'medicatime.php'</script>");