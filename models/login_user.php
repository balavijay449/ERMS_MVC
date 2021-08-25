<?php

class Login_user{
	public $db;
	public function __construct($db){
		$this->db = $db;
	}
	public function select_data($email, $pass){
		$validate_sql = "SELECT email, password FROM user_login WHERE email = '$email' AND password = '$pass'";
		$validate_query = $this->db->query($validate_sql);
		return $validate_query;
	}
}
$login_user = new Login_user($dbc->db);
print_r($login_user->select_data("bala@has.com", "123456"));

// session_start();

// $db=new mysqli('localhost','root','','erms') or die("no connect");

// if (isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$pass = $_POST['password'];

// 	$sql = "SELECT email, password FROM user_login WHERE email = '$email' AND password = '$pass'";
// 	$result = $db->query($sql);
// 	if ($result->num_rows == 1) {
// 		$name_query = "SELECT f_name, l_name FROM user_login WHERE email = '$email'";
// 		$name_result = $db->query($name_query);
// 		$row = $name_result->fetch_assoc();
// 		$_SESSION['name'] = $row['f_name']." ".$row['l_name'];
// 		$_SESSION['email'] = $email;
// 		echo("<script>location.href = 'user_profile.php';</script>");
// 	}
// 	else{
// 		echo "<script>alert('Email or Password is incorrect');</script>";
// 	}
// }

?>