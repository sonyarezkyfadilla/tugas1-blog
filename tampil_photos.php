<?php 

		require_once "app/Photos.php";

		$photos = new Photos();
		$rows = $photos->tampil();

		?>

		<center>
			<br>
			<br>
			<h2>DATA PHOTOS</h2>
		<a href="index.php?page=input_photos">Tambah Data</a>
		<table>

			<br>
			<tr>
				<th>ID</th>
				<th>TANGGAL</th>
				<th>TITLE</th>
				<th>POST</th>
				<th>ID POST</th>
				<th>EDIT</th>
				<th>HAPUS</th>
			</tr>

			<?php foreach ($rows as $row) { ?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['date_photos']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['text_photos']; ?></td>
					<td><?php echo $row['post_id']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index.php?page=edit_photos&id=<?php echo $row['id']; ?>">EDIT</a>
					</td>

					<td width="90px" align="center">
					<a class="hapus" href="index.php?page=proses_photos&delete-id=<?php echo $row['id']; ?>">DELETE</a>
				</td>
			</tr>
			
		<?php } ?>
		</table>
