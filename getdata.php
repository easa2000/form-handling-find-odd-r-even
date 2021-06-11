<!DOCTYPE html>
<html>
<head>
	<title>get data</title>
</head>
<body>
	<?php
	  print"The given number is : ";
	  print $_POST["no"];
	  $val = $_POST["no"];
	  if($val % 2 == 0)
	  {
	  	print"<br>The number is Even";
	  }else{
	  	print"<br>The number is Odd";
	  }
	?>

</body>
</html>