<?php

class GameModel extends Model{


	//display
	public function Index(){
		$this->query('SELECT * FROM games');
		$row = $this->resultSet();
		return $row;
	
	}

	public function delete()
	{
		//delete
		$delete=$_REQUEST['delete_id'];
		$this->query('DELETE from games where gameID=:gameID');
		$this->bind(':gameID',$delete);
		$this->execute();
		header('location:'.ROOT_URL.'games');
	}






	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['insert'])){	
				if($post['gname']==''||$post['gseries']==''||$post['gdeveloper']==''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
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
				header('Location: '.ROOT_URL.'games');
			}
		}
		return;
	}

	public function edit()
        {
			//update Data
            if(isset($_REQUEST['update_id']))
            {
                $update=$_REQUEST['update_id'];
                $this->query('SELECT * FROM games WHERE gameID=:gameID');
                $this->bind(':gameID',$update);
                $row=$this->single();
                return $row;
            }
            else
            {
                $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                if(isset($post['update']))
                {
                    $this->query('UPDATE games SET gname=:gname, gseries=:gseries, gspace=:gspace, gdeveloper=:gdeveloper
					, gpublisher=:gpublisher, ggenres=:ggenres WHERE gameID=:gameID');
                    $this->bind(':gname',$post['gname']);
                    $this->bind(':gseries',$post['gseries']);
                    $this->bind(':gspace',$post['gspace']);
					$this->bind(':gdeveloper',$post['gdeveloper']);
					$this->bind(':gpublisher',$post['gpublisher']);
					$this->bind(':ggenres',$post['ggenres']);
                    $this->bind(':gameID',$post['gameID']);
                    $this->execute();
                    header('location:'.ROOT_URL.'games');
                }
            }
        }




}