<?php
namespace lib;

function route($rpath,$method) {
	if ($rpath === '') {
		$rpath = 'login';
	}
	require_once SOURCE_BASE . "controllers/{$rpath}.php";
	$fn = "\\controller\\{$rpath}\\{$method}";
	$fn();
}