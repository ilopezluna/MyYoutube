<?php
	require_once 'config.php';
if (isset($_POST) && isset($_POST['dateQuery'])) 
{
	$con = mysql_connect($uri,$user,$password);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db($database, $con);
	$date = $_POST['dateQuery'];
	// $province = $_POST['province'];
	
	$sql = ($date == '') ? $videosSelectQuery : $videosSelectQuery. "where " . $videoDate . " = '".$date."'";
	 
	 //TODO cambiar nombre de var de city!
	// $sql = ($province == '') ? $sql . " and  ".$videoCity" = " . $province; 
			 
	$resultSet = mysql_query($sql);
	if (!$resultSet)
	 {
    	die('Consulta no válida: ' . mysql_error());
	}
	 
	// $num =  mysql_num_rows ( $resultSet );
	// echo "<table class='alerts'><td>";
// 	
	// while($row = mysql_fetch_assoc($resultSet))
	// {
		// $youtubeUrl = "http://www.youtube.com/v/".$row['url']."?fs=1&amp;autoplay=1";
		// $youtubeThumbnail = "http://img.youtube.com/vi/".$row['url']."/1.jpg";
		// echo "<tr>";
		// echo "<a title='Título' href=".$youtubeUrl."><img src=".$youtubeThumbnail."></a>";
		// echo "</tr>";
	// }
	// echo "</td></table>"; 
	 
	 
	$num =  mysql_num_rows ( $resultSet );
	echo "<ul class='polaroids'>";
	while($row = mysql_fetch_assoc($resultSet))
	{
		$youtubeUrl = "http://www.youtube.com/v/".$row['url']."?fs=1&amp;autoplay=1";
		$youtubeThumbnail = "http://img.youtube.com/vi/".$row['url']."/1.jpg";
		echo "<li>";
		echo "<a class='video' title='Título' href=".$youtubeUrl."><img class='fancybox-media' src=".$youtubeThumbnail."></a>";
		echo "</li>";
	}
	echo "</ul>";

	// Es necessari aixo?
	mysql_free_result($resultSet);
	mysql_close($con);
}
?>