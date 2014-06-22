<html>
<body>
<header>
	<script language="javascript" type ="text/javascript">
			function sunPop(){
				sun = "The Sun is hot"
				window.promt(sun)
			}
			function quest(answ){
				var ans = answ
				var x = prompt("What is this body called?","Enter your answer")
				while (x !=null && x != ans){
					x = prompt("Please try again.","Enter your answer")
				}
				if (x == ans){
					alert("Good Job!")
				}else {alert("Better luck next time!")}
				 
			}
	</script>
</header>
<?php
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		$path = WWW_ROOT;
		?>
<?php ob_start(); ?>
<h2><center>Our Solar System</center></h2>
<div>
	<center class="subtitle">Just a small fragment of the Milky Way</center>
		<h3>Name that Celestial Body</h3>
		<div id="img">
			<a><img src='img/planets/sun.png' onclick="quest('sun');"></a>
			<a><img src='img/planets/mercury.png' onclick="quest('mercury');"></a>
			<a><img src='img/planets/venus.png' onclick="quest('venus');"></a>
			<a><img src='img/planets/earth.png' onclick="quest('earth');"></a>
			<a><img src='img/planets/mars.png' onclick="quest('mars');"></a>
			<a><img src='img/planets/belt.png' onclick="quest('asteroid belt');"></a>
		</div>
		<div id="img">
		<img src='img/planets/jupiter.png' onclick="quest('jupiter');"></a>
			
		</div>
		
		
</div>
</body>
</html>




