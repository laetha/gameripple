<?php
  //SQL Connect
   $sqlpath = $_SERVER['DOCUMENT_ROOT'];
   $sqlpath .= "/sql-connect.php";
   include_once($sqlpath);

   //Header
   $pgtitle = 'Gallery - ';
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
     <div class="pagetitle" id="pgtitle">Gallery</div>
   </div>
     <div class="body sidebartext col-xs-12" id="body">
      
    <?php
            $di = new RecursiveDirectoryIterator($_SERVER['DOCUMENT_ROOT'].'/gallery/Thumbnails/');
            $i = 0;
            $files = array();
            foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
              $filetime = filemtime($file);
             $files[$filetime] = $file;
             krsort($files);
            }
    ?>


     <div id="nanogallery2"></div>

<script>
   jQuery(document).ready(function () {
        jQuery("#nanogallery2").nanogallery2( {
          // ### gallery settings ### 
          thumbnailHeight:  180,
          thumbnailWidth:   320,
          galleryDisplayMode: 'pagination',
          itemsBaseURL: '/gallery/Thumbnails/',
          galleryMaxRows: 6,
          viewerZoom: false,
          thumbnailHoverEffect2: 'scale120',
          
          // ### gallery content ### 
          items: [
            <?php            
              foreach ($files as $img){
              $img = str_replace('/Thumbnails\\', '/Thumbnails/', $img);
              $img = strstr($img,'/Thumbnails/');
              $img = str_replace('/Thumbnails/', '', $img);
              $img = str_replace('\\','/',$img);
                if (strpos($img,'.png') !== false || strpos($img,'.jpg') !== false || strpos($img,'.jpeg') !== false){
                  if ($i <= 99){
                echo ("{ src: '".$img."' },");
                $i++;

                  }
                }
              }
            
              /*foreach ($images as $img){
                $img = addslashes($img);
                if (strpos($img,'.png') !== false || strpos($img,'.jpg') !== false || strpos($img,'.jpeg') !== false || strpos($img,'.jxr') !== false){
                echo ("{ src: '".$img."' },");
                }
              }*/

            ?>
            ]
        });
        updateGallery();
    });
</script>

</div>
</div>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
