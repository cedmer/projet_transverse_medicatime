<?php
	if (isset($_POST['search'])) {
        $response = "<ul><li>No data found!</li></ul>";
        
        $connection = new mysqli("localhost", "root", "", "medicatime");
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT * FROM medicament WHERE nom LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul>";

			while ($data = $sql->fetch_array())
				$response .= "<li>" . $data['nom'] . "</li>";

			$response .= "</ul>";
		}


		exit($response);
	}
?>