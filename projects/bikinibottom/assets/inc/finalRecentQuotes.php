<?php 

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

	//get first row from table where the quote_character is spongebob

	$querySponge = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'spongebob' ORDER BY quote_id DESC ";
	$resultSponge = mysqli_query($mysqli, $querySponge);
	$firstSponge = mysqli_fetch_row($resultSponge);

	$queryPatrick = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'patrick' ORDER BY quote_id DESC ";
	$resultPatrick = mysqli_query($mysqli, $queryPatrick);
	$firstPatrick = mysqli_fetch_row($resultPatrick);

	$querySquidward = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'squidward' ORDER BY quote_id DESC ";
	$resultSquidward = mysqli_query($mysqli, $querySquidward);
	$firstSquidward = mysqli_fetch_row($resultSquidward);

	$querySandy = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'sandy' ORDER BY quote_id DESC ";
	$resultSandy = mysqli_query($mysqli, $querySandy);
	$firstSandy = mysqli_fetch_row($resultSandy);

	$queryMrKrabs = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'mrkrabs' ORDER BY quote_id DESC ";
	$resultMrKrabs = mysqli_query($mysqli, $queryMrKrabs);
	$firstMrKrabs = mysqli_fetch_row($resultMrKrabs);

	$queryPearl = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'pearl' ORDER BY quote_id DESC ";
	$resultPearl = mysqli_query($mysqli, $queryPearl);
	$firstPearl = mysqli_fetch_row($resultPearl);

	$queryPlankton = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'plankton' ORDER BY quote_id DESC ";
	$resultPlankton = mysqli_query($mysqli, $queryPlankton);
	$firstPlankton = mysqli_fetch_row($resultPlankton);

	$queryGary = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'gary' ORDER BY quote_id DESC ";
	$resultGary = mysqli_query($mysqli, $queryGary);
	$firstGary = mysqli_fetch_row($resultGary);

	$queryMrsPuff = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'mrspuff' ORDER BY quote_id DESC ";
	$resultMrsPuff = mysqli_query($mysqli, $queryMrsPuff);
	$firstMrsPuff = mysqli_fetch_row($resultMrsPuff);

	$queryMermBarn = " SELECT quote_body FROM bikini_bottom_quotes WHERE quote_character = 'mermbarn' ORDER BY quote_id DESC ";
	$resultMermBarn = mysqli_query($mysqli, $queryMermBarn);
	$firstMermBarn = mysqli_fetch_row($resultMermBarn);


	mysqli_close($mysqli);

?>