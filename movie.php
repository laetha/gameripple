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
   /* if ($loguser !== 'tarfuin') {
   echo ('<script>window.location.replace("/oops.php"); </script>');
 }*/
   ?>
   <?php
   $sqlpath = $_SERVER['DOCUMENT_ROOT'];
   $sqlpath .= "/plugins/Parsedown.php";
   include_once($sqlpath);
    ?>
    <?php  $Parsedown = new Parsedown();
    ?>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
   <script type="text/javascript" src="/apikey.js"></script> 
    <!-- nanogallery2 -->

    <div id="sentimentSuccess" class="alert alert-success nonav" style="width:20%; position:fixed; top:5px; right:5px; z-index:999;" role="alert">
    Sentiment Saved!
  </div>

   <div class="mainbox col-lg-10 col-xs-12 col-lg-offset-1">
     <div class="col-md-12">
  <?php
  $id = $_GET['id'];
  $stripid = str_replace("'", "", $id);
  $stripid = stripslashes($stripid);
  $id = addslashes($id);
  $sentimentcheck = 0;
  $sqlsentiment = "SELECT * FROM sentiments WHERE uid LIKE '$id'";
        $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
        if (mysqli_num_rows($sentimentdata)!=0) { 
          $sentimentcheck = 1;
        }

  $sqlcompendium = "SELECT * FROM movies WHERE uid LIKE '$id'";
  $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
  if (mysqli_num_rows($compendiumdata)==0) { ?>
    <div class="pagetitle" id="pgtitle"></div>
    <div class="nonav" id="movieImage"></div>
    <div class="sidebartext col-md-8">
      <span id="deck"></span>
      <p>
  <?php }
  else {
  while($row = mysqli_fetch_array($compendiumdata, MYSQLI_ASSOC)) {
    $title = $row['title'];
    $titleclean = str_replace(":", "", $title);
    $rating = $row['rating'];
    $review = $row['review'];
  }

  ?>
     <div class="pagetitle" id="pgtitle"></div>
     <div class="nonav" id="movieImage"></div>
     <div class="sidebartext col-md-8">
       <span id="deck"></span>
       <p>
       <?php if ($review == '' && $sentimentcheck == 0){

       }
       else {
       echo ('<div class="col-md-12"><ul class="nav nav-tabs">');
       if (isset($review) && $review !== ''){
        echo ('<li><a data-toggle="tab" href="#reviewtab" onclick="showReview()">Review</a></li>');
        }
        if ($sentimentcheck == 1){
          echo ('<li><a data-toggle="tab" href="#sentimentstab">Sentiments</a></li>');
          }
        
       echo ('</ul>');
       echo ('</div>');
       }
       
          ?>
       
       <?php
       if (isset($review) && $review !== ''){

            echo ('<p><div class="tab-pane fade in active" style="text-align:left;" id="reviewtab">'.$Parsedown->text($review));
          }
          else {
            echo ('<div class="tab-pane fade" id="reviewtab">');
          }
          ?>
       </div>

       <?php
        if ($sentimentcheck = 1 && $review == ''){
          echo ('<div class="tab-pane fade in active" id="sentimentstab">');
        }
        else {
          echo ('<div class="tab-pane fade" id="sentimentstab">');
        }
        ?>

          <?php
            $sqlsentiment = "SELECT * FROM sentiments WHERE uid LIKE '$id'";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              echo ('<p><span class="sentiment">"'.nl2br($row['sentiment']).'"</span> - '.$row['date'].'</p>');
              echo ('<hr class="horule">');
            }
          ?>
        <!-- Sentimentstab -->
          </div>
        <!-- col-md-8 -->
       <?php } ?>


         <div id="cast"><h3 style="text-align:center; color:#356A8E">Cast</h3></div>

     </div>

     <div class="sidebartext col-md-4" style="text-align:right;">
     <span style="width:100%;" id="poster"></span><br>
     <div class="byline" id="byline"></div>
     <table align="right">
       <tr>
         <td class="buttoncell">
         <?php
            $sqlcompendium = "SELECT * FROM movies WHERE uid LIKE '$id' AND active=1";
            $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
            if (mysqli_num_rows($compendiumdata)==0) { 
              $gallery = '';
              echo '<button class="btn btn-success" id="addMovie" onClick="addMovie()">Add</button>';
              echo '<button class="btn btn-danger nonav" id="removeMovie" onClick="removeMovie()">Remove</button>';
            }
            else {
              echo '<button class="btn btn-success nonav" id="addMovie" onClick="addMovie()">Add</button>';
              echo '<button class="btn btn-danger" id="removeMovie" onClick="removeMovie()">Remove</button>';
            }
         ?>
     
