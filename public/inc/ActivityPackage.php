<?php
// Manually set a specific date
$today = new DateTime('2024-03-19'); // Example date: March 19, 2024

// Get today's day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
$dayOfWeek = (int)$today->format('w');

// JSON data
$gridCardData = '[
     {
        "id": "1",
        "title":"[GetFlying Exclusive] Admission Ticket + RM10 Pizza Voucher",
        "days": ["Option 1", "Option 2", "Option 3"]

    },
     {
        "id": "2",
        "title":"[GetFlying Exclusive] Admission Ticket + RM10 Gong Cha Voucher"

    }
]';

// Decode JSON data
$item = json_decode($gridCardData);
?>


<div x-data="{selected:null}" id="package" class="pb-5">
    <!-- About This Tour-->
    <div class="mt-10">
        <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Sunway Lagoon Water Theme Park Package Options</h2>
    </div>

    <!-- date picker -->
    <div class="mt-3 flex gap-3">
        <!-- item1 -->
        <button><span class="selected selectable-item inline-flex items-center rounded-full  px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">Today</span></button>

        <!-- Selected -->
        <button><span class=" selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">Tomorrow</span></button>

        <!-- item1 -->
        <button><span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">14 Mar</span></button>
        <!-- item1 -->
        <button><span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">15 Mar</span></button>
        <!-- item1 -->
        <button><span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">16 Mar</span></button>
        <!-- item1 -->
        <!-- <button><span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">17 Mar</span></button> -->
        <!-- item1 -->
        <!-- <button><span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">18 Mar</span></button> -->
        <!-- item1 -->
        <!-- <button>
            <span class="selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">19 Mar
            </span>
        </button> -->
        <!--  -->
        <!-- Date -->
        <button>
            <span class=" datepicker selectable-item inline-flex items-center rounded-full bg-white px-[16px] py-[10px] text-xs font-bold text-black ring-1 ring-inset ring-gray-800/10" onclick="toggleSelection(this)">
                All Dates
            </span>
        </button>


    </div>



    <!-- dynamic item -1 -->
    <?php foreach ($item as $items) { ?>

        <!-- card -->
        <div id="<?php echo $items->id; ?>" class="mt-8">

            <!-- row-1-header+title -->
            <div class="flex justify-between p-3 px-4 bg-gf-dark-blue rounded-none rounded-tr-lg rounded-tl-lg text-white font-semibold">
                <div class="">
                    <h3><?php echo $items->title; ?></h3>
                </div>
                <button @click="selected !== <?php echo $items->id; ?> ? selected = <?php echo $items->id; ?> : selected = null">
                    <!-- arrow -->
                    <div :class="{'rotate-180': selected == <?php echo $items->id; ?>, 'rotate-0': selected !== <?php echo $items->id; ?>}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
            </div>

            <!-- row-2 -->
            <div class="border px-5 pb-4 rounded-none rounded-br-lg rounded-bl-lg">
                <!-- badges -->
                <div class="mt-5 flex flex-wrap gap-3">
                    <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">No Cancellation</span>
                    <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Instant Confirmation</span>
                    <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Fixed Date Booking</span>
                    <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Collect physical Ticket</span>
                    <span class="inline-flex items-center rounded-full bg-[#FFEAE6] px-2 py-1 text-sm text-[#F05A28] ring-1 ring-inset ring-[#F05A28]">Save 10%</span>
                </div>
                <!-- introduction -->
                <div class="mt-5">
                    <p class="text-gray-600 line-clamp-2">This 1-day admission includes entry to all parks, namely the Amusement Park, Water Park, Wildlife Park, Scream Park, Extreme amely the Amusement Park, Water Park.This 1-day admission includes entry to all parks, namely the Amusement Park, Water Park, Wildlife Park, Scream Park, Extreme amely the Amusement Park, Water Park</p>
                </div>

                <!-- Package details -->
                <dt>
                    <div class="mt-5 flex w-full items-center justify-between text-left text-gray-900">

                        <!-- package button -->
                        <button type="button" data-drawer-target="drawer-<?php echo $items->id; ?>" data-drawer-show="drawer-<?php echo $items->id; ?>" data-drawer-placement="right" aria-controls="drawer-<?php echo $items->id; ?>">
                            <div class=" flex gap-4 items-center">
                                <div class="text-gf-light-blue flex items-center gap-1">
                                    <span class="mb-0.5 border-b border-b-gf-light-blue font-bold">Package Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </div>
                            </div>
                        </button>

                        <!-- price-button -->
                        <a href="#<?php echo $items->id; ?>">
                            <div @click="selected !== <?php echo $items->id; ?> ? selected = <?php echo $items->id; ?> : selected = null" :class="{'hidden': selected == <?php echo $items->id; ?>, 'rotate-0': selected !== <?php echo $items->id; ?>}" class="flex items-center gap-3">
                                <!-- price -->
                                <div class="font-bold text-xl text-center">
                                    <span class="font-normal text-sm text-gray-500 line-through">RM90.00</span>
                                    RM85.50
                                </div>
                                <!-- button -->
                                <button>
                                    <div class="flex w-full items-center gap-x-1 justify-center rounded-md border border-transparent bg-gf-light-blue px-2 py-2 font-medium text-white">
                                        Select
                                        <!-- arrow -->
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </a>
                    </div>
                </dt>
                <!-- expand -->
                <dd class="mt-5 relative overflow-hidden max-h-0 " x-ref="container<?php echo $items->id; ?>" x-bind:style="selected == <?php echo $items->id; ?> ? 'max-height: ' + $refs['container<?php echo $items->id; ?>'].scrollHeight + 'px' : ''">
                    <div class=" grid grid-cols-2 gap-x-5">
                        <?php include './inc/Calander.php'; ?>
                        <?php include './inc/PlusMinusActivity.php'; ?>
                    </div>
                </dd>


            </div>

        </div>

        <!-- drawer component -1 -->


        <?php include './inc/DrawerDetails.php'; ?>


    <?php } ?>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>
    const $targetEl = document.getElementById('drawer-1');


    const options = {
        placement: 'right',
        backdrop: true,
        bodyScrolling: false,
        edge: false,
        edgeOffset: '',
        backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-[9999]',
        onHide: () => {
            console.log('drawer is hidden');
        },
        onShow: () => {
            console.log('drawer is shown');
        },
        onToggle: () => {
            console.log('drawer has been toggled');
        },
    };


    const instanceOptions = {
        id: 'drawer-1',
        override: true
    };

    const drawer = new Drawer($targetEl, options, instanceOptions);

    // drawer.show();

    function toggleSelection(element) {
        // Remove selected class from all items
        document.querySelectorAll('.selectable-item').forEach(item => {
            item.classList.remove('selected');
        });
        // Add selected class to clicked item
        element.classList.add('selected');
    }

    document.addEventListener("DOMContentLoaded", function() {
        flatpickr(".datepicker", {
            mode: "range",
            minDate: "today",
            dateFormat: "Y-m-d",
            // disable: [
            //     function(date) {
            //         // disable every multiple of 8
            //         return !(date.getDate() % 8);
            //     }
            // ]
        });
    });
</script>

<!-- CSS to style the selected state -->
<style>
    .selected {
        /* Add your selected styles here */
        background-color: #002266;
        /* Green */
        color: white;
    }
</style>