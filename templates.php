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
					if($row['Link'] == "templates.php")
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
	<h2>Wingmann.com</h2>
	  <table width="800px">
		  <tr>
			  <td width="225">
				<a href="wm.png"><Image src="wm.png" width="195" /></a>
			  </td>
			  <td> 
				  Wingmann.com
				  was created in part by Rehlander Technologies.  This is a social nightlife site that emphasises the opinion of hand-selected city insiders.  All backend coding was
				  provided by Rehlander Technologies.  Rehlander Technologies also provided support for Website Design.</p>
			  </td>
		  </tr>
		</table>
		<br /><br />
	<h2>Northeast Car Audio</h2>
		<table width="800px">
		  <tr>
			  <td> 
				  Northeast Car Audio is a website created for Car Audio enthusiasts in the Northeast Region of the United States.
				  Both Design and Backend coding provided by Rehlander Technologies.
			  </td>
			  <td width="225">
				<a href="NeCarAudio.png"><Image src="NeCarAudio.png" width="195" /></a>
			  </td>
		  </tr>
	  </table>
	  <br /><br />
    <h2>Cloud</h2>
	  <table width="800px">
		  <tr>
			  <td width="285">
				<a href="calendar.png"><Image src="calendar.png" width="225" /></a>
			  </td>
			  <td>
				The Cloud calendar is a Rehlander Technologies desktop application created using Microsoft WPF.  It is currently
				used in-house and is configurable to have
				multiple data sources including a local XML file, a database on the local network, or data collectioned from
				a SOAP webservice.
				This application is customizable for whatever application you may desire.  Multiple instances of the application
				can share the same data source from the internet (the Cloud).
			  </td>
		  </tr>
		</table>
		<br />
    </div>
  

		<div id="footer">&copy;2008 All Rights Reserved &bull; Scott Rehlander &nbsp;&bull;&nbsp; Best viewed using Internet Explorer 7.0 </div>
</div>
</div>
</body>
</html>
