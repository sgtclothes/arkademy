<?php
function count_handshake($data){
	$hitung = 0;
	for($a=1;$a<=$data;$a++){
		for($b=1;$b<=$data;$b++){
			if($b>$a){
				$hitung++;
			}
		}
	}
	echo $hitung;
}
count_handshake(4);
?>