<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/studentevaluation', 'Teachers'); ?></li>
  <li><?php echo Html::anchor('admin/studentevaluation/view_subjects/'.$teachers[0]['uid'], 'View Subjects'); ?></li>
  <li class="active">Result Evaluation</li>
</ol>
<?php 
 // var_dump($teachers);
if ($teachers) {
	echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$teachers[0]['pic_url'], array('class' => "thumbnail", "style" => "width:120px; height:120px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<strong><td>".ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']) ."</td></strong>
				</tr>
				<tr>
					<td>Subject Code: </td>
					<strong><td>".$teachers[0]['subj_code']."</td></strong>
				</tr>
				<tr>
					<td>Subject Description: </td>
					<strong><td>".$teachers[0]['subj_desc']."</td></strong>
				</tr>
				<tr>
					<td>Schedule: </td>
					<strong><td>".$teachers[0]['schedule']."</td></strong>
				</tr>
				<tr>
					<td>Time: </td>
					<strong><td>".$teachers[0]['time']."</td></strong>
				</tr>
				<tr>
					<td>Room: </td>
					<strong><td>".$teachers[0]['room']."</td></strong>
				</tr>
			</tabe>";
}

	if ($evaluated) {
		$sum = 0;
		echo Html::anchor('admin/studentevaluation/reports_per_subject/'.$evaluated[0]['teacher_id'].'/'.$evaluated[0]['subj_id'], '', array('class'=>'glyphicon glyphicon-print btn btn-success
						 btn-sm', 'title'=>'Print Summary Reports', 'style' => 'float:right'));
		echo "<table class='table table-striped table-hover'>";
		echo "<tr>
					<td style='background-color: #000; color:#fff;'><b>Category</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Items</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Sum</b></td>
					<td style='background-color: #000; color:#fff;'><b>Quotient</b></td>
					<td style='background-color: #000; color:#fff;'><b>Total Percentage Per Category</b></td>
			</tr>";
		for ($y=0, $x = 1; $y < sizeof($evaluated) ; $y++, $x++) { 
			
			$quotient = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]);
			$cat_percent = $category[$y]['percentage']/100;
			$percentage = ($quotient) * ($cat_percent);
			$total = $sum += $percentage;
			echo "<tr>
					<td>".$category[$y]['cat_name']. " </td>
					<td>".$questionsum[$y]['category'.$x]."</td>
					<td>".$evaluated[$y]['category_sum'.$x]."</td>
					<td>".$evaluated[$y]['category_sum'.$x]." / ".$questionsum[$y]['category'.$x]." = "."<b>".number_format($quotient, 2, '.', '')."</b></td>
					<td>".number_format($quotient, 2, '.', '')." x ".$cat_percent." = <b>".number_format($percentage, 2, '.', '')." %</b></td>
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
				<td><b>Overall Percentage of ".$teachers[0]['subj_desc'].":</b></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>".number_format($total, 2, '.', '')." % ".$rate."</b></td>
			</footer>";
		echo "</table>";
		

		 if ($comments){
		 	echo "<table>
					<thead>
						<tr>
							<th><h2>Comments <i class='glyphicon glyphicon-comment'></i><hr style='clear:both;'/></h2></th>
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

