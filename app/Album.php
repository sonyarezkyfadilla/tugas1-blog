<?php 

class Album extends controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function tampil() 
	{
		$sql= "SELECT * FROM album";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
	}

	public function tambah()
	{
		$name = $_POST['name'];
		$text_album = $_POST['text_album'];
		$photo_id = $_POST['photo_id'];
		
		$sql="INSERT INTO album (name, text_album, photo_id VALUES (:name, :text_album, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text_album", $text_album);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->execute();

		return false;

	}

	public function edit($id)
	{
		$sql = "SELECT * FROM album WHERE id =:id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$row = $stmt->fecth ();

		return $row;
	}

	public function update()
	{
		$name = $_POST['name'];
		$text_album = $_POST['text_album'];
		$photo_id = $_POST['photo_id'];
		$id = $_POST['id'];

		$sql = "UPDATE album SET name=:name, text_album=:text_album, photo_id=:photo_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text_album", $text_album);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->bindParam(":id", $id);
		
		$stmt->execute();

		return false;
	}

	public function hapus ($id)
	{
		$sql = "DELETE FROM album WHERE id=;id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
			
}

 ?>