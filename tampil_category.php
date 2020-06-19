<?php 

require_once "app/Category.php";

$category = new Category();
$rows = $category->tampil();

?>
		<center>
			<br>
			<br>
			<h2>DATA </h2>
		<a href="index.php?page=input_category">Tambah Data</a>
		<table>

			<br>
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>KATEGORI</th>
				<th>EDIT</th>
				<th>HAPUS</th>
			</tr>

				<?php foreach ($rows as $row) { ?>
			
				<tr>
					<td><?php echo $row['id_cat']; ?></td>
					<td><?php echo $row['name_cat']; ?></td>
					<td><?php echo $row['text_category']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index.php?page=edit_category&id=<?php echo $row['id_cat']; ?>">Edit</a>
					</td>

					<td width="90px" align="center">
					<a class ="hapus" href="index.php?page=proses_category&delete-id=<?php echo $row['id_cat']; ?>">Hapus</a>
					</td>
				</tr>
			
			<?php } ?>
		</table>
