<?php
include "app/Category.php";

$id = $_GET['id'];

$category = new category();
$row = $category->edit($id);
?>

<center>
	<h2>EDIT DATA CATEGORY</h2>
	<form method="POST" action="proses_category.php">
		<input type="hidden" name="id_cat" value="<?php echo $id; ?>">

		<table>
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name_cat" value="<?php echo $row['name_cat']; ?>"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="text_category" value="<?php echo $row['text_category']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="tedit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</center>
