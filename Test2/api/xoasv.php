<?php
include("../class/clscnmoi.php");
$p = new cnmoi();

$idxoa = $_REQUEST['id'];

if($idxoa > 0){
	$p->themxoasua("DELETE FROM sinhvien WHERE id='$idxoa' limit 1");
}
?>