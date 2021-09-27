<?php
use db\TodoQuery;
?>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
タスク：<br>
<input type="text" name="name"><br>
詳細：<br>
<textarea name="description" cols="100" rows="1"></textarea><br>
<input type="submit" name="type" value="CREATE">
</form>

<ul>
<?php foreach(TodoQuery::fetchAll() as $select_one): ?>
<?php
if ($select_one->del_flg === 1 || $select_one->done_flg === 1){
	continue;
}
?>
	<li style="margin-bottom: 10px;">
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			<input type="hidden" name="id" value="<?php echo $select_one->id; ?>">
			<input type="text" name="name" value="<?php echo $select_one->name; ?>">
			<?php echo $select_one->description ?? ''; ?><br>
			<input type="submit" name="type" value="UPDATE">
			<input type="submit" name="type" value="DELETE">
			<input type="submit" name="type" value="DONE">
		</form>
	</li>
<?php endforeach; ?>
</ul>