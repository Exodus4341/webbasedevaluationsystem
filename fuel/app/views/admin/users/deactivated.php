<ol class='breadcrumb'>
	<li><?php echo Html::anchor('admin/users', 'Users'); ?></li>
	<li class='active'>Deactivated Students</li>
</ol>
<h2>List of Deactivated Users</h2>
<br>
 <ul id="myTab" class="nav nav-tabs">
      <li class="active"><a href="#d_students" data-toggle="tab">Deactivated Students</a></li>
      <li><a href="#d_teachers" data-toggle="tab">Deactivated Teachers</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
	      <div class="tab-pane fade in active" id="d_students">
	      <br/><br/>
	        <?php if ($deactivate): ?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
					<thead>
						<tr>
							<th>Picture</th>
							<th>Username</th>
							<th>Name</th>
							<th>Course</th>
							<th>Year</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
				<?php foreach ($deactivate as $deactivated): ?>		<tr>
							<td><?php echo Html::img('uploads/'.$deactivated['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
							<td><?php echo $deactivated['username']; ?></td>
							<td><?php echo ucwords($deactivated['fname']).' '.ucwords($deactivated['mname']).' '.ucwords($deactivated['lname']); ?></td>
							<td><?php echo $deactivated['course_name']; ?></td>
							<td><?php echo $deactivated['year']; ?></td>
							<td><?php echo $deactivated['email']; ?></td>
							<td>
								<?php echo Html::anchor('admin/users/activate/'.$deactivated['uid'], '', array('class'=>'glyphicon glyphicon-ok btn btn-danger btn-xs', 'title'=>'Activate')); ?>
							</td>
						</tr>
				<?php endforeach; ?>	</tbody>
				</table>
				<?php else: ?>
					<br />
				<p style="text-align:center;">No Deactivated Students</p>
			<?php endif; ?><p>
	      </div>
	      <div class="tab-pane fade" id="d_teachers">
	        <?php if ($deactivate_teacher): ?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
					<thead>
						<tr>
							<th>Picture</th>
							<th>Username</th>
							<th>Name</th>
							<th>Department</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
				<?php foreach ($deactivate_teacher as $deactivate_teachers): ?>		<tr>
							<td><?php echo Html::img('uploads/'.$deactivate_teachers['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
							<td><?php echo $deactivate_teachers['username']; ?></td>
							<td><?php echo ucwords($deactivate_teachers['fname']).' '.ucwords($deactivate_teachers['mname']).' '.ucwords($deactivate_teachers['lname']); ?></td>
							<td><?php echo $deactivate_teachers['dept_name']; ?></td>
							<td><?php echo $deactivate_teachers['email']; ?></td>
							<td>
								<?php echo Html::anchor('admin/users/activate/'.$deactivate_teachers['uid'], '', array('class'=>'glyphicon glyphicon-ok btn btn-danger btn-xs', 'title'=>'Deactivate')); ?>
							</td>
						</tr>
				<?php endforeach; ?>	</tbody>
				</table>

				<?php else: ?>
					<br /><br /><br />
				<p style="text-align:center;">No Deactivated Teachers</p>

				<?php endif; ?>
	      </div>
	</div>