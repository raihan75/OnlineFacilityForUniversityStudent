<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'/../lib/Database.php');
?>
<?php
class Admin
{
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}
	public function userInsert($admin_name, $admin_id, $admin_username)
	{
		$admin_id = $this->fm->validation($admin_id);
		$admin_id = mysqli_real_escape_string($this->db->link, $admin_id);
		$admin_name = $this->fm->validation($admin_name);
		$admin_name = mysqli_real_escape_string($this->db->link, $admin_name);
		$admin_username = $this->fm->validation($admin_username);
		$admin_username = mysqli_real_escape_string($this->db->link, $admin_username);

		if (empty($admin_id)) {
			$MSG = "<span class='success'> User ID can't be empty. </span>";
			return $MSG;
		}
		elseif (empty($admin_name)) {
			$MSG = "<span class='success'> User Name can't be empty. </span>";
			return $MSG;
		}
		else {
			$query = "INSERT INTO admin(admin_id, admin_name,  admin_username, admin_password) VALUES('$admin_id', '$admin_name', '$admin_username', '$admin_username')";
			$usereInsert = $this->db->insert($query);
			if ($usereInsert) {
				$MSG = "<span class='success'> User Intered Successfully. </span>";
				return $MSG;
			}
			else {
				$MSG = "<span class='error'> User Not Intered. </span>";
				return $MSG;
			}
		}
	}
	public function getAlladmin()
	{
		$query = "SELECT * FROM admin ORDER BY admin_id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getByAdminId($user_id){
		$query = "SELECT * FROM myaccount
			WHERE User_id = '$user_id'";
		$result = $this->db->select($query);
		return $result;
	}
	public function updateAdmin($user_id, $user_name, $user_gmail, $user_university, $user_varsityID, $user_phone){

		if (empty($user_id)) {
			$MSG = "<span class='success'> User ID can't be empty. </span>";
			return $MSG;
		}
		elseif (empty($user_name)) {
			$MSG = "<span class='success'> User Name can't be empty. </span>";
			return $MSG;
		}
		else {
			$query = "UPDATE myaccount SET 
				User_name='$user_name',
				User_gmail='$user_gmail',
				User_university='$user_university',
				User_varsityID='$user_varsityID',																																																
				User_phone='$user_phone' 
				WHERE User_id = '$user_id'";
					$updated_row = $this->db->update($query);
			if ($updated_row) {
				$MSG = "<span class='success'> User updated Successfully. </span>";
				return $MSG;
			}
			else {
				$MSG = "<span class='error'> User Not Updated. </span>";
				return $MSG;
			}
		}
	}
	public function adminDeleteById($id){
		$query = "DELETE FROM admin
				WHERE admin_id = '$id'";
		$DataDelete = $this->db->delete($query);
		if ($DataDelete) {
			$MSG = "<span class='success'> User Deleted Successfully. </span>";
			return $MSG;
		}
		else {
			$MSG = "<span class='error'> User Not Deleted. </span>";
			return $MSG;
		}
	}
}
?>