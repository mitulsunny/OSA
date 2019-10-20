<html>
<?php

//set up connection credentials

$servername = "localhost";
$username = "id9683453_mitulasad";
$password = "12345";
$dbname = "id9683453_guidance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//gather the data from the form

$question = $_POST["question1"];
$answer = $_POST["answer1"];
$comments = $_POST["comments1"];
$topics = $_POST["topics1"];

// $question="Mitul";
// $answer="sunny";
// $comments="everything";

    $sql = "INSERT INTO Questions (question, answer, note, topic) VALUES('$question', '$answer', '$comments','$topics')";
    if (mysqli_query($conn, $sql)) {
    echo "Success!!";
    ?>
   
    <?php
     header("Location:readAllProduct.php");
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
  } 


?>
</html>