<?php

/**
 * 
 */
class IndexPresenter
{
	public function execute($response)
	{
		spl_autoload_register(function($class) {
			require_once('./src/viewModels/IndexViewModel.php');
		});
		$viewModel = new IndexViewModel();

		return $viewModel->render('./src/views/indexView.php', $response);
	}
}