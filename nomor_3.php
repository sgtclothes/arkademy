<?php
function draw_kotak($data){
	$vertical = 1;
	for($a=1;$a<=$data;$a++) {
		for($b=1;$b<=$data;$b++) {
			if($vertical%2 == 1) {
				if($b%2==1) {
					echo '*&nbsp&nbsp&nbsp';
				} else {
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
				}
			} else {
				if($b%2==1) {
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
				} else {
					echo '*&nbsp&nbsp&nbsp';
				}
			}
		}
		echo "<br>";
		$vertical++;
	}
}
draw_kotak(10);
?>