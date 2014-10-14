<?php if ($teacher_subjects): ?>
	<table>
		<tr>
			<td><strong>Subject Code: </strong></td>
			<td><?php echo $teacher_subjects[0]['subj_code']; ?></td>
		</tr>
		<tr>
			<td><strong>Subject Description: </strong></td>
			<td><?php echo $teacher_subjects[0]['subj_desc']; ?></td>
		</tr>
		<tr>
			<td><strong>Subject Schedule: </strong></td>
			<td><?php echo $teacher_subjects[0]['schedule']; ?></td>
		</tr>
		<tr>
			<td><strong>Subject Time: </strong></td>
			<td><?php echo $teacher_subjects[0]['time']; ?></td>
		</tr>
		<tr>
			<td><strong>Subject Room: </strong></td>
			<td><?php echo $teacher_subjects[0]['room']; ?></td>
		</tr>
		<tr>
			<td><strong>Subject Date Evaluated: </strong></td>
			<td><?php echo $teacher_subjects[0]['dateevaluation']; ?></td>
		</tr>
	</table>
<?php endif ?>
<?php 
echo "<br />";
	if ($evaluated != null) {
		$sum = 0;
		echo "<table class='table table-hover table-striped'>";
		echo "<tr>
					<td style='background-color: #000; color:#fff;'><b>Category</b></td>
					<td style='background-color: #000; color:#fff;'><b>Percentage</b></td>
					<td style='background-color: #000; color:#fff;'><b>Poor</b></td>
					<td style='background-color: #000; color:#fff;'><b>Fair</b></td>
					<td style='background-color: #000; color:#fff;'><b>Good</b></td>
					<td style='background-color: #000; color:#fff;'><b>Very Good</b></td>
					<td style='background-color: #000; color:#fff;'><b>Excellent</b></td>
					<td style='background-color: #000; color:#fff;'><b>Majority Votes</b></td>
			</tr>";
		for ($y=0; $y < sizeof($evaluated) ; $y++) { 
			$max_value = max($evaluated[$y]['choice_poor'],$evaluated[$y]['choice_fair'],$evaluated[$y]['choice_good'],
				$evaluated[$y]['choice_very_good'],$evaluated[$y]['choice_excellent']);
		
			$percent = $category[$y]['percentage']/100;

			$percnt = $max_value * $percent;
			echo "<tr>
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

		if ($comments){
		 	echo "<table>
					<thead>
						<tr>
							<th>Comments</th>
						</tr>
					</thead>
					<tbody>";
			foreach ($comments as $comment) {
				echo "<tr>
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