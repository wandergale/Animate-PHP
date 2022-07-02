<html>
	<head>
	
		<title>Desafio PHP</title>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
		<style>
			.change {
				width: 500px;
				height: 200px;
				position: relative;
			}
			#button {
				margin-top: 50px;
				padding: .5em 1em;
				text-decoration: none;
			}
			#effect {
				width: 140px;
				height: max;
				padding: 0.4em;
				position: relative;
			}
			#effect h3 {
				margin: 0;
				padding: 0.4em;
				text-align: center;
			}
		</style>
		
	</head>

	<body>
		<div class="change">
			<div id="effect">
				<?php
					print("<h3>Animate</h3>");
					print("<p>The animate() method performs a custom animation of a set of CSS properties. This method changes an element from one state to another with CSS styles..</p>")
				?>
			</div>
		</div>
		<button id="button">Click to change</button>
	</body>
	
	<script>
		$( function() {
			let state = true;
			$( "#button" ).on( "click", function() {
				if (state) {
					$( "#effect" ).animate({
						width: 500
					}, 1000 );
				} else {
					$( "#effect" ).animate({
						width: 240
				}, 1000 );
			}
			state = !state;
			});
		});
	</script>

</html>
