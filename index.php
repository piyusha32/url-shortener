<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP url shortener</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="header"> Php URL shortener<hr /></div>
<div class="content">
<form id="form1" name="form1" method="post" action="shorten.php" >
  
  <p><strong> Url:</strong>
    <input type="text" name="url" id="url"  size="45" required />
  </p>
  <p>
    <input class="form-controller" type="submit" name="Submit" id="Submit" value="Shorten"/>
  </p>
  <p>&nbsp;</p>
</form>
<table class="table table-bordered table-striped">
<thead>
<tr>
	<th>Id</th>
	<th>URL</th>
	<th>Shorten URL<span><i>(Click to redirect)</i></span></th>
</tr>
</thead>
<tbody>
<?php
	
	include('config.php');
	mysql_select_db("url_shortner", $con); //Replace with your MySQL DB Name

	$result=mysql_query("select * from links");
	$i = 0;
	while($row = mysql_fetch_array($result))
	{
		$i++;
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['url']; ?></td>
			<td><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['shorten_url']; ?></a></td>
		</tr>
		
		<?php
	}
?>
</tbody>
</table>
</div>
</body>
</html>