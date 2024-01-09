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

  $sqlcompendium = "SELECT * FROM tv WHERE uid LIKE '$id'";
  $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
  if (mysqli_num_rows($compendiumdata)==0) { ?>
    <div class="pagetitle" id="pgtitle"></div>
    <div class="nonav" id="tvImage"></div>
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
     <div class="sidebartext col-md-8">
       <span id="deck"></span>
       <p>
       <?php if ($review == '' && $sentimentcheck == 0){

       }
       else {
       echo ('<ul class="nav nav-tabs">');
       if (isset($review) && $review !== ''){
        echo ('<li><a data-toggle="tab" href="#reviewtab" onclick="showReview()">Review</a></li>');
        }
        if ($sentimentcheck == 1){
          echo ('<li><a data-toggle="tab" href="#sentimentstab">Sentiments</a></li>');
          }
        
       echo ('</ul>');
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

        <!-- col-md-8 -->
       </div>
       <?php } ?>

       <div class="col-md-12" id="latest"><h3 style="text-align:center; color:#356A8E; margin-top:0px; margin-bottom:10px;">Latest Watched Episodes</h3></div>
       <hr class="horule">
       <div class="col-md-12" id="cast"><h3 style="text-align:center; color:#356A8E; margin-top:0px;">Cast</h3></div>

     </div>

     <div class="sidebartext col-md-4" style="text-align:right;">
     <span style="width:100%;" id="poster"></span><br>
     <div class="byline" id="byline"></div>
     <table align="right">
       <tr>
         <td class="buttoncell">
         <?php
            $sqlcompendium = "SELECT * FROM tv WHERE uid LIKE '$id' AND active=1";
            $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
            if (mysqli_num_rows($compendiumdata)==0) { 
              $gallery = '';
              echo '<button class="btn btn-success" id="addTv" onClick="addTv()">Add</button>';
              echo '<button class="btn btn-danger nonav" id="removeTv" onClick="removeTv()">Remove</button>';
            }
            else {
              echo '<button class="btn btn-success nonav" id="addTv" onClick="addTv()">Add</button>';
              echo '<button class="btn btn-danger" id="removeTv" onClick="removeTv()">Remove</button>';
            }
         ?>
     
</td>
<td class="buttoncell">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="tvStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
  $sqlcompendium = "SELECT status FROM tv WHERE uid LIKE '$id'";
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
     <a href="tvedit.php?id=<?php echo $id; ?>"><button class="btn btn-info">Edit</button></a><br>
</td>
</tr>

</table>
     <div class="col-md-12 disabled" id="starRatings"><div class="rating"><input type="radio" name="rating" value="5" id="5" onClick="ratetv('5')"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4" onClick="ratetv('4')"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3" onClick="ratetv('3')"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2" onClick="ratetv('2')"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1" onClick="ratetv('1')">☆</label>
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

var tvInfo;
    /* 
     *  Send a get request to the Giant bomb api.
 *  @param string resource set the RESOURCE.
 *  @param object data specifiy any filters or fields.
 *  @param object callbacks specify any custom callbacks.
 */
      		$.getJSON('https://api.themoviedb.org/3/tv/' + '<?php echo $id; ?>' + '?api_key=1a4c153e771e6a97876ae286242ccb40', function (data){
            var title = data.original_name;
            var publishedDate = data.first_air_date;
            publishedDate = publishedDate.slice(0,4);
            var image = 'https://image.tmdb.org/t/p/original' + data.poster_path;
            var description = data.overview;
            $('#pgtitle').html(title);
            $('#deck').html(description);
            $('#byline').html(publishedDate);
            $('#poster').html('<img src="' + image + '" style="max-height:400px;"/>');
            $('#tvImage').html(image);

          $.getJSON('https://api.themoviedb.org/3/tv/' + '<?php echo $id; ?>' + '/credits?api_key=1a4c153e771e6a97876ae286242ccb40', function (credits){
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
          $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&search=' + title + '&user_id=4821142&length=4', function (data){
            for (let i=0;i<=3; i++) {
              let ratingKey = data.response.data.data[i].rating_key;
              let currentDiv = '#latest' + i;
              $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_metadata&rating_key=' + ratingKey, function (data1){
                let thumbURL = data1.response.data.thumb; 
                $('#latest').append('<div class="col-md-3" id="latest' + i + '"><img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + thumbURL + '" style="max-width:100%;" /><br>');
                $(currentDiv).append('' + data.response.data.data[i].title + '</div>');

            });

             
            //$('#latest').append('</div>');
          }

          });
          

      });

$(document).ready(function(){

var tabTitle = "<?php echo $title; ?> - GameRipple";
$('#tabTitle').html(tabTitle);

 // get game id from somewhere like a link.
 var tvID = '<?php echo $id; ?>';
    var resource = '/tv/' + tvID;

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

function addTv(){

  var tvID = '<?php echo $id; ?>';
  var tvTitle = $('#pgtitle').html();
  var tvImage = $('#tvImage').html(); 

  $.ajax({
    url : 'addtv.php',
    type: 'GET',
    data : { "title" : tvTitle, "uid" : tvID, "tvImage" : tvImage },
    success: function()
    {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#addTv").addClass('nonav');
        $("#removeTv").removeClass('nonav');
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
  var tvID = '<?php echo $id; ?>';
  var tvStatus = value;
  //var currentDate = new Date();
  //var findate = currentDate.getTime();
           /* var date = ("0" + currentDate.getDate()).slice(-2);
            var month = ("0" + currentDate.getMonth()).slice(-2);
            month = parseInt(month) + 1;
            var year = currentDate.getFullYear();
            var dateString = year + '' + (month) + '' + date;*/

  $.ajax({
  url : 'tvstatus.php',
  type: 'GET',
  data : { "uid" : tvID, "status" : tvStatus },
  success: function()
  {
      //if success then just output the text to the status div then clear the form inputs to prepare for new data
      $('#tvStatus').html(value);
  },
  error: function (jqXHR, status, errorThrown)
  {
      //if fail show error and server status
      $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
  }
});
}


function removetv(){

var tvID = '<?php echo $id; ?>';

$.ajax({
  url : 'removetv.php',
  type: 'GET',
  data : { "uid" : tvID },
  success: function()
  {
      //if success then just output the text to the status div then clear the form inputs to prepare for new data
      $("#addtv").removeClass('nonav');
      $("#removetv").addClass('nonav');
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
var tvID = '<?php echo $id; ?>';
const formatYmd = date => date.toISOString().slice(0, 10);
var today = formatYmd(new Date());

$.ajax({
  url : 'tvsentiment.php',
  type: 'GET',
  data : { "sentimentText" : sentimentText, "uid" : tvID, "sentDate" : today },
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
      $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
  }
});
}


function ratetv(value){
  var tvRating = value;
  var tvID = '<?php echo $id; ?>';
  $.ajax({
  url : 'ratetv.php',
  type: 'GET',
  data : { "uid" : tvID, "rating" : tvRating },
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
