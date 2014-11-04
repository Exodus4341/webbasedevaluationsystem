<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/studentevaluation', 'Teachers'); ?></li>
  <li class="active">View Subjects</li>
</ol>
<?php if ($teacher_name) {
	echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$teacher_name[0]['pic_url'], array('class' => "thumbnail", "style" => "width:150px; height:150px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>".ucwords($teacher_name[0]['fname']) ." ". ucwords($teacher_name[0]['mname']) .". ". ucwords($teacher_name[0]['lname']) ."</td>
				</tr>
					<tr>
					<td>Department: </td>
					<td>".ucwords($teacher_name[0]['dept_name'])."</td>
				</tr>
			</table>";
} ?>
<?php if ($evaluated):
	// for ($y=0; $y < sizeof($evaluated);) {  
		echo Html::anchor('admin/studentevaluation/print_summary/'.$evaluated[0]['teacher_id'], '', array('class'=>'glyphicon glyphicon-print btn btn-success
						 btn-sm', 'title'=>'Print Summary Reports', 'style' => 'float:right'));
	// }
?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
<br />
<br />
	<thead>
		<tr>
			<th style='background-color: #000; color:#fff;'>Subject Code</th>
			<th style='background-color: #000; color:#fff;'>Subject Description</th>
			<th style='background-color: #000; color:#fff;'>Schedule</th>
			<th style='background-color: #000; color:#fff;'>Time</th>
			<th style='background-color: #000; color:#fff;'>Room</th>
			<th style='background-color: #000; color:#fff;'>Date Of Evaluation</th>
			<th style='background-color: #000; color:#fff;'>Total Percentage</th>
			<th style='background-color: #000; color:#fff;'></th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$total = 0;
		for ($y=0,$z = 1; $y < sizeof($evaluated) ; $y++, $z++) { 
			echo "<tr>
					<td>".$evaluated[$y]['subj_code']."</td>
					<td>".$evaluated[$y]['subj_desc']."</td>
					<td>".$evaluated[$y]['schedule']."</td>
					<td>".$evaluated[$y]['time']."</td>
					<td>".$evaluated[$y]['room']."</td>
					<td>".$evaluated[$y]['dateevaluation']."</td>";
			   
			 for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 }
			 		
					echo "<td>".number_format(array_sum($percnt1[$y]), 2, '.', '')." %</td>";
					echo "<td>".Html::anchor('admin/studentevaluation/result_evaluation/'.$evaluated[$y]['teacher_id'].'/'.$evaluated[$y]['subj_id'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info
					 btn-xs', 'title'=>'View Results Evaluation'))."</td>

				  </tr>";

				  $total += number_format(array_sum($percnt1[$y]), 2, '.', '');
			
			}
	?>
	 </tbody>
	 <tfoot>
	  <?php 

	  	$overall = number_format($total / sizeof($evaluated), 2, '.', '') ;
	 	echo "  <td><b>Overall Percentage :</b></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>".number_format($total, 2, '.', '')."% / ".sizeof($evaluated)." = </td>
				<td><b>".$overall."%</b></td>";
				foreach ($ranges as $range) {
					if($overall <= $range['poor'] AND $overall < $range['fair']){
						$rate = "Poor";
					}
					elseif ($overall <= $range['fair'] AND $overall < $range['good']) {
						$rate = "Fair";
					}
					elseif ($overall <= $range['good'] AND $overall < $range['very_good']) {
						$rate = "Good";
					}
					elseif ($overall <= $range['very_good'] AND $overall < $range['excellent']) {
						$rate = "Very Good";
					}
					elseif ($overall <= $range['excellent'] AND $overall > $range['excellent']) {
						$rate = "Excellent";
					}else{
						$rate = "Excellent";
					}
			  	}
		echo "<td><b>".$rate."</b></td>";
	 ?>
	 </tfoot>
</table>

<?php else: ?>
<p>No Subjects on this semester.</p>

<?php endif; ?>