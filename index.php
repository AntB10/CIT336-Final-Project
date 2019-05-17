<html>
<html lang="en">
<head>
<title>Final Project Jokes Page</title>
<meta charset="utf-8">
<link rel="stylesheet" href="final.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<header>
<h1>SEARCH and ADD Jokes</h1>
</header>
<div id="container">
<br><br>

<main>
<h2>Description</h2>
<p>
	This is a online web application where the user can search key words to find a joke. The user can also input their own jokes to the server, which can then be displayed with the other jokes from the database. 
</p>
<br>

<?php
include "connect.php";
//include "search_all_jokes.php";
?>

<form action="search_keyword.php">
Enter a key word to search for:<br>
<input type="text" name="keyword"><br>
<input type="submit" value="Submit">
</form> 

<br>
<form action="add_joke.php">
Enter a new joke here:<br>
<input type="text" name="newjoke"><br><br>

Enter the answer to your joke here:<br>
<input type="text" name="newanswer"><br>
<input type="submit" value="Submit">
</form>

<?php
//include "search_keyword.php";

$mysqli->close();
?>

</main>
</div>
</body>
<footer>
copyright &copy; 2019 CIT336 Final Project<br>
<a href="mailto:anthony@bradford.com">anthony@bradford.com</a>
</footer>
</html>