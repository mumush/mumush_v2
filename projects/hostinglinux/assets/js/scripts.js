function toggleExpand(_ele) {
	var openNavItems = document.getElementsByClassName('expanded');
	console.log(openNavItems);

	for(var i = 0; i < openNavItems.length; i++) {
		// CHECK TO MAKE SURE IT'S NOT THE ELEMENT THAT THE USER CLICKED
		// THIS ALLOWS THE ELEMENT TO STILL BE TOGGLED OPEN / CLOSED
		if(openNavItems[i] != _ele.parentNode) {
			openNavItems[i].className = 'collapsed';
			console.log("closed " + openNavItems[i]);
		}
	}

	if(_ele.parentNode.className == 'collapsed') {
		_ele.parentNode.className = 'expanded';
	}
	else {
		_ele.parentNode.className = 'collapsed';
	}
}

//ADD SMOOTH SCROLLING

var timeOut;  //declare a global timeout var

function scrollToTop() { // onclick of arrow, the window will scroll up 90 pixels every 10 ms as long as the top has not been reached

	if (document.body.scrollTop != 0) {

		window.scrollBy(0, -90);
		timeOut = setTimeout('scrollToTop()', 20);

	}
	else {
		clearTimeout(timeOut); //clears the timeout if the top has been reached to prevent a loop
	}

}

function scrollDown() {

	setTimeout(10);

}

function scrollFunction() {

	if(document.body.scrollTop > 10) { //if the window has been scrolled 

		document.getElementById("scrollUp").style.opacity = "1";

	}

	else { //if the window has not been scrolled

		document.getElementById("scrollUp").style.opacity = "0";

	}

}

//when the window is scrolled this will run the scroll function

window.onscroll = scrollFunction;



//when the hidden navigation button is clicked
//if it's not already out, it will appear and move the content to the right
//if it is, it will display none and move the content back to the left

function pullOutNav() {

	var allContainers = document.getElementsByClassName('page-container');

	for(var i = 0; i < allContainers.length; i++) {

		if( allContainers[i].style.marginLeft == '250px' ) {

			//switches the icon to signify clicking again will pull nav back in
			document.getElementById('pullOut').className = 'fa fa-chevron-right';
			

			allContainers[i].style.marginLeft = '15px';

			document.getElementById('hiddenNav').style.display = 'none';

			document.getElementById('hiddenNav').style.marginLeft = '-30%';

		}

		else {

			//switches the icon to signify clicking again will pull nav out
			document.getElementById('pullOut').className = 'fa fa-chevron-left';


			allContainers[i].style.marginLeft = '250px';

			document.getElementById('hiddenNav').style.display = 'inline';

			document.getElementById('hiddenNav').style.marginLeft = '25px';

			document.getElementById('hiddenNav').style.float = 'left';

		}

	}
}

//handles the case in which the window is resized and the pull out nav
//is still visible.  This function displays it as none and returns it to the invisible
//state if the window is resized to anything greater than 849, thus allowing the media 
//query to size the page-container properly and not have the navigation push the container
//to the right so some of it is not visible.

$( window ).resize(function() {

	if(window.innerWidth > 849) {

		//switches the icon to signify clicking again will pull nav back in
		document.getElementById('pullOut').className = 'fa fa-chevron-right';

		document.getElementById('hiddenNav').style.display = 'none';

		document.getElementById('hiddenNav').style.position = 'static';

		document.getElementById('hiddenNav').style.marginLeft = '-30%';

		var allContainers = document.getElementsByClassName('page-container');

		for(var i = 0; i < allContainers.length; i++) {

			allContainers[i].style.marginLeft = '340px';

		}

	}

	else {

		var allContainers = document.getElementsByClassName('page-container');

		for(var i = 0; i < allContainers.length; i++) {

			allContainers[i].style.marginLeft = '15px';

		}

	}

});

