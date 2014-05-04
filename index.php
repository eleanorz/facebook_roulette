<!DOCTYPE html>
<html>
<head>
	<title>Facebook Roulette</title>
</head>
<body>

<script>
// Generic FB SDK access:
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      xfbml      : true,
      version    : 'v2.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php 

/**
* Spinning Roulette!
*/
class Roulette
{
	
	function __construct($input)
	{
		$this->number_slots = $input;
		$this->hit_number = rand(1, $this->number_slots);
		echo "<br>".$input." is the number of slots, and  ".$this->hit_number." is the winning slot";
	}

	function Roll()
	{
		for ($i=0; $i < $this->number_slots; $i++) { 
			$color = rand(1,2);
			if ($color == 1)
			{
				$color = "black";
			}
			else
			{
				$color = "red";
			}
			$result = rand(1, $this->number_slots);
			echo "<br> ".$color." - ".$result." is your ".($i+1)."th roll";
			if ($result == $this->hit_number)
			{
				echo "<br> bang, you are dead! (or, alternatively, you hit the jackpot!!!)";

				echo "<pre>
				               _____
				            .':::::::'.
				       ___ /:::::::::::\____ _            _.''_
				    /||   ||`.______.-`||   | |\_\\\\____/_ _.-'\\\\
				.|-| ||===||           ||===| ||_||||____|_| .-'|||||
				'|-| ||===||===========||===| ||_||||____|_|`-._|||||
				    \||___||___________||___|_|/ ////       `-._////
				     )      )  _____  (
				    /`--.._/ .'| (  '. \
				    )     ( (  './    ) )
				   /`--.___\ '._____.' /
				   )       /'._______.' 
				  /`--..__/
				  )       )
				 /`--..__/
				(        )
				 `------'
				</pre>";
			}
		}
	}
}

$Russion = new Roulette(6);
$Russion->Roll();

?>

</body>
</html>