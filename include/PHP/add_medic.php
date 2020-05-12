<?php
include("library/conn.php");
ini_set('display_errors', 'off');

if($_POST['add_preview']){
    $heures = " ";
    $jours = " ";
    $medic = $_POST['medic'];
    $medic_mg = $_POST['medic_mg'];

    if(!preg_match("/\s/", $medic)){
        for ($i=8; $i<=22; $i+=2){

            if ($i===22){
                $heures = "nuit_check";
            }else{
                $heures = strval($i)."_check";
            }
            if($_POST[$heures])
            {
                for ($j=1; $j<=7; $j++)
                {
                    $jours = strval($j)."_jour";

                    if ($_POST[$jours])
                    {
                        $sql = "INSERT INTO tableau(medicament,jour,heure,dosage)
                        VALUES
                        ('$medic','$j','$i', '$medic_mg')";

                        if(!mysqli_query($conn, $sql)){
                            die("Error: ".mysqli_error($conn));
                        }
                    }
                }
            }
        }
    }

}

mysqli_close($conn);

die("<script>window.location.href= 'medicatime.php'</script>");



