<?php

function get_data(){
	$myhobby = ["koding","basket"];

	$school = [];    
	$school['highSchool']="SMK Telkom";    
	$school['university']="Yogyakarta State University";
	
	$skill = new ArrayObject();
	$skill['0'] = 'Swim';
	$skill['1'] = 'Volley';

	$bio = [
		"name"=>"Sigit Sasongko", "address"=>"Yogyakarta", "hobby"=>$myhobby, "is_maried"=>false, "school"=>(object) $school, "Skills"=>$skill,
	];
	return $bio;
}

echo json_encode(get_data());

?>