</td>
<td class="buttoncell">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="movieStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
  $sqlcompendium = "SELECT status FROM movies WHERE uid LIKE '$id'";
               $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
               if (mysqli_num_rows($compendiumdata)==0) {
                echo 'Status';
               }
               else {
                while($row = mysqli_fetch_array($compendiumdata, MYSQLI_ASSOC)) {
                  if ($row['status'] == ''){
                    echo 'Status';
                  }
                  else {
                    echo $row['status'];
                  }
                }  
               }
    ?>
  </button>
  <ul class="dropdown-menu">
    <li class="dropbutton" id="Unwatched" onClick="statusChange('Unwatched')">Unwatched</li>
    <li class="dropbutton" id="Watching" onClick="statusChange('Watching')">Watching</li>
    <li class="dropbutton" id="Watched" onClick="statusChange('Watched')">Watched</li>
  </div>
</div>
<!--     <button class="btn btn-primary">Status</button> -->
</td>
<td class="buttoncell">
     <a href="movieedit.php?id=<?php echo $id; ?>"><button class="btn btn-info">Edit</button></a><br>
</td>
</tr>

</table>
     <div class="col-md-12 disabled" id="starRatings"><div class="rating"><input type="radio" name="rating" value="5" id="5" onClick="ratemovie('5')"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4" onClick="ratemovie('4')"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3" onClick="ratemovie('3')"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2" onClick="ratemovie('2')"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1" onClick="ratemovie('1')">☆</label>
</div>
<p>
<button class="btn btn-info" onClick="addSentiment()">Sentiment</button>
<div id="sentiment" style="display:none;">
<textarea id="sentimentText" style="width:70%; height: 70px; margin-right:0px;"></textarea>
<br>
<button class="btn btn-success" onClick="saveSentiment()">Save</button>
</div>
</div>
    </div>
     
<script>

function addSentiment() {
  $("#sentiment").slideToggle("slow");
}

var movieInfo;


      		$.getJSON('https://api.themoviedb.org/3/movie/' + '<?php echo $id; ?>' + '?api_key=1a4c153e771e6a97876ae286242ccb40', function (data){
            var title = data.original_title;
            var publishedDate = data.release_date;
            publishedDate = publishedDate.slice(0,4);
            var image = 'https://image.tmdb.org/t/p/original' + data.poster_path;
            var description = data.overview;
            $('#pgtitle').html(title);
            $('#deck').html(description);
            $('#byline').html(publishedDate);
            $('#poster').html('<img src="' + image + '" style="max-height:400px;"/>');
            $('#movieImage').html(image);

            $.getJSON('https://api.themoviedb.org/3/movie/' + '<?php echo $id; ?>' + '/credits?api_key=1a4c153e771e6a97876ae286242ccb40', function (credits){
            var actors = [];
            var characters = [];
            var headshots = [];
            for (let i=0;i<=14; i++) {
              
              if (i==5 || i==10 || i==14){
                $('#cast').append('</div>');
              }
              if (i==0 || i==5 || i==10){
                $('#cast').append('<div class="row">');
              }

              actors.push(credits.cast[i].name);
              characters.push(credits.cast[i].character);
              headshots.push('https://www.themoviedb.org/t/p/w300_and_h450_bestv2' + credits.cast[i].profile_path);
              $('#cast').append('<div class="col-md-2" id="cast' + i + '"><img src="' + headshots[i] + '" style="max-width:100%;" /><br/>' + actors[i] + '<br/>"' + characters[i] + '"</div>');
              if (i==0 || i==5 || i==10){
                $('#cast' + i).addClass('col-md-offset-1');
              }
              var currentCast = $('#cast').html;
            }
            //$('#cast').html(actors);
          });
      });

