//************On This Day JS************

//Based on the current date, a historic event is returned
//Uses MediaWiki api -> https://www.mediawiki.org/wiki/API


function onThisDay() {

  var restfulURL = constructURL();

  $.ajax({
      type : "GET",
      dataType : "jsonp",
      url : restfulURL,
      success: function(jsonResponse){

        //traverse response object to get to the large content HTML string
        var pageContent = findContent(jsonResponse);

        //parse the large string of content and return array of all Events
        var events = parseEvents(pageContent);

        //given an array of events, return a random one
        var factoid = randomFactoid(events);

        //find the element with the id 'onThisDay' and add the fact to the elements text
        showFactoid(factoid);

      }
  });

}

//builds a RESTful mediawiki url based on the current date
function constructURL() {

  var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];

  //get current date
  var today = new Date();
  var day = today.getDate();
  var month = today.getMonth(); //month will only be a number Jan=0 and Dec=11
  month = monthNames[month]; //get the name

  //create the date in format for restful url
  var urlDateString = month + "_" + day;

  //concatenate portions of url
  var endPoint = "https://en.wikipedia.org/w/api.php?";
  var options = "format=json&action=query&titles=";
  options += urlDateString + "&prop=extracts";

  var restfulURL = endPoint + options;

  return restfulURL;

}

//traverses the supplied javascript Object to find content
//returns HTML content as string
function findContent(jsObject) {

  var pagesObj = jsObject.query.pages;

  var pageContent;

  for (var property in pagesObj) {
    if (pagesObj.hasOwnProperty(property)) {
        console.log(property);
        pageContent = pagesObj[property].extract
    }
  }

  return pageContent;

}

//return array of Events
function parseEvents(pageContent) {

  //find the first h2 tag and get the next element -> ul of events (every section has this order of elements)
  var eventsList = $(pageContent).closest("h2:contains('Events')").next().children();

  var eventsFacts = [];

  //foreach through the <ul> tag and grab the text from each li
  //push a new index into the eventsFacts array with the li's text
  eventsList.each(function() {

    eventsFacts.push( $(this).text() );

  });

  return eventsFacts;

}

//return a random fact given an array of events
function randomFactoid(eventsArray) {

  //no need to get the array length - 1 in this case bc that + 1 value isn't included
  var maxVal = eventsArray.length;
  var minVal = 0;

  //returns random number between minVal (inclusive) and maxVal (exclusive)
  var randomNum = Math.floor(Math.random() * (maxVal - minVal)) + minVal;

  console.log("Random Fact: " + eventsArray[randomNum]);

  return eventsArray[randomNum];

}

//finds an element defined with the id='onthisday' and sets its text to the factoid
//edit this based on your content structure
function showFactoid(factoid) {

  $("#onthisday").text(factoid);

}
