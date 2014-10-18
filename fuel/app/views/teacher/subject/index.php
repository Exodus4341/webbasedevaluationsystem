<?php if ($subjects): ?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
<br />
<br />
	<thead>
		<tr>
			<th style='background-color: #000; color:#fff;'>Subject Code</th>
			<th style='background-color: #000; color:#fff;'>Subeject Desc</th>
			<th style='background-color: #000; color:#fff;'>Schedule</th>
			<th style='background-color: #000; color:#fff;'>Time</th>
			<th style='background-color: #000; color:#fff;'>Room</th>
			<th style='background-color: #000; color:#fff;'>Date Of Evaluation</th>
			<th style='background-color: #000; color:#fff;'>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($subjects as $subject): ?>
		<tr>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			<td><?php echo $subject['schedule']; ?></td>
			<td><?php echo $subject['time']; ?></td>
			<td><?php echo $subject['room']; ?></td>
			<td><?php echo $subject['dateevaluation']; ?></td>
			<td>
				<?php echo Html::anchor('teacher/subject/studentlist/'.$subject['sid'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View students')); ?>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
<?php else: ?>
<p>No Subjects on this semester.</p>

<?php endif; ?>