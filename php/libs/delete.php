<?php
namespace lib;

use db\DataSource;

function delete($id){
	$db = new DataSource;
	$sql = 'update todo set del_flg = 1 where id = :id;';
	$db->execute($sql,[
		':id' => $id
	]);
}
