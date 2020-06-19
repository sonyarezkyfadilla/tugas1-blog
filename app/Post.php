<?php 

class Post extends controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function tampil() 
	{
		$sql= "SELECT *FROM post";
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
		$date_post = $_POST['date_post'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text_post = $_POST['text_post'];
		$id_cat = $_POST['id_cat'];

		$sql = "INSERT INTO post (date_post, slug,  title, text_post, id_cat) VALUES
			(:date_post, :slug, :title, :text_post, :id_cat)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date_post", $date_post);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text_post", $text_post);
		$stmt->bindParam(":id_cat", $id_cat);
		
		$stmt->execute();

		return false;
	}


	public function edit($id)
	{
		$sql = "SELECT *FROM post WHERE id =:id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fecth ();

		return $row;
	}

	public function update()
	{
		$date_post = $_POST['date_post'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text_post = $_POST['text_post'];
		$cat_id = $_POST['cat_id'];
		$id = $_POST['id'];

		$sql = "UPDATE post SET date_post=:date_post, slug=:slug, title=:title, text_post=:text_post, cat_id=:cat_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date_post", $date_post);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text_post", $text_post);
		$stmt->bindParam(":cat_id", $cat_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}

	public function delete ($id)
	{
		$sql = "DELETE FROM post WHERE id=;id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
			
}

 ?>