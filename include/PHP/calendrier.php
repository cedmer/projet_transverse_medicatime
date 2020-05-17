<?php
include "tab_preview.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Medicatime</title>
    <link rel="icon" type="image/png" href="../../images/logo_medicatime.png" />
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style_mainpage.css">
</head>



<header>
    <?php include("../header.php"); ?>
</header>



<body>

    <div id="time_table_container">
        <div id="table_preview">

            <h1>Calendrier</h1>

            <table>

                <?php
                $id_patient = $_SESSION['pid'];
                include("library/conn.php");

                $sql = "SELECT medicament,jour,heure,dosage FROM `tableau_patient` WHERE pid = '$id_patient' ";
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

                for ($i = 8; $i <= 22; $i += 2) {
                    echo "<tr> <td class='heures'>" . $i . "h</td>";

                    for ($j = 1; $j <= 7; $j++) {
                        echo "<td class='champs'>";
                        while ($rows = mysqli_fetch_array($result)) {
                            if (($rows['heure'] == "$i") && ($rows['jour'] == "$j")) {
                                echo $rows['medicament'] . "  " . $rows['dosage'] . "mg </br>";
                            }
                        }
                        echo "</td>";

                        mysqli_data_seek($result, 0);
                    }
                }
                ?>

            </table>
        </div>
    </div>



    <div class="button_pdf_2">
        <form action="pdf_generator.php" method="post">
            <input type="submit" value="pdf" id="pdf_2">
        </form>
    </div>








</body>


<footer>
    <?php include("../footer.php"); ?>
</footer>

</html>