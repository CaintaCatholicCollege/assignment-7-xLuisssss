<!doctype html>
<head>
</head>
<body>
<?php
	$age = 54;

	if ($age < "10" ) {
	  echo "You are too young!";
	} 

	elseif ($age > "10" && $age <= "18") {
	  echo "Young lad!";
	} 

	elseif ($age > "18" && $age <= "30") {
	  echo "Young adult!";
	} 

	elseif ($age > "30" && $age <= "60") {
	  echo "Adulthood!";
	} 

	else  {
	  echo "You're old";
	}
	
	?>
</body>
</html>