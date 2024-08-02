<?php
  //SQL Connect
   $sqlpath = $_SERVER['DOCUMENT_ROOT'];
   $sqlpath .= "/sql-connect.php";
   include_once($sqlpath);

   //Header
   $pgtitle = '';
   $headpath = $_SERVER['DOCUMENT_ROOT'];
   $headpath .= "/header.php";
   include_once($headpath);
   /*if ($loguser !== 'tarfuin') {
   echo ('<script>window.location.replace("/oops.php"); </script>');
 }*/
   ?>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
   <div class="mainbox col-lg-10 col-xs-12 col-lg-offset-1">

   <div id="sentimentSuccess" class="alert alert-success nonav" style="width:20%; position:fixed; top:5px; right:5px; z-index:999;" role="alert">
    Sentiment Saved!
  </div>

     <!-- Page Header -->
     <div class="col-md-12">
     <div class="pagetitle" id="pgtitle">MediaRipple</div>
     <div class="sidebartext" id="test"></div>
   </div>
     <div class="body sidebartext col-xs-12" id="body">

     <div class="col-xs-12 highlight-box">
    Latest Media<p>
      <div class="col-md-3 col-sm-6 col-xs-12 latestbox" id="latestGames">
        Games
        <div class="grid" id="gameLatest"></div>
        <span>more...</span>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 latestbox" id="latestShows">
        TV
        <div class="grid" id="tvLatest"></div>
        <span>more...</span>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 latestbox" id="latestMovies">
        Movies
        <div class="grid" id="movLatest"></div>
        <span>more...</span>
      </div>
      <div class="col-md-3 col-sm-5 col-xs-12 latestbox" id="latestBooks">
        Book
        <div id="bookLatest"></div>
        <span>more...</span>
      </div>
</div>

