
<!DOCTYPE html>
<html lang="en">
<head>

<!-- PHP PAGE TITLES -->
    
<meta name="description" content="<?php

if(isset($metaD) && !empty($metaD)) { 
   echo $metaD; 
} 
else { 
   echo "Some meta description"; 
} ?>" />

<title>
    <?php 
        if(isset($title) && !empty($title)) { 
            echo $title; 
        } 
        else { 
            echo "Default title tag"; 
        } ?>
</title>
    
<h1>
  <?php 
        if(isset($title) && !empty($title)) { 
            echo $title; 
        } 
        else { 
            echo "Default title tag"; 
        } ?>  
</h1>
    
<!-- END PHP PAGE TITLES -->
    
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Font Awesome CSS References -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- My CSS References -->
    
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/styles.css"/>

    
    <!-- JavaScript References -->
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    
    </head>
    
<!-- NAV BAR -->

<div id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Research</span></a>
         <ul>
             <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
             <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
             <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
             <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
         </ul>
      </li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Live Cameras</span></a></li>
     <li><a href="contact.php"><span><i class="fa fa-fw fa-eye"></i> Contact</span></a></li>
  </ul>
</div>
    
    </head>

