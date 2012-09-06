<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();	
	}
	
	function Index()
	{	 
                $data['mainContent'] = 'Main';
                $this->load->view('_Layout', $data);
	}
}