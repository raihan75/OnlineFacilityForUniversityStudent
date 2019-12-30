<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'/../lib/Database.php');
?>

<?php 

/**
* Post Class
*/
class Post
{
	private $db;

	public function __construct(){

		$this->db = new Database();
	}

	public function insertItem($user_id, $Item_name, $Item_category, $Item_date, $Item_price, $Item_description)
	{
		$Item_picture = "";
		$query = "INSERT INTO item(User_id, Item_name, Item_category, Item_date, Item_price, Item_description, Item_picture) VALUES ('$user_id', '$Item_name', '$Item_category', '$Item_date', '$Item_price', '$Item_description', '$Item_picture')";

		$result = $this->db->insert($query);
		return $result;
	}
	public function updateItem($item_id, $Item_name, $Item_category, $Item_date, $Item_price, $Item_description)
	{
		$Item_picture = "";
		$query = "UPDATE item SET 
		Item_name 			= '$Item_name',
		Item_category = '$Item_category',
		Item_date = '$Item_date',
		Item_price = '$Item_price',
		Item_description = '$Item_description',
		Item_picture = '$Item_picture'
		WHERE Item_id = $item_id";

		$result = $this->db->update($query);
		return $result;
	}
	public function getAllPost()
	{
		$query = "SELECT * FROM item
		ORDER BY Item_id DESC";

		$result = $this->db->select($query);
		return $result;
	}

	public function getAllPostByCat($cat_id)
	{
		$query = "SELECT * FROM item
		WHERE Item_category = '$cat_id'
		ORDER BY Item_id DESC";

		$result = $this->db->select($query);
		return $result;
	}

	public function getByPostId($id){
		$query = "SELECT * FROM item WHERE Item_id='$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function deleteByPostId($id){
		$query = "DELETE FROM item WHERE Item_id='$id'";
		$result = $this->db->delete($query);
		return $result;
	}

	public function getAllPostByUser($user_id)
	{
		$query = "SELECT * FROM item
		WHERE User_id = '$user_id'
		ORDER BY Item_id DESC";

		$result = $this->db->select($query);
		return $result;
	}

	public function getAllCat()
	{
		$query = "SELECT * FROM item
		ORDER BY Item_id DESC";

		$result = $this->db->select($query);
		return $result;
	}

	public function searchItem($searchItem)
	{
		$query = "SELECT * FROM item
		WHERE Item_name LIKE '%$searchItem%'
		ORDER BY Item_id DESC";

		$result = $this->db->select($query);
		return $result;
	}
	
}

?>