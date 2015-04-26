<?php include_once('header.php');

	//IF WE'VE GONE TO A SPECIFIC PAGE, ECHO IT
	if(isset($_GET['section'])) {
		$response=file_get_contents('tutorial/'.$_GET['section'].'.html');
		echo $response;

		// BEGIN DISQUS COMMENTS
		?>
		<div class="page-container">
			<div id="disqus_thread"></div>
		    <script type="text/javascript">
		        
		        //DISQUS CONFIGURATION //
		    	var section = '<?php echo $_GET["section"]; ?>';
		        var disqus_shortname = 'rit-weiseie-final'; 
		        var disqus_identifier = section;
		        var disqus_title = "<?php echo $titles[$_GET['section']]; ?>";
		        var disqus_url = "http://nova.it.rit.edu/~WeUseIE/240/final/?section="+section;

		        // DO NOT EDIT THIS FUNCTION //
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</div>
	<?php }

	//OTHERWISE, LOAD A DEFAULT
	else { ?>
		<div class="page-container">

			<article class="tutorial">

				<section class="section-highlight">

					<h2><i class="fa fa-heart"></i> What we did, for you</h2>

					<p>
						Hosting with Linux is a service provided to users which allows both experienced and inexperienced
						users to obtain, install, configure, utilize, and publish a website running on a Linux based server.  
						We have provided you with a wealth of information from a variety of different well respected 
						sources from many well respected hosting services, such that all of our data is without a doubt correct.  
						Our site is structured in such a way that you can follow each section after the other and by the end, 
						you should have a functioning website running on your own web server!
					</p>

				</section>

				<section class="section-highlight">

					<a href="?section=1-1"><h2><i class="fa fa-desktop"></i> Obtaining Your Server <i class="fa fa-long-arrow-right"></i></h2></a>

					<p>
						Our first section describes the different options you have to host your website.  More specifically,
						types of servers (physical and virtual) are discussed and the reasons we prescribe you to use each of
						them.  Next we go over the use of the terminal, or for those Windows users out their, cmd.  Basic commands
						that are most common in the unix command line are touched on as well as information regarding user access
						levels in addition to information on the sudo user and its benefits.
					</p>

				</section>

				<section class="section-highlight">

					<a href="?section=2-1"><h2><i class="fa fa-upload"></i> Accessing Your Server <i class="fa fa-long-arrow-right"></i></h2></a>

					<p>
						Next we discuss the basics of accessing your server and configuring access.  This section goes into depth
						on SSH, the secure shell for data communication.  It explains how SSH is useful as well as when you would
						actually use it.  In addition, file transfer protocols are discussed, which brings light to both FTP and SFTP,
						which are the most common.  The risks and benefits of each are assessed and finally you are given instructions
						regarding installation.
					</p>

				</section>

				<section class="section-highlight">

					<a href="?section=3-1"><h2><i class="fa fa-magic"></i> Utilizing Your Server <i class="fa fa-long-arrow-right"></i></h2></a>

					<p>
						In this section we discuss actually configuring your server to host a website that could potentially
						utilize database connection and interactivity.  Each type of "stack" (LAMP, WAMP, MAMP) is discussed
						as well as detailed installation instructions for each.  Next, this section tackles database basics
						beginning with an introduction to database modeling, and then goes into the actual installation of the
						most common database management systems (MySQL and SQLite).  Finally server side scripting languages are
						discussed, in which we look at languages such as PHP (installation instructions provided), as well as
						frameworks that utilize these languages such as CakePHP and Django. 
					</p>

				</section>

				<section class="section-highlight">

					<a href="?section=4-1"><h2><i class="fa fa-pencil"></i> Publishing Your Site <i class="fa fa-long-arrow-right"></i></h2></a>

					<p>
						Here we discuss the different options you have for web server platforms.  More explicitly, this describes
						services such as Apache, Lighttpd and Nginx.  A very detailed breakdown for each is supplied such that
						you as the user are able to choose which best fits your needs, as that is the true goal of this entire site!
						Next we give you a step by step tutorial in configuring DNS, or Domain Name Service.  Once this is complete
						we offer links to domain registration, which results in visitors who navigate to that domain name seeing
						your site hosted on your own server!
					</p>

				</section>

				<section class="section-highlight">

					<a href="?section=5-1"><h2><i class="fa fa-plus"></i> Additional Resources <i class="fa fa-long-arrow-right"></i></h2></a>

					<p>
						In our final section, we go into great depth regarding coding tactics when it comes to both
						HTML and CSS.  We discuss new HTML5 techniques and practices as well as those for CSS3!  Next,
						we look into facebook business advertisement for your new website and also have a look at Google
						Advertising in order to allow you to make a bit of profit on your site.  Finally, we have a detailed
						explanation of the new IPv6 Protocol and how you can make use of it now that you have a fully
						functioning website!
					</p>

				</section>

			</article>
		</div>
	
	<?php }

include_once('footer.php');?>