<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js"
    lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Miguel Esquirol Rios</title>






    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700'
        rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet"
        href="css/foundation.css" />
    <link rel="stylesheet"
        href="css/style.css" />
        <link rel="stylesheet"   href="slick/slick.css"/>

        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
          <script src="js/foundation/foundation.reveal.js"></script>



              <script src="js/vendor/modernizr.js"></script>

              <script type="text/javascript" src="slick/slick.min.js"></script>



</head>

<body id="body">
  <?php echo $id; ?>



<?php

$id = $_GET['id'];

if ($id == "design") {
   include 'home.php';
   include 'about.php';
   include 'design.php';
}

elseif ($id == "photo") {
   include 'home.php';
   include 'about.php';
   include 'photo.php';
}

elseif ($id == "writing") {
   include 'home.php';
   include 'about.php';
   include 'writing.php';
}


else {

include 'menu.php';
include 'home.php';
include 'about.php';
include 'midbar.php';
include 'design.php';
include 'photo.php';
include 'writing.php';




}
?>




  <?php include 'footer.php';?>


  <?php include 'scripts.php';?>







</body>

</html>
