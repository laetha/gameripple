<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

$uid = $_REQUEST['uid'];
$gallery = $_REQUEST['gallery'];
$gallery = addslashes($gallery);


$sql = "UPDATE games SET gallery='$gallery' WHERE uid LIKE '$uid'";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {

        }

//Footer
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath); ?>