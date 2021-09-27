<?php
namespace model;

class TodoModel{
	public int $id;
	public string $name;
	public $description;
	public int $del_flg;
	public int $done_flg;
	public string $updated_at;
}