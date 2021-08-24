<?php

require_once('./src/repositories/DbConnection.php');

/**
 * 
 */
class CoursesModel extends DbConnection
{

	public function getAllCourses()
	{
		$db = $this->dbConnect();

		$sqlGetAllCourses = 'SELECT * FROM groups ORDER BY id DESC';
		$getAllCourses = $db->prepare($sqlGetAllCourses);
		$getAllCourses->execute();

		if ($getAllCourses->rowCount() >= 1) {
			while ($tempCourse = $getAllCourses->fetch(PDO::FETCH_ASSOC)) {
				$allCourses[] = $tempCourse;
			}

			return $allCourses;
		}
	}

	public function getLastCourse()
	{
		$db = $this->dbConnect();

		$sqlGetLastCourse = 'SELECT * FROM groups ORDER BY id DESC LIMIT 1';
		$getLastCourse = $db->prepare($sqlGetLastCourse);
		$getLastCourse->execute();

		if ($getLastCourse->rowCount() === 1) {
			$lastCourse = $getLastCourse->fetch(PDO::FETCH_ASSOC);

			return $lastCourse;
		}
	}
}