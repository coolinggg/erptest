<?php
require_once("xerp/biz/base/basecontroler.php");

class portal extends controller{

	public function get()
	{
		if(isset($_REQUEST["index"]))
		{
			$this->display($_REQUEST["index"] . '.html');
		}
		else
		{
			$this->display('portal2' . '.html');
		}
		
	}
}
?>