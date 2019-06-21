<?php 

	include 'database.php';

	// $conn = new DB();
	// $get_conn = $conn->connect();

	/**
	 * 
	 */
	class Select extends DB
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function select()
		{
			$sql = "SELECT id, first_name, last_name, email FROM persons";
			$get_conn = $this->connect();
			$result = $get_conn->query($sql);

			if ($result == false) {
				# code...
				echo "Not conected";
			} 
			

			return $result;
		}
	}

 ?>