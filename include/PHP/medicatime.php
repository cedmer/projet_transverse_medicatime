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
    <link rel="stylesheet" href="../CSS/style_Mainpage.css">
</head>



<header>
    <?php include("../header.php"); ?>
</header>


<body>

    <div id="time_table_container">
        <div id="table_preview">
            <h1>Emploi du temps</h1>
            <table>
                <?php
                tab_preview();
                ?>
            </table>
        </div>
    </div>
    <div class="button_pdf_1">
        <form action="pdf_generator.php" method="post">
            <input type="submit" value="pdf" id="pdf_1">
        </form>
    </div>
    <div id="forms">

        <form method="post" action="new_table.php" id="new">
            <input type="submit" name="new_table" value="new table" id="new_table_btn">
        </form>
        <form method="post" action="add_medic.php">

            <table>
                <tr>
                    <td><label>medicament</label></td>
                    <td><input type="text" placeholder="medicament" required="required" name="medic" id="medic" pattern="[^0-9]*"></td>
                    
                </tr>
                <tr id="block">
                    <td><label>          </label></td>
                    <td><div id="response"></div></td>
                    
                </tr>
                <tr>
                    <td><label>mg</label></td>
                    <td><input type="number" placeholder="mg" required="required" name="medic_mg" id="medic_mg"></td>

                </tr>
                <tr>
                    <td><label>lundi</label></td>
                    <td><input type="checkbox" name="1_jour"></td>
                    <td><label>8h</label></td>
                    <td><input type="checkbox" name="8_check"></td>
                </tr>
                <tr>
                    <td><label>mardi</label></td>
                    <td><input type="checkbox" name="2_jour"></td>
                    <td><label>10h</label></td>
                    <td><input type="checkbox" name="10_check"></td>
                </tr>
                <tr>
                    <td><label>mercredi</label></td>
                    <td><input type="checkbox" name="3_jour"></td>
                    <td><label>12h</label></td>
                    <td><input type="checkbox" name="12_check"></td>
                </tr>
                <tr>
                    <td><label>jeudi</label></td>
                    <td><input type="checkbox" name="4_jour"></td>
                    <td><label>14h</label></td>
                    <td><input type="checkbox" name="14_check"></td>
                </tr>
                <tr>
                    <td><label>vendredi</label></td>
                    <td><input type="checkbox" name="5_jour"></td>
                    <td><label>16h</label></td>
                    <td><input type="checkbox" name="16_check"></td>
                </tr>
                <tr>
                    <td><label>samedi</label></td>
                    <td><input type="checkbox" name="6_jour"></td>
                    <td><label>18h</label></td>
                    <td><input type="checkbox" name="18_check"></td>
                </tr>
                <tr>
                    <td><label>dimanche</label></td>
                    <td><input type="checkbox" name="7_jour"></td>
                    <td><label>20h</label></td>
                    <td><input type="checkbox" name="20_check"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label>nuit</label></td>
                    <td><input type="checkbox" name="nuit_check"></td>
                </tr>
                <tr>
                    <td><input type="button" name="every_day" value="tous les jours" class="red_btn"></td>
                    <td></td>
                    <td><input type="button" name="every_hour" value="toutes les heures" class="red_btn"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="submit" value="add to preview" id="add_preview" name="add_preview"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>

    <table id="table_medic">
        <?php
        medic_preview();
        ?>
    </table>
    <div class="button_pdf_2">
        <form action="pdf_generator.php" method="post">
            <input type="submit" value="pdf" id="pdf_2">
        </form>
    </div>
    <script src="../../JS/removerequired.js"></script>
    <script src="../../JS/all_days_hours.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="../../JS/autocomplete.js"></script>
</body>


<footer>
    <?php include("../footer.php"); ?>
</footer>

</html>