<?php
class Games extends Controller{
	protected function Index(){
		$viewmodel = new GameModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function delete(){
		$viewmodel = new GameModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'games');
		}
		$viewmodel = new GameModel();
		$this->returnView($viewmodel->add(), true);
	}
}