<?php
try
{
    $bdd = new PDO('mysql:host=localhost; dbname=medicatime', 'root', '');
}
catch(Exception $e)  
{
    die('Error : '.$e->getMessage());
}
?> 

<div>
    <a href="medicatime.php">
        <img class="hvr-bob"  id="logo" src="../../images/logo_medicatime.png" >
    </a>
</div>

<div id="header_aide">
    
    <ul>
    	<a href="aide.php" id="linkstyle"> Aide </a>
    </ul>

</div>  