<?php
namespace lib;

use db\DataSource;

function create($name,$description){
	$db = new DataSource;
	$sql = 'insert into todo(name, description) values (:name, :description);';
	$db->execute($sql,[
		':name' => $name,
		':description' => $description
	]);
}
