<?php
namespace lib;

use db\DataSource;

function done($id){
	$db = new DataSource;
	$sql = 'update todo set done_flg = 1 where id = :id;';
	$db->execute($sql,[
		':id' => $id
	]);
}