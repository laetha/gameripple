<?php $sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

//$bookArray = array();
$usercheck = "SELECT * FROM books WHERE status LIKE 'Reading'";
$userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
  $bookArray = array('bookTitle' => $row['title'], 'bookUid' => $row['uid'], 'bookImg' => $row['imgurl']);
}
echo json_encode($bookArray)
?>