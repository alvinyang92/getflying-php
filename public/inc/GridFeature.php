<?php
// JSON data
$gridFeatureData = '{
    "title": "{{title}}",
    "subtitle": "{{subtitle}}"
}';

// Decode JSON data
$item = json_decode($gridFeatureData);

// Set the value of $gridColumns based on your conditions
$gridColumns = 'lg:grid-cols-4'; // Default value

if ($lgGridCols2) {
    $gridColumns = 'lg:grid-cols-2';
} elseif ($lgGridCols3) {
    $gridColumns = 'lg:grid-cols-3';
}

?>


<div class="bg-white sm:pb-16 py-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <!-- title -->
        <div class="max-w-2xl">
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo $item->title; ?></p>
            <p class="mt-2 text-lg leading-8 text-gray-600"><?php echo $item->subtitle; ?></p>
        </div>
        <!-- grid -->
        <div class="mx-auto mt-10">
            <dl class="<?php echo $gridColumns; ?> gap-y-8 grid grid-cols-1 gap-4">
                <?php
                if ($displayGridActivites) {
                    include './inc/GridCardActivities.php';
                } elseif ($displayGridCardFull) {
                    include './inc/GridCardFull.php';
                } elseif ($displayGridCardTour) {
                    include './inc/GridCardTour.php';
                } elseif ($displayGridCardBlog) {
                    include './inc/GridCardBlog.php';
                } elseif ($displayGridUsp) {
                    include './inc/GridCardUsp.php';
                } elseif ($displayGridReview) {
                    include './inc/GridCardTesti.php';
                }
                ?>
            </dl>
        </div>
    </div>
</div>