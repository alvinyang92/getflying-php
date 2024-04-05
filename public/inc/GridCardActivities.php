<?php
// JSON data
$gridCardData = '[

     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    },
     {
        "discount": "50%",
        "image": {
            "filename": "./assets/images/activities-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "3 hours",
        "title": "The Walt Disney Family Museum Admission in San Francisco",
        "price": "2,500",
        "slash_price": "4,500"
    }
     
    
]';

// Decode JSON data
$item = json_decode($gridCardData);
?>


<?php foreach ($item as $items) { ?>
    <div class="">
        <!-- image -->
        <div class="mb-3 relative">
            <div class="z-10 absolute m-2">
                <span class="bg-gf-orange text-white text-xs font-medium px-2 py-0.5 rounded-md"><?php echo $items->discount; ?>OFF</span>
            </div>
            <img class="rounded-lg h-[200px] object-cover w-full" src="<?php echo $items->image->filename; ?>" alt="<?php echo $items->image->alt; ?>" />
        </div>
        <!-- title -->
        <dt class="text-gray-600">
            <!-- label title -->
            <p class="text-sm font-semibold"><?php echo $items->label; ?></p>
            <!-- title -->
            <h4 class="font-bold mt-1"><?php echo $items->title; ?></h4>

        </dt>
        <!-- ratings -->
        <div class="">
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-gray-300 mr-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <p class="ml-2 font-medium text-gray-500 dark:text-gray-400">4.95</p>
            </div>
        </div>
        <!-- price -->
        <dd class="mt-4 flex items-center gap-2">
            <h3 class="text-2xl font-bold text-gf-light-blue">RM <?php echo $items->price; ?></h3>
            <s class="text-gray-400 font-medium">RM <?php echo $items->slash_price; ?></s>
        </dd>
    </div>
<?php } ?>