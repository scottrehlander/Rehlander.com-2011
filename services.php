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
					if($row['Link'] == "services.php")
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
	  <p></p><br>
		<p>
		<h3>Programming</h3>
		<p>
			Rehlander Technologies has an unlimited number of resources available for any job that you may have.  Our programming is done quickly and thoroughly with ample
			documentation.  Regression testing is maintained for all iterations of a particular project and is guaranteed pass even as projects grow and change.  We can use your choice of language
			and specialize in many technologies including Microsoft .NET, WPF, Silverlight, Java, C++, PHP, Python, LUA, Oracle, MySQL, XHTML, CSS, and more.  If you have a project in mind, please contact us for a 
			consultation.
		</p>
		<h3>Design</h3>
		<p>
			Windows Application GUI development is a primo specialty for Rehlander Technologies.  We have extensive experience in the two newest Microsoft
			GUI	technologies WPF and Silverlight.  As always, our GUI applications are scalable and user-friendly.  We also have extensive experience with Website Design and can develop rapid prototypes of what
			you require on request.  Design can be driven by the requirements of the customer or created from the expertise of Rehlander Technologies.  Please contact us to setup a quick consultation at your convenience.
		</p>
		<h3>Maintenance</h3>
		<p>
			All of the software written by Rehlander Technologies will be tested thoroughly before the final release and throughout the development process.  Bug fixes are covered by the standard Rehlander 
			Technologies project agreement.  Additional maintance plans are available that will allot for time to update applications and/or websites on a regular basis.  Data entry services
			are also available.
		</p>
		<h3>Consulation</h3>
		<p>
			Is your current software team stuck on a particular issue?  Need help deciding what technology will suit your project best?  Or do you just need someone
			to fix a few bugs or add a few features to your existing product?  Rehlander Technologies has you covered there too.  We can dive into any existing project and
			provide the level of service you need.  Please contact us if you need anything done, even if its only an hours worth of work.  Maybe, even, it's something we can do for free.
		</p>
		<p>Small sized custom applications are quoted on a per-project basis and service plans are available for most all situations.  Larger products are developed using an
			Agile model and are charged per deliverable feature.  Please contact us with any inquiries.</p>
    </div>
  

		<div id="footer">&copy;2008 All Rights Reserved &bull; Scott Rehlander &nbsp;&bull;&nbsp; Best viewed using Internet Explorer 7.0 </div>
</div>
</div>
</body>
</html>
