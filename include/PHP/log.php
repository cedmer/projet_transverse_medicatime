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
</head>



<header>
  <?php include("../header.php"); ?>
</header>


<body>

  <h1 id="titre">Connectez-vous sur Medicatime</h1><br>
  <div class="formbox">

    <p id="main"> Si vous avez déjà consulté et que vous n'avez pas de compte, créer votre mot de passe en cliquant sur le lien en dessous. Vous pourrez ensuite consulter votre calendrier. </p><br>
    <p id="main"> Vous pouvez prendre rendez-vous avec votre médecin par téléphone. </p><br><br>


    <?php
    if (isset($_POST['mail']) and isset($_POST['mdp_to_check'])) {
      $mail = $_POST['mail'];                   //on récupère dans une variable le mail
      $mdp_to_check = $_POST['mdp_to_check'];   //on récupère dans une variable le mdp à vérifier

      if ($mail == 'admin' and $mdp_to_check == 'admin')      //pour l'admin
      {
        $_SESSION['admin'] = $mail;
        header("Location: medicatime.php");
      } else                                    //sinon c'est un utilisateur donc on vérifie les informations fournies
      {
        $count = 0;
        $check = $bdd->prepare('SELECT * FROM patient WHERE mail= :mail');       //vérification de l'existence du mail dans la bdd
        $check->execute(array('mail' => $mail));
        $check->closeCursor();
        $count = $check->rowCount();

        if ($count != 0)                                                          //si il existe
        {
          $reqmdp = $bdd->prepare("SELECT mdp FROM patient WHERE mail = :mail");    //on récupère le mot de passe de la bdd
          $reqmdp->execute(array('mail' => $mail));
          $data = $reqmdp->fetch(PDO::FETCH_OBJ);       //$data de type objet qui contient un champ mdp

          $mdp = $data->mdp;              //la variable $mdp va prendre la valeur du champ mdp de l'objet data

          if (password_verify($mdp_to_check, $mdp))      //2 paramètres : le 1er contient le mot de passe fourni, le 2ème contient le mot de passe connu 
          {                                             //la fonction password verify va retourner TRUE si les deux mdp sont identiques
            $_SESSION['patient'] = $mail;
            $idpa = $bdd->prepare("SELECT pid FROM patient WHERE mail = :mail");    //on récupère le mot de passe de la bdd
            $idpa->execute(array('mail' => $mail));
            $data = $idpa->fetch(PDO::FETCH_OBJ);
            $id = $data->pid;
            $_SESSION['id_patient'] = $id;
            header("Location: calendrier.php");
          } else {
            echo '<p id="Error">Identifiant ou mot de passe incorrect</p>';
          }
        } else {
          echo '<p id="Error">Informations invalides</p>';
        }
      }
    }

    ?>

    <form method="POST" id="form">
      <input type="text" size="30" name="mail" class="logbox" placeholder="Adresse mail"><br><br>
      <input type="password" size="30" name="mdp_to_check" id="mdp_to_check" class="logbox" placeholder="Mot de passe"><br><br>
      <input class="hvr-grow" type="submit" value="Se connecter" id="submitbox"><br><br>

    </form>
    <p>Pas encore de compte ? <a id="suppeffet" href="creationmdp.php">Créer votre mot de passe</a></p><br><br>

  </div>


</body>

<footer>
  <?php include("../footer.php"); ?>
</footer>

</html>