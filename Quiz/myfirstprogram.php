<?php

if($q1=='' || $q2 =='' || $q3 =='')
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];


	if($q1=='' || $q2 =='' || $q3 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == 1) { 
		$score++;
		}
		if($q2 == 3) { 
		$score++;
		}
		if($q3 == 2) {
		$score++;
		if($q4 == 4) { 
		$score++;
		}
		if($q5 == 1) { 
		$score++;
		}
	        $score = $score	/ 3 *100;
		
		if($score < 50)
		{
		echo '<h2>You have failed the exam and scored '.$score.'%.</h2>';
		}
		else {
		echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
		}
	}
}

?>