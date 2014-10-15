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
		echo "<table class='table table-striped table-hover'>";
		echo "<tr>
					<td><b>Category</b></td>
					<td><b>Total Sum</b></td>
					<td><b>Total Items</b></td>
					<td><b>Total Percentage</b></td>
			</tr>";
		for ($y=0, $x = 1; $y < sizeof($evaluated) ; $y++, $x++) { 

			$percentage = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$y]['percentage']/100);
			$total = $sum += $percentage;
			echo "<tr>
					<td>".$category[$y]['cat_name']."</td>
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
 <br />
 <br />
 <br />

