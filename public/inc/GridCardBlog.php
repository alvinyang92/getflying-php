<?php
// JSON data
$gridCardBlog = '[
    {
        "image": {
            "filename": "./assets/images/blog-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "20 Jan 2024",
        "title": "Revolutionising the travel industry, one partnership at a time",
        "desc": "Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started."
    },
    {
        "image": {
            "filename": "./assets/images/blog-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "20 Jan 2024",
        "title": "Revolutionising the travel industry, one partnership at a time",
        "desc": "Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started."
    },
    {
        "image": {
            "filename": "./assets/images/blog-01.jpg",
            "alt": "The Hidden World"
        },
        "label": "20 Jan 2024",
        "title": "Revolutionising the travel industry, one partnership at a time",
        "desc": "Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started."
    }
    
    
]';

// Decode JSON data
$items = json_decode($gridCardBlog);

// Loop through each item in the JSON array
foreach ($items as $item) {
?>
    <div class="flex flex-col">
        <div class="mb-3 relative">
            <div class="z-10 absolute m-2"></div>
            <img src="<?php echo $item->image->filename; ?>" alt="<?php echo $item->image->alt; ?>" class="rounded-lg h-[200px] object-cover w-full">
        </div>
        <dt class="text-gray-600">
            <p class="text-sm font-semibold"><?php echo $item->label; ?></p>
            <h4 class="font-bold mt-1"><?php echo $item->title; ?></h4>
            <p class="mt-2"><?php echo $item->desc; ?></p>
        </dt>
    </div>
<?php
}
?>
