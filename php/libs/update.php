<?php
namespace lib;

use db\DataSource;

function update($id,$name){
	$db = new DataSource;
	$sql = 'update todo set name = :name where id = :id;';
	$db->execute($sql,[
		':id' => $id,
		':name' => $name
	]);
}