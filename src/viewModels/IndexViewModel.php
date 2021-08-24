<?php
	
/**
 * 
 */
class IndexViewModel
{
	public $title = 'Page d\'accueil';
	public $httpCode;
	public $courseInfo;
	public $quizzesInfo;
	public $searchBarData;
	public $error;

	public $viewMore = 'En savoir plus'; // For courses / quizzes AND API sections
	public $userViewMore = 'Se connecter / S\'inscrire';

	public function render($path, IndexResponse $content)
	{
		$this->httpCode = ($this->checkStatus($content)) ? '200' : $this->checkStatus($content);

		$this->courseInfo = $this->fromObject($content->resources[0]);
		$this->quizzesInfo = $this->fromObject($content->resources[1]);
		$this->searchBarData = $this->fromObject($content->searchBar);
		$this->error = $this->fromObject($content->error);

		ob_start();
		require($path);
		$mainContent = ob_get_clean();

		ob_start();
		require('./src/views/template.php');
		return ob_get_clean();
	}

	private function checkStatus($content)
	{
		return (empty($content->error['code'])) ? true : $content->error['code'];
	}

	private function fromObject($content)
	{
		return (array) $content;
	}
}