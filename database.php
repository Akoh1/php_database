<?php 
/**
 * 
 */
class DB 
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	protected $db_name = 'php_test';
	protected $db_user = 'root';
	protected $db_pass = "";
	protected $db_host = "localhost";

	public function connect()
	{
		# code...
		$connect_db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		if (mysqli_connect_errno()) {
			# code...
			echo "Connection faied". mysqli_connect_error();
			exit();
		}
		return $connect_db;
	}
}
 ?>