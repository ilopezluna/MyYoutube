<?php
	require_once 'config.php';
	//TODO Obrir i tancar la connexio cada cop?
	//TODO es necessari la primera condicio?
	$con = mysql_connect($uri,$user,$password);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db($database, $con);
	$resultSet = mysql_query($lastVideosSelectQuery);
	if (!$resultSet)
	 {
    	die('Consulta no válida: ' . mysql_error());
	}
	 
	$num =  mysql_num_rows ( $resultSet );
	echo "<table border='1'><tr>";
	echo "<tr>";
	while($row = mysql_fetch_assoc($resultSet))
	{
		echo "<iframe type='text/html' width='120' height='100' src='http://www.youtube.com/embed/cI-vg2QAtQM' frameborder='1'></iframe>";
	}
	echo "</tr>\n";
	echo "</table>";
	// Es necessari aixo?
	mysql_free_result($resultSet);
	mysql_close($con);
?>