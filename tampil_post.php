<?php 

		require_once "app/Post.php";

		$post = new Post();
		$rows = $post->tampil();

		?>

		<center>
			<br>
			<br>
			<h2>DATA POST</h2>
		<a href="index.php?page=input_post">Tambah Data</a>
		<table>

			<br>
			<tr>
				<th>ID</th>
				<th>TANGGAL</th>
				<th>SLUG</th>
				<th>TITLE</th>
				<th>POST</th>
				<th>ID CATEGORY</th>
				<th>EDIT</th>
				<th>HAPUS</th>
			</tr>

			<?php foreach ($rows as $row) {?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['date_post']; ?></td>
					<td><?php echo $row['slug']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['text_post']; ?></td>
					<td><?php echo $row['cat_id']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index.php?page=edit_post&id=<?php echo $row['id']; ?>">EDIT</a>
					</td>
					<td width="90px" align="center">
					<a class="hapus" href="index.php?page=proses_post&delete-id=<?php echo $row['id']; ?>">DELETE</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	