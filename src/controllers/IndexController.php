<?php

/**
 * 
 */
class IndexController
{
	
	public function __construct($params)
	{
		$this->params = $params;
	}


	private $params;


	public function showIndex()
	{
		spl_autoload_register(function($class) {
			require_once('./src/services/IndexService.php');
			require_once('./src/response/IndexResponse.php');
			require_once('./src/presenters/IndexPresenter.php');
		});

		$response = new IndexResponse();
		$indexService = new IndexService($response);

		$response->resources = $indexService->getResources();
		$response->searchBar = $indexService->getSearchBarData();

		$indexPresenter = new IndexPresenter();

		echo $indexPresenter->execute($response);
		exit();
	}
}