<style type="text/css">
    .box-department{
        width: 500px;
        height: 0px auto;
        border-radius: 10px;
    }
</style>
<ol class='breadcrumb'>
    <li class='active'>School Year</li>
</ol>
<?php echo Form::open('admin/achives/search'); ?>
<div class="box-department">
    <h3>School Year</h3>
    <?php echo Form::select('acadyear', Input::post('acadyear', isset($academicyear) ? $academicyear->acadyear : ''), $years, array('class' => 'span4 date-picker-year-from form-control', 'id' => 'txtYearFrom', 'required' => '')); ?>
    <h3>Semester</h3>
    <div class="form-group">
        <?php echo Form::select('semester', Input::post('semester', isset($academicyear) ? $academicyear->Semester : ''), 
        array(0 => 'First Semester', 1 => 'Second Semester'),array('class' => 'span4 form-control', 'required' => '')); ?>
    </div>
    <?php echo Form::submit('submit', 'Search', array('class' => 'btn btn-primary')); ?> 
</div>
<?php echo Form::close(); ?>




<script type="text/javascript">
$(function() {
   $('.date-picker-year-from').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
  $(".date-picker-year-from").focus(function () {
        $(".ui-datepicker-month").hide();
    });

  $('.date-picker-year-to').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
  $(".date-picker-year-to").focus(function () {
        $(".ui-datepicker-month").hide();
    });
});

</script>

