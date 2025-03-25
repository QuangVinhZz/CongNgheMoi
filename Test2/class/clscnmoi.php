<?php
	
class cnmoi{
	private function connect(){
		$con = mysql_connect("localhost","httt","123456");
		if(!$con){
			echo("Loi ket noi!");
			exit();
		}else{
			mysql_select_db("cnmoi");
			mysql_query("SET NAMES UTF8");
			return $con;
		}
	}
	public function xuatdssv($sql){
		$link = $this -> connect();
		$ketqua = mysql_query($sql,$link);
		$i = mysql_num_rows($ketqua);
		if($i>0){
			while($row = mysql_fetch_array($ketqua)){
				$id = $row['id'];
				$mssv = $row['mssv'];
				$hodem = $row['hodem'];
				$ten = $row['ten'];
				$lop = $row['lop'];
				
				$dulieu[] = array('id'=>$id,'mssv'=>$mssv,'hodem'=>$hodem,'ten'=>$ten,'lop'=>$lop);
			}
			header("content-Type:application/json; charset = UTF8");
			echo json_encode($dulieu);
		}
	}
	
	public function themxoasua($sql){
		$link = $this -> connect();
		if(mysql_query($sql,$link)){
			return 1;
		}else{
			return 0;
		}
	}
}
?>