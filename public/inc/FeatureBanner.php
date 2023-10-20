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

<div class="relative h-[500px] ">
    <!-- img repeater -->
    <div class="owl-1 owl-carousel owl-theme ">
            <?php foreach ($items as $item) { ?>
                <img class="absolute inset-0 -z-10  overflow-hidden w-full object-cover h-[500px]" src="<?php echo $item->image->filename; ?>" alt="<?php echo $item->image->alt; ?>">
            <?php } ?>
        </div>
    <!-- fixed item -->
    <div id="top-layer-div" class=" absolute inset-0 flex flex-col items-center justify-center z-[99999] bg-black/20">
        <!-- title -->
        <div class="mx-auto max-w-2xl text-center z-50 relative ">
            <p class="text-lg leading-8 text-white">Open your eyes to</p>
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">The Hidden World</h2>
        </div>
        <!-- searchbar -->
        <div class="flex mt-20">
            <?php include './inc/Search.php'; ?>
            <?php include './inc/Date.php'; ?>
            <div class="">
                <button class="block w-full p-4 px-10 text-sm font-semibold text-white border border-gf-light-blue rounded-lg rounded-l-none border-l-0 bg-gf-light-blue focus:ring-gf-light-blue focus:border-gf-light-blue">Search</button>
            </div>
        </div>
    </div>

</div>