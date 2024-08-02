<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

$gameArray = array();;

$dir = 'gallery/';
$foldercount = 1;
$ignored = array('.', '..', '.svn', '.htaccess');

 $folders = array();    
 foreach (scandir($dir) as $file) {
     if (in_array($file, $ignored)) continue;
     $folders[$file] = filemtime($dir . '/' . $file);
 }

 arsort($folders);
 //echo implode($folders);
 $times = $folders;
 $folders = array_keys($folders);
 //echo implode($folders);

 foreach ($folders as $folder){
  $tempArray = array();
  $ignored1 = array('.', '..', '.svn', '.htaccess');
  $imgdir = $dir.$folder;
  $count = 0;
  $folder = htmlspecialchars($folder);

  $sqlsentiment = "SELECT * FROM games WHERE title LIKE '$folder' || gallery LIKE '$folder'";
  $sentimentdata = mysqli_query($dbcon, $sqlsentiment) or die('error getting data');
  while($row = mysqli_fetch_array($sentimentdata, MYSQLI_ASSOC)) {
    $title = $row['title'];
    if ($row['gallery'] !== ''){
      $title = $row['gallery'];
    }
    $tempArray = array($row['title'],$row['uid'],$row['imgurl'],$times[$title]);
    $count++;
    array_push($gameArray,$tempArray);
  }
}



echo json_encode($gameArray);
?>