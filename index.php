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
     <div class="pagetitle" id="pgtitle">Gameripple</div>
   </div>
     <div class="body sidebartext col-xs-12" id="body">

     <div class="col-xs-12 highlight-box">
    Active Games<p>
     <?php
     $usercheck = "SELECT * FROM games WHERE status LIKE 'Playing'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
     $numplayed = mysqli_num_rows($userdata);
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
      $colsize = floor(12/$numplayed);
      echo ('<div class="col-sm-'.$colsize.' col-xs-12">');
      echo ('<div style="position: relative; display: inline-block;"><button class="btn btn-success topright" onClick="addSentiment(\''.$row['guid'].'\')">+</button>');
      echo ('<a href="game.php?id='.$row['guid'].'"><img src="'.$row['imgurl'].'" style="max-width:100%; max-height:300px;" /></div>');
      echo ('<p>'.$row['title'].'</a>');
      echo ('
      <div id="sentiment'.$row['guid'].'" style="display:none;">
<textarea id="sentimentText'.$row['guid'].'" style="width:100%; height: 70px; margin-right:0px;"></textarea>
<button class="btn btn-success" onClick="saveSentiment(\''.$row['guid'].'\')">Save</button>
</div></div>');
     }
     ?>
     </div>
     


     <script>

function addSentiment(guid){
    var sentID = "#sentiment" + guid;
  $(sentID).slideToggle("slow");
}

function saveSentiment(guid){

var sentimentText = $("#sentimentText" + guid).val();
var gameID = guid;
const formatYmd = date => date.toISOString().slice(0, 10);
var today = formatYmd(new Date());

$.ajax({
  url : 'addsentiment.php',
  type: 'GET',
  data : { "sentimentText" : sentimentText, "guid" : gameID, "sentDate" : today },
  success: function()
  {
      $("#sentimentText" + guid).val('');
      addSentiment();
      $("#sentimentSuccess").removeClass('nonav');
      var sentID = "#sentiment" + guid;
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
<h3>Activity Feed</h3>
<?php
$dir = 'gallery/Thumbnails/';
$foldercount = 1;
$sentiment = '';
 $ignored = array('.', '..', '.svn', '.htaccess');

 $folders = array();    
 foreach (scandir($dir) as $file) {
     if (in_array($file, $ignored)) continue;
     $folders[$file] = filemtime($dir . '/' . $file);
 }

 arsort($folders);
 $folders = array_keys($folders);

 foreach ($folders as $folder){
  $ignored1 = array('.', '..', '.svn', '.htaccess');
  $imgdir = $dir.$folder;
  $files = array();
  $count = 1;
  
            $sqlsentiment = "SELECT * FROM games";
            $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
            while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
              if ($row['gallery'] == $folder){
                $guid = $row['guid'];
                $gametitle = $row['title'];
                $imgurl = $row['imgurl'];
                $sentiment = '';
                $sqlsentiment1 = "SELECT * FROM sentiments WHERE guid LIKE '$guid' ORDER BY id DESC LIMIT 1";
                $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
                while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
                 $sentiment = $row1['sentiment'];
                }
                feedGame($guid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment);
                $foldercount++;
              }
              else if ($row['title'] == $folder){
                $guid = $row['guid'];
                $gametitle = $row['title'];
                $imgurl = $row['imgurl'];
                $sentiment = '';
                $sqlsentiment1 = "SELECT * FROM sentiments WHERE guid LIKE '$guid' ORDER BY id DESC LIMIT 1";
                $sentimentdata1 = mysqli_query($dbcon, $sqlsentiment1) or die('error getting data');
                while($row1 = mysqli_fetch_array($sentimentdata1, MYSQLI_ASSOC)) {
                 $sentiment = $row1['sentiment'];
                }
                feedGame($guid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment);
                $foldercount++;
                
              }
            }
            if ($foldercount == 10) break;

 }

 function feedGame($guid, $gametitle, $imgurl, $imgdir, $ignored1, $count, $sentiment){
   
  echo ('<div id="'.$guid.'" class="col-xs-12" style="padding-bottom:50px;">');
  echo ('<hr class="horule">');
  echo ('<div class="col-md-2 col-sm-4 col-xs-12">');
  echo ('<p><a href="game.php?id='.$guid.'"><strong>'.$gametitle.'</stong><p>');
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
