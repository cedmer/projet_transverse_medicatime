<?php
    include "tab_preview.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Medicatime</title>
    <link rel="icon" type="image/png" href="images/logo_medicatime.png" />
    <link href="include/style.css" rel="stylesheet" type="text/css"/>
    <link href="include/style_main.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>



<header>
    <?php include("include/header.php"); ?>
</header>


<body>

<div id="table_preview">
    <h1>Emploi du temps</h1>
    <table>
        <?php
            tab_preview();
        ?>
<!--        <tr>-->
<!--            <td></td>-->
<!--            <td>Lundi</td>-->
<!--            <td>mardi</td>-->
<!--            <td>Mercredi</td>-->
<!--            <td>Jeudi</td>-->
<!--            <td>Vendredi</td>-->
<!--            <td>Samedi</td>-->
<!--            <td>Dimanche</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>8h</td>-->
<!--            <td id="lundi_8"></td>-->
<!--            <td id="mardi_8"></td>-->
<!--            <td id="mercredi_8"></td>-->
<!--            <td id="jeudi_8"></td>-->
<!--            <td id="vendredi_8"></td>-->
<!--            <td id="samedi_8"></td>-->
<!--            <td id="dimanche_8"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>10h</td>-->
<!--            <td id="lundi_10"></td>-->
<!--            <td id="mardi_10"></td>-->
<!--            <td id="mercredi_10"></td>-->
<!--            <td id="jeudi_10"></td>-->
<!--            <td id="vendredi_10"></td>-->
<!--            <td id="samedi_10"></td>-->
<!--            <td id="dimanche_10"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>12h</td>-->
<!--            <td id="lundi_12"></td>-->
<!--            <td id="mardi_12"></td>-->
<!--            <td id="mercredi_12"></td>-->
<!--            <td id="jeudi_12"></td>-->
<!--            <td id="vendredi_12"></td>-->
<!--            <td id="samedi_12"></td>-->
<!--            <td id="dimanche_12"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>14h</td>-->
<!--            <td id="lundi_14"></td>-->
<!--            <td id="mardi_14"></td>-->
<!--            <td id="mercredi_14"></td>-->
<!--            <td id="jeudi_14"></td>-->
<!--            <td id="vendredi_14"></td>-->
<!--            <td id="samedi_14"></td>-->
<!--            <td id="dimanche_14"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>16h</td>-->
<!--            <td id="lundi_16"></td>-->
<!--            <td id="mardi_16"></td>-->
<!--            <td id="mercredi_16"></td>-->
<!--            <td id="jeudi_16"></td>-->
<!--            <td id="vendredi_16"></td>-->
<!--            <td id="samedi_16"></td>-->
<!--            <td id="dimanche_16"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>18h</td>-->
<!--            <td id="lundi_18"></td>-->
<!--            <td id="mardi_18"></td>-->
<!--            <td id="mercredi_18"></td>-->
<!--            <td id="jeudi_18"></td>-->
<!--            <td id="vendredi_18"></td>-->
<!--            <td id="samedi_18"></td>-->
<!--            <td id="dimanche_18"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>20h</td>-->
<!--            <td id="lundi_20"></td>-->
<!--            <td id="mardi_20"></td>-->
<!--            <td id="mercredi_20"></td>-->
<!--            <td id="jeudi_20"></td>-->
<!--            <td id="vendredi_20"></td>-->
<!--            <td id="samedi_20"></td>-->
<!--            <td id="dimanche_20"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>nuit</td>-->
<!--            <td id="lundi_nuit"></td>-->
<!--            <td id="mardi_nuit"></td>-->
<!--            <td id="mercredi_nuit"></td>-->
<!--            <td id="jeudi_nuit"></td>-->
<!--            <td id="vendredi_nuit"></td>-->
<!--            <td id="samedi_nuit"></td>-->
<!--            <td id="dimanche_nuit"></td>-->
<!--        </tr>-->
    </table>
</div>

<div id="forms">

    <form method="post" action="add_medic.php">
        <table>
            <tr>
                <td><label>medicament</label></td>
                <td><input type="text" placeholder="medicament" required="required" name="medic" id="medic"></td>
            </tr>
            <tr>
                <td><label>mg</label></td>
                <td><input type="text" placeholder="mg" required="required" name="medic_mg" id="medic_mg"></td>

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
                <td><input type="submit" value="add to preview" id="add_preview" name="add_preview"></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>

</div>

<script src="JS/treatment_forms.js"></script>
<script src="JS/TreeViewScript.js"></script>
</body>


<footer>
    <?php include("include/footer.php"); ?>
</footer>

</html>