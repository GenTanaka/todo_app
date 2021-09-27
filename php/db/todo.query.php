<?php
namespace db;

use db\DataSource;
use model\TodoModel;

class TodoQuery {
	public static function fetchById($id) {
		$db = new DataSource();
		$sql = 'select * from todo where id = :id;';
		$result = $db->selectOne($sql,[
			':id' => $id
		], DataSource::CLS, TodoModel::class);

		return $result;
	}
	public static function fetchAll() {
		$db = new DataSource();
		$sql = 'select * from todo';
		$result = $db->select($sql, [], DataSource::CLS, TodoModel::class);

		return $result;
	}
}