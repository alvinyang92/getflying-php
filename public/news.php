<?php
$title = "Gadgets - Getflying ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/nav.php';
?>

<div class="bg-white pb-16 ">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- grid -->
        <div class="mx-auto mt-10 max-w-2xl lg:max-w-none">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Blog</h2>
            <dl class="mt-10 lg:grid-cols-4 gap-y-16 grid grid-cols-1 gap-4">
                <?php include './inc/GridCardBlogFull.php'; ?>

            </dl>
        </div>
        <?php include './inc/Pagination.php'; ?>
    </div>

</div>



<?php include './inc/footer.php'; ?>