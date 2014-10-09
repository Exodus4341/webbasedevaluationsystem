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
<?php if ($subjects): ?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
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
<?php foreach ($subjects as $subject): ?>		<tr>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			<td><?php echo $subject['schedule']; ?></td>
			<td><?php echo $subject['time']; ?></td>
			<td><?php echo $subject['room']; ?></td>
			<td><?php echo $subject['dateevaluation']; ?></td>
				<td>
				<?php 
			if ($percent != 0) {
				$sum = 0;
					for ($y=0; $y < sizeof($percent) ; $y++) { 
						$max_value = max($percent[$y]['choice_poor'],$percent[$y]['choice_fair'],$percent[$y]['choice_good'],
							$percent[$y]['choice_very_good'],$percent[$y]['choice_excellent']);
					
						$percent = $category[$y]['percentage']/100;

						$percnt = $max_value * $percent;
						$total = $sum += $percnt;
						echo $total."% out of 100%";
					}
				}
			else
			{
				echo "No Evalation Conducted!";
			}
			 ?>
			</td>

			<td>
				<?php echo Html::anchor('admin/studentevaluation/result_evaluation/'.$subject['teacher_id'].'/'.$subject['sid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View Results Evaluation')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Subjects on this semester.</p>

<?php endif; ?>