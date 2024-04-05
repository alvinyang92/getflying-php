<?php
// JSON data
$gridCardFull = '[
    {
        "country": "Africa",
        "tour": "5",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "The Hidden World"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    },
    {
        "country": "Asia",
        "tour": "10",
        "image": {
            "filename": "./assets/images/tour-destination-01.jpg",
            "alt": "Beautiful Landscape"
        }
    }
  
]';

// Decode JSON data
$items = json_decode($gridCardFull);
?>

<?php foreach ($items as $item) { ?>
    <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-36 sm:pt-48">
        <img src="<?php echo $item->image->filename; ?>" alt="<?php echo $item->image->alt; ?>" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/10"></div>
        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"></div>
        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
            <a>
                <span class="absolute inset-0"></span>
                <?php echo $item->country; ?>
            </a>
        </h3>
        <h4 class="text-white mt-1">
            <?php echo $item->tour; ?> Tours
        </h4>
    </div>
<?php } ?> 



<!-- <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48">
  <img src="./assets/images/tour-destination-01.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
  <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/10"></div>
  <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"></div>
  <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
    <a>
      <span class="absolute inset-0"></span>
      dwdwd
    </a>
  </h3>
  <h4 class="text-white mt-1">
    4 Tours
  </h4>
</div> -->