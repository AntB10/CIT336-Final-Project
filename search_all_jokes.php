<?php

// if there are any values in the table, display them one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "Ab01291998", "finalproject", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Joke id: " . $row["JokeID"]. " Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
    }
} else {
    echo "0 results";
}

?>