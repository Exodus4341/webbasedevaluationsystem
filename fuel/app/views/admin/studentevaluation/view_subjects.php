<?php if ($teacher_name) {
	echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$teacher_name[0]['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>".ucwords($teacher_name[0]['fname']) ." ". ucwords($teacher_name[0]['mname']) .". ". ucwords($teacher_name[0]['lname']) ."</td>
				</tr>
					<tr>
					<td>Department: </td>
					<td>".ucwords($teacher_name[0]['dept_name'])."</td>
				</tr>
			</tabe>";
} ?>
<?php if ($evaluated): ?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
<br />
<h2>Listing Subjects</h2>
<br />
	<thead>
		<tr>
			<th>Subject Code</th>
			<th>Subeject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
			<th>Date Of Evaluation</th>
			<th>Total Percentage</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php

		for ($y=0; $y < sizeof($evaluated) ; $y++) { 
		
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
			
	}
?>
	</tbody>
</table>
<?php else: ?>
<p>No Subjects on this semester.</p>

<?php endif; ?>