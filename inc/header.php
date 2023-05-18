<?php
 $fonts = "verdana";
 $bgcolor = "#444";
 $fontcolor = "#fff";
?>

<!doctype html>
<html>
<head>
 <title>PHP OOP CRUD</title>
 <style>
  body{font-family:<?php echo $fonts;?>}
  .phpcoding{width:900px; margin: 0 auto;
   background:<?php echo "#ddd" ?>;}
  .headeroption, .footeroption{background:<?php echo $bgcolor; ?>;
   color:<?php echo $fontcolor; ?>;text-align:center;padding:20px;}
  .headeroption h2, .footeroption h2{margin:0;font-size:24px}
  .maincontent{min-height:400px;padding:20px;font-size:18px}
  p{margin:0}
  td{padding:10px;}
 input[type="text"]{width:238px;padding:5px;}
 select{font-size:18px;padding:2px 5px;width:250px;}
 .tblone{width:100%;border:1px solid #fff;margin:20px 0}
 .tblone td{padding:5px 10px;text-align:center;}
 table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
 table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
 #myform{width:400px;border:1px solid #fff;padding:10px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "CRUD Using OOP PHP and MYSQLi"; ?></h2>
 </section>
  <section class="maincontent">