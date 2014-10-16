<ol class='breadcrumb'>
    <li><?php echo Html::anchor('admin/achives', 'Archives'); ?></li>
    <li class='active'>Search Result</li>
</ol>
<h1>Search Result</h1>
<br />
<?php if ($search): ?>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
     <?php foreach ($search as $searchs): ?>       <tr>
                <td><?php echo $searchs['subj_code']; ?></td>
                <td><?php echo $searchs['subj_desc']; ?></td>
                <td>
                    <?php echo Html::anchor('admin/subject/view/'.$searchs['id'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
                    <?php echo Html::anchor('admin/subject/edit/'.$searchs['id'], '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
                    <?php echo Html::anchor('admin/subject/delete/'.$searchs['id'], '', array('onclick' => "return confirm('Are you sure?'),", 'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>
                    <?php echo Html::anchor('admin/subject/student_list/'.$searchs['id'], '', array('class'=>'glyphicon glyphicon-list btn btn-default btn-xs', 'title'=>'Student List')); ?>
                    <?php echo Html::anchor('admin/studentevaluation/result_evaluation/'.$searchs['teacher_id'].'/'.$searchs['id'], '', array('class'=>'glyphicon glyphicon-th btn btn-success btn-xs', 'title'=>'View Result of evaluation')); ?> 

                </td>
            </tr>
        <?php endforeach; ?>    </tbody>
    </table>
    <?php else: ?>
        <p>No Data Found!</p>
<?php endif ?>