<?php

require_once('./src/repositories/DbConnection.php');

/**
 * 
 */
class QuizzesModel extends DbConnection
{
	public function getLastQuizzes()
	{
		$db = $this->dbConnect();

		$sqlGetLastQuiz = 'SELECT * FROM quizzes ORDER BY id DESC LIMIT 3';
		$getLastQuiz = $db->prepare($sqlGetLastQuiz);
		$getLastQuiz->execute();

		if ($getLastQuiz->rowCount() >= 1) {
			while($lastQuizTemp = $getLastQuiz->fetch(PDO::FETCH_ASSOC)) {
				$allQuizzes[] = $lastQuizTemp;
			}

			return $allQuizzes;
		}
	}
}