<?php 
	/*$array = ['ganesh','akshay','dinesh'];
	echo '<pre>';
	print_r($array);
	for($a=0; $a<count($array); $a++){
		print $array[$a];
	}
	$a=0;
	while ($a<=2){
		print $array[$a];
		$a++;
	}
	
	do {
		print $array[$a];
		$a++;
	} while($a<=2);
	*/
	$array = ['ganesh','Teja','Manoj','Murali','nagi','Nani','Ashok','Santhu','Kavya','Venu'];
	for($i=0; $i<=count($array); $i++){
		echo '<tr>';
		for($a=0; $a<=count($array); $a++){
			print $array[$a];
		}
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	1. variables print and declaration
	2. Constants print and declaration
	3. Using For loop Print 10 records in Tabular format
	4. Using while loop Print 10 records in Tabular format
	5. Using Do while loop Print 10 records in Tabular format
<body>
</body>
</html>