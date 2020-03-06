<?php

include("library/conn.php");

if ($_POST['modify']){
    $old_name = strval($_POST['to_modify']);
    $new_name = $_POST['new_name_medic'];

    $sql = "SELECT * FROM `tableau` WHERE `medicament` LIKE '%".$old_name."%'";
    $result = mysqli_query($conn, $sql);

    while ($rows = mysqli_fetch_array($result)){
        $id = $rows['tid'];
        $sql =" UPDATE `tableau` SET `medicament` = '".$new_name."' WHERE `tableau`.`tid` = $id";

        if(!mysqli_query($conn, $sql)){
            die("Error: ".mysqli_error($conn));
        }
    }

    mysqli_close($conn);

    die("<script>window.location.href= 'medicatime.php'</script>");

}elseif ($_POST['delete_medic']){
    $old_name = strval($_POST['to_modify']);

    $sql = "SELECT * FROM `tableau` WHERE `medicament` LIKE '%".$old_name."%'";
    $result = mysqli_query($conn, $sql);

    while ($rows = mysqli_fetch_array($result)){
        $id = $rows['tid'];
        $sql = "DELETE FROM `tableau` WHERE `tableau`.`tid` =  $id";
        if(!mysqli_query($conn, $sql)){
            die("Error: ".mysqli_error($conn));
        }
    }

    mysqli_close($conn);

    die("<script>window.location.href= 'medicatime.php'</script>");

}else{
    $id = $_GET['id'];

    $sql = "DELETE FROM `tableau` WHERE `tid` = $id";

    if (!mysqli_query($conn, $sql)) {
        die("Error: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    die("<script>window.location.href= 'medicatime.php'</script>");
}