<div class="col-xs-12">
<h3>Activity Feed</h3>
<div id="activityFeed"></div>

    <script>
    var showCount = {};
    var allLatest = new Array();
    var epList = new Array();
    var movList = new Array();
    var doneArray = new Array();
    var thumbCount = 0;
    var doneCount = 0;

    function allDone(value) {
      doneCount = doneCount + 1;
      doneArray.push(value);
      if (doneArray.includes('g') && doneArray.includes('t') && doneArray.includes('m') && doneArray.includes('b') && doneCount == allLatest.length - 1){
        getLatest(allLatest);
        //console.log('doneCount = ' + doneCount + '. allLatest = ' + (allLatest.length - 1));
      }
      //console.log('allDone has been called ' + doneCount + ' times');
    }

        // Latest Games
  function getGames(){
    $.ajax({
      url : 'getgames.php',
      type: 'GET',
      success: function(data)
      {
        var gameList = JSON.parse(data);
        for (x=0; x < 3;x++){
          allLatest.push(gameList[x][3] + 'g');
          allLatest.sort();
          allLatest.reverse();
          $('#gameLatest').append('<a class="grid-row" href="game.php?id=' + gameList[x][1] + '"><div><img class="thumbimg" src="' + gameList[x][2] + '" height="70px" /></div><div>' + gameList[x][0] + '</div></a>');
          //var gameTimestamp = gameList[x][3];
        }
        //getTV();
        allDone('g');
      },
      error: function(xhr, status, error) {
        var err = eval("(" + xhr.responseText + ")");
        alert(err.Message);
      }
    });
  }

  // Latest TV Shows
    function getTV(){
      var showsList = new Array();
      var showUid = '';

      $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&user_id=4821142&length=50&media_type=episode', function (data){
        for (let x=0; x < 50; x++){
          let showTitle = data.response.data.data[x].grandparent_title;
          let epTitle = data.response.data.data[x].title;
          let gpRatingKey = data.response.data.data[x].grandparent_rating_key;
          var showThumb = data.response.data.data[x].thumb;
          var ratingKey = data.response.data.data[x].rating_key;
          var showDate = data.response.data.data[x].date;
          var seasonNumber = data.response.data.data[x].parent_media_index;
          var epNumber = data.response.data.data[x].media_index;
          var epDetails = new Array(showDate,showTitle,epTitle,ratingKey,showThumb,gpRatingKey,seasonNumber,epNumber);
          epList[x] = epDetails;
        if (!showsList.includes(showTitle)){
          //showCount[showTitle] = 0;
          showsList.push(showTitle);
          allLatest.push(showDate + 't');
          allLatest.sort();
          allLatest.reverse();
          if (showsList.length < 4) {

            $('#tvLatest').append('<a id="' + gpRatingKey + '_href" href="tv.php" class="grid-row"><div id="' + gpRatingKey + 'thumb"><img class="thumbimg" src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + showThumb + '" /></div><div>' + showTitle + '</div></a>');
          }
          else {
            $('#tvLatest').append('<a class="nonav" id="' + gpRatingKey + '_href"></a>');
          }
          $.ajax({
            url: 'https://api.themoviedb.org/3/search/tv?query=' + showTitle + '&api_key=1a4c153e771e6a97876ae286242ccb40',
            type: 'GET',
            dataType: 'json',
			      error: function() {
                alert('error');
            },
            success: function(res) {
                let showUid = res.results[0].id;
                let hrefId = '#' + gpRatingKey + '_href';
                let newUrl = 'tv.php?id=' + showUid;
                $(hrefId).attr('href',newUrl);
                allDone('t');
            }
          });
          }
          /*else {
            showCount[showTitle] = showCount[showTitle] + 1;
          }*/
        }
      
      //getMovies();
      });
    }

    function getMovies(){
    //Latest Movies
    $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&user_id=4821142&length=5&media_type=movie', function (data){
      for (let i = 0; i < 5; i++){ 
        let movDate = data.response.data.data[i].date;
        let movTitle = data.response.data.data[i].full_title;
        let ratingKey = data.response.data.data[i].rating_key;
        let movThumb = data.response.data.data[i].thumb;
        allLatest.push(movDate + 'm');
        allLatest.sort();
        allLatest.reverse();

        var getMoviesDetails = new Array(movDate,movTitle,ratingKey,movThumb);
        movList[i] = getMoviesDetails;
      
      if (i < 3){
        $('#movLatest').append('<a id="' + ratingKey + '_href" class="grid-row" href="movie.php"><div><div id="' + ratingKey + 'thumb" class="showthumb"></div></div><div>' + movTitle + '</div></tr>');
      }
    
      $.ajax({
            url: 'https://api.themoviedb.org/3/search/movie?query=' + movTitle + '&api_key=1a4c153e771e6a97876ae286242ccb40',
            type: 'GET',
            dataType: 'json',
			      error: function() {
                alert('error');
            },
            success: function(res) {
                let movUid = res.results[0].id;
                let hrefId = '#' + ratingKey + '_href';
                let newUrl = 'movie.php?id=' + movUid;
                //let movOverview = res.results[0].overview;
                let movBackdrop = res.results[0].backdrop_path;
                $(hrefId).attr('href',newUrl);
                getThumb(ratingKey,movBackdrop,'movie');
                allDone('m');
            }
          });
        }
    //getBooks();
  });
}


