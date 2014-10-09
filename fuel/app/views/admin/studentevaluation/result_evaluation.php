<?php 
 // var_dump($teachers);
if ($teachers) {
	echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$teachers[0]['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>".ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']) ."</td>
				</tr>
				<tr>
					<td>teachersde: </td>
					<td>".$teachers[0]['subj_code']."</td>
				</tr>
				<tr>
					<td>teachersscription: </td>
					<td>".$teachers[0]['subj_desc']."</td>
				</tr>
				<tr>
					<td>Schedule: </td>
					<td>".$teachers[0]['schedule']."</td>
				</tr>
				<tr>
					<td>Time: </td>
					<td>".$teachers[0]['time']."</td>
				</tr>
				<tr>
					<td>Room: </td>
					<td>".$teachers[0]['room']."</td>
				</tr>
			</tabe>";
}
echo "";
	if ($evaluated) {
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
			// echo "category: ". " " . $max_value."% <br />";
		}
		echo "</table>";
		echo "<hr />";
		echo "<tr>
					<td>Total Percentage: </td>
					<td><b>".$total."%</b> out of 100%</td>
				</tr>";

		 if ($comments){
		 	echo "<table class='table'>
					<thead>
						<tr>
							<th><h2>Comments</h2></th>
						</tr>
					</thead>
					<tbody>";
			foreach ($comments as $comment) {
				echo "<tr style='background-color:orange;'>
								<td>".ucwords($comment['comment'])."</td>
						</tr>";
			}
			   echo "</tbody></table>";
		 }
	}
	else
	{
		echo "No Evalation Conducted!";
	}
 ?>
 <br />
 <br />
 <br />

