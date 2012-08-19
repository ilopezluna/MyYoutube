<?php

if (isset($_POST) && isset($_POST['url'])) 
{
	require_once 'config.php';

	/* 
	 * Obtenim el ID de youtube 
	 */
	preg_match(
        '/[\\?\\&]v=([^\\?\\&]+)/',
        $_POST['url'],
        $matches
    );
	$url =  $matches[1];
	$date = $_POST['date'];
	$city = $_POST['provincia'];
	$email = $_POST['email'];
	
	$con = mysql_connect($uri,$user,$password);
	if (!$con)
	  {
	  	die('Could not connect: ' . mysql_error());			
	  }
	
	mysql_select_db($database, $con);
	$sql = $videosInsertQuery . '("'.$url.'", "'.$date.'", "'.$city.'", "'.$email.'")';
	
	if (!mysql_query($sql,$con))
	  {
	  	
		$duplicate = (mysql_errno() == 1062) ? 'Duplicate!' : mysql_error();
		echo $duplicate;
	  }
	mysql_close($con);
}
?>