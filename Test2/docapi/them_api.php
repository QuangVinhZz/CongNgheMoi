<?php
include("../docapi/clsdocapi.php");
$p = new docapi();

$mssv = $_REQUEST['mssv'];
$hodem = $_REQUEST['hodem'];
$ten = $_REQUEST['ten'];
$lop = $_REQUEST['lop'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$p->themxoasuajson("http://localhost/Test2/api/themsv.php?mssv=$mssv&hodem=$hodem&ten=$ten&lop=$lop");
$p->xuatsv("http://localhost/Test2/api/xemsv.php");
?>
</body>
</html>