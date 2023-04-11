<?php
  //SQL Connect
   $sqlpath = $_SERVER['DOCUMENT_ROOT'];
   $sqlpath .= "/sql-connect.php";
   include_once($sqlpath);

   //Header
   $pgtitle = 'Sentiments - ';
   $headpath = $_SERVER['DOCUMENT_ROOT'];
   $headpath .= "/header.php";
   include_once($headpath);
   /*if ($loguser !== 'tarfuin') {
   echo ('<script>window.location.replace("/oops.php"); </script>');
 }*/
   ?>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
   <div class="mainbox col-lg-10 col-xs-12 col-lg-offset-1">

     <!-- Page Header -->
     <div class="col-md-12">
     <div class="pagetitle" id="pgtitle">My Sentiments</div>
     <button class="btn btn-primary nonav" id="compact" onclick="compact('compact')">Compact</button>
     <button class="btn btn-primary" id="expanded" onclick="compact('expanded')">Expanded</button>
   </div>
     <div class="body sidebartext col-xs-12" id="body">
       <div class="table-responsive">
   <table id="library" class="table table-condensed table-striped table-responsive dt-responsive" cellspacing="0" width="100%">
           <thead class="thead-dark">
               <tr>
                   <th scope="col">Game</th>

                   <th scope="col">Date</th>

                   <th scope="col">Sentiment</th>

               </tr>
           </thead>
           <tfoot>
             <tr>
             <th scope="col">Game</th>

            <th scope="col">Date</th>

            <th scope="col">Sentiment</th>

             </tr>
           </tfoot>
           <tbody>
             <?php
               $sqlcompendium = "SELECT * FROM sentiments ORDER BY id DESC";
               $compendiumdata = mysqli_query($dbcon, $sqlcompendium) or die('error getting data');
               while($row = mysqli_fetch_array($compendiumdata, MYSQLI_ASSOC)) {
              $sentiment = $row['sentiment'];
              $sentdate = $row['date'];
              $guid = $row['guid'];
               echo ('<tr>');
               $sqlcompendium1 = "SELECT title,imgurl FROM games WHERE guid LIKE '$guid'";
               $compendiumdata1 = mysqli_query($dbcon, $sqlcompendium1) or die('error getting data');
               while($row1 = mysqli_fetch_array($compendiumdata1, MYSQLI_ASSOC)) {
                 $title = $row1['title'];
                 $imgurl = $row1['imgurl'];
               }
                echo ('<td><a href="game.php?id='.$guid.'"><img class="nonav" src="'.$imgurl.'" height="200px" /><br class="nonav">'.$title.'</a></td>');
                echo ('<td>'.$sentdate.'</td>');
                echo ('<td>'.$sentiment.'</td>');
                echo ('</tr>');

             }
               ?>

</tbody>
</table>
<script>

function compact(value){
  if (value == 'compact'){
    $('img').addClass('nonav');
    $('br').addClass('nonav');
    $('#compact').addClass('nonav');
    $('#expanded').removeClass('nonav');
  }
  if (value == 'expanded'){
    $('img').removeClass('nonav');
    $('br').removeClass('nonav');
    $('#compact').removeClass('nonav');
    $('#expanded').addClass('nonav');
  }
}

</script>


<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#library tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" style="max-width:80px;" placeholder="'+title+'" />' );
    } );

    // DataTable
    var table = $('#library').DataTable( {
      "order": [[ 1, "desc"]]
    });

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>
</div>
</div>
</div>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
