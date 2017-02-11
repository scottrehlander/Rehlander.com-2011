<?php

	function getDBConnection()
	{
		$dbServer = "db1524.perfora.net";
		$dbName = "db248516050";
		$dbUser = "dbo248516050";
		$dbPassword = "pQEMNGD7";
		
		$con = mysql_connect($dbServer, $dbUser, $dbPassword);
		if(!$con)
			die(mysql_error());
			
		mysql_select_db($dbName, $con);

		return $con;
	}
	
	function getNavigation($con)
	{
		$sql = "SELECT * FROM Navigation";
		$result = prepareCommand($sql, $con);
		return $result;
	}
	
	function getGalleryPics($con, $albumName)
	{
		$sql = "SELECT * FROM jsGallerys WHERE albumName = '" . $albumName . "'";
		$result = prepareCommand($sql, $con);
		return $result;
	}
	
	function prepareCommand($sql, $con)
	{
		$result = mysql_query($sql, $con) or die("mySql error: " . mysql_error());
		return $result;
	}
?>