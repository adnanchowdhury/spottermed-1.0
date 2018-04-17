<?php
session_start();
?>
<?php require('db_connect.php') ?>
<?php
	echo "Data sent.";
	$userScore = $_POST['userScore'];
	// echo $userScore;

	$moduleName = $_POST['moduleName'];
	//echo $moduleName;


	//$moduleName = $_POST['moduleName'];
	//$var = strToUpper($moduleName);
	//echo $moduleName;

	if ( $_SESSION['logged_in'] == 1 ) {

				// 1. GET FIRST NAME, LAST NAME, EMAIL
	              $first_name = $_SESSION['first_name'];
	              $last_name = $_SESSION['last_name'];
	              $email = $_SESSION['email'];

				// 2. Get USER ID
                $rows = db_select("SELECT `userID` FROM `users` WHERE `first_name`='$first_name' AND `last_name`='$last_name' AND `email`='$email'");
                if($rows === false) {
                    $error = db_error();
                }
	            $userID =  $rows[0]['userID'];
                //echo "User ID is: " . $userID;

                // 3. Get MODULE ID - to be completed.
				$moduleName = $_POST['moduleName'];
				$upperCase = strToUpper($moduleName);
			    $xml=simplexml_load_file("modules.xml") or die("Error: Cannot create object");

			    foreach ($xml->module as $module) {
			    	if ($upperCase == $module->moduleShortName) {
			    		$moduleID = $module->id;
			    	}
			    }


                // 4. GET SCORE
	            $userScore = $_POST['userScore'];
	            //echo "User Score is: " . $userScore;

	            // Insert Data into Scores Table
	            $result = db_query("INSERT INTO `Scores` (`userID`, `moduleID`, `score`, `dateScored`) VALUES (
		            	(SELECT `userID` FROM `users` WHERE `first_name`='$first_name' AND `last_name`='$last_name' AND `email`='$email'),
		            	$moduleID,
		            	$userScore,
		            	now()
		            )");
	            if($result === false) {
				    $error = db_error();
				    echo $error;
				    // Send the error to an administrator, log to a file, etc.
				} else {
				    // We successfully inserted a row into the database
				}
	};


?>