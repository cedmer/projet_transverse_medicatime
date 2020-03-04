<?php
//require('fpdf.php');
//include ('conn.php');
//
//$pdf = new FPDF('L','mm','A4');
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//
//$sql = "SELECT * FROM `tableau`";
//$result = mysqli_query($conn, $sql);
//
////while ($rows = mysqli_fetch_array($result)){
////    $medic = $rows['medicament'];
////    $pdf->Cell(40,6,$medic,1);
////    $pdf->Ln();
////}
//
//$pdf->Cell(32,6,'',1);
//$pdf->Cell(32,6,'lundi',1);
//$pdf->Cell(32,6,'mardi',1);
//$pdf->Cell(32,6,'mercredi',1);
//$pdf->Cell(32,6,'jeudi',1);
//$pdf->Cell(32,6,'vendredi',1);
//$pdf->Cell(32,6,'samedi',1);
//$pdf->Cell(32,6,'dimanche',1);
//
//for ($i=8; $i<=22; $i+=2){
//    $pdf->Ln();
//    $h = $i.'h';
//    if ($i==22){
//        $h='nuit';
//    }
//    $pdf->Cell(32,20,$h,1);
//    for ($j=1; $j<=7; $j++){
//        $medic ="";
//        while($rows = mysqli_fetch_array($result)){
//            if (($rows['heure']=="$i")&&($rows['jour']=="$j")){
//                $medic .= $rows['medicament']."\n";
//                $pdf->MultiCell(32,20,$medic,1);
//            }
//        }
//        mysqli_data_seek($result, 0);
//    }
//}
//
//$pdf->Output();


require('mc_table.php');

function GenererMot()
{
    //Renvoie un mot aléatoire
    $nb = rand(3, 10);
    $mot = '';
    for ($i = 1; $i <= $nb; $i++)
        $mot .= chr(rand(ord('a'), ord('z')));
    return $mot;
}

function GenererPhrase()
{
    //Renvoie une phrase aléatoire
    $nb = rand(1, 2);
    $p = '';
    for ($i = 1; $i <= $nb; $i++)
        $p .= GenererMot() . ' ';
    return substr($p, 0, -1);
}

$pdf = new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 14);
//Table de 20 lignes et 4 colonnes
$pdf->SetWidths(array(32, 32, 32, 32, 32, 32, 32, 32)); //array represente le nombre de colones et leurs dimentions
for ($i = 0; $i < 9; $i++) //i represente le nombre de lignes -> pas oblige de faire dans un for
    $pdf->Row(array(GenererPhrase(), GenererPhrase(), GenererPhrase(), GenererPhrase(), GenererPhrase(), GenererPhrase(), GenererPhrase(), GenererPhrase()));
$pdf->Output();

