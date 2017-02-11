<?php 
	session_start(); 
	require("includes/ScottDB.php");
	$con = getDbConnection();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rehlander Technologies</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<div id="wrap">
  <div id="masthead">
  		<h1>
    	<img src="rehlogo.png" height="50px" width="50px" style="vertical-align: middle" />
    	Rehlander Technologies</h1>
    
    	<!--<h1>Rehlander Technologies</h1>-->
    <div id="menucontainer">
      <div id="menunav">
        <ul>
			<?php
				$nav_links = getNavigation($con);
				while($row = mysql_fetch_array( $nav_links ))
				{
					if($row['Link'] == "contact.php")
						echo("<li><a href=\"" . $row['Link'] . "\" class=\"current\"><span>" . $row['Name'] . "</span></a></li>");
					else
						echo("<li><a href=\"" . $row['Link'] . "\"><span>" . $row['Name'] . "</span></a></li>");
				}
			?>
        </ul>
      </div>
    </div>
  </div>
  <div id="container">
  		<br />
		<p>Scott Rehlander - Lead Developer</p>
		<p>Email: srehlander(at)gmail.com</p>
		
		<br><br>
		
    </div>
  

		<div id="footer">&copy;2008 All Rights Reserved &bull; Scott Rehlander &nbsp;&bull;&nbsp; Best viewed using Internet Explorer 7.0 </div>
</div>
</div>
</body>
</html>
