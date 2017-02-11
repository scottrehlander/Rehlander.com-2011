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
					if($row['Link'] == "index.php")
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
    <!--<div id="sidebar">
      <h2>Links</h2>
      <div id="navcontainer">
        <ul>
          <li><a href="http://www.codeplex.com/">Codeplex</a> </li>
          <li><a href="http://www.stackoverflow.com/">Stack Overflow</a> </li>
          <li><a href="http://www.digg.com">Digg</a> </li>
          <li><a href="http://www.channel9.com">Channel 9</a> </li>
        </ul>
      </div>
      <p>Thanks for visiting Rehlander.com.  Our goal is to provide you with only the highest quality software.</p>
	  </div>
	
      <div id="content">
      <h2>Welcome to <span style="font-weight:bold; color:#4592BE;">Rehlander</span>.com</h2>
	-->
	<br />
	  <p>Rehlander Technologies is an innovative company that creates, modifies, and optimizes custom applications for small to medium businesses.  
		We deliver our products as user-friendly, well-documented, and efficient applications that help to increase productivity.  
		Rehlander technologies can provide anything from custom platform-independant database applications to simple and affordable web sites.</p><br>
		<p><blockquote>We specialize in many technologies including Microsoft .NET, WPF, Silverlight, Java, C++, PHP, Python, LUA, Oracle, MySQL, XHTML and CSS.  If you have a project in mind, we can make it happen. 
		We also have generic website templates available that can be deployed with your businesses information for a low one time setup fee.</blockquote></p><br>
		<p>Small sized custom applications are quoted on a per-project basis and service plans are available for most all situations.  Larger products are developed using an
			Agile model and are charged per deliverable feature.  Please contact us with any inquiries.</p>
		<br />
    </div>
  

		<div id="footer">&copy;2008 All Rights Reserved &bull; Scott Rehlander &nbsp;&bull;&nbsp; Best viewed using Internet Explorer 7.0 </div>
</div>
</div>
</body>
</html>
