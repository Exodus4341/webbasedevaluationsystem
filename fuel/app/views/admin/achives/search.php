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
                    <?php echo Html::anchor('admin/subject/view/'.$searchs['id'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
                    <?php echo Html::anchor('admin/subject/edit/'.$searchs['id'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
                    <?php echo Html::anchor('admin/subject/delete/'.$searchs['id'], '', array('onclick' => "return confirm('Are you sure?'),", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?> |
                    <?php echo Html::anchor('admin/subject/student_list/'.$searchs['id'], '', array('class'=>'icon icon-eye-open', 'title'=>'Student List')); ?> |
                    <?php echo Html::anchor('admin/studentevaluation/result_evaluation/'.$searchs['teacher_id'].'/'.$searchs['id'], '', array('class'=>'icon icon-eye-open', 'title'=>'View Result of evaluation')); ?> 

                </td>
            </tr>
        <?php endforeach; ?>    </tbody>
    </table>
    <?php else: ?>
        <p>No Data Find!</p>
<?php endif ?>