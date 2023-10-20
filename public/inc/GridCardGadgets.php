<?php
// JSON data
$gridCardData = '[

     {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    },
    {
        "discount": "50%",
        "image": {
            "filename": "https://images.unsplash.com/photo-1696257203553-20ada15fce65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3958&q=80",
            "alt": "The Hidden World"
        },
        "title": "Red Bag",
        "price": "450",
        "slash_price": "4,500"
    }
     
    
]';

// Decode JSON data
$item = json_decode($gridCardData);
?>



<?php foreach ($item as $items) { ?>
    <div class="">
        <a href="gadgets-details.php">
            <!-- image -->
            <div class="mb-3 relative">
                <div class="z-10 absolute m-2">
                    <span class="bg-gf-orange text-white text-xs font-medium px-2 py-0.5 rounded-md"><?php echo $items->discount; ?>OFF</span>
                </div>
                <img class="rounded-lg h-[200px] object-cover w-full" src="<?php echo $items->image->filename; ?>" alt="<?php echo $items->image->alt; ?>" />
            </div>
            <!-- title -->
            <dt class="text-gray-600">
                
                <!-- title -->
                <h4 class="font-bold mt-1"><?php echo $items->title; ?></h4>
            </dt>
            <!-- price -->
            <dd class="mt-4 flex items-center gap-2">
                <h3 class="text-2xl font-bold text-gf-light-blue">RM <?php echo $items->price; ?></h3>
                <s class="text-gray-400 font-medium">RM <?php echo $items->slash_price; ?></s>
            </dd>
        </a>
    </div>
<?php } ?>