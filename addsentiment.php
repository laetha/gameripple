<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);


$guid = $_REQUEST['guid'];
$sentimenttemp = $_REQUEST['sentimentText'];
$sentiment=htmlentities(trim(addslashes($sentimenttemp)));
$sentDate = $_REQUEST['sentDate'];

$sql = "INSERT INTO sentiments(guid,sentiment,date)
				VALUES('$guid','$sentiment','$sentDate')";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {
          
        }
      
//Footer
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath); ?>