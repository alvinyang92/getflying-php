<div id="openOverlay" class="cursor-pointer mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-4 lg:gap-x-3 lg:px-8">
    <div class="cursor-pointer aspect-h-3 aspect-w-3 hidden overflow-hidden rounded-lg lg:block col-span-2">
        <!-- image 1 -->
        <img src="./assets/images/activity/a-01.jpg" alt="Two each of gray, white, and black shirts laying flat." class="w-full object-cover object-center">
    </div>
    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-4">
        <div class="cursor-pointer aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">

            <!-- image 2 -->
            <img src="./assets/images/activity/a-02.jpg" alt="Model wearing plain black basic tee." class="w-full object-cover object-center">
        </div>
        <div class="cursor-pointer aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">

            <!-- image 3 -->
            <img src="./assets/images/activity/a-03.jpg" alt="Model wearing plain black basic tee." class="w-full object-cover object-center">
        </div>
    </div>
    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-4">
        <div class="cursor-pointer aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">

            <!-- image 4 -->
            <img src="./assets/images/activity/a-04.jpg" alt="Model wearing plain black basic tee." class="w-full object-cover object-center">
        </div>
        <div class="cursor-pointer aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">

            <!-- image 5 -->
            <img src="./assets/images/activity/a-05.jpg" alt="Model wearing plain black basic tee." class="w-full object-cover object-center">
        </div>
    </div>
</div>

<!-- trigger buttpn -->
<!-- <button id="openOverlay" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Open Overlay</button> -->

<!-- Overlay content -->
<div id="overlay" class="fixed inset-0 overflow-auto bg-black/80 z-[99999] ">
    <div class="absolute inset-0 flex items-center justify-center">
        <!-- Close button -->
        <button id="closeOverlay" class="absolute top-4 right-4 text-black bg-white rounded-full p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- banner -->
        <div class="w-full owl-2-1 inner owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative">
            <!-- item -->
            <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />
            <!-- item -->
            <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />
            <!-- item -->
            <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />

        </div>
        <!-- right arrow -->
        <div class="absolute inset-y-0 right-12 z-10 flex flex-col justify-center ">
            <div class="rounded-full cursor-pointer bg-white p-3 slider2-1-next-btn ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <!-- left arrow -->
        <div class="absolute inset-y-0 left-12 z-10 flex flex-col justify-center ">
            <div class="rounded-full cursor-pointer bg-white p-3 slider2-1-prev-btn ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="lg:hidden">
    <!-- banner -->
    <div class="w-full owl-2-1 inner owl-carousel owl-theme max-w-6xl mx-auto overflow-hidden relative">
        <!-- item -->
        <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />
        <!-- item -->
        <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />
        <!-- item -->
        <img src="https://www.guyub.co/wp-content/uploads/2022/04/Perspective-2_Day-View.jpg" class="object-cover" />

    </div>
    <!-- right arrow -->
    <div class="absolute inset-y-0 top-10 right-4 z-10 flex flex-col justify-center ">
        <div class="rounded-full cursor-pointer bg-white/50 p-3 slider2-1-next-btn ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    <!-- left arrow -->
    <div class="absolute inset-y-0 left-4 z-10 flex flex-col justify-center ">
        <div class="rounded-full cursor-pointer bg-white/50 p-3 slider2-1-prev-btn ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-guyub-black" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</div>

<style>
    /* Style for the overlay */
    #overlay {
        display: none;
        @apply fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50;
    }

    /* Style for the overlay content */
    #overlay-content {
        @apply bg-white p-6 rounded-lg shadow-lg;
    }
</style>