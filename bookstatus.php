<!-- SQL Connect -->
<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

$uid = $_REQUEST['uid'];
$status = $_REQUEST['status'];

if ($status == 'Read'){
  $findate = time();
}
else {
  $findate = 0;
}

$sql = "UPDATE books SET status='$status', fin_date='$findate' WHERE uid LIKE '$uid'";

        if ($dbcon->query($sql) === TRUE) {
					
        }
				else {

        }

//Footer
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath); ?>