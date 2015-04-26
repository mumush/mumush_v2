
<?php 

$titles = array(
	//WE CAN SET UP AN ASSOCIATIVE ARRAY TO DYNAMICALLY SET PAGE TITLES HERE
	"1-1" => "Hosting Services",
	"1-2" => "Basic Terminal Usage",
	"2-1" => "SSH",
	"2-2" => "FTP and SFTP",
	"2-3" => "Basic Server Security",
	"3-1" => "Web Stacks",
	"3-2" => "Databases",
	"3-3" => "Server-Side Technologies",
	"4-1" => "Server Options",
	"4-2" => "Configuring Apache",
	"4-3" => "Configuring DNS",
	"5-1" => "HTML5 Practices",
	"5-2" => "CSS3 Practices",
	"5-3" => "Advertisement Services",
	"5-4" => "IPv6"
);

// IF WE'VE QUERIED FOR A SPECIFIC PAGE, FETCH ITS TITLE
if (isset($_GET['section'])) {
	$title = $titles[$_GET['section']]." | How to Host a Website with Linux";
}
// OTHERWISE, USE A DEFAULT TITLE
else {
	$title = "How to Host a Website with Linux";
}

//GET THE SECTION NUMBER
$section = $_GET['section'][0];
?>

<!DOCTYPE html>
	<html>
	<head>
		<!-- THIS VIEWPORT THING IS FOR MOBILE, PREVENTS USER SCALING AND SETS A 1:1 SCALE -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title><?php echo $title ?></title>

		<link href="assets/img/favicon.png" rel="icon" />

		<!--STYLESHEETS-->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel='stylesheet' media='(max-width: 850px)' href='assets/css/smallWidth.css' />
		<link rel='stylesheet' media='(max-height: 768px)' href='assets/css/smallHeight.css' />

		<!--WEB FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300|Roboto+Slab:400,700|Raleway:300,400' rel='stylesheet' type='text/css'>

		<!--FONTAWESOME-->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	</head>

	<body>
		<!-- NAVIGATION WILL BE BUILT HERE -->
	<div id="nav-container">
		<nav>
			<div>
				<h2 id="navHeader"><a href="index.php">Hosting<br />with<br /><i class="fa fa-linux"></i> Linux</a></h2>
				<ul id="innerNav">
					<li <?php if($section=="1") { echo "class='expanded'"; } else { echo "class='collapsed'"; } ?> >
						<a class="navSection" href="#" onclick="toggleExpand(this)"><i class="fa fa-desktop"></i> Obtaining Your Server</a>
						<div class="navHidden">
							<ul>
								<li><a href="?section=1-1">Hosting Services</a></li>
								<li><a href="?section=1-2">Basic Terminal Usage</a></li>
							</ul>
						</div>
					</li>
					<li <?php if($section=="2") { echo "class='expanded'"; } else { echo "class='collapsed'"; } ?> >
						<a class="navSection" href="#" onclick="toggleExpand(this)"><i class="fa fa-upload"></i> Accessing Your Server</a>
						<div class="navHidden">
							<ul>
								<li><a href="?section=2-1">SSH</a></li>
								<li><a href="?section=2-2">FTP and SFTP</a></li>
								<li><a href="?section=2-3">Basic Server Security</a></li>
							</ul>
						</div>
					</li>
					<li <?php if($section=="3") { echo "class='expanded'"; } else { echo "class='collapsed'"; } ?> >
						<a class="navSection" href="#" onclick="toggleExpand(this)"><i class="fa fa-magic"></i> Utilizing Your Server</a>
						<div class="navHidden">
							<ul>
								<li><a href="?section=3-1">Web Stacks</a></li>
								<li><a href="?section=3-2">Databases</a></li>
								<li><a href="?section=3-3">Server-Side Technologies</a></li>
							</ul>
						<div class="navHidden">
					</li>
					<li <?php if($section=="4") { echo "class='expanded'"; } else { echo "class='collapsed'"; } ?> >
						<a class="navSection" href="#" onclick="toggleExpand(this)"><i class="fa fa-pencil"></i> Publishing Your Site</a>
						<div class="navHidden">
							<ul>
								<li><a href="?section=4-1">Server Options</a></li>
								<li><a href="?section=4-2">Configuring Apache</a></li>
								<li><a href="?section=4-3">Configuring DNS</a></li>
							</ul>
						</div>
					</li>
					<li <?php if($section=="5") { echo "class='expanded'"; } else { echo "class='collapsed'"; } ?> >
						<a class="navSection" href="#" onclick="toggleExpand(this)"><i class="fa fa-plus"></i> Additional Resources</a>
						<div class="navHidden">
							<ul>
								<li><a href="?section=5-1">HTML5 Practices</a></li>
								<li><a href="?section=5-2">CSS3 Practices</a></li>
								<li><a href="?section=5-3">Advertisement Services</a></li>
								<li><a href="?section=5-4">IPv6</a></li>
								
							</ul>
						</div>
					</li>
					<!-- FROM WHAT I CAN TELL IT'S NO LONGER NEEDED BUT DIDN'T WANT TO DELETE JUST IN CASE ***************************
					<span class="navCap"></span>
					<div style="height:5px; background-color: #0099CC; position: relative; z-index:1;"></div>
					-->
				</ul>	
			</div>
		</nav>
	</div>

	<!--SMALLER WIDTH MEDIA QUERY NAV PULL OUT-->

	<i id="pullOut" class="fa fa-chevron-right" onclick="pullOutNav()"></i>

	<h2 id="smallNavHeader">Hosting with <i class="fa fa-linux"></i> Linux</h2>

	<!--PULL OUT NAVIGATION FOR SMALL WIDTH MEDIA QUERY-->
	<div id="hiddenNav">

		<ul>
			<li class="sectionName"><i class="fa fa-desktop"></i> Obtaining Your Server</li>
			<li><a href="?section=1-1">Hosting Services</a></li>
			<li><a href="?section=1-2">Basic Terminal Usage</a></li>
			<li class="sectionName"><i class="fa fa-upload"></i> Accessing Your Server</li>
			<li><a href="?section=2-1">SSH</a></li>
			<li><a href="?section=2-2">FTP and SFTP</a></li>
			<li><a href="?section=2-3">Basic Server Security</a></li>
			<li class="sectionName"><i class="fa fa-magic"></i> Utilizing Your Server</li>
			<li><a href="?section=3-1">Web Stacks</a></li>
			<li><a href="?section=3-2">Databases</a></li>
			<li><a href="?section=3-3">Server-Side Technologies</a></li>
			<li class="sectionName"><i class="fa fa-pencil"></i> Publishing Your Site</li>
			<li><a href="?section=4-1">Server Configuration</a></li>
			<li><a href="?section=4-2">Configuring DNS</a></li>
			<li class="sectionName"><i class="fa fa-plus"></i> Additional Resources</li>
			<li><a href="?section=5-1">HTML5 Practices</a></li>
			<li><a href="?section=5-2">CSS3 Practices</a></li>
			<li><a href="?section=5-3">Advertisement Services</a></li>
			<li><a href="?section=5-4">IPv6</a></li>
		</ul>

	</div>


<!--EASY SCROLL UP THE PAGE-->
<i id="scrollUp" class="fa fa-long-arrow-up" onclick="scrollToTop()"></i>