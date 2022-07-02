<html>
	<head>
		<title>PHP 2</title>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
		<style>
			.linha {
				font-weight: bold;
				color: blue;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
		
	</head>
	
	<body>
		
		<?php
			for ( $i = 0 ; $i < 10 ; $i++) {
				print( "<span class=\"linha\">Linha número " .$i . "</span><br />");
			}
		?>
	</body>
	
	<script>
		$( document ).ready(function() {
			alert("Alerta rodando");
		});
	</script>

</html>
