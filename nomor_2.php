<?php

	function inputUsername($username) {
		$valid = (bool) false;
		if(preg_match("/^[a-z_]*$/",$username) && preg_match("#[_]+#",$username) && strlen($username) == 8) {
			$valid = true;
		}
		else {
			$valid = false;
		}
		return $valid ? 'true' : 'false';
}

	function inputPassword($password) {
		$valid = false;
		if(preg_match("#[a-z]+#",$password) && preg_match("#[0-9]+#",$password) && preg_match("#[A-Z]+#",$password) && (preg_match("#[\W]+#",$password) || preg_match("#[_]+#",$password)) && strlen($password) == 8) {
			$valid = true;
		}
		else {
			$valid = false;
		}
				return $valid ? 'true' : 'false';
}

echo inputUsername("sigitas_");
echo "<br>";
echo inputPassword("ashjA}o9")


?>