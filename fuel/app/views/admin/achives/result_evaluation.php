<?php 
if ($teachers) {
	echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$teachers[0]['pic_url'], array('class' => "thumbnail", "style" => "width:150px; height:150px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><b>".ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']) ."</b></td>
				</tr>
				<tr>
					<td>teachersde: </td>
					<td><b>".$teachers[0]['subj_code']."</b></td>
				</tr>
				<tr>
					<td>teachersscription: </td>
					<td><b>".$teachers[0]['subj_desc']."</b></td>
				</tr>
				<tr>
					<td>Schedule: </td>
					<td><b>".$teachers[0]['schedule']."</b></td>
				</tr>
				<tr>
					<td>Time: </td>
					<td><b>".$teachers[0]['time']."</b></td>
				</tr>
				<tr>
					<td>Room: </td>
					<td><b>".$teachers[0]['room']."</b></td>
				</tr>
			</tabe>";
}
echo "";
	if ($evaluated) {
		$sum = 0;
		echo Html::anchor('admin/studentevaluation/reports_per_subject/'.$evaluated[0]['teacher_id'].'/'.$evaluated[0]['subj_id'], '', array('class'=>'glyphicon glyphicon-print btn btn-success
						 btn-sm', 'title'=>'Print Summary Reports', 'style' => 'float:right'));
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
		foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
		echo "<footer>
				<td><b>Total Percentage:</b></td>
				<td></td>
				<td></td>
				<td><b>".number_format($total, 2, '.', '')." %".$rate."</b></td>
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

