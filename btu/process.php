<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การคำนวณค่า BTU </title>
</head>

<body>

<div align="center">
  <?php
  $width = $_POST['width'];
  $length = $_POST['length'];
  $height = $_POST['height'];
$tx4 = $_POST['tx4'];

  $sum1= $width*$length*$height;
  $sum2= $tx4*$sum1;

   ?>
   <p align="center">
    พื้นที่ : <?php echo number_format($sum1,2);?> ตารางเมตร  <br />
                     ขนาดแอร์อย่างน้อย : <?php echo $sum2;?> BTU  <br />


   </p>
</div>
</body>
</html>
