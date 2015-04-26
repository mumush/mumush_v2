<?php

	//error_reporting(0);

	$feedback = '';

	if ( !empty($_POST) ) {

		if ( empty( $_POST['characterQuote'] ) || strlen( $_POST['characterQuote'] ) < 5 ) {

			$feedback .= "Please enter a valid quote!";

		}

		//if there were no errors, sanitize and store data
		if ( $feedback == '' ) {

			//MAKE DB CONNECTION
			$db_host = "localhost";
			$db_user = "root";
			$db_pass = "Mumush1037";
			$db_name = "bikini_bottom";

			//CONNECT TO DB
			$mysqli = new mysqli( $db_host, $db_user, $db_pass, $db_name);

			if ( $mysqli -> connect_error){

				echo "connection error: " . $mysqli->connect_error;

				die();
			}

			//SANITIZE INPUT

			$quote = $_POST['characterQuote'];

			$quote = str_replace('"', "", $quote);

			$strippedQuote = strip_tags($quote);

			$sanitizedQuote = mysqli_real_escape_string($mysqli, trim($strippedQuote));

			//GET HIDDEN INPUT VALUE WHICH HAS THE CHARACTERS NAME
			$character = $_POST['character'];


			//CREATE INSERT STATEMENT
			$sqlQuery = " INSERT INTO bikini_bottom_quotes( quote_character, quote_body ) VALUES ( '$character', '$sanitizedQuote' ) ";

			//RUN INSERT QUERY
			if ( !mysqli_query($mysqli, $sqlQuery) ) {

			die('Error: ' . mysqli_error($mysqli));

			}

			$feedback = "Take a look under the character, you might just find you're quote!";

			mysqli_close($mysqli);


		}

	} //END IF POST IS NOT EMPTY

	


?>