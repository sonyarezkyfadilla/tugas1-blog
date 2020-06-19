<?php
include "app/Photos.php";

$id = $_GET['id'];

$photos = new photos();
$row = $photos->edit($id);
?>

<center>
	<h2>EDIT DATA PHOTOS</h2>
	<form method="POST" action="proses_photos.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<table>
			
			<tr>
				<td>Date</td>
				<td><input type="date" name="date_photos" value="<?php echo $row['date_photos']; ?>"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="text_photos" value="<?php echo $row['text_photos']; ?>"></td>
			</tr>
			<tr>
				<td>ID Post</td>
				<td><input type="text" name="post_id" value="<?php echo $row['post_id']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="tedit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</center>
