<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
crossorigin=""/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
crossorigin="">
</script>

<?php
//SQL Connect
$sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/sql-connect.php";
include_once($sqlpath);

//Header
$headpath = $_SERVER['DOCUMENT_ROOT'];
$headpath .= "/header.php";
include_once($headpath);

$sqlpath = $_SERVER['DOCUMENT_ROOT'];
$sqlpath .= "/plugins/Parsedown.php";
include_once($sqlpath);
/*if ($loguser !== 'tarfuin') {
echo ('<script>window.location.replace("/oops.php"); </script>');
}*/
  $Parsedown = new Parsedown();

$id = "index";
$disallowed_paths = array('header', 'footer');
if (!empty($_GET['id'])) {
  $tmp_action = basename($_GET['id']);
  if (!in_array($tmp_action, $disallowed_paths) /*&& file_exists("world/{$tmp_action}.php")*/)
        $id = $tmp_action;
        $id = addslashes($id);
        $worldedit = "SELECT * FROM books WHERE uid LIKE '$id'";
        $editdata = mysqli_query($dbcon, $worldedit) or die('error getting data');
        while($editrow =  mysqli_fetch_array($editdata, MYSQLI_ASSOC)) {
         echo '<div class="pagetitle" id="pgtitle"> Edit - '.$editrow['title'].'</div><p>';
         $editid = $editrow['id'];
         $uid = $editrow['uid'];
         $review = $editrow['review'];

          
        $path = $_SERVER['DOCUMENT_ROOT'].'/gallery/Thumbnails/'.$gallery.'/';
        $files = scandir($path);
?>

        <div class="col-md-10 col-centered">
         <div class="col-sm-6 typebox col-centered" id="name">
             <form method="post" action="bookeditprocess.php" id="import" enctype="multipart/form-data">
             <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
             <input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>">

             </div>
             <dic class="col-sm-10 col-centered typebox">

             <div class="text col-centered col-md-12">Review<textarea type="text" name="review" id="review"><?php 
             if ($review == ''){
               
             }
             else {
              echo $review;
             }
             ?>
             </textarea></div></div>
        
             <!-- <div class="sidebartext col-centered"><input type="checkbox" name="reviewBox" id="reviewBox" value="yes" onclick="showReview()">Review?</div> -->
       </div>
        </div>

<?php
}
       ?>
       <div class="col-centered">
       <input class="btn btn-primary col-centered inline" type="submit" value="Save">
       <a class="clean" href="/book.php?id=<?php echo $id; ?>"><button class="btn btn-danger col-centered inline" type="button">Cancel</button></a>
       </div>
      </form>

     </div>
   </div>
  </div>

<style>
.editor-toolbar{
  background-color: white;
}
</style>

<script>
var simplemde = new SimpleMDE({ element: document.getElementById("review") });

</script>

         <?php
       }
  ?>
  <!-- Import Form -->


<!-- Footer -->
<?php
$footpath = $_SERVER['DOCUMENT_ROOT'];
$footpath .= "/footer.php";
include_once($footpath);
 ?>
