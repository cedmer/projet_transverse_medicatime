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
	<h1 id="titre">Inscrire un nouveau patient</h1>
	<div class="formbox">
		
		<?php
		
		if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date_naissance']) and isset($_POST['mail']))
		{
			if($_POST['date_naissance']<date('Y-m-d'))			//on vérifie que l'âge est positif
			{
				$nom=$_POST['nom'];
				$prenom=$_POST['prenom'];
				$date_naissance=$_POST['date_naissance'];
				$mail=$_POST['mail'];
				
				if( $nom!=NULL and $prenom!=NULL and $date_naissance!=NULL and $mail!=NULL)
				{
					$is_username_unique=$bdd->prepare('SELECT * FROM patient WHERE mail = ?');		//on vérifie que le patient n'existe pas déjà via le mail qui est unique
					$is_username_unique->execute(array($mail));
					$is_username_unique->closeCursor();
					$count=$is_username_unique->rowCount();

					if($count==0)		//si ce patient n'existe pas, on l'ajoute
					{
						//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$req=$bdd->prepare('INSERT INTO patient(nom,prenom,date_naissance,mail) VALUES(:nom,:prenom,:date_naissance,:mail)');
						$req->execute(array(
						'nom'=>$nom,
						'prenom'=>$prenom,
						'date_naissance'=>$date_naissance,
						'mail'=>$mail
						));
						$req->closeCursor();

						echo '<p id="Error">Le patient a été ajouté.</p>';
					}

					else
					{
						echo '<p id="Error">Ce patient existe déjà</p>';
					}
				}
				else
				{
					echo '<p id="Error">Veuillez tout remplir</p>';
				}
			}
			else
			{
				echo '<p id="Error">Veuillez entrer une date de naissance valide.</p>';
			}
			
		}

		?>

		<form method="POST" id="form">
			<input type="text" name="nom" class="logbox" placeholder="Nom"><br><br>
			<input type="text" name="prenom" class="logbox" placeholder="Prénom"><br><br>
			<input type="date" name="date_naissance" class="logbox" min="1940-01-01"><br><br>
			<input type="mail" name="mail" class="logbox" placeholder="Mail"><br><br>
			
			<input class="hvr-grow" type="submit" name="formsend" id="submitbox" value="Enregistrer" >
		</form>
	</div>

	<br>
	<br>
	
</body>

<footer>
    <?php include("../footer.php"); ?>
</footer>

</html>