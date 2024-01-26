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
   </div>
     <div class="body sidebartext col-xs-12" id="body">

     <div class="col-xs-12 highlight-box">
    Active Media<p>
     <?php

    $gamecheck = "SELECT * FROM games WHERE status LIKE 'Playing'";
    $gamedata = mysqli_query($dbcon, $gamecheck) or die('error getting data');
    $numactive = mysqli_num_rows($gamedata);
    $bookcheck = "SELECT * FROM books WHERE status LIKE 'Reading'";
		$bookdata = mysqli_query($dbcon, $bookcheck) or die('error getting data');
    $numactive = $numactive + mysqli_num_rows($bookdata);
    $moviecheck = "SELECT * FROM movies WHERE status LIKE 'Watching'";
		$moviedata = mysqli_query($dbcon, $moviecheck) or die('error getting data');
    $numactive = $numactive + mysqli_num_rows($moviedata);
    $tvcheck = "SELECT * FROM tv WHERE status LIKE 'Watching'";
		$tvdata = mysqli_query($dbcon, $tvcheck) or die('error getting data');
    $numactive = $numactive + mysqli_num_rows($tvdata);
    $colsize = floor(12/$numactive);
    //echo ('<div class="col-sm-'.$colsize.' col-xs-12">');

     $usercheck = "SELECT * FROM games WHERE status LIKE 'Playing'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
     $numplayed = mysqli_num_rows($userdata);
     //$colsize = floor(12/$numplayed);
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
      echo ('<div class="col-sm-'.$colsize.' col-xs-12">');
      echo ('<div style="position: relative; display: inline-block;"><button class="btn btn-success topright" onClick="addSentiment(\''.$row['uid'].'\')">+</button>');
      echo ('<a href="game.php?id='.$row['uid'].'"><img src="'.$row['imgurl'].'" style="max-width:100%; max-height:300px;" /></div>');
      echo ('<p>'.$row['title'].'</a>');
      echo ('
      <div id="sentiment'.$row['uid'].'" style="display:none;">
<textarea id="sentimentText'.$row['uid'].'" style="width:100%; height: 70px; margin-right:0px;"></textarea>
<button class="btn btn-success" onClick="saveSentiment(\''.$row['uid'].'\')">Save</button>
</div></div>');
     }  
     $usercheck = "SELECT * FROM books WHERE status LIKE 'Reading'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
     $numread = mysqli_num_rows($userdata);
     //$colsize = floor(12/$numread);
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
      echo ('<div class="col-sm-'.$colsize.' col-xs-12">');
      echo ('<div style="position: relative; display: inline-block;"><button class="btn btn-success topright" onClick="addSentiment(\''.$row['uid'].'\')">+</button>');
      echo ('<a href="book.php?id='.$row['uid'].'"><img src="'.$row['imgurl'].'" style="min-width:100%; height:300px;" /></div>');
      echo ('<p>'.$row['title'].'</a>');
      echo ('
      <div id="sentiment'.$row['uid'].'" style="display:none;">
<textarea id="sentimentText'.$row['uid'].'" style="width:100%; height: 70px; margin-right:0px;"></textarea>
<button class="btn btn-success" onClick="saveSentiment(\''.$row['uid'].'\')">Save</button>
</div></div>');
     }
     $usercheck = "SELECT * FROM movies WHERE status LIKE 'Watching'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
     $numread = mysqli_num_rows($userdata);
     //$colsize = floor(12/$numread);
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
      echo ('<div class="col-sm-'.$colsize.' col-xs-12">');
      echo ('<div style="position: relative; display: inline-block;"><button class="btn btn-success topright" onClick="addSentiment(\''.$row['uid'].'\')">+</button>');
      echo ('<a href="movie.php?id='.$row['uid'].'"><img src="'.$row['imgurl'].'" style="min-width:100%; height:300px;" /></div>');
      echo ('<p>'.$row['title'].'</a>');
      echo ('
      <div id="sentiment'.$row['uid'].'" style="display:none;">
<textarea id="sentimentText'.$row['uid'].'" style="width:100%; height: 70px; margin-right:0px;"></textarea>
<button class="btn btn-success" onClick="saveSentiment(\''.$row['uid'].'\')">Save</button>
</div></div>');
     }
     $usercheck = "SELECT * FROM tv WHERE status LIKE 'Watching'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
     $numread = mysqli_num_rows($userdata);
     //$colsize = floor(12/$numread);
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
      echo ('<div class="col-sm-'.$colsize.' col-xs-12">');
      echo ('<div style="position: relative; display: inline-block;"><button class="btn btn-success topright" onClick="addSentiment(\''.$row['uid'].'\')">+</button>');
      echo ('<a href="tv.php?id='.$row['uid'].'"><img src="'.$row['imgurl'].'" style="min-width:100%; height:300px;" /></div>');
      echo ('<p>'.$row['title'].'</a>');
      echo ('
      <div id="sentiment'.$row['uid'].'" style="display:none;">
<textarea id="sentimentText'.$row['uid'].'" style="width:100%; height: 70px; margin-right:0px;"></textarea>
<button class="btn btn-success" onClick="saveSentiment(\''.$row['uid'].'\')">Save</button>
</div></div>');
     }
     ?>
     </div>
     


     <script>

