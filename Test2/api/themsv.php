<?php
include("../class/clscnmoi.php");
$p = new cnmoi();

$mssv = $_REQUEST['mssv'];
$hodem = $_REQUEST['hodem'];
$ten = $_REQUEST['ten'];
$lop = $_REQUEST['lop'];


if($mssv!='' && $hodem!='' && $ten!='' && $lop!=''){
	$p->themxoasua("INSERT INTO sinhvien(mssv,hodem,ten,lop) VALUES ('$mssv','$hodem','$ten','$lop')");
}
?>