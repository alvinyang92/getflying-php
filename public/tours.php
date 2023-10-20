<?php
$title = "Tour - Getflying ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/nav.php';
?>

<div class="bg-white pb-16 ">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
   
        <?php include './inc/BookingPanel.php'; ?>
        <!-- grid -->
        <h2 class="text-2xl mt-10 font-bold tracking-tight text-gray-900">Tours</h2>
        <div class="mx-auto mt-10 max-w-2xl lg:max-w-none">
            <dl class="lg:grid-cols-4 gap-y-16 grid grid-cols-1 gap-4">
                <?php include './inc/GridCardTour.php'; ?>

            </dl>
        </div>
        <?php include './inc/Pagination.php'; ?>
    </div>

</div>

<?php include './inc/footer.php'; ?>