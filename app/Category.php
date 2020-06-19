<?php 

class Category extends controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM category";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	public function tambah()
	{
		$name = $_POST['name_cat'];
		$text = $_POST['text_category'];

		$sql = "INSERT INTO category (name_cat, text_category) VALUES
			(:name_cat, :text_category)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name_cat", $name);
		$stmt->bindParam(":text_category", $text);
		
		$stmt->execute();

		return false;
	}

	


	public function edit($id)
	{
		$sql = "SELECT * FROM category WHERE id_cat=:id_cat";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":id_cat", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$name = $_POST['name_cat'];
		$text = $_POST['text_category'];
		$id = $_POST['id_cat'];

		$sql = "UPDATE category SET  name_cat=:name_cat, text_category=:text_category WHERE id_cat=:id_cat";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":name_cat", $name);
		$stmt->bindParam(":text_category", $text);
		$stmt->bindParam(":id_cat", $id);

		$stmt->execute();

		return false;
	}

	public function hapus($id)
	{
		$sql = "DELETE FROM category WHERE id_cat=:id_cat";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":id_cat", $id);
		$stmt->execute();

		return false;
	}	
}

 ?>