<?php
$title = "Tours - Getflying ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/nav.php';
?>

<div class="bg-white pb-16 ">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mt-20 sm:mt-0 w-full">
            <?php include './inc/BookingPanel.php'; ?>
        </div>

        <!-- title + dropdown -->
        <div class="mt-10 flex sm:flex-row flex-col justify-between">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Tours</h2>
            <!-- dropdown -->
            <div class="sm:mt-0 mt-3 sm:gap-y-0 gap-y-4 flex flex-wrap sm:flex-row w-full gap-2">
                <?php include './inc/Dropdown.php'; ?>
                <?php include './inc/Dropdown.php'; ?>
                <?php include './inc/Dropdown.php'; ?>
                <?php include './inc/Dropdown.php'; ?>

            </div>
        </div>

        <!-- tours item -->
        <div class="mx-auto mt-10 max-w-2xl lg:max-w-none">
            <dl class="lg:grid-cols-4 gap-y-8 grid grid-cols-1 gap-4">
                <?php include './inc/GridCardTour.php'; ?>

            </dl>
        </div>
        <?php include './inc/Pagination.php'; ?>
    </div>

</div>

<?php include './inc/footer.php'; ?>