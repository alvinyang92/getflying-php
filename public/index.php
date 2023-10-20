<?php
$title = "Home - Getflying ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/nav.php';
?>
<!-- alert bar -->
<?php include './inc/alert.php'; ?>
<!-- home banner -->

<?php include './inc/FeatureBanner.php'; ?>





<!-- USP -->
<?php
$displayGridUsp = true;
// $gridColumns = "lg:grid-cols-3";
ob_start();
include './inc/GridFeature.php';
$gridUsp = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        //  'Blog',
        // 'Breathtaking destinations that are worth bumping to the top of your Travel bucket list'
    ),
    $gridUsp
);
?>



<!-- Explore tour destinations - Card full -->
<?php
$displayGridCardFull = true;
ob_start();
include './inc/GridFeature.php';
$grid2 = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        'Explore tour destinations',
        'Breathtaking destinations that are worth bumping to the top of your Travel bucket list'
    ),
    $grid2
);
?>
<!-- unforgettable activities -->
<?php include './inc/GridGallery.php'; ?>

<!-- Hottest Tour in the Month -->
<?php
ob_start();
$displayGridCardTour = true;
$displayGridCardFull = false;
include './inc/GridFeature.php';
$gridtour = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        'Hottest Tour in the Month',
        'Breathtaking destinations that are worth bumping to the top of your Travel bucket list'
    ),
    $gridtour
);
?>

<!-- book with us -->
<?php include './inc/BookWithUs.php'; ?>

<!-- Hottest Activities in the Month -->
<?php
ob_start();
$displayGridActivites = true;
include './inc/GridFeature.php';
$grid3 = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        'Hottest Activities in the Month',
        'Discover exciting activities that will make your month unforgettable'
    ),
    $grid3
);
?>

<!-- testimonial -->
<?php
ob_start();
$lgGridCols2 = true;
$lgGridCols3 = false;
$displayGridReview = true;
$displayGridCardBlog = false;
$displayGridActivites = false;
$displayGridCardTour = false;
$displayGridUsp = false;
include './inc/GridFeature.php';
$gridreview = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        'What Travelers are saying'
        // 'Discover exciting activities that will make your month unforgettable'
    ),
    $gridreview
);
?>

<!-- subscribe -->
<?php include './inc/Subscribe.php'; ?>

<!-- blog -->
<?php
ob_start();
$lgGridCols2 = false;
$lgGridCols3 = true;
$displayGridCardBlog = true;
$displayGridActivites = false;
$displayGridCardTour = false;
include './inc/GridFeature.php';
$gridblog1 = ob_get_clean();
echo str_replace(
    array('{{title}}', '{{subtitle}}'),
    array(
        // 'Hottest Activities in the Month',
        // 'Discover exciting activities that will make your month unforgettable'
    ),
    $gridblog1
);
?>

<?php include './inc/footer.php'; ?>