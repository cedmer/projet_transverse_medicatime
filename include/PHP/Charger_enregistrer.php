<?php
try {
    $bdd = new PDO('mysql:host=localhost; dbname=medicatime', 'root', '');
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}

if (isset($_POST['Enregistrer']) and isset($_POST['mail'])) {
    $mail = $_POST['mail'];

    if ($mail != NULL) {
        $is_username_unique = $bdd->prepare('SELECT * FROM patient WHERE mail = ?');      //on vérifie que le patient existe via le mail qui est unique
        $is_username_unique->execute(array($mail));
        $is_username_unique->closeCursor();
        $count = $is_username_unique->rowCount();

        if ($count != 0) {
            $reqpid = $bdd->prepare("SELECT pid FROM patient WHERE mail = :mail");      //on récupère son pid
            $reqpid->execute(array('mail' => $mail));
            $data = $reqpid->fetch(PDO::FETCH_OBJ);
            $pid = $data->pid;

            $req = $bdd->prepare('DELETE from tableau_patient WHERE pid = :pid');    //on supprime
            $req->execute(array(
                'pid' => $pid
            ));
            $req->closeCursor();

            $reqtab = $bdd->prepare("SELECT medicament, jour, heure, dosage FROM tableau");     //on récupère les données du tableau
            $reqtab->execute(array());
            $data = $reqtab->fetchAll();                              //data est un tableau 2D contenant les données médicament, jour, heure, dosage

            foreach ($data as list($a, $b, $c, $d)) {               //a chaque itération, $a, $b, $c, $d prennent respectivement medicament, jour, heure, dosage (une boucle = une ligne)
                $medicament = $a;
                $jour = $b;
                $heure = $c;
                $dosage = $d;

                $req = $bdd->prepare('INSERT INTO tableau_patient(medicament,jour,heure,dosage,pid) VALUES(:medicament,:jour,:heure,:dosage,:pid)');    //on ajoute dans tableau_patient avec son pid
                $req->execute(array(
                    'medicament' => $medicament,
                    'jour' => $jour,
                    'heure' => $heure,
                    'dosage' => $dosage,
                    'pid' => $pid
                ));
                $req->closeCursor();
            }

            echo '<p id="Error">Le calendrier a été ajouté à ce patient.</p>';
        } else {
            echo '<p id="Error">Informations invalides. Ce mail est introuvable.</p>';
        }
    } else {
        echo '<p id="Error">Veuillez remplir le mail.</p>';
    }
}

if (isset($_POST['Charger']) and isset($_POST['mail'])) {
    $mail = $_POST['mail'];

    if ($mail != NULL) {
        $is_username_unique = $bdd->prepare('SELECT * FROM patient WHERE mail = ?');      //on vérifie que le patient existe via le mail qui est unique
        $is_username_unique->execute(array($mail));
        $is_username_unique->closeCursor();
        $count = $is_username_unique->rowCount();

        if ($count != 0) {
            $reqpid = $bdd->prepare("SELECT pid FROM patient WHERE mail = :mail");      //on récupère son pid
            $reqpid->execute(array('mail' => $mail));
            $data = $reqpid->fetch(PDO::FETCH_OBJ);
            $pid = $data->pid;

            $req = $bdd->prepare('DELETE *  from tableau');    //on supprime les donnee du tableau temporaire
            $req->execute(array());
            $req->closeCursor();

            $reqtab = $bdd->prepare("SELECT medicament, jour, heure, dosage FROM tableau_patient WHERE pid = :pid ");     //on récupère les données du tableau
            $reqtab->execute(array('pid' => $pid));
            $data = $reqtab->fetchAll();                              //data est un tableau 2D contenant les données médicament, jour, heure, dosage

            foreach ($data as list($a, $b, $c, $d)) {               //a chaque itération, $a, $b, $c, $d prennent respectivement medicament, jour, heure, dosage (une boucle = une ligne)
                $medicament = $a;
                $jour = $b;
                $heure = $c;
                $dosage = $d;

                $req = $bdd->prepare('INSERT INTO tableau(medicament,jour,heure,dosage) VALUES(:medicament,:jour,:heure,:dosage)');    //on ajoute dans tableau_patient avec son pid
                $req->execute(array(
                    'medicament' => $medicament,
                    'jour' => $jour,
                    'heure' => $heure,
                    'dosage' => $dosage,
                ));
                $req->closeCursor();
            }

            echo '<p id="Error">Le calendrier du patient a été chargé.</p>';
        } else {
            echo '<p id="Error">Informations invalides. Ce mail est introuvable.</p>';
        }
    } else {
        echo '<p id="Error">Veuillez remplir le mail.</p>';
    }
}

die("<script>window.location.href= 'medicatime.php'</script>");
