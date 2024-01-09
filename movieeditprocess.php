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
$sentimenttemp=$_POST['sentiment'];
$review=trim(addslashes($_POST['review']));
$sentiment=htmlentities(trim(addslashes($sentimenttemp)));

$sql = "UPDATE movies
SET review = '$review'
WHERE uid LIKE '$uid';";

        if ($dbcon->query($sql) === TRUE) {

            echo ('<script type="text/javascript">location.href = "movie.php?id='.$uid.'";</script>');
                //header('game.php?id='.$uid);
					//include('game.php?id='.$uid);
        }
				else {
            echo "Error: " . $sql . "<br>" . $dbcon->error;
        }

//Footer
 ?>
