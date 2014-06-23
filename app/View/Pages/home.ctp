<html>
<body>
<header>
	<?php   echo $this->Html->script('jquery');?>
	
	
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
					alert("Good Job!" + "\n\n" + "Did you know... "+"\n"+fact(ans))
				}else {alert("Better luck next time!")}
				 
			}
			function fact(planet){
			if (planet=="Sun"){
				return "the Sun is 6000 degrees Celsius or 10832 degrees Farenheit!"
			}
			else if(planet == "Mercury"){
				return "Mercury has NO Atmosphere!"
			}
			else if(planet == "Venus"){
				return "Venus is the hottest planet, even though its only SECOND closest to the Sun!"
			}
			else if(planet == "Earth"){
				return "Earth is the ONLY planet we know to have life...So far..."
			}
			else if(planet == "Mars"){
				return "Mars has the biggest volcano in the Solar System! It is called Olympus Mons!"
			}
			else if(planet == "Asteroid Belt"){
				return " About half the mass of the belt is contained in only four asteroids called \n Ceres, Vesta, Pallas and Hygiea!"
			}
			else if(planet == "Jupiter"){
				return "Jupiter's \"Great Red Spot\" is a storm big enough to fit 2 or 3 planets the size of Earth!"
			}
			else if(planet == "Saturn"){
				return "Saturn's rings are more than almost as wide as the distance from the Earth to the Moon!"
			}
			else if(planet == "Uranus"){
				return "Uranus' tilt is so extreme, it looks like Uranus is sideways! "
			}
			else if(planet == "Neptune"){
				return "Only ONE spacecraft has ever flown past Neptune!"
			}
			else if(planet == "Pluto"){
				return "Pluto isn't really a planet, it is called a dwarf planet!"
			}
			else if(planet == "Comet"){
				return "Comet!"
			}
			}
	</script>
</header>
<?php
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>

<h2><center>Our Solar System</center></h2>
<div>
	<center class="subtitle">Just a small fragment of the Milky Way</center>
		<h3>Name that Celestial Body</h3>
		<div id="popupContact">
			
		</div>
		<div>
		</div>
		<div id="img">
			<a><img src='img/planets/sun.png' onclick="quest('Sun');"></a>
			<a><img src='img/planets/mercury.png' onclick="quest('Mercury');"></a>
			<a><img src='img/planets/venus.png' onclick="quest('Venus');"></a>
			<a><img src='img/planets/earth.png' onclick="quest('Earth');"></a>
			<a><img src='img/planets/mars.png' onclick="quest('Mars');"></a>
			<a><img src='img/planets/belt.png' onclick="quest('Asteroid Belt');"></a>
		</div>
		<div id="img">
			<img src='img/planets/jupiter.png' onclick="quest('Jupiter');"></a>
			<img src='img/planets/saturn.png' onclick="quest('Saturn');"></a>
			<img src='img/planets/uranus.png' onclick="quest('Uranus');"></a>
			<img src='img/planets/neptune.png' onclick="quest('Neptune');"></a>
			<img src='img/planets/pluto.png' onclick="quest('Pluto');"></a>
			<img src='img/planets/comet.png' onclick="quest('Comet');"></a>
			<?php // echo $this->Js->get('#img')->event('click', $quest); ?>
			<div id="img"><?php //echo $this->Html->image("planets/saturn.png", array("alt" => "Animal Health")); ?></div>
		
		</div>
		<?php
			echo $this->Js->link('Sun.png', array('hello'), array('update'=>'#success'));
		?>

		<div id="success"></div>
		
		


		
<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>		
</div>

</body>
</html>




