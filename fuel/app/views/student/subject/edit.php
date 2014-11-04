<ol class="breadcrumb">
  <li><?php echo Html::anchor('student/subject', 'Subjects'); ?></li>
  <li class="active">Evaluate</li>
</ol>
<center><h2>Evaluate This Subject</h2></center>
<fieldset>
	<table>
		<tr>
			<td><?php echo Html::img('uploads/'.$subject[0]['pic_url'], array('class' => "thumbnail", "style" => "width:150px; height:150px")); ?></td>
		</tr>
		<tr>
			<td>Teacher Name:</td>
			<td><strong><?php echo ucwords($subject[0]['fname'])." ".ucwords($subject[0]['mname'])." ".ucwords($subject[0]['lname']); ?></strong></td>
		</tr>
		<tr>
			<td>subject Code:</td>
			<td><strong><?php echo $subject[0]['subj_code']; ?></strong></td>
		</tr>
		<tr>
			<td>subject Description:</td>
			<td><strong><?php echo $subject[0]['subj_desc']; ?></strong></td>
		</tr>
		<tr>
			<td>Schedule:</td>
			<td><strong><?php echo $subject[0]['schedule']; ?></strong></td>
		</tr>
		<tr>
			<td>Time:</td>
			<td><strong><?php echo $subject[0]['time']; ?></strong></td>
		</tr>
	</table>		
</fieldset><br><br>
<?php if ($question): ?>
	<?php echo Form::open('student/subject/evaluate/'.$subject[0]['subj_id'].'/'.$subject[0]['id'].'/'.$question[0]['qid']); ?>
		<table border="1px" cellpadding="10" class="table table-hover table-striped">
			<thead>
				<?php for($y = 0; $y < sizeof($cat_name); $y++){?>
				<tr>
					<td style="background-color: #000; color:#fff;"><?php echo "<b>".$cat_name[$y]['cat_name']."</b>"; ?></td>
					<?php for ($p=0; $p <sizeof($choices); $p++) { 
						echo "<td style='background-color: #000; color:#fff;' align='center'>" .ucwords($choices[$p]['choices'])."</td>";
					}?>
				</tr>
			</thead>
				<tbody>
				    <?php for($x = 0; $x < sizeof($question); $x++){ 
						$z = $x+1;
					if($cat_name[$y]['id']  == $question[$x]['category']){?>
						<tr>
							<td><?php echo $question[$x]['order_no'].'. '.ucwords($question[$x]['question']); ?></td>
							<?php for($w = 0; $w < sizeof($choices); $w++){?>
							<td align="center"><?php echo Form::radio('choices'.$x, $choices[$w]['id'], array('id'=>$z, 'required' => '')); ?></td>
							<?php };?>
						</tr>
					<?php }};?>
				<?php };?>
				</tbody>
		</table>
		<br>
		<div class="clearfix">
			<strong>Comments:</strong>
			<div class="input">
				<?php echo Form::textarea('comments', Input::post('comments'), array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('student/subject', 'Cancel', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
		</div>
	<?php echo Form::close(); ?>
<?php else: ?>
	<br />
	<h2>No Questionnaire Provided.</h2>
<?php endif ?>