<?php
namespace controller\view;

function get() {
	require_once SOURCE_BASE . 'views/view.php';
}

function post() {
	require_once SOURCE_BASE . "libs/post.php";
	require_once SOURCE_BASE . 'views/view.php';
}