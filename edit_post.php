<?php
include "app/Post.php";

$id = $_GET['id'];

$post = new post();
$row = $post->edit($id);
?>

<center>
	<h2>EDIT DATA POST</h2>
	<form method="POST" action="proses_post.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<table>
			
			<tr>
				<td>Date</td>
				<td><input type="date" name="date_post" value="<?php echo $row['date_post']; ?>"></td>
			</tr>
			<tr>
				<td>Slug</td>
				<td><input type="text" name="slug" value="<?php echo $row['slug']; ?>"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="text_post" value="<?php echo $row['text_post']; ?>"></td>
			</tr>
			<tr>
				<td>ID Category</td>
				<td><input type="text" name="cat_id" value="<?php echo $row['cat_id']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="tedit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</center>
