<div class="mx-auto max-w-2xl px-4 pb-5 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16">
    <!-- gallery tab -->
    <?php include './inc/ActivityTab.php'; ?>
    <!-- book now right side bar -->
    <?php include './inc/ActivitySideBar.php'; ?>
    <!-- content -->
    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:pb-16 lg:pr-8 lg:pt-6">
        <!-- discount code -->
        <div id="detail">
            <?php include './inc/TourDiscountCode.php'; ?>
            <!-- tour feature -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10">
                <!-- location -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/location-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Location</p>
                        <!-- **anchor link to map section** -->
                        <a href="#map">
                            <p class="text-gray-500 underline">Pulau Cenang</p>
                        </a>
                    </div>
                </div>
                <!-- level -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/level-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Level</p>
                        <p class="text-gray-500">Extreme</p>
                    </div>
                </div>
                <!-- language -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/language-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Language</p>
                        <p class="text-gray-500">English</p>
                    </div>
                </div>
                <!-- age -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/age-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Age</p>
                        <p class="text-gray-500">10+</p>
                    </div>
                </div>
                <!-- Duration -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/duration-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Duration</p>
                        <span>1</span>
                        <!-- static -->
                        <span>hour</span>
                        <span>30</span>
                        <!-- static -->
                        <span>Min</span>
                    </div>
                </div>
                <!-- Cancellation  -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/cancellation-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Cancellation</p>
                         <!-- **open new tab to policy page** -->
                         <a href="">
                            <p class="text-gray-500 underline">Flexible</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- intro and highlights -->
            <?php include './inc/TourIntro.php'; ?>
        </div>
        <!-- Map -->
        <?php include './inc/TourMap.php'; ?>
        <!-- Tour Package -->
        <?php include './inc/ActivityPackage.php'; ?>
        <!-- Tour Review -->
        <?php include './inc/TourReview.php'; ?>

    </div>
</div>


