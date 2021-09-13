<html>
<body>
<?php 

function getQuarter($monthNum){
  $quarter=[['start'=>'12-01','ends'=>'02-28'],['start'=>'03-01','ends'=>'05-31'],['start'=>'06-01','ends'=>'08-31'],['start'=>'09-01','ends'=>'11-31']];
  if($monthNum>=3 && $monthNum<=5){
   return $quarter[1];
  }
  else if($monthNum>=6 && $monthNum<=8){
   return $quarter[2];
  }
  else if($monthNum>=9 && $monthNum<=11){
   return $quarter[3];
  }
  else{
   return $quarter[0];
  }
}

//Our date.
$dateStr = $_POST["date"]; ;

//Get the month number of the date
//given by the user
$month = date("n", strtotime($dateStr));

echo "Date : $dateStr <br>";
echo "Month : $month <br>";
print_r(getQuarter($month));

?>
<br>

</body>
</html>