
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Header 
    ============================================= -->
<?php include("components/inc_header_links.php"); ?>

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <?php include("components/inc_nav_bar.php"); ?>
    <!-- End Header -->


    <!-- Start Title Page  
    ============================================= -->
    <?php //include("components/inc_page_title.php"); ?>
    <!-- End Banner -->


    <!-- Start Body Page  
    ============================================= -->
<?php
//echo "COOL"; exit;

//if(!$_POST) exit;
echo 'BOX'.$_GET['box'].'BOX2'; exit;
    ?>
    <!-- End Body -->


    <!-- Start Footer 
    ============================================= -->
    <?php include("components/inc_footer_contents.php"); ?>
    <!-- End Footer -->


    <!-- jQuery Frameworks
    ============================================= -->
    <?php include("components/inc_footer_links.php"); ?>



</body>
</html>