$(document).ready(function(){

var tabTitle = "<?php echo $title; ?> - GameRipple";
$('#tabTitle').html(tabTitle);

 // get game id from somewhere like a link.
 var movieID = '<?php echo $id; ?>';
    var resource = '/movie/' + movieID;

    // No custom callbacks defined here, just use the default onces.
    <?php
    if (isset($rating)){
      ?>
      var currentRating = '#<?php echo $rating; ?>';
    $(currentRating).prop("checked", true);
    <?php
    }
    ?>
    
    //$("em").css("text-align","center");
    //$("em").addClass("caption");

});

function showReview(){
  var currentReview = $('#reviewtab').html();

var newReview  = currentReview.replace(/<em>/g, '<div class="caption"><em>');
newReview  = newReview.replace(/<\/em>/g, '<\/div><\/em>');
$('#reviewtab').html(newReview);
}

function addMovie(){

  var movieID = '<?php echo $id; ?>';
  var movieTitle = $('#pgtitle').html();
  var movieImage = $('#movieImage').html(); 

  $.ajax({
    url : 'addmovie.php',
    type: 'GET',
    data : { "title" : movieTitle, "uid" : movieID, "movieImage" : movieImage },
    success: function()
    {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#addMovie").addClass('nonav');
        $("#removeMovie").removeClass('nonav');
        $('#starRatings').removeClass('nonav');
    },
    error: function (jqXHR, status, errorThrown)
    {
        //if fail show error and server status
        $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
    }
});
}

function statusChange(value){
  var movieID = '<?php echo $id; ?>';
  var movieStatus = value;


  $.ajax({
  url : 'moviestatus.php',
  type: 'GET',
  data : { "uid" : movieID, "status" : movieStatus },
  success: function()
  {
      //if success then just output the text to the status div then clear the form inputs to prepare for new data
      $('#movieStatus').html(value);
  },
  error: function (jqXHR, status, errorThrown)
  {
      //if fail show error and server status
      $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
  }
});
}


function removemovie(){

var movieID = '<?php echo $id; ?>';

$.ajax({
  url : 'removemovie.php',
  type: 'GET',
  data : { "uid" : movieID },
  success: function()
  {
      //if success then just output the text to the status div then clear the form inputs to prepare for new data
      $("#addmovie").removeClass('nonav');
      $("#removemovie").addClass('nonav');
      $('#starRatings').addClass('nonav');
  },
  error: function (jqXHR, status, errorThrown)
  {
      //if fail show error and server status
      $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
  }
});
}

function saveSentiment(){

var sentimentText = $("#sentimentText").val();
var movieID = '<?php echo $id; ?>';
const formatYmd = date => date.toISOString().slice(0, 10);
var today = formatYmd(new Date());

$.ajax({
  url : 'moviesentiment.php',
  type: 'GET',
  data : { "sentimentText" : sentimentText, "uid" : movieID, "sentDate" : today },
  success: function()
  {
      $("#sentimentText").val('');
      addSentiment();
      $("#sentimentSuccess").removeClass('nonav');
      setTimeout(
  function() 
  {
    $("#sentimentSuccess").addClass('nonav');
  }, 3000);
  },
  error: function (jqXHR, status, errorThrown)
  {
      //if fail show error and server status
      $("#status_text").html('there was an error ' + errorThrown + ' with status ');
  }
});
}


function ratemovie(value){
  var movieRating = value;
  var movieID = '<?php echo $id; ?>';
  $.ajax({
  url : 'ratemovie.php',
  type: 'GET',
  data : { "uid" : movieID, "rating" : movieRating },
  success: function()
  {
      //if success then just output the text to the status div then clear the form inputs to prepare for new data
  },
  error: function (jqXHR, status, errorThrown)
  {
      //if fail show error and server status
      $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
  }

});
}

</script>
</div>
<style>
  p img {
    max-width:100%;
    border-bottom: 22px solid black;
  }

</style>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
