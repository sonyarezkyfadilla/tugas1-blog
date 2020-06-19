<?php 

		require_once "app/Album.php";

		$album = new Album();
		$rows = $album->tampil();

		?>
		<center>
			<br>
			<br>
			<h2>DATA ALBUM</h2>
		<a href="index.php?page=input_album">Tambah Data</a>
		<table>

			<br>
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>ALBUM</th>
				<th>ID PHOTO</th>
				<th>EDIT</th>
				<th>HAPUS</th>
			</tr>

			<?php foreach ($rows as $row) { ?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['text_album']; ?></td>
					<td><?php echo $row['photo_id']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index.php?page=edit_album%id=<?php echo $row['id']; ?>">Edit</a>
					</td>

					<td width="90px" align="center">
					<a class="hapus" href="index.php?page=proses_album&delete-id=<?php echo $row['id']; ?>">DELETE</a>
				</td>
				</tr>
				
		<?php } ?>
		</table>
	