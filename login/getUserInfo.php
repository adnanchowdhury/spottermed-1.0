<?php
session_start();
?>
<?php require('../db_connect.php') ?>
<?php 
	if ( $_SESSION['logged_in'] == 1 ) {

			// GET FIRST NAME, LAST NAME, EMAIL
              $first_name = $_SESSION['first_name'];
              $last_name = $_SESSION['last_name'];
              $email = $_SESSION['email'];

			// Get USER ID
            $rows = db_select("SELECT `userID`, `dateJoined` FROM `users` WHERE `first_name`='$first_name' AND `last_name`='$last_name' AND `email`='$email'");
            if($rows === false) {
                $error = db_error();
            }
            $userID =  $rows[0]['userID'];
            $mysqldateJoined = $rows[0]['dateJoined'];
            $phpdateJoined = strtotime($mysqldateJoined);
			$dateJoined = date("d-m-y", $phpdateJoined);

            // Test Result
			
			$Testresult = db_select("SELECT `moduleID`, `score`, `dateScored` FROM `Scores` WHERE `userID`='$userID' AND `moduleID` = 3");
			if ($result === false) {
				$error = db_error();
				console.log($error);
			}

			$TestdateScored = array();
			$Testscore = array();

			foreach ($Testresult as $TestScoreData) {
				array_push($TestdateScored, $TestScoreData['dateScored']);
				array_push($Testscore, $TestScoreData['score']);
			}
            // BB Result
			
			$BBresult = db_select("SELECT `moduleID`, `score`, `dateScored` FROM `Scores` WHERE `userID`='$userID' AND `moduleID` = 1");
			if ($result === false) {
				$error = db_error();
				console.log($error);
			}

            // LC Result
			
			$LCresult = db_select("SELECT `moduleID`, `score`, `dateScored` FROM `Scores` WHERE `userID`='$userID' AND `moduleID` = 1");
			if ($result === false) {
				$error = db_error();
				console.log($error);
			}	


			// Gives an array of results with average score for each module for the User.
			$averages = db_select("SELECT moduleID, AVG(score) FROM Scores WHERE userID=$userID GROUP BY moduleID ORDER BY moduleID ASC");



	} else {
		//console.log("User is not logged in.");
	}


?>