<!Doctype html>
<html>
	<head>
		<title>Array</title>
	</head>
	<body>
		<table border="1" cellpadding="0" cellspacing="0">
			<tr>
				<th>S.No</th>
				<th>Persons</th>
			</tr>
			<?php 
				$list = ['ganesh','Teja','Manoj','Murali','nagi','Nani','Ashok','Santhu','Kavya','Venu'];
				for($i=0; $i<count($list); $i++){
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $list[$i]; ?></td>
					</tr>
				<?php }
			?>
			
		</table>
	</body>
</html>