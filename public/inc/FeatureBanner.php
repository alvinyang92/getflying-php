<?php
// JSON data
$bannerImg = '[
     {
         "title": "Find",
         "subtitle": "Destination / Activity",
         "image": {
             "filename": "./assets/images/home-banner-02.jpg",
             "alt": "The Hidden World"
         }
     },
     {
         "title": "Find",
         "subtitle": "Destination / Activity",
         "image": {
             "filename": "./assets/images/home-banner-01.jpg",
             "alt": "The Hidden World"
         }
     }
     
     
 ]';

// Decode JSON data
$items = json_decode($bannerImg);
?>



<div class="relative h-[500px] overflow-hidden">
    <!-- img repeater -->
    <div class="owl-1 owl-carousel owl-theme ">
        <?php foreach ($items as $item) { ?>
            <img class="absolute inset-0 -z-10  overflow-hidden w-full object-cover h-[500px]" src="<?php echo $item->image->filename; ?>" alt="<?php echo $item->image->alt; ?>">
        <?php } ?>
    </div>
    <!-- fixed item -->
    <div id="top-layer-div" class=" absolute inset-0 flex flex-col items-center justify-center z-[99] bg-black/20">
        <!-- title -->
        <div class="mx-auto max-w-2xl text-center z-50 relative ">
            <p class="text-lg leading-8 text-white">Open your eyes to</p>
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">The Hidden World</h2>
        </div>
        <!-- searchbar -->
        <div class="flex flex-col w-full md:w-auto px-10 md:flex-row mb-[-7.5rem] mt-10 sm:mt-20">
            <!-- search -->
            <div class="w-full md:w-[307px]">
                <?php include './inc/Search.php'; ?>
            </div>
            <!-- date -->
            <div class="w-full md:w-[200px]">
                <?php include './inc/Date.php'; ?>
            </div>
            <div class="">
                <button class="block w-full p-4 px-10 text-sm font-semibold text-white border border-gf-light-blue  border-l-0 bg-gf-light-blue focus:ring-gf-light-blue focus:border-gf-light-blue">Search</button>
            </div>
        </div>
    </div>

</div>