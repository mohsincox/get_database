<?php
	/*
	*'company' is a database name api.php
	*'login' is a table name
	*/
	echo $str = file_get_contents('http://localhost/php-crud-api-master/api.php/login?transform=1');
	//echo $str = file_get_contents('http://localhost/php-crud-api-master/api.php/login');
	$json = json_decode($str, true);
	echo '<pre>' . print_r($json, true) . '</pre>';

	/*
	// without ?transform=1 (start)

	//echo $json['login']['records'][0][1]; //output: mohsin

	 //$i = 0;
	// foreach ($json['login']['columns'] as $key => $value) {
		
	// 	echo $json['login']['columns'][$i]; //output: idusernamepassword
	// 	$i++;
	// }
	$k = 0;
	foreach ($json['login']['records'] as $key1 => $value1) {
		$j = 0;
		foreach ($json['login']['records'][$k] as $key => $value) {
			
			echo $json['login']['records'][$k][$j]; //output: 1mohsin1234562iqbal454545
			$j++;
		}
		$k++;
	}

	// without ?transform=1 (end)
	*/

	$y = 0;
	foreach ($json['login'] as $key => $value) {
		if ($json['login'][$y]['username'] == 'mohsin') {
			echo $json['login'][$y]['id'].'<br>';
			echo $json['login'][$y]['username'].'<br>';
			echo $json['login'][$y]['password'].'<br>';
		}
		$y++;	
	}

?>