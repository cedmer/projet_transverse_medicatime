<?php

function tab_preview(){

    include("conn.php");


    $sql = "SELECT * FROM `tableau`";
    $result = mysqli_query($conn, $sql);

    echo "<tr>
                <td></td>
                <td>Lundi</td>
                <td>mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </tr>";

    for ($i=8; $i<=22; $i+=2){
        echo "<tr> <td>".$i."h</td>";

        for ($j=1; $j<=7; $j++){
            echo "<td>";
            while ($rows = mysqli_fetch_array($result)){
                if (($rows['heure']=="$i")&&($rows['jour']=="$j")){
                    echo $rows['medicament']."</br>";
                }
            }
            echo "</td>";

            mysqli_data_seek($result, 0);
        }
    }

}