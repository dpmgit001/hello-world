<?php
$question = $_POST['question'];
$answer = $_POST['answer'];
$file = 'data.txt';
$current = file_get_contents($file);
$current .= "Question: $question - Answer: $answer\n";
file_put_contents($file, $current);
header('Location: displayData.php');
?>