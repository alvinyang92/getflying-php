<div class="lg:col-span-2 lg:pr-8 top-0 sticky bg-white ">
    <div class="">
        <!-- mobile -->
        <!-- <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select a tab</label>
            <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-gf-dark-blue focus:outline-none focus:ring-gf-dark-blue sm:text-sm">
                <option value="#detail" selected="">
                    <a href="#detail">Detail</a>
                </option>
                <option value="#itinerary">Itinerary</option>
                <option value="#map">Map</option>
                <option value="#package">Package Options</option>
                <option value="#review">Reviews</option>
            </select>
        </div> -->
        <!-- mobile -->
        <div class="sm:hidden">
            <div class="border-b border-gray-200">
                <nav class="snap-mandatory snap-x -mb-px flex space-x-8 overflow-x-auto overflow-y-hidden" aria-label="Tabs">
              
                    <div class="snap-center">
                        <a href="#detail" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Details</a>
                    </div>
                    <div class="snap-center">
                        <a href="#itinerary" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Itinerary</a>
                    </div>
                    <div class="snap-center">
                        <a href="#map" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Map</a>
                    </div>
                    <div class="snap-center">
                        <a href="#package" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Package Options</a>
                    </div>
                    <div class="snap-center">
                        <a href="#review" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Reviews</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- desktop -->
        <div class="hidden sm:block">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
              
                    <a href="#detail" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Details</a>
                    <a href="#itinerary" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Itinerary</a>
                    <a href="#map" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Map</a>
                    <a href="#package" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Package Options</a>
                    <a href="#review" class="text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 text-sm font-medium tab">Reviews</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<script>
    const tabLinks = document.querySelectorAll('.tab');
    
    // Function to highlight the selected tab
    function selectTab(tabId) {
        // Remove the active classes from all tabs
        tabLinks.forEach(t => {
            // t.classList.remove ('text-gray-500', 'border-transparent', 'border-b-2');
            // t.classList.add('border-gf-dark-blue', 'text-gf-dark-blue', 'border-b-2');
        });

        // Add active classes to the selected tab
        // tabId.classList.add ('border-gf-dark-blue', 'text-gf-dark-blue', 'border-b-2');
        // tabId.classList.remove('text-gray-500', 'border-transparent', 'border-b-2');
    }

    // Function to handle scroll and select the appropriate tab
    function handleScroll() {
        const scrollPosition = window.scrollY;

        tabLinks.forEach(tabLink => {
            const target = document.querySelector(tabLink.getAttribute('href'));
            
            if (target) {
                const targetPosition = target.offsetTop;
                const targetHeight = target.offsetHeight;

                if (scrollPosition >= targetPosition && scrollPosition < targetPosition + targetHeight) {
                    // Select the tab that corresponds to the section in the viewport
                    selectTab(tabLink);
                }
            }
        });
    }

    // Attach click event listeners to the tabs
    tabLinks.forEach(tabLink => {
        tabLink.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default link behavior
            const targetTab = document.querySelector(event.currentTarget.getAttribute('href'));
            if (targetTab) {
                // Scroll to the selected tab content
                window.scrollTo({
                    top: targetTab.offsetTop - document.querySelector('.lg:col-span-2').offsetHeight, // Adjust for sticky header
                    behavior: 'smooth'
                });
            }
        });
    });

    // Attach scroll event listener to select tabs as you scroll
    window.addEventListener('scroll', handleScroll);

    // Handle initial tab selection based on URL hash
    if (window.location.hash) {
        const hashTab = document.querySelector(`.tab[href="${window.location.hash}"]`);
        if (hashTab) {
            selectTab(hashTab);
        }
    }
</script>
