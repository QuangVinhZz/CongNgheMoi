<?php
include("../class/clscnmoi.php");
$p = new cnmoi();

$id = $_REQUEST['id'];
$mssv = $_REQUEST['mssv'];
$hodem = $_REQUEST['hodem'];
$ten = $_REQUEST['ten'];
$lop = $_REQUEST['lop'];

$p->themxoasua("UPDATE sinhvien SET mssv='$mssv',hodem='$hodem',ten='$ten',lop='$lop' WHERE id='$id' LIMIT 1");

?>