<?php

$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : '';
//echo $method;exit;
if($method){
	echo file_get_contents($method.'.json');
}