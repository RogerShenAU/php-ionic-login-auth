<?php

function phpIonicLoginAuthValidateLogin($username, $password){

	$results = array();

	if ( systemValidateUserFunction($username, $password) ){

		$results = getPhpIonicLoginAuthResult($username);

		$results["result"] = "Success!";
	}else{

		$results = array(
			"result" => "Access denied!",
		);
	}

	return $results;
}

// below validation is hard coded, please replace below with your server-side validation function
function systemValidateUserFunction($username, $password){

	if($username == 'demo' && $password == 'demo'){ 
		return true;
	}else{
		return false;
	}
}

// below function is hard coded, please replace below with your server-side function to retrieve user info
function getPhpIonicLoginAuthResult($username){

	if($username == 'demo'){
		$results = array(
			'username' => 'demo',
			'displayname' => 'Demo'
			);
	}else{
		$results = array(
			"result" => "no such user exists"
		);
	}
	
	return $results;
}
		