<!-- Exercise on pages 362 - 364 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>State Capitals</title>
</head>
<body>
	<h1 style="color:blue; text-align: center;">Do you Know Your State Capitals?</h1>
	<?php 
		$StateCapitals = array("Connecticut" => "Hartford","Maine" => "Augusta", "Massachusetts" => "Boston", "New Hampshire" => "Concord", "Rhode Island" => "Providence", "Vermont" => "Montpelier");

		if(isset($_POST["submit"])){
			$Answers = $_POST["answers"];
			if(is_array($Answers)){
				foreach($Answers as $State => $Response){
					$Response = stripslashes($Response);
					if(strlen($Response) > 0){
						if(strcasecmp($StateCapitals[$State], $Response) == 0){
							echo "<p>Correct! The capital of $State is $StateCapitals[$State].</p>\n";
						}
						else{
							echo "<p>Sorry, the capital of $State is not '$Response'</p>\n";
						}
					}
					else{
						echo "<p>You did not enter a value for the capital of $State.</p>\n";
					}
				} // end of foreach loop
			}
			echo "<p><a href='capitals.php'>Try Again?</a></p>\n";
		} // end of main if statement
		else{
			echo "<form action='Capitals.php' method='POST'>\n";
			foreach($StateCapitals as $State => $Reponse){
				echo "The capital of $State is: <input type='text' name='answers[", $State , "]' /><br/>\n";
			}
			echo "<input type='submit' name='submit' value='Check Answers' />";
			echo "<input tpye='rest' name='reset' value='Reset Form' />\n";
			echo "</form>\n";

		}

	 ?>
</body>
</html>