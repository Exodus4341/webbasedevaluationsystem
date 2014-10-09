<?php 
 // var_dump($evaluated);
echo "<br />";
	if ($evaluated != null) {
		$sum = 0;
		echo "<table class='table'>";
		echo "<tr>
					<td><b>Category</b></td>
					<td><b>Percentage</b></td>
					<td><b>Poor</b></td>
					<td><b>Fair</b></td>
					<td><b>Good</b></td>
					<td><b>Very Good</b></td>
					<td><b>Excellent</b></td>
					<td><b>Majority Votes</b></td>
			</tr>";
		for ($y=0; $y < sizeof($evaluated) ; $y++) { 
			$max_value = max($evaluated[$y]['choice_poor'],$evaluated[$y]['choice_fair'],$evaluated[$y]['choice_good'],
				$evaluated[$y]['choice_very_good'],$evaluated[$y]['choice_excellent']);
		
			$percent = $category[$y]['percentage']/100;

			$percnt = $max_value * $percent;
			echo "<tr style='background-color:orange;'>
					<td>".$category[$y]['cat_name']. " </td>
					<td>".$max_value * $percent."%</td>
					<td>".$evaluated[$y]['choice_poor']."</td>
					<td>".$evaluated[$y]['choice_fair']."</td>
					<td>".$evaluated[$y]['choice_good']."</td>
					<td>".$evaluated[$y]['choice_very_good']."</td>
					<td>".$evaluated[$y]['choice_excellent']."</td>
					<td>".$max_value."</td>
					</tr>";	
				 $total = $sum += $percnt;
			
			// echo "category: ".  ." - " . $max_value * $percent."% <br />";
		}
		echo "<tr>
					<td>Total Percentage: </td>
					<td>".$total."% out of 100%</td>
				</tr>";
		echo "</table>";
	}
	else
	{
		echo "No Evalation Conducted!";
	}


 ?>