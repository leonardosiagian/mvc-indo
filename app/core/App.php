<?php

class App
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		$url = $this->parseURL();
		echo '<pre>semak $url=>';var_dump($url);echo '</pre>';
	}
#------------------------------------------------------------------------------------------
	public function parseURL()
	{
		if( isset($_GET['url']) )
		{
			$url = $_GET['url'];
			return $url;
		}
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}