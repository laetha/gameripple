
<?php
$headpath = $_SERVER['DOCUMENT_ROOT'];
$headpath .= "/header.php";
include_once($headpath);
?>
<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$loggedinuser;
?>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#registerModal').modal('show');
    });
</script>

  <!-- Modal -->
  <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content modalstyle bodytext">

        <div class="modal-body">
          <p><?php echo $loggedinuser; ?> successfully logged in.</p>
        </div>

      </div>

    </div>
  </div>
<?php  $footpath = $_SERVER['DOCUMENT_ROOT'];
  $footpath .= "/footer.php";
  include_once($footpath);
  ?>
