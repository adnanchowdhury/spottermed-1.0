<?php require('db_connect.php') ?>
<?php

//Total Number of Questions in BBQuestions
$BBcount_query = db_query("SELECT questionID FROM BBQuestions");
$totalquestions = mysqli_num_rows($BBcount_query);



//Find a Question
function findQuestion() {
	$results = db_select("SELECT * FROM BBQuestions ORDER BY rand() LIMIT 1"); 
	if($results === false) {
	    $error = db_error();
			console.log("No result found.");
	}
	$question = $results[0];

	$q_id = $question["questionID"]; //Get ID for question
	$q_id_integer = (int)$q_id; // Integer-ise the ID.

	// Checks to see if question is already seen (i.e. in SESSION['questionhistory'])

	if (isset($_SESSION['questionhistory'])) {
		// do nothing
	} else {
		$_SESSION['questionhistory'] = [];  //Initialises SESSION['questionHistory']
	}


	if (in_array($q_id_integer, $_SESSION['questionhistory'])) {
		return 0;
	}
	else {
		return $question;
	}
}


//checks to see if user has seen all questions 
function checkIfAllDone() {
	global $totalquestions;
	if (isset($_SESSION['questionhistory'])) {
		// do nothing
	} else {
		$_SESSION['questionhistory'] = [];
	}
	$x = count($_SESSION['questionhistory']); 
	if ($x == $totalquestions) {
		echo "ALL DONE";
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
	if (isset($_SESSION['questionNumber'])) {
	// do nothing
	} else {
		$_SESSION['questionNumber'] = 0;
	}

	$_SESSION['questionNumber'] ++;
	return $question;
	}
}


//Call for a question to output.
$question = pushQuestion(); 


//Stores the called question in SESSION to mark it as 'seen'.
$var = $question['questionID'];
$_SESSION['questionhistory'][] = $var;


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
