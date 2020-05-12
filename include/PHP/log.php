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


    <div class="formbox">
      <h1 id="titre">Connectez-vous sur Medicatime</h1><br>
      <p id="main"> Si vous avez déjà consulté, vous pouvez accéder à votre compte avec votre nom, prenom et mail. Vous pourrez ensuite consulter votre calendrier. </p><br> 
      <p id="main"> Vous pouvez prendre rendez-vous avec votre médecin par téléphone. </p><br><br>

      <div>
        <?php
        if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']))
        {
          $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $mail=$_POST['mail'];   
          if($nom!=NULL and $prenom!=NULL)
          {                

          if($nom=='admin' and $prenom=='admin')      //pour l'admin
          {
              $_SESSION['admin'] = $nom;
              header("Location: medicatime.php");
          }

          else          
          {      
              $count=0;           
              $check=$bdd->prepare('SELECT * FROM patient WHERE nom = :nom and prenom = :prenom and mail = :mail');       //vérification de l'existence du mail dans la bdd
              $check->execute(array('nom' => $nom, 'prenom' => $prenom, 'mail' => $mail));
              $check->closeCursor();
              $count=$check->rowCount();

            if($count!=0)
            {
                $_SESSION['patient'] = $patient;
                header("Location: calendrier.php");
            }
              else
              {
                echo '<p id="Error">Informations invalides.</p>';
              }
          }
        }
        else
        {
         echo '<p id="Error">Veuillez tout remplir.</p>';
        }
      }
     



     ?>
     <form method="POST" id="form">
       <input type="text" name="nom" class="logbox" placeholder="Nom"><br><br>
       <input type="text" name="prenom" class="logbox" placeholder="Prenom"><br><br>
       <input type="text" name="mail" class="logbox" placeholder="Adresse mail"><br><br>
       
       <input type="submit" value="Se connecter" id="submitbox"><br><br>

     </form>
   </div>
 </div>


</body>

<footer>
    <?php include("../footer.php"); ?>
</footer>

</html>






