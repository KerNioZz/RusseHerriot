<?php

class IndexService
{
	private $resources = [];
	private $searchBarData = [];

	public function getResources()
	{
		spl_autoload_register(function($class) {
			require_once('./src/models/CoursesModel.php');
			require_once('./src/models/QuizzesModel.php');
		});

		$coursesModel = new CoursesModel();
		$quizzesModel = new QuizzesModel();

		$lastCourse = $coursesModel->getLastCourse();
		$lastQuizzes = $quizzesModel->getLastQuizzes();

		array_push($this->resources, $lastCourse);
		array_push($this->resources, $lastQuizzes);

		return $this->resources;
	}

	public function getSearchBarData()
	{
		spl_autoload_register(function($class) {
			require_once('./src/models/CoursesModel.php');
			require_once('./src/models/QuizzesModel.php');
		});

		$coursesModel = new CoursesModel();

		$allCourses = $coursesModel->getAllCourses();

		array_push($this->searchBarData, $allCourses);

		return $this->searchBarData[0];
	}
}