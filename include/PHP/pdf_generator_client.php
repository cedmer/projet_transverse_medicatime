<?php
session_start();
include('library/conn.php');
require('library/mc_table.php');

$id = $_SESSION['id_patient'];

$pdf = new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->SetWidths(array(12, 38, 38, 38, 38, 38, 38, 38)); //array represente le nombre de colones et leurs dimentions
$pdf->Row(array("", "Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche"));

$sql = "SELECT * FROM `tableau_patient`";
$result = mysqli_query($conn, $sql);

for ($i = 8; $i <= 22; $i += 2) {
    $h = $i . "h";

    $cell_lundi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == "1") && ($id == $rows['pid'])) {
            $cell_lundi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_mardi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 2) && ($id == $rows['pid'])) {
            $cell_mardi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_mercredi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 3) && ($id == $rows['pid'])) {
            $cell_mercredi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_jeudi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 4) && ($id == $rows['pid'])) {
            $cell_jeudi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_vendredi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 5) && ($id == $rows['pid'])) {
            $cell_vendredi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_samedi = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 6) && ($id == $rows['pid'])) {
            $cell_samedi .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $cell_dimanche = "";
    while ($rows = mysqli_fetch_array($result)) {
        if (($rows['heure'] == "$i") && ($rows['jour'] == 7) && ($id == $rows['pid'])) {
            $cell_dimanche .= $rows['medicament'] . " " . $rows['dosage'] . " mg \n";
        }
    }
    mysqli_data_seek($result, 0);

    $pdf->Row(array($h, $cell_lundi, $cell_mardi, $cell_mercredi, $cell_jeudi, $cell_vendredi, $cell_samedi, $cell_dimanche));
}

$pdf->Output();
