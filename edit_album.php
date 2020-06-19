<?php
include "app/Album.php";

$id = $_GET['id'];

$album = new album();
$row = $album->edit($id);
?>

<center>
	<h2>EDIT DATA ALBUM</h2>
	<form method="POST" action="proses_album.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<table>
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="text_album" value="<?php echo $row['text_album']; ?>"></td>
			</tr>
			<tr>
				<td>ID Photos</td>
				<td><input type="text" name="photo_id" value="<?php echo $row['photo_id']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="tedit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</center>
