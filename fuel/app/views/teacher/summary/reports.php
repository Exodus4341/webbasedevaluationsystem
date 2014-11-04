<?php

class Teacher_Summary_Reports extends FPDF
{
//Page Header
function Header()
{
    $schoolyear = DB::query("SELECT * FROM schoolyear")->execute()->as_array();
    if ($schoolyear[0]['scho_year'] == "0") {
        $schoYear = "First semester ".$schoolyear[0]['academicyear'];
    }
    else
    {
        $schoYear = "Second semester ".$schoolyear[0]['academicyear'];
    }
  	$this->Image('../public/assets/img/jmc_logo.png',90,10,20,20);
	
	$this->SetY(15);
	$this->AddFont('OldLondon','','OldLondon.php');
	$this->SetFont("OldLondon", "", "30");
	$this->Cell(0, 4, "JOSE MARIA COLLEGE", 0, 1, "C");
	$this->SetY(28);
	$this->SetFont("Arial", "B", "12");
	$this->Cell(0, 4, "EVALUATION OF TEACHER BY STUDENTS", 0, 1, "C");
	// $this->Cell(0, 4, "FIRST EVALUATION / A.Y 2013-2014", 0, 1, "C");
    $this->Cell(0, 4,$schoYear, 0, 1, "C");
	
}

function TeacherInfo($teacher_name
    ){
	if ($teacher_name) {
		$this->SetY(35);
		$this->Image('../public/uploads/'.$teacher_name[0]['pic_url'],25,40,20,20);
		$this->SetXY(50,40);
		$this->SetFont("Arial", "", "11");
		$this->Cell(0, 4, "Teacher's Name: ".ucwords($teacher_name[0]['fname']) ." ". ucwords($teacher_name[0]['mname']) .". ". ucwords($teacher_name[0]['lname']), 0, 1, "L");
		$this->SetXY(50,45);
		$this->Cell(0, 4, "Position/Desigtnation: Teacher");
		$this->SetXY(50,50);
		$this->Cell(0, 4, "No. of Class/Subject(s) Evaluated: ");
	}
}


function EvaluationData($evaluated, $category, $questionsum)
{
    $ranges = DB::query("SELECT * FROM ranges")->execute()->as_array();

	$header = array('SUBJECT','ROOM','DAY','SCHEDULE');
    $td1 = array(30);
    $this->SetY(75);
   	$this->SetFillColor(224,0,0);
    $this->SetTextColor(255);
    $this->SetLineWidth(.4);
    $this->SetFont('Arial','B',10);
    for($i=0;$i<count($header);$i++){
    	$this->SetX(60);
        $this->Cell($td1[0],6,$header[$i],1,1,'L',true);
    }


	$td = array(30, 30, 30, 30, 30, 20);// Table column size

	$this->SetXY(90,75);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    for($i=0;$i<count($evaluated);$i++){
        $this->Cell($td[$i],6,$evaluated[$i]['subj_code'],1,0,'C',false);
    }

    $this->SetXY(90,81);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    for($i=0;$i<count($evaluated);$i++){
        $this->Cell($td[$i],6,$evaluated[$i]['room'],1,0,'C',false);
    }

    $this->SetXY(90,87);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    for($i=0;$i<count($evaluated);$i++){
        $this->Cell($td[$i],6,$evaluated[$i]['schedule'],1,0,'C',false);
    }

    $this->SetXY(90,93);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',8);
    for($i=0;$i<count($evaluated);$i++){
        $this->Cell($td[$i],6,$evaluated[$i]['time'],1,0,'C',false);
    }

    $this->SetFillColor(224,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',8);
    $this->Cell($td[$i],6,'Rating Per Category',1,0,'C',true);
    $this->Cell($td[$i],6,'Desc. Per Category',1,0,'C',true);
    $this->Cell($td[$i],6,'Total Points',1,0,'C',true);
    $this->Cell($td[$i],6,'No. Of Subj. Eval.',1,0,'C',true);


    $this->SetY(100);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    $total = 0;
 
	for ($y=0,$z = 1; $y < sizeof($evaluated) ; $y++, $z++) { 
         
         /*Start of Conditon for Rating per Subjects if the array size = 0*/ 
         if($y == 0){
         	for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
         		
         		/*Start of Conditon for Rating Per Category*/
         		if(sizeof($evaluated) == 1){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100));	
                 	$this->setX(120);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(150);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(180);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(210);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 2){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+1]['category_sum'.$x] / $questionsum[$y+1]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(150);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(180);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(210);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(240);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 3){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+2]['category_sum'.$x] / $questionsum[$y+2]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(180);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(210);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(240);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(270);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 4){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+3]['category_sum'.$x] / $questionsum[$y+3]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(210);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(240);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(270);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(300);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 5){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+4]['category_sum'.$x] / $questionsum[$y+4]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(240);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(270);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(300);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(310);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 6){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+5]['category_sum'.$x] / $questionsum[$y+5]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(270);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(300);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(310);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(340);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 7){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+6]['category_sum'.$x] / $questionsum[$y+6]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(300);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(310);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(340);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(370);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 if(sizeof($evaluated) == 8){
                 	$sum = (($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100)) + (($evaluated[$y+7]['category_sum'.$x] / $questionsum[$y+7]['category'.$x]) * ($category[$i]['percentage']/100));
                 	$this->setX(310);
                    $total = $sum/sizeof($evaluated);
			  	 	$this->Cell($td[0],6,number_format(($total), 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(340);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
			  	 	$this->Cell($td[0],6,$rate,1,0,'C',true);
			  	 	$this->setX(370);
			  	 	$this->Cell($td[0],6,number_format($sum, 2, '.', '')." %",1,0,'C',true);
			  	 	$this->setX(400);
			  	 	$this->Cell($td[0],6,sizeof($evaluated),1,0,'C',true);
                 }
                 /*End of Conditon for Rating Per Category*/


                /*Start of Conditon for Sum Rating per Subjects*/ 
         		$this->setX(90);
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 	$this->Cell($td[$y],6,number_format($percnt1[$y][$x], 2, '.', '')." %",1,1,'C',false);
                /*End of Conditon for Sum Rating per Subjects*/ 
			 }

			 /*Start of Conditon for Total Sum Rating per Subjects*/ 
			  $this->setX(90);
              $total = array_sum($percnt1[$y]);
			  $this->Cell($td[$y],6,number_format($total, 2, '.', '')." %",1,0,'C',true);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
                $this->setXY(90,136);
                $this->Cell($td[$y],6,$rate,1,0,'C',true);
			 /*Start of Conditon for Total Sum Rating per Subjects*/ 
			 
         }

          if($y == 1){
          	$this->setY(100);
         	for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
         	$this->setX(120);
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 	 $this->Cell($td[$y],6,number_format($percnt1[$y][$x], 2, '.', '')." %",1,1,'C',false);
			 }
			  $this->setX(120);
              $total = array_sum($percnt1[$y]);
			  $this->Cell($td[$y],6,number_format($total, 2, '.', '')." %",1,0,'C',true);
                    foreach ($ranges as $range) {
                        if($total <= $range['poor'] AND $total < $range['fair']){
                            $rate = "Poor";
                        }
                        elseif ($total <= $range['fair'] AND $total < $range['good']) {
                            $rate = "Fair";
                        }
                        elseif ($total <= $range['good'] AND $total < $range['very_good']) {
                            $rate = "Good";
                        }
                        elseif ($total <= $range['very_good'] AND $total < $range['excellent']) {
                            $rate = "Very Good";
                        }
                        elseif ($total <= $range['excellent'] AND $total > $range['excellent']) {
                            $rate = "Excellent";
                        }else{
                            $rate = "Excellent";
                        }
                    }
                $this->setXY(120,136);
                $this->Cell($td[$y],6,$rate,1,0,'C',true);
         }
          if($y == 2){
          	$this->setY(100);
         	for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
         	$this->setX(150);
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 	 $this->Cell($td[$y],6,number_format($percnt1[$y][$x], 2, '.', '')." %",1,1,'C',true);
			 }
         }
         if($y == 3){
          	$this->setY(100);
         	for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
         	$this->setX(180);
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 	 $this->Cell($td[$y],6,number_format($percnt1[$y][$x], 2, '.', '')." %",1,1,'C',true);
			 }
         }
         if($y == 4){
          	$this->setY(100);
         	for ($i=0,$x = 1; $i < sizeof($category); $i++, $x++) { 
         	$this->setX(210);
				$percnt1[$y][$x] = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]) * ($category[$i]['percentage']/100); 
			 	 $this->Cell($td[$y],6,number_format($percnt1[$y][$x], 2, '.', '')." %",1,1,'C',true);
			 }
         }

         // var_dump($evaluated);
         // exit();
	     
    }

    
    $td1 = array(70);
    $this->SetY(100);
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    for($i=0;$i<count($category);$i++){
    	$this->SetX(20);
        $this->Cell($td1[0],6,$category[$i]['cat_name'],1,1,'L',true);
    }
    $td2 = array(35);
    $this->SetXY(55,130);
    $this->SetFillColor(224,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','',10);
    $this->Cell($td2[0],6,'Rating Per Subject',1,1,'L',true);

    $this->SetXY(55,136);
    $this->SetFillColor(224,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','',10);
    $this->Cell($td2[0],6,'Description',1,1,'L',true);

    $this->SetXY(55,150);
    $this->SetFillColor(224,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','',10);
    $this->Cell($td2[0],6,'Over All Rating >>>',1,1,'L',true);


}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Generated Date: '.date('l jS \of F Y g:i A'),0,0,'L');
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
}


}//End Class

$pdf = new Teacher_Summary_Reports('L','mm','legal');
// Data loading
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->TeacherInfo($teacher_name);
$pdf->EvaluationData($evaluated, $category, $questionsum);
$pdf->AliasNbPages();
$pdf->Output();

?>
