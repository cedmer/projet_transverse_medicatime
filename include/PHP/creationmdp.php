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
	<h1 id="titre">Créer votre mot de passe</h1>
	<div class="formbox">

		<?php
		
		if (isset($_POST['date_naissance']) and isset($_POST['mail']) and isset($_POST['mdp']) and isset($_POST['cmdp']))	
		{
			if($_POST['date_naissance']<date('Y-m-d'))		//on vérifie que la date de naissance est inférieure à la date d'aujourd'hui
			{	
				$date_naissance=$_POST['date_naissance'];
				$mail=$_POST['mail'];
				$mdp=$_POST['mdp'];
				$cmdp=$_POST['cmdp'];

				if( $date_naissance!=NULL and $mail!=NULL  and $mdp!=NULL and $mdp==$cmdp  )	//on vérifie bien que le mdp est égal au mdp confirmé
				{
					$count=0;
					$check=$bdd->prepare('SELECT * FROM patient WHERE date_naissance= :date_naissance AND mail= :mail');	   //on vérifie la date de naissance et le mail dans notre bdd
					$check->execute(array('date_naissance' => $date_naissance, 'mail' => $mail));
					$check->closeCursor();
					$count=$check->rowCount();

					if($count!=0)			//si on a effectivement trouvé ces 2 informations d'identification
					{
						$mdp = password_hash($mdp, PASSWORD_DEFAULT);			//on hash le mot de passe
						//on set le mot de passe hashé dans le champ 'mdp' du patient dans la table 'patient'
						$req=$bdd->prepare('UPDATE patient SET mdp = :mdp WHERE mail = :mail AND date_naissance = :date_naissance ');
						$req->execute(array(':mdp' => $mdp, 'mail' => $mail, 'date_naissance' => $date_naissance));		
						$req->closeCursor();
						header("location:log.php");
					}

					else
					{
						echo '<p id="Error">Informations invalides</p>';
					}

				}

				else
				{
					echo '<p id="Error">Veuillez remplir toutes les cases</p>';
				}
			}
			else
			{
				echo '<p id="Error">Date de naissance invalide</p>';
			}
		}

		?>

		<form method="POST" id="form">
			<label>Date de naissance</label><br>
			<input type="date" id="date_naissance" name="date_naissance" class="logbox" min="1940-01-01"><br><br>
			<label>Mail</label><br>
			<input type="mail" name="mail" id="mail" class="logbox" placeholder="Mail"><br><br>
			<input type="password" name="mdp" id="mdp" class="logbox" placeholder="Mot de passe"><br><br>
			<input type="password" name="cmdp" class="logbox" placeholder="Confirmez mot de passe"><br><br>

			<input class="hvr-grow" type="submit" name="formsend" id="submitbox" value="Enregistrer">

		</form>

	</div>

	<br>
	<br>

	<div id="main">
		<p><a id="suppeffet" href="log.php">Retourner page précédente</a></p>
	</div>

</body>

<footer>
	<?php include("../footer.php"); ?>
</footer>

</html>