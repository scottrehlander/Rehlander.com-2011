<?php 
	session_start(); 
	require("../includes/ScottDB.php");
	$con = getDbConnection();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rehlander Technologies</title>
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
		<script src="scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
		<script src="scripts/mootools-1.2-more.js" type="text/javascript"></script>
		<script src="scripts/jd.gallery.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>


<div id="wrap">
  <div id="masthead">
  		<h1>Rehlander Photography</h1>
    
    	<!--<h1>Rehlander Technologies</h1>-->
    <div id="menucontainer">
      <div id="menunav">
        <ul>
        </ul>
      </div>		
    </div>
  </div>
  <div id="container">

	<br />
<div class="content">
	
	<script type="text/javascript">
        function startGallery() {
            var myGallery = new gallery($('myGallery'), {
                timed: true
            });
        }
        window.addEvent('domready',startGallery);
    </script>
    
			<div id="myGallery">
				<?php
                    $pics = getGalleryPics($con, 'main');
                    while($row = mysql_fetch_array( $pics ))
                    {
						echo("<div class=\"imageElement\">");
							echo("<h3>" . $row['pictureTitle'] . "</h3>");
							echo("<p>" . $row['pictureDescription'] . "</p>");
							echo("<a href=\"#\" title=\"open image\" class=\"open\"></a>");
							echo("<img src=\"" . $row['pictureUrl'] . "\" class=\"full\" />");
							echo("<img src=\"" . $row['pictureThumbUrl'] . "\" class=\"thumbnail\" />");
						echo("</div>");
                    }
                ?>
			</div>
            
    </div>
  
<br/><br/>
		<p align="center">&copy;2010 All Rights Reserved &bull; All photographs property of Rehlander Technologies 
        </p>
</div>
</div>
</body>
</html>
