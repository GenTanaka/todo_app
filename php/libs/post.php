<?php

if(isset($_POST['type'])){
	if ($_POST['type']  === 'CREATE') {
		require_once SOURCE_BASE . "libs/create.php";

		\lib\create($_POST['name'],$_POST['description']);
	} elseif ($_POST['type']  == 'UPDATE') {
		require_once SOURCE_BASE . "libs/update.php";

		\lib\update($_POST['id'],$_POST['name']);
	} elseif ($_POST['type']  == 'DELETE') {
		require_once SOURCE_BASE . "libs/delete.php";

		\lib\delete($_POST['id']);
	} elseif ($_POST['type']  == 'DONE') {
		require_once SOURCE_BASE . "libs/done.php";

		\lib\done($_POST['id']);
	}

}