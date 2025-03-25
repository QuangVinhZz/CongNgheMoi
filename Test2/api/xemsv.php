<?php
include("../class/clscnmoi.php");
$p = new cnmoi();

$p->xuatdssv("select * from sinhvien order by id asc");
?>