<?php
class GameModel extends Model{


	//display
	public function Index(){
		$this->query('SELECT * FROM games');
		$rows = $this->resultSet();
		return $rows;


// 		if(isset($_POST['delete'])==TRUE)
// { 
//     $gid = $_POST['delete'];

// $sql= "DELETE from games where gameID='$gid'";
// if(mysqli_query($conn,$sql)){
//     echo "<script> window.location='index.php';</script>";  
//     display();
//     exit;
// }
// else 
// {
//     echo "Invalid Data";
// }

// $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
// 		if(isset($post['delete'])==TRUE){
// 			$gid = $_POST['delete'];
// 			$this->query("DELETE from games where gameID='$gid'");
// 			$this->bind(':gameID', $gid);
// 			$this->execute();
// 			if($this->lastDeletedId()){
// 				// Redirect
// 				header('Location: '.ROOT_URL.'games');
// 			}
// 		}
// 		return;
	}

	public function delete($gid)   
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if(isset($post['delete'])==TRUE){
			$gid = $_POST['delete'];
			$this->query("DELETE from games where gameID='$gid'");
			$this->bind(':gameID', $gid);
			$this->execute();
			if($this->lastDeletedId()){
				// Redirect
				header('Location: '.ROOT_URL.'games');
			}
		}
		return;
		
	}
	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['insert'])){
			// if($post['gname'] == '' || $post['gseries'] == '' || $post['gspace'] || $post['gdeveloper'] || $post['gpublisher'] || $post['ggenres'] == ''){
			// 	Messages::setMsg('Please Fill In All Fields', 'error');
			// 	return;
			// }
			// Insert into MySQL
			$this->query('INSERT INTO games (gname, gseries, gspace, gdeveloper ,gpublisher, ggenres) VALUES(:gname, :gseries, :gspace, :gdeveloper, :gpublisher, :ggenres )');
			$this->bind(':gname', $post['gname']);
			$this->bind(':gseries', $post['gseries']);
			$this->bind(':gspace', $post['gspace']);
			$this->bind(':gdeveloper', $post['gdeveloper']);
			$this->bind(':gpublisher', $post['gpublisher']);
			$this->bind(':ggenres', $post['ggenres']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'games');
			}
		}
		return;
	}
}