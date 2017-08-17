<?php

// page=edit_operator&id=1
// page=edit_operator

// $data = preg_match(pattern, subject)
// $data = preg_match_all(pattern, subject, matches)("page=edit_operator+", "page=edit_operator&id=1");
// if(preg_match("/^page=edit_operator+/", "page=edit_operator&id=1")) {
// if(preg_match("/^.+page=edit_operator+/", "/arsipperumnas/index.php?page=edit_operator&id=1")) {
// 	var_dump("bekhuto");	
// } else {
// 	var_dump("mate cina");
// }

function kunci($arg) {
	$rand = rand(111,999);
	$rand2 = rand(111,999);
	$bs1 = bin2hex($rand.$arg.$rand2);
	$bs0 = convert_uuencode(bin2hex($bs1));
	return base64_encode($bs0);
}

function buka($arg) {
	$data0 = base64_decode($arg);
	$data = convert_uudecode($data0);
	$de0 = hex2bin($data);
	$de1 = hex2bin($de0);
	$de2 = substr($de1, 3);
	return substr($de2, 0, -3);
}