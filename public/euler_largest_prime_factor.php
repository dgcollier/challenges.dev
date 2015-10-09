<?php 

	$problem = 600851475143;
	$primes = array();

	for($i = 2; $i < 6858; $i++) {		

		if($problem % $i == 0) {
			if(isFactorPrime($i)) {
				array_push($primes, $i);
			}
		}	
	}

	$answer =  array_pop($primes);

	function isFactorPrime($num)
	{
		$count = 0;

		for($i = 2; $i < $num; $i++) {
			if($num % $i == 0) {
				$count++;
			}

			if(!$count == 0) {
				return false;
			}
		}

		if($count == 0) {
			return true;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Largest Prime</title>
</head>
<body>
	<div class="container">
		<h1>Largest Prime Factor</h1>
		<h4>Question:</h4>
		<h4><em>What is the largest prime factor of the number 600851475143 ?</em></h4>

		<h4>Answer:</h4>
		<h4><strong><?php echo $answer ?></strong></h4>

		<h5>Thanks to <a href="https://projecteuler.net/problem=3">Project Euler</a></h5>
	</div>
</body>
</html>