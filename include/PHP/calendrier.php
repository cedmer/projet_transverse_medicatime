<?php
include "tab_preview.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Medicatime</title>
    <link rel="icon" type="image/png" href="../../images/logo_medicatime.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style_mainpage.css">
</head>



<header>
    <?php include("../header.php"); ?>
</header>



<body>

    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-10" id="container_calendar">

                <h1>Calendrier</h1>
                <div class="col-md-12" id="tab">
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
                <div class="container_pdf">
                    <div class=" col-md-10" class="button_pdf_1">
                        <form action="pdf_generator_client.php" method="post">
                            <input type="submit" value="pdf" id="pdf_2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<footer>
    <?php include("../footer.php"); ?>
</footer>

</html>