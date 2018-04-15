<?php require('db_connect.php') ?>
<?php

//Total Number of Questions in LCQuestions
$LCcount_query = db_query("SELECT questionID FROM LCQuestions");
$totalquestions = mysqli_num_rows($LCcount_query);



//Find a Question
function findQuestion() {
	$results = db_select("SELECT * FROM LCQuestions ORDER BY rand() LIMIT 1"); 
	if($results === false) {
	    $error = db_error();
			console.log("No result found.");
	}
	$question = $results[0];

	$q_id = $question["questionID"]; //Get ID for question
	$q_id_integer = (int)$q_id; // Integer-ise the ID.

	// Checks to see if question is already seen (i.e. in SESSION['questionhistory'])

	if (isset($_SESSION['LCquestionhistory'])) {
		// do nothing
	} else {
		$_SESSION['LCquestionhistory'] = [];  //Initialises SESSION['questionHistory']
	}


	if (in_array($q_id_integer, $_SESSION['LCquestionhistory'])) {
		return 0;
	}
	else {
		return $question;
	}
}


//checks to see if user has seen all questions 
function checkIfAllDone() {
	global $totalquestions;
	if (isset($_SESSION['LCquestionhistory'])) {
		// do nothing
	} else {
		$_SESSION['LCquestionhistory'] = [];
	}
	$x = count($_SESSION['LCquestionhistory']); 
	if ($x == $totalquestions) {
		//echo "ALL DONE";
		session_destroy();
		return 1;
	}
	else {
		return 0;
	}
}

$done = CheckIfAllDone();

//Returns a single question to be displayed.
function pushQuestion() {
	global $done;
	global $question_number;
	$question = findQuestion();
	if ($done != 1) {
	while ($question == 0) {
		$question = findQuestion();
	}
	if (isset($_SESSION['LCquestionNumber'])) {
	// do nothing
	} else {
		$_SESSION['LCquestionNumber'] = 0;
	}

	$_SESSION['LCquestionNumber'] ++;
	return $question;
	}
}


//Call for a question to output.
$question = pushQuestion(); 


//Stores the called question in SESSION to mark it as 'seen'.
$var = $question['questionID'];
$_SESSION['LCquestionhistory'][] = $var;


//Returns an array of all answer Options.
if ($question != []){
	$optionsarray = array_slice($question, 4, 10);
}



//Testing for this session.php
/*
echo "Total Questions in DB: " . $totalquestions;
$q = findQuestion();
echo $q['questionText'];*/





?>