function addSentiment(uid){
    var sentID = "#sentiment" + uid;
  $(sentID).slideToggle("slow");
}

function saveSentiment(uid){

var sentimentText = $("#sentimentText" + uid).val();
var gameID = uid;
const formatYmd = date => date.toISOString().slice(0, 10);
var today = formatYmd(new Date());

$.ajax({
  url : 'booksentiment.php',
  type: 'GET',
  data : { "sentimentText" : sentimentText, "uid" : gameID, "sentDate" : today },
  success: function()
  {
      $("#sentimentText" + uid).val('');
      addSentiment();
      $("#sentimentSuccess").removeClass('nonav');
      var sentID = "#sentiment" + uid;
  $(sentID).slideToggle("slow");
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

</script>

<div class="col-xs-12">
    <h2>Latest</h2>
    <?php
      $alllatest = array();
      $sqllatest = "SELECT title, timestamp, imgurl, uid FROM books ORDER BY timestamp DESC LIMIT 7";
      $latestdata = mysqli_query($dbcon, $sqllatest) or die('error getting data');
      while ($row = mysqli_fetch_array($latestdata, MYSQLI_ASSOC)){
        
        array_push($alllatest, $row['timestamp'].'::'.$row['title'].'::'.$row['imgurl'].'::book::'.$row['uid']);
      }
      $sqllatest = "SELECT title, timestamp, imgurl, uid FROM tv ORDER BY timestamp DESC LIMIT 7";
      $latestdata = mysqli_query($dbcon, $sqllatest) or die('error getting data');
      while ($row = mysqli_fetch_array($latestdata, MYSQLI_ASSOC)){
        
        array_push($alllatest, $row['timestamp'].'::'.$row['title'].'::'.$row['imgurl'].'::tv::'.$row['uid']);
      }
      $sqllatest = "SELECT title, timestamp, imgurl, uid FROM movies ORDER BY timestamp DESC LIMIT 7";
      $latestdata = mysqli_query($dbcon, $sqllatest) or die('error getting data');
      while ($row = mysqli_fetch_array($latestdata, MYSQLI_ASSOC)){
        
        array_push($alllatest, $row['timestamp'].'::'.$row['title'].'::'.$row['imgurl'].'::movie::'.$row['uid']);
      }
      $sqllatest = "SELECT title, timestamp, imgurl, uid FROM games ORDER BY timestamp DESC LIMIT 7";
      $latestdata = mysqli_query($dbcon, $sqllatest) or die('error getting data');
      while ($row = mysqli_fetch_array($latestdata, MYSQLI_ASSOC)){
        
        array_push($alllatest, $row['timestamp'].'::'.$row['title'].'::'.$row['imgurl'].'::game::'.$row['uid']);
      }
      rsort($alllatest);
      $latestentry = array();
        for ($x=0; $x<=5; $x++){
          $latestentry = explode('::', $alllatest[$x]);
          //echo $latestentry[3];
          echo ('<div class="col-md-2 col-xs-3"><a href="'.$latestentry[3].'.php?id='.$latestentry[4].'">'.$latestentry[1].'</a><br><img src="'.$latestentry[2].'" style="width:100%;" /></div>');
      }
    ?>
</div>
<div class="col-xs-12">
<h3>Activity Feed</h3>
<?php
$dir = 'gallery/';
$foldercount = 1;
$sentiment = '';
 $ignored = array('.', '..', '.svn', '.htaccess');

 $folders = array();    
 foreach (scandir($dir) as $file) {
     if (in_array($file, $ignored)) continue;
     $folders[$file] = filemtime($dir . '/' . $file);
 }
 $sqlsentiment = "SELECT DISTINCT uid,timestamp FROM sentiments";
 $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
 while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
  $mediauid = $row['uid'];
  //echo $mediauid;
  $sqlsentiment1 = "SELECT title FROM books WHERE uid LIKE '$mediauid'
  UNION SELECT title FROM movies WHERE uid LIKE '$mediauid'
  UNION SELECT title FROM tv WHERE uid LIKE '$mediauid'
  UNION SELECT title FROM games WHERE uid LIKE '$mediauid'";

  $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
  while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
    $mediatitle = $row1['title'];
   // echo $row1['title'];
  }
  $folders[$mediatitle] = $row['timestamp'];
 }

 arsort($folders);
 //echo implode($folders);
 $folders = array_keys($folders);
 //echo implode($folders);

 foreach ($folders as $folder){
  $ignored1 = array('.', '..', '.svn', '.htaccess');
  $imgdir = $dir.$folder;
  $files = array();
  $count = 1;
  $folder = htmlspecialchars($folder);
  //echo $folder;
  
            $sqlsentiment = "SELECT * FROM games WHERE title LIKE '$folder' OR gallery LIKE '$folder'";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              if ($row['gallery'] == $folder){
                $uid = $row['uid'];
                $gametitle = $row['title'];
                $imgurl = $row['imgurl'];
                $sentiment = '';
                $sqlsentiment1 = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
                $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
                while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
                 $sentiment = $row1['sentiment'];
                }
                feedGame($uid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment);
                $foldercount++;
              }
              else if ($row['title'] == $folder){
                $uid = $row['uid'];
                $gametitle = $row['title'];
                $imgurl = $row['imgurl'];
                $sentiment = '';
                $sqlsentiment1 = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
                $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
                while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
                 $sentiment = $row1['sentiment'];
                }
                feedGame($uid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment);
                $foldercount++;
                
              }
            }
            $sqlsentiment = "SELECT * FROM books WHERE title LIKE '$folder'";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              $uid = $row['uid'];
              $booktitle = $row['title'];
              $imgurl = $row['imgurl'];
              $sentiment = '';
              $sqlsentiment1 = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
              $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
              while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
               $sentiment = $row1['sentiment'];
              }
              feedBook($uid, $booktitle, $imgurl, $count, $sentiment);
              $foldercount++;
            }

            $sqlsentiment = "SELECT * FROM movies WHERE title LIKE '$folder'";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              $uid = $row['uid'];
              $movietitle = $row['title'];
              $imgurl = $row['imgurl'];
              $sentiment = '';
              $sqlsentiment1 = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
              $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
              while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
               $sentiment = $row1['sentiment'];
              }
              feedMovie($uid, $movietitle, $imgurl, $count, $sentiment);
              $foldercount++;
            }
            $sqlsentiment = "SELECT * FROM tv WHERE title LIKE '$folder'";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              $uid = $row['uid'];
              $tvtitle = $row['title'];
              $imgurl = $row['imgurl'];
              $sentiment = '';
              $sqlsentiment1 = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
              $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
              while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
               $sentiment = $row1['sentiment'];
              }
              feedTv($uid, $tvtitle, $imgurl, $count, $sentiment);
              $foldercount++;
            }
            if ($foldercount == 10) break;

 }

 function feedGame($uid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment){
   
  echo ('<div id="'.$uid.'" class="col-xs-12" style="padding-bottom:50px;">');
  echo ('<hr class="horule">');
  echo ('<div class="col-md-2 col-sm-4 col-xs-12">');
  echo ('<p><a href="game.php?id='.$uid.'"><strong>'.$gametitle.'</stong><p>');
  echo ('<img src="'.$imgurl.'" style="max-width:100%; max-height:200px;" />');
  echo ('</div>');

  echo ('<div class="col-md-10 col-sm-8 col-xs-12">');

  if ($sentiment !== ''){
        echo ('<div class="col-md-12"><blockquote><em class="bodytext">'.$sentiment.'</em></blockquote></div>');
  }

  foreach (scandir($imgdir) as $file1) {
      if (in_array($file1, $ignored1)) continue;
      if (strpos($file1, '.png') || strpos($file1, '.jpg') || strpos($file1, '.jpeg') && $count <= 5){
      $files[$file1] = filemtime($imgdir . '/' . $file1);
      }
  }
 
  arsort($files);
  $files = array_keys($files);
    foreach ($files as $img){
      if (strpos($img, '.png') == false && strpos($img, '.jpg') == false && strpos($img, '.jpeg') == false){
        unset($img);
      }
    }
    foreach ($files as $img){
      echo ('<div class="col-md-4 col-sm-6 col-xs-12" style="padding-left:0px; padding-right:0px;"><img src="'.$imgdir.'/'.$img.'" width="100%" /></div>');
      if (++$count == 7) break;

    }
    echo ('<br>');
    echo ('</div>');
    echo ('</div>');


 }

 function feedBook($uid, $booktitle, $imgurl, $count, $sentiment){
   
  echo ('<div id="'.$uid.'" class="col-xs-12" style="padding-bottom:50px;">');
  echo ('<hr class="horule">');
  echo ('<div class="col-md-2 col-sm-4 col-xs-12">');
  echo ('<p><a href="book.php?id='.$uid.'"><strong>'.$booktitle.'</stong><p>');
  echo ('<img src="'.$imgurl.'" style="max-width:100%; max-height:200px;" />');
  echo ('</div>');

  echo ('<div class="col-md-10 col-sm-8 col-xs-12">');

  if ($sentiment !== ''){
        echo ('<div class="col-md-12"><blockquote><em class="bodytext">'.$sentiment.'</em></blockquote></div>');
  }

    echo ('<br>');
    echo ('</div>');
    echo ('</div>');


 }

 function feedMovie($uid, $movietitle, $imgurl, $count, $sentiment){
?>

<?php 
  echo ('<div id="'.$uid.'" class="col-xs-12" style="padding-bottom:50px;">');
  echo ('<hr class="horule">');
  echo ('<div class="col-md-2 col-sm-4 col-xs-12">');
  echo ('<p><a href="movie.php?id='.$uid.'"><strong>'.$movietitle.'</stong><p>');
  echo ('<img src="'.$imgurl.'" style="max-width:100%; max-height:200px;" />');
  echo ('</div>');
  echo ('<div class="col-md-10 col-sm-8 col-xs-12">');

  if ($sentiment !== ''){
        echo ('<div class="col-md-12"><blockquote><em class="bodytext">'.$sentiment.'</em></blockquote></div>');
  }

    echo ('<br>');
    echo ('</div>');
    echo ('</div>');
 }

 function feedTv($uid, $tvtitle, $imgurl, $count, $sentiment){
?>
  <script>
  $(document).ready(function(){

  $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_history&search=<?php echo $tvtitle; ?>&user_id=4821142', function (data){
    var epTitle = data.response.data.data[0].full_title;
    var epEm = '#<?php echo $uid; ?>title';
    var ratingKey = data.response.data.data[0].rating_key;
    $(epEm).html(epTitle);

  $.getJSON('https://tautulli.bkconnor.com/api/v2?apikey=fYxHkXMoVO4O3QGeOboahtLKl2PazxiS&cmd=get_metadata&rating_key=' + ratingKey, function (data){
   var thumbURL = data.response.data.thumb; 
   var thumbID = '#<?php echo $uid; ?>thumb';
   $(thumbID).html('<img src="https://tautulli.bkconnor.com/pms_image_proxy?img=' + thumbURL + '" width="250px" />');
    });
  });
});
</script>
   <?php
  echo ('<div id="'.$uid.'" class="col-xs-12" style="padding-bottom:50px;">');
  echo ('<hr class="horule">');
  echo ('<div class="col-md-2 col-sm-4 col-xs-12">');
  echo ('<p><a href="tv.php?id='.$uid.'"><strong>'.$tvtitle.'</stong><p>');
  echo ('<img src="'.$imgurl.'" style="max-width:100%; max-height:200px;" />');
  echo ('</div></a>');
  echo ('<div class="col-md-10 col-sm-8 col-xs-12">');
  echo ('<div class="col-md-12">');
  echo ('Latest Episode: <em id="'.$uid.'title"></em>');
  echo ('<div id="'.$uid.'thumb"></div>');
  echo ('</div>');

  if ($sentiment !== ''){
        echo ('<div class="col-md-12"><blockquote><em class="bodytext">'.$sentiment.'</em></blockquote></div>');
  }

    echo ('<br>');
    echo ('</div>');
    echo ('</div>');
 }
?>
</div>
</div>
</div>
</div>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
