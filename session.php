<?php 
//session_start();
//echo session_id();

$servername = "localhost";
$username = "********";
$password = ""********";";
$dbname = ""********";";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



// initialise session variable with array 
//$_SESSION['questionhistory'] = [];

//Total Number of Questions in DB
$query_count = $conn->query("SELECT questionID FROM BBQuestions");
$totalquestions = $query_count->num_rows;


function findQuestion() {
	global $conn;
	$sql = "SELECT * FROM BBQuestions ORDER BY rand() LIMIT 1";

	$result = $conn->query($sql);
	$question = $result->fetch_assoc();
	
	$q_id = $question["questionID"]; //Get ID for question
	$q_id_integer = (int)$q_id; // Integer-ise the ID.

	// Checks to see if question is already seen (i.e. in SESSION['questionhistory'])

	if (isset($_SESSION['questionhistory'])) {
		// do nothing
	} else {
		$_SESSION['questionhistory'] = [];
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

//returns a question to be is echo-ed in index.php.
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

$question = pushQuestion();  // question that is echo-ed in index.php

$question_json = json_encode($question);


$var = $question['questionID'];
$_SESSION['questionhistory'][] = $var;





if ($question != []){
	$optionsarray = array_slice($question, 4, 10);
}
$nullvalues = 0;
/*foreach ($optionsarray as $item) {
	if ($item == NULL) {
		$nullvalues++;
		echo "A";
	}
	echo $item . "  ";
}	

echo $nullvalues; */




mysqli_close($conn);




/*$x = count($_SESSION['questionhistory']);
while ($val == 0 AND $x < $totalquestions ) {
	echo "Number is not new.";


}
*/







// print_r($questions_array);



/*echo $question["questionText"];
print_r($questions_array);*/

// $question2 = generateNewQuestion();
// echo $question2["questionText"];

/*$num = 8;
if (in_array($num, $questions_array)){
	echo "Yes";
};*/











?>
