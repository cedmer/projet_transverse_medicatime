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
	<h1 id="titre">1. Ajouter un client</h1>
	<p id="main"> Cliquez sur inscription, puis renseignez les informations nécessaires avant d'appuyer sur Enregistrer si c'est un nouveau cient.</p>

	<h1 id="titre">2. Ajouter un calendrier</h1>
	<p id="main">- Nouveau client : cliquez sur le logo Medicatime pour retourner à la page principale. Remplissez le tableau et cliquez sur "prévisualiser" pour avoir un aperçu du tableau. Lorsque vous avez terminé, cliquez sur "PDF" pour enregistrer et/ou imprimer en PDF. Enfin remplissez la case "mail" en dessous avec le mail du client auquel appartient ce calendrier. Enregistrer. Le calendrier est désormais enregistrer dans le compte du patient.</p><br>
	<p id="main">- Déjà client : cliquez sur le logo Medicatime pour retourner à la page principale. Si vous souhaitez charger l'ancien calendrier du patient, remplissez la case "mail" puis cliquez sur "charger". Sinon, remplissez le tableau et cliquez sur "prévisualiser" pour avoir un aperçu du tableau. Lorsque vous avez terminé, cliquez sur "PDF" pour enregistrer et/ou imprimer en PDF. Enfin remplissez la case "mail" en dessous avec le
		mail du client auquel appartient ce calendrier. Enregistrer. Le calendrier est désormais enregistrer dans le compte du patient.</p>

	<h1 id="titre">3. Compte client</h1>
	<p id="main"> Vous pouvez désormais notifier la création du compte à votre client. Il lui suffira de se connecter sur Medicatime avec le mail enregistré, de créer son mot de passe puis de se connecter.</p>

	<br>
	<br>

	<div id="main">
		<p><a id="suppeffet" href="medicatime.php">Retourner page précédente</a></p>
	</div>

</body>

<footer>
	<?php include("../footer.php"); ?>
</footer>

</html>