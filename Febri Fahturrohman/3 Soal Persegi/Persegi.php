<?php
$ukuran=7;
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){ 

		if($b==1&&$a>=1){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		}else if($b==4&&$a>=1){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		} else if($b==7&&$a>=1){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		}else if($b>=2&&$a==1){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		}else if($b>=1&&$a==4){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		}else if($b>=1&&$a==7){
			echo "<a style='color:black;padding:5px;'>* </a> ";
		} else{
			echo "<a style='color:white;padding:5px;'>* </a> ";
		}
	}
	echo "<br/>";
}
?>