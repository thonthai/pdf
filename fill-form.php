<?php

require_once 'vendor/autoload.php';

$fields = array (
  'book_no' => '1234',
  'run_no' => '5678',
  'id1' => '1 2345 67890 12 3',
  'name1' => 'พิชัย เตชะศรี',
  'tin1' => '1 2345 2345 1',
  'add1' => '19 ซอยรามคำแหง 24',
  'id1_2' => '1 2345 67890 12 3',
  'name2' => 'พิชัย เตชะศรี',	
  'tin1_2' => '1 2345 2345 1',
  'add2' => '19 ซอยรามคำแหง 24',
  'item' => '31',
  'chk1' => 'Yes',
  'chk2' => true,
  'chk3' => 1,
  'chk4' => '1',
  'chk5' => 'On',
  'chk6' => '',
  'chk7' => '1',
  'date1' => 'date1',
  'date2' => '1',
  'date3' => '1',
  'date4' => '1',
  'date5' => '1',
  'date6' => '1',
  'date7' => '1',
  'rate1' => '8888',
  'date8' => '1',
  'date9' => '1',
  'date10' => '1',
  'date11' => '1',
  'spec1' => '1',
  'date12' => '',
  'date13' => '1',
  'spec3' => '1',
  'total' => 'เก้าพันเก้าร้อยเก้าสิบเก้าบาทถ้วน',
  'chk8' => '1',
  'chk9' => '1',
  'chk10' => '1',
  'chk11' => '1',
  'spec4' => '1',
  'date_pay' => '2',
  'month_pay' => '  มกราคม',
  'year_pay' => '2563'
);


$c = str_split($_POST['id1']);

$fields = array(
  'book_no' => '1234',
  'run_no' => '5678',
  'id1' => $c[0].' '.$c[1].$c[2].$c[3].$c[4].' '.$c[5].$c[6].$c[7].$c[8].$c[9].' '.$c[10].$c[11].' '.$c[12] ,
  'name1' => $_POST['name1'],
  'add1' => $_POST['add1'],
  'chk1' => $_POST['chk1']
);

$pdf = new FPDM('approve.pdf');
$pdf->useCheckboxParser = true;
$pdf->Load($fields, true);
$pdf->Merge();
$pdf->Output();