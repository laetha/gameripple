<?php
$sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

$dir = 'gallery/Thumbnails/';
$foldercount = 1;
$sentiment = '';
$ignored = array('.', '..', '.svn', '.htaccess');
$timestamp = $_GET['timestamp'];
$feedcount = $_GET['feedcount'];

$folders = array();
foreach (scandir($dir) as $file) {
  if ($file !=='Thumbnails'){
    if (in_array($file, $ignored)) continue;
    if (filemtime($dir.$file) == $timestamp){
      $imgdir = $dir.$file;
      $sql = "SELECT * from games WHERE title LIKE '$file' || gallery LIKE '$file'";
      $sqldata = mysqli_query($dbcon, $sql) or die('error getting data');
      while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        $uid = $row['uid'];
        $gametitle = $row['title'];
        $imgurl = $row['imgurl'];
        $sentiment = '';
        $count = 1;
        $sqlsentiment = "SELECT * FROM sentiments WHERE uid LIKE '$uid' ORDER BY id DESC LIMIT 1";
        $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
        while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
          $sentiment =  $row['sentiment'];
        }
      }
      
    }
  }
}

 //FeedGame
 //echo ('<div id="feed'.$feedcount.'" class="col-xs-12" style="padding-bottom:50px;">');
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
     if (in_array($file1, $ignored)) continue;
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
 ?>