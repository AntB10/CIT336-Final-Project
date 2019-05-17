<?php

include "connect.php";
$keywordfromform = $_GET["keyword"];

// search the database for the key word
echo "<h2>Show all jokes with the word $keywordfromform</h2>";
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes WHERE Joke_questin LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Joke id: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " Joke Answer: " . $row["Joke_answer"]. "<br>";
    }
} else {
    echo "0 results";
}
?>