<?php 
class Reports_per_subject extends FPDF
{
	//page header
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
function TeacherInfo($teachers){
	if ($teachers) {
		$this->SetY(35);
		$this->Image('../public/uploads/'.$teachers[0]['pic_url'],25,40,20,20);
		$this->SetXY(50,40);
		$this->SetFont("Arial", "", "11");
		$this->Cell(0, 4, "Teacher's Name: ".ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']), 0, 1, "L");
		$this->SetXY(50,45);
		$this->Cell(0, 4, "Subject Code: ".$teachers[0]['subj_code']);
		$this->SetXY(50,50);
		$this->Cell(0, 4, "Subject Description: ".$teachers[0]['subj_desc']);
		$this->SetXY(50,55);
		$this->Cell(0, 4, "Schedule: ".$teachers[0]['schedule']);
		$this->SetXY(50,60);
		$this->Cell(0, 4, "Time: ".$teachers[0]['time']);
		$this->SetXY(50,65);
		$this->Cell(0, 4, "Room: ".$teachers[0]['room']);
	}
}
function EvaluationData($evaluated, $category, $questionsum)
{
	$q = "SELECT * FROM ranges";
    $ranges = DB::query($q)->execute()->as_array();

	$td = array(90); // Table column size
	$this->SetXY(25,80);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td[0],8,'Category',1,0,'L',true);

    $td1 = array(45); // Table column size
	$this->SetXY(115,80);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td1[0],8,'Total Items',1,0,'L',true);

    $td2 = array(45); // Table column size
	$this->SetXY(160,80);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td2[0],8,'Total Sum',1,0,'L',true);

    $td3 = array(50); // Table column size
	$this->SetXY(205,80);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td3[0],8,'Quotient',1,0,'L',true);

    $td4 = array(75); // Table column size
	$this->SetXY(255,80);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td4[0],8,'Total Percentage Per Category',1,0,'L',true);

	
    $this->SetXY(25,88);
	$this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    $sum = 0;
    for ($y=0, $x = 1; $y < sizeof($evaluated) ; $y++, $x++) { 
			$quotient = ($evaluated[$y]['category_sum'.$x] / $questionsum[$y]['category'.$x]);
			$cat_percent = $category[$y]['percentage']/100;
			$percentage = ($quotient) * ($cat_percent);
			$total = $sum += $percentage;
			$this->Cell($td[0],6,$category[$y]['cat_name'],1,0,'L',true);
			$this->Cell($td1[0],6,$questionsum[$y]['category'.$x],1,0,'L',true);
			$this->Cell($td2[0],6,$evaluated[$y]['category_sum'.$x],1,0,'L',true);
			$this->Cell($td3[0],6,$evaluated[$y]['category_sum'.$x]." / ".$questionsum[$y]['category'.$x]." = ".number_format($quotient, 2, '.', ''),1,0,'L',true);
			$this->Cell($td4[0],6,number_format($quotient, 2, '.', '')." x ".$cat_percent." = ".number_format($percentage, 2, '.', '').'%',1,0,'L',true);				
			$this->Ln();
			// var_dump($category);
			// exit();
		}

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

	$td5 = array(43); // Table column size
	$this->SetXY(25,180);
	$this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetFont('Arial','B',12);
    $this->Cell($td5[0],8,'Overall Percentage :',1,0,'L',true);

    $td6 = array(50); // Table column size
    $this->SetXY(68,180);
	$this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','B',12);
    $this->Cell($td6[0],8,number_format($total, 2, '.', '').'% '.$rate,1,0,'C',true);
}	

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
} //end class

$pdf = new Reports_per_subject('L','mm','legal');
// Data loading
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->TeacherInfo($teachers);
$pdf->EvaluationData($evaluated, $category, $questionsum);
$pdf->AliasNbPages();
$pdf->Output();
?>