function getBooks(){
  // Latest Book
    $.ajax({
      url : 'getBook.php',
      type: 'GET',
      success: function(data)
      {
        var newData = JSON.parse(data);
        var bookTitle = newData.bookTitle;
        var bookUid = newData.bookUid;
        var bookImg = newData.bookImg;
      $('#bookLatest').html('<a href="book.php?id=' + bookUid + '"><img src="' + bookImg + '" style=height:210px;" /><br>' + bookTitle);
      allDone('b');
      //getLatest(allLatest);
      },
      error: function(xhr, status, error) {
        var err = eval("(" + xhr.responseText + ")");
        alert(err.Message);
      }
    });
    //getLatest(allLatest);
  }

  //Get Thumbnail
  function getThumb(ratingKey,backdrop,type){
    let imgpath = 'assets/images/' + ratingKey + '.png';
    var thumbID = '#' + ratingKey + 'thumb';
/*
    $.ajax({
    url:imgpath,
    type:'HEAD',
    error: function()
    {*/
           // Episode Thumbs
      $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_metadata&rating_key=' + ratingKey, function (data){
      var epThumb = data.response.data.thumb; 
      //var overview = data.response.data.summary;
      //var overviewID = '#' + ratingKey + 'overview';
      //var backdropID = '#' + ratingKey + 'backdrop';
      $(thumbID).html('<img class="thumbimg" src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + epThumb + '" />');
      //$('#feed' + x).append('<div id="' + '' + 'box" class="col-md-10 col-sm-8 col-xs-12"><div class="col-md-7 movoverview" id="' + movKey + 'overview"></div><div class="col-md-5 movbackdrop" id="' + movKey + 'backdrop"></div></div>');
      //$(overviewID).html('<blockquote>' + overview + '</blockquote>');
      //$(backdropID).html('<img class="thumbimg" src="https://image.tmdb.org/t/p/original' + backdrop + '" />');
      thumbCount = thumbCount + 1;
    });
  /* },
    success: function()
    {
      $(thumbID).html('<img class="thumbimg" src="' + imgpath + '" />');
      //$(overviewID).html('<blockquote>' + overview + '</blockquote>');
      //$(backdropID).html('<img class="thumbimg" src="https://image.tmdb.org/t/p/original' + backdrop + '" />');
      thumbCount = thumbCount + 1;
      console.log('getThumb called ' + thumbCount + ' times. This time for ' + ratingKey + ', a ' + type);
    }
});*/

  }

  function getLatest(value){
    var feedTimes = value;
    var currentShows = new Array();
    //var currentShows = new array();
    for (let x = 0; x < feedTimes.length; x++){
      
        $('#activityFeed').append('<div id="feed' + x + '" class="col-xs-12 nonav" style="padding-bottom: 25px;"></div>');
      
      let currentFeed = feedTimes[x];
      var currentTimestamp = currentFeed.substring(0, currentFeed.length - 1);
      let currentType = currentFeed.substring(currentFeed.length - 1, currentFeed.length);
      if (currentType == 'g'){
        $.ajax({
          url : 'latestGame.php',
          type: 'GET',
          data: { "timestamp" : currentTimestamp, "feedcount" : x },
          success: function(data)
          {
            let checkFeed = $('#feed' + x).html();
            if (checkFeed == ''){
              $('#feed' + x).append(data);
              $('#feed' + x).removeClass('nonav');
            }

          }
        });
      }

      else if (currentType == 't'){
        var epCount = 0;
        for (let i = 0; i < epList.length; i++){
          let checkDate = epList[i][0];
          if (checkDate == currentTimestamp){
            var currentShow = epList[i][1];
          }
        }
        for (let i = 0; i < epList.length; i++){
          if (epList[i][1] == currentShow && epCount < 6){
            let currentDate = epList[i][0];
            let currentEp = epList[i][2];
            let currentKey = epList[i][3];
            let currentThumb = epList[i][4];
            let currentShowKey = epList[i][5];
            let currentSeason = epList[i][6];
            let currentEpNumber = epList[i][7];

            if (currentDate == currentTimestamp && !currentShows.includes(currentShow)){
            let currentHREF = $('#' + currentShowKey + '_href').attr("href");
            $('#feed' + x).html('<hr class="horule"></hr><div class="col-md-2 col-sm-4 col-xs-12"><p><a id="' + currentShowKey + 'href" href="' + currentHREF + '"><strong>' + currentShow + '</stong><p><img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + currentThumb + '" style="max-width:100%; max-height:200px;" /></a></div>');
            $('#feed' + x).append('<div id="' + currentShowKey + 'box" class="col-md-10 col-sm-8 col-xs-12"></div>');
            $('#feed' + x).removeClass('nonav');
            currentShows.push(currentShow);
          }

          if ($('#' + currentShowKey + 'ep' + currentKey).length == 0){
            $('#' + currentShowKey + 'box').append('<div class="col-md-4 col-sm-6 col-xs-6" id="' + currentShowKey + 'ep' + currentKey + '">S' + currentSeason + ':E' + currentEpNumber + ': ' + currentEp + '<div id="' + currentKey + 'thumb" class="epthumb"></div></div>');
              getThumb(currentKey,'','',currentShowKey + 'ep' + currentEp);
              showCount[currentShow] = showCount[currentShow] + 1;
              $('#test').html(showCount['Brooklyn Nine-Nine']);
              epCount = epCount + 1;
          }


          }
          else {

          }
        }

      }

      else if (currentType == 'm'){
        for (let z = 0; z < movList.length; z++){
          let movDate = movList[z][0];
          let movTitle = movList[z][1];
          let movKey = movList[z][2];
          let movThumb = movList[z][3];
        
        if (movDate == currentTimestamp){
          $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_metadata&rating_key=' + movKey, function (data){
            var epThumb = data.response.data.thumb; 
            var overview = data.response.data.summary;
            var backdrop = data.response.data.art;
            var overviewID = '#' + movKey + 'overview';
            var backdropID = '#' + movKey + 'backdrop';
            //$(thumbID).html('<img class="thumbimg" src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + epThumb + '" />');
            //$('#feed' + x).append('<div id="' + '' + 'box" class="col-md-10 col-sm-8 col-xs-12"><div class="col-md-7 movoverview" id="' + movKey + 'overview"></div><div class="col-md-5 movbackdrop" id="' + movKey + 'backdrop"></div></div>');
            $(overviewID).html('<blockquote>' + overview + '</blockquote>');
            $(backdropID).html('<img class="thumbimg" src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + backdrop + '" />');
            thumbCount = thumbCount + 1;
          });
          let currentHREF = $('#' + movKey + '_href').attr("href");
          if (!$('#' + movKey + 'href').length){
            $('#feed' + x).html('<hr class="horule"></hr><div class="col-md-2 col-sm-4 col-xs-12"><p><a id="' + movKey + 'href" href="' + currentHREF + '"><strong>' + movTitle + '</stong><p><img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + movThumb + '" style="max-width:100%; max-height:200px;" /></a></div>');
            $('#feed' + x).append('<div id="' + '' + 'box" class="col-md-10 col-sm-8 col-xs-12"><div class="col-md-7 movoverview" id="' + movKey + 'overview"></div><div class="col-md-5 movbackdrop" id="' + movKey + 'backdrop"></div></div>');
            $('#feed' + x).removeClass('nonav');
          }

        }
      }
    }
    }
  }

  getGames();
  getTV();
  getMovies();
  getBooks();

</script>

</div>
</div>
</div>
</div>

<style>
.showthumb .thumbimg {
	height: 70px;
	margin-bottom: 7px;
}

.epthumb .thumbimg {
  width:100%;
  height: auto;
}

.movbackdrop .thumbimg {
  width:100%;
  height: auto;
}

.movoverview {
  margin: auto;
  padding: 10px;
}


.latestbox {
  margin: 0px 0px 10px 0px;
  border-radius: 20px;
  border: 4px solid #101213;
  background-color: #181b1c;
}

div.body {
  padding-right: 0px;
  padding-left: 0px;
}

.grid {
  display: grid;
  grid-template-columns: max-content auto; /* Auto sizing columns */
  grid-gap: 10px;
  text-align: left;
}
.grid-row {
  display: grid;
  grid-template-columns: subgrid; /* New feature, makes row inherit parents grid */
  grid-column: 1 / -1; /* make row span full grid */
}
</style>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
