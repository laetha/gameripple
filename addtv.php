<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

$titletemp =$_REQUEST['title'];
$title=htmlentities(trim(addslashes($titletemp)));
$uid = $_REQUEST['uid'];
$imgurl = $_REQUEST['tvImage'];
$t = time();


$sqlcompendium = "SELECT * FROM tv WHERE uid LIKE '$uid'";
            $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
            if (mysqli_num_rows($compendiumdata)==0) {
$sql = "INSERT INTO tv(title,uid,status,fin_date,rating,active,review,imgurl,timestamp)
				VALUES('$title','$uid','Unwatched',0,0,1,'','$imgurl','$t')";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {
          
        }
      }
      else {
        $sql = "UPDATE tv SET active=1 WHERE uid LIKE '$uid'";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {

        }
      }

//Footer
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath); ?>