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



     <!-- Page Header -->
     <div class="col-md-12">
     <div class="pagetitle" id="pgtitle">MediaRipple</div>
     <di id="test"></div>
     <div class="col-md-12 sidebartext" id="latest">
        <h2>Latest</h2>
        <div class="col-md-3 col-sm-6 col-xs-12" id="latestTV">
          <h3>TV</h3>
          <div id="tvLatest">
        </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" id="latestMov">
          <h3>Movies</h3>
          <div id="movLatest">
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" id="latestGame">
          <h3>Games</h3>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" id="latestBook">
          <h3>Books</h3>
        </div>
     </div>

<script>
  $(document).ready(function(){

var epList = new Array();
var movList = new Array();
var showsList = new Array();

// Get TV Shows
$.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&user_id=4821142&length=50&media_type=episode', function (data){
  for (let x=0; x<=50; x++){
    let showTitle = data.response.data.data[x].grandparent_title;
    let epTitle = data.response.data.data[x].title;
    let gpRatingKey = data.response.data.data[x].grandparent_rating_key;
    var showThumb = data.response.data.data[x].thumb;
    var ratingKey = data.response.data.data[x].rating_key;
    //epList.push('<li>' + epTitle + '</li>');
  if (!showsList.includes(showTitle)){
    showsList.push(showTitle);
    $('#tvLatest').append('<div class="col-xs-12" id="' + gpRatingKey + '"><h3>' + showTitle + '</h3><img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + showThumb + '" width="100px" /><div id="' + gpRatingKey + '_list"></div></div>');
  }
    let showListDiv = '#' + gpRatingKey + '_list';
    let showListLength = document.getElementById(gpRatingKey+'_list').getElementsByTagName("span").length;

    if (showListLength <= 4){    
        $(showListDiv).append('<span><div id="' + ratingKey + 'thumb" style="display:inline-block;"></div>' + epTitle + '</span><br>');
        getThumb(ratingKey);
      }
    }
  });


  $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&user_id=4821142&length=5&media_type=movie', function (data){
  for (let x=0; x<=4; x++){
    let movTitle = data.response.data.data[x].full_title;
  movList.push(movTitle);  
        $('#movLatest').append('<p>' + movTitle + '</p>');
      }
  });

});

function getThumb(ratingKey){
    // Episode Thumbs
    $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_metadata&rating_key=' + ratingKey, function (data){
    var epThumb = data.response.data.thumb; 
    var thumbID = '#' + ratingKey + 'thumb';
    $(thumbID).html('<img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + epThumb + '" width="80px" />');
    });
  };
  </script>

   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
