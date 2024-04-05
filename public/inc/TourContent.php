<div class="mx-auto max-w-2xl px-4 pb-5 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16">
    <!-- gallery tab -->
    <?php include './inc/TourTab.php'; ?>
    <!-- book now right side bar -->
    <?php include './inc/TourSideBar.php'; ?>
    <!-- content -->
    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:pb-16 lg:pr-8 lg:pt-6">
        <!-- discount code -->
        <div id="detail">
            <?php include './inc/TourDiscountCode.php'; ?>
            <!-- tour feature -->
            <div class="grid grid-cols-3 gap-4 mt-10">
                <!-- region -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/location-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Region</p>
                        <p class="text-gray-500">South Africa</p>
                    </div>
                </div>
                <!-- duration -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/duration-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Duration</p>
                        <!-- <p class="text-gray-500">6 Days 5 Nights</p> -->
                        <span>6</span>
                        <!-- static -->
                        <span>Days</span>
                        <span>5</span>
                        <!-- static -->
                        <span>Nights</span>
                    </div>
                </div>
                <!-- Group Size -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/group-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Group Size</p>
                        <!-- <p class="text-gray-500">40 People</p> -->
                        <span>40</span>
                        <!-- static -->
                        <span>People</span>
                    </div>
                </div>
                <!-- Age -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/age-icon.svg">
                    <div>
                        <p class="font-semibold text-black">Age</p>
                        <p class="text-gray-500">10+</p>
                    </div>
                </div>
                <!-- Cancellation  -->
                <div class="flex items-center gap-4">
                    <img class="w-[48px]" src="./assets/images/tour-gallery/cancellation-icon.svg">
                    <div class="">
                        <p class="font-semibold text-black">Cancellation</p>
                        <!-- **open new tab to policy page** -->
                        <a href="">
                            <p class="text-gray-500 underline">Moderate</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- intro and highlights -->
            <?php include './inc/TourIntro.php'; ?>
        </div>
        <!-- Itinerary -->
        <?php include './inc/TourItenerary.php'; ?>
        <!-- Map -->
        <?php include './inc/TourMap.php'; ?>
        <!-- Tour Package -->
        <?php include './inc/TourPackage.php'; ?>
        <!-- Tour Review -->
        <?php include './inc/TourReview.php'; ?>

    </div>
</div>