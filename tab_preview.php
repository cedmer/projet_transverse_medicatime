<?php

function tab_preview(){

    include("conn.php");


    $sql = "SELECT * FROM `tableau`";
    $result = mysqli_query($conn, $sql);

    echo "<tr>
                <td class='jour'></td>
                <td class='jour'>Lundi</td>
                <td class='jour'>mardi</td>
                <td class='jour'>Mercredi</td>
                <td class='jour'>Jeudi</td>
                <td class='jour'>Vendredi</td>
                <td class='jour'>Samedi</td>
                <td class='jour'>Dimanche</td>
            </tr>";

    for ($i=8; $i<=22; $i+=2){
        echo "<tr> <td class='heures'>".$i."h</td>";

        for ($j=1; $j<=7; $j++){
            echo "<td class='champs'>";
            while ($rows = mysqli_fetch_array($result)){
                if (($rows['heure']=="$i")&&($rows['jour']=="$j")){
                    echo $rows['medicament']."  ".$rows['dosage']."mg <a href='remove_and_modify.php?id=".$rows['tid']."' class='close'></a></br>";
                }
            }
            echo "</td>";

            mysqli_data_seek($result, 0);
        }
    }

}

function medic_preview(){

    include("conn.php");

    $sql = "SELECT DISTINCT `medicament` FROM `tableau`";
    $result = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_array($result)){
        echo "<tr>
                <form method=\"post\" action=\"remove_and_modify.php\">
                    <td><input type='text' value='".$rows['medicament']."' name='to_modify' readonly></td>
                    <td><input type='text' name='new_name_medic'></td>
                    <td><input type='submit' value='modify' name='modify'></td>
                </form>
            </tr>";
    }
}