<?php

class Home extends Controller
{
#==========================================================================================
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
/*	public function __construct()
	{
	}*/
#------------------------------------------------------------------------------------------
	public function index()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$this->view('home/index');
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}