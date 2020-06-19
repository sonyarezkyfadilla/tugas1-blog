<?php 

class Photos extends controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function tampil() 
	{
		$sql= "SELECT *FROM photo";
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
		$name = $_POST['date_photos'];
		$title = $_POST['title'];
		$text_photos = $_POST['text_photos'];
		$post_id = $_POST['post_id'];

		$sql = "INSERT INTO album (name, title, text_photos, post_id) VALUES
			(:name, :title, :text_photos, :post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text_photos", $text);
		$stmt->bindParam(":post_id", $post_id);
		
		$stmt->execute();

		return false;
	}

	public function edit($id)
	{
		$sql = "SELECT *FROM photos WHERE id =:id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fecth ();

		return $row;
	}

	public function update()
	{
		$date_photos = $_POST['date_photos'];
		$title = $_POST['title'];
		$text_photos = $_POST['text_photos'];
		$post_id = $_POST['post_id'];
		$id = $_POST['id'];

		$sql = "UPDATE photos SET date_photos=:date_photos, title=:title, text_photos=:text_photos, post_id=:post_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date_photos", $date_photos);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text_photos", $text_photos);
		$stmt->bindParam(":post_id", $post_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}

	public function delete ($id)
	{
		$sql = "DELETE FROM photos WHERE id=;id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
			
}

 ?>