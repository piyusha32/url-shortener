
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP url shortener</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="header"> Php URL shortener<hr /></div>
<div class="content shorten">

	<?php

	include('config.php');
	mysql_select_db("url_shortner", $con); //Replace with your MySQL DB Name
	$urlinput=mysql_real_escape_string($_POST['url']); 
	if($urlinput!=""){
	$id=rand(10000,99999);
	$shorturl=base_convert($id,20,36);
	if(substr( $urlinput, 0, 7 ) == "http://" || substr( $urlinput, 0, 8 ) == "https://"){
		$urlinput = $urlinput;
	}else{
		$urlinput = "http://".$urlinput;
	}
	$sql = "insert into links (id,shorten_url,url) values ($id,'$shorturl','$urlinput')";
	mysql_query($sql,$con);
	echo "Shortened url is <a href=decoder.php?decode=".$shorturl." target='_blank'>". $shorturl ."</a>";
	}
	mysql_close($con);
	?>
</div>
</body>
</html>