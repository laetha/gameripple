<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath); ?>

<!-- Header -->
<?php
$headpath = $_SERVER['DOCUMENT_ROOT'];
$headpath .= "/header.php";
include_once($headpath);

// Create variables
$id=$_POST['id'];
$uid=$_POST['uid'];
$gallerytemp=$_POST['gallery'];
$playlisttemp=$_POST['playlist'];
$sentimenttemp=$_POST['sentiment'];
$review=trim(addslashes($_POST['review']));
$gallery=htmlentities(trim(addslashes($gallerytemp)));
$playlist=htmlentities(trim(addslashes($playlisttemp)));
$sentiment=htmlentities(trim(addslashes($sentimenttemp)));

$sql = "UPDATE games
SET gallery = '$gallery', playlist = '$playlist', review = '$review'
WHERE uid LIKE '$uid';";

        if ($dbcon->query($sql) === TRUE) {

            echo ('<script type="text/javascript">location.href = "game.php?id='.$uid.'";</script>');
                //header('game.php?id='.$uid);
					//include('game.php?id='.$uid);
        }
				else {
            echo "Error: " . $sql . "<br>" . $dbcon->error;
        }

//Footer
 ?>
