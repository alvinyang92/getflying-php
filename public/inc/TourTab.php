<div class="lg:col-span-2 lg:pr-8 top-0 sticky bg-white z-[999]">
    <div class="">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select a tab</label>
            <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-gf-dark-blue focus:outline-none focus:ring-gf-dark-blue sm:text-sm">
                <option value="#detail" selected="">Details</option>
                <option value="#itinerary">Itinerary</option>
                <option value="#package">Package Options</option>
                <option value="#map">Map</option>
                <option value="#review">Reviews</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <a href="#detail" class="border-gf-dark-blue text-gf-dark-blue whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium tab">Details</a>
                    <a href="#itinerary" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium tab">Itinerary</a>
                    <a href="#map" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium tab">Map</a>
                    <a href="#package" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium tab">Package Options</a>
                    <a href="#review" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium tab">Reviews</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    const tabs = document.querySelectorAll('.tab');
    const tabLinks = document.querySelectorAll('a[href^="#"]');
    
    // Function to highlight the selected tab
    function selectTab(tabId) {
        // Remove the active classes from all tabs
        tabs.forEach(t => {
            t.classList.remove('border-gf-dark-blue', 'text-gf-dark-blue');
            t.classList.add('text-gray-500', 'border-transparent');
        });

        // Add active classes to the selected tab
        tabId.classList.add('border-gf-dark-blue', 'text-gf-dark-blue');
        tabId.classList.remove('text-gray-500', 'border-transparent');
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
                    selectTab(document.querySelector(`.tab[href="${tabLink.getAttribute('href')}"]`));
                }
            }
        });
    }

    // Attach click event listeners to the tabs
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            selectTab(tab);
        });
    });

    // Attach scroll event listener to select tabs as you scroll
    window.addEventListener('scroll', handleScroll);

    // Select the default tab (e.g., "Details") when the page loads
    selectTab(document.querySelector('.tab[href="#detail"]'));

    // Handle initial tab selection based on URL hash
    if (window.location.hash) {
        const hashTab = document.querySelector(`.tab[href="${window.location.hash}"]`);
        if (hashTab) {
            selectTab(hashTab);
        }
    }
</script>
