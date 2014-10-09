<?php echo Form::open('admin/achives/search'); ?>
    <br />
    <?php echo Form::input('txtFromYearFrom', Input::post('txtFromYearFrom', isset($academicyear) ? $academicyear->txtFromYearFrom : ''), array('class' => 'span4 date-picker-year-from', 'id' => 'txtYearFrom', 'required' => '')); ?>
    TO 
    <?php echo Form::input('txtFromYearTo', Input::post('txtFromYearTo', isset($academicyear) ? $academicyear->txtFromYearTo : ''), array('class' => 'span4 date-picker-year-to', 'id' => 'txtYearTo', 'required' => '')); ?>
    <div class="input">
        <?php echo Form::select('semester', Input::post('semester', isset($academicyear) ? $academicyear->semester : ''), 
        array(0 => 'First-Sem', 1 => 'Second-Sem'),array('class' => 'span4', 'required' => '')); ?>
    </div>
    <?php echo Form::submit('submit', 'Search', array('class' => 'btn btn-primary')); ?> 
        
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

