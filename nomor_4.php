<?php

function print_abc($kolom,$baris) {
	$char = 'a';
    	for($a=1;$a<=$baris;$a++) {
    		for($b=1;$b<=$kolom;$b++) {
    			echo $char . "\n";
    			$char++;	
    		}
    	echo "<br>";
    }
}

print_abc(3,4);

?>