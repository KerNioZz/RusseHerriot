<?php

class IndexResponse
{
	public $resources;
	public $searchBar;
	public $error = [];

	public function setError($code, $message)
	{
		$errorArray = array(
			'code' => $code,
			'message' => $message
		);

		array_push($this->error, $errorArray);
	}
}