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
	if ($evaluated) {
		$sum = 0;
		echo "<table class='table table-striped table-hover'>";
		echo "<tr>
					<td style='background-color: #000; color:#fff;'><b>Category</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Sum</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Items</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Percentage</b></td>
			</tr>";
		for ($y=0, $x = 1; $y < sizeof($evaluated) ; $y++, $x++) { 
		
			$percentage = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$y]['percentage']/100);
			$total = $sum += $percentage;
			echo "<tr>
					<td>".$category[$y]['cat_name']. " </td>
					<td>".$evaluated[$y]['category_sum'.$x]."</td>
					<td>".$questionsum[$y]['category'.$x]."</td>
					<td>".number_format($percentage, 2, '.', '')." %</td>
					</tr>";					
		}
		echo "<footer>
				<td><b>Total Percentage:</b></td>
				<td></td>
				<td></td>
				<td><b>".number_format($total, 2, '.', '')." %</b></td>
			</footer>";
		echo "</table>";
		

		 if ($comments){
		 	echo "<table>
					<thead>
						<tr>
							<th><h2>Comments</h2></th>
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