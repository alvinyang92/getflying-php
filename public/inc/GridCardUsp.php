<?php
// JSON data
 $gridCardFull = '[
     {
         "title": "Find",
         "subtitle": "Destination / Activity",
         "image": {
             "filename": "https://a.storyblok.com/f/247397/64x64/cdc12d451b/find.svg",
             "alt": "The Hidden World"
         }
     },
     {
         "title": "Compare",
         "subtitle": "Various agencies and best price under ONE Platform ",
         "image": {
             "filename": "https://a.storyblok.com/f/247397/64x64/2e69a60600/compare.svg",
             "alt": "The Hidden World"
         }
     },
     {
         "title": "Book",
         "subtitle": "Secure your booking",
         "image": {
             "filename": "https://a.storyblok.com/f/247397/64x64/374bf3d5be/calendar.svg",
             "alt": "The Hidden World"
         }
     },
     {
         "title": "Travel",
         "subtitle": "Getflying",
         "image": {
             "filename": "https://a.storyblok.com/f/247397/64x64/ad356d6ccb/travel.svg",
             "alt": "The Hidden World"
         }
     }
 ]';

// Decode JSON data
$items = json_decode($gridCardFull);
?>



<?php foreach ($items as $item) { ?>
    <div class="bg-gradient-to-br from-[#193C94] to-[#3DB9FF] rounded-lg py-12 px-6">
        <div class="flex flex-col">
            <div class="mb-3 relative">
                <div class="z-10 absolute m-2"></div>
                <img 
                src="<?php echo $item->image->filename; ?>" 
                alt="<?php echo $item->image->alt; ?>"
                class="rounded-lg object-cover w-16 mx-auto"
                >
            </div>
            <dt class="text-white text-center">
                <h4 class="font-bold mt-1"><?php echo $item->title; ?></h4>
                <p class="mt-2"> <?php echo $item->subtitle; ?></p>
            </dt>
        </div>
    </div>
<?php } ?>