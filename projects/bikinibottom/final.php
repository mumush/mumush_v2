<?php require 'assets/inc/finalSubmit.php'; ?>
<?php require 'assets/inc/finalRecentQuotes.php'; ?>


<!DOCTYPE html>
<html>
	
	<head>

		<title>240: Bikini Bottom</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">

		<!--Stylesheets-->
		<link href="assets/css/finalStyle.css" rel="stylesheet">
		<link rel="stylesheet" media="(max-width: 913px)" href="assets/css/finalSmall.css" />
		<link rel="stylesheet" media="(min-width: 1390px)" href="assets/css/finalLarge.css" />

		<!--FontAwesome-->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!--Google Web Font-->
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>

		<link rel="icon" href="assets/img/favicon3.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="assets/img/favicon3.ico" type="image/x-icon"/>

		<script type="text/javascript">

			//PRELOAD ALL IMAGES

			var images = new Array();

			function preload() {

				for (i = 0; i < preload.arguments.length; i++) {

					images[i] = new Image();
					images[i].src = preload.arguments[i];
				}
			}

			//call the preload method and preload all page images
			preload(
			"assets/img/bikinibottom2.png",
			"assets/imgbwSponge.png",
			"assets/img/bwPatrick.png",
			"assets/img/bwSquid.png",
			"assets/img/bwSandy.png",
			"assets/img/bwKrabs.png",
			"assets/img/bwPearl.png",
			"assets/img/bwPlankton.png",
			"assets/img/bwGary.png",
			"assets/img/bwPuff.png",
			"assets/img/bwMermBarn.png",
			"assets/img/bikinibottom2.png",
			"assets/img/spongebob3.png",
			"assets/img/patrick2.png",
			"assets/img/squidward3.png",
			"assets/img/sandy1.png",
			"assets/img/mrkrabs.png",
			"assets/img/pearl1.png",
			"assets/img/plankton.png",
			"assets/img/pearl1.png",
			"assets/img/gary1.png",
			"assets/img/mrspuff.png",
			"assets/img/mermbarn.png",
			"assets/img/upArrow.png",
			"assets/img/eye2.png"
			)

		</script>

		<script>

			//PASS IN THE FORM ID SO THAT IT IS DYNAMIC FOR EACH OF THE FORMS BEING SUBMITTED
			function validate(ele) {

				//get the id of the parent form
				parentFormID = $(ele).closest('form').attr('id');

				if( $('#' + parentFormID + ' .quoteField').val().length == 0) { //if they entered nothing in the form

					$('#spongebobForm .quoteField').attr("placeholder", "Come on!  Enter a valid comment");
					$('#spongebobForm .quoteField').css('border-bottom', '3px solid #EF6E60');
					$('#spongebobForm .quoteField').css('border-top', '3px solid #EF6E60');

				}

				else { //otherwise submit the form

					$('#' + parentFormID).submit();

				}
			}

		</script>

	</head>

	<body>

		<div id="wrapper">

			<img id="pullOut" src="assets/img/eye2.png" alt="Pull Out Nav" onclick="showNav();" />

				<?php 

					if( $feedback == 'Come on!  Enter a valid quote!' ) {

						echo '<div class="notifError">' . $feedback . '</div>';

					}

					if( $feedback == 'Take a look under the character, you might just find your quote!' ) {

						echo '<div class="notifSuccess">' . $feedback . '</div>';

					}

				?>

			<nav>

				<ul id="hiddenNav">
					<li><a id="navSponge" href="#spongebob"><img src="assets/img/bwSponge.png" alt="Spongebob Squarepants" /></a></li>
					<li><a id="navPatrick" href="#patrick"><img src="assets/img/bwPatrick.png" alt="Patrick Star" /></a></li>
					<li><a id="navSquid" href="#squidward"><img src="assets/img/bwSquid.png" alt="Squidward Tentacles" /></a></li>
					<li><a id="navSandy" href="#sandy"><img src="assets/img/bwSandy.png" alt="Sandy Cheeks" /></a></li>
					<li><a id="navKrabs" href="#mrkrabs"><img src="assets/img/bwKrabs.png" alt="Mr. Krabs" /></a></li>
					<li><a id="navPearl" href="#pearl"><img src="assets/img/bwPearl.png" alt="Pearl" /></a></li>
					<li><a id="navPlankton" href="#plankton"><img src="assets/img/bwPlankton.png" alt="Plankton" /></a></li>
					<li><a id="navGary" href="#gary"><img src="assets/img/bwGary.png" alt="Gary" /></a></li>
					<li><a id="navPuff" href="#mrspuff"><img src="assets/img/bwPuff.png" alt="Mrs. Puff" /></a></li>
					<li><a id="navMermBarn" href="#mermbarn"><img src="assets/img/bwMermBarn.png" alt="Mermaid Man and Barnacle Boy" /></a></li>
				</ul>

			</nav>

			<div id="mainContent">

				<section id="bikinibottom">

					<span class="bubble" style="margin-left: 30%;"></span>
					<h1>Welcome to Bikini Bottom</h1><span class="bubble"></span>

					<img src="assets/img/bikinibottom2.png" alt="Bikini Bottom" />

					<p class="speechbubble">Click the arrows below to meet the citizens of Bikini Bottom!</p>

					<p>
						In the divine underwater city that is Bikini Bottom, you can find all sorts of sea creatures.  You will most definitely find a yellow sponge who goes by the name of Spongebob Squarepants who is more often than not creating harmless trouble on a daily basis.  Many scenic views can be stumbled upon by simply taking a walk, or swim, through the outskirts of town.  Visitors can visit the lush Kelp Forests, inhabited by quite mysterious creatures, or they could take a relaxing day off to visit Goo Lagoon, where they can surf, sunbathe, check out the lady fish, and get some ice cream.  Visitors should most definitely grab a famous Krabby Patty at the Krusty Krab; the best food joint in town.  Visitors should stay away from the Chum Bucket, a competing restaurant with knock-off Krabby Patties made of chum.  Among the many recreational activitie that can be pursued in Bikini Bottom, visitors might be interested in taking a day to Jellyfish, learn karate, take a boating class, or even participate in a local strong man competition.  Enjoy your stay, and make sure to say "Hi" to some of our favorite critters in the city below!
					</p>

					<a href="#spongebob"><div class="arrow"></div></a>

				</section>

				<section id="spongebob">

					<img src="assets/img/spongebob3.png" alt="Spongebob Squarepants" />

					<h1>Spongebob</h1>

					<blockquote>- "<?php echo $firstSponge[0]; ?>"</blockquote>

					<p>
					Spongebob Squarepants is the most well-known sponge in Bikini Bottom. He lives in an underwater pineapple with his pet snail, Gary.  He works as the main fry-cook at the Krusty Krab, home of the famous Krabby Patty.  Spongebob enjoys karate, jelly fishing, boating school, and having fun with his best friend, Patrick Star.  The only place you can find Spongebob, other than in the kitchen at the Krusty Krab, is at Jellyfish Fields.  Here, he catches jellyfish as a hobby, usually with Patrick.  Spongebob still does not have his driver's license, and has attended boating school for many years.  Mrs. Puff, the boating instructor, keeps failing him because he crashes every boat he tries to drive.  Even with the best of instructors, every one has told him that he is "unteachable."
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #FEF454;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="spongebobForm" id="spongebobForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="spongebob" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>


					<a href="#patrick"><div class="arrow"></div></a>

				</section>

				<section id="patrick">

					<img src="assets/img/patrick2.png" alt="Patrick Star" />

					<h1>Patrick Star</h1>

					<blockquote>- "<?php echo $firstPatrick[0]; ?>"</blockquote>

					<p>
						Patrick Star, Spongebob's sidekick, and best friend, is a dimwitted starfish who spends most of his time in his home, under a rock.  Under his rock, you can find a fully furnished home, made entirely of sand.  Patrick does not have a job, and is quite frankly very unmotivated.  A few times Patrick has tried to attend work with Spongebob as a fry-cook, but unfortunately, he hasn't succeeded.  There aren't many things that Patrick succeeds at in his life other than sleeping, eating, and annoying his neighbor, Squidward, with the help of Spongebob.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #FC886F;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="patrickForm" id="patrickForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="patrick" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#squidward"><div class="arrow"></div></a>

				</section>


				<section id="squidward">

					<img src="assets/img/squidward3.png" alt="Squidward Tentacles" />

					<h1>Squidward</h1>

					<blockquote>- "<?php echo $firstSquidward[0]; ?>"</blockquote>

					<p>
					Squidward Tentacles, Spongebob and Patrick's miserable squid neighbor, also works at the Krusty Krab.  He enjoys art, playing the clarinet, and being alone.  In his house, you can find self-portraits of Squidward, clarinet music sheets scattered, and usually Squidward sitting in his couch, sulking about his life.  Any time Squidward has a moment of time to himself; Spongebob and Patrick always find a way to annoy him.  Whether it is obnoxiously laughing outside of his house, or trying to pry him from his couch, Squidward always screams at them and demands them to stop.  However, this usually does not stop the two from their obnoxious antics until he starts playing his clarinet (terribly, that is).
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #ACD2C5;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="squidwardForm" id="squidwardForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="squidward" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#sandy"><div class="arrow"></div></a>

				</section>

				<section id="sandy">

					<img src="assets/img/sandy1.png" alt="Sandy Cheeks" />

					<h1>Sandy Cheeks</h1>

					<blockquote>- "<?php echo $firstSandy[0]; ?>"</blockquote>

					<p>
						Sandy Cheeks, another one of Spongebob and Patrick's friends, is a squirrel from Texas, who wears an underwater suit and an air tank on her head.  She lives in a Treedome, which is filled with air so she can take her underwater suit off when she gets home.  Inside, her tree house is held up by an acorn tree.  Like any squirrel, Sandy loves eating acorns.  Some of her other hobbies include playing karate with Spongebob, and making new scientific inventions.  Unfortunately, her inventions don't always pan out the way that she plans them to.  Sandy is also very passionate about Texas, and often gets homesick.  Luckily for her, Spongebob and Patrick are there to cheer her up with their silly games.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);" style="background: #ACAEAF;"><span><i class="fa fa-angle-double-left" style="color: #fff;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="sandyForm" id="sandyForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." style="border: 1px solid #ACAEAF;" />
								<input type="hidden" value="sandy" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#mrkrabs"><div class="arrow"></div></a>

				</section>

				<section id="mrkrabs">

					<img src="assets/img/mrkrabs.png" alt="Mr. Krabs" />

					<h1>Mr. Krabs</h1>

					<blockquote>- "<?php echo $firstMrKrabs[0]; ?>"</blockquote>

					<p>
						Mr. Krabs, a crab, is the owner of the Krusty Krab, and lives in an anchor in Bikini Bottom.  There is nothing more in the sea that Mr. Krabs loves more than money.  Not even his daughter, Pearl, compares to his love for money.  In his house, he has the first dollar he ever received framed and hanging up on his wall.  As the owner of the Krusty Krab, it is his job to manage Spongebob, Squidward, and the prices of the Krabby Patties.  Of course, the food here is outrageously priced, because he loves money so much.  He is so cheap, he would rather serve a customer a rotten Krabby Patty instead of throwing it out and having Spongebob make a new one.  If you were to walk into his office during the day, you could find him counting coins or smelling the income of the day.  Another one of his jobs at the Krusty Krab is to make sure that the secret formula for the famous Krabby Patties is protected from his arch nemesis, Plankton.  For years, Plankton has tried to steal this formula, and has been unsuccessful each time.  Somehow, Mr. Krabs is always one step ahead of Plankton.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #EE4C37;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="mrkrabsForm" id="mrkrabsForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="mrkrabs" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#pearl"><div class="arrow"></div></a>

				</section>

				<section id="pearl">

					<img src="assets/img/pearl1.png" alt="Pearl" />

					<h1>Pearl</h1>

					<blockquote>- "<?php echo $firstPearl[0]; ?>"</blockquote>

					<p>
						Pearl, Mr. Krabs' daughter, is a whale that enjoys shopping, gossiping, and hanging out with her friends.  She is the typical teenage girl; she hangs out with the popular girls at school, is extremely bossy, and cares too much about her appearance.  Her dad is very protective of her, though, and gets angry with her when she spends all of his money shopping.  Pearl often gets annoyed with her dad when he is too cheap, especially when it comes to be her birthday.  He never throws her a birthday party, except for her 16th birthday.  Her family situation is a little different, as her dad is a crab, and she has never met her mother.  When she works for her dad at the Krusty Krab once, she tried to get fired because she hates it and has no interest in continuing the family business.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #C7D1B4;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="pearlForm" id="pearlForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="pearl" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#plankton"><div class="arrow"></div></a>

				</section>

				<section id="plankton">

					<img src="assets/img/plankton.png" alt="Plankton" />

					<h1>Plankton</h1>

					<blockquote>- "<?php echo $firstPlankton[0]; ?>"</blockquote>

					<p>
						Plankton, the main villain in Bikini Bottom, owns a restaurant across the street from the Krusty Krab called the Chum Bucket.  At his restaurant, chum is primarily served, and is not particularly the favorite food of the critters of Bikini Bottom. He is married to his computer wife, Karen, who is constantly coming up with evil plots to help Plankton steal the Krabby Patty secret formula to put the Krusty Krab out of business.  There have been uncountable times that Plankton has tried to steal the secret formula, but he has failed every time.  The reason that Plankton is determined to use chum in his recipe is because when Mr. Krabs and Plankton were kids, they tried to sell hamburger patties.  When they decided to expand on the recipe separately, Mr. Krabs left only a paper that said "a pinch of chum" for Plankton to use.  Therefore, Mr. Krabs made the Krusty Krab and became successful while Plankton is left trying to steal his recipe.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #6FA396;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="planktonForm" id="planktonForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="plankton" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>


					<a href="#gary"><div class="arrow"></div></a>

				</section>

				<section id="gary">

					<img src="assets/img/gary1.png" alt="Gary" />

					<h1>Gary the Snail</h1>

					<blockquote>- "<?php echo $firstGary[0]; ?>"</blockquote>

					<p>
						Gary the snail, Spongebob's pet, enjoys staying home in his pineapple watching television, reading in his library, or sleeping.  The only phrase that Gary can say is, "meow."  In Bikini Bottom, some of the citizens have either sea worms, who bark, or sea snails, which meow.  Because Gary has such an unlimited vocabulary, it is hard for him to tell Spongebob how he is feeling.  Most of the time, Gary gets annoyed with Spongebob and wants to be left alone.  A couple times, Gary tries to escape from Spongebob, but he always comes back.  For the most part, Gary comes back for Spongebob because he feeds him SnailPo.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #FAC9C4;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="pearlForm" id="garyForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="gary" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#mrspuff"><div class="arrow"></div></a>

				</section>

				<section id="mrspuff">

					<img src="assets/img/mrspuff.png" alt="Mrs. Puff" />

					<h1>Mrs. Puff</h1>

					<blockquote>- "<?php echo $firstMrsPuff[0]; ?>"</blockquote>

					<p>
						Mrs. Puff, a blowfish, is the boating instructor for Mrs. Puff's Boating School.  Spongebob has been a recurring student in her class because she won't pass him.  He has been her worst student by far, and is the worst driver in the sea.  Mrs. Puff has been to jail because of Spongebob, but she enjoyed it because she didn't have to deal with him in her class.  Spongebob tried to help her escape from jail, but she was content with staying far from him and in jail.  Patrick has attended her class a few times, but he has received his boating license from her.  Mrs. Puff and Mr. Krabs have a romantic past, but unfortunately, it didn't work out because of how cheap Mr. Krabs was.  Her husband was captured in an unlucky fishing accident, and is now a lamp.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #4D627D;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="mrspuffForm" id="mrspuffForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="mrspuff" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>


					<a href="#mermbarn"><div class="arrow"></div></a>

				</section>

				<section id="mermbarn">

					<img src="assets/img/mermbarn.png" alt="Mermaid Man and Barnacle Boy" />

					<h1>Mermaid Man &amp; Barnacle Boy</h1>

					<blockquote>- "<?php echo $firstMermBarn[0]; ?>"</blockquote>

					<p>
						Mermaid Man and Barnacle Boy, the ancient super heroes of Bikini Bottom, fight crime at any given time.  Because of their old age, they have lost many of their abilities to overcome evil, leaving them as slow-moving, grouchy old men living in Shady Shoals, an underwater retirement home.  Spongebob and Patrick are regular visitors, and are frankly their biggest fans; however, Barnacle Boy does not enjoy them at all.  Mermaid Man is a bit delusional in his old age, and gets confused very easily.  When they were in their prime, they had a television program about fighting evil in Bikini Bottom, making them very famous.
					</p>

					<div class="showQuoteFormRight" onclick="toggleQuoteRight(this);"><span><i class="fa fa-angle-double-left" style="color: #FFB423;"></i> Add a Quote</span>

						<div class="hiddenForm">

							<form method="post" action="final.php" name="mermbarnForm" id="mermbarnForm">

								<input class="quoteField" type="text" name="characterQuote" placeholder=" Type here..." />
								<input type="hidden" value="mermbarn" name="character" />

								<span class="pullBackQuote" onclick="return validate(this);">
								<i class="fa fa-angle-double-right"></i></span>

							</form>

						</div>

					</div>

					<a href="#about"><div class="arrow"></div></a>

				</section>

				<section id="about">

					<img src="assets/img/spongebob3.png" alt="About" style="opacity: .9; width: 18%;" />

					<h1>About</h1>

					<p>
						To structure this site, I picked 10 of the most notable characters from Bikini Bottom, from the Spongebob Squarepants tv show, and separated each "page" via this character method.  I used a web convetion that is becoming quite popular in which a single html page is used and the user simply needs to scroll down to see all of the content of the page.  This convention worked quite well for my design/content scheme given that each "section tag" represents a single "page" for my site.  This seemed to be a great way to modularize the data and proved to make the design much more minimalistic, which is what I really like to mimic in all of my design schemes on the web.  All of the information compiled for each character comes from my mind, and what I remember from the show, which I loved as a child.  I really enjoyed making this site, and I think it shows through the design!
					</p>

					<h1 class="aboutHeader">Midterm Release Changes</h1>
					<ul class="aboutChanges">
						<li>Pull Out Navigation Added: Upon click of "eye" icon.</li>
						<li>All Images Preloaded: Using a homemade js script.</li>
						<li>Navigation Images Resized:  Reduced size of images to prevent pixelation.</li>
						<li>HTML5 and CSS3 Validation Complete: See link at bottom of page.</li>
					</ul>

					<h1 class="aboutHeader">Final Release Additions</h1>
					<ul class="aboutChanges">
						<li>CSS Media Queries:  Small, Normal, and Large stylesheets created which adjust the site layout.</li>
						<li>Pull Out Add Quote Div: Each character has a slide out div using a CSS3 transition which adjusts the margin.</li>
						<li>Quote Div Extension: Upon the user clicking the div, the div extends across the screen.</li>
						<li>Reveal Quote Form: Afer clicking the div, the a form with a single field replaces the div's content in addition to a submit button.</li>
						<li>JS/PHP Validation: JS changes input field to tell user the quote they entered isn't a valid quote.  PHP shoots an alert to the top of the
						window upon form submission letting them know if the form was successfully submitted, or if the submission failed due to user input error.</li>
						<li>PHP Sanitization: Prevents the use of special characers, quotes, html entities and trims trailing spaces.</li>
						<li>Most Recent Quote: Under each characters image, the most recently entered quote in the database is returned.</li>
						<li>Use of PHP's include and require methods:  Bring in source from external scripts.</li>
						<li>Added Favicon:  Can be found on the tab of the website!</li>
						<li>HTML5 and CSS3 Structure: Page has been converted to pure HTML5 and CSS3.</li>
					</ul>

					<h1 class="aboutHeader">Image Resources</h1>
					<ul class="aboutLinks">
						<li><a href="http://wallpress.wallwp.com/wp-content/uploads/sites/2/2013/07/Spongebob-Squarepants-Friends.jpg" target="_blank">
						Bikini Bottom</a></li>
						<li><a href="http://images6.fanpop.com/image/photos/33200000/Spongebob-spongebob-squarepants-33210743-1843-2033.jpg" target="_blank">
						Spongebob</a></li>
						<li><a href="http://images.wikia.com/spongebob/images/b/b1/SpongeBob_and_Patrick.jpg" target="_blank">
						Patrick</a></li>
						<li><a href="http://static.tvguide.com/MediaBin/Galleries/Shows/S_Z/Si_Sp/Spongebob_Squarepants/season1/sponge-bob-square-pants13.jpg" target="_blank">Squidward</a></li>
						<li><a href="http://images3.wikia.nocookie.net/__cb20130623062831/spongebob/images/9/92/SANDYHIYAH!.gif" target="_blank">
						Sandy</a></li>
						<li><a href="http://static.tvtropes.org/pmwiki/pub/images/krabby_road_4342.png" target="_blank">
						Mr. Krabs</a></li>
						<li><a href="http://images1.wikia.nocookie.net/__cb20121103020248/spongefan/images/0/0d/25402.gif" target="_blank">
						Pearl</a></li>
						<li><a href="https://lh4.googleusercontent.com/-Belzs2Qlmlg/TWklVV6lJlI/AAAAAAAABCM/7kAgA9Cg4cE/s1600/3.jpg" target="_blank">
						Plankton</a></li>
						<li><a href="http://e08595.medialib.glogster.com/media/40/40bbc7e567d1325bdab40d376e090d7ecd4de952aa7bd31b5feef27c3846364d/spongebob-squarepants-p75.jpg" target="_blank">
						Gary</a></li>
						<li><a href="http://imgs.tuts.dragoart.com/how-to-draw-mrs-puff-from-spongebob-squarepants_1_000000001292_3.jpg" target="_blank">
						Mrs. Puff</a></li>
						<li><a href="http://fc00.deviantart.net/fs9/i/2006/071/e/2/Mermaid_Man_and_Barnacle_Boy_by_EnterPraiz.jpg" target="_blank">
						Mermaid Man &amp; Barnacle Boy</a></li>
					</ul>

					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fnova.it.rit.edu%2F~rch4495%2F240%2Ffinal%2Ffinal.php" target="_blank"><img src="http://www.w3.org/html/logo/downloads/HTML5_1Color_White.svg" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered and Validated"></a>

				</section>

				<img id="upArrow" src="assets/img/upArrow.png" alt="Scroll Up" onclick="scrollToTop();" />

			</div>

		</div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

		<script>
			
			// if( $(window).width() < 1065 ) {

			// 	//alert('hello');

			// 	$( ".showQuoteFormRight" ).css( "font-size", "1.5em" );

			// }


			// $( window ).resize(function() {

			// 	if( $(window).width() < 1065 ) {

			// 		alert('hello');

			// 		$( "#showQuoteFormRight span" ).css( "font-size", "2em" );

			// 	}

			// });

			

			//ADD SMOOTH SCROLLING FROM DIV TO DIV IN THE FINAL

			var timeOut;  //declar a global timeout var

			function scrollToTop() { // onclick of arrow, the window will scroll up 90 pixels every 10 ms as long as the top has not been reached

				if (document.body.scrollTop != 0) {

					window.scrollBy(0, -90);
					timeOut = setTimeout('scrollToTop()', 10);

				}
				else {
					clearTimeout(timeOut); //clears the timeout if the top has been reached to prevent a loop
				}

			}

			function scrollDown() {

				setTimeout(10);

			}

			function showNav() {

				var nav = document.getElementById('hiddenNav');

				if(window.getComputedStyle(nav, null).getPropertyValue('opacity') == 0) {

					if($(window).width() < 913) {

						$("#hiddenNav").animate({'opacity': 1}, 500);
						$("#hiddenNav").animate({'left': '.3%'}, 200, 'linear');

					}

					else {
						$("#hiddenNav").animate({'opacity': 1}, 500);
						$("#hiddenNav").animate({'left': '1.5%'}, 200, 'linear');

					}

				}

				else {

					$("#hiddenNav").animate({'left': '-7%'}, 200);
					$("#hiddenNav").animate({'opacity': 0}, 500);

				}

			}

			function toggleQuoteRight(ele) {

				if ($(ele).children('.hiddenForm').is(':hidden')) {

					$(ele).children('span').hide();
					$(ele).children('.hiddenForm').show();

					$(ele).css('margin-left', '5%');
					$(ele).css('padding', '0%');
					$(ele).css('background', '#00B2B9');

				}

				// else {

				// 	$(ele).children('span').show();
				// 	$(ele).children('.hiddenForm').hide();

				// 	$(ele).css('margin-left', '');
				// 	$(ele).css('padding', '');

				// }

			}

			function toggleQuoteLeft(ele) {

				if ($(ele).children('.hiddenForm').is(':hidden')) {

					$(ele).children('span').hide();
					$(ele).children('.hiddenForm').show();

					$(ele).css('padding-left', '60%');


				}

				else {

					$(ele).children('span').show();
					$(ele).children('.hiddenForm').hide();

					$(ele).css('padding-left', '');

				}

			}



		</script>

	</body>

</html>