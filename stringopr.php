<?php
	
	// Constants
	define("TITLE", "String Operators");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 17;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			
			
			<h2>Final Example</h2>
			
			<div class="sandbox">
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$a = "Hola ";
					$b = "Mi Amigos!";
					$c = $a . $b;
					
					echo $c;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Hola ";
					$a .= "Mi Amigos!";
					
					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
		</div><!-- end wrapper -->
		
			</body>
</html>
