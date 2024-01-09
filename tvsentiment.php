<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);


$uid = $_REQUEST['uid'];
$sentimenttemp = $_REQUEST['sentimentText'];
$sentiment=htmlentities(trim(addslashes($sentimenttemp)));
$sentDate = $_REQUEST['sentDate'];
$t = time();


$sql = "INSERT INTO sentiments(uid,sentiment,date,timestamp)
				VALUES('$uid','$sentiment','$sentDate','$t')";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {
          
        }
      
//Footer
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath); ?>