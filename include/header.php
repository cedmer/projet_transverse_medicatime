<?php
session_start();
try {
	$bdd = new PDO('mysql:host=localhost; dbname=medicatime', 'root', '');
} catch (Exception $e) {
	die('Error : ' . $e->getMessage());
}
?>

<div>
	<a>
		<img class="hvr-bob" id="logo" src="../../images/logo_medicatime.png">
	</a>
</div>

<div id="header_aide">

	<?php
	if (isset($_SESSION['admin'])) :
	?>
		<a href="medicatime.php" id="linkstyle"> Home </a>
		<a href="inscription.php" id="linkstyle"> Inscription </a>
		<a href="aide.php" id="linkstyle"> Aide </a>
		<a href="logout.php" id="linkstyle">Déconnexion</a>
	<?php
	elseif (isset($_SESSION['patient'])) :

		$mail = $_SESSION['patient'];
		$reqpid = $bdd->prepare("SELECT pid FROM patient WHERE mail = '$mail'");      //on récupère son pid
		$reqpid->execute(array('mail' => $mail));
		$data = $reqpid->fetch(PDO::FETCH_OBJ);
		$pid = $data->pid;
		$_SESSION['pid'] = $pid;

	?>
		<a id="linkstyle" href="calendrier.php">Mon calendrier</a>
		<a id="linkstyle" href="contact.php">Contact</a>
		<a id="linkstyle" href="logout.php">Déconnexion</a>
	<?php
	else :
	?>
		<a id="linkstyle" href="log.php">Connexion</a>
	<?php
	endif;
	?>

</div>